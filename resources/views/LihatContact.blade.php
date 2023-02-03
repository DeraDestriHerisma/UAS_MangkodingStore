<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tambah deskripsi kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">ADD Deskripsi</h1>
        <div class="container">
        <a href="/contact" class="btn btn-success">< BACK</a>
            <div class="row">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $item)
                <tr>
                  <th scope="row">{{ $item->id }}</th>
                  <td>{{ $item->deskripsi }}</td>
                  <td>
                    <a href="/tampilkandata/{{ $item->id }}" class="btn btn-info">Edit</a>
                    <a href="/deleteContact/{{ $item->id }}" class="btn btn-danger">Delete</button> 
                  </td>
                </tr>
             
                @endforeach
                </tbody>
              </table>
            </div>
        </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>