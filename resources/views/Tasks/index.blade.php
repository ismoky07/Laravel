<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .success {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 10px;
            border: 1px solid #d6e9c6;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .create-task {
            margin-bottom: 20px;
            text-align: center;
        }
        .create-task a {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
        }
        .create-task a:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .edit, .delete {
            text-align: center;
        }
        .edit a, .delete form input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
        }
        .delete form input[type="submit"] {
            background-color: #dc3545;
            border: none;
            cursor: pointer;
        }
        .edit a:hover, .delete form input[type="submit"]:hover {
            background-color: #218838;
        }
        .delete form input[type="submit"]:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
<?php
include("C:/xampp/htdocs/AppGestion/resources/views/Tasks/haut.blade.php");


?>

<div class="container">
    <h1>Task</h1>

    <div>
        @if(session()->has('success'))
            <div class="success">
                {{session('success')}}
            </div>
        @endif
    </div>
    <div class="create-task">
        <a href="{{route('task.create')}}">Create a task</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Priority</th>
            <th>Created At</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->priority}}</td>
                <td>{{$task->created_at}}</td>
                <td class="edit">
                    <a href="{{route('task.edit', ['task' => $task])}}">Edit</a>
                </td>
                <td class="delete">
                    <form method="post" action="{{route('task.destroy', ['task'=>$task])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"/>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
<?php
include("C:/xampp/htdocs/AppGestion/resources/views/Tasks/bas.blade.php");


?>
</body>
</html>
