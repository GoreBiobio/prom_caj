<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}
                    </a>
                </div>
            </div>
        @endif

        <br>
        <center><a href="/"><img src="/img/logo_interno.fw.png" alt=""></a></center>
        <br>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">FINANCIERO</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>
            <li><a href="/Planificacion/Iniciar"><i class='fa fa-check-circle-o'></i> <span>Iniciar Planificación</span></a></li>
            <li><a href="/Planificacion/Grilla"><i class='fa fa-folder-open'></i> <span>Gestionar Planificación</span></a></li>
            <li><a href="/Planificacion/Archivo"><i class='fa fa-archive'></i> <span>Archivo de Proyectos</span></a></li>
            <li class="header">SISTEMA</li>
            <li class="treeview">
                <a href="#"><i class='fa fa-gears'></i> <span>Administración</span> <i
                        class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/Adm/Institucion">Datos Institución</a></li>
                    <li><a href="/Adm/ClaveAcceso">Cambiar Clave de Acceso</a></li>
                    <li><a href="/Adm/AcercaDe">Acerca de</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
