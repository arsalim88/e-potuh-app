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
    <nav class="fixed w-full border-gray-200 bg-white shadow-md">
      <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">

        <div class="flex items-center">
          <img src="/assets/img/L.png" class="mr-3 h-8" alt="Flowbite Logo" />
          <span class="self-center whitespace-nowrap text-xl font-semibold dark:text-white sm:text-2xl">Potuh</span>
        </div>
        <button data-collapse-toggle="navbar-default" type="button"
          class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
          aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15" />
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

    <section class="flex h-screen items-center justify-center bg-gray-300">
      <div class="mx-auto max-w-screen-lg px-4 py-8 text-center lg:py-16">
        <h1
          class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
          We are your electricity friends</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 dark:text-gray-400 sm:px-16 lg:px-48 lg:text-xl">At
          e-Electrik we focus on the home electricity payment market which is simple and easy to use without
          having to leave the house to look for a place to pay.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
          <a href="#"
            class="inline-flex items-center justify-center rounded-lg bg-blue-700 px-5 py-3 text-center text-base font-medium text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Cek-Now
            <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
          </a>
        </div>
      </div>
    </section>

    <div class="h-screen px-12 lg:px-12">
      <div class="container mx-auto max-w-screen-xl pt-24">
        <h2 class="text-center text-3xl font-bold">Why Choose e-Electric?</h2>
        <div class="mt-8 grid grid-cols-2 items-center gap-4 pt-10 md:grid-cols-4">
          <div class="flex flex-col items-center bg-gray-400 text-center">
            <img class="h-52 rounded-lg" src="/assets/img/l.png" alt="">
          </div>
          <div>
            <img class="h-auto max-w-full rounded-lg"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
          </div>
          <div>
            <img class="h-auto max-w-full rounded-lg"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
          </div>
          <div>
            <img class="h-auto max-w-full rounded-lg"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
          </div>
        </div>
      </div>
    </div>



    <section class="flex h-screen items-center justify-center">
      <div class="mx-auto max-w-screen-xl px-4 py-10 lg:py-16">
        <div class="container mx-auto">
          <h2 class="text-center text-3xl font-bold">About</h2>
          <div class="mt-4 flex flex-col items-center justify-center md:flex-row">
            <img src="/assets/img/a.png" alt="About Image" class="mb-8 h-auto max-w-lg p-1 md:mb-0 md:w-1/2">
            <div class="text-left md:w-1/2 md:pl-8">
              <p class="text-left text-2xl font-semibold">e-Electric</p>
              <p class="text-left text-xl font-semibold">Empower your energy choices for a brighter
                tomorrow.</p>
              <p class="mt-2 text-left text-xl">e-Electricz is dedicated to making your energy management
                simple and
                efficient. We understand the importance of reliable service and transparent billing, which
                is
                why we’ve designed our platform to be as user-friendly and straightforward as possible.</p>
              <p class="mt-2 text-xl">Our mission is to provide you with a hassle-free experience, so you can
                focus on what truly matters. With Pica Electric, you can rest assured that your energy
                choices
                are in good hands.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="flex h-screen flex-col items-center justify-center bg-white">
      <div class="mx-auto max-w-screen-xl px-4 py-8 pt-24 text-center lg:py-16">
        <div class="container mx-auto">
          <h2 class="pb-10 text-center text-3xl font-bold">What do users say about us?</h2>
          <div
            class="mb-8 grid rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 md:mb-12 md:grid-cols-1 lg:grid-cols-2">

            <!-- Testimonial 1 -->
            <figure
              class="flex flex-col items-center justify-center rounded-t-lg border-b border-gray-200 bg-white p-8 text-center dark:border-gray-700 dark:bg-gray-800 md:rounded-t-none md:rounded-ss-lg md:border-e">
              <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 dark:text-gray-400 lg:mb-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Very easy this was to integrate</h3>
                <p class="my-4">If you care for your time, I hands down would go with this."</p>
              </blockquote>
              <figcaption class="flex items-center justify-center">
                <img class="h-9 w-9 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                  alt="profile picture">
                <div class="ms-3 space-y-0.5 text-left font-medium rtl:text-right dark:text-white">
                  <div>Bonnie Green</div>
                  <div class="text-sm text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                </div>
              </figcaption>
            </figure>

            <!-- Testimonial 2 -->
            <figure
              class="flex flex-col items-center justify-center border-b border-gray-200 bg-white p-8 text-center dark:border-gray-700 dark:bg-gray-800 md:rounded-se-lg md:border-e">
              <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 dark:text-gray-400 lg:mb-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                <p class="my-4">Designing with Figma components that can be easily translated to the utility classes
                  of Tailwind CSS is a huge timesaver!"</p>
              </blockquote>
              <figcaption class="flex items-center justify-center">
                <img class="h-9 w-9 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                  alt="profile picture">
                <div class="ms-3 space-y-0.5 text-left font-medium rtl:text-right dark:text-white">
                  <div>Roberta Casas</div>
                  <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                </div>
              </figcaption>
            </figure>

            <!-- Testimonial 3 -->
            <figure
              class="flex flex-col items-center justify-center border-b border-gray-200 bg-white p-8 text-center dark:border-gray-700 dark:bg-gray-800 md:rounded-se-lg md:border-e">
              <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 dark:text-gray-400 lg:mb-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow</h3>
                <p class="my-4">Aesthetically, the well designed components are beautiful and will undoubtedly level
                  up your next application."</p>
              </blockquote>
              <figcaption class="flex items-center justify-center">
                <img class="h-9 w-9 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                  alt="profile picture">
                <div class="ms-3 space-y-0.5 text-left font-medium rtl:text-right dark:text-white">
                  <div>Jese Leos</div>
                  <div class="text-sm text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div>
                </div>
              </figcaption>
            </figure>

            <!-- Testimonial 4 -->
            <figure
              class="flex flex-col items-center justify-center rounded-b-lg border-gray-200 bg-white p-8 text-center dark:border-gray-700 dark:bg-gray-800 md:rounded-se-lg">
              <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 dark:text-gray-400 lg:mb-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
                <p class="my-4">You have many examples that can be used to create a fast prototype for your team."
                </p>
              </blockquote>
              <figcaption class="flex items-center justify-center">
                <img class="h-9 w-9 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                  alt="profile picture">
                <div class="ms-3 space-y-0.5 text-left font-medium rtl:text-right dark:text-white">
                  <div>Joseph McFall</div>
                  <div class="text-sm text-gray-500 dark:text-gray-400">CTO at Google</div>
                </div>
              </figcaption>
            </figure>

          </div>
        </div>
      </div>
    </div>

    <footer class="bg-white">
      <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
            <div class="flex items-center">
              <img src="/assets/img/L.png" class="me-3 h-8" alt="Logo" />
              <span class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">Potuh</span>
            </div>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:grid-cols-3 sm:gap-6">
            <div>
              <h2 class="mb-6 text-sm font-semibold uppercase text-yellow-500">Resources</h2>
              <ul class="font-medium text-gray-500 dark:text-gray-400">
                <li class="mb-4">
                  <p class="hover:underline">Flowbite</p>
                </li>
                <li>
                  <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                </li>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-sm font-semibold uppercase text-yellow-500">Follow us</h2>
              <ul class="font-medium text-gray-500 dark:text-gray-400">
                <li class="mb-4">
                  <a href="https://github.com/themesberg/flowbite" class="hover:underline">Github</a>
                </li>
                <li>
                  <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                </li>
              </ul>
            </div>
            <div>
              <h2 class="uppercas mb-6 text-sm font-semibold text-yellow-500">Legal</h2>
              <ul class="font-medium text-gray-500 dark:text-gray-400">
                <li class="mb-4">
                  <a href="#" class="hover:underline">Privacy Policy</a>
                </li>
                <li>
                  <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center">© 2024 <a href="" class="">e-Potuh™</a>.
            All Rights Reserved.
          </span>
          <div class="mt-4 flex gap-4 sm:mt-0 sm:justify-center">
            <a href="#" class="text-gray-500 hover:text-yellow-500">
              <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 8 19">
                <path fill-rule="evenodd"
                  d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Facebook page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-yellow-500">
              <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 21 16">
                <path
                  d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
              </svg>
              <span class="sr-only">Discord community</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-yellow-500">
              <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 17">
                <path fill-rule="evenodd"
                  d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Twitter page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-yellow-500">
              <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="sr-only">GitHub account</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-yellow-500">
              <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Dribbble account</span>
            </a>
          </div>
        </div>
      </div>
    </footer>




    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
  </body>

</html>
