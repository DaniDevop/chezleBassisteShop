<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //


    public function index(){

        $CategoryAll=Category::all();

        return view("Admin.Category.category",compact('CategoryAll'));
    }



    public function store(CategoryRequest $categoryRequest){

        $category=new Category();
        $category->category=$categoryRequest->category;
        $category->status=$categoryRequest->status;
        $category->save();
        
        toastr()->success("Category crée avec succès");
        return back();
    }
}
