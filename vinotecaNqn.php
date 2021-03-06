<?php
//Carga el arreglo principal e invoca a la funcion calculo
function main()
{
    $arreglo["malbec"] = array
                            (
                                ["Año" => 1999, "Cantidad" => 17, "Precio" => 5500],
                                ["Año" => 2019, "Cantidad" => 202, "Precio" => 320]
                            );
    $arreglo["cabernet"] = array
                            (
                                ["Año" => 2015, "Cantidad" => 32, "Precio" => 800],
                                ["Año" => 2020, "Cantidad" => 550, "Precio" => 500]
                            );
    $arreglo["merlot"] = array
                            (
                                ["Año" => 2016, "Cantidad" => 40, "Precio" => 3350],
                                ["Año" => 2020, "Cantidad" => 325, "Precio" => 400]
                            );
    $arregloDatos = calculos($arreglo);
    print_r($arregloDatos);
}


//Recibe un arreglo y calcula la cantidad total y precio promedio por botella
function calculos($arreglo)
{
    $variedad[0] = "malbec";
    $variedad[1] = "cabernet";
    $variedad[2] = "merlot";
    $cantidadTotal = 0;
    $acumuladorPrecio = 0;
    for($indice = 0 ; $indice < count($variedad); $indice++)
    {
        for ($contador = 0; $contador < count($arreglo[$variedad[$indice]]); $contador++)
        {
            $cantidadTotal = $cantidadTotal + $arreglo[$variedad[$indice]][$contador]["Cantidad"];
            $acumuladorPrecio = $acumuladorPrecio + $arreglo[$variedad[$indice]][$contador]["Precio"];
        }
        $promedioBotella = round($acumuladorPrecio / $cantidadTotal);
        $arregloDatos[$variedad[$indice]] = ["Promedio" => $promedioBotella, "Cantidad" => $cantidadTotal];
        $cantidadTotal = 0;
        $acumuladorPrecio = 0;
    }
    return $arregloDatos;
}

//Programa principal
main();