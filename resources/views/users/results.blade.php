@extends('perfil') <!--Coloca lo que hay en la vista app-->
@section('title','Score') <!--Titulo que se desea que se ubique-->
@section('content_user')
<style>
    .word-box {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 15px 0;
    }
    .letter-box {
      background-color: #d3d3d3;
      margin: 5px;
      padding: 10px;
      border-radius: 5px;
      font-weight: bold;
    }
    .correct {
      color: green;
      font-weight: bold;
    }
    .incorrect {
      color: red;
      font-weight: bold;
    }
    .btn-game {
      width: 150px;
      margin: 10px;
    }
  </style>
<body>
<h1>resultados</h1>
</body>
@endsection
