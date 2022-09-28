@extends('layouts.app')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@1.1.2"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
@section('content')

<style>
    .content-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 400px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .content-table thead tr {
        background-color: #242424;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }

    .content-table th,
    .content-table td {
        padding: 8px 15px;
    }

    .content-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .content-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .content-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .content-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }

    table.dataTable tbody>tr.selected,
    table.dataTable tbody>tr>.selected {
        background-color: #FF771F !important;
    }

    table.dataTable tbody tr.selected a,
    table.dataTable tbody th.selected a,
    table.dataTable tbody td.selected a {
        color: #000 !important;
    }
</style>

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-10 mb-2">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <span style="font-size: 25px;">
                                43
                            </span>
                            <span>
                                Ordenes Pendientes
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <span style="font-size: 25px;">
                                43
                            </span>
                            <span>
                                Ordenes Realizadas
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <span style="font-size: 25px;">
                                43
                            </span>
                            <span>
                                Ordenes Totales
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

                    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.css" />
                    <script type="70cf02be0b65b144043f4959-text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.js"></script>

                    <script type="70cf02be0b65b144043f4959-text/javascript">
                        $(document).ready(function() {
                            var table = $('#dataTableServicios').DataTable({
                                pagingType: 'full_numbers',
                                pageLength: 10,
                                lengthMenu: [10, 15, 20, 100],
                                select: 'single',
                                "language": {
                                    "search": "Buscar&nbsp;:",
                                    "lengthMenu": "Mostrar _MENU_ Órdenes de Servicios",
                                    "zeroRecords": "Orden no encontrada",
                                    "info": "Página _PAGE_ de _PAGES_",
                                    "infoEmpty": "No hay Órdenes de Servicios disponibles",
                                    "infoFiltered": "(filtrado de _MAX_ Órdenes de Servicios)",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "previous": "Anterior",
                                        "next": "Siguiente"
                                    },
                                    select: {
                                        rows: {
                                            _: ""
                                        }
                                    }
                                }
                            })

                            $('#btToggleDisplay').on('click', function() {
                                $("#dataTableServicios").toggleClass('cards')
                                $("#dataTableServicios thead").toggle()
                            })
                        });
                    </script>

                    <table id="dataTableServicios" class="content-table" cellspacing="0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="position: sticky; top: 0; width: 10%;">Eco</th>
                                <th style="position: sticky; top: 0; width: 20%;">Fecha</th>
                                <th style="position: sticky; top: 0; width: 10%;">Marca</th>
                                <th style="position: sticky; top: 0; width: 10%;">Modelo</th>
                                <th style="position: sticky; top: 0; width: 10%;">Estado</th>
                                <th style="position: sticky; top: 0; width: 10%;">Rep. Act</th>
                                <th style="position: sticky; top: 0; width: 10%;">PDF</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($registroOrdenServicio as $registro)
                            <tr>
                                <td> {{$registro->ordenServicioNumEco}} </td>
                                <td> {{$registro->ordenServicioFechaIngreso}} </td>
                                <td> {{$registro->ordenServicioMarca}} </td>
                                <td> {{$registro->ordenServicioModelo}} </td>
                                <td>
                                    @if($registro->ordenServicioEstado == 'Incompleto')
                                    <a style="width: 83%; padding-left: 4%; font-size: 0.8vw;" href="{{ url('/registroOrdenServicio/'.$registro->id.'/edit')}}" class="btn btn-danger">
                                        <i class="fas fa-eye"></i> <strong>
                                            Ver Orden
                                        </strong>
                                    </a>
                                    @endif
                                    @if($registro->ordenServicioEstado == 'Completado')
                                    <div style="margin-bottom: -6%; text-align: center; width: 83%; padding: 4%; font-size: 0.8vw;" class="alert alert-success" role="alert">
                                        <i class="fas fa-smile"></i>
                                        <strong>
                                            Terminada
                                        </strong>
                                    </div>
                                    @endif
                                </td>
                                <td>
                                    <a style="width: 80%; font-size: 0.8vw;" href="{{ url('/registroReporteActividades/'.$registro->id.'/edit')}}" target="_blank" class="btn btn-warning">
                                        <i class="fas fa-list-alt"></i>
                                        <strong>
                                            Actividades
                                        </strong>
                                    </a>
                                </td>
                                <td>
                                    <a style="width: 80%; font-size: 0.8vw;" href="" target="_blank" class="btn btn-warning">
                                        <i style="color: red;" class="fas fa-file-pdf" aria-hidden="true"></i>
                                        <strong>
                                            Reporte
                                        </strong>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="70cf02be0b65b144043f4959-|49" defer=""></script>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection



<!-- 
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

    <style>
        .containerCard {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .containerCard .card {
            box-sizing: border-box;
            text-align: center;
            width: 200px;
            height: 150px;
            padding: 2rem;
            background: rgba(255, 119, 31, 0.5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
            border-radius: 5px;
            margin: 1rem;
            overflow: hidden;
        }

        .containerCard .card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
            width: 50%;
            height: 100%;
            background: rgba(255, 255, 255, .1);
            pointer-events: none;
        }

        .containerCard .circle {
            position: relative;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #000;
            color: #fff;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 2rem;
            font-weight: 700;
            transition: .5s;
        }

        .containerCard .card .c-1 {
            background: red;
            box-shadow: 0 0 0 0 #e84393;
        }

        .containerCard .card .c-2 {
            background: green;
            box-shadow: 0 0 0 0 #6c5ce7;
        }

        .containerCard .card .c-3 {
            background: rgba(255, 119, 31);
            box-shadow: 0 0 0 0 #f9ca24;
        }

        .containerCard .card:hover .c-1 {
            box-shadow: 0 0 0 300px #e84393;
        }

        .containerCard .card:hover .c-2 {
            box-shadow: 0 0 0 300px #6c5ce7;
        }

        .containerCard .card:hover .c-3 {
            box-shadow: 0 0 0 300px #f9ca24;
        }

        .containerCard .card .info {
            position: relative;
            z-index: 1;
            transition: .5s;
        }

        .containerCard .card:hover .info {
            color: #fff;
        }

        .containerCard .card .info h3 {
            margin: 5px 0;
            font-size: 1.2rem;
        }

        .containerCard .card .info p {
            margin: 0;
            padding: 0;
        }

        .containerCard .card .info a {
            margin-top: 20px;
            padding: 10px 15px;
            display: inline-block;
            background: #fff;
            text-decoration: none;
            font-size: .8rem;
            font-weight: 500;
            border-radius: 2px;
            color: #000;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .2);
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@1.1.2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>






    <div class="row justify-content-center">
        <div class="col-md-2 cardForm" style="position: sticky; top: 0; padding-left: 0px; padding-right: 0px;">
            <div class="col-md-12" style="position: sticky;padding-left: 0px;padding-right: 0px;">
                <div class="containerCard">
                    <div class="card">
                        <div class="circle c-1">
                            <div id="pendientes"></div>
                        </div>
                        <div class="info">
                            <h3>Ordenes Pendientes</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12" style="position: sticky;padding-left: 0px;padding-right: 0px;">
                <div class="containerCard">
                    <div class="card">
                        <div class="circle c-2">
                            <div id="terminadas"></div>
                        </div>
                        <div class="info">
                            <h3>Ordenes Terminadas</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12" style="position: sticky;padding-left: 0px;padding-right: 0px;">
                <div class="containerCard">
                    <div class="card">
                        <div class="circle c-3">
                            <div id="totales"></div>
                        </div>
                        <div class="info">
                            <h3>Ordenes Totales</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function pendientesO() {
                const registroOrdenServicio = <?php echo json_encode($registroOrdenServicio) ?>;
                const registroOrdenServicioIncompleto = <?php echo json_encode($registroOrdenServicioIncompleto) ?>;
                const registroOrdenServicioCompleto = <?php echo json_encode($registroOrdenServicioCompleto) ?>;

                var sum = 3 + 4;
                document.getElementById("pendientes").innerHTML = registroOrdenServicioIncompleto.length;
                document.getElementById("terminadas").innerHTML = registroOrdenServicioCompleto.length;
                document.getElementById("totales").innerHTML = registroOrdenServicio.length;
            };
            pendientesO();
        </script>

        <div class="col-md-9">
            <div class="col-md-12 cardForm">
                <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.css" />
                <script type="70cf02be0b65b144043f4959-text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.js"></script>

                <script type="70cf02be0b65b144043f4959-text/javascript">
                    $(document).ready(function() {
                        var table = $('#dataTableServicios').DataTable({
                            pagingType: 'full_numbers',
                            pageLength: 10,
                            lengthMenu: [10, 15, 20, 100],
                            select: 'single',
                            "language": {
                                "search": "Buscar&nbsp;:",
                                "lengthMenu": "Mostrar _MENU_ Órdenes de Servicios",
                                "zeroRecords": "Orden no encontrada",
                                "info": "Página _PAGE_ de _PAGES_",
                                "infoEmpty": "No hay Órdenes de Servicios disponibles",
                                "infoFiltered": "(filtrado de _MAX_ Órdenes de Servicios)",
                                "paginate": {
                                    "first": "Primero",
                                    "last": "Ultimo",
                                    "previous": "Anterior",
                                    "next": "Siguiente"
                                },
                                select: {
                                    rows: {
                                        _: ""
                                    }
                                }
                            }
                        })

                        $('#btToggleDisplay').on('click', function() {
                            $("#dataTableServicios").toggleClass('cards')
                            $("#dataTableServicios thead").toggle()
                        })
                    });
                </script>

                <table id="dataTableServicios" class="table table-sm table-hover" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 10%;">Eco</th>
                            <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 20%;">Fecha</th>
                            <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 10%;">Marca</th>
                            <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 10%;">Modelo</th>
                            <th style="position: sticky; width: 10%;">Estado</th>
                            <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 10%;">Rep. Act</th>
                            <th style="position: sticky; width: 10%;">PDF</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registroOrdenServicio as $registro)
                        <tr>
                            <td> {{$registro->ordenServicioNumEco}} </td>
                            <td> {{$registro->ordenServicioFechaIngreso}} </td>
                            <td> {{$registro->ordenServicioMarca}} </td>
                            <td> {{$registro->ordenServicioModelo}} </td>
                            <td>
                                <div class="form">
                                    <div class="form-group">
                                        <div class="row mt-1">
                                            <div style="width: 100%; padding: 1px; margin-bottom: 0rem !important" class="form-group col">
                                                @if($registro->ordenServicioEstado == 'Incompleto')
                                                <a style="width: 83%; padding-left: 4%; font-size: 0.8vw;" href="{{ url('/registroOrdenServicio/'.$registro->id.'/edit')}}" class="btn btn-danger">
                                                    <i class="fas fa-eye"></i> Ver Orden
                                                </a>
                                                @endif
                                                @if($registro->ordenServicioEstado == 'Completado')
                                                <div style="margin-bottom: -6%; text-align: center; width: 83%; padding: 4%; font-size: 0.8vw;" class="alert alert-success" role="alert">
                                                    <i class="fas fa-smile"></i> <strong> Terminada </strong>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form">
                                    <div class="form-group">
                                        <div class="row mt-1">
                                            <div style="width: 100%; padding: 1px; margin-bottom: 0rem !important" class="form-group col">
                                                <a style="width: 80%; font-size: 0.8vw;" href="{{ url('/registroReporteActividades/'.$registro->id.'/edit')}}" target="_blank" class="btn btn-warning">
                                                    <i class="fas fa-list-alt"></i>
                                                    <strong>
                                                        Actividades
                                                    </strong>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form">
                                    <div class="form-group">
                                        <div class="row mt-1">
                                            <div style="width: 100%; padding: 1px; margin-bottom: 0rem !important" class="form-group col">
                                                <a style="width: 80%; font-size: 0.8vw;" href="" target="_blank" class="btn btn-warning">
                                                    <i style="color: red;" class="fas fa-file-pdf" aria-hidden="true"></i>
                                                    <strong>
                                                        Reporte
                                                    </strong>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="70cf02be0b65b144043f4959-|49" defer=""></script>
            </div>
        </div>
    </div>
</div>
 -->