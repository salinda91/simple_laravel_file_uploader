<?php

namespace App\Http\Controllers\;

use App\Models\FilesaveModal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
	public function SaveDailyQuestions(Request $request)
	{
		$file = $request->file; //file field
		$ext = $file->guessExtension(); //get file extenstion
		$filename = $request->image_file->getClientOriginalName();
		$filename = pathinfo($filename, PATHINFO_FILENAME);
		$filename = uniqid(); //asign unique ID to file name
		$file_name = $filename . '.' . $ext; //create file name 
		Input::file('file')->move('./Path to folder/', $file_name); //path to save file
		
		$save = new FilesaveModal(); //create object from model you want to save data
		$save->title=$request->title;
		$save->name=$request->name;
		$save->file=$file_name;
		$result= $save->save(); //save data
		if ($result){
			session()->flash('mesage', 'File Upload success');
			session()->flash('level', 'success');
			return redirect()->back();
		}else{
			session()->flash('mesage', 'File Upload not success');
			session()->flash('level', 'error');
			return redirect()->back();
		}
	}
}