
<?php

// arquivo que faz a configuraçaõ inicial da página.
// por exemplo, conecta-se ao banco de dados.
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

// define o titulo dessa 
$title = " Quem tem fome tem pressa...";

// inclui o cabeçalho da página
require('_header.php')


?>
            <section>

                <h2>Título da página</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, iste aliquam aperiam voluptatem
                    molestias nemo odit unde modi cupiditate exercitationem doloremque quaerat soluta rerum quidem
                    dignissimos officiis sapiente, aut alias!</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio soluta voluptatum consequatur
                    voluptatibus cupiditate temporibus qui, nostrum deserunt minus laudantium in officia rem dignissimos
                    facilis modi culpa error aliquam? Quam?</p>

            </section>

            <aside>

                <h3>Lateral</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, aperiam corporis culpa consequatur
                    iusto.</p>

            </aside>

        </main>

        <footer>

            <a href="/" title="Página inicial"><i class="fa-solid fa-house-chimney"></i></a>
            

             <!-- &copy; = cria o símbulo do copyright -->
            <div>© Copyright 2022 Vitugo.</div>

            <!-- "#top" = criando um id -->
            <a href="#top" title="Topo da página"><i class="fa-solid fa-circle-up"></i></a>

        </footer>

    </div>

</body>

</html>

<?php

require('_footer.php')
?>
        