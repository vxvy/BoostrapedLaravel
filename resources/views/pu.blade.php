@extends('layouts.app')

@section('content')

<div class="card" style="background-image:url(http://clipart-library.com/newimages/leaf-clip-art-43.png);">
   
    <div class="card-header" >Dashboard</div>

    <div class="card-body">
        <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h4 class="alert-heading">Warning!</h4>
                <p class="mb-0">Estás en PU, página de usuario, serás redirigido aquí cuando intentes acceder a sitios que no te tocan. <a href="/welcome" class="alert-link">Clica aquí para ir a la página principal</a>.</p>
        </div>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        You are logged in!
        
    </div>
</div>
@endsection
