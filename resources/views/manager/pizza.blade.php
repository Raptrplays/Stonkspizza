<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Pizza's beheren</title>
</head>
<body>
    <header class="bg-black text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">
                StonksPizza
            </div>
            <nav class="space-x-4">
                @if (Route::has('login'))
                <div class="text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            </nav>
        </div>
    </header>

    <tbody>
        <table class="table text-white">
            <thead>
              <tr>
                <th>Pizza</th>
                <th>Id</th>
              </tr>
            </thead>
              <tbody>
                @foreach($pizzas as $pizza)
                    <tr>
                        <td class="px-4 py-3">
                            {{ $pizza->name }}
                        </td>
                        <td class="px-4 py-3">
                            {{ $pizza->id}}
                        </td>
                        <td class="px-4 py-3">
                            <a href="#" class="bg-blue-600 hover:bg-blue-300 text-white py-1 px-1 m-3 rounded">Pas pizza aan</a>
                            <form action="#" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-600 hover:bg-red-500 text-white py-1 px-1 m-3 rounded">Verwijder pizza</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <button class="bg-green-500 text-white py-1 px-1 m-3 rounded">
            <a href="pizza/create">Voeg nieuwe pizza toe</a>
        </button>
    </tbody>
</body>
</html>
