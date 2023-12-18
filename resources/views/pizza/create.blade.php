<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maak nieuwe pizza aan</title>
</head>
<body>
    
<form action="/pizza" method="POST" class="max-w-md mx-auto bg-neutral-900 p-6 rounded-lg mt-10">
    @csrf
    <label for="name" class="block text-gray-700 font-bold mb-2">
        Pizza
    </label>
    <input type="text" name="name" id="name" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">

    <input type="submit" value="Maak nieuwe pizza aan" class="bg-green-500 text-white py-2 px-4 m-3 rounded">
</form>

</body>
</html>