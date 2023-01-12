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
    <title>Page de connexion | GestEntreprise</title>

    <!-- ICÔNE DES FAVICONS -->
    <link rel="shortcut icon" type="image/png" href="{{ URL::asset('images/favicon.png') }}">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    @if ($message = Session::get('error'))
                                        <div class="alert alert-danger solid alert-dismissible fade show">
                                            <svg viewbox="0 0 24 24" width="24 " height="24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="me-2">
                                                <polygon
                                                    points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                </polygon>
                                                <line x1="15" y1="9" x2="9" y2="15">
                                                </line>
                                                <line x1="9" y1="9" x2="15" y2="15">
                                                </line>
                                            </svg>
                                            {{ $message }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="btn-close">
                                            </button>
                                        </div>
                                    @endif
                                    <div class="text-center mb-3">
                                        <img src="images/logo-full.png" alt="">
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </div>
                                    @endif
                                    <h4 class="text-center mb-4">Connectez-vous à votre compte</h4>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="lorem@gmail.com" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Mot de passe</strong></label>
                                            <input type="password" name="password" id="password" class="form-control"
                                                placeholder="Entrer votre mot de passe" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Se
                                                connecter</button>
                                        </div>
                                    </form>
                                    <div class="new-account text-center mt-3">
                                        <p>Vous n'avez pas de compte ? <a class="text-primary"
                                               href="{{ route('register') }}" >S'inscrire</a></p>
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
