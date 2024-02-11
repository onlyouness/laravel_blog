<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
    <title>Login</title>
    <style>
        .bgrdImage{
            background-image: url("{{asset('images/bg.jpg')}}");
            height: 100vh;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;

        }
        input{
            padding: 8px 0;
        }
    </style>
</head>
<body>
    <div class="bgrdImage" >
    
    <div class=" h-screen flex justify-center items-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-80">
            <h2 class="text-3xl text-center font-semibold mb-4">Login</h2>
            <form  action="/login/addUser" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-base font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-base font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1  block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            
            <div class="mt-4">
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sign in
                </button>
            </div>
            <div class="mt-5">
                Not registered?
                <a href="/register" class="font-medium  text-blue-600 hover:text-blue-500">Register</a>
                
            </div>
        </form>
    </div>
</div>

</div>
</body>
</html>