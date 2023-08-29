<?php

    function binomioCuadradoPerfecto_a($a, $b) {

        $resultado = ($a+$b)*($a+$b);
        return $resultado;

    }

    function binomioCuadradoPerfecto_b($a, $b){

        $resultado = $a*$a +2*$a*$b+$b*$b;

        return $resultado;

    }

?>