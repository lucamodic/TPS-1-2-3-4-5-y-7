<?php

    function semaforo_a($color){
        if($color == "rojo"){
            return "frene";
        }
        else if ($color == "amarillo"){
            return "precaución";
        }
        else if ($color == "verde"){
            return "avance";
        }
        else {
            return "estado desconocido";
        }
    }

    function semaforo_b($color){
        return ($color == "rojo") ? "frene" : (($color == "amarillo") ? "precaución" : (($color == "verde") ? "avance" : "estado desconocido"));
    }

    function semaforo_c($color){
        switch ($color){
            case "rojo":
                return "frene";
                break;
            case "amarillo":
                return "precaución";
                break;
            case "verde":
                return "avance";
                break;
            default:
                return "estado desconocido";
                break;
        }
    }



?>