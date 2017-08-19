@extends('adminlte::layouts.app')

@section('main-content')

{!!Form::model($queja,['route'=>['quejas.update',$queja],'method'=>'PUT','class'=>'form-horizontal','role'=>'form'])!!}

            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
				<div class="panel panel-default">
				 	<div class="panel-heading">
        				<div class="panel-title">Editar una queja</div>
        			</div>
          @include('quejas.partials.form',['submitButtonText'=>'Actualizar'])
       
        </center>
    </div>
</div>
</div>
</form>
</div>

{!!Form::close()!!}
@endsection