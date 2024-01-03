@extends('layouts.app')

@section('header')
    <x-shared.header-page title="Productos" path="products.create" button="Crear producto"
        description="Gestiona tus productos" />
@endsection

@section('contenido')
    <div class="table">
        <div class="min-w-min">

            <div class="grid grid-cols-7">
                <h4>ID</h4>
                <h4>Imagen</h4>
                <h4>Nombre</h4>
                <h4>Descripcion</h4>
                <h4>Stock</h4>
                <h4>Precio</h4>
                <h4>Acciones</h4>
            </div>
            <div class="divider"></div>



            @forelse ($products as $product)
                <form action="">

                    @method('DELETE')
                    @csrf

                    <p>#{{ $product->id }}</p>
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" width="64">
                    <p>{{ $product->name }}</p>
                    <p>{{ $product->description }}</p>
                    <p>{{ $product->stock }}</p>
                    <p>{{ $product->price }}</p>

                    <div class="col-span-2 flex items-center gap-4">
                        <a href="{{ route('products.show', $product->id) }}" class="btn-primary-icon">
                            <i class="uil uil-eye"></i>
                        </a>

                        <a href="{{ route('products.edit', $product->id) }}" class="btn-primary-icon">
                            <i class="uil uil-pen"></i>
                        </a>

                        <button type="submit" class="btn-danger-icon">
                            <i class="uil uil-trash-alt"></i>
                        </button>

                    </div>
                </form>

            @empty
                <p class="text-center">No hay productos</p>
            @endforelse


        </div>



    </div>
@endsection
