<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>SoothRoad | admin login</title>
</head>
<body>
    <div class="h-screen w-screen flex p-auto">
        <x-signinAd />
    </div>
    {{-- <x-signup/> --}}

    @livewireScripts
    <script src="https://kit.fontawesome.com/f5f4cb5593.js" crossorigin="anonymous"></script>
</body>
</html>
