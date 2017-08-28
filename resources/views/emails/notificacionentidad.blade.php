@component('mail::message')
# Saludos,

Su compañia ha recibido una queja en el sitio .

@component('mail::button', ['url' => $url, 'color' => 'blue'])
Sitio de la queja
@endcomponent

@component('mail::panel')
La queja es la siguiente:
Departamento:  {{ $department }}
Problema:  {{ $problem }}
Posible solucion que da elusuario:{{ $solution }}

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
