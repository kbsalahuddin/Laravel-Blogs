<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function addAuthor(){
    	return view('admin.authors.add-authors');
    }
    
    public function saveAuthor(Request $request){


      $authorImage=$request->file('authorImage');
      $imgName=$authorImage->getClientOriginalName();//show image file name only
      $uploadPath='authorImages/';
      $authorImage->move($uploadPath,$imgName);//move to authorImage folder
      $imgUrl= $uploadPath.$imgName;
      $this->saveAuthorInfo($request, $imgUrl);
      return redirect('/all-authors')->with('message','author Info insertion success!');

    }
    protected function saveAuthorInfo(Request $request, $imgUrl){
      $author=new author();
      $author->authorName=     $request->authorName;
      $author->authorEdu=      strip_tags($request->authorEdu);
      $author->authorAward=    strip_tags($request->authorAward);
      $author->authorAge=      $request->authorAge;
      $author->authorImage=    $imgUrl;
      $author->authorEmail=    $request->authorEmail;
      $author->authorStatus=   $request->authorStatus;
      $author->save();
    }

    public function allAuthor(){
		$authorsInfo=Author::all();
        return view('admin.authors.all-authors',['authorsInfo'=>$authorsInfo]);
    }

    public function inactiveAuthor($authorId){

      $changeStatus=Author::where('authorId',$authorId)->first();
      $changeStatus->authorStatus='inactive';
      $changeStatus->save();
      return redirect('/all-authors');
    }
    public function activeAuthor($authorId){

    	$changeStatus=Author::where('authorId',$authorId)->first();
    	$changeStatus->authorStatus='active';
        $changeStatus->save();
    	return redirect('/all-authors');

    }

    public function editAuthor($authorId){
   		$editById=Author::where('authorId',$authorId)->first();

      	return view('admin.authors.edit-authors')->with('editById',$editById);
    }

    public function detailAuthor($authorId){
   		$detailById=Author::where('authorId',$authorId)->first();

      	return view('admin.authors.details-authors')->with('detailById',$detailById);
    }

    public function updateAuthor(Request $request){
        $imgUrl= $this->imgExistStatus($request);
        
        $author= new Author();
        $author= Author::find($request->authorId);
        
        $author->authorName=   $request->authorName;
		    $author->authorEdu=    strip_tags($request->authorEdu);
        $author->authorAward=  strip_tags($request->authorAward);
        $author->authorAge=    $request->authorAge;
		    $author->authorImage=  $imgUrl;
		    $author->authorEmail=  $request->authorEmail;
		    $author->save();
        return redirect('/all-authors')->with('message','Author info updated successfully');
    }

    private function imgExistStatus($request){

      	$editById=     Author::where('authorId',$request->authorId)->first();
      	$authorImg=    $request->file('authorImage');
      
      	if($authorImg){

		    unlink($editById->authorImage);
		    $imgName=$authorImg->getClientOriginalName();//show image file name only
		    $uploadPath= 'authorImages/';
		    $authorImg->move($uploadPath,$imgName);//move to productImage folder
		    $imgUrl= $uploadPath.$imgName;
        }else
        {

			$imgUrl= $editById->authorImage;
      	}

      	return $imgUrl;
    }

    public function deleteAuthor($authorId){
      $author=Author::where('authorId',$authorId)->first();
      $author->delete();
      return redirect('/all-authors')->with('message','Author row deleted successfully');    	
    }            
}
