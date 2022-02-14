{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js/app.js') }}" rel="stylesheet">

    @livewireStyles
</head>

<body class="antialiased">
    <div>
        @livewire('test')
        <h1 class="text-3xl font-bold underline bg-red-700">
            Hello world!
        </h1>
        <div x-data="{ show: false }">
            <button @click="show = !show">Show</button>
            <h1 x-show="show">Alpine Js is working !</h1>
        </div>
        <div x-data="{ show: false }">
            <button @click="show = !show">Show</button>
            <h1 x-show="show">Alpine Js is working !</h1>
        </div>
    </div>
    @livewireScripts
</body> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alpine Js</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles

</head>

<body>
    <h1 class="text-3xl font-bold underline bg-red-700">
        Hello world!
    </h1>
    <div x-data="{ show: false }">
        <button @click="show = !show">Show</button>
        <h1 x-show="show">Alpine Js is working !</h1>
    </div>
    <div x-data="{ show: false }">
        <button @click="show = !show">Show</button>
        <h1 x-show="show">Alpine Js is working !</h1>
    </div>
    <hr>

    <div x-data>
        <button @click="alert('Alpine Js is working !')">Click</button>
    </div>

    @livewireScripts
</body>

</html>
