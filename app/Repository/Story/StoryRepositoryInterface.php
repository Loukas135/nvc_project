<?php

namespace App\Repository\Story;

use App\Http\Requests\CreateStoryRequest;

interface StoryRepositoryInterface
{
    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id);

    public function all();
}