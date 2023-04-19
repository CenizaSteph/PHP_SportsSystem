<!doctype html>
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
                <a href="index.php" class="px-5 hover:bg-f5e80d hover:text-0c00ff transition ease-in-out duration-500">Home</a>
                <a href="#" class="px-5 hover:bg-f5e80d hover:text-0c00ff transition ease-in-out duration-500">About</a>
                <a href="#" class="px-5 hover:bg-f5e80d hover:text-0c00ff transition ease-in-out duration-500">Schedules</a>
                <a href="#" class="px-5 hover:bg-f5e80d hover:text-0c00ff transition ease-in-out duration-500">Sports</a>
                <a href="#" class="px-5 hover:bg-f5e80d hover:text-0c00ff transition ease-in-out duration-500">Scores</a>
            </div>
        </div>
        <!--Buttons right-->
        <div class="mb-20 py-12 hidden md:col-span-1 md:flex md:justify-center">
            <div class="flex jusify-center text-white">
                <a class="navbtn border-2 bg-blue-700">Log in</a>
                <a href="signup.php" class="navbtn ml-5 border-2 hover:bg-f5e80d transition ease-in-out duration-500">Sign up</a>
            </div>
        </div>
    </div>
    <!--Form-->
    <div class="flex justify-center items-center h-screen bg-slate-200">
        <div id="form" class="block bg-slate-50 mt-10 p-6 rounded-xl shadow-md shadow-slate-300 w-90">
            <form method="post" action="../controller/controller.php">
                <h2 class="text-blue-700 text-3xl font-semibold my-4">Login</h2>
                <!--Email-->
                <label for="email" class="text-sm">Email</label>
                <br>
                <input type="email" name="email" id="email" class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm">
                <!--Password-->
                <label for="password" class="text-sm">Password</label>
                <br>
                <input type="password" name="password" id="password" class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm">
                <!--Login Button-->
                <input type="submit" name="login" id="login" class="mt-5 bg-blue-700 w-full h-10 cursor-pointer text-white rounded-md hover:bg-blue-600 hover:outline outline-2 outline-blue-600 outline-offset-2 text-sm">
                <br>
                <p class="text-xs mt-8">Don't have an account? <a href="signup.php" class="text-blue-600">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html>