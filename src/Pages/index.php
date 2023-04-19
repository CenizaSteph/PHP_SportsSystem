<!doctype html>

<?php
include('../controller/config.php');
session_start();
?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../../dist/output.css" rel="stylesheet">
</head>
<body class="font-sans">
    <!--Nav-->
    <div class="bg-black h-36 grid md:grid-cols-3 fixed">
        <!--Logo Left-->
        <div class="mt-6 md:col-span-1 md:flex md:justify-center">
            <nav>
                <div class="flex items-center">
                    <img src="../images/Logo.png" class="h-auto w-1/5 md:ml-10 md:p-0 md:m-0 md:w-1/5">
                    <h1 class="text-f5e80d text-xl font-extrabold">
                        Team <span class="text-0c00ff"> Sports </span>
                        <br> 
                        <span class="text-0c00ff"> Scheduling </span> System
                    </h1>
                    <div class="px-4 justify-between cursor-pointer md:hidden ml-10">
                        <svg class="w-10 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg>
                    </div>
                </div>
            </nav>
        </div>
        <!--Navigation Center-->
        <div class="md:mt-16 mb-32 hidden md:col-span-1 md:flex md:justify-center">
            <div class="flex justify-center text-f5e80d font-extrabold text-sm md:text-lg">
                <a class="px-5 bg-f5e80d text-0c00ff transition ease-in-out duration-500">Home</a>
                <a href="#" class="px-5 hover:bg-f5e80d hover:text-0c00ff transition ease-in-out duration-500">About</a>
                <a href="#" class="px-5 hover:bg-f5e80d hover:text-0c00ff transition ease-in-out duration-500">Schedules</a>
                <a href="#" class="px-5 hover:bg-f5e80d hover:text-0c00ff transition ease-in-out duration-500">Sports</a>
                <a href="#" class="px-5 hover:bg-f5e80d hover:text-0c00ff transition ease-in-out duration-500">Scores</a>
            </div>
        </div>
        <!--Buttons right-->
        <div class="mb-20 py-12 hidden md:col-span-1 md:flex md:justify-center">
            <div class="flex jusify-center text-white">
                <a href="login.php" class="navbtn border-2 hover:bg-0c00ff transition ease-in-out duration-500">Log in</a>
                <a href="signup.php" class="navbtn ml-5 border-2 hover:bg-f5e80d transition ease-in-out duration-500">Sign up</a>
            </div>
        </div>
    </div>
</body>
</html>