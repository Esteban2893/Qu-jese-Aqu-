@extends('adminlte::layouts.app')
@include('messages.message')
@section('main-content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Entidades</h3>
              
            <div class="box-body table-responsive no-padding">
             @if(count($entidades)>0)
              <table class="table table-hover">
                <tr>
                  
                  <th>Nombre</th>
                  <th>Direccion</th>
                  <th>Teléfono</th>
                  <th>Sitio Web</th>
                  <th>Correo</th>
                </tr>
                 @foreach($entidades as $entidad)
                <tr>
                  
                  <td>{{$entidad->name}}</td>
                        <td>{{$entidad->address}}</td>
                        <td>{{$entidad->phone_number}}</td>
                        <td>{{$entidad->website}}</td>
                        <td>{{$entidad->email}}</td>
                        <td>
                            <a class="btn btn-primary"
                               href="{{ URL::to('entidades/'.$entidad->id.'/edit') }}" role="button">Editar
                                <span class="fa fa-pencil"></span></a>
                        </td>
               
                </tr>
                @endforeach
              </table>
              @else
                <h4>No hay entidades registradas</h4>
            @endif
            </div>
            <!-- /.box-body -->
          </div>
          @if($entidades != null)
            <div class="panel-footer text-center">
                {!! $entidades->render() !!}
            </div>
            @endif
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection
