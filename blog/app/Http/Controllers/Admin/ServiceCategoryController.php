<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function addCategory ()
    {
        return view('admin.service-category.add');
    }

    public function newCategory (Request $request)
    {
        ServiceCategory::newCategory($request);
        return back()->with('message', 'Category created successfully.');
    }

    public function manageCategory ()
    {
        return view('admin.service-category.manage', [
            'serviceCategories'    => ServiceCategory::all(),
        ]);
    }

    public function editCategory ($id)
    {
        return view('admin.service-category.edit', [
            'serviceCategory'  => ServiceCategory::find($id),
        ]);
    }

    public function deleteCategory ($id)
    {
        ServiceCategory::find($id)->delete();
        return back()->with('message', 'Service Category Deleted successfully.');
    }

    public function updateCategory (Request $request, $id)
    {
        ServiceCategory::updateCategory($request, $id);
        return redirect('/manage-service-category')->with('message', 'Category updated successfully.');
    }
}
