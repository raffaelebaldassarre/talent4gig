<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Challenge</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
        <header>
            <h1>Talent4GiG - Challenge</h1>
            <div class="select">
                <select v-model="breed">
                    <option>Scegli la tua razza preferita</option>
                    <option v-for="breed in breedList">@{{breed}}</option>
                </select>
                <button v-on:click="randomDogByBreed()" class="btn btn-primary">Click</button>
            </div>
        </header>
        <main>
            <div class="img-dog">
                <img :src="randomDog" alt="">
            </div>
        </main>
        </div>
    </body>
</html>