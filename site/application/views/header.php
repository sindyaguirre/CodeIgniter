<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title><?=$titulo?></title>
        <!--esta funcao base_url() esta carregando pois no controller pagina foi chamado dentro 
        construtor a funcao helper com o parametro de url-->
        <link rel="stylesheet" href="<?= base_url('assets/css/normalize.css')?>"/>
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css')?>"/>

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
                            <ul class="menu inline sem-marcador">
                                <li><a href="<?= base_url()?>">Home</a></li>
                                <li><a href="<?= base_url('clientes')?>">Clientes</a></li>
                                <li><a href="<?= base_url('servicos')?>">Serviços</a></li>
                                <li><a href="<?= base_url('sobre')?>">Sobre</a></li>
                                <li><a href="<?= base_url('contato')?>">Contato</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>                
            </div>
        </div>
