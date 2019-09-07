<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IconController extends Controller
{
    public function index()
    {
    	$icons = \App\Models\Icon::orderBy('id', 'desc')->paginate(10);
    	return view('admin.icon.index')->with(['icons' => $icons]);
    }

    public function create()
    {
    	$categories = \App\Models\Category::with('childrenList')->whereNull('parent_id')->get();
    	$filters = \App\Models\Filter::all();
    	$plans = \OhMyBrew\ShopifyApp\Models\Plan::all();
    	return view('admin.icon.add')->with(['categories' => $categories, 'filters' => $filters, 'plans' => $plans]);
    }

    public function store(Request $request)
    {
    	$validatedData = $request->validate([
	        'category_id' => 'required',
	        'filter_id' => 'required',
	        'plan_id' => 'required',
	        'animation' => 'required',
	    ]);

	    $icon = new \App\Models\Icon;
	    $icon->category_id = $request->category_id;
	    $icon->filter_id = $request->filter_id;
	    $icon->plan_id = $request->plan_id;
	    $icon->animation = $request->animation;
	    $icon->save();
	    return redirect()->route('icons.index')->with(['status' => 'New Icon Added successfully!']);
    }

    public function edit($id)
    {
    	$icon = \App\Models\Icon::find($id);
    	if ($icon) {
    		$categories = \App\Models\Category::with('childrenList')->whereNull('parent_id')->get();
    		$filters = \App\Models\Filter::all();
    		$plans = \OhMyBrew\ShopifyApp\Models\Plan::all();
	    	return view('admin.icon.edit')->with(['icon' => $icon, 'categories' => $categories, 'filters' => $filters, 'plans' => $plans]);
	    }
	    return abort(404);
    }

    public function update(Request $request, $id)
    {
    	$validatedData = $request->validate([
	        'category_id' => 'required',
	        'filter_id' => 'required',
	        'plan_id' => 'required',
	        'animation' => 'required',
	    ]);

	    $icon = \App\Models\Icon::find($id);
	    if ($icon) {
		    $icon->category_id = $request->category_id;
		    $icon->filter_id = $request->filter_id;
		    $icon->plan_id = $request->plan_id;
		    $icon->animation = $request->animation;
		    $icon->save();
		    return redirect()->route('icons.index')->with(['status' => 'Icon updated successfully!']);
		}
		return abort(404);
    }

    public function destroy($id)
    {
    	$icon = \App\Models\Icon::find($id);
	    if ($icon) {
	    	$icon->delete();
	    	return redirect()->route('icons.index')->with(['status' => 'Icon deleted successfully!']);
	    }
	    return abort(404);
    }
}
