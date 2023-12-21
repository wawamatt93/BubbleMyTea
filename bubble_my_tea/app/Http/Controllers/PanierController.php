<?php
// app/Http/Controllers/PanierController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PanierController extends Controller
{
        public function ajouter($article)
        {
            // Récupérer l'article depuis la base de données
            $article = Article::find($article);
    
            // Vérifier si l'article existe
            if (!$article) {
                return redirect()->route('articles.index')->with('error', 'Article non trouvé.');
            }
    
            // Vérifier si la quantité en stock est suffisante (ajoutez cette logique en fonction de votre modèle d'Article)
            if ($article->quantite_en_stock <= 0) {
                return redirect()->route('articles.index')->with('error', 'Désolé, cet article est en rupture de stock.');
            }
    
            // Mettre en œuvre la logique pour ajouter l'article au panier ici
            // ...
    
            // Rediriger avec un message de succès si tout s'est bien passé
            return redirect()->route('articles.index')->with('success', 'Article ajouté au panier avec succès');
        }
}
