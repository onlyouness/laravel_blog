<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
    <title> Auth | Sign in</title>
    <style>
        .bgrdImage{
            background-image: url("{{asset('images/bg.jpg')}}");
            height: 100vh;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;

        }
        form input{
            padding: 8px 5px;
        }
    </style>
</head>
<body>
    <div class="bgrdImage" >
    
    <div class=" w-full h-screen  ">
        

            <div class=" bg-white p-8 rounded-lg shadow-md w-1/2 h-full flex justify-left flex-col items-start ">
                <h2 class="text-3xl w-full mt-8 text-center font-semibold mb-9">Get Started</h2>
            <form class="w-4/5" enctype="multipart/form-data" action="/register/addUser" method="post">
                 @csrf
                <div class="mb-4">
                    <label for="name" class="block text-base font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-base font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-base font-medium text-gray-700">Phone</label>
                    <input type="text" id="phone" name="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="adresse" class="block text-base font-medium text-gray-700">Adresse</label>
                    <input type="text" id="adresse" name="adresse" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="profil" class="block text-base font-medium text-gray-700">Profil</label>
                    <input type="file" id="profil" name="profil" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-base font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1  block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            
            <div class="mt-8">
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sign in
                </button>
            </div>
        </form>
    </div>
</div>

</div>
</body>
</html>