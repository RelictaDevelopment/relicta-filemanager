<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RelictaFileManagerController extends Controller
{
    public function storeFile(Request $request){
        $validatedData = $request->validate([
            'email'=> 'required',
            'file' =>'required',
        ]);
        $user = $request->input('email');
        $file =$request->file('file');
        $fileNameStored =Str::uuid(). '.' . $file->getClientOriginalExtension();
        $fileType = $file->getClientOriginalExtension();
        $fileName = $file->getClientOriginalName();
        $filePath= 'files/'. $user.$fileNameStored;
        $file->move(public_path($filePath));

        $fileToStore =Archivo::create([
            'email' => $validatedData['email'],
            'filePath' => $filePath,
            'filename'=>$fileName,
            'file-id' =>$fileNameStored,
            'file-type'=> $fileType
        ]);
    }
}
