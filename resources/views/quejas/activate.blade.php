@extends('adminlte::layouts.app')

@section('main-content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Quejas</h3>

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
                               href="{{ URL::to('activarqueja/'.$queja->id) }}" role="button">Activar
                                </span></a>
                        </td>
                         <td> {!!Form::open(array('url' => "/quejas/$queja->id", 'method' => 'DELETE'))!!}
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
