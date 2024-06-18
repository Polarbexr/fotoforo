@extends('adminlte::page')

@section('content')
<div class="container">
   <div class="row">
       <h2>Crear una nueva editorial</h2>
       <hr>
   </div>
   <div class="row">
       <form action="{{ route('fotos.edit') }}" method="post" enctype="multipart/form-data" class="col-lg-7">
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
            <small id="nombreHelp" class="form-text text-muted">Ingrese el nombre de la editorial.</small>
        </div>

        <div class="form-group">
            <label for="domicilio">Domicilio</label>
            <textarea class="form-control" id="domicilio" name="domicilio" aria-describedby="domicilioHelp" required>{{ old('domicilio') }}</textarea>
            <small id="domicilioHelp" class="form-text text-muted">Ingrese la dirección de la editorial.</small>
        </div>

        <div class="form-group">
            <label for="correo">E-mail</label>
            <input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo') }}" aria-describedby="correoHelp" required>
            <small id="correoHelp" class="form-text text-muted">Ingrese el correo electrónico de la editorial.</small>
        </div>

        <button type="submit" class="btn btn-success">Guardar Editorial</button>
    </form>
</div>
</div>
@endsection