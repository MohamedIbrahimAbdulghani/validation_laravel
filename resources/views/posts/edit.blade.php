<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit Posts</title>
    <style>
        a {
            color: #727272;
            text-decoration: none;
            text-align: center;
            display: table;
            margin: auto;
            margin-top: 5px;
            font-size: 20px;
            font-weight: bold;
        }
        h1 {
            color: #727272;
        }
    </style>
</head>
<body>
    

    <div class="container">
        <form action="{{route('posts.update', $post->id)}}" method="post" class="p-3 mt-3">
            @method("PUT")
            @csrf 
            <h1 class="text-center">Edit Post : {{$post->title}}</h1>
            <input type="text" name="title" class="form-control mb-3" value="{{$post->title}}">
            <input type="text" name="body" class="form-control mb-3" value="{{$post->title}}">
            <button type="submit" class="btn btn-primary d-table m-auto">Add</button>
        <a href="{{route('posts.index')}}">show All Posts</a>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>