<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Task</h1>

<div>
    @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
    @endif
</div>
<div>
    <div>
        <a href="{{route('task.create')}}">Create a task</a>
    </div>

    <table border="1">
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
                <td>
                    <a href="{{route('task.edit', ['task' => $task])}}">Edit</a>
                </td>

                <td>
                    <form method="post" action="{{route('task.delete', ['task'=>$task])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"/>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
