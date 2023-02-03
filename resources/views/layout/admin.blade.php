<!DOCTYPE html>
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
  </header>

  <section class="max-w-[90%] mx-auto pt-8 pb-28 flex items-center">
    <div class="space-y-8 flex-1">
      <a href="" class="btn rounded"> Mangcoding Store</a>
      <h1 class="text-7xl font-bold leading-none relative">
        Get the right Furniture For your
        <span class="relative home">Home</span>
      </h1>
      <p class="text-xl text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget gravida leo, nec iaculis diam.
      </p>
      <a href="" class="btn inline-block"> Shop Now</a>
    </div>

    <div class="flex space-x-4 flex-1">
      <img class="w-full" src="./img/chair-1.png" alt="">
      <img class="w-full" src="./img/chair-2.png" alt="">
    </div>
  </section>


  <section class="bg-[#212121] py-20">
    <div class=" max-w-[90%] mx-auto flex justify-center space-x-5">
      <div class="border-2 border-white flex items-center justify-center py-3 px-4 space-x-6 ">
        <img src="./img/trophy.svg" alt="">
        <div class="text-white space-y-1">
          <h3 class="font-bold text-base">High Quality</h3>
          <p class="text-sm">Material is Strong</p>
        </div>
      </div>

      <div class="border-2 border-white flex items-center justify-center py-3 px-4 space-x-6 ">
        <img src="./img/protection.svg" alt="">
        <div class="text-white space-y-1">
          <h3 class="font-bold text-base">Warranty Protection</h3>
          <p class="text-sm">Over 3 years</p>
        </div>
      </div>

      <div class="border-2 border-white flex items-center justify-center py-3 px-4 space-x-6 ">
        <img src="./img/shipping.svg" alt="">
        <div class="text-white space-y-1">
          <h3 class="font-bold text-base">Free Shipping</h3>
          <p class="text-sm">Order $100 Minimum</p>
        </div>
      </div>

      <div class="border-2 border-white flex items-center justify-center py-3 px-4 space-x-6 ">
        <img src="./img/support.svg" alt="">
        <div class="text-white space-y-1">
          <h3 class="font-bold text-base">24 / 7 Support</h3>
          <p class="text-sm">Dedicated Support</p>
        </div>
      </div>
    </div>
  </section>

  <div class="max-w-[90%] mx-auto py-20">
    <div class="container">
    <span class="text-yellow-500 text-xl">Room</span>
    <div class="flex justify-between items-center mt-5">
    <h3 class="text-5xl font-semibold">Categories</h3>
      <a href="" class="text-black bg-[white] border border-black py-3 px-5 ">See more</a>
    </div>
    
    <div class="mt-8 flex space-x-5">
      <div class="bg-[#BEDDE2] flex-1 flex space-x-8 relative rounded">
        <img src="./img/table.png" class="" alt="">

        <div class="space-y-4 py-8 px-5">
          <h3 class="font-bold text-4xl">Ruang Tamu</h3>
          <p class="text-xl text-gray-500">Terdapat berbagai macam Furniture Ruang Tamu yang dapat anda beli dengan
            kualitas yang bagus seperti Televisi dan Sofa.</p>
          <a href="" class="btn inline-block">Buy Now</a>
        </div>
      </div>

      <div class="bg-[#DEEFE9] flex-1 flex space-x-8 relative rounded">
        <img src="./img/chair.png" class="" alt="">

        <div class="space-y-4 py-8 px-5">
          <h3 class="font-bold text-4xl">Ruang Kerja</h3>
          <p class="text-xl text-gray-500">
            Terdapat berbagai macam Furniture Ruang Kerja Seperti Kursi Kantor, Kursi Santai, dan lainnya.
          </p>
          <a href="" class="btn inline-block">Buy Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="max-w-[100%] mx-auto py-10">
    <div class="container">
      <span class="text-yellow-500 text-xl">Post List</span>
      <div class="flex justify-between items-center mt-5">
        <h3 class="text-5xl font-semibold">Our Best Seller Product</h3>
          <a href="" class="text-black bg-[white] border border-black py-3 px-5 ">+</a>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-28 gap-x-10 mt-10">

      <div class="relative  ">
        <img src="./img/image-1.png" class="h-5px w-5px" alt="">
        <div class="mt-3 space-y-4">
          <div class="flex justify-between">
            <p class="font-bold text-md">Meja Kerja (Kantoran)</p>
            <span class="font-bold text-md">$1,120</span>
          </div>
          <div class="flex justify-between">
            <p class="text-md text-gray-400">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="10" src="./img/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="relative">
        <img src="./img/image-2.png" class="h-5px w-5px" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-md">Best Soffa</p>
            <span class="font-bold text-md">$1,120</span>
          </div>
          <div class="flex justify-between">
            <p class="text-md text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="10" src="./img/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="relative">
        <img src="./img/image-3.png" class="h-5px w-5px" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-md">Meja Kerja</p>
            <span class="font-bold text-md">$1,120</span>
          </div>
          <div class="flex justify-between">
            <p class="text-md text-gray-500">Best Quality</p>
          </div>
        </div>
      </div>

      <div class="">
        <img src="./img/image-4.png" class="h-10px w-10px" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-md">Meja Laptop Besar</p>
            <span class="font-bold text-md">$1,120</span>
          </div>
          <div class="flex justify-between">
            <p class="text-md text-gray-500">Best Quality</p>
          </div>
        </div>
      </div>


      <div class="">
        <img src="./img/image-5.png" class="h-5px w-5px" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-md">Best Chair</p>
            <span class="font-bold text-md">$1,120</span>
          </div>
          <div class="flex justify-between">
            <p class="text-md text-gray-500">Best Quality</p>
          </div>
        </div>
      </div>

      <div class="">
        <img src="./img/image-6.png" class="h-5px w-5px" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-md">Chair Office</p>
            <span class="font-bold text-md">$1,120</span>
          </div>
          <div class="flex justify-between">
            <p class="text-md text-gray-500">Best Quality</p>
          </div>
        </div>
      </div>

      <div class="">
        <img src="./img/image-7.png" class="h-5px w-5px" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-md">Kursi Kantoran (Murah)</p>
            <span class="font-bold text-md">$1,120</span>
          </div>
          <div class="flex justify-between">
            <p class="text-md text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./img/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="">
        <img src="./img/image-8.png" class="h-5px w-5px" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="font-bold text-md">Meja Meeting</p>
            <span class="font-bold text-md">$1,120</span>
          </div>
          <div class="flex justify-between">
            <p class="text-md text-gray-500">Best Quality</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section
    class=" max-w-[100%] mx-auto py-10 flex flex-col space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0 items-center">
    <img src="./img/workspace.png" class="w-full flex-1" alt="">
    <div class="flex-1 space-y-6">
      <h2 class="text-6xl font-bold">Simple Woodem Table</h2>
      <p class="text-gray-500">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque harum quaerat animi ipsa blanditiis repellat
        nesciunt similique! Tenetur, dolorum nihil facere voluptate sunt aliquam eligendi dolorem non culpa,
        exercitationem ducimus.
      </p>

      <div class="flex justify-between items-center">
        <a href="" class="btn inline-block"> Buy Now</a>
        <p class="font-bold text-3xl">$1,300</p>
      </div>
    </div>
  </section>


  <section
    class="banner max-w-[100%] mx-auto relative mt-5 mb-20 bg-[#DEEFE9] min-h-[400px] flex items-center justify-center">
    <img src="./img/lamp.png" alt="" class="absolute top-0 left-0">

    <img src="./img/curly.png" class="absolute" alt="">

    <div class="flex items-center justify-center flex-col space-y-3 relative z-40 p-6">
      <h2 class="text-4xl font-bold">Find Furniture Now</h2>
      <p class="text-gray-500 text-lg">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor erat sapien
        faucibus lectus,
      </p>
      <a href="" class="btn inline-block">Order Now</a>
    </div>

    <img src="./img/chair-left.png" alt="" class="absolute bottom-0 right-0">

  </section>

  <section class="bg-[#212121] text-white py-14">
    <div
      class=" max-w-[100%] mx-auto flex flex-col space-y-5 md:flex-row md:space-y-0 items-center md:items-start md:justify-center space-x-12">
      <div class="flex flex-col">
        <div class="flex items-center gap-5 mb-5">
          <img src="./img/Logo.png" alt="" width="40">
          <p class="font-bold">Mangcoding Store</p>
        </div>

        <p class="max-w-[380px]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor, erat sapien
          faucibus lectus, vel tempor dolor augue et lectus.
        </p>
        <ul class="flex gap-5 mt-5 ">
          <li>
            <img src="./img/logo-ig.png" alt="">
          </li>
          <li>
            <img src="./img/logo-gt.png" alt="">
          </li>
          <li>
            <img src="./img/logo-yt.png" alt="">
          </li>
          <li>
            <img src="./img/logo-in.png" alt="">
          </li>
        </ul>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 gap-3 gap-y-8">
        <div>
          <p class="font-bold py-2">Navigation</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>Categories</li>
            <li>Best Product</li>
            <li>Cart</li>
            <li>Wishlist</li>
            <li>Contact</li>
          </ul>
        </div>

        <div>
          <p class="font-bold py-2">Shop</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>Ruang Tamu</li>
            <li>Ruang Makan</li>
            <li>Ruang Kerja</li>
            <li>Ruang Tidur</li>
            <li>Furniture</li>
          </ul>
        </div>

        <div>
          <p class="font-bold py-2">Product</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>Chair</li>
            <li>Table</li>
            <li>Wardrobe</li>
          </ul>
        </div>

        <div>
          <p class="font-bold py-2">Payment Method</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>Credit</li>
            <li>Paypal</li>
          </ul>
        </div>

        <div>
          <p class="font-bold py-2">Setting</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>My Account</li>
            <li>Order</li>
            <li>Address</li>
            <li>Password</li>
          </ul>
        </div>

        <div>
          <p class="font-bold py-2">Contact</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li class="flex gap-2 items-center">
              <img src="img/lokasi logo.png" alt="">
              <p>Lokasimu diJakarta Barat</p>
            </li>
            <li class="flex gap-2 items-center">
              <img src="img/email logo.png" alt="">
              <p>furniture@gmail.com</p>
            </li>
            <li class="flex gap-2 items-center">
              <img src="img/telp logo.png" alt="">
              <p>0897 8909 1895</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-[#212121] py-5">
    <p class="text-center text-white ">© 2022 Mangcoding. All rights reserved.</p>
  </footer>


  <script src="./app.js"></script>
</body>

</html>