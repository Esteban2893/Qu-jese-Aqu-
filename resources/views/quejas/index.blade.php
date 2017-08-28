@extends('adminlte::layouts.app')
@include('messages.message')
@section('main-content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Quejas</h3>  
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
             @if(count($quejas)>0)
              <table class="table table-hover">
                <tr>
                  
                  <th>Entidad</th>
                  <th>Departamento</th>
                  <th>Problema</th>
                  <th>Solución</th>
                  <th>Estado</th>
                </tr>
                 @foreach($quejas as $queja)
                <tr>
                  
                        <td>{{$queja->entidad->name}}</td>
                        <td>{{$queja->department}}</td>
                        <td>{{$queja->problem}}</td>
                        <td>{{$queja->solution}}</td>
                         @if($queja->available == false)
                        <td><span class="label label-danger">Desactivada</span></td>
                        @else
                         <td><span class="label label-success">Activada</span></td>
                         @endif
                        <td>
                            <a class="btn btn-primary"
                               href="{{ URL::to('quejas/'.$queja->id.'/edit') }}" role="button">Editar
                                <span class="fa fa-pencil"></span></a>
                        </td>
                        <td> {!!Form::open(array('url' => "/quejas/$queja->id", 'method' => 'DELETE'))!!}
                            <button class="btn btn-default btn-danger"><span class="fa fa-trash"></span>Eliminar
                            </button>
                            {!!Form::close()!!}
                        </td>
               
                </tr>
                @endforeach
              </table>
               @else
                <h4>No tiene quejas creadas</h4>
            @endif
            </div>
            @if($quejas != null)
            <div class="panel-footer text-center">
                {!! $quejas->render() !!}
            </div>
            <!-- /.box-body -->
          </div>

        @endif
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection
