@extends('layouts.app')

@section('content')

<div class="card" style="background-image:url(http://clipart-library.com/2018-gallery/unicorn-clipart-16.png);">
   
    <div class="card-header" >Dashboard</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-dismissible alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        You are logged in!
        
        <p>
            Estás en PA, panel de administrador, eres un admincornio
            <br/>
            <div class="list-group">
                <a href="/welcome" class="list-group-item">Ir a Welcome</a></li>
                <a href="/home" class="list-group-item">Ir a Home</a>
            </div>
        </p>
    </div>
</div>
@endsection
