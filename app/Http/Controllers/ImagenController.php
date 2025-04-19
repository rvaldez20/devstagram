<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;



class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $imagen = $request->file('file');
        $nombreImagen = Str::uuid() . "." . $imagen->extension();

        $imagenServidor = Image::read($imagen)->resize(1000,1000);

        // $imagenServidor = Image::read($imagen)->resize(1000,1000, function($constrain){
        //     $constrain->aspectRatio();
        //     $constrain->upsize();
        // });

        $imagePath = public_path('uploads') . "/" . $nombreImagen;
        $imagenServidor->save($imagePath);

        return response()->json(['imagen' => $nombreImagen]);
    }
}
