@extends("layouts.app")

@section("titulo")
    Registrate en Devstagramm
@endsection
@section("contenido")
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset("img/registrar.jpg")}}" alt="Imagen de registro" >
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="id">Nombre</label>
                    <input id="nombre" name="nombre" type="text" placeholder="Tu nombre" class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="Tu nombre de usuario" class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">Correo Electrónico</label>
                    <input id="email" name="email" type="email" placeholder="ejemplo@devstagram.com" class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password">Contraseña</label>
                    <input id="password" name="password" type="password" class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password_confirmation">Repetir Contraseña</label>
                    <input id="password_confirmation" name="password_confirmation" type="password_confirmation" class="border p-3 w-full rounded-lg">
                </div>
                <input type="submit" value="Registrarse" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
