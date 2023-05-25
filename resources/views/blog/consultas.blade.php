<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Settings Page -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Urbine01, Valentín Urbine, Valen Urbine, valen urbine, valen, urbine, Urbine, Valen, Valentín, valentín, valentin Hecu01, sitio de Valentin">
        <meta name="author" content="Valentín Urbine">
        <meta name="description" content="Soy Valentín Urbine.">
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
        <div class="contenedor section">
            <div class="menu">

                <a href="index.html"> <img src="img/blog/logo.jpg" alt="logo" width="90px" height="60px"></a>
                
                <h1>Home Page</h1> 
                
                <!-- Responsive Menu -->
                <label for="btn-menu"> <i class="fas fa-bars" id="bars"></i> </label>
                <input type="checkbox" aria-label="Checkbox" id="btn-menu">
                <nav class="menu-responsive" id="menu-inicio">
            
                    <ul class="barra-menu">
                        <li>
                            <a href="{{ route('blog') }}">
                                Volver
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog_consultas') }}">
                                Consultas
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <section class="container section-bootstrap">

                <h1 class="h1-section mt-3" id="sobre-mi">Consultas</h1>

                <table class="table table-striped table-hover" style="background: #fff;">
                    <thead>

                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Mensaje</th>

                    </thead>
                    <tbody>
                        @foreach($consultas as $item)
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->nombre}}</td>
                                <td>{{ $item->apellido}}</td>
                                <td>{{ $item->correo}}</td>
                                <td>{{ $item->mensaje}}</td>
                            </tr>
                        @endforeach()
 
                    </tbody>

                </table>

            </section>
            <x-footer_blog/>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="jquery-3.6.0.min.js"></script>
    </body>
    <script src="javascript/main.js"></script>
</html>