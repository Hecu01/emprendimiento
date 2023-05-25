<div class="menu">

    <a href="index.html"> <img src="img/blog/logo.jpg" alt="logo" width="90px" height="60px"></a>
    
    <h1>Home Page</h1> 
    
    <!-- Responsive Menu -->
    <label for="btn-menu"> <i class="fas fa-bars" id="bars"></i> </label>
    <input type="checkbox" aria-label="Checkbox" id="btn-menu">
    <nav class="menu-responsive" id="menu-inicio">

        <ul class="barra-menu">
            <li><a href="#menu-inicio">Inicio </a></li>
            <li>
                <a href="#sobre-mi">
                    Sobre mí
                </a>
            </li>

            <li>
                <a href="#biografia">
                    Biografía
                </a>
            </li>

            <li>
                <a href="#formulario">
                    Formulario
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