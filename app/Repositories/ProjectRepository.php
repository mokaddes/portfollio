<?php

namespace App\Repositories;


use App\Models\Project;
use Illuminate\Support\Str;

class ProjectRepository
{
    public function all()
    {
        return Project::all();
    }


    public function create($data)
    {
        $data['slug'] = Str::slug($data['name']);
        return Project::create($data);
    }

    public function update($data, $id)
    {
        return Project::where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return Project::where('id', $id)->delete();
    }
}
