<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post's comment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>     .footerBtn{
        width: 95%;
        border: rgb(236, 236, 236) 1px solid;
        margin-right:.5rem ;
        border-radius:5px; 
        color: #232d52;
        cursor: pointer;
    }
    body{
        background-color: #EFECEC;
    } 
    .title h2{
        color: #0C2D57;
    }
    .footerBtn:hover{
        background-color: #e8e9ec;
        color: white;
    }</style>
</head>
<body>
    <div class="article-grid grid grid-cols-1 gap-5 my-4 mx-auto  w-4/5 ">
        <div class="py-3 flex items-center gap-2"><a href="/home" class="fa-solid text-gray-300 text-xl fa-house"></i></a> <span class="text-gray-300 text-xl font-bold">></span> <span class="text-gray-600 text-xl font-extrabold">Comments</span></div> 
            
        <article class="bg-white shadow rounded-lg overflow-hidden p-5 cursor-pointer">
            <div class="author-row flex justify-start items-center gap-3">
                <a href=""><img class="w-10 h-10 rounded-3xl" src="{{asset('/storage/images/profiles/'.$post->user->profil)}}" alt=""></a>
                <div class="author-info">
                    <a class="text-gray-700 font-semibold" href="">{{$post->user->name}}</a>
                    <span>on {{$post->created_at->format('F d, Y')}}</span>
                    
                </div>
            </div>
            <h2 class="font-bold mt-4 text-2xl ">{{$post->title}}</h2>
            <div class="card-content text-lg">{{$post->body}}</div>
            @if($post->image)
            <div class="thumbnail"><img class="h-60 w-fit mx-auto my-2" src="{{asset('/storage/images/posts/'.$post->image)}}" alt=""></div>

            @else 
            @endif
            <div class="flex justify-between items-center pt-6">
                <form class="m-0 w-1/3" action="/like/{{$post->id}}" method="POST">
                    @csrf 
                    
                    <button class="footerBtn" type="submit">Like</button>
                </form>
                <form class="m-0 w-1/3" action="/comment/{{$post->id}}" method="POST">
                    @csrf 
                    <button class="footerBtn" type="submit">Comment</button>
                </form>
                <form class="m-0 w-1/3" action="/save/{{$post->id}}" method="POST">
                    @csrf 
                    <button class="footerBtn" type="submit">Save</button>
                </form>
               
            </div>
        </article>
        <article class="bg-gray-50 shadow overflow-hidden p-5 rounded-lg">
            <div class="title flex justify-center items-center">
                <h2 class="text-center font-extrabold text-2xl bg-gradient-to-r from-rose-400 via-fuchsia-500 to-indigo-500 bg-[length:100%_6px] bg-no-repeat bg-bottom">Comments</h2>
            </div>
            <div class="createComment">
                <form action="/post/comments/{{$post->id}}" method="post">
                    @csrf
                    <h3 class="text-lg mt-4">Leave a comment!</h3>
                    <div class="flex justify-start items-end gap-4 my-3">
                        <textarea class="w-3/5  border border-gray-400 p-2 rounded-lg" placeholder="New Comment!" id="comment" name="content"></textarea>
                        <button type="submit" class="px-2 py-3 bg-blue-500 text-center text-m text-white rounded-lg">Publish </button>
                    </div>
                </form>
            </div>
            <div class="comments grid grid-cols-1 gap-4">
                @foreach($comments as $comment)
                <article class="bg-white shadow rounded-lg overflow-hidden p-5 cursor-pointer">
                    <div class="author-row flex justify-start items-center gap-3">
                        <a href="/"><img class="w-10 h-10 rounded-3xl" src="{{asset('/storage/images/profiles/'.$comment->user->profil)}}" alt=""></a>
                        <div class="author-info">
                            <a class="text-gray-700 font-semibold" href="/">{{$comment->user->name}}</a>
                            <span>on {{$comment->created_at->format('F d, Y')}}</span>
                            
                        </div>
                    </div>
                    <div class="card-content text-lg">{{$comment->content}}</div>
                
                   
                </article>
                @endforeach
     
                
            </div>

        </article>
    </div>

    
</body>
</html>