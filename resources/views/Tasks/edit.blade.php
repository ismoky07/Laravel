<!-- resources/views/task/edit.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a Task</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 20px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"] {
            width: calc(100% - 22px);
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 15px 25px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group::after {
            content: "";
            display: table;
            clear: both;
        }

        .form-group label {
            float: left;
            width: 30%;
            text-align: right;
            margin-right: 4%;
            line-height: 32px;
        }

        .form-group input[type="text"] {
            float: left;
            width: 66%;
        }
    </style>

</head>
<body>
<?php
include("C:/xampp/htdocs/AppGestion/resources/views/Tasks/haut.blade.php");


?>
<div class="container">
    <h1>Edit a Task</h1>
    <div class="error">
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{ route('task.update', ['task' => $task->id]) }}">
        @csrf
        @method('put')
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Title" value="{{ $task->title }}">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" placeholder="Description" value="{{ $task->description }}">
        </div>
        <div>
            <label for="priority">Priority</label>
            <input type="text" id="priority" name="priority" placeholder="Priority" value="{{ $task->priority }}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</div>
<?php
include("C:/xampp/htdocs/AppGestion/resources/views/Tasks/bas.blade.php");


?>
</body>
</html>
