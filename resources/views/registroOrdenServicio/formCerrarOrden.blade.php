@extends('layouts.app')

@section('content')
<style>
    .titulo {
        /* background: #333; */
        display: flex;
        color: #000;
    }


    .titulo:after {
        content: '';
        color: #FF771F;
        margin: auto 0.1em;
        border-bottom: solid 3px;
        flex: 1;
    }

    .titulo h3 {
        position: relative;
        padding: 0.25em 1em;
        overflow: hidden;
        /* background: linear-gradient(currentcolor, currentcolor) no-repeat top center, linear-gradient(currentcolor, currentcolor) no-repeat bottom center; */
        background-size: calc(100% - 1.65em) 1px;
    }

    .titulo h3:before,
    .titulo h3:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        border: solid 3px;
        border-top: none;
        border-bottom: none;
        /* transform: skew(45deg) */
    }

    .titulo h3:after {
        transform: skew(-45deg)
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <!-- <div class="hover14 column">
                        <figure>
                            <img class="card-img-top" src="/img/carHead.jpg" />
                        </figure>
                    </div> -->
                <div class="card-body">
                    <header class="titulo">
                        <h3>Datos del Operador </h3>
                    </header>

                    <div class="row mt-1">
                        <div class="form-group col-6">
                            <div class="row mt-1">
                                <div class="form-group col-3">
                                    <label for="ordenServicioNumEmpleadoElaboro"><strong>Num:</strong> </label>
                                    <input value="{{isset($registroOrdenServicio->ordenServicioNumEmpleadoElaboro)?$registroOrdenServicio->ordenServicioNumEmpleadoElaboro:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioNumEmpleadoElaboro" id="ordenServicioNumEmpleadoElaboro" readonly>
                                </div>
                                <div class="form-group col-9">
                                    <label for="ordenServicioNombreEmpleadoElaboro"><strong>Elaboro:</strong> </label>
                                    <input value="{{isset($registroOrdenServicio->ordenServicioNombreEmpleadoElaboro)?$registroOrdenServicio->ordenServicioNombreEmpleadoElaboro:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioNombreEmpleadoElaboro" id="ordenServicioNombreEmpleadoElaboro" readonly>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="form-group col-6">
                                    <label for="ordenServicioFechaIngreso"><strong>Fecha de ingreso:</strong> </label>
                                    <input value="{{isset($registroOrdenServicio->ordenServicioFechaIngreso)?$registroOrdenServicio->ordenServicioFechaIngreso:''}}" type="text" placeholder="00/00/000" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" readonly>
                                </div>
                                <div class="form-group col-6">
                                    <label for="ordenServicioMantenimiento"><strong>Mantenimiento:</strong> </label>
                                    <input value="{{isset($registroOrdenServicio->ordenServicioMantenimiento)?$registroOrdenServicio->ordenServicioMantenimiento:''}}" type="text" placeholder="00/00/000" class="form-control" name="ordenServicioMantenimiento" id="ordenServicioMantenimiento" readonly>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="form-group col-6">
                                    <label for="ordenServicioMarca"><strong>Marca:</strong> </label>
                                    <input value="{{isset($registroOrdenServicio->ordenServicioMarca)?$registroOrdenServicio->ordenServicioMarca:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioMarca" id="ordenServicioMarca" readonly>
                                </div>
                                <div class="form-group col-6">
                                    <label for="ordenServicioModelo"><strong>Modelo:</strong> </label>
                                    <input value="{{isset($registroOrdenServicio->ordenServicioModelo)?$registroOrdenServicio->ordenServicioModelo:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioModelo" id="ordenServicioModelo" readonly>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="form-group col-6">
                                    <label for="ordenServicioPlacas"><strong>Placas:</strong> </label>
                                    <input value="{{isset($registroOrdenServicio->ordenServicioPlacas)?$registroOrdenServicio->ordenServicioPlacas:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioPlacas" id="ordenServicioPlacas" readonly>
                                </div>
                                <div class="form-group col-6">
                                    <label for="ordenServicioKilometraje"><strong>Kilometraje:</strong> </label>
                                    <input value="{{isset($registroOrdenServicio->ordenServicioKilometraje)?$registroOrdenServicio->ordenServicioKilometraje:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" readonly>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="form-group col-6">
                                    <label for="ordenServicioTipoUnidad"><strong>Tipo de Unidad:</strong> </label>
                                    <input value="{{isset($registroOrdenServicio->ordenServicioTipoUnidad)?$registroOrdenServicio->ordenServicioTipoUnidad:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioTipoUnidad" id="ordenServicioTipoUnidad" readonly>
                                </div>
                                <div class="form-group col-6">
                                    <label for="ordenServicioNumEco"><strong>Núm. Eco:</strong> </label>
                                    <input value="{{isset($registroOrdenServicio->ordenServicioNumEco)?$registroOrdenServicio->ordenServicioNumEco:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioNumEco" id="ordenServicioNumEco" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="ordenServicioDiagnostico"><strong>Descripción por parte del operador</strong></label>
                            <textarea rows="16" class="form-control" placeholder="Descripcion" id="ordenServicioDiagnostico" name="ordenServicioDescripcion" readonly>{{isset($registroOrdenServicio->ordenServicioDescripcion)?$registroOrdenServicio->ordenServicioDescripcion:''}}</textarea>
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

                    <header class="titulo">
                        <h3>Datos del Area Tecnica </h3>
                    </header>

                    <div class="row mt-1">
                        <div class="form-group col-2">
                            <label for="ordenServicioFechaSalida"><strong>Fecha de salida:</strong> </label>
                            <input type="date" placeholder="00/00/000" class="form-control" name="ordenServicioFechaSalida" id="ordenServicioFechaSalida">
                        </div>
                        <div class="form-group col-2">
                            <label for="ordenServicioHorometro"><strong>Kilometraje:</strong> </label>
                            <input type="number" placeholder="0000000" class="form-control" name="ordenServicioHorometro" id="ordenServicioHorometro">
                        </div>
                        <div class="form-group col-4">
                            <label for="ordenServicioEncargado"><strong>Encargado:</strong> </label>
                            <input type="text" placeholder="Nombre y apellidos" class="form-control" name="refaccionesCantidad" id="refaccionesCantidad">
                        </div>
                        <div class="form-group col-4">
                            <label for="ordenServicioDescripcion"><strong>Mecanico Auxiliar:</strong> </label>
                            <input type="text" placeholder="Nombre y apellidos" class="form-control" name="refaccionesDescripcion" id="refaccionesDescripcion">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="form-group col-12">
                            <label for="ordenServicioDiagnostico"><strong>Diagnostico y reparacion efectuada por el area tecnica</strong></label>
                            <textarea rows="10" class="form-control" placeholder="Descripcion" id="ordenServicioDiagnostico" name="ordenServicioDiagnostico"></textarea>
                        </div>
                    </div>
                    <div class="row mt-1 ">
                        <div class="form-group col-3">
                            <label for="refaccionesCantidad"><strong>Cantidad:</strong> </label>
                            <input type="number" placeholder="000" class="form-control" name="refaccionesCantidad" id="refaccionesCantidad">
                        </div>
                        <div class="form-group col-9">
                            <label for="refaccionesDescripcion"><strong>Descripcion de refacciones:</strong> </label>
                            <input type="text" placeholder="Descripcion" class="form-control" name="refaccionesDescripcion" id="refaccionesDescripcion">
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="form-group col-4">
                            <label for="refaccionesPrecio"><strong>Precio:</strong> </label>
                            <input type="number" placeholder="000" class="form-control" name="refaccionesPrecio" id="refaccionesPrecio">
                        </div>
                        <div class="form-group col-4">
                            <label for="refaccionesFechaSolicitada"><strong>Fecha solicitada:</strong> </label>
                            <input type="date" placeholder="00/00/000" class="form-control" name="refaccionesFechaSolicitada" id="refaccionesFechaSolicitada">
                        </div>
                        <div class="form-group col-4">
                            <label for="refaccionesFechaEntrega"><strong>Fecha de entrega:</strong> </label>
                            <input type="date" placeholder="00/00/000" class="form-control" name="refaccionesFechaEntrega" id="refaccionesFechaEntrega">
                        </div>
                    </div>

                    <style>
                        @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');

                        .addBut {
                            display: inline-flex;
                            width: 100px;
                            height: 37px;
                            margin: 0 15px;
                            perspective: 10000px;
                        }

                        .addBut a {
                            cursor: pointer;
                            font-size: 19px;
                            letter-spacing: 1px;
                            transform-style: preserve-3d;
                            transform: translateZ(-25px);
                            transition: transform .25s;
                            font-family: 'Arial', sans-serif;
                        }

                        .addBut a:before {
                            position: absolute;
                            content: "  Agregar  ";
                            height: 37px;
                            width: 100px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            border: 5px solid #000;
                            box-sizing: border-box;
                            border-radius: 5px;
                        }

                        .addBut a:after {
                            position: absolute;
                            content: "Refaccion";
                            height: 37px;
                            width: 120px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            border: 5px solid #FF771F;
                            box-sizing: border-box;
                            border-radius: 5px;
                        }

                        .addBut a:before {
                            color: #fff;
                            background: #000;
                            transform: rotateY(0deg) translateZ(25px);
                        }

                        .addBut a:after {
                            color: #000;
                            transform: rotateX(90deg) translateZ(25px);
                        }

                        .addBut a:hover {
                            transform: translateZ(-25px) rotateX(-90deg);
                        }
                    </style>

                    <span class="addBut">
                        <a id="addMore"></a>
                    </span>

                    <style>
                        .tablaRefacciones label {
                            font-weight: bold;
                        }

                        .tablaRefaccionestable {
                            /* border-collapse: collapse; */
                            box-shadow: 0 5px 10px #000;
                            background-color: white;
                            text-align: left;
                            overflow: hidden;
                            margin: auto;

                        }

                        .round_table {
                            border-collapse: separate;
                            border-spacing: 1;
                            border: solid black 1px;
                            border-radius: 5px;
                            -moz-border-radius: 10px;
                            -webkit-border-radius: 5px;
                        }

                        .tablaRefacciones thead {
                            box-shadow: 0 5px 10px #e1e5ee;
                        }

                        .tablaRefacciones th {
                            padding: 0rem 2rem;
                            text-transform: none;
                            letter-spacing: 0rem;
                            font-weight: 900;
                        }

                        .tablaRefacciones td {
                            padding: 1rem 2rem;
                        }

                        .tablaRefacciones tr:nth-child(even) {
                            background-color: #f4f6fb;
                        }

                        .tablaRefacciones tr:hover {
                            background-color: rgba(255, 119, 31, 0.7);
                        }

                        .accordion-button:not(.collapsed) {
                            color: #FF771F;
                            background-color: rgba(255, 255, 255, 0.2);
                            border-bottom-color: #FF771F;
                            box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
                        }

                        table.dataTable tbody>tr.selected,
                        table.dataTable tbody>tr>.selected {
                            color: black !important;
                            font-weight: 200;
                            background-color: #fff;
                        }

                        table.dataTable tbody tr.selected a,
                        table.dataTable tbody th.selected a,
                        table.dataTable tbody td.selected a {
                            color: #000;
                            font-weight: 700;
                        }
                    </style>

                    <div class="row" style="margin:auto; margin-top:26px; text-align: center;">
                        <table class="tabla tablaRefacciones round_table" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="width: 4%;">Cantidad</th>
                                    <th style="width: 35%;">Descripcion de refacciones</th>
                                    <th style="width: 20%;">Fecha Solicitada</th>
                                    <th style="width: 20%;">Fecha Entrega</th>
                                    <th style="width: 3%;"></th>
                                </tr>
                            </thead>
                            <tbody id="addRow" class="addRow">

                            </tbody>
                        </table>
                    </div>

                    <script src="//code.jquery.com/jquery.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>

                    <script id="document-template" type="text/x-handlebars-template">
                        <tr class="delete_add_more_item" id="delete_add_more_item">
                            <td>
                                <input type="text" class="form-control form-control-sm refaccionesCantidad" name="refaccionesCantidad[]" value="@{{ refaccionesCantidad }}" >
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm refaccionesPrecio" name="refaccionesPrecio[]" value="@{{ refaccionesPrecio }}" >
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm refaccionesDescripcion" name="refaccionesDescripcion[]" value="@{{ refaccionesDescripcion }}"  >
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm refaccionesFechaSolicitada" name="refaccionesFechaSolicitada[]" value="@{{ refaccionesFechaSolicitada }}"  >
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm refaccionesFechaEntrega" name="refaccionesFechaEntrega[]" value="@{{ refaccionesFechaEntrega }}"  >
                            </td>
                            <td>
                                <i class="removeaddmore" style="cursor:pointer;color:red;font-weight: bold;"><i class="fas fa-trash-alt fa-1x"></i></i>
                            </td>
                        </tr>
                    </script>

                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                    <script type="text/javascript">
                        $(document).on('click', '#addMore', function() {

                            var refaccionesCantidad = $("#refaccionesCantidad").val();
                            var refaccionesPrecio = $("#refaccionesPrecio").val();
                            var refaccionesDescripcion = $("#refaccionesDescripcion").val();
                            var refaccionesFechaSolicitada = $("#refaccionesFechaSolicitada").val();
                            var refaccionesFechaEntrega = $("#refaccionesFechaEntrega").val();

                            var source = $("#document-template").html();
                            var template = Handlebars.compile(source);

                            var data = {
                                refaccionesCantidad: refaccionesCantidad,
                                refaccionesPrecio: refaccionesPrecio,
                                refaccionesDescripcion: refaccionesDescripcion,
                                refaccionesFechaSolicitada: refaccionesFechaSolicitada,
                                refaccionesFechaEntrega: refaccionesFechaEntrega,
                            }

                            var html = template(data);
                            $("#addRow").append(html)
                        });

                        $(document).on('click', '.removeaddmore', function(event) {
                            $(this).closest('.delete_add_more_item').remove();
                        });
                    </script>



                    <div class="row mt-1">
                        <div class="form-group col-md-12">
                            <div class="buttonForm-holder">
                                <button class="buttonForm buttonForm-4 hover-border-9" style="width: 50%;">
                                    <span>Cerrar Orden de Servicio</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <style>
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

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');

        .addBut {
            display: inline-flex;
            width: 100px;
            height: 37px;
            margin: 0 15px;
            perspective: 10000px;
        }

        .addBut a {
            cursor: pointer;
            font-size: 19px;
            letter-spacing: 1px;
            transform-style: preserve-3d;
            transform: translateZ(-25px);
            transition: transform .25s;
            font-family: 'Arial', sans-serif;
        }

        .addBut a:before {
            position: absolute;
            content: "  Agregar  ";
            height: 37px;
            width: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 5px solid #000;
            box-sizing: border-box;
            border-radius: 5px;
        }

        .addBut a:after {
            position: absolute;
            content: "Refaccion";
            height: 37px;
            width: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 5px solid #FF771F;
            box-sizing: border-box;
            border-radius: 5px;
        }

        .addBut a:before {
            color: #fff;
            background: #000;
            transform: rotateY(0deg) translateZ(25px);
        }

        .addBut a:after {
            color: #000;
            transform: rotateX(90deg) translateZ(25px);
        }

        .addBut a:hover {
            transform: translateZ(-25px) rotateX(-90deg);
        }
    </style>

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
            padding-top: 0%;
        }
    </style>

    <div class="row justify-content-center">
        <div class="col-md-3 ">
            <div class="col-md-12 cardForm" >
                <div class="row mt-1">
                    <div class="form-group col-3">
                        <label for="ordenServicioNumEmpleadoElaboro"><strong>Num:</strong> </label>
                        <input value="{{isset($registroOrdenServicio->ordenServicioNumEmpleadoElaboro)?$registroOrdenServicio->ordenServicioNumEmpleadoElaboro:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioNumEmpleadoElaboro" id="ordenServicioNumEmpleadoElaboro" readonly>
                    </div>
                    <div class="form-group col-9">
                        <label for="ordenServicioNombreEmpleadoElaboro"><strong>Elaboro:</strong> </label>
                        <input value="{{isset($registroOrdenServicio->ordenServicioNombreEmpleadoElaboro)?$registroOrdenServicio->ordenServicioNombreEmpleadoElaboro:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioNombreEmpleadoElaboro" id="ordenServicioNombreEmpleadoElaboro" readonly>
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="form-group col-6">
                        <label for="ordenServicioFechaIngreso"><strong>Fecha de ingreso:</strong> </label>
                        <input value="{{isset($registroOrdenServicio->ordenServicioFechaIngreso)?$registroOrdenServicio->ordenServicioFechaIngreso:''}}" type="text" placeholder="00/00/000" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" readonly>
                    </div>
                    <div class="form-group col-6">
                        <label for="ordenServicioMantenimiento"><strong>Mantenimiento:</strong> </label>
                        <input value="{{isset($registroOrdenServicio->ordenServicioMantenimiento)?$registroOrdenServicio->ordenServicioMantenimiento:''}}" type="text" placeholder="00/00/000" class="form-control" name="ordenServicioMantenimiento" id="ordenServicioMantenimiento" readonly>
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="form-group col-6">
                        <label for="ordenServicioMarca"><strong>Marca:</strong> </label>
                        <input value="{{isset($registroOrdenServicio->ordenServicioMarca)?$registroOrdenServicio->ordenServicioMarca:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioMarca" id="ordenServicioMarca" readonly>
                    </div>
                    <div class="form-group col-6">
                        <label for="ordenServicioModelo"><strong>Modelo:</strong> </label>
                        <input value="{{isset($registroOrdenServicio->ordenServicioModelo)?$registroOrdenServicio->ordenServicioModelo:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioModelo" id="ordenServicioModelo" readonly>
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="form-group col-6">
                        <label for="ordenServicioPlacas"><strong>Placas:</strong> </label>
                        <input value="{{isset($registroOrdenServicio->ordenServicioPlacas)?$registroOrdenServicio->ordenServicioPlacas:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioPlacas" id="ordenServicioPlacas" readonly>
                    </div>
                    <div class="form-group col-6">
                        <label for="ordenServicioKilometraje"><strong>Kilometraje:</strong> </label>
                        <input value="{{isset($registroOrdenServicio->ordenServicioKilometraje)?$registroOrdenServicio->ordenServicioKilometraje:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" readonly>
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="form-group col-6">
                        <label for="ordenServicioTipoUnidad"><strong>Tipo de Unidad:</strong> </label>
                        <input value="{{isset($registroOrdenServicio->ordenServicioTipoUnidad)?$registroOrdenServicio->ordenServicioTipoUnidad:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioTipoUnidad" id="ordenServicioTipoUnidad" readonly>
                    </div>
                    <div class="form-group col-6">
                        <label for="ordenServicioNumEco"><strong>Núm. Eco:</strong> </label>
                        <input value="{{isset($registroOrdenServicio->ordenServicioNumEco)?$registroOrdenServicio->ordenServicioNumEco:''}}" type="text" placeholder="000" class="form-control" name="ordenServicioNumEco" id="ordenServicioNumEco" readonly>
                    </div>
                </div>
            </div>

            <div class="col-md-12 cardForm">
                <div class="row mt-1">
                    <div class="form-group col-12">
                        <label for="ordenServicioDiagnostico"><strong>Descripción por parte del operador</strong></label>
                        <textarea rows="15" class="form-control" placeholder="Descripcion" id="ordenServicioDiagnostico" name="ordenServicioDescripcion" readonly>{{isset($registroOrdenServicio->ordenServicioDescripcion)?$registroOrdenServicio->ordenServicioDescripcion:''}}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="col-md-12 cardForm">
                <div class="row mt-1">
                    <div class="form-group col-3">
                        <label for="ordenServicioFechaSalida"><strong>Fecha de salida:</strong> </label>
                        <input type="date" placeholder="00/00/000" class="form-control" name="ordenServicioFechaSalida" id="ordenServicioFechaSalida">
                    </div>
                    <div class="form-group col-3">
                        <label for="ordenServicioHorometro"><strong>Horometro:</strong> </label>
                        <input type="text" placeholder="0000000" class="form-control" name="ordenServicioHorometro" id="ordenServicioHorometro">
                    </div>
                    <div class="form-group col-3">
                        <label for="ordenServicioEncargado"><strong>Encargado:</strong> </label>
                        <input type="text" placeholder="Nombre y apellidos" class="form-control" name="refaccionesCantidad" id="refaccionesCantidad">
                    </div>
                    <div class="form-group col-3">
                        <label for="ordenServicioDescripcion"><strong>Mecanico Auxiliar:</strong> </label>
                        <input type="text" placeholder="Nombre y apellidos" class="form-control" name="refaccionesDescripcion" id="refaccionesDescripcion">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="form-group col-12">
                        <label for="ordenServicioDiagnostico"><strong>Diagnostico y reparacion efectuada por el area tecnica</strong></label>
                        <textarea rows="10" class="form-control" placeholder="Descripcion" id="ordenServicioDiagnostico" name="ordenServicioDiagnostico"></textarea>
                    </div>
                </div>
                <div class="row mt-1 ">
                    <div class="form-group col-12 justify-content-center">
                        <div class="form-group col-12">
                            <div class="row mt-1">
                                <div class="form-group col-3">
                                    <label for="refaccionesCantidad"><strong>Cantidad:</strong> </label>
                                    <input type="text" placeholder="000" class="form-control" name="refaccionesCantidad" id="refaccionesCantidad">
                                </div>
                                <div class="form-group col-3">
                                    <label for="refaccionesPrecio"><strong>Precio:</strong> </label>
                                    <input type="text" placeholder="000" class="form-control" name="refaccionesPrecio" id="refaccionesPrecio">
                                </div>
                                <div class="form-group col-3">
                                    <label for="refaccionesFechaSolicitada"><strong>Fecha solicitada:</strong> </label>
                                    <input type="date" placeholder="00/00/000" class="form-control" name="refaccionesFechaSolicitada" id="refaccionesFechaSolicitada">
                                </div>
                                <div class="form-group col-3">
                                    <label for="refaccionesFechaEntrega"><strong>Fecha de entrega:</strong> </label>
                                    <input type="date" placeholder="00/00/000" class="form-control" name="refaccionesFechaEntrega" id="refaccionesFechaEntrega">
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="form-group col-6">
                                    <label for="refaccionesDescripcion"><strong>Descripcion de refacciones:</strong> </label>
                                    <input type="text" placeholder="Descripcion" class="form-control" name="refaccionesDescripcion" id="refaccionesDescripcion">
                                </div>
                            </div>
                        </div>

                        <span class="addBut">
                            <a id="addMore"></a>
                        </span>

                        <style>
                            .tablaRefacciones label {
                                font-weight: bold;
                            }

                            .tablaRefaccionestable {
                                /* border-collapse: collapse; */
                                box-shadow: 0 5px 10px #000;
                                background-color: white;
                                text-align: left;
                                overflow: hidden;
                                margin: auto;

                            }

                            .round_table {
                                border-collapse: separate;
                                border-spacing: 1;
                                border: solid black 1px;
                                border-radius: 5px;
                                -moz-border-radius: 10px;
                                -webkit-border-radius: 5px;
                            }

                            .tablaRefacciones thead {
                                box-shadow: 0 5px 10px #e1e5ee;
                            }

                            .tablaRefacciones th {
                                padding: 0rem 2rem;
                                text-transform: none;
                                letter-spacing: 0rem;
                                font-weight: 900;
                            }

                            .tablaRefacciones td {
                                padding: 1rem 2rem;
                            }

                            .tablaRefacciones tr:nth-child(even) {
                                background-color: #f4f6fb;
                            }

                            .tablaRefacciones tr:hover {
                                background-color: rgba(255, 119, 31, 0.7);
                            }

                            .accordion-button:not(.collapsed) {
                                color: #FF771F;
                                background-color: rgba(255, 255, 255, 0.2);
                                border-bottom-color: #FF771F;
                                box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
                            }

                            table.dataTable tbody>tr.selected,
                            table.dataTable tbody>tr>.selected {
                                color: black !important;
                                font-weight: 200;
                                background-color: #fff;
                            }

                            table.dataTable tbody tr.selected a,
                            table.dataTable tbody th.selected a,
                            table.dataTable tbody td.selected a {
                                color: #000;
                                font-weight: 700;
                            }
                        </style>

                        <div class="row" style="margin:auto; margin-top:26px; text-align: center;">
                            <table class="tabla tablaRefacciones round_table" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="width: 4%;">Cantidad</th>
                                        <th style="width: 35%;">Descripcion de refacciones</th>
                                        <th style="width: 20%;">Fecha Solicitada</th>
                                        <th style="width: 20%;">Fecha Entrega</th>
                                        <th style="width: 3%;"></th>
                                    </tr>
                                </thead>
                                <tbody id="addRow" class="addRow">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:700);

        .button {
            background: #3D4C53;
            margin: 6px auto;
            width: 250px;
            height: 6%;
            overflow: hidden;
            text-align: center;
            transition: .2s;
            cursor: pointer;
            border-radius: 3px;
            box-shadow: 0px 1px 2px rgb(0 0 0 / 20%);
            margin: auto;
        }

        .btnTwo {
            position: relative;
            width: 200px;
            height: 100px;
            margin-top: -100px;
            padding-top: 2px;
            background: #26A69A;
            left: -250px;
            transition: .3s;
        }

        .btnText {
            color: white;
            transition: .3s;
            margin-top: 4%;
        }

        .btnText2 {
            margin-top: 58px;
            margin-right: -130px;
            color: #FFF;
        }

        .button:hover .btnTwo {
            /*When hovering over .button change .btnTwo*/
            left: -130px;
        }

        .button:hover .btnText {
            /*When hovering over .button change .btnText*/
            margin-left: 65px;
        }

        .button:active {
            /*Clicked and held*/
            box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.3);
        }
    </style>

    <button type="submit" class="button">
        <p class="btnText">Guardar Registro</p>
        <div class="btnTwo">
            <p class="btnText2">Si!</p>
        </div>
    </button>

</div>

<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>

<script id="document-template" type="text/x-handlebars-template">
    <tr class="delete_add_more_item" id="delete_add_more_item">
        <td>
        <input type="text" class="form-control form-control-sm refaccionesCantidad" name="refaccionesCantidad[]" value="@{{ refaccionesCantidad }}" >
        </td>
        <td>
        <input type="text" class="form-control form-control-sm refaccionesPrecio" name="refaccionesPrecio[]" value="@{{ refaccionesPrecio }}" >
        </td>
        <td>
        <input type="text" class="form-control form-control-sm refaccionesDescripcion" name="refaccionesDescripcion[]" value="@{{ refaccionesDescripcion }}"  >
        </td>
        <td>
        <input type="text" class="form-control form-control-sm refaccionesFechaSolicitada" name="refaccionesFechaSolicitada[]" value="@{{ refaccionesFechaSolicitada }}"  >
        </td>
        <td>
        <input type="text" class="form-control form-control-sm refaccionesFechaEntrega" name="refaccionesFechaEntrega[]" value="@{{ refaccionesFechaEntrega }}"  >
        </td>
        <td>
        <i class="removeaddmore" style="cursor:pointer;color:red;font-weight: bold;"><i class="fas fa-trash-alt fa-1x"></i></i>
        </td>
    </tr>
 </script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    $(document).on('click', '#addMore', function() {

        var refaccionesCantidad = $("#refaccionesCantidad").val();
        var refaccionesPrecio = $("#refaccionesPrecio").val();
        var refaccionesDescripcion = $("#refaccionesDescripcion").val();
        var refaccionesFechaSolicitada = $("#refaccionesFechaSolicitada").val();
        var refaccionesFechaEntrega = $("#refaccionesFechaEntrega").val();

        var source = $("#document-template").html();
        var template = Handlebars.compile(source);

        var data = {
            refaccionesCantidad: refaccionesCantidad,
            refaccionesPrecio: refaccionesPrecio,
            refaccionesDescripcion: refaccionesDescripcion,
            refaccionesFechaSolicitada: refaccionesFechaSolicitada,
            refaccionesFechaEntrega: refaccionesFechaEntrega,
        }

        var html = template(data);
        $("#addRow").append(html)
    });

    $(document).on('click', '.removeaddmore', function(event) {
        $(this).closest('.delete_add_more_item').remove();
    });
</script> -->

</div>
@endsection