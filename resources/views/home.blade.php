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
<div class="wrapper">
    <div class="card">
        <form action="#" class="d-flex flex-column">
            <div class="h3 text-center text-white">Login</div>
            <div class="d-flex align-items-center input-field my-3 mb-4"> <span class="far fa-user p-2"></span> <input type="text" placeholder="Username or Email" required class="form-control"> </div>
            <div class="d-flex align-items-center input-field mb-4"> <span class="fas fa-lock p-2"></span> <input type="password" placeholder="Password" required class="form-control" id="pwd"> <button class="btn btn-showPasswordn"> <span class="fas fa-eye-slash"></span> </button> </div>
            <div class="d-sm-flex align-items-sm-center justify-content-sm-between">
                <div class="d-flex align-items-center"> <label class="option"> <span class="text-light-white">Remember Me</span> <input type="checkbox" checked> <span class="checkmark"></span> </label> </div>
                <div class="mt-sm-0 mt-3"><a href="#">Forgot password?</a></div>
            </div>
            <div class="my-3"> <input type="submit" value="Login" class="btn btn-primary"> </div>
            <div class="mb-3"> <span class="text-light-white">Don't have an account?</span> <a href="#">Sign Up</a> </div>
        </form>
        <div class="position-relative border-bottom my-3 line"> <span class="connect">or connect with</span> </div>
        <div class="text-center py-3 connections"> <a href="https://wwww.facebook.com" target="_blank" class="px-2"> <img src="https://www.dpreview.com/files/p/articles/4698742202/facebook.jpeg" alt=""> </a> <a href="https://www.google.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png" alt=""> </a> <a href="https://www.github.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/512x512-logo-png/512x512-logo-github-icon-35.png" alt=""> </a> </div>
    </div>
</div>





    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- jquery js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- customize js -->
    <script src="{{URL::asset('assets/scripts.js')}}"></script>

</body>