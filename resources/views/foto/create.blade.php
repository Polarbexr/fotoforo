@extends('adminlte::page')

@section('content')
<div class="container">
   <div class="row">
       <h2>Crear un nuevo registro</h2>
       <hr>
   </div>
   <div class="row mn-8">
       <form action="{{ route('foto.store') }}" method="post" enctype="multipart/form-data" class="col-lg-7">
           @csrf <!-- Protección contra ataques CSRF -->

           @if($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
           @endif
           <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" aria-describedby="nombreHelp" required>
            {{-- <small id="nombreHelp" class="form-text text-muted">Ingrese el nombre de la editorial.</small> --}}
        </div>

        <div class="form-group">
            <label for="domicilio">Domicilio</label>
            <input  class="form-control" id="domicilio" name="domicilio" value="{{ old('nombre') }}" aria-describedby="nombreHelp" required>
            {{-- <small id="domicilioHelp" class="form-text text-muted">Ingrese la dirección de la editorial.</small> --}}
        </div>

        <div class="form-group">
            <label for="correo">E-mail</label>
            <input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo') }}" aria-describedby="correoHelp" required>
            {{-- <small id="correoHelp" class="form-text text-muted">Ingrese el correo electrónico de la editorial.</small> --}}
        </div>

        <button type="submit" class="btn btn-success">Crear registro</button>
    </form>
</div>
</div>
@endsection