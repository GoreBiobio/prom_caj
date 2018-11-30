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
        <div class="col-md-4">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Inicio de Proceso Planificación Presupuestaria</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="/Planificacion/Gestion">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label"><strong>Código BIP</strong></label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="000000">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Cancelar</button>
                        <button type="submit" class="btn btn-success pull-right">Iniciar Proceso</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>

@endsection
