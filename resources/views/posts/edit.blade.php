<?php
    $dueDB = $post->due;
    $dueFormatted = date('Y-m-d\TH:i', strtotime($dueDB));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do List</title>
</head>
<body>
    
    <div class="container max-w-full mx-auto pt-4 w-[900px]">

        <h1 class="text-4xl font-semibold text-center mb-3">Edit your task</h1>

        <form method="POST" action="/posts/{{ $post->id }}">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label for="title" class="font-bold text-gray-800">Title:</label>
                <input type="text" class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title" value="{{$post->title}}">
            </div>

            <div class="mb-4">
                <label for="content" class="font-bold text-gray-800">Content:</label>
                <textarea type="text" class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content">{{$post->content}}</textarea>
            </div>

            <div class="mb-4">
                <label for="due" class="font-bold text-gray-800">Due Date:</label>
                <input type="datetime-local" class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="due" name="due" value="{{$dueFormatted}}">
            </div>

            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>

            <a href="/posts" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Go back</a>

        </form>


    </div>


<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>