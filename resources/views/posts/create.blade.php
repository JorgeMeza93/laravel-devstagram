@extends("layouts.app")
@section("titulo")
    Crea una nueva Publicación
@endsection

@section("contenido")
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            imagen Aqui
        </div>
        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{ route("register") }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="titulo">Título</label>
                    <input id="titulo" name="titulo" type="text" placeholder="Titulo" class="border p-3 w-full rounded-lg @error("titulo") border-red-500 @enderror">
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>
            </form>
        </div>
    </div>
@endsection