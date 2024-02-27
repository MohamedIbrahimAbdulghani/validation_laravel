<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Show Deleted Posts</title>
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
        <h1 class="text-center">All Delete Posts</h1>
        <table class="table text-center">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Process</th>
                </tr>
            </thead>
            <tbody>
            @foreach($delete_posts as $delete_post)
                <tr>
                <th scope="row">{{ $delete_post->id }}</th>
                <td>{{ $delete_post->title }}</td>
                <td>{{ $delete_post->body }}</td>
                <td>
                    <a href="{{route('posts.restore', $delete_post->id)}}" class="btn btn-secondary">Restore</a>
                    <form action="{{route('posts.force_delete', $delete_post->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger mt-2">Force Delete</button>
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
    </table>
        <a href="{{route('posts.create')}}">Add New Post</a>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>