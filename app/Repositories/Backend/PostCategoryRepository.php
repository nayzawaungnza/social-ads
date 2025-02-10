<?php

namespace App\Repositories\Backend;

use App\Models\PostCategory;
use App\Repositories\BaseRepository;
use App\Repositories\Backend\ImageRepository;

class PostCategoryRepository extends BaseRepository
{
    public function model()
    {
        return PostCategory::class;
    }

    public function getPostCategories($request, $status)
    {
       return $this->model->where('status', $status)
                    ->whereNull('parent_id')
                    ->with('children')->get();
    }
    public function getPostCategory($id)
    {

    }
    public function create(array $data)
    {
        $postCategory = PostCategory::create([
        'parent_id'=> isset($data['parent_category']) ? $data['parent_category'] : null,
        'name' => $data['name'],
        'description' => isset($data['description']) ? $data['description'] : null,
        'status' => isset($data['status']) ? $data['status'] : 1,
        'created_by' => auth()->user()->id,
        ]);

        // save activity in activitylog
        $activity_data['subject'] = $postCategory;
        $activity_data['event'] = config('constants.ACTIVITY_LOG.CREATED_EVENT_NAME');
        $model_type = (class_basename(auth()->user()->getModel()) === config('constants.LABEL_NAME.USER'))
            ? 'User'
            : class_basename(auth()->user()->getModel());
        $activity_data['description'] = sprintf('%s(%s) create post category (%s).', $model_type, auth()->user()->name, $postCategory->name);
        saveActivityLog($activity_data);

        return $postCategory;
    }
    public function update(PostCategory $postCategory, array $data)
    {
        $postCategory->update([
            'parent_id'=> isset($data['parent_category']) ? $data['parent_category'] : $postCategory->parent_id,
            'name' => $data['name'] ?? $postCategory->name,
            'description' => isset($data['description']) ? $data['description'] : $postCategory->description,
            'status' => isset($data['status']) ? $data['status'] : $postCategory->status,
            'updated_by' => auth()->user()->id
        ]);

        // save activity in activitylog
        $activity_data['subject'] = $postCategory;
        $activity_data['event'] = config('constants.ACTIVITY_LOG.UPDATED_EVENT_NAME');
        $model_type = (class_basename(auth()->user()->getModel()) === config('constants.LABEL_NAME.USER'))
            ? 'User'
            : class_basename(auth()->user()->getModel());
        $activity_data['description'] = sprintf('%s(%s) update Post category (%s).', $model_type, auth()->user()->name, $postCategory->name);
        saveActivityLog($activity_data);

        return $postCategory;
    }
    public function destroy(PostCategory $postCategory)
    {
        $deleted = $this->deleteById($postCategory->id);
        if ($deleted) {
            $postCategory->save();
        }

        // save activity in activitylog
        $activity_data['subject'] = $postCategory;
        $activity_data['event'] = config('constants.ACTIVITY_LOG.DELETED_EVENT_NAME');
        $model_type = (class_basename(auth()->user()->getModel()) === config('constants.LABEL_NAME.USER'))
            ? 'User'
            : class_basename(auth()->user()->getModel());
        $activity_data['description'] = sprintf('%s(%s) delete user(%s).', $model_type, auth()->user()->name, $postCategory->name);
        saveActivityLog($activity_data);
    }
    public function changeStatus(PostCategory $postCategory)
    {
        if ($postCategory->status == 0) {
            $postCategory->status = 1;
        } else {
            $postCategory->status = 0;
        }
        if ($postCategory->isDirty()) {
            $postCategory->updated_by = auth()->user()->id;
            $postCategory->save();
        }

        // save activity in activitylog
        $activity_data['subject'] = $postCategory->refresh();
        $activity_data['event'] = config('constants.ACTIVITY_LOG.UPDATED_EVENT_NAME');
        $model_type = (class_basename(auth()->user()->getModel()) === config('constants.LABEL_NAME.USER'))
            ? 'User'
            : class_basename(auth()->user()->getModel());
        $activity_data['description'] = sprintf('%s(%s) update Post(%s) status.', $model_type, auth()->user()->name, $postCategory->name);
        saveActivityLog($activity_data);
        return $postCategory;
    }
    public function getPostCategoryEloquent()
    {
        return PostCategory::query()
                ->with('children');
    }
}