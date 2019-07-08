<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title><?= $titulo ?></title>
        <!--esta funcao base_url() esta carregando pois no controller pagina foi chamado dentro 
        construtor a funcao helper com o parametro de url-->
        <link rel="stylesheet" href="<?= base_url('assets/css/normalize.css') ?>"/>

        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css.map') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css.map') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-grid.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-grid.css.map') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-grid.min.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-grid.min.css.map') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-reboot.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-reboot.css.map') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-reboot.min.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-reboot.min.css.map') ?>"/>
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>"/>

    </head>
    <body>
        <div id="header">
            <div id="linha">
                <header> 
                    <div class="coluna col4">
                        <h1 class="logo">Site Uno</h1>
                    </div>
                    <div class="coluna col8">
                        <nav>
                            <ul class="list-group list-group-horizontal list-group-item-action">
                                <li class="list-group-item list-group-item-action list-group-item-primary"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="list-group-item list-group-item-action list-group-item-primary"><a href="<?= base_url('index.php/clientes') ?>">Clientes</a></li>
                                <li class="list-group-item list-group-item-action list-group-item-primary"><a href="<?= base_url('index.php/servicos') ?>">Serviços</a></li>
                                <li class="list-group-item list-group-item-action list-group-item-primary"><a href="<?= base_url('index.php/sobre') ?>">Sobre</a></li>
                                <li class="list-group-item list-group-item-action list-group-item-primary"><a href="<?= base_url('index.php/contato') ?>">contato</a></li>
                            </ul>
                        </nav>
                    </div>

                </header>                
            </div>
        </div>
