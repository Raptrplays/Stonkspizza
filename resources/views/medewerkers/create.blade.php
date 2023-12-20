<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Maak nieuwe medewerker aan</title>
</head>
<body>
    <form action="" method="POST" class="max-w-md mx-auto bg-neutral-900 p-6 rounded-lg mt-10">
        @csrf
        <label for="voornaam" class="block text-white font-bold mb-2">
            Voornaam
        </label>
        <input type="text" name="voornaam" id="voornaam" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
    
        <label for="achternaam" class="block text-white font-bold mb-2">
            Achternaam
        </label>
        <input type="text" name="achternaam" id="achternaam" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">

        <label for="addres" class="block text-white font-bold mb-2">
            Adres
        </label>
        <input type="text" name="addres" id="addres" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">

        <label for="telefoonnummer" class="block text-white font-bold mb-2">
            Telefoonnummer
        </label>
        <input type="number" name="telefoonnummer" id="telefoonnummer" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">

        <label for="stad" class="block text-white font-bold mb-2">
            Stad
        </label>
        <input type="text" name="stad" id="stad" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">

        <label for="BSN" class="block text-white font-bold mb-2">
            BSN
        </label>
        <input type="text" name="BSN" id="BSN" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
    
        <input type="submit" value="Voeg nieuwe medewerker toe" class="bg-green-500 text-white py-2 px-4 m-3 rounded">
    </form>
</body>
</html>