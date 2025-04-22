@extends('layouts.app')

@section('titulo')
	Inicia Sesión en Devstagram
@endsection

@section('contenido')

   <div class="md:flex justify-center md:gap-5 md:items-center">
      <div class="md:w-6/12 ">
         <img src="{{ asset('img/login.jpg') }}" alt="Imagen de login">
      </div>

      <div class="md:w-4/12 bg-white p-6 rounded-lg">
         <form method="POST" action="{{ route('login') }}" novalidate>
            @csrf

            @if (session('mensaje'))
                <p class="bg-red-500 text-white font-bold text-sm text-center uppercase my-2 p-2 rounded-lg">
                    {{ session('mensaje') }}
                </p>
            @endif

            <div class="mb-5">
               <label for="email" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                  Email
               </label>
               <input
                  id="email"
                  name="email"
                  type="email"
                  placeholder="Tu Email de registro"
                  class="border-2 p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                  value="{{ old('email') }}"
               >
               @error('email')
                    <p class="bg-red-500 text-white font-bold text-sm text-center uppercase my-2 p-2 rounded-lg">
                        {{ $message }}
                    </p>
               @enderror
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
                  class="border-2 p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
               >
               @error('password')
                    <p class="bg-red-500 text-white font-bold text-sm text-center uppercase my-2 p-2 rounded-lg">
                        {{ $message }}
                    </p>
               @enderror
            </div>

            <div class="mb-5">
                <input type="checkbox" name="remember" id="remember"><label for="remember" class="ml-1 text-gray-500 text-sm">Mantener la Sesión Abierta</label>
            </div>

            <input
                type="submit"
                value="Iniciar Sesión"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg text-center"
            >
         </form>
      </div>
   </div>

@endsection



