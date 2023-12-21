<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Ajoutez ces lignes pour importer Bootstrap et ses dépendances -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Autres balises head -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Page</title>
</head>
<body>
    <!-- header section start -->x
    <div class="header_section">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="/"><img src="images/logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="/">Accueil</a>
                    <a class="nav-item nav-link" href="/produit">Mes commandes</a>
                    <a class="nav-item nav-link" href="/login">Login</a>
                    <a class="nav-item nav-link" href="/panier">Panier</a>
                </div>
            </div>
        </nav>
        <!-- banner section end -->
        @section('main')
    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
            <div class="image d-flex flex-column justify-content-center align-items-center">
                <form action="{{ route('user.update') }}" method="post">
                    @csrf
                    @method('put')

                    <h2>Modifier votre profil</h2>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ isset($user) ? $user->name : '' }}" placeholder="Entrez votre nom">
                    </div>

                    <div class="mb-3">
                        <label for="mail" class="form-label">Mail</label>
                        <input type="text" class="form-control" id="mail" name="mail" value="{{ isset($user) ? $user->email : '' }}" placeholder="Entrez votre mail">
                    </div>

                    <button type="submit" class="profile_bt">Valider</button>
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