@extends('adminlte::layouts.app')

@section('main-content')

{!!Form::open(array('url' => "/entidad", 'method' => 'POST','class'=>'form-horizontal','role'=>'form'))!!}
<div class="box box-warning">

            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
				<div class="panel panel-default">
				 	<div class="panel-heading">
        				<div class="panel-title">Registrar Entidad</div>
    				</div>
    <div class="panel-body">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel-body divstyle1">
                {!! csrf_field() !!}
                <div class="form-group">
                    {!!Form::label('name','Nombre*:')!!}
                    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre...'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('address','Dirección:')!!}
                    {!!Form::text('address',null,['class'=>'form-control','placeholder'=>'Dirección...'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('phone_number','Teléfono:')!!}
                    {!!Form::text('phone_number',null,['class'=>'form-control','placeholder'=>'Teléfono...'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('website','Sitio Web:')!!}
                    {!!Form::text('website',null,['class'=>'form-control','placeholder'=>'Sitio Web...'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('email','Correo:')!!}
                    {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Correo...'])!!}
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <center>
            <a href="{{url('/home')}}" class="btn btn-success">Atrás</a>
        {!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}
        </center>
    </div>
</div>
</div>
</form>
</div>
</div>
{!!Form::close()!!}
@endsection
