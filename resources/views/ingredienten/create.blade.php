<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maak nieuw ingredient aan</title>
</head>
<body>
    <form action="" method="POST" class="max-w-md mx-auto bg-neutral-900 p-6 rounded-lg mt-10" method="POST">
        @csrf
        <label for="naam" class="block text-gray-700 font-bold mb-2">
            Naam
        </label>
        <input type="text" name="naam" id="naam" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
    
        <label for="prijs" class="block text-gray-700 font-bold mb-2">
            Prijs
        </label>
        <input type="text" name="prijs" id="prijs" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">

        <label for="eenheid" class="block text-gray-700 font-bold mb-2">Eenheid</label>
        <select id="eenheid" name="eenheid" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
            @foreach ($albums as $album)
                <option value="{{ $album->id }}">{{ $album->name }}</option>
            @endforeach
        </select>
        
        <input type="submit" value="Voeg nieuw ingredient toe" class="bg-green-500 text-white py-2 px-4 m-3 rounded">
    </form>
    
</body>
</html>