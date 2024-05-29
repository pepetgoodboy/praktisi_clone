<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Praktisi</title>
</head>
<body>
    <div>
        <div class="flex h-[40px] bg-[#f4bb38] justify-end gap-x-10 px-20 py-3 font-medium text-xs">
            <a href="#" class="hover:text-white"><h3>alumni</h3></a>
            <a href="#" class="hover:text-white"><h3>e-journal</h3></a>
            <a href="#" class="hover:text-white"><h3>e-learning</h3></a>
        </div>
        <div class="flex h-[70px] bg-[#4b4b4b] px-8 justify-between">
            <div class="py-2">
                <img src="https://praktisi.ac.id/wp-content/uploads/elementor/thumbs/LOGO-Page_SQUARE-21012021-02-qdlgvh3ip72mjzif1p8sqnc1iezepw565w010rz20w.png" alt="Logo" class="w-[160px] h-[50px]">
            </div>
            <div class="flex gap-x-8 items-center">
                <a class="text-white font-semibold text-sm">Home</a>
                <a href="#" class="text-white font-semibold text-sm hover:text-[#f5a302]">Tentang Praktisi</a>
                <a href="#" class="text-white font-semibold text-sm hover:text-[#f5a302]">Akademik</a>
                <a href="#" class="text-white font-semibold text-sm hover:text-[#f5a302]">Berita Terkini</a>
                <a href="#" class="text-white font-semibold text-sm hover:text-[#f5a302]">Kontak Kami</a>
                <a href="/register">
                    <button class="text-white font-bold text-sm hover:bg-[#f4bb38] bg-[#f5a302] px-6 py-2 rounded-xl">Register</button>
                </a>
                <a href="/login">
                    <button href="/login" class="text-white font-bold text-sm hover:bg-[#f4bb38] bg-[#f5a302] px-6 py-2 rounded-xl">Login</button>
                </a>
            </div>
        </div>
        <div class="flex h-[500px] justify-center items-center">
            <h1>Coming Soon!</h1>
        </div>
    </div>
</body>
</html>