<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
        /* nav{
            width: 80%;
            margin: 0 auto;

            padding-top:2rem; 
        } */
        * {
    /* padding: 0;
    margin: 0; */
    box-sizing: border-box;
}
body {
    /* font-family: "Red Hat Display", sans-serif;
    font-optical-sizing: auto;
    font-weight: 500;
    font-style: normal; */
    font-family: "Rubik", sans-serif;
  /* font-optical-sizing: auto; */
  /* font-weight: <weight>; */
  /* font-style: normal; */
  padding-bottom: 5rem
}
        .navContainer p.logo {
            color: #40A2E3;
            font-weight: 600;
            font-size: 1.2rem
        }
        header{
            /* background-color: #FFF6E9; */

        }
        .iBtn{
            font-size: 1.5rem;
            color: #232d52;
        }
        .searchBar{
            width: 50%;
            max-width:3800px ;
            position: relative;
            
            
        }
        .searchBar form{
            margin: 0;
        }
        .searchBar input{
            width: 95%;
            border: lightgrey 1px solid;
            padding: 0.5rem 1rem;
            border-radius: 20px;
        }
        .searchBar button{
            position: absolute;
            right: 39px;
            top: 11px;
            
        }
        .searchBar button i{
            color:rgb(136, 136, 136);

        }
        .profile{
            border:#FF004D 2px solid;
        }
        .footerBtn{
            width: 95%;
            border: rgb(236, 236, 236) 1px solid;
            margin-right:.5rem ;
            border-radius:5px; 
            color: #232d52;
            cursor: pointer;
        }
        .footerBtn:hover{
            background-color: #e8e9ec;
            color: white;
        }
        .dropdown-content{
            width: 200px;
        }
        .dropdown:hover .dropdown-content {
    display: flex;
    flex-direction: column;
    gap: 25px;
    justify-content: center;
    align-items: center;
}

    </style>


</head>
<body>
    <div class="bg-white mb-4 ">
        
   
    <header class="">
        <nav class="mx-auto my-0 max-w-screen-xl py-2  w-11/12 ">
            
            <div class="navContainer flex justify-between items-center">
       
                    <p class="italic logo cursor-pointer">Thought Bubble</p>


                       
            <div class="searchBar">
                <form action="">
                    <input placeholder="Search Users"/>
                    <Button type="submit"><i class="fa-solid fa-magnifying-glass"></i></Button> 
                </form>

    
            </div>
            @if (Auth::check())
            <div class="lastItems flex items-center gap-6 ">
                <button class="w-5"><i class="fa-solid iBtn fa-bookmark"></i></button>
                
                
                <div class="dropdown relative inline-block">
                    
                    
                        <div class="text-white text-rl cursor-poiture"> 
                            <button class="w-12 h-12 profile overflow-hidden rounded-3xl"><img class=" w-max h-full"  src="{{asset('/storage/images/profiles/'.Auth::user()->profil)}}" alt="Profile"></button>
                        </div>
                 
                    <div class="dropdown-content hidden absolute z-10 right-0 top-13 shadow bg-gray-50  w-50 p-3">
                       
                            <h3 class="text-gray-800 font-bold text-lg" >Welcome {{ Auth::user()->name }}</h3>
                            <button class="" onclick="location.href='/show-profile'"><i class="fa-solid fa-user"></i>&nbsp;More</button>
                            <button class="editbtn" onclick="location.href='/editUser'"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Edit</button>
                            <button class="bg-red-600 text-white rounded-xl py-2 px-3" onclick="location.href='/logout'"><i class=" fa fa-sign-out"></i>&nbsp;Log Out</button>
                        


                         </div>
                         </div>
            </div>
                           

            
            
            </div>
     
        </nav>

    </header>
    <main>
            <section class="bg-gray-20 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center">
            <!-- Left Side (Text) -->
            <div class="w-1/2 pr-8">
                <h2 class="text-3xl font-extrabold text-gray-900">Share Your Thoughts</h2>
                <p class="mt-4 text-lg text-gray-600">Let your voice be heard! Share your ideas, stories, and experiences with the world. Your words have the power to inspire, inform, and connect.</p>
                <div class="mt-6">
                    <a href="home/create-post" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg">Create a Post</a>
                </div>
            </div>
            <!-- Right Side (Image or Design) -->
            <div class="w-1/2">
                <img src="{{asset("/images/motivate.jpg")}}" alt="Motivational Image" class="w-full h-auto">
                <!-- Alternatively, you can add your design or any other content here -->
            </div>
        </div>
    
    
    </div>
</section>
    <div class="article-grid grid grid-cols-1 gap-5 my-0 mx-auto  w-1/2 ">
        {{-- post --}}
        <div class="title flex justify-center items-center mb-5">
            <h2 class="text-center font-extrabold text-2xl bg-gradient-to-r from-rose-400 via-fuchsia-500 to-indigo-500 bg-[length:100%_6px] bg-no-repeat bg-bottom">Latest Posts</h2>
        </div>
        @foreach ($posts as $post)
            
        <article class="bg-white shadow rounded-lg overflow-hidden p-5 cursor-pointer">
            <div class="author-row flex justify-start items-center gap-3">
                <a href=""><img class="w-10 h-10 rounded-3xl" src="{{asset('/storage/images/profiles/'.$post->user->profil)}}" alt=""></a>
                <div class="author-info">
                    <a class="text-gray-700 font-semibold" href="">{{$post->user->name}}</a>
                    <span>on {{$post->created_at->format('F d, Y')}}</span>
                    
                </div>
            </div>
            <h2 class="font-bold text-2xl ">{{$post->title}}</h2>
            <div class="card-content text-lg">{{$post->body}}</div>
            @if($post->image)
            <div class="thumbnail"><img class="h-60 w-fit mx-auto my-2" src="{{asset('/storage/images/posts/'.$post->image)}}" alt=""></div>

            @else 
            @endif
            <p class="font-light text-gray-600 mt-3">{{$post->likes()->count()}} likes, <a href="/comment/{{$post->id}}"> {{$post->comment()->count()}} comments</a></p>
            <div class="flex justify-between items-center pt-2">
                <form class="m-0 w-1/3" action="/like/{{$post->id}}" method="POST">
                    @csrf 
                    <button class="footerBtn" type="submit">Like</button>
                </form>
                <form class="m-0 w-1/3" action="/comment/{{$post->id}}" method="GET">
                    @csrf 
                    <button class="footerBtn" type="submit">Comment</button>
                </form>
                <form class="m-0 w-1/3" action="/save/{{$post->id}}" method="POST">
                    @csrf 
                    <button class="footerBtn" type="submit">Save</button>
                </form>
               
            </div>
        </article>
        @endforeach
    </div>
    </main>

    

                @else
                
            @endif
</body>
</html>