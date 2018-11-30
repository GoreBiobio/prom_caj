@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <div class="callout callout-warning">
        <h4>Atención del Usuario!</h4>
        Usted esta a punto de asignarse un proyecto mediante código BIP. Si tiene dudas favor contáctenos a <a
            href="mailto:soporte@gorebiobio.cl">soporte@gorebiobio.cl</a> o al teléfono +56 41 - 2405 766.
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-folder-open"></i> Grilla de Gestión de Planificaciones
                        Presupuestarias</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-condensed">
                        <tbody>
                        <tr>
                            <th style="width: 10px">BIP</th>
                            <th>Nombre Proyecto</th>
                            <th>Costo Total Proyecto</th>
                            <th>Monto Programado</th>
                            <th>% de Cumplimiento (Programado / Gastado)</th>
                            <th style="width: 40px">Acciones</th>
                        </tr>
                        <tr>
                            <td>3000025</td>
                            <td>Renovación de Cesped MultiCancha Los Torreones</td>
                            <td>$ 55 MM</td>
                            <td>$ 25 MM</td>
                            <td>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar progress-bar-primary" style="width: 55%">
                                        <span class="badge bg-red">55%</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="/Planificacion/Gestion">
                                    <button type="button" class="btn btn-block btn-primary btn-xs">Planificación
                                    </button>
                                </a></td>
                        </tr>

                        <tr>
                            <td>3054001</td>
                            <td>Remodelación de techumbre sede Unión Comunal</td>
                            <td>$ 15 MM</td>
                            <td>$ 5 MM</td>
                            <td>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar progress-bar-warning" style="width: 33%">
                                        <span class="badge bg-red">33%</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="/Planificacion/Gestion">
                                    <button type="button" class="btn btn-block btn-primary btn-xs">Planificación
                                    </button>
                                </a></td>
                        </tr>

                        <tr>
                            <td>3057081</td>
                            <td>Adquisición de maquinarias para mantención de caminos</td>
                            <td>$ 88 MM</td>
                            <td>$ 75 MM</td>
                            <td>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar progress-bar-success" style="width: 86%">
                                        <span class="badge bg-red">86%</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="/Planificacion/Gestion">
                                    <button type="button" class="btn btn-block btn-primary btn-xs">Planificación
                                    </button>
                                </a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>

@endsection
