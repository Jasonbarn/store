@extends('layouts.store')

@section('content')



<div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
    <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
      <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
        <div class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
          
<img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">


<img src alt= "{{ $product->name }}" class="object-cover object-center">
        </div>
        <div class="sm:col-span-8 lg:col-span-7">
          <h2 class="text-2xl font-bold text-gray-900 sm:pr-12">{{$product->name}}</h2>

          <section aria-labelledby="information-heading" class="mt-2">
            <h3 id="information-heading" class="sr-only">Informations sur le produit</h3>

            <p class="text-2xl text-gray-900">{{$product->price}}€</p>

            <div class="mt-6">
              <h4 class="sr-only">Avis</h4>
              <div class="flex items-center">
                <div class="flex items-center">
                  @for ($i = 0; $i < 5; $i++)
                    <svg class="h-5 w-5 flex-shrink-0 {{ $i < 4 ? 'text-gray-900' : 'text-gray-200' }}" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                    </svg>
                  @endfor
                </div>
                <p class="sr-only">3.9 sur 5 étoiles</p>
                <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 avis</a>
              </div>
            </div>
          </section>

          <section aria-labelledby="options-heading" class="mt-10">
            <h3 id="options-heading" class="sr-only">Options de produit</h3>

            <form>
              <!-- Couleurs -->
              <fieldset aria-label="Choisir une couleur">
                <legend class="text-sm font-medium text-gray-900">Couleur</legend>

                <div class="mt-4 flex items-center space-x-3">
                {{$product->description}}
                </div>
              </fieldset>

              <!-- Tailles -->
              <fieldset class="mt-10" aria-label="Choisir une taille">
                <div class="flex items-center justify-between">
                  <div class="text-sm font-medium text-gray-900">Taille</div>
                  <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Guide des tailles</a>
                </div>

                <div class="mt-4 grid grid-cols-4 gap-4">
                  @foreach (['XXS', 'XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'] as $size)
                    <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 {{ $size == 'XXXL' ? 'cursor-not-allowed bg-gray-50 text-gray-200' : '' }}">
                      <input type="radio" name="size-choice" value="{{ $size }}" class="sr-only" {{ $size == 'XXXL' ? 'disabled' : '' }}>
                      <span>{{ $size }}</span>
                      <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                    </label>
                  @endforeach
                </div>
              </fieldset>

              <a href="{{route('panier.ajouter', $product)}}" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Ajouter au panier</a>
            </form>

            <!-- Favoris -->
            @if(auth()->check())
              @php
                $favorite = auth()->user()->favoris()->where('product_id', $product->id)->exists();
              @endphp

              @if($favorite)
                <a href="{{ route('favoris.remove', $product) }}" class="mt-4 flex w-full items-center justify-center rounded-md border border-transparent bg-red-600 px-8 py-3 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Retirer des favoris</a>
              @else
                <a href="{{ route('favoris.ajouter', $product) }}" class="mt-4 flex w-full items-center justify-center rounded-md border border-transparent bg-green-600 px-8 py-3 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Ajouter aux favoris</a>
              @endif
            @endif
          </section>
        </div>
      </div>
    </div>
  </div>

  <x-product-card :products="$products" />
  
@endsection

