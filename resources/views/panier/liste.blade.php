@extends('layouts.store')

@section('content')
@php
    $total= 0;
    $nbrArticle=0;
@endphp
<div class="flex flex-col md:flex-row w-screen h-full px-14 py-7">

    <!-- My Cart -->
    <div class="w-full flex flex-col h-fit gap-4 p-4 ">
        <p class="text-blue-900 text-xl font-extrabold">Mon panier</p>
        @forelse ($paniers as $panier)
            @php
                $total += $panier->product->price * $panier->quantite;
                $totalProduct = $panier->product->price * $panier->quantite;
                $nbrArticle += $panier->quantite
            @endphp
            <!-- component -->

        <!-- Product -->
        <div class="flex flex-col p-4 text-lg font-semibold shadow-md border rounded-sm">
            <div class="flex flex-col md:flex-row gap-3 justify-between">
                <!-- Product Information -->
                <div class="flex flex-row gap-6 items-center">
                    <div class="w-28 h-28">
                        <img class="w-full h-full" src="https://static.netshoes.com.br/produtos/tenis-adidas-coreracer-masculino/09/NQQ-4635-309/NQQ-4635-309_zoom1.jpg?ts=1675445414&ims=544x">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-lg text-gray-800 font-semibold">{{$panier->product->nom}}</p>
                    </div>
                </div>
                <!-- Price Information -->
                <div class="self-center text-center">
                    <p class="text-gray-800 font-normal text-xl">{{$panier->product->price}} €</p>
                </div>
                <!-- Remove Product Icon -->
                <div class="self-center">
                    <a href="{{route('panier.remove',$panier)}}" class="">
                        <svg class="" height="24px" width="24px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512"  xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <path d="M400,113.3h-80v-20c0-16.2-13.1-29.3-29.3-29.3h-69.5C205.1,64,192,77.1,192,93.3v20h-80V128h21.1l23.6,290.7   c0,16.2,13.1,29.3,29.3,29.3h141c16.2,0,29.3-13.1,29.3-29.3L379.6,128H400V113.3z M206.6,93.3c0-8.1,6.6-14.7,14.6-14.7h69.5   c8.1,0,14.6,6.6,14.6,14.7v20h-98.7V93.3z M341.6,417.9l0,0.4v0.4c0,8.1-6.6,14.7-14.6,14.7H186c-8.1,0-14.6-6.6-14.6-14.7v-0.4   l0-0.4L147.7,128h217.2L341.6,417.9z"/>
                            <g>
                            <rect height="241" width="14" x="249" y="160"/>
                            <polygon points="320,160 305.4,160 294.7,401 309.3,401"/>
                            <polygon points="206.5,160 192,160 202.7,401 217.3,401"/>
                            </g>
                        </g>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Product Quantity -->
            <div class="flex flex-row self-center gap-1">
                <a href="{{route('panier.moins',$panier)}}" class="w-5 h-5 self-center rounded-full border border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#d1d5db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                    </svg>
                </a>
                <input type="text" readonly="readonly" value="{{$panier->quantite}}" class="w-8 h-8 text-center text-gray-900 text-sm outline-none border border-gray-300 rounded-sm">
                <a href="{{route('panier.ajouter',$panier->product)}}" class="w-5 h-5 self-center rounded-full border border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="" stroke="#9ca3af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                </a>
            </div>
        </div>
        @empty
        <p class="text-sm font-semibold leading-6 text-gray-900">Il n'y a pas d'article</p>
        @endforelse
        
    </div>
        <!-- Purchase Resume -->
        <div class="flex flex-col w-full md:w-2/3 h-fit gap-4 p-4">
            <p class="text-blue-900 text-xl font-extrabold">Resumé de la commande</p>
            <div class="flex flex-col p-4 gap-4 text-lg font-semibold shadow-md border rounded-sm">
                <div class="flex flex-row justify-between">
                    <p class="text-gray-600">Prix total ({{$nbrArticle}} produit)</p>
                    <p class="text-end font-bold">$99.98</p>
                </div>
                <div class="flex gap-2">
                    <a href="{{route('commande.create')}}" class="transition-colors text-sm bg-blue-600 hover:bg-blue-700 p-2 rounded-sm w-full text-white text-hover shadow-md text-center">
                            Commander  
                    </a>
                    <a href="{{route('product')}}" class="transition-colors text-sm bg-white border border-gray-600 p-2 rounded-sm w-full text-gray-700 text-hover shadow-md text-center">
                            Ajouter des produits
                    </a>
                </div>
            </div>
        </div>
    </div>
        
@endsection







{{-- 
@extends('layouts.store')

@section("content")
<!-- component -->
@vite(['resources/css/app.css', 'resources/js/app.js'])




@php
    $total= 0;
    $nbrArticle=0;
@endphp
<div class="flex flex-col md:flex-row w-screen h-full px-14 py-7">

    <!-- Mon Panier -->
    <div class="w-full flex flex-col h-fit gap-4 p-4 ">
        <p class="text-blue-900 text-xl font-extrabold">Mon panier</p>
        @forelse ($paniers as $panier)
            @php
                $total += $panier->product->price * $panier->quantite;
                $nbrArticle += $panier->quantite;
            @endphp

            <ul class="divide-y divide-gray-100">
                <div class="h-screen bg-blue-300">
                    <div class="py-12">
                        <div class="max-w-md mx-auto bg-blue-400 shadow-lg rounded-lg md:max-w-5xl">
                            <div class="md:flex">
                                <div class="w-full p-4 px-5 py-5">
                                    <div class="md:grid md:grid-cols-3 gap-2">
                                        <div class="col-span-2 p-5">
                                            <h1 class="text-xl font-medium">Shopping Cart</h1>
                                            <div class="flex justify-between items-center mt-6 pt-6">
                                                <div class="flex items-center">
                                                    <img src="https://i.imgur.com/EEguU02.jpg" width="60" class="rounded-full">
                                                    <div class="flex flex-col ml-3">
                                                        <span class="md:text-md font-medium">{{$panier->product->name}}</span>
                                                    </div>
                                                </div>
                                                <div class="flex justify-center items-center">
                                                    <div class="pr-8 flex">
                                                        <span class="font-semibold"><a href="{{route('panier.moins', $panier)}}">-</a></span>
                                                        <input type="text" class="focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2" value="{{$panier->quantite}}">
                                                        <span class="font-semibold"><a href="{{route('panier.ajouter', $panier->product)}}">+</a></span>
                                                    </div>
                                                    <div class="pr-8">
                                                        <span class="text-xs font-medium">{{$panier->product->price}} x {{$panier->quantite}}</span>
                                                        <p class="text-sm font-semibold leading-6 text-gray-900"><a href="{{route('panier.remove',$panier)}}"> Supprimer</a></p>
                                                    </div>
                                                    <div>
                                                        <i class="fa fa-close text-xs font-medium"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                            <p>Votre panier est vide.</p>
                                            @endforelse
                                            <div class="flex justify-between items-center mt-6 pt-6 border-t">
                                                <div class="flex items-center">
                                                    <i class="fa fa-arrow-left text-sm pr-2"></i>
                                                    <span class="text-md font-medium text-blue-700"><a href="{{route('product')}}">Continue Shopping</a></span>
                                                </div>
                                                <div class="flex justify-center items-end">
                                                    <span class="text-sm font-medium text-gray-400 mr-1">Total:</span>
                                                    <span class="text-lg font-bold text-gray-800">  {{$total}}</span>
                                                    <br>
                                                    <a href="{{route('commande.create')}}" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-blue-600 px-8 py-3 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Commander</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-5 bg-blue-500 rounded overflow-visible">
                                            <span class="text-xl font-medium text-gray-100 block pb-3">Card Details</span>
                                            <span class="text-xs text-blue-400">Card Type</span>
                                            <div class="overflow-visible flex justify-between items-center mt-2">
                                                <div class="rounded w-52 h-28 bg-gray-500 py-2 px-4 relative right-10">
                                                    <span class="italic text-lg font-medium text-gray-200 underline">VISA</span>
                                                    <div class="flex justify-between items-center pt-4">
                                                        <span class="text-xs text-gray-200 font-medium">****</span>
                                                        <span class="text-xs text-gray-200 font-medium">****</span>
                                                        <span class="text-xs text-gray-200 font-medium">****</span>
                                                        <span class="text-xs text-gray-200 font-medium">****</span>
                                                    </div>
                                                    <div class="flex justify-between items-center mt-3">
                                                        <span class="text-xs text-gray-200">Albert</span>
                                                        <span class="text-xs text-gray-200">12/18</span>
                                                    </div>
                                                </div>
                                                <div class="flex justify-center items-center flex-col">
                                                    <img src="https://img.icons8.com/color/96/000000/mastercard-logo.png" width="40" class="relative right-5">
                                                    <span class="text-xs font-medium text-gray-200 bottom-2 relative right-5">mastercard.</span>
                                                </div>
                                            </div>
                                            <div class="flex justify-center flex-col pt-3">
                                                <label class="text-xs text-gray-400">Name on Card</label>
                                                <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="Giga Tamarashvili">
                                            </div>
                                            <div class="flex justify-center flex-col pt-3">
                                                <label class="text-xs text-gray-400">Card Number</label>
                                                <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="****     ****      ****      ****">
                                            </div>
                                            <div class="grid grid-cols-3 gap-2 pt-2 mb-3">
                                                <div class="col-span-2">
                                                    <label class="text-xs text-gray-400">Expiration Date</label>
                                                    <div class="grid grid-cols-2 gap-2">
                                                        <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="mm">
                                                        <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="yyyy">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="text-xs text-gray-400">CVV</label>
                                                    <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="XXX">
                                                </div>
                                            </div>
                                            <button class="h-12 w-full bg-blue-100 rounded focus:outline-none text-black hover:bg-purple-600">Check Out</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>
@endsection
 --}}
