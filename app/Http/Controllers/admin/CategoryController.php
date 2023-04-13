<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;
    private $categories;
    public function index(){
        return view('admin.category.index');
    }
    public function create(Request $request){
        $this->category = Category::newCategory($request);
        return redirect('/manage-category')->with('message','Create Category Successfully');

    }
    public function manage(){
        return view('admin.category.manage');
    }
}
