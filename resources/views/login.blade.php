<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="/resources/css/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Pica Electric</title>
  </head>

  <body>
    <nav class="fixed w-full border-b border-gray-200 bg-white shadow-md">
      <div class="px-5 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between px-5">
          <div class="flex items-center">
            <img src="/assets/img/L.png" class="mr-3 h-8" alt="Flowbite Logo" />
            <span class="self-center whitespace-nowrap text-xl font-semibold dark:text-white sm:text-2xl">Potuh</span>
          </div>
          <button data-collapse-toggle="navbar-default" type="button"
            class="ml-3 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 md:hidden"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
              class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0">
              <li>
                <a href="#"
                  class="block rounded px-2 py-2 text-gray-900 hover:bg-gray-100 md:hover:text-indigo-500 md:dark:hover:bg-transparent">Beranda</a>
              </li>
              <li>
                <a href="#"
                  class="block rounded px-2 py-2 text-gray-900 hover:bg-gray-100 md:hover:text-indigo-500 md:dark:hover:bg-transparent">Tentang</a>
              </li>
              <li>
                <a href="#"
                  class="md:hover:text-indigo-500md:dark:hover:bg-transparent block rounded px-2 py-2 text-gray-900 hover:bg-gray-100">Layanan</a>
              </li>
              <li>
                <a href="#"
                  class="block rounded px-2 py-2 text-gray-900 hover:bg-gray-100 md:hover:text-indigo-500 md:dark:hover:bg-transparent">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <section class="flex min-h-screen items-center justify-center bg-gray-100">
      <div class="w-full max-w-md space-y-6 rounded-lg bg-white p-8 shadow-md">
        <h2 class="text-center text-2xl font-bold text-gray-900">Selamat Datang</h2>
        <form class="space-y-6">
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <div class="mt-1">
              <input type="email" name="email" id="email"
                class="block w-full rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                required>
            </div>
          </div>
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Sandi</label>
            <div class="mt-1">
              <input type="password" name="password" id="password"
                class="block w-full rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                required>
            </div>
          </div>
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input id="remember_me" name="remember_me" type="checkbox"
                class="h-4 w-4 rounded border-gray-300 text-indigo-500 focus:ring-indigo-500">
              <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember me</label>
            </div>

          </div>
          <div>
            <button type="submit"
              class="flex w-full justify-center rounded-md border border-transparent bg-indigo-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              Masuk
            </button>
          </div>
        </form>
      </div>
    </section>

    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
  </body>

</html>
