<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = \App\Models\Category::with('parent_category')->orderBy('id', 'desc')->paginate(10);
    	return view('admin.category.index')->with(['categories' => $categories]);
    }

    public function create()
    {
    	$categories = \App\Models\Category::whereNull('parent_id')->get();
    	return view('admin.category.add')->with(['categories' => $categories]);
    }

    public function store(Request $request)
    {
    	$validatedData = $request->validate([
	        'name' => 'required',
	    ]);

	    $category = new \App\Models\Category;
	    $category->name = $request->name;
	    if ($request->parent_id > 0) {
	    	$category->parent_id = $request->parent_id;
	    }
	    $category->save();
	    return redirect()->route('categories.index')->with(['status' => 'New Category Added successfully!']);
    }

    public function edit($id)
    {
    	$category = \App\Models\Category::find($id);
    	if ($category) {
	    	$categories = \App\Models\Category::whereNull('parent_id')->get();
	    	return view('admin.category.edit')->with(['category' => $category, 'categories' => $categories]);
	    }
	    return abort(404);
    }

    public function update(Request $request, $id)
    {
    	$validatedData = $request->validate([
	        'name' => 'required',
	    ]);

	    $category = \App\Models\Category::find($id);
	    if ($category) {
		    $category->name = $request->name;
		    if ($request->parent_id > 0) {
		    	$category->parent_id = $request->parent_id;
		    }
		    $category->save();
		    return redirect()->route('categories.index')->with(['status' => 'Category updated successfully!']);
		}
		return abort(404);
    }

    public function destroy($id)
    {
    	$category = \App\Models\Category::find($id);
	    if ($category) {
	    	$category->delete();
	    	return redirect()->route('categories.index')->with(['status' => 'Category deleted successfully!']);
	    }
	    return abort(404);
    }
}
