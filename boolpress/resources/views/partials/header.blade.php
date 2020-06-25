<!doctype html>
<html lang="en">
  <header>
    <title>Boolpress-Base | Francesco Scarniglia</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"> <a  class="nav-link" href="{{ route('home')}}">Home</a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('users.index') }}">Users</a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('posts.index') }}">Archive</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('posts.create') }}">Create post</a> </li>
            <li class="nav-item">  <a class="nav-link" href="{{ route('products.index') }}">Shop</a> </li>
          </ul>
        </div>
      </nav>

  </header>



