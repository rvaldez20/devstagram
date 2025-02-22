@extends('layouts.app')

@section('titulo')
	Registrate en Devstagram
@endsection

@section('contenido')

   <div class="md:flex justify-center md:gap-5 md:items-center">
      <div class="md:w-6/12 ">
         <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen de registro">
      </div>

      <div class="md:w-4/12 bg-white p-6 rounded-lg">
         <form action="/crear-cuenta" method="POST">
            <div class="mb-5">
               <label for="name" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                  Nombre
               </label>
               <input
                  id="name"
                  name="name"
                  type="text"
                  placeholder="Tu Nombre"
                  class="border p-3 w-full rounded-lg"
               >
            </div>

            <div class="mb-5">
               <label for="username" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                  Username
               </label>
               <input
                  id="username"
                  name="username"
                  type="text"
                  placeholder="Tu Nombre de Usuario"
                  class="border p-3 w-full rounded-lg"
               >
            </div>

            <div class="mb-5">
               <label for="email" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                  Email
               </label>
               <input
                  id="email"
                  name="email"
                  type="email"
                  placeholder="Tu Email de registro"
                  class="border p-3 w-full rounded-lg"
               >
            </div>

            <div class="mb-5">
               <label for="password" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                  Password
               </label>
               <input
                  id="password"
                  name="password"
                  type="password"
                  placeholder="Password de Registro"
                  class="border p-3 w-full rounded-lg"
               >
            </div>

            <div class="mb-5">
               <label for="password_confirmation" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                  Repetir Password
               </label>
               <input
                  id="password_confirmation"
                  name="password_confirmation"
                  type="password"
                  placeholder="Repite tu Password"
                  class="border p-3 w-full rounded-lg"
               >
            </div>

            <input
               type="submit"
               value="Crea Cuenta"
               class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg text-center"
            >
         </form>
      </div>
   </div>

@endsection



