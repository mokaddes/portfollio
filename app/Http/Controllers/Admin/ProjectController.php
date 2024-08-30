<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public $projectRepo;
    public $categoryRepo;
    public function __construct()
    {
        $this->projectRepo = new ProjectRepository();
        $this->categoryRepo = new CategoryRepository();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = $this->projectRepo->all();
        $categories = $this->categoryRepo->all();
        return view('admin.projects.index', compact('projects', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $data = $request->except('_token');
        $data['image'] = 'images/'.$imageName;
        $this->projectRepo->create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
