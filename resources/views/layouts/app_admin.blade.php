<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<base href="/adminlte/">--}}
    <link rel="shortcut icon" href="" type="image/png" />
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Для select связанные товары в админке добавить товар -->
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/select2/dist/css/select2.css')}}">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/skins/_all-skins.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/my.css')}}">






    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
    .wrapper {
        overflow: hidden;
    }
    </style>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b> Panel</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="user-image"
                                    alt="User Image">
                                <span class="hidden-xs">Admin</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle"
                                        alt="User Image">
                                    <p>
                                        Admin
                                    </p>

                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Профиль</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ route('logout-admin') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                            class="btn btn-default btn-flat">Выход</a>
                                        <form id="logout-form" action="{{ route('logout-admin') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>ADmin </p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Меню</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li><a href="{{route('blog.admin.main.index')}}"><i class="fa fa-user"></i> <span>Главная
                                админки</span></a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-cubes"></i> <span>Заказы</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('order.index')}}">Список заказов</a></li>
                            <li><a href="{{route('refund.index')}}">Заявки на возврат</a></li>
                        </ul>


                    <li class="treeview">
                        <a href="#"><i class="fa fa-cubes"></i> <span>Билеты</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('ticket.index')}}">Список билетов</a></li>
                            <li><a href="{{route('ticket.create')}}">Добавить билет</a></li>
                        </ul>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-cubes"></i> <span>Акции</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('promo.index')}}">Список акций</a></li>
                            <li><a href="{{route('promo.create')}}">Добавить акцию</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#"><i class="fa fa-navicon"></i> <span>Аквапарк</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('aquapark.info.index')}}">Об аквапарке</a></li>
                            <li><a href="{{route('aquapark.price.index')}}">Прайс</a></li>
                            <li><a href="{{route('aquapark.menu.index')}}">Меню</a></li>
                            <li><a href="{{route('aquapark.shedule.index')}}">График работы</a></li>
                            <li><a href="{{route('aquapark.apbiggal.index')}}">Фотогалерия</a></li>
                            <li><a href="{{route('aquapark.vid.index')}}">Видеогалерея</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#"><i class="fa fa-navicon"></i> <span>Спа центр</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('spa.info.index')}}">О спа центре</a></li>
                            <li><a href="{{route('spa.price.index')}}">Прайс</a></li>
                            <li><a href="{{route('spa.menu.index')}}">Меню</a></li>
                            <li><a href="{{route('spa.biggal.index')}}">Фотогалерия</a></li>
                            <li><a href="{{route('spa.vid.index')}}">Видеогалерея</a></li>
                        </ul>
                    </li>

                    <li><a href="{{route('faq.index')}}"><i class="fa fa-user"></i><span>Вопрос-ответы</span></a></li>

                    <li class="treeview">
                        <a href="#"><i class="fa fa-users"></i> <span>Пользователи</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('user.index')}}">Список пользователей</a></li>
                            <li><a href="{{route('user.create')}}">Добавить пользователя</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#"><i></i> <span>Редактор отзывов</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('review.index')}}">Список отзывов</a></li>
                            <li><a href="{{route('review.create')}}">Добавить отзыв</a></li>
                        </ul>
                    </li>
                    <li class="treeview">

                        <a href="#"><i></i> <span>Новости</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('news.index')}}">Все новости</a> </li>
                            <li><a href="{{route('news.create')}}">Добавить новость</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i></i> <span>Футер сайта</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('admin/corpclient')}}">Корпоративным клиентам</a></li>
                            <li><a href="{{url('admin/groupschool')}}">Групповые посещения для школ</a></li>
                            <li><a href="{{url('admin/employment')}}">Вакансии</a></li>
                            <li><a href="{{url('admin/howtogo')}}">Как добраться?</a></li>
                        </ul>
                    </li>

                    <li><a href="{{url('admin/staywithus')}}"><i></i><span>Оставайтесь с нами</span></a>
                    </li>

                    <li><a href="{{url('admin/contacts')}}"><i></i><span>Контакты аквапарка</span></a>
                    </li>
                    <li class="treeview">
                        <a href="#"><i></i> <span>Политика аквапарка</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('rules.index')}}">Правила посещения</a></li>
                            <li><a href="{{route('payment.index')}}">Правила оплаты</a></li>
                            <li><a href="{{route('dataproc.index')}}">Политика обработки персональных данных</a></li>
                        </ul>
                    </li>
                    </li>
                </ul>
                <br><br>
                <!-- search form -->
                <!-- /.search form -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <main id="app">
                @yield('content')
            </main>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2019 <a href="http://www.sashasan.com" target="_blank">Sasha San</a>.</strong> All
            rights
            reserved.
        </footer>

        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
    </script>

    <script type="text/javascript">
    var route = "#";
    $('#search').typeahead({
        source: function(term, process) {
            return $.get(route, {
                term: term
            }, function(data) {
                return process(data);
            });
        }
    });
    </script>


    <script>
    tinymce.init({
        selector: '#textarea'
    });
    </script>

    <!-- jQuery 3 -->
    <script src="{{asset('adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <script src="{{asset('js/ajaxupload.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Validator -->
    <script src="{{asset('js/validator.js')}}"></script>
    <!-- Search -->

    <!-- AdminLTE App -->
    <script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>

    <!--TinyMCE editor-->

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    @yield('scripts')
    <!-- Для select связанные товары в админке добавить товар -->
    <script src="{{asset('adminlte/bower_components/select2/dist/js/select2.full.js')}}"></script>

    <!-- === = ===  -->

    <script src="{{asset('js/my.js')}}"></script>

</body>

</html>