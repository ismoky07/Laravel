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
        <h1>Edit a Task</h1>
        <div>

            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $errors)
                        <li>{{$errors}}</li>
                    @endforeach

                </ul>


            @endif
        </div>
        <form method="post" action="{{route('task.update',['task' =>$task])}}">
            @csrf
            @method('put')
            <div>
                <label> Title </label>
                <input type="text" name="title" placeholder="Title" value="{{$task->title}}"><br> <br>
            </div>
                <label> Description </label>
                <input type="text" name="description" placeholder="Description" value="{{$task->description}}"/><br> <br>

            <div>
                <label> Priority </label>
                <input type="text" name="priority" placeholder="Priority" value="{{$task->priority}}"/>
            </div>

            <div>
                <input type="submit" value="Update" />
            </div>
        </form>
</body>
</html>
