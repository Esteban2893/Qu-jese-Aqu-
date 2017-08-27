<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
@extends('adminlte::layouts.auth')
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Quéjese Aquí</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app" v-cloak>
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
        <br>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>Quéjese Aquí</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#desc" class="smoothScroll">Ver quejas</a></li>
                    <li><a href="#graf" class="smoothScroll">Estadisticas</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                         <a href="{{ url('/login/facebook') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Iniciar Sesión Facebook</a>

                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home">
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                        <h1>BIENVENIDO</h1>
                        <h3>En esta aplicación web usted podrá crear quejas sobre cualquier empresa o institución.

                    </div>

                </div>
            </div> <!--/ .container -->
        </div><!--/ #headerwrap -->
    </section>

    <section id="desc" name="desc">
        <!-- INTRO WRAP -->
        <div id="intro">
            <div class="container">
                <div class="row centered">
                    <h1>Lista de quejas</h1>
                    <br>
                    <br>
        <div class="row">
         <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <li>
             @if($quejas == null)
                <td colspan="8">
                    <center>
                    No hay quejas creadas en el sistema
                    </center>
                </td>
            @else
            @foreach($quejas as $queja)
                <div class="panel-group">
                     <div class="panel panel-info">
                <div class="pull-left image">
                    <img src="{{  $queja->user->avatar  }}" class="img-circle" alt="User Image" />
                </div>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> {{$queja->created_at}}</span>

                <h3 class="timeline-header"><a href="#">{{$queja->user->name}}</a> Creó una queja</h3>

                <div class="timeline-body">
                  {{$queja->problem}}
                </div>
               @if(Auth::user()) 
                <div class="timeline-footer">
                   <a class="btn btn-primary btn-flat btn-xs fa fa-thumbs-up"
                               href="{{ URL::to('megustaqueja/'.$queja->id) }}" role="button">Me gusta
                                </span></a>

                </div>
                @endif
              </div>
                
            </li>
                <hr>
            </div> <!--/ .container -->
        </div><!--/ #introwrap -->
        @endforeach
        @endif
          @if($quejas != null)
            <div class="panel-footer text-center">
                {!! $quejas->render() !!}
            </div>
        @endif
        <!-- FEATURES WRAP -->

   <br/>
     <section id="graf" name="graf">
    <div class="box box-primary">
        <div class="box-header">
        </div>

        <div class="box-body" id="div_grafica_pie">
        </div>

        <div class="box-footer">
        </div>
    </div>

          <!-- /.box -->

        </div>
    </section>
    <footer>
        <div id="c">
            <div class="container">
                <p>
                    <a href="https://github.com/acacha/adminlte-laravel"></a><b>admin-lte-laravel</b></a>. {{ trans('adminlte_lang::message.descriptionpackage') }}.<br/>
                    <strong>Copyright &copy; 2015 <a href="http://acacha.org">Acacha.org</a>.</strong> {{ trans('adminlte_lang::message.createdby') }} <a href="http://acacha.org/sergitur">Sergi Tur Badenas</a>. {{ trans('adminlte_lang::message.seecode') }} <a href="https://github.com/acacha/adminlte-laravel">Github</a>
                    <br/>
                    AdminLTE {{ trans('adminlte_lang::message.createdby') }} Abdullah Almsaeed <a href="https://almsaeedstudio.com/">almsaeedstudio.com</a>
                    <br/>
                    Pratt Landing Page PROVA {{ trans('adminlte_lang::message.createdby') }} <a href="http://www.blacktie.co">BLACKTIE.CO</a>
                </p>

            </div>
        </div>
    </footer>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ url (mix('/js/app-landing.js')) }}"></script>
<script src="{{ url ('/js/highcharts.js') }}"></script>
<script src="{{ url ('/js/graficas.js') }}"></script>
<script> cargar_grafica_pie() </script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
