<!DOCTYPE html>
<html>

<head>
    <meta charset="gb18030">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Dashboard</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/adminlte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="/adminlte/plugins/pace/pace.min.css">
    <!-- Css para los mensages de notificaciones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    @stack('styles')

    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/adminlte/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    @livewireStyles
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
    <div class="wrapper" style="height: auto; min-height: 100%;">
        <!--
            ---------------------------------------------------------
            Comienzo de la barra de navegacion
            ---------------------------------------------------------
        -->
        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo apontado pro LTE pagina 2 modificar aqui para a principal -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>D</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">Dashboard</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Voc?? possui 4 mensagens</li>
                                <li>
                                    <!-- inner menu: contains the messages -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!-- User Image -->
                                                    <img src="/adminlte/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <!-- Message title and timestamp -->
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <!-- The message -->
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                    </ul>
                                    <!-- /.menu -->
                                </li>
                                <li class="footer"><a href="#">Ver todas as mensagens</a></li>
                            </ul>
                        </li>
                        <!-- /.messages-menu -->

                        <!-- Notifications Menu -->
                        <li class="dropdown notifications-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Voc?? tem 10 notifica????es</li>
                                <li>
                                    <!-- Inner Menu: contains the notifications -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start notification -->
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 novos membros se adicionaram hoje
                                            </a>
                                        </li>
                                        <!-- end notification -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">Ver todos</a></li>
                            </ul>
                        </li>
                        <!-- Tasks Menu -->
                        <li class="dropdown tasks-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Voc?? tem 9 mensagens</li>
                                <li>
                                    <!-- Inner menu: contains the tasks -->
                                    <ul class="menu">
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <!-- Task title and progress text -->
                                                <h3>
                                                    RATING para proxima hora complementar.
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <!-- The progress bar -->
                                                <div class="progress xs">
                                                    <!-- Change the css width attribute to simulate progress -->
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">Ver todas as Tarefas</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                {{--  <img src="/adminlte/img/user2-160x160.jpg" class="user-image" alt="User Image">  --}}

                                @if ( auth()->user()->avatar != null )
                                    <img src="/images/{{ auth()->user()->avatar }}" class="img-responsive user-image"  alt="{{ auth()->user()->name }}">
                                @else
                                    <img src="/images/unname.jpg" class="img-responsive user-image"  alt="{{ auth()->user()->name }}">
                                @endif
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{ auth()->user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    @if ( auth()->user()->avatar != null )
                                        <img src="/images/{{ auth()->user()->avatar }}" class="profile-user-img img-responsive img-circle"  alt="{{ auth()->user()->name }}">
                                    @else
                                        <img src="/images/unname.jpg" class="profile-user-img img-responsive img-circle"  alt="{{ auth()->user()->name }}">
                                    @endif
                                    {{--  <img src="/adminlte/img/user2-160x160.jpg" class="img-circle" alt="User Image">  --}}

                                    <p>
                                        {{ auth()->user()->name }} <br> Web Developer
                                        <small>Miembro desde {{ auth()->user()->created_at }}</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Seguidores</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Amigos</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{ route('admin.users.show', auth()->user()) }}" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">


                                        <form method="POST" action="{{ route('logout') }}">
                                            {{ csrf_field() }}
                                            <button class="btn btn-default btn-flat btn-block">
                                                {{ __('Logout') }}
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--
            ---------------------------------------------------------
            Fin de la barra de navegacion
            ---------------------------------------------------------
        -->


        <!--
        ---------------------------
        -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        @if ( auth()->user()->avatar != null )
                            <img src="/images/{{ auth()->user()->avatar }}" class="img-responsive img-circle"  alt="{{ auth()->user()->name }}">
                        @else
                            <img src="/images/unname.jpg" class="img-responsive img-circle"  alt="{{ auth()->user()->name }}">
                        @endif

                        {{--  <img src="/adminlte/img/user2-160x160.jpg" class="img-circle" alt="User Image">  --}}
                    </div>
                    <div class="pull-left info">
                        <p>{{ auth()->user()->name }}</p>
                        <!-- Status -->
                        <a href="#">
                            <i class="fa fa-circle text-success"></i> Online
                        </a>
                    </div>
                </div>

                <!-- search form (Optional)
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Buscar...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>-->
                <!-- /.search form -->

                <!-- Sidebar Menu -->

                @include('admin.partials.nav')

            </section>
        </aside>

        <!--
            ---------------------------
        -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('header')
            <section class="content">
{{--                @if( session()->has('flash') )--}}
{{--                    <div class="alert alert-success">{{ session('flash') }}</div>--}}
{{--                @endif--}}
{{--                @if( session()->has('flasherror') )--}}
{{--                    <div class="alert alert-danger">{{ session('flasherror') }}</div>--}}
{{--                @endif--}}

                @yield('content')
            </section>
          </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                .:Administration System:.
            </div>
            <!-- Default to the left -->
            <strong>
                Copyright &copy; {{ date('Y') }} <a href="#">Dashboard</a>.
            </strong> All rights reserved

            <!-- Default icon social
            <span style="padding-left:20px"><a class="btn btn-social-icon btn-facebook btn-sm"><i class="fa fa-facebook"></i></a></span>
            <span style="padding-left:20px"><a class="btn btn-social-icon btn-github btn-sm"><i class="fa fa-github"></i></a></span>
            <span style="padding-left:20px"><a class="btn btn-social-icon btn-dropbox btn-sm"><i class="fa fa-dropbox"></i></a></span>
        -->
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane active" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Atividades Recentes</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Anvers??rio de Andrei</h4>

                                    <p>Pr??ximo dia 24 de junho</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Barra de Progresso</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:;">
                                <h4 class="control-sidebar-subheading">
                                    Total de ratings para pr??xima Hora complementar
                                    <span class="pull-right-container">
                                    <span class="label label-danger pull-right">70%</span>
                                    </span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">Configura????es Gerais</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
              Painel de Relat??rios
              <input type="checkbox" class="pull-right" checked>
            </label>

                            <p>
                                Informa????es sobre as configura????es gerais.
                            </p>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebars background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.2.3 -->
    <script src="/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/adminlte/bootstrap/js/bootstrap.min.js"></script>

    <script src="/adminlte/plugins/pace/pace.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    @stack('script')
    <!-- AdminLTE App -->
    <script src="/adminlte/js/app.min.js"></script>
        @if( session()->has('flash') )
            <script>
                toastr.success("{{session()->get('flash')}}");
            </script>
        @elseif( session()->has('flasherror') )
            <script>
                toastr.error("{{session()->get('flasherror')}}");
            </script>
        @elseif( count($errors) != 0 )
            <script>
                toastr.error("An error has occurred, check the delivered data");
            </script>
        @endif




{{--    @if( session()->has('flash') )--}}
{{--        <script>--}}
{{--            toastr.success("{{session()->get('flash')}}");--}}
{{--        </script>--}}
{{--    @elseif( count($errors) != 0 )--}}
{{--        <script>--}}
{{--            toastr.error("An error has occurred, check the delivered data");--}}
{{--        </script>--}}
{{--    @endif--}}
    @livewireScripts
</body>

</html>
