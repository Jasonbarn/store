<header>

    <ul class="flex flex-row">
        
            <li class= px-10>
                <a href="{{route('product')}}">Accueil</a>
            </li>
            
            <li class= "px-10"><a href="{{route('dashboard')}}">Mon compte</a>
            </li>
            
            <li class= "px-10"><a href="{{ route('panier.liste') }}">Panier</li>
            
            <li class= "px-10"> <a href="{{ route('favoris.favori') }}">Favoris</li>
            
            <li class= "px-10"> <a href="{{ route('commande.lister') }}">commande</li>
            
    </ul>
    
</header>