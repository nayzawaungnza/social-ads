<?php

namespace App\Services\Interfaces;

use App\Models\Project;

interface ProjectServiceInterface
{
    public function getProjects($request, $status = null);
    public function getProject($id);
    public function create(array $request);
    public function update(Project $project, array $request);
    public function destroy(Project $project);
    public function changeStatus(Project $project);
    public function getProjectEloquent();
}