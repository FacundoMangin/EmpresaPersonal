<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./imagenes/logo1.png" type="image/x-icon">
    
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/Portada.css">
    <link rel="stylesheet" href="./css/Nuestras-instalaciones.css">
    <link rel="stylesheet" href="./css/Carrusel.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/Sobre-nosotros.css">



    <script src="https://kit.fontawesome.com/092fed5d7c.js" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- pagina de google fonts  https://fonts.google.com/specimen/Lobster/tester-->
    
    <!-- letra Concert -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
     <!-- letra Rubik -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- letra Style  font-family: 'Crete Round'  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
    
    
    <title>Buena Maizon</title>
</head>

<body>
    <?php include('./secciones-spanish/nav.html')?>
    
    <header>
        <?php include('./secciones-spanish/portada.html')?>
    </header>

    <main>
        <section class="sobre-nosotros" id="empresa">
            <?php include('./secciones-spanish/sobre-nosotros.html')?>
        </section>
        
        <section class="seccion-nuestras-instalaciones" id="nuestras-instalaciones">
            <?php include('./secciones-spanish/nuestras-instalaciones.html')?> 
        </section>
        
        <section class="seccion-carrusel" id="carrusel">
            <?php include('./secciones-spanish//carrusel-img.html')?>
        </section>

    <footer id='footer'>
        <?php include('./secciones-spanish/footer.html')?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>