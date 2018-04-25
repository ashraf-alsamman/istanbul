<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Tag; 
use App\Photo; 
use App\Business;
use App\BusinessTag;
use App\Category;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\AjaxImage;
use Illuminate\Support\Facades\File;
 

class BusinessController extends Controller
{
    
    public function add( )
    {
        
        return View('business.add' );
    }
    
    public function getCategories( )
    {
        return  Category::all();
    }

     public function getTags( )
    {
        return  Tag::all();
    }
    public function uploadPhoto(Request $request)
    {
     
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',
            'category' => 'required',
        ]);

        $Business = new Business();
        $Business->name = $request->name ;
        $Business->email = $request->email ;
        $Business->phone = $request->phone ;
        $Business->category_id = $request->category ;
        $Business->user_id = Auth::user()->id; 
        if($Business->save()) 
        {
        
            // upload start
            $image = $request->file('image');
            foreach($image as $singleFile):
            //$singleFile->move(public_path('/uploads'), $singleFile->hashName()); 
                $imageName =  time().'.'.$singleFile->getClientOriginalExtension();
            Storage::put($imageName,file_get_contents($singleFile));
            $Photo = new Photo();
            $Photo->path = $imageName;
            $Photo->business_id = $Business->id;
            $Photo->save();
            endforeach;
            // upload end
        }

       // start save tags
       $qqq = $request->tag;
       $tags = explode(",",$qqq);
  
       
       foreach($tags as $singleTag):
 
        $BusinessTag = new BusinessTag();
        $BusinessTag->tag_id = $singleTag;
        $BusinessTag->business_id = $Business->id;
        $BusinessTag->save();
        endforeach;
       return "done";



    
}  
                
    
   
}
