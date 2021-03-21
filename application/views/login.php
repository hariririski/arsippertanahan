<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Login</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Icewall Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                        <span class="text-white text-lg ml-3"> Arsip<span class="font-medium"> Pertanahan</span> </span>
                    </a>
                    <div class="my-auto">
                        <img alt="Icewall Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="dist/images/icon.png">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            Temukan Arsip Pertanahan
                            <br>
                            Lebih Mudah dan Cepat.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">Kelola Arsip Pertanahan Di Satu Aplikasi</div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
              <form class="login-form" method="post" action="<?php echo base_url(); ?>Login/proses_login">
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Login
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                        <div class="intro-x mt-8">
                            <input type="text" class="intro-x login__input form-control py-3 px-4 border-gray-300 block" placeholder="User Name" name="username">
                            <input type="password" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Password" name="password">
                        </div>

                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                            <button class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign up</button>
                        </div>
                        <div class="intro-x mt-10 xl:mt-24 text-gray-700 dark:text-gray-600 text-center xl:text-left">
                            By signin up, you agree to our
                            <br>
                            <a class="text-theme-17 dark:text-gray-300" href="">Terms and Conditions</a> & <a class="text-theme-17 dark:text-gray-300" href="">Privacy Policy</a>
                        </div>
                    </div>
                </div>
              </form>
                <!-- END: Login Form -->
            </div>
        </div>

        <!-- BEGIN: JS Assets-->
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>
