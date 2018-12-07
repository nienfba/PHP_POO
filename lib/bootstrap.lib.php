<?php

/** autoloader de nos classes
 * @param string $class nom de la classe recherché
 */
function my_autoloader($class) {
    include 'class/' . $class . '.class.php';
}

/** On dit à PHP qu'il appelle la fonction my_autoloader s'il ne trouve pas une classe */
spl_autoload_register('my_autoloader');