<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../public/styles.css">
</head>
<body>
<?php
include("C:/xampp/htdocs/AppGestion/resources/views/Tasks/haut.blade.php");
?>
<div class="container">
    <h1>Create a Task</h1>
    <div class="error">
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{route('task.list')}}">
        @csrf
        @method('post')
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Title">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" placeholder="Description">
        </div>
        <div>
            <label for="priority">Priority</label>
            <input type="text" id="priority" name="priority" placeholder="Priority">
        </div>
        <div>
            <input type="submit" value="Save task">
        </div>
    </form>
</div>
</body>
</html>
<?php
include("C:/xampp/htdocs/AppGestion/resources/views/Tasks/bas.blade.php");


?>
