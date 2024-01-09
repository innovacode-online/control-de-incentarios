@extends('layouts.app')


@section('header')
    <x-shared.header-page title="Nuevo producto" path="products.index" button="Volver"
        description="Agrega un producto a tu inventario" />
@endsection

@section('contenido')
    <div class="md:grid md:grid-cols-2">

        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" class="max-w-lg w-full mx-auto space-y-4">
            @csrf
            <div class="form-control">
                <label for="name">Nombre: </label>
                <input type="text" id="name" name="name">
            </div>

            <div class="form-control">
                <label for="description">Descripcion: </label>
                <input type="text" id="description" name="description">
            </div>

            <div class="form-control">
                <label for="stock">Stock disponible: </label>
                <input type="number" min="0" id="stock" name="stock">
            </div>

            <div class="form-control">
                <label for="price">Precio: </label>
                <input type="number" id="price" name="price">
            </div>


            <div class="form-control">
                <label for="image">Seleccione una imagen: </label>
                <input type="file" name="image" id="inputImage">
            </div>


            <div>
                <label for="category_id">Seleccione una categoria: </label>
                <select class="bg-secondary w-full py-3 px-2 rounded-md" required name="category_id" id="category">
                    @forelse ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @empty
                        <option>No hay categorias</option>
                    @endforelse
                </select>
            </div>

            <button class="btn-primary w-full" type="submit">Guardar</button>

        </form>
        <div>
            <h3 class="text-center text-xl font-bold">Imagen del producto</h3>

            <p class="text-center" id="imagePreviewText"></p>
            <img id="imagePreview">
        </div>
    </div>
@endsection
