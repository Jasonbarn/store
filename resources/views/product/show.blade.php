@extends('layouts.shop')

@section('content')
{{-- {{$product->isFavoris->where('user_id',auth()->user()->id)}} --}}
{{-- <div class="container">
    <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
        <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">

            <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
                <div class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-quick-preview-02-detail.jpg" alt="Two each of gray, white, and black shirts arranged on table." class="object-cover object-center">
                </div>
                <div class="sm:col-span-8 lg:col-span-7">
                    <h2 class="text-2xl font-bold text-gray-900 sm:pr-12">{{$product->nom}}</h2>

                    <section aria-labelledby="information-heading" class="mt-2">
                        <h3 id="information-heading" class="sr-only">Product information</h3>

                        <p class="text-2xl text-gray-900">{{$product->price}} €</p>
                    </section>

                    <section aria-labelledby="options-heading" class="mt-10">
                    <h3 id="options-heading" class="sr-only">Product options</h3>
                    <!-- Colors -->
                    <fieldset aria-label="Choose a color">
                        <legend class="text-sm font-medium text-gray-900">Description</legend>
                        <div class="mt-4 flex items-center space-x-3">
                            <p class="text-sm font-medium text-black">{{$product->description}}</p>
                        </div>
                    </fieldset>

                    <div class="flex flex-row gap-x-4">

                        <a href="{{route('panier.ajouter',$product)}}" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Ajouter au panier</a>
                        <a href="{{route('product.favoris',$product)}}" class="mt-6 flex items-center justify-center rounded-md border border-indigo-600 bg-white px-8 py-3 text-base font-medium text-black focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            @if (isset($fav))
                                <i class="ri-heart-fill"></i>
                            @else
                                <i class="ri-heart-line"></i>
                            @endif
                        </a>
                    </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <x-product-card :products="$products" /> --}}
<section class="relative table w-full py-20 lg:py-24 md:pt-28 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 mt-14">
            <h3 class="text-3xl leading-normal font-semibold">{{$product->nom}}</h3>
        </div><!--end grid-->

        <div class="relative mt-3">
            <ul class="tracking-[0.5px] mb-0 inline-block">
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-orange-500"><a href="index.html">Cartzio</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-orange-500"><a href="shop-grid.html">{{$product->category->name}}</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold text-orange-500" aria-current="page">{{$product->nom}}</li>
            </ul>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

        <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class="container relative">
                <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 gap-6 items-center">
                    <div class="lg:col-span-5">
                        <div class="tiny-single-item">
                            <div class="tiny-slide">
                                <div class="m-0.5">
                                  <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/black-print-t-shirt.jpg" class="group-hover:scale-110 duration-500" alt="">
                                </div>
                            </div><!--end content-->
                            
                            <div class="tiny-slide">
                                <div class="m-0.5">
                                  <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/black-print-t-shirt.jpg" class="group-hover:scale-110 duration-500" alt="">
                                </div>
                            </div><!--end content-->
                            
                            <div class="tiny-slide">
                                <div class="m-0.5">
                                  <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/black-print-t-shirt.jpg" class="group-hover:scale-110 duration-500" alt="">
                                </div>
                            </div><!--end content-->
                            
                            <div class="tiny-slide">
                                <div class="m-0.5">
                                  <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/black-print-t-shirt.jpg" class="group-hover:scale-110 duration-500" alt="">
                                </div>
                            </div><!--end content-->
                            
                            <div class="tiny-slide">
                                <div class="m-0.5">
                                  <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/black-print-t-shirt.jpg" class="group-hover:scale-110 duration-500" alt="">
                                </div>
                            </div><!--end content-->
                        </div><!--end tiny slider-->
                    </div><!--end col-->

                    <div class="lg:col-span-7">
                        <h5 class="text-2xl font-semibold">{{$product->nom}}</h5>
                        <div class="mt-2">
                            <span class="text-slate-400 font-semibold me-1">{{$product->price}} €<del class="text-red-600">21 €</del></span>

                            <ul class="list-none inline-block text-orange-400">
                                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                <li class="inline text-slate-400 font-semibold">4.8 (45)</li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <h5 class="text-lg font-semibold">Description :</h5>
                            <p class="text-slate-400 mt-2">{{$product->description}}</p>
                        
                            
                        </div>

                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-4">
                            

                            <div class="flex items-center">
                                <h5 class="text-lg font-semibold me-2">Quantity:</h5>
                                <div class="qty-icons ms-3 space-x-0.5">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white minus">-</button>
                                    <input min="0" name="quantity" value="0" type="number" class="h-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white pointer-events-none w-16 ps-4 quantity">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white plus">+</button>
                                </div>
                            </div><!--end content-->

                        </div><!--end grid-->

                        <div class="mt-4 space-x-1">
                            {{-- <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-base text-center bg-orange-500 text-white rounded-md mt-2">Shop Now</a> --}}
                            <a href="{{route('panier.ajouter',$product)}}" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white mt-2">Ajouter au panier</a>
                        </div>
                    </div><!--end content-->
                </div><!--end grid-->
                
                
            </div><!--end container-->

            <div class="container lg:mt-24 mt-16">
                <div class="grid grid-cols-1 mb-6 text-center">
                    <h3 class="font-semibold text-3xl leading-normal">Produits similaires</h3>
                </div><!--end grid-->
                 
                <x-product-list :products="$products"/>
            </div>
        </section>
@endsection
