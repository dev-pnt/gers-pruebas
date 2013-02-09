<?php
/**
 * Estructura
 * año=>array(
 *      mes => array(dia_festivo,dia_festivo,dia_festivo),
 *)
 * Ejemplo:
 * En 2012 Marzo tiene festivo los dias 4,16 y 24
 * 2012=>array(
 *      3=>array(4,16,24),
 * 
 * )
 */
$diasFestivos = array(
        2013 => array (
                '01' => array(7),
                '02' => array(),
                '03' => array(25,28,29),
                '04' => array(),
                '05' => array(1,13),
                '06' => array(3,10),
                '07' => array(1,20),
                '08' => array(7,19),
                '09' => array(),
                '10' => array(14),
                '11' => array(4,11),
                '12' => array(25) 
            ),
);