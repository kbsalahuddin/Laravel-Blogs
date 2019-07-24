<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;

class CategoryController extends Controller
{
    public function addCategory(){
    	return view('admin.categories.add-categories');
    }

    public function saveCategory(Request $request){
      $category=new Category();
      $category->categoryName= $request->categoryName; //req to cat passing value
      
      $category->categoryStatus= $request->categoryStatus;
      $category-> save();

      return redirect ('/add-categories')-> with('message','Category added successfully!') ;
    }
    
    public function allCategory(){
    	$categories=Category::all();
        return view('admin.categories.all-categories',['categories'=>$categories]);
    }

    public function unpublishedCategory($categoryId){

      $changeStatus=Category::where('categoryId',$categoryId)->first();
      $changeStatus->categoryStatus='unpublished';
      $changeStatus->save();
      return redirect('/all-categories');
      


    }
    public function publishedCategory($categoryId){

    	$changeStatus=Category::where('categoryId',$categoryId)->first();
    	$changeStatus->categoryStatus='published';
      $changeStatus->save();
    	return redirect('/all-categories');

    }

    public function updateCategoryName(Request $request){

        
        $categoryNameUpdate= Category::where('categoryId',$request->id)->first();
        $categoryNameUpdate->categoryName= $request->name;
        $categoryNameUpdate->save();
        return redirect('/all-categories');
      
    }   

    public function deleteCategory($categoryId){
      
      $category=Category::first()->where('categories.categoryId',$categoryId);
      $category->delete();
      return redirect('/all-categories')->with('message','Category row deleted successfully');
    }     
}
