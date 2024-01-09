<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Medewerkers beheren</title>
</head>
<body>
    <header class="bg-green-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">
                StonksPizza
            </div>
        </div>
    </header>

    <tbody>
        <table class="table text-black">
            <thead>
              <tr>
                <th>Naam</th>
                <th>Achternaam</th>
                <th>Telefoonnummer</th>
                <th>Stad</th>
                <th>Id</th>
              </tr>
            </thead>
              <tbody>
                @foreach($medewerkers as $medewerker)
                    <tr>
                        <td class="px-4 py-3">
                            {{ $medewerker->voornaam }}
                        </td>
                        <td class="px-4 py-3">
                            {{ $medewerker->achternaam }}
                        </td> 
                        <td class="px-4 py-3">
                            {{ $medewerker->telefoonnummer }}
                        </td>
                        <td class="px-4 py-3">
                            {{ $medewerker->stad }}
                        </td>     
                        <td class="px-4 py-3">
                            {{ $medewerker->id }}
                        </td>
                        <td class="px-4 py-3">
                            <a href="#" class="bg-blue-600 hover:bg-blue-300 text-yellow-50 py-1 px-1 m-3 rounded">Pas medewerker aan</a>
                            <form action="#" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-600 hover:bg-red-500 text-yellow-50 py-1 px-1 m-3 rounded">Verwijder medewerker</button>
                            </form>
                        </td>
                    </tr> 
                    @endforeach
            </tbody>
        </table>
        <button class="bg-green-800 text-yellow-50 py-1 px-1 m-3 rounded">
            <a href="medewerkers/create">Voeg nieuwe medewerker toe</a>
        </button>
    </tbody>

</body>
</html>