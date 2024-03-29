@extends('layout')

@section('css')
<link rel="stylesheet" href="/assets/css/pages/home.css">
@endsection
@section('title', 'Studeex: Facilite a organização dos seus estudos')
@section('content')
<section id="choose-system">
    <h1>Escolha o que deseja criar:</h1>
    <div id="systems-create">
        <a href="/criar/rotina">
            <img src="/assets/imgs/icons/home/rotina.png" alt="Ícone de rotina">
            <h2>Rotina de Estudos</h2>
        </a>
        <a href="/criar/ciclo">
            <img src="/assets/imgs/icons/home/ciclo.png" alt="Ícone de ciclo">
            <h2>Ciclo de Estudos</h2>
        </a>
    </div>
</section>
<section id="see-systems"></section>
@endsection