<?php
// se puede copiar los archivos y pegarlos en C:\xampp\htdocs
// o subirlos por filezilla

    print_r($_POST);
    echo '<br><br>';

    $to = "leandrodpais@gmail.com";
    $subject = "Mail desde el formulario";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers = $headers . "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n";
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentarios = $_POST['comentarios'];
    $message = "
            <html>
                <head>
                   <title>HTML</title>
                </head>
                <body>
                    <h1>Información del formulario</h1>
                    <p>Nombre: $nombre  </p> 
                    <p>Email: $email  </p> 
                    <p>Comentarios: $comentarios </p> 
                </body>
                </html>";
    
    mail($to, $subject, $message, $headers);
                
    echo '<br><br><h1>
            <center>Gracias por comunicarse con nosotros</center>
            </h1>';

?>