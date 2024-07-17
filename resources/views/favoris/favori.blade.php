@extends('layouts.store')

@section('content')
<div class="py-12">
    <!-- Header -->
    <div class="pl-4 lg:px-10 2xl:px-20 flex flex-row justify-center items-end space-x-4">
        <h1 class="text-4xl font-semibold leading-9 text-gray-800 dark:text-white">Favoris</h1>
        <p class="text-base leading-4 text-gray-600 dark:text-white pb-1">({{ $favoris->count() }} Articles)</p>
    </div>

    <!-- Grille des produits favoris -->
    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-10">
        @forelse($favoris as $favori)
        <div class="relative bg-white shadow-lg rounded-lg overflow-hidden">
            <a href="{{ route('product.detail', $favori->product) }}">
                <img class="w-full h-64 object-cover" src="{{ $favori->product->images[0] ?? asset('images/default-image.png') }}" alt="{{ $favori->product->name }}">
            </a>
            <div class="p-4">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ $favori->product->name }}</h3>
                <p class="mt-2 text-base text-gray-600 dark:text-gray-400">{{ $favori->product->description }}</p>
                <p class="mt-2 text-lg font-semibold text-gray-900 dark:text-white">{{ $favori->product->price }} €</p>
                <div class="mt-4 flex justify-between items-center">
                    <a href="{{ route('product.detail', $favori->product) }}" class="text-indigo-600 hover:text-indigo-500">Voir les détails</a>
                    <form action="{{ route('favoris.remove', $favori) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <p class="text-center text-base leading-4 text-gray-600 dark:text-white">Vous n'avez aucun article favori.</p>
        @endforelse
    </div>
</div>
@endsection

