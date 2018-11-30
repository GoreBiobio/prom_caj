@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <div class="callout callout-warning">
        <h4>Atención del Usuario!</h4>
        Gestión de la Planificación Presupuestaria. Si tiene dudas favor contáctenos a <a
            href="mailto:soporte@gorebiobio.cl">soporte@gorebiobio.cl</a> o al teléfono +56 41 - 2405 766.
    </div>

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>$ 230 MM</h3>
                    <p>Monto del Proyecto</p>
                </div>
                <div class="icon">
                    <i class="fa fa-money"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Total Planificado</p>
                </div>
                <div class="icon">
                    <i class="fa fa-percent"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>$ 136 MM</h3>

                    <p>Monto Planificado</p>
                </div>
                <div class="icon">
                    <i class="fa fa-check-circle-o"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>3005825</h3>

                    <p>Código BIP</p>
                </div>
                <div class="icon">
                    <i class="fa fa-folder-open"></i>
                </div>
            </div>
        </div>
    </div>


    <section class="invoice">
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                <address>
                    <strong>BIP: </strong>3005825<br>
                    <strong>Proyecto: </strong>Renovación de Cesped MultiCancha Los Torreones<br>
                    <strong>Comuna: </strong>Concepción
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row invoice-info">
            <center>
                <button type="button" class="btn btn-warning btn-sm">Revisar 2017</button>
                --
                <button type="button" class="btn btn-success btn-sm">Programar 2019</button>
            </center>
        </div>
        <!-- Table row -->
        <div class="row">
            <div class="col-xs-6 table-responsive">
                <table class="table table-striped">
                    <center><h3>PRIMER SEMESTRE 2018</h3></center>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>MES</th>
                        <th>TIPO</th>
                        <th>MONTO PROGRAMADO</th>
                        <th>MONTO GASTADO</th>
                        <th>ACCIÓN</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01</td>
                        <td>ENERO</td>
                        <td>COMPRA</td>
                        <td>11 MM</td>
                        <td>0 MM</td>
                        <td>
                            <button type="button" class="btn btn-block btn-primary btn-xs" disabled>Solicitar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>FEBRERO</td>
                        <td>COMPRA</td>
                        <td>2 MM</td>
                        <td>0 MM</td>
                        <td>
                            <button type="button" class="btn btn-block btn-primary btn-xs" disabled>Solicitar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>MARZO</td>
                        <td>COMPRA</td>
                        <td>3 MM</td>
                        <td>0 MM</td>
                        <td>
                            <button type="button" class="btn btn-block btn-primary btn-xs" disabled>Solicitar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>ABRIL</td>
                        <td>COMPRA</td>
                        <td>0 MM</td>
                        <td>0 MM</td>
                        <td>
                            <button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">Solicitar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>MAYO</td>
                        <td>COMPRA</td>
                        <td>0 MM</td>
                        <td>0 MM</td>
                        <td>
                            <button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">Solicitar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>06</td>
                        <td>JUNIO</td>
                        <td>COMPRA</td>
                        <td>0 MM</td>
                        <td>0 MM</td>
                        <td>
                            <button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">Solicitar</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-6 table-responsive">
                <table class="table table-striped">
                    <center><h3>SEGUNDO SEMESTRE 2018</h3></center>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>MES</th>
                        <th>TIPO</th>
                        <th>MONTO PROGRAMADO</th>
                        <th>MONTO GASTADO</th>
                        <th>ACCIÓN</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>07</td>
                        <td>JULIO</td>
                        <td>COMPRA</td>
                        <td>0 MM</td>
                        <td>0 MM</td>
                        <td>
                            <button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">Solicitar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>08</td>
                        <td>AGOSTO</td>
                        <td>COMPRA</td>
                        <td>0 MM</td>
                        <td>0 MM</td>
                        <td>
                            <button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">Solicitar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>09</td>
                        <td>SEPTIEMBRE</td>
                        <td>COMPRA</td>
                        <td>0 MM</td>
                        <td>0 MM</td>
                        <td>
                            <button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">Solicitar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>OCTUBRE</td>
                        <td>COMPRA</td>
                        <td>0 MM</td>
                        <td>0 MM</td>
                        <td>
                            <button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">Solicitar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>NOVIEMBRE</td>
                        <td>COMPRA</td>
                        <td>0 MM</td>
                        <td>0 MM</td>
                        <td>
                            <button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">Solicitar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>DICIEMBRE</td>
                        <td>COMPRA</td>
                        <td>0 MM</td>
                        <td>0 MM</td>
                        <td>
                            <button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">Solicitar</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <p class="lead">Años Anteriores</p>

                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th style="width:50%">Remanente:</th>
                            <td>$ 5.30 MM</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-6">
                <p class="lead">Año Actual</p>

                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th style="width:50%">Remanente:</th>
                            <td>$0 MM</td>
                        </tr>
                        <tr>
                            <th>Año Actual</th>
                            <td>$16 MM</td>
                        </tr>
                        <tr>
                            <th>Pendiente:</th>
                            <td>$78 MM</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>$152 MM</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="#" target="_blank" class="btn btn-default"><i class="fa fa-print"></i>
                    Imprimir Ficha</a>
                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> Generar PDF
                </button>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Enviar Planificación Presupuestaria</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Monto a Presupuestar</label>
                                <input type="number" class="form-control" min="1" step="0.1" id="exampleInputEmail1" placeholder="Monto en MM">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Enviar Información</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection
