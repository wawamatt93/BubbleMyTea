<!-- index.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BORCELLE</title>
    <link rel="stylesheet" href="css/product.css">
</head>
<body>

    <header>
  
        <h1>CHOOSE YOUR BUBBLE TEA</h1>
    </header>
    

    <div class="container">
      <div class="container">
        <div class="flavor">
            <img src="css/green.avif" alt="Green Tea Flavor">
            <div class="flavor-info">
                <h2>Green Tea</h2>
                <p>A classic bubble tea flavor made with fresh green tea leaves. It's both refreshing and delicious.</p>
                <p class="price">$3.99</p> 
                <form action="{{ route('panier.ajouter', ['article' => 'Green Tea']) }}" method="post">
                 @csrf
                  <button type="submit" class="add-to-cart-btn">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="flavor">
            <img src="css/strawberry.jpeg" alt="Strawberry Flavor">
            <div class="flavor-info">
                <h2>Strawberry</h2>
                <p>Enjoy the sweet and fruity taste of strawberry in our special bubble tea blend.</p>
                <p class="price">$4.49</p>
                <form action="{{ route('panier.ajouter', ['article' => 'Strawberry']) }}" method="post">
                 @csrf
                 <button type="submit" class="add-to-cart-btn">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="flavor">
            <img src="css/mango.jpeg" alt="Mango Flavor">
            <div class="flavor-info">
                <h2>Mango</h2>
                <p>Indulge in the tropical goodness of mango with our delightful mango-flavored bubble tea.</p>
                <p class="price">$4.99</p>
                <form action="{{ route('panier.ajouter', ['article' => 'Mango']) }}" method="post">
               @csrf
              <button type="submit" class="add-to-cart-btn">Add to Cart</button>
                </form>
            </div>
        </div>

    </div>

    @if(auth()->check())
    {{-- L'utilisateur est connecté --}}
    <p>Bienvenue, {{ auth()->user()->name }}</p>
    {{-- Ajoutez ici le contenu que vous souhaitez afficher pour les utilisateurs connectés --}}
@else
    {{-- L'utilisateur n'est pas connecté --}}
    <p>Vous n'êtes pas connecté.</p>
    {{-- Ajoutez ici le contenu que vous souhaitez afficher pour les utilisateurs non connectés --}}
@endif

</body>
</html>
