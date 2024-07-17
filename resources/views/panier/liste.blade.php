

@extends('layouts.store')

@section("content")
<!-- component -->
<div class="bg-white">
    <div class="border py-3 px-6">
      <div class="flex justify-between">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
          </svg>
          <span class="ml-2 font-semibold text-[#252C32]">Jb Market</span>
        </div>
  
        <div class="ml-6 flex flex-1 gap-x-3">
          <div class="flex cursor-pointer select-none items-center gap-x-2 rounded-md border bg-[#4094F7] py-2 px-4 text-white hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="text-sm font-medium">Categories</span>
          </div>
  
          <input type="text" class="w-full rounded-md border border-[#DDE2E4] px-3 py-2 text-sm" value="DJI phantom" />
        </div>
  
        <div class="ml-2 flex">
          <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
            <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
            <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
            <span class="text-sm font-medium">Orders</span>
          </div>
  
          <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
            </svg>
            <span class="text-sm font-medium">Favorites</span>
        </div>
  
          <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
            <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
            </svg>
            <span class="absolute -top-2 -right-2 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 p-2 text-xs text-white">3</span>
            </div>
            <span class="text-sm font-medium">Cart</span>
        </div>
  
        <div class="ml-2 flex cursor-pointer items-center gap-x-1 rounded-md border py-2 px-4 hover:bg-gray-100">
            <span class="text-sm font-medium">Sign in</span>
        </div>
        </div>
      </div>
  
    <div class="mt-4 flex items-center justify-between">
        <div class="flex gap-x-2 py-1 px-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
        </svg>
        <span class="text-sm font-medium">Martinique</span>
        </div>
  
        <div class="flex gap-x-8">
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Best seller</span>
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">New Releases</span>
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Books</span>
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Computers</span>
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Fashion</span>
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Health</span>
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Pharmacy</span>
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Toys & Games</span>
        </div>
  
        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Becoma a seller</span>
      </div>
    </div>
  </div>

@php
    $total = 0 ;
@endphp

@vite(['resources/css/app.css', 'resources/js/app.js'])
<ul class="divide-y  divide-gray-100">

   

<div class="h-screen bg-blue-300 " >
	<div class="py-12">
		
      
    <div class="max-w-md mx-auto bg-blue-400 shadow-lg rounded-lg  md:max-w-5xl">
        <div class="md:flex ">
            <div class="w-full p-4 px-5 py-5">

            	<div class="md:grid md:grid-cols-3 gap-2 ">

            		<div class="col-span-2 p-5">

            			<h1 class="text-xl font-medium "></a>Shopping Cart</h1>


                        @forelse ($paniers as $panier)

                        @php
                             $total = $total +( $panier->product->price * $panier->quantite ) ;
                        @endphp
            			<div class="flex justify-between items-center mt-6 pt-6">
            				<div class="flex  items-center">
            					<img src="https://i.imgur.com/EEguU02.jpg" width="60" class="rounded-full ">

            					<div class="flex flex-col ml-3">
            						<span class="md:text-md font-medium">{{$panier->product->name}}</span>
            						
            					</div>

            					
            				</div>

            				<div class="flex justify-center items-center">
            					
            					<div class="pr-8 flex ">
            						<span class="font-semibold"><a href="{{route('panier.moins', $panier)}}">-</a></span>
            						<input type="text" class="focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2" value="1">
            						<span class="font-semibold"><a href="{{route('panier.ajouter', $panier->product)}}">+</span>
            					</div>

            					<div class="pr-8 ">
            						
            						<span class="text-xs font-medium">{{$panier->product->price}} x {{$panier->quantite}}</span>
                                    <p class="text-sm font-semibold leading-6 text-gray-900"><a href="{{route('panier.remove',$panier)}}"> Supprimer</a></p>
            					</div>
            					<div>
            						<i class="fa fa-close text-xs font-medium"></i>
            					</div>

            				</div>
            				
            			</div>

                        @empty
                        Votre panier est vide.
                    @endforelse

















            			<div class="flex justify-between items-center mt-6 pt-6 border-t"> 
            				<div class="flex items-center">
            					<i class="fa fa-arrow-left text-sm pr-2"></i>
            					<span class="text-md  font-medium text-blue-700">Continue Shopping</span>
            				</div>

            				<div class="flex justify-center items-end">
            					<span class="text-sm font-medium text-gray-400 mr-1">Total:</span>
            					<span class="text-lg font-bold text-gray-800 ">  {{$total}}</span>
            					
            				</div>
            				
            			</div>








            			
            		</div>
            		<div class=" p-5 bg-blue-500 rounded overflow-visible">

            			<span class="text-xl font-medium text-gray-100 block pb-3">Card Details</span>

            			<span class="text-xs text-blue-400 ">Card Type</span>

            			<div class="overflow-visible flex justify-between items-center mt-2">

            			


            				<div class="rounded w-52 h-28 bg-gray-500 py-2 px-4 relative right-10">

            					<span class="italic text-lg font-medium text-gray-200 underline">VISA</span>

            					<div class="flex justify-between items-center pt-4 ">
            						
            						<span class="text-xs text-gray-200 font-medium">****</span>
            						<span class="text-xs text-gray-200 font-medium">****</span>
            						<span class="text-xs text-gray-200 font-medium">****</span>
            						<span class="text-xs text-gray-200 font-medium">****</span>

            					</div>

            					<div class="flex justify-between items-center mt-3">
             						
            						<span class="text-xs  text-gray-200">Albert</span>
            						<span class="text-xs  text-gray-200">12/18</span>
            					</div>


            					
            				</div>






            				<div class="flex justify-center  items-center flex-col">

            					<img src="https://img.icons8.com/color/96/000000/mastercard-logo.png" width="40" class="relative right-5" />
            					<span class="text-xs font-medium text-gray-200 bottom-2 relative right-5">mastercard.</span>
            					
            				</div>
            				
            			</div>




            			<div class="flex justify-center flex-col pt-3">
            				<label class="text-xs text-gray-400 ">Name on Card</label>
            				<input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="Giga Tamarashvili">
            			</div>


            			<div class="flex justify-center flex-col pt-3">
            				<label class="text-xs text-gray-400 ">Card Number</label>
            				<input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="****     ****      ****      ****">
            			</div>




            			<div class="grid grid-cols-3 gap-2 pt-2 mb-3">

            				<div class="col-span-2 ">

            					<label class="text-xs text-gray-400">Expiration Date</label>
            					<div class="grid grid-cols-2 gap-2">

            						<input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="mm">
            						<input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="yyyy">
            						
            					</div>


            					
            				</div>

            				<div class="">
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

@endsection

