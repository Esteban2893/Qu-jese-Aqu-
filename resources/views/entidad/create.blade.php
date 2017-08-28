@extends('adminlte::layouts.app')

@section('main-content')

{!!Form::open(array('url' => "/entidades", 'method' => 'POST','class'=>'form-horizontal','role'=>'form'))!!}


            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
				<div class="panel panel-default">
				 	<div class="panel-heading">
        				<div class="panel-title">Registrar Entidad</div>
        			</div>
          @include('entidad.partials.form',['submitButtonText'=>'Crear'])
       
      
    </div>
</div>
</div>
</form>
</div>

{!!Form::close()!!}
@endsection
