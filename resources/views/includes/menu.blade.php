<!--
La  vista  de  visitante  será  la  propia  página  welcome.blade.php  
(Esta  portada  será  necesario  modificarla).

En  la  vista  de  usuario  tendremos  un  formulario  
para  introducir  datos  en  la  BD  en  la  tabla  registro: 
(information.blade.php)
 Nombre
 Apellidos
 Correo Electrónico

En  la  vista  de  administrador tendremos  un  menú  
para  ir  a  welcome  o  la  vista  de  usuario(home.blade.php). 
    ->acceso a menu de usuario y invitado
-->

<div class="card">
    <div class="card-header">Menú</div>
    <div class="card-body">
        <ul class="nav-pills nav-stacked">
            @if (auth()->check())
                @if (auth()->user()->role==0)
                    <li><a href="/pa">Panel de administrador</a></li>
                    <li><a href="/pu">Página de usuario</a></li>
                    <li><a href="/information">Informar</a></li>
                @elseif(auth()->user()->role==1)
                    <li><a href="/pu">Página de usuario</a></li>
                    <li><a href="/information">Informar</a></li>
                @endif
            @else
                <li><a href="/">Bienvenido a nuestro sitio</a></li>
            @endif
        </ul>
    </div>
</div>
