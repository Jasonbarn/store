<section class="relative md:py-24 py-16">
    <div class="container relative">
        
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 pt-6 gap-6">
            @foreach ($products as $product)
                
            <x-product-card :product="$product" />
            @endforeach

            
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-6">
            <div class="text-center md:hidden block">
                <a href="shop-grid.html" class="text-slate-400 hover:text-orange-500">See More Items <i class="mdi mdi-arrow-right"></i></a>
            </div>
        </div>
    </div><!--end container-->
</section>