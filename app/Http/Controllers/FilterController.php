<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index()
    {
    	$filters = \App\Models\Filter::orderBy('id', 'desc')->paginate(10);
    	return view('admin.filter.index')->with(['filters' => $filters]);
    }

    public function create()
    {
    	return view('admin.filter.add');
    }

    public function store(Request $request)
    {
    	$validatedData = $request->validate([
	        'name' => 'required',
	    ]);

	    $filter = new \App\Models\Filter;
	    $filter->name = $request->name;
	    $filter->save();
	    return redirect()->route('filters.index')->with(['status' => 'New Filter Added successfully!']);
    }

    public function edit($id)
    {
    	$filter = \App\Models\Filter::find($id);
    	if ($filter) {
	    	return view('admin.filter.edit')->with(['filter' => $filter]);
	    }
	    return abort(404);
    }

    public function update(Request $request, $id)
    {
    	$validatedData = $request->validate([
	        'name' => 'required',
	    ]);

	    $filter = \App\Models\Filter::find($id);
	    if ($filter) {
		    $filter->name = $request->name;
		    $filter->save();
		    return redirect()->route('filters.index')->with(['status' => 'Filter updated successfully!']);
		}
		return abort(404);
    }

    public function destroy($id)
    {
    	$filter = \App\Models\Filter::find($id);
	    if ($filter) {
	    	$filter->delete();
	    	return redirect()->route('filters.index')->with(['status' => 'Filter deleted successfully!']);
	    }
	    return abort(404);
    }

}
