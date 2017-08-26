<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{  Auth::user()->avatar  }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menú</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Quejas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a  href="{{ url('quejas/create') }}">Crear Queja</a></li>
                    <li><a  href="{{ url('quejas') }}">Mis Quejas</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Entidades</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a  href="{{ url('entidades/create') }}">Crear Entidad</a></li>
                    @if(Auth::user()->user_type == 1)
                    <li><a  href="{{ url('entidades') }}">Ver Entidades</a></li>
                    @endif
                </ul>
            </li>
             @if(Auth::user()->user_type == 1 )
             <li class="active">
             <a href="{{ url('activarquejas') }}"><i class='fa fa-link'></i>
              <span>Activar Quejas</span></a></li>
            @endif
             <li class="active">
             <a href="{{ url('/') }}"><i class='fa fa-link'></i>
              <span>Ver Quejas</span></a></li>


        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
