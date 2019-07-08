<?php $this->load->view('header'); ?>
<div class="linha">
    <section>
        <div class="coluna col3 sidebar">
            <h3>Clientes satisfeitos</h3>
            <ul class="sem-marcador sem-padding">
                <?php
                for ($i = 1; $i <= 7; $i++) {
                    ?>
                    <li><a href="">Nome da empresa <?= $i ?></a> </li>
                    <?php
                }
                ?>
            </ul>
            <a href="<?= base_url('clientes')?>" class="botao">Ver todos </a>
        </div>
        <div class="coluna col9">
            <h2>Último trabalho: <em>Empresa ABC</em></h2>
            <img class="imagem" src="<?= base_url('assets/img/imagem1.png')?>" alt="">
        </div>
    </section>
</div>

<?php
$this->load->view('noticias');

$this->load->view('footer');
?>