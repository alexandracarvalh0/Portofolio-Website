<?php
    include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="db.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" integrity="sha512-i8+QythOYyQke6XbStjt9T4yQHhhM+9Y9yTY1fOxoDQwsQpKMEpIoSQZ8mVomtnVCf9PBvoQDnKl06gGOOD19Q==" crossorigin="anonymous" />
  </head>
  <body>

    <!-- home section starts -->
    <section class="home" id="home">
        <h1 class="hero-text">
            Olá, Sou<br />
            <span>Alexandra</span>
        </h1>
        <p>Este é o meu resumo</p>
    </section>
    <!-- home section ends -->

    <!-- header section starts -->
    <header class="header">
        <a><i class="menu material-icons"> menu </i></a>
        <nav class="navbar">
        <a href="#">home</a>
        <a href="#portfolio">portfolio</a>
        <a href="#resume">resumo</a>
        <a href="#about">sobre</a>
        <a href="#contact">contacto</a>
        </nav>
    </header>
    <!-- header section ends -->

    <!-- portfolio section starts -->
    <section class="portfolio" id="portfolio">
        <h1 class="heading">Destaque <span>Portfólio</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                <img src="imagens/1.png" alt="" />
                <div class="content">
                    <h2>projeto #1</h2>
                </div>
                </div>
            </div>
        
            <div class="box">
                <div class="image">
                <img src="imagens/3.png" alt="" />
                <div class="content">
                    <h2>projeto #2</h2>
                </div>
                </div>
            </div>
        
            <div class="box">
                <div class="image">
                <img src="imagens/2.png" alt="" />
                <div class="content">
                    <h2>projeto #3</h2>
                </div>
                </div>
            </div>
        
        </div>
    </section>
    <!-- portfolio section ends -->

    <!-- resume section starts -->
    <section class="resume" id="resume">
        <h1 class="heading">Meu <span>Resumo</span></h1>
        <div class="col-container">
            <div class="col">
                <h2>Educação</h2>
                <div class="box">
                <span><i class="material-icons"> calendar_today </i> Set 2019 - Jun 2021</span>
                <h3>Colégio de São Gonçalo - Informática</h3>
                <p>
                    Aprendizagem na área de hardware e software, disciplina várias linguagens de programação.
                </p>
                <p class="university">Amarante</p>
                </div>
            </div>
        
            <div class="col">
                <h2>Experiência</h2>
                <div class="box">
                <span><i class="material-icons"> calendar_today </i> Set 2020 - Jun 2021</span>
                <h3>Estagiária em Desenvolvimento de um website - Medifarma</h3>
                <p>
                    Apoiei aos funcionários com erros técnicos nos programas, desenvolvi uma página web e 
                    aprimorei o estabelecimento de forma online.
                </p>
                <p class="university">Amarante</p>
                </div>    
            </div>
        </div>
    </section>
    <!-- resume section ends -->

    <!-- about section starts -->
    <section class="about" id="about">
        <div class="box-container">
            <div class="box">
                <div class="image">
                <img style="filter: grayscale(100%);" src="imagens/eu5.png" alt="" />
                </div>
            </div>
    
            <div class="box" style="margin-left: 5px;">
                <h1 class="heading">Sobre <span>Mim</span></h1>
                <p>
                    Sou uma desenvolvedora web com competências práticas desenvolvidas, 
                    nunca deixando de procurar aperfeiçoar o meu trabalho e experiência profissional.
                </p>
                <p>
                    Reúno, como profissional, um vasto leque de aptidões, desde capacitações práticas
                    que me permitem ter uma destreza inovadora e crítica a habilidades sociais e 
                    comunicativas que contribuem para um bom ambiente profissional.
                </p>
                <a href="#contact" class="btn">contacte-me</a>
                <a href="CV.pdf" class="btn">download cv</a> 
            </div>
        </div>
    </section>
    <!-- about section ends -->

    <!-- services section starts -->
    <section class="services" id="services">
        <h1 class="heading">Meu <span>Serviços</span></h1>
        <div class="box-container">
            <div class="box">
                <i class="icon material-icons"> web </i>
                <h2>Front-End</h2>
                <p>
                Uma das minhas skills é o Front-End. Se quiser um website incrivel e responsivo
                para o seu negócio, está no lugar certo. 
                </p>
                <!--<a href="#" class="btn-2">learn more <i class="material-icons"> navigate_next </i></a>-->
            </div>
        
            <div class="box">
                <i class="icon material-icons"> language </i>
                <h2>Linguagens</h2>
                <p>
                Sou fluente em português com um bom nivel de conhecimento em inglês.
                Tenho ainda algumas bases em outras linguagens como o espanhol. 
                </p>
                <!--<a href="#" class="btn-2">learn more <i class="material-icons"> navigate_next </i></a>-->
            </div>
        
            <div class="box">
                <i class="icon material-icons"> code </i>
                <h2>Back-End</h2>
                <p>
                Realizei alguns projetos com base de dados utilizando o MySql juntamente com o PHP.
                </p>
                <!--<a href="#" class="btn-2">learn more <i class="material-icons"> navigate_next </i></a>-->
            </div>
        </div>
    </section>
    <!-- services section ends -->

    <!-- contact php ends -->
    <section class="contact" id="contact">
        <h1 class="heading">Entre <span>Em Contacto</span></h1>
        <div class="col-container">
            <div class="col">
                <h2>Entre Em Contacto</h2>
                <form method="POST" action="">
                    <input name="nome" type="text" placeholder="Seu Nome" required/>
                    <input name="email" type="email" placeholder="Seu Email" required/>
                    <input name="assunto" type="text" placeholder="Seu Assunto" required/>
                    <textarea name="conteudo" placeholder="Escreva uma mensagem" id="" cols="30" rows="10" required></textarea>
                    <!--<a href="#" class="btn">enviar mensagem</a>-->
                    <input class="btn" type="submit" name="AddMsgCont" value="Enviar">
                </form>
                <?php
                        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

                        if (!empty($dados['AddMsgCont'])) {
                            //var_dump($dados);
                
                            $query_contato = "INSERT INTO contatos (nome, email, assunto, conteudo) VALUES (:nome, :email, :assunto, :conteudo)";
                            $add_contato = $conn->prepare($query_contato);
                            $add_contato->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                            $add_contato->bindParam(':email', $dados['email'], PDO::PARAM_STR);
                            $add_contato->bindParam(':assunto', $dados['assunto'], PDO::PARAM_STR);
                            $add_contato->bindParam(':conteudo', $dados['conteudo'], PDO::PARAM_STR);
                
                            $add_contato->execute();
                            
                            if($add_contato->rowCount()){
                                echo "<p style='color: green; text-align:center;'>Mensagem enviada com sucesso!</p>";
                            }else{
                                echo "<p style='color: red; text-align:center;'>Erro: Mensagem não enviada!</p>";
                            }
                        }
                    ?>
            </div>
        
            <div class="col">
                <h2>Detalhes Do Meu Contacto</h2>
                <p>email</p>
                <span style="text-transform: lowercase;">alexandra.carvalho334@gmail.com</span>
                <br />
                <br />
                <p>telemovel</p>
                <span>+351 910 775 024</span>
                <br />
                <br />
                <p>endereço</p>
                <span>
                Travessa do Queimado, <br />
                nº29 1ºF <br />
                Portugal, Porto
                </span>
            </div>
        </div>
    </section>
    <!-- contact section ends -->

    <!-- footer section starts -->
    <section class="footer" id="footer">
        <div class="socials">
        <a href="https://www.instagram.com/_alexandra.carvalho_/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
        <a href="https://github.com/alexandracarvalh0" target="_blank"><ion-icon name="logo-github"></ion-icon></a>
        <a href="https://www.linkedin.com/in/alexandra-carvalh0/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a>
        </div>
        <p>Todos os direitos reservados por Alexandra - 2022</p>
    </section>
    <!-- footer section ends -->

    <!-- arrow section starts -->

    <div>
        <a href="javascript:" id="return-to-top"><i class='fa fa-chevron-up' style="color: white;"></i></a>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>
        // ===== Scroll para topo da pagina ==== //
        $(window).scroll(function() {
        if ($(this).scrollTop() >= 800) {        // Se a pagina descer mais de 50px
            $('#return-to-top').fadeIn(200);    // Fade na seta
        } else {
            $('#return-to-top').fadeOut(200);   // Sair o fade da seta
        }
        });
        $('#return-to-top').click(function() {      // Quando a seta é clicada
        $('body,html').animate({
            scrollTop : 0                       // Scroll para o topo da pagina
            }, 500);
        });

        window.scroll({
            top: 1000,
            behavior: "smooth"
        });
    </script>
    <!-- arrow section ends -->

    <!-- ion icons import -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
  </body>
</html>