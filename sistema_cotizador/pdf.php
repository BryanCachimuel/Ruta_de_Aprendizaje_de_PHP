<?php
require_once 'app/config.php';

generate_pdf('cotizacion_', time(). get_module(MODULES.'pdf_template'));