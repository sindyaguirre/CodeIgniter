<?php $this->load->view('header'); ?>

<div class="linha">
    <section>
        <h2>Veja quem já contratou nossos serviços</h2>
        <div class="coluna col6">
            <h4>Nome da empresa 1</h4>
            <img src="<?= base_url('assets/img/imagem1.png')?>" alt=""> 
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="coluna col6">
            <h4>Nome da empresa 2</h4>
            <img src="<?= base_url('assets/img/imagem2.png')?>" alt=""> 
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="coluna col6">
            <h4>Nome da empresa 3</h4>
            <img src="<?= base_url('assets/img/imagem3.png')?>" alt=""> 
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="coluna col6">
            <h4>Nome da empresa 4</h4>
            <img src="<?= base_url('assets/img/imagem4.png')?>" alt=""> 
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </section>
</div>
<div class="conteudo-extra">
    <div class="linha">
        <div class="coluna col7">
            <section>
                <h2>Opinião de quem contratou</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    <em>Fulano de Tal - Empresa ABC</em>                
                </p>

            </section>
        </div>
        <div class="coluna col5">
            <?php $this->load->view('noticias'); ?>
        </div> 
    </div>

</div>
<?php $this->load->view('footer'); ?>
