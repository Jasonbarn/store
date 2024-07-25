
@extends('layouts.store')

@section("content")
<!-- component -->
@vite(['resources/css/app.css', 'resources/js/app.js'])


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
            					<span class="text-md  font-medium text-blue-700"><a href="{{route('product')}}">Continue Shopping</a></span>
            				</div>

            				<div class="flex justify-center items-end">
            					<span class="text-sm font-medium text-gray-400 mr-1">Total:</span>
                    
            					<span class="text-lg font-bold text-gray-800 ">  {{$total}}</span>
                    <br>
                    <a href="{{route('commande.create')}}" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-blue-600 px-8 py-3 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Commander</a>
            					
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
