<!-- Start Hero -->
<section class="relative md:pt-32">
    <div class="container-fluid relative mt-6 lg:mx-6 mx-3">
        <div class="grid xl:grid-cols-6 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
            <div class="relative overflow-hidden group rounded-md shadow dark:shadow-slate-800">
                <a href="" class="text-center">
                    <img src="assets/images/categories/smart-watch.jpg" class="group-hover:scale-110 duration-500" alt="">
                    <span class="bg-white dark:bg-slate-900 group-hover:text-orange-500 py-2 px-6 rounded-full shadow dark:shadow-gray-800 absolute bottom-4 mx-4 text-lg font-medium">Smart Watch</span>
                </a>
            </div><!--end content-->
    
            @foreach ($categories as $categorie)
            
            <x-category-card :categorie="$categorie"/>    
            @endforeach
    
            

                </a>
            </div><!--end content-->
        </div><!--end grid-->
    </div><!--end container-->