@extends('layouts.app')

@section('titulo')
	Crea una Nueva Pulicación
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush()

@push('script')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
@endpush

@section('contenido')
	<div class="md:flex md:items-center">
		<div class="md:w-1/2 px-10">
			<form
                action="{{ route('imagenes.store') }}"
                method="POST"
                enctype="multipart/form-data"
                id="dropzone"
                class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center"
            >
            @csrf
            </form>
		</div>

		<div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
			<form action="{{ route('posts.store') }}" method="POST" novalidate>
               @csrf
               <div class="mb-5">
                  <label for="titulo" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                     Titulo
                  </label>
                  <input
                     id="titulo"
                     name="titulo"
                     type="text"
                     placeholder="Título de la Publicación"
                     class="border-2 p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                     value="{{ old('titulo') }}"
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
                        name="descripcion"
                        rows="6"
                        placeholder="Descripción de la Publicación"
                        class="border-2 p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                    >{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                            <p class="bg-red-500 text-white font-bold text-sm text-center uppercase my-2 p-2 rounded-lg">
                                {{ $message }}
                            </p>
                    @enderror
               </div>

               <div class="mb-5">
                <input
                    name="imagen"
                    type="hidden"
                    value="{{ old('imagen') }}"
                />
                @error('imagen')
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

    <script>
        // alert("app JS working..............")
        // import Dropzone from 'dropzone'

        Dropzone.autoDiscover = false;

        const dropzone = new Dropzone("#dropzone", {
            dictDefaultMessage: 'Sube aquí tu imágen',
            acceptedFiles: ".png, .jpg, ,jpeg, .gif",
            addRemoveLinks: true,
            dictRemoveFile: 'Borrar Archivo',
            maxFiles: 1,
            uploadMultiple: false,

            init: function(){
                if(document.querySelector('[name="imagen"]').value.trim()){
                    const imagenPublicada = {}
                    imagenPublicada.size = 1234
                    imagenPublicada.name = document.querySelector('[name="imagen"]').value

                    this.options.addedfile.call(this, imagenPublicada)
                    this.options.thumbnail.call(this, imagenPublicada, `/uploads/${imagenPublicada.name}`)
                    imagenPublicada.previewElement.classList.add('dz-success', 'dz-complete')
                }
            }
        })

        /*
        dropzone.on('sending', function(file, xhr, formdate) {
            console.log(file)
        })
        */

        dropzone.on('success', function(file, response) {
            console.log(response.imagen)
            document.querySelector('[name="imagen"]').value = response.imagen
        })


        dropzone.on('removedfile', function() {
            document.querySelector('[name="imagen"]').value = ''
        })

        /*
        dropzone.on('error', function(file, message) {
            console.log(message)
        })
        */


    </script>

@endsection
