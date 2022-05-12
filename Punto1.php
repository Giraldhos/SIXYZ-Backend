<?php

include_once("Punto1Clases.php");

$ValorVivi = $_POST["ValorVivi"];
$salario = $_POST["salario"];
$nom = $_POST["nom"];

$vivienda = new vivienda($ValorVivi, $salario, $nom);

$vivienda -> CalcularAuxilio();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivienda Para Todos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1>VIVIENDA PARA TODOS</h1>
        </div>
    </div>

    <div class="container">
        <div class="card">

            <div class="card-header">
                <span class="text-primary">INGRESE DATOS</span>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nom">NOMBRE DEL BENEFICIADO:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom" 
                            name="nom" 
                            disabled="disabled"
                            value="<?php echo $vivienda->getNom(); ?>"
                            >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="salario">SALARIO DEL BENEFICIADO:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="salario" 
                            name="salario" 
                            disabled="disabled"
                            value="<?php echo $vivienda->getSalario(); ?>"
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ValorVivi">VALOR VIVIENDA:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="ValorVivi" 
                            name="ValorVivi" 
                            disabled="disabled"
                            value="<?php echo $vivienda->getValorVivi(); ?>"
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="Auxvivienda">VALOR DEL AUXILIO:</label>
                        <div class="col-sm-9">          
                            <input type="text" class="form-control" id="Auxvivienda" 
                            name="Auxvivienda" 
                            disabled="disabled"
                            value="<?php echo $vivienda->getAuxvivienda(); ?>"
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="CuotInic">CUOTA INICIAL:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="CuotInic" 
                            name="CuotInic" 
                            disabled="disabled"
                            value="<?php echo $vivienda->getCuotInic(); ?>"
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="CuotaMensual">CUOTAS MENSUALES:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="CuotaMensual" 
                            name="CuotaMensual" 
                            disabled="disabled"
                            value="<?php echo $vivienda->getCuotaMensual(); ?>"
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="TotalVivi">VALOR A PAGAR:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="TotalVivi" 
                            name="TotalVivi" 
                            disabled="disabled"
                            value="<?php echo $vivienda->getTotalVivi(); ?>"
                            >
                        </div>
                    </div>
                    
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                           <a href="../html/Punto1.html" class="btn btn-success">Calcular otra venta</a>              
                        </div>
                    </div>
                </form>
            </div>
        </div>          
    </div>
</body>

</html>
