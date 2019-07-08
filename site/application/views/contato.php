<?php $this->load->view('header'); ?>
<div class="linha">
    <section>
        <div class="coluna col5">
            <h3>Localização</h3>
            <!--<img src="<?= base_url('assets/img/imagem1.png') ?>" alt="Aqui será o mapa">--> 
            <ul class="sem-padding sem-marcador">
                <li>Rua teste 1</li>
                <li>Bairro teste</li>
                <li>Cidade bla bla - RS</li>
            </ul>
        </div>
        <div class="coluna col7 contato">
            <h2>Envie sua mensagem</h2>
            <?php
            if (isset($formerror)&&$formerror!="") {
                echo '<p>' . $formerror . '</p>';
            }
            echo form_open('pagina/contato');
            echo form_label('Seu nome:', 'nome');
            echo form_input('nome', set_value('nome'));

            echo form_label('Seu e-mail:', 'email');
            echo form_input('email', set_value('email'));

            echo form_label('Seu assunto:', 'assunto');
            echo form_input('assunto', set_value('assunto'));

            echo form_label('Mensagem:', 'mensagem');
            echo form_textarea('mensagem', set_value('mensagem'));

            echo form_submit('Enviar', "Enviar mensagem >>", array('class' => 'contato'));

            echo form_close();
            ?>
        </div>
    </section>

</div>
