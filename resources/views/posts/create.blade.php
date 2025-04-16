@extends('layouts.app')

@section('titulo')
	Crea una Nueva Pulicación
@endsection

@section('contenido')
	<div class="md:flex md:items-center">
		<div class="md:w-1/2 px-10">
			Imagen Aqui
		</div>

		<div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
			<form action="{{ route('register') }}" method="POST" novalidate>
               @csrf
               <div class="mb-5">
                  <label for="titulo" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                     Titulo
                  </label>
                  <input
                     id="titulo"
                     name="name"
                     type="text"
                     placeholder="Título de la Publicación"
                     class="border-2 p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                     value="{{ old('name') }}"
                  >
                  @error('titulo')
                           <p class="bg-red-500 text-white font-bold text-sm text-center uppercase my-2 p-2 rounded-lg">
                              {{ $message }}
                           </p>
                  @enderror
               </div>

               <div class="mb-5">
                  <label for="descripcion" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                     Descripción
                  </label>
                  <textarea
                     id="descripcion"
                     name="name"
                     rows="8"
                     placeholder="Descripción de la Publicación"
                     class="border-2 p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                  >{{ old('name') }}</textarea>
                  @error('descripcion')
                           <p class="bg-red-500 text-white font-bold text-sm text-center uppercase my-2 p-2 rounded-lg">
                              {{ $message }}
                           </p>
                  @enderror
               </div>

               <input
                  type="submit"
                  value="Crear   Publicación"
                  class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg text-center"
               >
			</form>
		</div>
    </div>
@endsection
