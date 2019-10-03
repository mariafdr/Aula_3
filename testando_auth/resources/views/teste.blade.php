@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Teste Controller</div>
                <div class="card-body">
                    Oi, teste Controller. Seja Bem Vindo!
                </div>
                <form action="{{ route('delete') }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="text" name="nome">
                    <input type="submit" value="Enviar"> 
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
