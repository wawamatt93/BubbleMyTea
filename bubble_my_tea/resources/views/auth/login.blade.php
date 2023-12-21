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
    <link public function logout()
{
    Auth::logout();
    return redirect('/');
}rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Autres balises head -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Page</title>
</head>
<body>
    <!-- header section start -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="col-md-12">
                    <div class="logo"><a href="/"><img src="logo.png" alt="logo"></a></div>
                </div>
                <h1 class="text-center text-muted mb-3 mt-2">PLEASE SIGN IN</h1>
           
                <p class="text-center text-muted mb-5 mt-2">Your articles are waiting for you</p>
                
                <form method="POST" action="{{ route('user.login') }}">
                    {{ csrf_field() }}

                    @error ('email')
                        <div class="alert alert-danger text-center" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    @error ('password')
                        <div class="alert alert-danger text-center" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
            
                    <label for="email" class="form-label">Email</label>
                    <input type="email"  class="form-control" name="email" id="email" required>

                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control"  name="password" id="password" required>

                    <div class="row mb-3">
                        <div class="col-md-6"></div>
                        
                    </div>

                    <div class="d-grid gap-2">
                        <input type="submit" class="btn btn-primary btn-block" value="Connexion" > </imput>
                    </div>
                
                    <div class="text-center mt-3">
                        <a href='#'class="forgot-link">Forgot password ?</a>
                    </div>
                </form>

                <p class="text-center text-muted mt-5">Not registered yet? <a href="{{ route('register') }}" class="create-account-link">Create an account</a>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="css/login.css">
</body>
</html>
