@extends('layouts.store')

@section('content')
products

<ul class="bg-red-400">
    @foreach ( $categories as $category )
        <li>
            <a href="">{{$category->name}}</a>
        </li>
    @endforeach

</ul>


<x-product-card :products="$products" />


@endsection