<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Create Posts</title>
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

        <form action="{{route('posts.store')}}" method="post" class="p-3 mt-3">
            @csrf 
            <h1 class="text-center">Add New Post</h1>
                <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif -->
            <input type="text" name="title" value="{{old('title')}}" class="form-control mb-3 @error('title') is-invalid @enderror" placeholder="Please, Enter Title">
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="text" name="body" value="{{old('body')}}" class="form-control mb-3 @error('body') is-invalid @enderror" placeholder="Please, Enter Body">
            @error('body')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <button type="submit" class="btn btn-primary d-table m-auto">Add</button>
        <a href="{{route('posts.index')}}">show All Posts</a>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>