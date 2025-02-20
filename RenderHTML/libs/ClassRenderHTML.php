<?php
class RenderHTML
{
    //
    // Propiedades de la clase
    //
    public bool $isLogged;

    //
    // Constructor de la clase
    //

    public function __construct()
    {
        $this->isLogged = false;
    }

    //
    // Métodos Getter/Setter de las propiedades de la clase
    //

    public function setLogged(string $Logged) { $this->isLogged = $Logged; }
    public function getLogged() { return $this->isLogged; }

    //
    // Métodos públicos de la clase
    //

    // Método que devuelve el código HTML del Header
    public function RenderHeader()
    {
        echo '
            <!doctype html>
            <html lang="es">

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="">
                <meta name="author" content="">
                <title>Framework DAW 2º</title>
                <link href="./plugins/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
            </head>
            <body class="d-flex align-items-center py-4 bg-body-tertiary">
                <main class="m-auto pt-5">';
    }

    // Método que devuelve el código HTML del footer
    public function RenderFooter()
    {
        echo '
                </main>
                <script src="./plugins/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
            </body>
            </html>';
    }
}
