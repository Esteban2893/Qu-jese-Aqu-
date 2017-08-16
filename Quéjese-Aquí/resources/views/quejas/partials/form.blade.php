 <div class="panel-body">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel-body divstyle1">
                {!! csrf_field() !!}
                 <div class="form-group">
                    {!!Form::label('entidades','Entidades:')!!}
                    <select id="entity_id" name="entity_id" class="form-control">
                        @foreach($entidades as $entidad)
                                <option value="{{$entidad->id}}">{{$entidad->name}}</option>
                        @endforeach
                    </select>
                <div class="form-group">
                    {!!Form::label('department','Departamento:')!!}
                    {!!Form::text('department',null,['class'=>'form-control','placeholder'=>'Departamento...'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('problem','Problema:')!!}
                    {!!Form::textArea('problem',null,['class'=>'form-control','placeholder'=>'Problema...'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('solution','Solución(Opcional):')!!}
                    {!!Form::textArea('solution',null,['class'=>'form-control','placeholder'=>' Solución...'])!!}
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
    <center>
    <button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>
    <a class="btn btn-default" href="{{ URL::to('entidades') }}">Cancelar</a>
    </center>
</div>
