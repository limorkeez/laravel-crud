<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do List</title>
</head>
<body>
    
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-4xl mb-2 font-bold">To-do List</h1>
            <a href="/posts/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block my-6 shadow-lg rounded transition hover:bg-blue-600">
                Add new entry
            </a>
        </div>

        @foreach($posts as $post)

        <article class="mb-2">
            <h2 class="text-xl font-bold text-gray-900">{{$post->title}}</h2>
            <hr>
            <p class="text-md text-gray-600 my-4">{{$post->content}}</p>
            <hr>
            <p class="text-md text-gray-600 my-2">Due date: <span class="font-semibold">{{$post->due}}</span></p>
            <div class="flex justify-end gap-4">
                <a href="/posts/{{$post->id}}/edit" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded transition hover:bg-blue-600">Edit</a>
                <form method="POST" action="/posts/{{$post->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-700 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded transition hover:bg-red-800">Delete</button>
                </form>
            </div>
        </article>

        @endforeach


    </div>

    

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>