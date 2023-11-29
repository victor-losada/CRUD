@vite('resources/css/app.css')
@extends('layouts.app')
@section('titulo')
Registrar Usuario
<div class="md:flex md:justify-center md:gap-10 md:items-center bd">
    {{-- <div class="md:w-6/12 p-5">
        <img class="rounded-xl " src="{{ asset('img/registrar.jpg') }}" alt="Imagen de registro">
    </div> --}}
    <div class="md:w-4/12 bg-red p-4 rounded-lg shadow-xl">
        <form method="post">
            
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-red-500 font-bold" >Nombre</label>
                <input type="text" id="name" name="name" placeholder="Nombre" class="border p-3 w-full rounded-lg">

               

            </div>

            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold" >Cedula</label>
                <input type="text"  name="Cedula" placeholder="Cedula" class="border p-3 w-full rounded-lg" >
               
            </div>

            <div class="mb-5">
                <label  class="mb-2 block uppercase text-gray-500 font-bold" >Numero de telefono</label>
                <input  name="Numero de telefono" placeholder="Numero de telefono" class="border p-3 w-full rounded-lg">
                
            </div>

            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" >Direccion</label>
                <input  name="Direccion" placeholder="Direccion" class="border p-3 w-full rounded-lg">
               
            </div>
            
            <input type="submit" value="Registrar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>

@endsection