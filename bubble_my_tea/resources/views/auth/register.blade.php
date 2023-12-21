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
    <link rel="stylesheet" type="text/css" href="css/register.css">
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
            <div class="col-md-5 mx-auto">
                <h1 class="text-center text-muted mb-3 mt-5">REGISTER</h1>
                <p class="text-center text-muted mb-5 mt-2">Create an account if you don't have one</p>

            
                <form action="{{ route('user.store') }}" class="row g-3" method="post">

                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <label for="Firstname" class="form-label">name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                     <small class="text-danger fw-bold" id="error-register-name"></small>
                    </div>
                    
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text"  class="form-control" name="email" id="email" required>
                        <small class="text-danger fw-bold" id="error-register-email"></small>
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control"  name="password" id="password" required>
                        <small class="text-danger fw-bold" id="error-register-password"></small>
                    </div>


                    <div class="col-md-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="agreeTerms">
                            <label class="form-check-label" for="agreeTerms">Agree terms</label><br>
                            <small class="text-danger fw-bold" id="error-register-agreeTerms"></small>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="d-grid gap-5">
                            <input type="submit" class="btn btn-primary btn-block" value="Register" > </imput>
                        </div>
                    </div>
                </form>
                
                <p class="text-center text-muted mt-5">Already have an account? <a href="{{ route('login.form') }}" class="create-account-link">Login</a></p>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="css/register.css">
</body>
</html>
