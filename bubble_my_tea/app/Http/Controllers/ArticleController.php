<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{

    public function index()
    {
        // Récupérer tous les articles depuis la base de données
        $articles = Article::all();

        // Passer les articles à la vue
        return view('product');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $newArticle = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric',
        ]);

        // Créer un nouvel article
        $article = Article::create($newArticle);

        return 'Article ajouté avec succès à la base de données';
    }
}
