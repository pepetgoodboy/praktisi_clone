<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Register</title>
</head>
<body>
    <div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://praktisi.ac.id/wp-content/uploads/elementor/thumbs/LOGO-Page_SQUARE-21012021-02-qdlgvh3ip72mjzif1p8sqnc1iezepw565w010rz20w.png" alt="praktisi">
    <h2 class=" text-center text-lg font-medium leading-9 tracking-tight text-gray-900">Sign up to your account</h2>
  </div>

  <div class="mt-2 sm:mx-auto sm:w-full border rounded-lg bg-white px-4 py-4 sm:px-10 sm:max-w-sm">
    <form class="space-y-6" action="" method="POST">
      @csrf
      <div>
        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
        <div class="mt-2">
          <input id="name" name="name" type="text" placeholder="Iqbal Mudzaki" required class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" placeholder="iqbal@praktisi.com" required class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
        <div class="mt-2">
          <input id="password" name="password" type="password" placeholder="********" required class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-[#f4bb38] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#f5a302] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 ">Sign Up</button>
      </div>
    </form>

    <p class="mt-4 text-center text-sm text-gray-500">
      Already have an account?
      <a href="/login" class="font-semibold leading-6 text-[#f4bb38] hover:text-[#f5a302]">Sign In Here</a>
    </p>
  </div>
</div>
</body>
</html>