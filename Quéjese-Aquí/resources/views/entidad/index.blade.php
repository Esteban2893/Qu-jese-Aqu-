@extends('adminlte::layouts.app')

@section('main-content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Entidades</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
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
                        <td> {!!Form::open(array('url' => "/entidades/$entidad->id", 'method' => 'DELETE'))!!}
                            <button class="btn btn-default btn-danger"><span class="fa fa-trash"></span>Eliminar
                            </button>
                            {!!Form::close()!!}
                        </td>
               
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection
