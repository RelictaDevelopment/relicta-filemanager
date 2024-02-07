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
        $file = $request->file('file');
        $fileNameStored = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $fileType = $file->getClientOriginalExtension();
        $fileName = $file->getClientOriginalName();
        $filePath = 'files/' . $user . $fileNameStored;
        $fileSize = $file->getSize();
        $file->move(public_path($filePath));

        $fileToStore = Archivo::create([
            'email' => $validatedData['email'],
            'file_path' => $filePath,
            'filename' => $fileName,
            'file_id' => $fileNameStored,
            'file_type' => $fileType,
            'file_size' => $fileSize
        ]);
    }

    public function getFileIcon(Request $request){
        $fileID = $request->input('file_id');
        $fileInfo = Archivo::where('file_id', $fileID)->first();
        $fileType = $fileInfo->file_type;

        $iconClasses = [
            'pdf' => 'pdf-icon',
            'doc' => 'doc-icon',
            'jpg' => 'jpg-icon',
            // Agrega más tipos de archivo según tus necesidades
        ];

        $iconClass = array_key_exists($fileType, $iconClasses) ? $iconClasses[$fileType] : 'generic-icon';

        return $iconClass;
    }

    public function getFileSize(Request $request){
        $fileID = $request->input('file_id');
        $fileInfo = Archivo::where('file_id', $fileID)->first();
        $fileSize = $fileInfo->file_size;

        if ($fileSize > 1024 * 1024 * 1024) {
            return round($fileSize / (1024 * 1024 * 1024), 2) . ' GB';
        } elseif ($fileSize > 1024 * 1024) {
            return round($fileSize / (1024 * 1024), 2) . ' MB';
        } elseif ($fileSize > 1024) {
            return round($fileSize / 1024, 2) . ' KB';
        } else {
            return $fileSize . ' bytes';
        }
    }

    public function getFilename(Request $request){
        $fileId = $request->input('file-id');
        $fileInfo = Archivo::where('file-id', $fileId)->first();
        $fileName = $fileInfo->filename;
        return $fileName;
    }


    public function getFilePath(Request $request){
        $fileId = $request->input('file_id');
        $fileInfo = Archivo::where('file_id', $fileId)->first();
        $filePath = $fileInfo->file_path;

        return $filePath;
    }

    public function getEmail(Request $request){
        $fileId = $request->input('file_id');
        $fileInfo = Archivo::where('file_id', $fileId)->first();
        $email = $fileInfo->email;

        return $email;
    }
}
