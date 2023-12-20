<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Ingredienten beheren</title>
</head>
<body>
    <header class="bg-black text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">
                StonksPizza
            </div>
            <nav class="space-x-4">
                <a href="#" class="hover:text-gray-300">Uitloggen</a>
            </nav>
        </div>
    </header>

    <tbody>
        <table class="table text-white">
            <thead>
              <tr>
                <th>Ingredient</th>
                <th>Eenheid</th>
                <th>Id</th>
              </tr>
            </thead>
              <tbody>
                @foreach ($ingredients as $ingredient)
                    <tr>
                        <td class="px-4 py-3">
                            {{ $ingredient->name}}
                        </td>
                        <td class="px-4 py-3">
                        </td>    
                        <td class="px-4 py-3">
                        </td>
                        <td class="px-4 py-3">
                            <a href="#" class="bg-blue-600 hover:bg-blue-300 text-white py-1 px-1 m-3 rounded">Pas ingredient aan</a>
                            <form action="#" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-600 hover:bg-red-500 text-white py-1 px-1 m-3 rounded">Verwijder ingredient</button>
                            </form>
                        </td>
                    </tr> 
                    @endforeach
            </tbody>
        </table>
        <button class="bg-green-500 text-white py-1 px-1 m-3 rounded">
            <a href="create">Voeg nieuw ingredient toe</a>
        </button>
    </tbody>
</body>
</html>