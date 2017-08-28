@include('errors.request')
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
    <div class="form-group">
    <center>
    <button type="submit" class="btn btn-primary">{{ $submitButtonText }}</button>
    <a class="btn btn-default" href="{{ URL::to('entidades') }}">Cancelar</a>
    </center>
</div>
