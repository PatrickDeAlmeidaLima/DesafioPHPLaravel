@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <h1>Título</h1>
    <img src="/img/banner.jpg" alt="Banner">
    <p>{{ $nome }}</p>
    @if (10 > 15)
        <p>A condição é true</p>
    @endif
    @if ($nome === 'Patrick')
        <p>O nome é {{ $nome }}</p>
        <p>E tem a idade de {{ $idade }} anos</p>
        <p>E trabalha como {{ $profissao }}</p>
    @elseif($nome === 'Patrick Lima')
        <p>O nome é {{ $nome }}</p>
        <p>E tem a idade de {{ $idade }} anos</p>
        <p>E trabalha como {{ $profissao }}</p>
    @else
        <p>O nome não é Patrick</p>
        <p>E tem a idade de {{ $idade }} anos</p>
        <p>E trabalha como {{ $profissao }}</p>
    @endif

    @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }}-{{ $i }}</p>
        @if ($i == 2)
            <p>Entrou aqui onde o I é 2 </p>
        @endif
    @endfor

    @foreach ($nomes as $nome)
        <p>{{ $loop->index }}</p>
        <p>{{ $nome }}</p>
    @endforeach

    @php
        $name = 'João';
        echo $name;
    @endphp
    <!-- Comentário no HTML -->
    {{-- Comentário no blade --}}

@endsection
