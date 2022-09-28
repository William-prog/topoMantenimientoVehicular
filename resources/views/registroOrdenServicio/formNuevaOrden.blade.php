@extends('layouts.app')

@section('content')

<style>
    .btnSaveForm {
        position: relative;
        display: block;
        color: black;
        font-size: 14px;
        font-family: "Arial";
        text-decoration: none;
        margin: 30px 0;
        border: 2px solid black;
        padding: 14px 60px;
        /* text-transform: uppercase; */
        overflow: hidden;
        transition: 1s all ease;
        border-radius: 3%;
    }

    .btnSaveForm::before {
        background: #FF771F;
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: -1;
        transition: all 0.6s ease;
        border-radius: 3%;
        color: black;
    }

    .btnSaveForm1::before {
        width: 0%;
        height: 100%;
        color: black;
    }

    .btnSaveForm1:hover::before {
        width: 100%;
        color: black;
    }

    .navigation ul li a .icon {
        padding-top: 9%;
    }
</style>

<div class="container">
    <style>
        .cardForm {
            background-color: rgb(255, 255, 255, 0.8);
            border-radius: 15px;
        }

        .form-control:focus {
            color: #212529;
            background-color: #f8fafc;
            border-color: #FF771F;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgb(255 119 31 / 25%);
        }
    </style>


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <style>
        .column {
            margin: 0 0 0;
            padding: 0;
        }

        .column:last-child {
            padding-bottom: 60px;
        }

        .column::after {
            content: '';
            clear: both;
            display: block;
        }

        .column div {
            position: relative;
            float: left;
            margin: 0 0 0 25px;
            padding: 0;
        }

        .column div:first-child {
            margin-left: 0;
        }

        .column div span {
            position: absolute;
            bottom: -20px;
            left: 0;
            z-index: -1;
            display: block;
            width: 300px;
            margin: 0;
            padding: 0;
            color: #444;
            font-size: 18px;
            text-decoration: none;
            text-align: center;
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
            opacity: 0;
        }

        figure {
            margin: 0;
            padding: 0;
            background: #fff;
            overflow: hidden;
        }

        figure:hover+span {
            bottom: -36px;
            opacity: 1;
        }


        .hover14 figure {
            position: relative;
        }

        .hover14 figure::before {
            position: absolute;
            top: 0;
            left: -75%;
            z-index: 2;
            display: block;
            content: '';
            width: 50%;
            height: 100%;
            background: -webkit-linear-gradient(left, rgba(255, 119, 31, 0) 0%, rgba(255, 119, 31, .3) 100%);
            background: linear-gradient(to right, rgba(255, 119, 31, 0) 0%, rgba(255, 119, 31, .3) 100%);
            -webkit-transform: skewX(-25deg);
            transform: skewX(-25deg);
        }

        .hover14 figure:hover::before {
            -webkit-animation: shine .95s;
            animation: shine .95s;
        }

        @-webkit-keyframes shine {
            100% {
                left: 125%;
            }
        }

        @keyframes shine {
            100% {
                left: 125%;
            }
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <!-- <div class="hover14 column">
                        <figure>
                            <img class="card-img-top" src="/img/carHead.jpg" />
                        </figure>
                    </div> -->
                    <div class="card-body">
                        <h4 class="card-title text-center">
                            Datos Generales
                        </h4>

                        <div class="row mt-1">
                            <div class="form-group col-6">
                                <label for="ordenServicioNumEmpleadoElaboro"><strong>Núm. Empleado:</strong> </label>
                                <input type="text" placeholder="000" class="form-control" name="ordenServicioNumEmpleadoElaboro" id="ordenServicioNumEmpleadoElaboro" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="ordenServicioNombreEmpleadoElaboro"><strong>Elaboro:</strong> </label>
                                <input type="text" placeholder="000" class="form-control" name="ordenServicioNombreEmpleadoElaboro" id="ordenServicioNombreEmpleadoElaboro" required>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="form-group col-6">
                                <label for="ordenServicioFechaIngreso"><strong>Fecha de ingreso:</strong> </label>
                                <input type="date" placeholder="00/00/000" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="ordenServicioNumEco"><strong>Núm. Eco:</strong> </label>
                                <input type="text" placeholder="000" class="form-control" name="ordenServicioNumEco" id="ordenServicioNumEco" required>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="form-group col-6">
                                <label for="ordenServicioMarca"><strong>Marca:</strong> </label>
                                <input type="text" placeholder="000" class="form-control" name="ordenServicioMarca" id="ordenServicioMarca" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="ordenServicioModelo"><strong>Modelo:</strong> </label>
                                <input type="text" placeholder="000" class="form-control" name="ordenServicioModelo" id="ordenServicioModelo" required>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="form-group col-6">
                                <label for="ordenServicioPlacas"><strong>Placas:</strong> </label>
                                <input type="text" placeholder="000" class="form-control" name="ordenServicioPlacas" id="ordenServicioPlacas" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="ordenServicioKilometraje"><strong>Kilometraje:</strong> </label>
                                <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="form-group col-6">
                                <label for="ordenServicioTipoUnidad"><strong>Tipo de Unidad:</strong> </label>
                                <input type="text" placeholder="000" class="form-control" name="ordenServicioTipoUnidad" id="ordenServicioTipoUnidad" required>
                            </div>

                            <div class="form-group col-6">
                                <style>
                                    .switch-title {
                                        margin-bottom: 0.5em;
                                        margin-bottom: 0px;

                                    }

                                    .switch-field input {
                                        display: none;
                                    }

                                    .switch-field label {
                                        float: left;
                                    }

                                    .switch-field label {
                                        display: inline-block;
                                        background-color: #efefef;
                                        color: #333;
                                        font-size: 1vw;
                                        font-weight: normal;
                                        text-align: center;
                                        text-shadow: none;
                                        padding: 0.5em 1em;
                                        border: 0.05em solid rgba(0, 0, 0, 0.15);
                                        -webkit-transition: all 0.5s ease-in-out;
                                        -moz-transition: all 0.5s ease-in-out;
                                        -ms-transition: all 0.5s ease-in-out;
                                        -o-transition: all 0.5s ease-in-out;
                                        transition: all 0.5s ease-in-out;
                                    }

                                    .switch-field label:hover {
                                        cursor: pointer;
                                    }

                                    .switch-field input:checked+label {
                                        background-color: #FF771F;
                                        color: white;
                                    }

                                    .switch-field label:first-of-type {
                                        border-radius: 3px 0 0 3px;
                                        width: 50%;
                                    }

                                    .switch-field label:last-of-type {
                                        border-radius: 0 3px 3px 0;
                                        width: 50%;
                                    }
                                </style>
                                <div class="switch-field">
                                    <div class="switch-title"> <strong> Mantenimiento: </strong> </div>
                                    <input type="radio" id="switch_left" name="ordenServicioMantenimiento" value="Preventivo" required />
                                    <label for="switch_left">Preventivo</label>
                                    <input type="radio" id="switch_right" name="ordenServicioMantenimiento" value="Correctivo" required />
                                    <label for="switch_right">Correctivo</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="form-group col-12">
                                <h4 class="card-title text-center">
                                    Descripción
                                </h4>
                                <label for="ordenServicioDescripcion"><strong>Descripción por parte del operador</strong></label>
                                <textarea rows="12" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                            </div>
                        </div>

                        <script>
                            window.onload = function() {
                                var fecha = new Date(); //Fecha actual
                                var mes = fecha.getMonth() + 1; //obteniendo mes
                                var dia = fecha.getDate(); //obteniendo dia
                                var ano = fecha.getFullYear(); //obteniendo año
                                if (dia < 10)
                                    dia = '0' + dia; //agrega cero si el menor de 10
                                if (mes < 10)
                                    mes = '0' + mes //agrega cero si el menor de 10
                                var options = {
                                    weekday: 'long',
                                    year: 'numeric',
                                    month: 'long',
                                    day: 'numeric'
                                };
                                document.getElementById('valeCombustibleFechaLarga').value = fecha.toLocaleDateString("es-ES", options);
                                fecha = new Date(ano + "-" + mes + "-" + dia);
                                document.getElementById('valeCombustibleFecha').value = ano + "-" + mes + "-" + dia;
                            }
                        </script>




                        <div class="row mt-1">
                            <div class="form-group col-md-12">
                                <div class="buttonForm-holder">
                                    <button class="buttonForm buttonForm-4 hover-border-9" style="width: 50%;">
                                        <span>Enviar</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="form-group col-12">
        <div class="row mt-1">
            <div class="form-group col-5">
                <div class="form-group col-12 cardForm">
                    <h3 class="encabezado">Datos Generales</h3>
                    <div class="row mt-1">
                        <div class="form-group col-6">
                            <label for="ordenServicioNumEmpleadoElaboro"><strong>Núm. Empleado:</strong> </label>
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioNumEmpleadoElaboro" id="ordenServicioNumEmpleadoElaboro" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="ordenServicioNombreEmpleadoElaboro"><strong>Elaboro:</strong> </label>
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioNombreEmpleadoElaboro" id="ordenServicioNombreEmpleadoElaboro" required>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="form-group col-6">
                            <label for="ordenServicioFechaIngreso"><strong>Fecha de ingreso:</strong> </label>
                            <input type="date" placeholder="00/00/000" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="ordenServicioNumEco"><strong>Núm. Eco:</strong> </label>
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioNumEco" id="ordenServicioNumEco" required>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="form-group col-6">
                            <label for="ordenServicioMarca"><strong>Marca:</strong> </label>
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioMarca" id="ordenServicioMarca" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="ordenServicioModelo"><strong>Modelo:</strong> </label>
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioModelo" id="ordenServicioModelo" required>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="form-group col-6">
                            <label for="ordenServicioPlacas"><strong>Placas:</strong> </label>
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioPlacas" id="ordenServicioPlacas" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="ordenServicioKilometraje"><strong>Kilometraje:</strong> </label>
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="form-group col-6">
                            <label for="ordenServicioTipoUnidad"><strong>Tipo de Unidad:</strong> </label>
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioTipoUnidad" id="ordenServicioTipoUnidad" required>
                        </div>

                        <div class="form-group col-6">
                            <style>
                                .switch-title {
                                    margin-bottom: 0.5em;
                                    margin-bottom: 0px;

                                }

                                .switch-field input {
                                    display: none;
                                }

                                .switch-field label {
                                    float: left;
                                }

                                .switch-field label {
                                    display: inline-block;
                                    background-color: #efefef;
                                    color: #333;
                                    font-size: 1vw;
                                    font-weight: normal;
                                    text-align: center;
                                    text-shadow: none;
                                    padding: 0.5em 1em;
                                    border: 0.05em solid rgba(0, 0, 0, 0.15);
                                    -webkit-transition: all 0.5s ease-in-out;
                                    -moz-transition: all 0.5s ease-in-out;
                                    -ms-transition: all 0.5s ease-in-out;
                                    -o-transition: all 0.5s ease-in-out;
                                    transition: all 0.5s ease-in-out;
                                }

                                .switch-field label:hover {
                                    cursor: pointer;
                                }

                                .switch-field input:checked+label {
                                    background-color: #FF771F;
                                    color: white;
                                }

                                .switch-field label:first-of-type {
                                    border-radius: 3px 0 0 3px;
                                    width: 50%;
                                }

                                .switch-field label:last-of-type {
                                    border-radius: 0 3px 3px 0;
                                    width: 50%;
                                }
                            </style>
                            <div class="switch-field">
                                <div class="switch-title"> <strong> Mantenimiento: </strong> </div>
                                <input type="radio" id="switch_left" name="ordenServicioMantenimiento" value="Preventivo" required />
                                <label for="switch_left">Preventivo</label>
                                <input type="radio" id="switch_right" name="ordenServicioMantenimiento" value="Correctivo" required />
                                <label for="switch_right">Correctivo</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-7">
                <div class="form-group col-12 cardForm">
                    <h3 class="encabezado">Descripción Operador</h3>
                    <div class="row mt-1">
                        <div class="form-group col-12">
                            <label for="ordenServicioDescripcion"><strong>Descripción por parte del operador</strong></label>
                            <textarea rows="12" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .middle {
            position: inherit !important;
            width: 25% !important;
            transform: translate(150%, -50%);
            /* background-color: rgb(255 255 255 / 75%); */
        }

        .btn {

            position: relative;
            display: block;
            color: black;
            font-size: 14px;
            font-family: "Arial";
            text-decoration: none;
            margin: 30px 0;
            border: 2px solid black;
            padding: 14px 60px;
            /* text-transform: uppercase; */
            overflow: hidden;
            transition: 1s all ease;
            border-radius: 3%;
        }

        .btn::before {
            background: #FF771F;
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
            transition: all 0.6s ease;
            border-radius: 3%;
            color: black;
        }

        .btn1::before {
            width: 0%;
            height: 100%;
            color: black;
        }

        .btn1:hover::before {
            width: 100%;
            color: black;
        }
    </style>

    <div class="middle">
        <button type="submit" style="cursor: pointer" class="btn btn1">
            {{ __('Registrar Orden     ') }}<i class="fas fa-plus-circle"></i>
        </button>
    </div> -->




@endsection