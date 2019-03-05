
@extends('template.main')
@section('titulo')
Editar registro en bitácora de mantenimiento de equipo

@endsection
@section('contenido')


  <link rel="stylesheet" href="misestilos.css">

  <br>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
            <div class="panel-body">

       {!! Form::open(['route'=>['BitacoraMantenimientoEquipo.update',$bitacoraMan],'method'=>'PUT']) !!}



       <center>
        <div>
            <h1>Bitácora de mantenimiento de equipo</h1>
        </div>
       </center>

            <div class="alert alert-warning text-center font-weight " >



                <div class="row">
                  <div class="col-md-1"></div>

                  <div class="col-md-3 text-right">
                    {!! Form::label('Tipo de equipo') !!}
              </div>

              <div class="col-md-6">
                    {!! Form::text('TipoEquipo',$bitacoraMan->TipoEquipo, ['class' => 'form-control', 'placeholder'=> 'ej: Tipo de equipo','title'=>"Ingrese solo letras",'required', 'pattern'=>'((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))']) !!}
              </div>
              <div class="col-md-1"></div>
        </div>

  
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('No. de unidad') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('NoUnidad',$bitacoraMan->NoUnidad, ['class' => 'form-control', 'placeholder'=> 'ej: no unidad','title'=>"Ingrese solo numeros",'required',  'pattern'=>"[0-9]{1-15}"]) !!}
        </div>
        <div class="col-md-1"></div>
  </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Cambio de empaque') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('CambioEmpaques',$bitacoraMan->CambioEmpaques, ['class' => 'form-control', 'placeholder'=> 'ej: Cambio empaque','title'=>"Ingrese solo letras",'required', 'pattern'=>'((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>


        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Lubricacón') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('Lubricacion',$bitacoraMan->Lubricacion, ['class' => 'form-control', 'placeholder'=> 'ej:Lubricación', 'title'=>"Ingrese solo letras",'required', 'pattern'=>'((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>


        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Cambio boquillas') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('CambioBoquillas',$bitacoraMan->CambioBoquillas, ['class' => 'form-control', 'placeholder'=> 'ej: Cambio boquillas','title'=>"Ingrese solo letras",'required', 'pattern'=>'((?:([A-Z]|[a-z])+[a-zA-Z \u00E0-\u00FC\u00f1\u00d1]*))']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>



        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Fecha') !!}
        </div>

        <div class="col-md-6">
 {!! Form::date('Fecha',$bitacoraMan->Fecha, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>



        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 text-right">
            {!! Form::label('Observaciones') !!}
        </div>

        <div class="col-md-6">
              {!! Form::text('Observaciones',$bitacoraMan->Observaciones, ['class' => 'form-control', 'title'=>"Ingrese letras y numeros", 'required','pattern'=>'((?:([A-Z]|[a-z])*[a-zA-Z 0-9]*))']) !!}
        </div>
        <div class="col-md-1"></div>
  </div>


<div class="row">
   <div class="col-md-3"></div>

   <div class="col-md-4">
            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
  </div>
  {!!Form::close()  !!}
</div>

     

</div>
</div>
</div>
<div class="col-md-2"></div>
</div>



@endsection