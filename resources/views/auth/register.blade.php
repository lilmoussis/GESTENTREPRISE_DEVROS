<!DOCTYPE html>
    <html lang="en" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="robots" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
        <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
        <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
        <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
        <meta name="format-detection" content="telephone=no">

        <!-- TITRE DE LA PAGE ICI -->
        <title>Page d'inscription | GestEntreprise</title>

        <!-- ICÔNE DES FAVICONS -->
        <link rel="shortcut icon" type="image/png" href="{{URL::asset('images/favicon.png')}}">
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body class="vh-100">
        <div class="authincation h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-8">
                        <div class="authincation-content">
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="auth-form">
                                        <div class="text-center mb-3">
                                            <a href=""><img src="images/logo-full.png" alt=""></a>
                                        </div>
                                        <h4 class="text-center mb-4">Remplissez les champs pour vous inscrire</h4>
                                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="d-flex">
                                                <div class="mb-3">
                                                    <label for="nom" class="mb-1">Nom</label>
                                                    <input id="nom" type="text" style="width: 300px;" class="form-control" name="nom" required placeholder="John" autofocus>

                                                </div>
                                                <div class="mb-3" style="margin-left: 30px;">
                                                    <label for="prenom" class="mb-1">Prénom(s)</label>
                                                    <input type="text" style="width: 300px;" name="prenom" id="prenom" class="form-control" required placeholder="Doe">
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="mb-3">
                                                    <label class="mb-1">Adresse mail</label>
                                                    <input type="email" name="email" id="email" style="width: 300px;" class="form-control "  required  placeholder="johndoe@gmail.com">
                                                </div>
                                                <div class="mb-3" style="margin-left: 30px;">
                                                    <label class="form-label">Selectionner votre Genre:</label>
                                                    <select class="default-select  form-control"  required autocomplete="genre"  name="genre" id="genre"  style="width: 300px;">
                                                        <option value="Homme">Homme</option>
                                                        <option value="Femme">Femme</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="mb-3">
                                                    <label class="mb-1">Mot de passe</label>
                                                    <input type="password" style="width: 300px;" name="password" id="password" class="form-control"    placeholder="Password">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="mb-1">Confirmer le mot de passe</label>
                                                    <input type="password" style="width: 300px;" name="password_confirmation" id="password_confirmation" class="form-control"   placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="mb-3">
                                                    <label class="mb-1">Date de naissance</label>
                                                    <input type="date" style="width: 300px;" name="naissance" id="naissance" class="form-control"  required>
                                                </div>
                                                <div class="mb-3" style="margin-left: 30px;">
                                                    <label class="mb-1">Téléphone</label>
                                                    <input type="text" style="width: 300px;" name="telephone" id="telephone" class="form-control"  required  placeholder="+22890000000">
                                                </div>
                                            </div>
                                            <div class="text-center w-50 mt-4" style="margin-left: 160px;">
                                                <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                                            </div>
                                        </form>
                                        <div class="new-account mt-4 text-center">
                                            <p>Vous avez déjà un compte? <a class="text-primary" href="{{('login')}}"> Se connecter</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--**********************************
            Scripts
        ***********************************-->
        <!-- Vendors requis -->
        <script src="vendor/global/global.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/dlabnav-init.js"></script>
        <script src="js/styleSwitcher.js"></script>
    </body>
</html>

