<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    
</body>
</html><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <style type="text/tailwindcss">
    @layer utilities {
      .btn {
        @apply bg-[#212121] text-white px-5 py-3 text-center;
      }  

      .btn.rounded {
        @apply rounded-full;
      }

      .home::before {
        /* content: url("./assets/scratch.svg");
        position: absolute;
        bottom: -18px; */
      }

      .active {
        @apply block;
      }
    }
  </style>
  <title>Mangcoding</title>
</head>

<body>
    @yield('header')
  <header class="shadow-md">
    <nav class="px-16 relative flex py-3 items-center justify-between">
      <div class="flex items-center gap-5 ml-10">
        <img src="./img/Logo.png" alt="" width="40">
        <a href="" class="font-bold">Mangcoding Store</a>
      </div>


      <div class="space-x-4 flex-1 ml-10">
        <a href="/beranda">Home</a>
        <a href="">About Us</a>
        <a href="">Shop</a>
        <a href="/contactUser">Contact</a>
      </div>

      <div class="flex flex-col mt-4">
        <a href="/login" class="btn">Registration</a>
      </div>
    </nav>
  </header>
  <body>
    <section class="bg-white dark:bg-gray-900">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
      @foreach ($data as $item)
        <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">"{{ $item->deskripsi }}"</p>
       @endforeach
  </div>
</section>
    </body>
  <script src="./app.js"></script>
</body>

</html>