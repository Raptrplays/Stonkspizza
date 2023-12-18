<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Pas medewerker aan</title>
</head>
<body>
    <form action="{{ url('medewerker/' . $medewerker->id) }}" class="max-w-md mx-auto bg-neutral-900 p-6 rounded-lg mt-10" method="POST">
        @csrf
        @method('put')
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="name">Voornaam</label>
            <input type="text" id="name" name="name" value=" {{ $medewerker->first_name }} " placeholder="voornaam" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="lastname">Achternaam</label>
            <input type="text" id="lastname" name="lastname" value=" {{ $medewerker->last_name }} " placeholder="achternaam" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="addres">Adres</label>
            <input type="text" id="addres" name="addres" value=" {{ $medewerker->addres }} " placeholder="adres" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="phone">Telefoonnummer</label>
            <input type="number" id="phone" name="phone" value=" {{ $medewerker->phone }} " placeholder="telefoonnummer" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="zipcode">Postcode</label>
            <input type="text" id="zipcode" name="zipcode" value=" {{ $medewerker->zipcode }} " placeholder="postcode" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="city">Stad</label>
            <input type="text" id="city" name="city" value=" {{ $medewerker->city }} " placeholder="stad" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="country">Land</label>
            <input type="text" id="country" name="country" value=" {{ $medewerker->country }} " placeholder="land" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="personal_email">Persoonlijke email</label>
            <input type="email" id="personal_email" name="personal_email" value=" {{ $medewerker->personal_email }} " placeholder="persoonlijke email" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="birth_date">Geboortedatum</label>
            <input type="date" id="birth_date" name="birth_date" value=" {{ $medewerker->birth_date }} " placeholder="geboortedatum" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="burger_service_nummer">BSN</label>
            <input type="text" id="burger_service_nummer" name="burger_service_nummer" value=" {{ $medewerker->burger_service_nummer }} " placeholder="bsn" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div>
            <button type="submit" class="bg-green-500 text-white py-2 px-4 m-3 rounded">Submit</button>
        </div>
    </form>
</body>
</html>