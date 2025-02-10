<?php

namespace App\Services\Interfaces;

use App\Models\Page;

interface PageServiceInterface
{
    public function getPages($request, $status = null);
    public function getPage($id);
    public function create(array $request);
    public function update(Page $page, array $request);
    public function destroy(Page $page);
    public function changeStatus(Page $page);
    public function getPageEloquent();
}