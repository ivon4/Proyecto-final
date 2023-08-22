@extends('layouts.app_forms')

@section('content')

<!-- ENCABEZADO IMAGEN ADMIN -->
<div >
    <div class="relative py-8 mt-10 bg-cover bg-center h-80">
        <img src="{{ asset('img/banner_profiles.webp') }}" alt="" class="w-full h-full object-cover opacity-60">
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <h1 class="text-4xl font-bold leading-none text-black lg:text-2xl">Administrador@</h1>
        </div>
    </div>
    <div class="flex justify-center">
        <div class=" w-10/12 md:w-6/12 lg:w-4/12 ">
            <h1 class="text-2xl mb-4 text-left">Crear un perfil Estrella</h1>
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-gray-500">Nombre</label>
                    <input id="name" name="name" type="text" class="border-green-300 p-2 w-full rounded-lg bg-green-100" />
                    @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="name" class="block mb-2 text-gray-500">Apellidos</label>
                    <input id="last_name" name="last_name" type="text" class="border-green-300 p-2 w-full rounded-lg bg-green-100" />
                    @error('last_name')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-gray-500">Nacionalidad</label>
            
                    <input id="nationality" name="nationality" type="text" class="border-green-300 p-2 w-full rounded-lg bg-green-100" />
                    @error('nationality')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-gray-500">Fecha de Nacimiento</label>
                    <input id="date" name="date" type="text" class="border-green-300 p-2 w-full rounded-lg bg-green-100" />
                    @error('date')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-gray-500">Altura</label>
                    <input id="height" name="height" type="text" class="border-green-300 p-2 w-full rounded-lg bg-green-100" />
                    @error('height')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-gray-500">Peso</label>
                    <input id="weight" name="weight" type="text" class="border-green-300 p-2 w-full rounded-lg bg-green-100" />
                    @error('weight must be a number')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror

                </div>
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-gray-500">Color de ojos</label>
                    <input id="eyes_color" name="eyes_color" type="text" class="border-green-300 p-2 w-full rounded-lg bg-green-100" />
                    @error('eyes_color')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="name" class="block mb-2 text-gray-500">Color de pelo</label>
                    <input id="hair_color" name="hair_color" type="text" class="border-green-300 p-2 w-full rounded-lg bg-green-100" />
                    @error('hair_color')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-gray-500">Info. Adicional</label>
                    <input id="aditional_info" name="aditional_info" type="text" class="border-green-300 p-2 w-full rounded-lg bg-green-100" />
                    @error('aditional_info')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-gray-500">Habilidades artísticas</label>
                    <input id="artistic_skills" name="artistic_skills" type="text" class="border-green-300 p-6 w-full rounded-lg bg-green-100" />
                    @error('artistic_skills')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <!-- APARTADO FOTO / VIDEO / VIDEO BOOK - BUSCAR PARA SUBIR AL PERFIL -->
                <div>
                    <p>Foto / Video / VideoBook de Perfil</p>
                    <button type="submit" class="bg-gray-300 hover:bg-gray-400 text-black font-bold py-2 px-4 rounded mb-8 mt-4">
                        Buscar
                    </button>
                </div>

                <input type="submit" value="Publicar" class="md:w-6/12 bg-black hover:bg-gray-400 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg" />

            </form>
        </div>
    </div>
    <footer class="py-10 mt-10 top-0 bg-cover bg-center lg:h-800 w-full relative bg-green-100 flex flex-col items-center justify-center">
        <img src="img/logo 1.png" class="logo w-36 h-auto">
        <img src="img/firma_distrito_centro_madrid_pantoneazul 1.png" class="logo w-36 h-auto">
        <p class="text-center">In Género-Todos los derechos reservados @2023</p>
    </footer>
</div>
@endsection