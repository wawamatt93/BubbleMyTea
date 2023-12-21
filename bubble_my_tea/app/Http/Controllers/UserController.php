<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assurez-vous d'importer le modèle User
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
  
    public function loginForm()
    {
        return view('auth.login');
    }

    public function register(){
        return view('auth/register');
    }

    public function userDelete(){
        return view('delete');
    }




     public function store(Request $request)
     {
         // Valider les données du formulaire
        $newUser =  $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|string|email|unique:users,email',
             'password' => 'required|string|min:8',
         ]);

         // Créer un nouvel utilisateur avec les données fournies dans la requête
         $user = User::create($newUser);
         return " l'user a ete creer";
         return redirect('/');

     }

     public function show($id)
     {
        {
            $user = User::find($id);

            // Vérifiez si l'utilisateur existe
            if (!$user) {
                abort(404, 'Utilisateur non trouvé');
            }
    
            // On renvoie l'utilisateur à la vue correspondante
            return view('users.show', compact('user'));
        }
     }

     public function edit()
     {
         // Récupérez l'utilisateur actuellement authentifié
         $user = Auth::user();
 
         // Vous pouvez passer l'utilisateur à la vue correspondante pour l'édition
         return view('users.edit', compact('user'));
     }



     public function delete(Request $request)
     {
                     // Valider les données du formulaire
                     $validation = $request->validate([
                        'name' => 'required|string|max:255',
                        'email' => 'required|string|email',
                        'password' => 'required|string|min:8',
                    ]);
         // Vérifier si l'utilisateur est authentifié
         if (auth()->check()) {
             // Récupérer l'utilisateur actuellement connecté
             $user = auth()->user();
     

     
             // Vérifier si le nom et l'e-mail fournis correspondent à ceux de l'utilisateur
             if ($validation['name'] !== $user->name || $validation['email'] !== $user->email) {
                 return response()->json(['error' => 'Nom d\'utilisateur ou adresse e-mail incorrects.'], 422);
             }
     
             // Vérifier si le mot de passe fourni correspond au mot de passe de l'utilisateur
             if (!Hash::check($validation['password'], $user->password)) {
                 return response()->json(['error' => 'Mot de passe incorrect.'], 422);
             }
     
             // Supprimer l'utilisateur
             if ($user->delete()) {
                 return response()->json(['success' => 'Utilisateur supprimé avec succès.'], 200);
             } else {
                 return response()->json(['error' => 'Échec de la suppression de l\'utilisateur.'], 500);
             }
         } else {
             return response()->json(['error' => 'Utilisateur non authentifié.'], 401);
         }
     }

     public function articles()
     {
         return $this->hasMany(Article::class);
     }

     public function logout()
{
    Auth::logout();
    return redirect('/');
}


     public function hachage(){
        $user = User::where('email', 'wawamatt@gmail.com')->first();

// Hachez le nouveau mot de passe
$newPassword = 'wawamatthach';
$hashedPassword = Hash::make($newPassword);

// Mettez à jour le mot de passe dans la base de données
$user->update(['password' => $hashedPassword]);
     }
/*  dans le tinker faire :
$userController = new UserController;
App\Http\Controllers\UserController {#7147}

$userController->hachage(); */
         
}


