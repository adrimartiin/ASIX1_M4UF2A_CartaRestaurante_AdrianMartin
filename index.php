<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link a Bootsrapt-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <title>Carta</title>
</head>
<body>

<?php
    // Si existe el archivo recuperamos los datos sino mostrar error
    if(file_exists('./xml/carta.xml')){
        $platos = simplexml_load_file('./xml/carta.xml'); // Recupero el contenido del archivo xml y lo meto dentro de la variable films
    }else{
        exit('Error abriendo carta.xml');
    }
?>
<div class="container">
    <div class="col-1">
    <h1> Tapas </h1>
        <?php
            //foreach para las tapas
            foreach($platos ->plato as $fila ){
                if((string)$fila['tipo'] == "tapas"  ){
                    echo $fila->nombre . " " .$fila->precio . "€ <br>";
                    echo $fila->descripcion . " Calorías: " . $fila->calorias;
                    foreach($fila->caracteristicas->item as $caracteristica){
                        if($caracteristica == "sin gluten"  ){
                            echo '<i class="fa-solid fa-wheat-awn-circle-exclamation"></i>';
                        }
                        if($caracteristica == "lácteo"  ){
                            echo '<i class="fa-solid fa-cow"></i>';
                        }
                        if($caracteristica == "vegano"  ){
                            echo '<i class="fa-solid fa-seedling"></i>';
                        }
                        if($caracteristica == "frutos secos"  ){
                            echo '<i class="fa-solid fa-stroopwafel"></i>';
                        }
                        if($caracteristica == "vino"  ){
                            echo '<i class="fa-solid fa-wine-glass"></i>';
                        }
                        if($caracteristica == "vino blanco"  ){
                            '<i class="fa-solid fa-wine-glass-empty"></i>';
                        }
                    }
                    echo "<br>";
            }
        }
        ?>
    </div>
</div> 
<div class="container">
    <div class="col-2">
    <h1> Primeros </h1>
        <?php
            //foreach para primeros
            foreach($platos ->plato as $fila ){
                if((string)$fila['tipo'] == "primeros"  ){
                    echo $fila->nombre . " " .$fila->precio . "€ <br>";
                    echo $fila->descripcion . " Calorías: " . $fila->calorias;
                    foreach($fila->caracteristicas->item as $caracteristica){
                        if($caracteristica == "sin gluten"  ){
                            echo '<i class="fa-solid fa-wheat-awn-circle-exclamation"></i>';
                        }
                        if($caracteristica == "lácteo"  ){
                            echo '<i class="fa-solid fa-cow"></i>';
                        }
                        if($caracteristica == "vegano"  ){
                            echo '<i class="fa-solid fa-seedling"></i>';
                        }
                        if($caracteristica == "frutos secos"  ){
                            echo '<i class="fa-solid fa-stroopwafel"></i>';
                        }
                        if($caracteristica == "vino"  ){
                            echo '<i class="fa-solid fa-wine-glass"></i>';
                        }
                        if($caracteristica == "vino blanco"  ){
                            '<i class="fa-solid fa-wine-glass-empty"></i>';
                        }
                    }
                    echo "<br>";
            }
        }
        ?>
    </div>
</div> 
<!-- Link a Fontawesome-->
<script src="https://kit.fontawesome.com/b6f7ad7f68.js" crossorigin="anonymous"></script>
<!-- Link a Bootsrapt-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>