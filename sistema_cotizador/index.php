<?php

require_once 'app/config.php';

use PHPMailer\PHPMailer\PHPMailer;

/* Insertar un concepto directamente en el array */
$_SESSION['new_quote']['items'] = [
    [
        'id' => 1234,
        'concept' => 'Playera Negra',
        'type' => 'producto',
        'quantity' => 2,
        'price' => 100.55,
        'taxes' => (TAXES_RATE / 100) * (100.55 * 2),
        'total' => (100.55 * 2) + ((TAXES_RATE / 100) * (100.55 * 2))
    ],
    [
        'id' => 1235,
        'concept' => 'Control de PS4 ',
        'type' => 'producto',
        'quantity' => 3,
        'price' => 750.99,
        'taxes' => (TAXES_RATE / 100) * (750.99 * 3),
        'total' => (750.99 * 3) + ((TAXES_RATE / 100) * (750 * 3))
    ],
];

// Prueba de PHPMailer
$data = [
    'subject' => 'Correo de Cotización',
    'body' => '<h1>Cotización de Productos</h1>',
    'alt_text' => 'Cotización alternativa'
];

$mail = new PHPMailer();
$mail->setFrom('jslocal@localhost.com','Bryan L.C.L');
$mail->addAddress('jslocal2@localhost.com','Lennin L');
$mail->Subject = $data['subject'];
$mail->msgHTML(get_module(MODULES.'email_template', $data));
$mail->AltBody = $data['alt_text'];
$mail->CharSet = 'UTF-8';
$mail->send();

die;

/* Renderizado de la vista */
get_view('index.php');