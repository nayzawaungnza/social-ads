<?php

namespace App\Repositories\Backend;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Backend\ImageRepository;

class ServiceRepository extends BaseRepository
{
    public function model()
    {
        return Service::class;
    }

    public function getServices($request, $status = null)
    {

    }
    public function getService($id)
    {

    }
    public function create(array $data)
    {
        $path_name = "services";
        $service = Service::create([
        'name' => $data['name'],
        'description' => $data['description'],
        'excerpt' => $data['excerpt'],
        'status' => isset($data['status']) ? $data['status'] : 1,
        'created_by' => auth()->user()->id,
        ]);

        if(isset($data['default_image']))
        {
            $imageRepository = new ImageRepository();
            $image_path = $imageRepository->create_file($data['default_image'], $path_name, config('constants.LABEL_NAME.SERVICE'));
            $image_data['resourceable_type'] = 'Service';
            $image_data['resourceable_id'] = $service->id;
            $image_data['image_url'] = $path_name . '/' .$image_path;
            $image_data['is_default'] = config('constants.STATUS_TRUE');
            $image = $imageRepository->create($image_data);
        }

        if (isset($data['images'])) {
            foreach ($data['images'] as $key => $file) {
                $image_path = $imageRepository->create_file($file, $path_name, config('constants.LABEL_NAME.SERVICE'));
                $image_data['resourceable_type'] = 'Service';
                $image_data['resourceable_id'] = $service->id;
                $image_data['image_url'] = $path_name . '/' .$image_path;
                $image_data['is_default'] = config('constants.STATUS_FALSE');
                $image = $imageRepository->create($image_data);
            }
        }

        
        // save activity in activitylog
        $activity_data['subject'] = $service;
        $activity_data['event'] = config('constants.ACTIVITY_LOG.CREATED_EVENT_NAME');
        $model_type = (class_basename(auth()->user()->getModel()) === config('constants.LABEL_NAME.USER'))
            ? 'User'
            : class_basename(auth()->user()->getModel());
        $activity_data['description'] = sprintf('%s(%s) create service (%s).', $model_type, auth()->user()->name, $service->name);
        saveActivityLog($activity_data);

        return $service;
    }
    public function update(Service $service, array $data)
    {
        $path_name = 'services';
        $imageRepository = new ImageRepository();

        
       $service->update([
                'name' => $data['name'] ?? $service->name,
                'description' => $data['description'] ?? $service->description,
                'excerpt' => $data['excerpt'] ?? $service->excerpt,
                'status' => isset($data['status']) ? $data['status'] : $service->status,
                'updated_by' => auth()->user()->id
        ]);


        if(isset($data['default_image']) && $data['default_image'])
        {       logger($service->default_image);
                if($service->default_image){
                $previous_default_image = $service->default_image;
                logger($previous_default_image);
                $medium_img = Str::replaceLast('.', config('constants.IMAGE_FILE_NAME.MEDIUM'), $previous_default_image->image_url);
                Storage::disk('public')->delete($path_name . '/' . $medium_img);
                Storage::disk('public')->delete($path_name . '/' . $previous_default_image->image_url);
                $imageRepository->destroy($previous_default_image);
                }
        }

        if (isset($data['default_image'])) {
            $image_path = $imageRepository->create_file($data['default_image'], $path_name, config('constants.LABEL_NAME.SERVICE'));
            logger($image_path);
            $image_data['resourceable_type'] = 'Service';
            $image_data['resourceable_id'] = $service->id;
            $image_data['image_url'] = $path_name . '/' . $image_path;
            $image_data['is_default'] = config('constants.STATUS_TRUE');
            $image = $imageRepository->create($image_data);
        }

        if (isset($data['images'])) {
            foreach ($data['images'] as $key => $file) {
                $image_path = $imageRepository->create_file($file, $path_name, config('constants.LABEL_NAME.SERVICE'));
                $image_data['resourceable_type'] = 'Service';
                $image_data['resourceable_id'] = $service->id;
                $image_data['image_url'] = $path_name . '/' .$image_path;
                $image_data['is_default'] = config('constants.STATUS_FALSE');
                $image = $imageRepository->create($image_data);
            }
        }
        
        // save activity in activitylog
        $activity_data['subject'] = $service;
        $activity_data['event'] = config('constants.ACTIVITY_LOG.UPDATED_EVENT_NAME');
        $model_type = (class_basename(auth()->user()->getModel()) === config('constants.LABEL_NAME.USER'))
            ? 'User'
            : class_basename(auth()->user()->getModel());
        $activity_data['description'] = sprintf('%s(%s) update service (%s).', $model_type, auth()->user()->name, $service->name);
        saveActivityLog($activity_data);

        return $service;

    }
    public function destroy(Service $service)
    {
        $deleted = $this->deleteById($service->id);
        if ($deleted) {
            $service->save();
        }

        // save activity in activitylog
        $activity_data['subject'] = $service;
        $activity_data['event'] = config('constants.ACTIVITY_LOG.DELETED_EVENT_NAME');
        $model_type = (class_basename(auth()->user()->getModel()) === config('constants.LABEL_NAME.USER'))
            ? 'User'
            : class_basename(auth()->user()->getModel());
        $activity_data['description'] = sprintf('%s(%s) delete service(%s).', $model_type, auth()->user()->name, $service->name);
        saveActivityLog($activity_data);
    }
    public function changeStatus(Service $service)
    {
        if ($service->status == 0) {
            $service->status = 1;
        } else {
            $service->status = 0;
        }
        if ($service->isDirty()) {
            $service->updated_by = auth()->user()->id;
            $service->save();
        }

        // save activity in activitylog
        $activity_data['subject'] = $service->refresh();
        $activity_data['event'] = config('constants.ACTIVITY_LOG.UPDATED_EVENT_NAME');
        $model_type = (class_basename(auth()->user()->getModel()) === config('constants.LABEL_NAME.USER'))
            ? 'User'
            : class_basename(auth()->user()->getModel());
        $activity_data['description'] = sprintf('%s(%s) update service(%s) status.', $model_type, auth()->user()->name, $service->name);
        saveActivityLog($activity_data);
        return $service;
    }
    public function getServiceEloquent()
    {
        return Service::query()
            ->with('updatedBy')
            ->with('createdBy')
            ->with('default_image');
    }
}