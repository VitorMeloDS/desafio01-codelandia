<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="shortcut icon" href="../../public/img/blog.png" type="image/x-icon">
  <title>Laravel</title>
</head>

<body class="antialiased">
  <header class="bg-primary bg-gradient text-white ">
    <nav class="container">
      <div class="container pt-5 mx-xxl-5 d-flex justify-content-between">
        <p class="mx-5">Codelândia</p>
        <p class="mx-5">Blog</p>
      </div>
      <div class="d-flex mx-xl-5 py-3 mb-3 justify-content-center text-center">
        <input class="form-control w-50 h-2" type="search" placeholder="Pesquisar" id="floatingPassword" aria-label="Pesquisar">
      </div>
    </nav>
  </header>

  <div class="container">
    @foreach ($posts as $post)
      <div class="bg-white my-5 py-3 px-xl-5">
        <div class="d-flex justify-content-between">
          <p>{{ $post->data }}</p>
          <img src="{{url('../../public/img/heart.png')}}" alt="curtir">
        </div>
        <h3>{{ $post->titulo }}</h3>
        <p>{{ $post->texto }}</p>
      </div>
    @endforeach
  </div>

</body>

</html>
