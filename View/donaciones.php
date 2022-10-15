<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>DONACIONES</title>
</head>

<body class = "cuerpo">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <form>
                        <div class="form-group col-sm-6">
                            <h5><label for="apellido">Monto</label></h5>
                            <br>
                            <input type="double" class="form-control" id="monto" placeholder="Ingrese un monto">
                        </div>

                        <br><br>

                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <h5><label for="pago">Medio de Pago</label></h5>
                                <br>
                                <select id="pago" class="form-select">
                                    <option selected>Mercado Pago</option>
                                    <option>PayPal</option>
                                    <option>Tarjeta de Crédito/Débito</option>
                                </select>
                            </div>
                        </div>

                        <br><br>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="" id="gridCheck">
                                <label class="form-check-label" form="gridCheck">
                                    Quiero recibir información sobre ONGs.
                                </label>
                            </div>
                        </div>
                        
                        <br><br>

                        <button type="submit" class="btn btn-primary">DONAR</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

</html>