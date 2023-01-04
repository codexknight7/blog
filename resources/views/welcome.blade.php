<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

     </head>
    <body>
        <ul>
            @foreach ($tasks as $task)
                <li>{{$task->body}}</li>
            @endforeach
        </ul>
    </body>
</html>
