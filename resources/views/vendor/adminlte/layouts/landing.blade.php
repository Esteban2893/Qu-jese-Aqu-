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
<br>

    <section id="home" name="home">
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                        <h1>BIENVENIDO</h1>
        <br>
        <br>

                        <h3>En esta aplicación web usted podrá crear quejas sobre cualquier empresa o institución.
                        Inicie sesión con facebook para que pueda crearlas. 
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
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
           @if(count($quejas)>0)
            <li>
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
                               href="{{ URL::to('megustaqueja/'.$queja->id) }}" role="button">Me gusta {{$queja->likes}}
                                </span></a>
                 
                </div>
                @endif
                
              </div>
               @endforeach
            </li>
            @else
                <h4>No hay quejas creadas en el sistema. </h4>
            @endif
            </div> <!--/ .container -->
        </div><!--/ #introwrap -->
        
       
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
                    <b>Quéjese aquí</b></a>.   
                    <strong>Copyright &copy; 2017 </strong> Universidad: <a href="sancarlos.utn.ac.cr">UTN</a>. Repositorio <a href="https://github.com/Esteban2893/Qu-jese-Aqu-">Github</a>
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
