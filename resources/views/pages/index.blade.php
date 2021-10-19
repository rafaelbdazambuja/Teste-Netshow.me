@extends('main')
@section('content')
<div class="px-4 pt-5 my-5 text-center">
    <h1 class="display-4 text-primary mb-5">Bem vindo</h1>
    <div class="col-lg-6 mx-auto mb-5">
        <p class="lead">Esta é uma aplicação que simula uma página de contato web.</p>
        <p class="lead">Nas opções a seguir, você pode ver a lista contatos realizados ou criar um novo contato.</p>
    </div>
    <a href="{{ route('contact.index') }}" class="btn btn-outline-primary btn-lg px-3 m-1" >Lista de contatos</a>
    <a href="{{ route('contact.create') }}" class="btn btn-primary btn-lg px-3 m-1" >Formulário de contato</a>
</div>
@endsection