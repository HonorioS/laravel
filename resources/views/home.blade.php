<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- customize css -->
    <link href="{{ URL::asset('assets/style.css') }}" rel="stylesheet">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

</head>

<body>

    <div class="container my-5  py-5 z-depth-1">

        <section class="px-md-5 mt-5 mx-md-5 text-center text-lg-left dark-grey-text">

            <div class="row d-flex mt-5 justify-content-center">

                <div class="col-md-6">

                    <form class="text-center"  action="{{route('user.login')}}" method="POST">
                        @csrf
                        <p class="h4 mb-4">Login</p>

                        <!-- Email -->
                        <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">

                        <!-- Name -->
                        <input type="password" name="senha" id="idSenha" class="form-control mb-4" placeholder="Password">

                        <button class="btn btn-info btn-block" type="submit">Entrar</button>

                    </form>

                </div>

            </div>

        </section>

    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- jquery js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- customize js -->
    <script src="{{URL::asset('assets/scripts.js')}}"></script>

</body>