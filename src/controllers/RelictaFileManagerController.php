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
        $fileSize= $file->getSize();
        $file->move(public_path($filePath));


        $fileToStore =Archivo::create([
            'email' => $validatedData['email'],
            'filePath' => $filePath,
            'filename'=>$fileName,
            'file-id' =>$fileNameStored,
            'file-type'=> $fileType,
            'file-size'=>$fileSize
        ]);
    }

    public function getFileIcon(Request $request){
        $fileID = $request->input('file_id');

        // Obtener información del archivo desde la base de datos
        $fileInfo = Archivo::where('file_id', $fileID)->first();

        // Obtener el tipo de archivo
        $fileType = $fileInfo->file_type;

        // Definir clases de CSS para diferentes tipos de archivo
        $iconClasses = [
            'pdf' => 'pdf-icon',
            'doc' => 'doc-icon',
            'jpg' => 'jpg-icon',
            // Agrega más tipos de archivo según tus necesidades
        ];

        // Verificar si hay una clase definida para el tipo de archivo
        if (array_key_exists($fileType, $iconClasses)) {
            $iconClass = $iconClasses[$fileType];
        } else {
            // Si no hay una clase definida, usar una clase genérica
            $iconClass = 'generic-icon';
        }

        // Devolver la clase de icono
        return $iconClass;
    }

}
