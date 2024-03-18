<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

    <title>Laravel</title>
</head>

<body>
    <div>
        <h1>Tasks</h1>
        <a href="#">New Task</a>
        <ul>
            <li>
                <h2>Title</h2>
            </li>
        </ul>
    </div>
</body>

</html>
