<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
    <section class="py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
           <div class="py-5 flex items-center gap-2"><a href="/home"><i class="fa-solid text-gray-300 text-xl fa-house"></i></a> <span class="text-gray-300 text-xl font-bold">></span> <span class="text-gray-600 text-xl font-extrabold">Create</span></div> 
            <h2 class="text-3xl font-extrabold text-gray-900 mb-8">Add new post!</h2>
            <form action="/save-post" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                    <input type="text" id="title" name="title" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your post title">
                </div>
                <div class="mb-6">
                    <label for="body" class="block text-gray-700 font-bold mb-2">Content</label>
                    <textarea id="body" name="body" rows="6" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Write your post content here"></textarea>
                </div>
           
                <p class="block text-gray-700 font-bold mb-2">Image</p>
<div class="flex items-center justify-center w-full">
    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 ">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
        </div>
        <input id="dropzone-file" type="file" name="image" class="hidden" />
    </label>
</div> 

                <div>
                    <button type="submit" class="bg-blue-500 mt-5 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg">Publish Post</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>