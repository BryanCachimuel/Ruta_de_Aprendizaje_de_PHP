<?php

/* validar si estamos en un sistema local o de producción */
define('IS_LOCAL', in_array($_SERVER['REMOTE_ADDR'],['127.0.0.1','::1']));

/* definiendo la url para todo el sistema */
$web_url = IS_LOCAL ? 'http://127.0.0.1/ejercicios_de_Repaso_PHP/sistema_cotizador/' : 'LA URL DE SU SERVIDOR EN PRODUCCIÓN';

define('URL', $web_url);
?>