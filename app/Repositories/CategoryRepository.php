<?php

namespace App\Repositories;


use App\Models\Category;
use Illuminate\Support\Str;

class CategoryRepository
{
    public function all()
    {
        return Category::all();
    }


    public function create($data)
    {
        $data['slug'] = Str::slug($data['name']);
        return Category::create($data);
    }

    public function update($data, $id)
    {
        return Category::where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return Category::where('id', $id)->delete();
    }
}
