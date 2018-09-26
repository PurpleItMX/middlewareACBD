@extends('layouts.app')

@section('content')
<div class="container">
        <center>
            <form class="form-signin"  method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <!--cambiar logo por el del sistema-->
                <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>
                
                <label for="inputEmail" class="sr-only">Correo</label>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Correo Electronico" required autofocus>
                <label for="inputPassword" class="sr-only">Contraseña</label>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Contraseña" required>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar
                    </label>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                <a class="btn btn-link" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
            </form>
        </center>
</div>
@endsection
