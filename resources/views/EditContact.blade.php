<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
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
        <a href="">Home</a>
        <a href="">About Us</a>
        <a href="">Shop</a>
        <a href="">Contact</a>
      </div>

      <div class="flex flex-col mt-4">
        <a href="/login" class="btn">Logout</a>
      </div>
    </nav>
    <body>
    <section class="bg-white dark:bg-gray-900">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Edit Contact</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
      <form action="/updateContact/{{ $data->id }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
              <input value="{{ $data->deskripsi }}" name="deskripsi" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"/>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</section>
    </body>
  </header>
  <script src="./app.js"></script>
</body>

</html>