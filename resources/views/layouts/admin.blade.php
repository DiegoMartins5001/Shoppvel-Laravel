<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Shoppvel</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="{{asset('bootstrap/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="justified-nav.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="{{asset('bootstrap/js/ie-emulation-modes-warning.js')}}"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <style type="text/css">
        .salvar {
        -moz-box-shadow: 0px 1px 0px 0px #3dc21b;
        -webkit-box-shadow: 0px 1px 0px 0px #3dc21b;
        box-shadow: 0px 1px 0px 0px #3dc21b;
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #008022), color-stop(1, #5eeb12));
        background:-moz-linear-gradient(top, #008022 5%, #5eeb12 100%);
        background:-webkit-linear-gradient(top, #008022 5%, #5eeb12 100%);
        background:-o-linear-gradient(top, #008022 5%, #5eeb12 100%);
        background:-ms-linear-gradient(top, #008022 5%, #5eeb12 100%);
        background:linear-gradient(to bottom, #008022 5%, #5eeb12 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#008022', endColorstr='#5eeb12',GradientType=0);
        background-color:#008022;
        -moz-border-radius:6px;
        -webkit-border-radius:6px;
        border-radius:6px;
        border:1px solid #18ab29;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Georgia;
        font-size:15px;
        font-weight:bold;
        padding:6px 24px;
        text-decoration:none;
        text-shadow:0px 1px 0px #2f6627;
    }
    .salvar:hover {
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5eeb12), color-stop(1, #008022));
        background:-moz-linear-gradient(top, #5eeb12 5%, #008022 100%);
        background:-webkit-linear-gradient(top, #5eeb12 5%, #008022 100%);
        background:-o-linear-gradient(top, #5eeb12 5%, #008022 100%);
        background:-ms-linear-gradient(top, #5eeb12 5%, #008022 100%);
        background:linear-gradient(to bottom, #5eeb12 5%, #008022 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5eeb12', endColorstr='#008022',GradientType=0);
        background-color:#5eeb12;
    }
    .salvar:active {
        position:relative;
        top:1px;
    }
    .salvarcategoria{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        color: #5cbf00;
        padding: 5px 20px;
        background: -moz-linear-gradient(
            top,
            #ffffff 0%,
            #ffffff 50%,
            #d6d6d6);
        background: -webkit-gradient(
            linear, left top, left bottom,
            from(#ffffff),
            color-stop(0.50, #ffffff),
            to(#d6d6d6));
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 3px solid #5cbf00;
        -moz-box-shadow:
            0px 1px 3px rgba(000,000,000,0.5),
            inset 0px 0px 3px rgba(255,255,255,1);
        -webkit-box-shadow:
            0px 1px 3px rgba(000,000,000,0.5),
            inset 0px 0px 3px rgba(255,255,255,1);
        box-shadow:
            0px 1px 3px rgba(000,000,000,0.5),
            inset 0px 0px 3px rgba(255,255,255,1);
        text-shadow:
            0px -1px 0px rgba(000,000,000,0.1),
            0px 1px 0px rgba(255,255,255,1);
    }
    .novo {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        color: #050505;
        padding: 8px 20px;
        background: -moz-linear-gradient(
            top,
            #ffffff 0%,
            #ebebeb 50%,
            #dbdbdb 50%,
            #b5b5b5);
        background: -webkit-gradient(
            linear, left top, left bottom,
            from(#ffffff),
            color-stop(0.50, #ebebeb),
            color-stop(0.50, #dbdbdb),
            to(#b5b5b5));
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #949494;
        -moz-box-shadow:
            -3px 2px 12px rgba(24,8,255,0.7),
            inset 4px -6px 1px rgba(255,255,255,1);
        -webkit-box-shadow:
            -3px 2px 12px rgba(24,8,255,0.7),
            inset 4px -6px 1px rgba(255,255,255,1);
        box-shadow:
            -3px 2px 12px rgba(24,8,255,0.7),
            inset 4px -6px 1px rgba(255,255,255,1);
        text-shadow:
            0px -1px 0px rgba(000,000,000,0.2),
            0px 1px 0px rgba(255,255,255,1);
    }
    .editar{
        background-color:#6fba26;
        padding:7px;
        border: 5px;
        position:relative;
        font-family: 'Open Sans', sans-serif;
        font-size:12px;
        text-decoration:none;
        color:#fff;
        background-image: linear-gradient(bottom, rgb(100,170,30) 0%, rgb(129,212,51) 100%);
        box-shadow: inset 0px 1px 0px #b2f17f, 0px 6px 0px #3d6f0d;
        border-radius: 5px;
    }

    .editar:active {
        top:7px;
        background-image: linear-gradient(bottom, rgb(100,170,30) 100%, rgb(129,212,51) 0%);
        box-shadow: inset 0px 1px 0px #b2f17f, inset 0px -1px 0px #3d6f0d;
        color: #156785;
        text-shadow: 0px 1px 1px rgba(255,255,255,0.3);
        background: rgb(44,160,202);
    }
    .excluir{
        background-color:#D40404;
        padding:7px;
        position:relative;
        font-family: 'Open Sans', sans-serif;
        font-size:12px;
        text-decoration:none;
        color:#fff;
        background-image: linear-gradient(bottom, rgb(21,128,166) 0%, rgb(129,212,51) 100%);
        box-shadow: inset 0px 1px 0px #b2f17f, 0px 6px 0px #6E0505;
        border-radius: 5px;
    }

    .excluir:active {
        top:7px;
        background-image: linear-gradient(bottom, rgb(100,170,30) 100%, rgb(129,212,51) 0%);
        box-shadow: inset 0px 1px 0px #b2f17f, inset 0px -1px 0px #3d6f0d;
        color: #156785;
        text-shadow: 0px 1px 1px rgba(255,255,255,0.3);
        background: rgb(44,160,202);
    }
    </style>
    </head>

    <body>

        <div class="container">

            @include('layouts.admin-cabecalho')
            
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-lg-2">
                    <h3>Administrador</h3>
                    <ul>
                        <li>
                            <a href="{{route('admin.dashboard')}}">
                                Painel de controle
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.pedidos')}}">
                                Todos os pedidos
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.pedidos', '?status=nao-pagos')}}">
                                Pedidos pendentes de pagamento
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.pedidos', '?status=pagos')}}">
                                Pedidos pagos
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.pedidos', '?status=finalizados')}}">
                                Pedidos finalizados
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.perfil')}}">
                                Perfil
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-10">
                    @include('layouts.messages')

                    @yield('conteudo')
                </div>
            </div>

            <!-- Site footer -->
            <footer class="footer">
                <p>&copy; 2016 Ademir Mazer Junior. @nunomazer - ademir.mazer.jr@gmail.com</p>
            </footer>

        </div> <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="{{asset('bootstrap/assets/js/ie10-viewport-bug-workaround.js')}}"></script>
    </body>
</html>
