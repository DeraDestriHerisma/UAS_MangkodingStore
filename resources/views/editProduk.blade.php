<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
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
    <section class="bg-white dark:bg-gray-900">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <form action="/updateProduk/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>foto</label>
                <input type="text" value="{{ $data->foto }}" id="foto" name="foto" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="nama produk" required>
            </div>
          <div>title</label>
              <input type="text" id="title" value="{{ $data->title }}" name="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="nama produk" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga</label>
              <input type="text" id="harga" value="{{ $data->harga }}" name="harga" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="harga" required>
          </div>
          <div class="sm:col-span-2">
              <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Deskripsi Produk</label>
              <input id="deskripsi" value="{{ $data->deskripsi_product }}" name="deskripsi_product" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="deskripsi."\>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">simpan</button>
        </form>
  </div>
</section>
  <script src="./app.js"></script>
</body>

</html>