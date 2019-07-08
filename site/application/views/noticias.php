<div class="coluna col3 sidebar">
    <h3>Clientes satisfeitos</h3>
    <ul class="sem-marcador sem-padding">
        <?php
        for ($i = 1; $i <= 7; $i++) {
            ?>
            <li>
                <a href="">Notícia <?= $i ?></a> 
                <h5><?= $i ?></h5> 
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Nullam feugiat, turpis at pulvinar vulputate, erat libero 
                    tristique tellus, nec bibendum odio risus sit amet ante. 
                    Aliquam erat volutpat. Nunc auctor. Mauris pretium quam et urna. 
                    Fusce nibh. Duis risus. Curabitur sagittis hendrerit
                </p>

            </li>
            <?php
        }
        ?>
    </ul>
    <a href="clientes.php" class="botao">Ver todos </a>
</div>
