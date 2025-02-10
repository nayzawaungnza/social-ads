<?php

namespace App\Services\Interfaces;

use App\Models\Post;

interface PostServiceInterface
{
    public function getPosts($request, $status = null);
    public function getPost($id);
    public function create(array $request);
    public function update(Post $post, array $request);
    public function destroy(Post $post);
    public function changeStatus(Post $post);
    public function getPostEloquent();
}