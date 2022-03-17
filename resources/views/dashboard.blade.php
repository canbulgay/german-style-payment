<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container mx-auto p-48">
        <h1 class="text-indigo-400 text-2xl text-center bold">You must choose your table before seeing the bill </h1>
        <div class="flex justify-center space-x-10">
            @foreach ($checks as $check)
            <div class="bg-indigo-600 text-white rounded-full w-24 h-24 relative grid place-items-center mt-8">
                <div class="absolute">
                    <a  href="/dashboard/{{$check->id}}"><span class="text-center">Table {{$check->id}}</span></a>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</body>
</html>