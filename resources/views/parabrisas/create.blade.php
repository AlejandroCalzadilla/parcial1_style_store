@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nuevo Producto</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
         {!! Form::open(['route' => 'admin.parabrisa.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{-- <form action="{{ route('admin.parabrisa.store') }}" method="post" enctype="multipart/form-data">  --}}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('titulo', 'titulo: ') !!}
                    {!! Form::text('titulo', null, [
                        'class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el titulo del producto...',
                    ]) !!}
                    @error('titulo')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('descripcion', 'descripcion: ') !!}
                    {!! Form::text('descripcion', null, [
                        'class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba la descripcion del producto...',
                    ]) !!}
                    @error('medio')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                {{-- <div class="form-group">
                    {!! Form::label('imagen', 'imagen: ') !!}
                    {!! Form::file('imagen', null, [
                        'class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba la url de la imagen...',



                        
                    ]) !!}
                    @error('imagen')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> --}}



                  <div class="form-group">
                    {!! Form::label('imagen', 'imagen') !!}
                    {!! Form::file('imagen', null, [
                                    'class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''),
                                   
                                    'accept' => 'image/*',
                                   
                                ]) !!}
            
                        @error('marca')
                            <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                </div>  

                {{-- <label class="crear__label">imagen :
                    <br>
                   </label> 
                     
                        <input class="rounded-xl" type="file" name="imagen" id="" accept="image/*"
        
                            method="POST" enctype="multipart/form-data">
                        @error('imagen')
                          <small class="text-red-500">el archivo debe ser una imagen</small> 
                            
                        @enderror
                   <br> --}}



                {{-- <label class="crear__label">imagen :
                    <br>
                   </label> 
                     
                        <input class="rounded-xl" type="file" name="imagen" id="" accept="image/*">
                        @error('imagen')
                          <small class="text-red-500">el archivo debe ser una imagen</small> 
                            
                        @enderror
                   <br>
                   <br> --}}

                <div class="form-group">
                    {!! Form::label('marca', 'marca: ') !!}
                    {!! Form::text('marca', null, [
                        'class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba la marca del producto...',
                    ]) !!}
                    @error('marca')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>







                
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
               
                <div class="form-group">
                    {!! Form::label('categoria_id', 'Categoría: ') !!}
                    {!! Form::select('categoria_id', $categorias->pluck('nombre', 'id'), null, [
                        'class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''),
                        'placeholder' => 'Seleccione una categoría...',
                    ]) !!}
                    @error('categoria_id')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


            </div>


            <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('precio', 'precio: ') !!}
                {!! Form::text('precio', null, [
                    'class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''),
                    'placeholder' => 'Escriba el precio del producto...',
                ]) !!}
                @error('precio')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>

           
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('color', 'color: ') !!}
                    {!! Form::text('color', null, [
                        'class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba el precio del producto...',
                    ]) !!}
                    @error('color')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>


        </div>    
















        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('detalle', 'detalle: ') !!}
                    {!! Form::textarea('detalle', null, [
                        'class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''),
                        'placeholder' => 'Escriba la observación...',
                        'rows' => 4,
                    ]) !!}
                    @error('detalle')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>





        {!! Form::submit('Crear Producto', ['class' => 'btn btn-primary mt-2']) !!}

        {!! Form::close() !!}
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
