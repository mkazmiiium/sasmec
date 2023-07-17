<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SASCOMS</title>

    <!-- FAVICON -->
    <link href="images/dsc-logo.jpg" rel="shortcut icon" />

    <link rel="stylesheet" href="/css/app.css">
    <!-- <link rel="stylesheet" href="/css/login.css"> -->
</head>


<body class="bg-cover bg-center bg-no-repeat bg-fixed flex flex-col items-center justify-center" style="background-image: url('images/sasmec-iium.jpg')">
    <div class="flex justify-center">
        <img src="images/Uialonglogo.jpeg" width="120%" style="border-radius: 10px; margin: 2%;">
    </div>
    <div class=" items-center content-center justify-center g-gray-200 bg-opacity-75" style="background-color: #2CA2A2; width: 70%; height: 80vh; border-radius: 1%; opacity: 0.9; padding-top: 1px; margin-top: 0; grid-gap: 1px;">


        <h1 style="text-align: center; color: white; font-weight: bold; font-size: 20px; margin-top: 3%">SASMEC SHARIAH COMPLIANCE REPORTING MONITORING <br> SYSTEM (SASCOMS)</h1>
        <div class="flex justify-center" style="padding: 10px;">
            <img src="images/dsc-logo.jpg" alt="" height="130px" width="140px" style="border-radius: 20%;">
            <!-- <img src="images/sasmec-iium-logo.png" alt="" height="150px" width="270px"> -->
        </div>

        <h1 style="font-size: 40px; font-weight: bold; text-align: center">LOGIN</h1>
        <div class="flex justify-center" style="padding: 30px;">
            <div style="background-color: #081C1B; padding: 60px; border-radius: 10px; width: 100vh;">
                <form class="pt-0" method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="flex items-center justify-center w-full px-4 py-2 rounded-md">
                        <input type="email" name="email" id="email" class="form-input w-full px-4 py-3 rounded-full placeholder-gray-500 placeholder-opacity-100" placeholder="Email" required>
                    </div>

                    <!-- Password -->
                    <div class="flex items-center justify-center w-full px-4 py-2 rounded-md">
                        <input type="password" name="password" id="password" class="form-input w-full px-4 py-3 rounded-full placeholder-gray-500 placeholder-opacity-100" placeholder="Password" required>
                    </div>

                    <div class="flex items-center justify-end mt-4 mr-4 ">
                        <x-button class="ml-3" style="background-color: #2CA2A2;">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
        <!-- <div class="flex justify-center absolute bottom-5 place-self-center">
           

            
        </div> -->
    </div>




</body>

</html>