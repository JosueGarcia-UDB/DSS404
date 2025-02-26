<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudades de destino</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Bitter"/>
    <link rel="stylesheet" href="css/fields.css"/>
</head>
<body>
<header>
    <h1 class="inset">Ciudades de destino</h1>
</header>
<section>
    <div class="form-style">
        <?php
        //La función espera una matriz con una lista ($lista)
        //ya sea de países o ciudades y un parámetro opcional
        //con el tipo de lista que tendrá un valor por defecto "ul"

        function create_list($lista, $tipo="ul")
        {
            //Inicializando variables para ambos tipos de listas HTML
            $ulList = "";
            $olList = "";
            switch ($tipo) :
                case "ul":
                    $ulList .= "<article id=\"countries\">\n";
                    $ulList .= "\t<h1>\n";
                    $ulList .= "\t\tPaíses y ciudades\n";
                    $ulList .= "\t\t<span>seleccionadas</span>\n";
                    $ulList .= "\t</h1>\n";
                    $ulList .= "\t<ul class=\"imglist\">\n";
                    foreach ($lista as $key => $value):
                        $ulList .= "\t\t<li><a href=\"javascript:void(0)\">$key => $value</a></li>\n";
                    endforeach;
                    $ulList .= "\t</ul>\n";
                    $ulList .= "</article>\n";
                    print $ulList;
                    break;
                case "ol":
                    $olList .= "<article id=\"cities\">\n";
                    $olList .= "\t<h1><span>Ciudades</span></h1>\n";
                    $olList .= "\t<div class=\"numberlist\">\n";
                    $olList .= "\t\t<ol>\n";
                    foreach ($lista as $key => $value):
                        $olList .= "\t\t\t<li><a href=\"javascript:void(0)\">$key => $value</a></li>\n";
                    endforeach;
                    $olList .= "\t\t</ol>\n";
                    $olList .= "\t</div>\n";
                    $olList .= "</article>";
                    print $olList;
                    break;
                default:
                    print "<p>No está definido este tipo de lista</p>";
                    break;
            endswitch;
        }


        //Inicia el procesamiento del formulario
        if (isset($_POST['submit'])):
        //Análisis de los elementos de campo select
            if (is_array($_POST['location'])):
            //Si se tiene una matriz invocar a la función
            //createList para crear la lista UL
            create_list($_POST['location']);
            else:
                echo "Se esperaba una lista, no un valor escalar.";
                exit(0);
            endif;

            //Análisis de los elementos checkbox
            extract($_POST);
            if(is_array($place)):
                create_list($place, "ol");
            endif;
            else:
            print "<p>El procesamiento del formulario requiere que se haya presionado el botón Enviar.</p>";
            print "<a href=\"selectfields.html\">Regresar</a>"; exit(0);
            exit(0);
        endif;
        ?>
    </div>