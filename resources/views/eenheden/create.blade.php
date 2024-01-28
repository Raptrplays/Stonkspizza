<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Maak nieuwe eenheid aan</title>
</head>
<body class="bg-yellow-50">
    
<form action="/eenheden" method="POST" class="max-w-md mx-auto bg-neutral-900 p-6 rounded-lg mt-10">
    @csrf
    <label for="name" class="block text-yellow-50 font-bold mb-2">
        Eenheid
    </label>
    <input type="text" name="name" id="name" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">

    <input type="submit" value="Maak nieuwe eenheid aan" class="bg-green-800 text-yellow-50 py-2 px-4 mt-5 rounded">
</form>

</body>
</html>