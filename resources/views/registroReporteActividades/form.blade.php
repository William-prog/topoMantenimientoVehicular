@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-2">
            <div class="card">
                <div class="card-body">
                    <h3 class="encabezado">Informacion General</h3>
                    <div class="row mt-1">
                        <div class="form-group col-1">
                            <label for="ordenServicioNumEmpleadoElaboro"><strong>Num:</strong> </label>
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioNumEmpleadoElaboro" id="ordenServicioNumEmpleadoElaboro" required>
                        </div>
                        <div class="form-group col-3">
                            <label for="ordenServicioNombreEmpleadoElaboro"><strong>Elabora:</strong> </label>
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioNombreEmpleadoElaboro" id="ordenServicioNombreEmpleadoElaboro" required>
                        </div>
                        <div class="form-group col-2">
                            <label for="ordenServicioFechaIngreso"><strong>Categoria:</strong> </label>
                            <input type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
                        </div>
                        <div class="form-group col-2">
                            <label for="ordenServicioFechaIngreso"><strong>Num. Eco.:</strong> </label>
                            <input value="{{isset($registroReporteActividades->reporteActividadesNumEco)?$registroReporteActividades->reporteActividadesNumEco:''}}" type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
                        </div>
                        <div class="form-group col-2">
                            <label for="ordenServicioFechaIngreso"><strong>Equipo:</strong> </label>
                            <input type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
                        </div>
                        <div class="form-group col-2">
                            <label for="ordenServicioFechaIngreso"><strong>Modelo:</strong> </label>
                            <input type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <style>
                            ul.ks-cboxtags {
                                list-style: none;
                                padding: 0px;
                                margin-bottom: 0px;
                            }

                            ul.ks-cboxtags li {
                                display: inline;
                            }

                            ul.ks-cboxtags li label {
                                display: inline-block;
                                background-color: rgba(255, 255, 255, .9);
                                color: black;
                                border-radius: 25px;
                                white-space: nowrap;
                                margin: 3px 0px;
                                -webkit-touch-callout: none;
                                -webkit-user-select: none;
                                -moz-user-select: none;
                                -ms-user-select: none;
                                user-select: none;
                                -webkit-tap-highlight-color: transparent;
                                transition: all .2s;
                            }

                            ul.ks-cboxtags li label {
                                padding: 8px 12px;
                                cursor: pointer;
                            }

                            ul.ks-cboxtags li label::before {
                                display: inline-block;
                                font-style: normal;
                                font-variant: normal;
                                text-rendering: auto;
                                -webkit-font-smoothing: antialiased;
                                font-family: "Font Awesome 5 Free";
                                font-weight: 900;
                                font-size: 12px;
                                padding: 2px 6px 2px 2px;
                                content: "\f067";
                                transition: transform .3s ease-in-out;
                            }

                            ul.ks-cboxtags li input[type="checkbox"]:checked+label::before {
                                content: "\f00c";
                                transform: rotate(-360deg);
                                transition: transform .3s ease-in-out;
                            }

                            ul.ks-cboxtags li input[type="checkbox"]:checked+label {
                                border: 2px solid;
                                background-color: #F77520;
                                color: #fff;
                                transition: all .2s;
                            }

                            ul.ks-cboxtags li input[type="checkbox"] {
                                display: absolute;
                            }

                            ul.ks-cboxtags li input[type="checkbox"] {
                                position: absolute;
                                opacity: 0;
                            }

                            ul.ks-cboxtags li input[type="checkbox"]:focus+label {
                                border: 2px solid #e9a1ff;
                            }
                        </style>
                        <div class=" col-6">
                            <label for="ordenServicioFechaIngreso"><strong>Tipo de Actividad:</strong> </label>
                            <ul class="ks-cboxtags">
                                <li>
                                    <input type="checkbox" id="checkboxOne" value="Rainbow Dash">
                                    <label for="checkboxOne">Verificacion.</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="checkboxTwo" value="Cotton Candy" checked>
                                    <label for="checkboxTwo">Servicio.</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="checkboxThree" value="Rarity" checked>
                                    <label for="checkboxThree">Manto. Prev.</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="checkboxFour" value="Moondancer">
                                    <label for="checkboxFour">Manto. Correc.</label>
                                </li>
                            </ul>
                        </div>

                        <div class="col-2">
                            <label for="ordenServicioFechaIngreso"><strong>Marca:</strong> </label>
                            <input type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
                        </div>
                        <div class="form-group col-2">
                            <label for="ordenServicioFechaIngreso"><strong>Ubicacion:</strong> </label>
                            <input type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
                        </div>
                        <div class="form-group col-2">
                            <label for="ordenServicioFechaIngreso"><strong>Nivel Comb.:</strong> </label>
                            <input type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="form-group col-6">
                            <label for="ordenServicioFechaIngreso"><strong>Diagnostico Final:</strong> </label>
                            <input type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
                        </div>
                        <div class="form-group col-3">
                            <label for="ordenServicioKilometraje"><strong>Fecha Entrada:</strong> </label>
                            <input type="date" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                        <div class="form-group col-3">
                            <label for="ordenServicioKilometraje"><strong>Fecha Salida:</strong> </label>
                            <input type="date" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                    </div>
                    <style>
                        .divCheckList {
                            margin: 0;
                        }

                        .checkbox {
                            position: relative;
                            cursor: pointer;
                            appearance: none;
                            width: 45px;
                            height: 25px;
                            border-radius: 10px;
                            border: 2px solid red;
                            outline: none;
                            transition: 0.3s;
                        }

                        .checkbox::before {
                            content: "";
                            position: absolute;
                            height: 15px;
                            width: 15px;
                            border-radius: 50%;
                            background: red;
                            top: 3px;
                            left: 4px;
                            transition: 0.3s ease-in-out;
                        }

                        .checkbox:checked::before {
                            transform: translateX(18.5px);
                            background: green;
                        }

                        .checkbox:checked {
                            border-color: green;
                        }
                    </style>
                    <div class="row mt-1">
                        <div class="form-group col-12">
                            <label for="ordenServicioKilometraje"><strong>Resultado de la Verificación/Diagnostico inicial:</strong> </label>
                            <textarea rows="5" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                        </div>
                    </div>
                    <!-- Check List -->
                    <h3 class="encabezado">Puntos de verificacion del procedimiento de trabajo</h3>
                    <div class="row mt-1">

                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>1.</strong> Verificación del nivel de aceite de motor.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_1" id="clp_1" value="Si">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>13.</strong> Verificar que todos los instrumentos del tablero sean funcionales.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_11" id="clp_11" value="Si">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-1">

                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>2.</strong>Verificación del estado físico del radiador.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_2" id="clp_2" value="Si">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>14.</strong>Verificar que actúen los frenos de estacionamiento.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_12" id="clp_12" value="Si">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-1">

                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>3.</strong>Limpieza de tapa y colector de polvo de filtro de aire.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_3" id="clp_3" value="Si">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>15.</strong>Verificar las condiciones de alumbrado exterior y tablero.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_13" id="clp_13" value="Si">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-1">

                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>4.</strong>Verificar el nivel de combustible y drenar tanque.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_4" id="clp_4" value="Si">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>16.</strong>Verificar desgaste de elementos del equipo.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_14" id="clp_14" value="Si">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-1">

                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>5.</strong>Verificar el nivel de electrolito y terminales de batería.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_5" id="clp_5" value="Si">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>17.</strong>Verificar tensión de bandas de <strong>tránsito</strong>/<strong>presión</strong> de neumáticos.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_15" id="clp_15" value="Si">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-1">

                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>6.</strong>Verificar tensión y edo. físico de bandas, ventilador y generador.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_6" id="clp_6" value="Si">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>18.</strong>Verificar nivel de aceite del sistema hidráulico.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_16" id="clp_16" value="Si">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-1">

                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>7.</strong>Verificar nivel de aceite de convertidor.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_7" id="clp_7" value="Si">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>19.</strong>Verificar el nivel de la unidad en cambio de ubicación.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_17" id="clp_17" value="Si">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-1">

                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>8.</strong>Verificar nivel de aceite de transmisión .</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_8" id="clp_8" value="Si">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>20.</strong>Verificar tanque repartidor.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_18" id="clp_18" value="Si">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-1">

                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>9.</strong>Verificar nivel de aceite de mandos finales.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_9" id="clp_9" value="Si">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>21.</strong>Verificar llaves de esfera y terminales de garra.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_19" id="clp_19" value="Si">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-1">
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>10.</strong>Verificar nivel de aceite de caja de engranes y cadenas.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_10" id="clp_10" value="Si">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>22.</strong>Verificar fugas de aceite.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_20" id="clp_20" value="Si">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>11.</strong>Verificar que se efectuó el engrase general.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_10" id="clp_10" value="Si">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>23.</strong>Verificar funcionamiento de la unidad.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_20" id="clp_20" value="Si">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>12.</strong>Drenar tanque de aire.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_10" id="clp_10" value="Si">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-1">
                                <div class="divCheckList form-group col-10">
                                    <label> <strong>24.</strong>Verificar fugas de combustible.</label>
                                </div>
                                <div class="divCheckList form-group col">
                                    <input type="checkbox" class="checkbox" name="clp_20" id="clp_20" value="Si">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Check List -->

                    <div class="row mt-1">
                        <div class="col-6" style=" padding-left: 0px; ">
                            <div class="row mt-1">
                                <div class="col-8">
                                    <label> <strong>Cantegoria.</strong></label>
                                </div>
                                <div class="col-4">
                                    <label> <strong>Cantidad.</strong></label>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-8">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-8">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-8">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-8">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-8">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-8">
                                    <label> <strong>Maquinaria/Equipo/Herramiento.</strong></label>
                                </div>
                                <div class="col-4">
                                    <label> <strong>#Economico.</strong></label>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-8">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-8">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-8">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-8">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-8">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-8">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-8">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                                </div>
                            </div>

                        </div>
                        <div class="col-6 cardForm" style="padding-right: 0px; ">
                            <div class="row mt-1">
                                <div class="col-7">
                                    <label> <strong>Actividad.</strong></label>
                                </div>
                                <div class="col-5" style="padding-left: 0px; padding-right: 24px;">
                                    <label> <strong>Recurso Asignado.</strong></label>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-7">
                                    <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                                </div>
                                <div class="col-5" style="padding-left: 0px; padding-right: 24px;">
                                    <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-7">
                                    <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                                </div>
                                <div class="col-5" style="padding-left: 0px; padding-right: 24px;">
                                    <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-7">
                                    <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                                </div>
                                <div class="col-5" style="padding-left: 0px; padding-right: 24px;">
                                    <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-7">
                                    <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                                </div>
                                <div class="col-5" style="padding-left: 0px; padding-right: 24px;">
                                    <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-7">
                                    <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                                </div>
                                <div class="col-5" style="padding-left: 0px; padding-right: 24px;">
                                    <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection





<!-- 

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

    <div class="form-group col-12 cardForm">
        <div class="row mt-1">
            <div class="form-group col-1">
                <label for="ordenServicioNumEmpleadoElaboro"><strong>Num:</strong> </label>
                <input type="text" placeholder="000" class="form-control" name="ordenServicioNumEmpleadoElaboro" id="ordenServicioNumEmpleadoElaboro" required>
            </div>
            <div class="form-group col-3">
                <label for="ordenServicioNombreEmpleadoElaboro"><strong>Elabora:</strong> </label>
                <input type="text" placeholder="000" class="form-control" name="ordenServicioNombreEmpleadoElaboro" id="ordenServicioNombreEmpleadoElaboro" required>
            </div>
            <div class="form-group col-2">
                <label for="ordenServicioFechaIngreso"><strong>Categoria:</strong> </label>
                <input type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
            </div>
            <div class="form-group col-2">
                <label for="ordenServicioFechaIngreso"><strong>Num. Eco.:</strong> </label>
                <input value="{{isset($registroReporteActividades->reporteActividadesNumEco)?$registroReporteActividades->reporteActividadesNumEco:''}}" type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
            </div>
            <div class="form-group col-2">
                <label for="ordenServicioFechaIngreso"><strong>Equipo:</strong> </label>
                <input type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
            </div>
            <div class="form-group col-2">
                <label for="ordenServicioFechaIngreso"><strong>Modelo:</strong> </label>
                <input type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
            </div>
        </div>

        <div class="row mt-1">
            <style>
                ul.ks-cboxtags {
                    list-style: none;
                    padding: 0px;
                    margin-bottom: 0px;
                }

                ul.ks-cboxtags li {
                    display: inline;
                }

                ul.ks-cboxtags li label {
                    display: inline-block;
                    background-color: rgba(255, 255, 255, .9);
                    color: black;
                    border-radius: 25px;
                    white-space: nowrap;
                    margin: 3px 0px;
                    -webkit-touch-callout: none;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                    -webkit-tap-highlight-color: transparent;
                    transition: all .2s;
                }

                ul.ks-cboxtags li label {
                    padding: 8px 12px;
                    cursor: pointer;
                }

                ul.ks-cboxtags li label::before {
                    display: inline-block;
                    font-style: normal;
                    font-variant: normal;
                    text-rendering: auto;
                    -webkit-font-smoothing: antialiased;
                    font-family: "Font Awesome 5 Free";
                    font-weight: 900;
                    font-size: 12px;
                    padding: 2px 6px 2px 2px;
                    content: "\f067";
                    transition: transform .3s ease-in-out;
                }

                ul.ks-cboxtags li input[type="checkbox"]:checked+label::before {
                    content: "\f00c";
                    transform: rotate(-360deg);
                    transition: transform .3s ease-in-out;
                }

                ul.ks-cboxtags li input[type="checkbox"]:checked+label {
                    border: 2px solid;
                    background-color: #F77520;
                    color: #fff;
                    transition: all .2s;
                }

                ul.ks-cboxtags li input[type="checkbox"] {
                    display: absolute;
                }

                ul.ks-cboxtags li input[type="checkbox"] {
                    position: absolute;
                    opacity: 0;
                }

                ul.ks-cboxtags li input[type="checkbox"]:focus+label {
                    border: 2px solid #e9a1ff;
                }
            </style>


            <div class=" col-6">
                <label for="ordenServicioFechaIngreso"><strong>Tipo de Actividad:</strong> </label>
                <ul class="ks-cboxtags">
                    <li>
                        <input type="checkbox" id="checkboxOne" value="Rainbow Dash">
                        <label for="checkboxOne">Verificacion.</label>
                    </li>
                    <li>
                        <input type="checkbox" id="checkboxTwo" value="Cotton Candy" checked>
                        <label for="checkboxTwo">Servicio.</label>
                    </li>
                    <li>
                        <input type="checkbox" id="checkboxThree" value="Rarity" checked>
                        <label for="checkboxThree">Manto. Prev.</label>
                    </li>
                    <li>
                        <input type="checkbox" id="checkboxFour" value="Moondancer">
                        <label for="checkboxFour">Manto. Correc.</label>
                    </li>
                </ul>
            </div>

            <div class="col-2">
                <label for="ordenServicioFechaIngreso"><strong>Marca:</strong> </label>
                <input type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
            </div>
            <div class="form-group col-2">
                <label for="ordenServicioFechaIngreso"><strong>Ubicacion:</strong> </label>
                <input type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
            </div>
            <div class="form-group col-2">
                <label for="ordenServicioFechaIngreso"><strong>Nivel Comb.:</strong> </label>
                <input type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
            </div>
        </div>

        <div class="row mt-1">
            <div class="form-group col-6">
                <label for="ordenServicioFechaIngreso"><strong>Diagnostico Final:</strong> </label>
                <input type="text" placeholder="" class="form-control" name="ordenServicioFechaIngreso" id="ordenServicioFechaIngreso" required>
            </div>
            <div class="form-group col-3">
                <label for="ordenServicioKilometraje"><strong>Fecha Entrada:</strong> </label>
                <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
            </div>
            <div class="form-group col-3">
                <label for="ordenServicioKilometraje"><strong>Fecha Salida:</strong> </label>
                <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
            </div>
        </div>
    </div>

    <style>
        .divCheckList {
            margin: 0;
        }

        .checkbox {
            position: relative;
            cursor: pointer;
            appearance: none;
            width: 45px;
            height: 25px;
            border-radius: 10px;
            border: 2px solid red;
            outline: none;
            transition: 0.3s;
        }

        .checkbox::before {
            content: "";
            position: absolute;
            height: 15px;
            width: 15px;
            border-radius: 50%;
            background: red;
            top: 3px;
            left: 4px;
            transition: 0.3s ease-in-out;
        }

        .checkbox:checked::before {
            transform: translateX(18.5px);
            background: green;
        }

        .checkbox:checked {
            border-color: green;
        }
    </style>
    <div class="form-group col-12 cardForm">
        <div class="row mt-1">
            <div class="form-group col-12">
                <label for="ordenServicioKilometraje"><strong>Resultado de la Verificación/Diagnostico inicial:</strong> </label>
                <textarea rows="5" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
            </div>
        </div>
    </div>


    <div class="form-group col-12 cardForm">
        <div class="row mt-1">

            <h3 class="encabezado">Puntos de verificacion del procedimiento de trabajo</h3>
            <div class="form">
                <div class="row mt-1">

                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>1.</strong> Verificación del nivel de aceite de motor.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_1" id="clp_1" value="Si">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>13.</strong> Verificar que todos los instrumentos del tablero sean funcionales.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_11" id="clp_11" value="Si">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-1">

                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>2.</strong>Verificación del estado físico del radiador.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_2" id="clp_2" value="Si">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>14.</strong>Verificar que actúen los frenos de estacionamiento.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_12" id="clp_12" value="Si">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-1">

                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>3.</strong>Limpieza de tapa y colector de polvo de filtro de aire.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_3" id="clp_3" value="Si">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>15.</strong>Verificar las condiciones de alumbrado exterior y tablero.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_13" id="clp_13" value="Si">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-1">

                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>4.</strong>Verificar el nivel de combustible y drenar tanque.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_4" id="clp_4" value="Si">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>16.</strong>Verificar desgaste de elementos del equipo.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_14" id="clp_14" value="Si">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-1">

                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>5.</strong>Verificar el nivel de electrolito y terminales de batería.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_5" id="clp_5" value="Si">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>17.</strong>Verificar tensión de bandas de <strong>tránsito</strong>/<strong>presión</strong> de neumáticos.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_15" id="clp_15" value="Si">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-1">

                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>6.</strong>Verificar tensión y edo. físico de bandas, ventilador y generador.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_6" id="clp_6" value="Si">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>18.</strong>Verificar nivel de aceite del sistema hidráulico.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_16" id="clp_16" value="Si">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-1">

                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>7.</strong>Verificar nivel de aceite de convertidor.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_7" id="clp_7" value="Si">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>19.</strong>Verificar el nivel de la unidad en cambio de ubicación.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_17" id="clp_17" value="Si">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-1">

                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>8.</strong>Verificar nivel de aceite de transmisión .</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_8" id="clp_8" value="Si">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>20.</strong>Verificar tanque repartidor.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_18" id="clp_18" value="Si">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-1">

                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>9.</strong>Verificar nivel de aceite de mandos finales.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_9" id="clp_9" value="Si">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>21.</strong>Verificar llaves de esfera y terminales de garra.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_19" id="clp_19" value="Si">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-1">
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>10.</strong>Verificar nivel de aceite de caja de engranes y cadenas.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_10" id="clp_10" value="Si">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>22.</strong>Verificar fugas de aceite.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_20" id="clp_20" value="Si">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>11.</strong>Verificar que se efectuó el engrase general.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_10" id="clp_10" value="Si">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>23.</strong>Verificar funcionamiento de la unidad.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_20" id="clp_20" value="Si">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>12.</strong>Drenar tanque de aire.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_10" id="clp_10" value="Si">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-1">
                            <div class="divCheckList form-group col-10">
                                <label> <strong>24.</strong>Verificar fugas de combustible.</label>
                            </div>
                            <div class="divCheckList form-group col">
                                <input type="checkbox" class="checkbox" name="clp_20" id="clp_20" value="Si">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="form-group col-12 ">
        <div class="row mt-1">
            <div class="col-6" style=" padding-left: 0px; ">
                <div class="col-12 cardForm">

                    <div class="row mt-1">
                        <div class="col-8">
                            <label> <strong>Cantegoria.</strong></label>
                        </div>
                        <div class="col-4">
                            <label> <strong>Cantidad.</strong></label>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-8">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-8">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-8">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-8">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-8">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                    </div>

                </div>
                <div class="col-12 cardForm" style="margin-top: 15px;">
                    <div class="row mt-1">
                        <div class="col-8">
                            <label> <strong>Maquinaria/Equipo/Herramiento.</strong></label>
                        </div>
                        <div class="col-4">
                            <label> <strong>#Economico.</strong></label>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-8">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-8">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-8">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-8">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-8">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-8">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-8">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                        <div class="col-4">
                            <input type="text" placeholder="000" class="form-control" name="ordenServicioKilometraje" id="ordenServicioKilometraje" required>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-6 cardForm" style="padding-right: 0px; ">
                <div class="row mt-1">
                    <div class="col-7">
                        <label> <strong>Actividad.</strong></label>
                    </div>
                    <div class="col-5" style="padding-left: 0px; padding-right: 24px;">
                        <label> <strong>Recurso Asignado.</strong></label>
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="col-7">
                        <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                    </div>
                    <div class="col-5" style="padding-left: 0px; padding-right: 24px;">
                        <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="col-7">
                        <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                    </div>
                    <div class="col-5" style="padding-left: 0px; padding-right: 24px;">
                        <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="col-7">
                        <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                    </div>
                    <div class="col-5" style="padding-left: 0px; padding-right: 24px;">
                        <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="col-7">
                        <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                    </div>
                    <div class="col-5" style="padding-left: 0px; padding-right: 24px;">
                        <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-7">
                        <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
                    </div>
                    <div class="col-5" style="padding-left: 0px; padding-right: 24px;">
                        <textarea rows="4" class="form-control" placeholder="Descripcion" id="ordenServicioDescripcion" name="ordenServicioDescripcion"></textarea>
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
    </div>

</div>

 -->