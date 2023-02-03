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
  @yield('headers')
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
  <script src="./app.js"></script>
</body>

</html>