<?php include "Views/Templates/header.php";?>

<div class="w-100 p-5 bodyB text-white">
    <H1>SERVICIOS</H1>   
    
    <p class="text-justify" >
        En salon de eventos ECO lo mas importante es su satisfacción y que sus eventos sean inolvidables para usted, seres queridos e invitados; es por eso que nos preocupamos por brindarle un servico de calidad en mobiliarios, equipos y personal capacitado para hacer de su evento el mejor, a continuacion se presentan los servicios que ofrecemos: 
    </p>
    <br>
    <br>
    <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3 p-4">

        <!--servicio 1-->
        <div class="col">
            <div class="card c-body">
                <img src="https://www.tufieston.com/dynamic/branches/jardin-eventos-santa-fe/jardin-eventos-santa-fe-portada.jpg"
                    class="card-img-top c-img"  title="Mobiliario">
                <div class="card-body">
                    <h3>Mobiliario</h3>
                    <p class="card-text">Mesas y sillas para 100 personas</p>
                </div>
                <div class="c-cotizar">
                    <a href="<?php echo base_url;?><?php echo isset($_SESSION['activo']) ? 'Cotizacion/' : 'Usuarios/iniciarSesion'?>" class="c-a">Cotizar</a>
                </div>
            </div>
        </div>

        <!--servicio 2-->
        <div class="col">
            <div class="card c-body">
                <img src="https://cdn0.bodas.com.mx/vendor/2935/3_2/960/jpg/12795281-904156579702510-9190200783280840881-n_5_152935.jpeg"
                    class="card-img-top c-img"  title="Audio e iluminación">
                <div class="card-body">
                    <h3>Audio e iluminación</h3>
                    <p class="card-text">Brindamos servicio completo de 5 horas</p>
                </div>
                <div class="c-cotizar">
                    <a href="<?php echo base_url;?><?php echo isset($_SESSION['activo']) ? 'Cotizacion/' : 'Usuarios/iniciarSesion'?>" class="c-a">Cotizar</a>
                </div>
            </div>
        </div>

        <!--servicio 3-->
        <div class="col">
            <div class="card c-body">
                <img src="https://cdn.pixabay.com/photo/2020/10/29/13/34/table-5696243_1280.jpg"
                    class="card-img-top c-img"  title="Banquetes">
                <div class="card-body">
                    <h3>Banquetes</h3>
                    <p class="card-text">Banquete, meseros y vajillas</p>
                </div>
                <div class="c-cotizar">
                    <a href="<?php echo base_url;?><?php echo isset($_SESSION['activo']) ? 'Cotizacion/' : 'Usuarios/iniciarSesion'?>" class="c-a">Cotizar</a>
                </div>
            </div>
        </div>

        <!--servicio 4-->
        <div class="col">
            <div class="card c-body">
                <img src="https://cdn.pixabay.com/photo/2018/07/28/00/05/bouncy-castles-3567019_1280.jpg"
                    class="card-img-top c-img"  title="Inflables y juegos">
                <div class="card-body">
                    <h3>Inflables y juegos</h3>
                    <p class="card-text">Incluye toro mecanico, combo fiesta y castillo inflable</p>
                </div>
                <div class="c-cotizar">
                    <a href="<?php echo base_url;?><?php echo isset($_SESSION['activo']) ? 'Cotizacion/' : 'Usuarios/iniciarSesion'?>" class="c-a">Cotizar</a>
                </div>
            </div>
        </div>

        <!--servicio 5-->
        <div class="col">
            <div class="card c-body">
                <img src="https://cdn.pixabay.com/photo/2017/08/03/21/48/drinks-2578446_1280.jpg"
                    class="card-img-top c-img"  title="Bebidas y cocteles">
                <div class="card-body">
                    <h3>Bebidas y cocteles</h3>
                    <p class="card-text">Incluye bartender, refrescos, aguas naturales</p>
                </div>
                <div class="c-cotizar">
                    <a href="<?php echo base_url;?><?php echo isset($_SESSION['activo']) ? 'Cotizacion/' : 'Usuarios/iniciarSesion'?>" class="c-a">Cotizar</a>
                </div>
            </div>
        </div>

        <!--servicio 6-->
        <div class="col">
            <div class="card c-body">
                <img src="https://www.escueladeinternet.com/wp-content/uploads/2015/11/video.jpg"
                    class="card-img-top c-img"  title="Fotos y video">
                <div class="card-body">
                    <h2>Fotos y video</h2>
                    <p class="card-text">Incluye servicio de cabina 360°, fotos y videos de su fiesta</p>
                </div>
                <div class="c-cotizar">
                    <a href="<?php echo base_url;?><?php echo isset($_SESSION['activo']) ? 'Cotizacion/' : 'Usuarios/iniciarSesion'?>" class="c-a">Cotizar</a>
                </div>
            </div>
        </div>
    </div>
    

</div>
        

<?php include "Views/Templates/footer.php";?>
  
