<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>

<body>
    <h1>Hello {{ $name }}</h1>

    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }} <br>
    @endfor

    @foreach ($users as $user)
        <p>This is user {{ $user }}</p>
    @endforeach

</body>

</html>
