@extends('layouts.main')

@section('title', 'Intra')

@section('content')

        <title>Laravel</title>
             <link rel="stylesheet" href="/css/styles.css">
             <script src="/js/scripts.js"></script>
    </head>
    <body >
        <h1>Titulo teste</h1>
        @if(10 > 15)
          <p>A condição é verdadeira</p>
        @endif


        <p>{{$nome}}</p>


        @if($nome == "Pedro")
        <p>O nome é Pedro</p>
        @elseif($nome == "Tiago")
        <p>O nome é {{$nome}}</p>
        @else
        <p>Nome não é Pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
          <p>{{ $arr[$i] }}</p>

        @endfor

@endsection

