<footer>
                    
    <div class="container-footer" id="formulario">
        <div class="top-bottom-footer" id="div-h3-footer">
            <h3>Haceme una consulta</h3>
        </div>

        <div class="form">
            <form method="POST" action="{{ route('consulta.realizar_consulta') }}">

                <h2>Formulario</h2>
                @csrf
                <label for="nombre-persona">Nombre</label><br>
                <input type="text" name="nombre" id="nombre-persona" required> <br>
        
                <label for="apellido-persona">Apellido</label><br>
                <input type="text" name="apellido" id="apellido-persona"required><br>
        
                <label for="Email">Correo Electrónico</label><br>
                <input type="email" name="correo" id="Email" required> <br>
        
                <label>Mensaje</label> <br>
                <textarea name="mensaje" id="mensajeform"  rows="4" placeholder="Ingrese un texto" required></textarea>
        
                <br>    
                <div class="contenedor-submit">
                    
                    <input type="submit" value="ENVIAR" name="register" id="enviar">

                </div>


                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </symbol>
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </symbol>
                </svg>
                  
                @if (session('mensaje'))
                  
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        <div>
                            {{ session('mensaje') }}
                        </div>
                    </div>
                @endif
  
            </form>

            
        </div>

        <div class="contactos top-bottom-footer">
            <h2>Contactos:</h2>
            <ul class="barra-contactos">
                <li>
                    <a href="https://www.facebook.com/AC.DC.mm.Si/" aria-label="Facebook personal" rel="noopener" target="_BLANK"> 
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                
                <li>
                    <a href="https://www.instagram.com/urbine01/" aria-label="Instagram personal" rel="noopener" target="_BLANK">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>

                <li>
                    <a href="https://api.whatsapp.com/send?phone=5493364036241&text=¡Hola, Valen Urbine, vengo desde la página!" target="_BLANK" aria-label="Mensaje a whatsapp" rel="noopener">
                        <i class="fab fa-whatsapp"></i> 
                    </a>
                </li>


                <li>
                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJlJVXXhdZlLNPvWNvnDgRTRvrwTjlvmGKJPlBmztLNJKJvNRwZwqPqkxBWWqZPDBkCWGDB" aria-label="Correo Electrónico" rel="noopener" target="_BLANK"> 
                        <i class="fas fa-envelope"></i>
                    </a>
                </li>


                <li>
                    <a href="https://www.linkedin.com/in/valentin-urbine-4217b218b/" target="_BLANK" rel="noopener" aria-label="Linkedin personal">
                        <i class="fab fa-linkedin"></i> 
                    </a>
                </li>

                <li>
                    <a href="https://github.com/Hecu01" aria-label="Repositorio github" rel="noopener" target="_BLANK">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <p id="cele">Copyright &copy; Valentín Urbine. Todos los derechos reservados</p> 
</footer>