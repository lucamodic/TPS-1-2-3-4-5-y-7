<html>
 <head>
     <title>PHP GUIA</title>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap">
     <link rel="stylesheet" type="text/css" href="estilos.css">
 </head>
 <body>
    <h1 class="nombre">LUCA MODIC</h1>

    <?php

    include_once('Enunciados y Resoluciones/enunciados.php');
    include_once('Enunciados y Resoluciones/resoluciones.php');

    echo "<div class='ejercicio'>";
        echo "<h3 class='titulo-ejercicio'> Ejercicio 1: Semáforo </h3>";
        include_once('Ejercicio 1/ejercicio1.php');
        echo "<h5 class='enunciado'>$enunciado1</h5>";
        echo "<div class='echos'>";
           echo "<h5 class='resolucion'>$resolucion1</h5>";
           echo "<p class='resultado'>a) ".semaforo_a("rojo")."</p>";
           echo "<p class='resultado'>b) ".semaforo_b("amarillo")."</p>";
           echo "<p class='resultado'>c) ".semaforo_c("verde")."</p>";
        echo "</div>";
    echo "</div>";


    echo "<div class='ejercicio'>";
        echo "<h3 class='titulo-ejercicio'> Ejercicio 2: Binomio cuadrado perfecto </h3>";
        include_once('Ejercicio 2/ejercicio2.php');
        echo "<h5 class='enunciado'>$enunciado2</h5>";
        echo "<div class='echos'>";
            echo "<h5 class='resolucion'>$resolucion2</h5>";
            echo "<p class='resultado'>a) ".binomioCuadradoPerfecto_a(3,2)."</p>";
            echo "<p class='resultado'>b) ".binomioCuadradoPerfecto_b(3,2)."</p>";
        echo "</div>";
    echo "</div>";


    echo "<div class='ejercicio'>";
        echo "<h3 class='titulo-ejercicio'> Ejercicio 3: Concatenar textos</h3>";
        include_once('Ejercicio 3/ejercicio3.php');
        echo "<h5 class='enunciado'>$enunciado3</h5>";
        echo "<div class='echos'>";
            echo "<h5 class='resolucion'>$resolucion3</h5>";
            echo "<p class='resultado'>".concatenar("Conca", "tenar")."</p>";
        echo "</div>";
    echo "</div>";


    echo "<div class='ejercicio'>";
        echo "<h3 class='titulo-ejercicio'> Ejercicio 4: Incrementar</h3>";
        include_once('Ejercicio 4/ejercicio4.php');
        echo "<h5 class='enunciado'>$enunciado4</h5>";

        echo "<div class='echos'>";
            echo "<h5 class='resolucion'>$resolucion4</h5>";
            $variable = 1;
            echo "<p class='resultado'>Inicial = $variable </p>";
            incrementar($variable);
            echo "<p class='resultado'>Incrementado = $variable</p>";
        echo "</div>";
    echo "</div>";


    echo "<div class='ejercicio'>";
        echo "<h3 class='titulo-ejercicio'> Ejercicio 5: Sumatoria</h3>";
        include_once('Ejercicio 5/ejercicio5.php');
        echo "<h5 class='enunciado'>$enunciado5</h5>";

        echo "<div class='echos'>";
            $array = [1,2,3,4,5];
            echo "<h5 class='resolucion'>$resolucion5</h5>";
            echo "<p class='resultado'>".sumatoria_a($array)."</p>";
            echo "<p class='resultado'>".sumatoria_b($array)."</p>";
            echo "<p class='resultado'>".sumatoria_c($array)."</p>";
        echo "</div>";
    echo "</div>";

    ?>

    <div class="last"></div>

 </body>
</html>