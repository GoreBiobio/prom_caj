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
                            <th>Monto Asignado</th>
                            <th>Monto Rendido</th>
                            <th>% de Planificación</th>
                            <th style="width: 40px">Acciones</th>
                        </tr>

                        <tr>
                            <td>3057081</td>
                            <td>Adquisición de camiones aljibe</td>
                            <td>$ 22 MM</td>
                            <td>$ 22 MM</td>
                            <td>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar progress-bar-success" style="width: 100%">
                                        <span class="badge bg-red">100%</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-warning btn-xs" disabled>Archivo</button>
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
