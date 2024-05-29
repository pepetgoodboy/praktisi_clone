<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-col min-h-screen justify-center items-center gap-8">
        <h3>Selamat Datang {{ auth()->user()->name }}</h3>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <input type="submit" class="px-4 py-2 bg-[#f4bb38] text-white rounded-xl cursor-pointer hover:bg-[#f5a302]" value="Logout">
        </form>
    </div>
</body>
</html>