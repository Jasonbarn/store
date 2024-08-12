@extends('layouts.shop')

@section('content')
<x-category-list/>
<x-product-list :products="$products"/>
@php
    /*
     <ul class="m-4 flex flex-1 gap-4 justify-center">
        @foreach ($categories as $category)
            <li class="categories p-1 rounded-full p-5">
                <button class="">
                    <a href="{{route('product.category',$category->id)}}" class="italic">#{{$category->name}}</a>
                </button>
            </li>
        @endforeach
    </ul>
    <x-product-card :products="$products" :favs="$favs" />

    {{-- Lien de pagination --}}
    {{ $products->onEachSide(5)->links() }}
    */
@endphp
   
@endsection