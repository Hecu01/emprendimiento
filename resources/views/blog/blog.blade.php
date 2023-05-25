<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Settings Page -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Urbine01, Valentín Urbine, Valen Urbine, valen urbine, valen, urbine, Urbine, Valen, Valentín, valentín, valentin Hecu01, sitio de Valentin">
        <meta name="author" content="Valentín Urbine">
        <meta name="description" content="Éste es mi primer sitio web. Soy Valentín Urbine.">
        <link rel="icon" href="images/favicon.ico"> 

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- CSS externo -->
		<link rel="stylesheet" href="css/style.css">
        <!-- CSS LINK -->
        <link rel="stylesheet" href="css/blog/menu.css">
        <link rel="stylesheet" href="css/blog/header.css">
        <link rel="stylesheet" href="css/blog/section.css">
        <link rel="stylesheet" href="css/blog/biography.css">
        <link rel="stylesheet" href="css/blog/footer.css">
        <link rel="stylesheet" href="css/blog/styles.css">


        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- JAVASCRIPT LINK -->
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
        <title>{{ isset($title) ? $title : 'Sitio web'}}</title>
    </head>

    <body>
        <div class="divisor">
            <x-header/>
        </div>
        <div class="contenedor">
            
            <!-- Menu -->
            <x-header_blog/>


            <!-- Header -->
            <div class="header container-fluid justify-content-center"> 
                <div class="contenedor-maq-de-escribir">
                    <h1>¡Hola Usuario! Bienvenido a mi Sitio Web.</h1>
                </div>
                
                <div class="image-header">
                    <img src="img/blog/yo-solo.png" alt="yo" width="300px" height="310px">
                    <p>Valentín Urbine</p>
                </div>


            </div>


            <!-- Section -->
            <div class="section">
                

                <section class="container-fluid section-bootstrap">

                    <h1 class="h1-section" id="sobre-mi">Un poco sobre mí</h1>

                    <div class="row d-flex justify-content-center articles-1-2">
                        <!-- Secundaria-->
                        <article>
                            <img src="img/blog/article_2.png" alt="ESN5" width="120px" height="120px">
                            <h2>Secundario Completo</h2>
                            <br>
                            <p class="text-article-1-2">
                                Finalicé mis estudios secundarios en la 
                                <strong>Escuela Secundaria N°5 "Héroes Nicoleños de malvinas"</strong> en el año 2019
                                portando la bandera nacional Argentina.
                                
                            </p>

                            <div class="col-7 m-auto bottom-article">
                                <p class="visitar">Visitar</p>
                                <a href="https://www.facebook.com/Escuela-Secundaria-5-H%C3%A9roes-Nicole%C3%B1os-de-Malvinas-279386432578489" rel="noopener" target="_BLANK" class="btn-bottom"> E.S.N °5</a> 
                            </div>
                        </article>

                        <!-- Terciaria -->
                        <article>
                            <img src="img/blog/article_1.png" alt="ISFT38" width="80px" height="120px">
                            
                            <h2>Educación Terciaria en curso</h2>
                            <br>
                            <p class="text-article-1-2">
                                En este 2022, comencé a cursar 2° Año de la carrera de <strong>Análisis de Sistemas</strong>, en el ISFT 38, San Nicolás de los Arroyos, provincia de Buenos Aires, Argentina.
                            </p>
                            
                            <div class="col-7 m-auto bottom-article">
                            
                                <p class="visitar">Visitar</p>
                                <a href="http://isft38.edu.ar/" rel="noopener" target="_BLANK" class="btn-bottom"> ISFT 38</a> 
                            </div>
                        </article>

                    </div>

                    
                    <div class="row d-flex justify-content-center ">
                        <!--Títulos y reconocimientos-->
                        <article class="">
                            <img src="img/blog/article_3.png" alt="Reconocimientos" width="110" height="110">
                            <h2>Títulos y reconocimientos</h2>
                            <br>


                            <p><strong>Títulos Obtenidos:</strong> </p>
                            <ul>
                                <li>Bachiller en economía y administración</li>
                                <li>Programador Básico</li>
                            </ul>

                            <p><strong>Reconocimientos obtenidos:</strong></p>
                            <ul>
                                <li>Medalla al mejor promedio (9,3)</li>
                                <li>Medalla de abanderado</li>
                                <li>Medalla de Egresado</li>

                            </ul>


                            <div class="col-7 m-auto bottom-article unico-article">
                                <p class="visitar">Visitar</p>
                                <a href="https://photos.app.goo.gl/QVBrcfpHT7aHoigR8" rel="noopener" target="_BLANK" class="btn-bottom">Ver más</a> 
                            </div>
                        </article>
                    </div>

                </section>



                <!--Biografía-->
                <section class="biography">
                    
                    <div class="contenedor-biography">
                        
                        <div class="presentacion" id="biografia">
                            <img src="img/blog/cele-y-yo.jpg" alt="Cele y yo">
                            <h1>Valentin Urbine</h1>
                            <h2>Diseñador y <strong id="programador">Programador</strong> Web</h2>
                        </div>
                        <p>
                            Me llamo Valentin Ezequiel Urbine (al lado, mi novia, Celeste), vivo en San Nicolás de los Arroyos, tengo 21 años, me encanta la informática. Desde chico que interactúo con la informática, pero a los casi 16 años (2016-17) la abandoné, por el sedentarismo y el excesivo sobrepeso (130kg con 15 años).
                            <br><br>
                            En el año 2019 culminé mis Estudios Secundarios, en el año 2020 estudié Profesorado Educación Física, no era lo mío y lo abandoné en el mismo año. Con esto de la pandemia vi la oportunidad de volver a la informática, así que en el año 2021 arranqué Tecnicatura en Análisis de Sistemas.
                        </p>
                    </div>
                </section>





                <!-- <section class="section-proyectos">
                    <div class="contenedor-h1-alternativo-1">

                        <h1>Proyectos de prueba</h1>
                    </div>

                    <div class="d-flex justify-content-center">

                        <article>
                            <h3>Mi blog</h3>
                            <a href=""><img src="images/images-proyectos/urbine01.png" alt="Perfetec"></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed alias nemo quaerat exercitationem commodi nam labore laborum, dolor, necessitatibus pariatur excepturi, odit facilis quasi perferendis sit dolore consequuntur? Ex, ullam!</p>
    
                            <a href="#" class="btn-bottom-article">Ver sitio</a>
                        </article>
    
                        <article>
                            <h3>Betsob</h3>
                            <a href=""><img src="images/images-proyectos/betsob.png" alt="Perfetec"></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed alias nemo quaerat exercitationem commodi nam labore laborum, dolor, necessitatibus pariatur excepturi, odit facilis quasi perferendis sit dolore consequuntur? Ex, ullam!</p>
    
                            <a href="#" class="btn-bottom-article">Ver sitio</a>
                        </article>
    
    
                    </div>

                </section> -->


                <!-- Footer -->
                <x-footer_blog/>

                
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="jquery-3.6.0.min.js"></script>
    </body>
    <script src="javascript/main.js"></script>
</html>