<div class="group">
    <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
        <img src="https://shreethemes.in/cartzio/layouts/assets/images/shop/black-print-t-shirt.jpg" class="group-hover:scale-110 duration-500" alt="">

        <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
            <a href="{{route('panier.ajouter',$product)}}" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Ajouter au panier</a>
        </div>

        <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
            <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
            <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
            <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
        </ul>

        <ul class="list-none absolute top-[10px] start-4">
            <li><a href="javascript:void(0)" class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">-40% Off</a></li>
        </ul>
    </div>

    <div class="mt-4">
        <a href="{{route('product.detail',$product)}}" class="hover:text-orange-500 text-lg font-medium">{{$product->nom}}</a>
        <div class="flex justify-between items-center mt-1">
            <p>16.00 €<del class="text-slate-400">{{$product->price}} €</del></p>
            <ul class="font-medium text-amber-400 list-none">
                <li class="inline"><i class="mdi mdi-star"></i></li>
                <li class="inline"><i class="mdi mdi-star"></i></li>
                <li class="inline"><i class="mdi mdi-star"></i></li>
                <li class="inline"><i class="mdi mdi-star"></i></li>
                <li class="inline"><i class="mdi mdi-star"></i></li>
            </ul>
        </div>
    </div>
</div>
  