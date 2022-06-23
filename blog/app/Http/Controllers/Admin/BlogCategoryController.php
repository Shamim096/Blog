<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function addCategory ()
    {
        return view('admin.blog-category.add');
    }

    public function newCategory (Request $request)
    {
        BlogCategory::newCategory($request);
        return back()->with('message', 'Category created successfully.');
    }

    public function manageCategory ()
    {
        return view('admin.blog-category.manage', [
            'blogCategories'    => BlogCategory::all(),
        ]);
    }

    public function editCategory ($id)
    {
        return view('admin.blog-category.edit', [
            'blogCategory'  => BlogCategory::find($id),
        ]);
    }

    public function deleteCategory ($id)
    {
        BlogCategory::find($id)->delete();
        return back()->with('message', 'Blog Category Deleted successfully.');
    }

    public function updateCategory (Request $request, $id)
    {
        BlogCategory::updateCategory($request, $id);
        return redirect('/manage-category')->with('message', 'Category updated successfully.');
    }
}
