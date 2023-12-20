<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Ingredienten beheren</title>
</head>
<body class="bg-yellow-50">
    <header class="bg-green-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">
                StonksPizza
            </div>
            <nav class="space-x-4">
                <a href="#" class="hover:text-gray-300">Inloggen</a>
                <a href="#" class="hover:text-gray-300">mandje</a>
            </nav>
        </div>
    </header>

    <div class="flex">
        @foreach($pizzas as $pizza)
        <div class="flex-1 bg-yellow-50 p-4 m-10 shadow-md shadow-black rounded-sm">
            <h1>{{ $pizza->name }}</h1>
            <h1>{{ $pizza->id }}</h1>
        </div>     
        @endforeach     
    </div>

</body>
</html>