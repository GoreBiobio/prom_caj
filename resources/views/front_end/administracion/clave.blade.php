@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <div class="callout callout-warning">
        <h4>Atención del Usuario!</h4>
        Usted esta a punto de cambiar la clave de acceso. Si tiene dudas favor contáctenos a <a
            href="mailto:soporte@gorebiobio.cl">soporte@gorebiobio.cl</a> o al teléfono +56 41 - 2405 766.
    </div>

    <div class="row">
        <div class="col-md-4">
            <!-- Horizontal Form -->
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Mantenedor de Contraseña de Acceso</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label"><strong>Clave Antigua</strong></label>

                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label"><strong>Nueva Clave</strong></label>

                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label"><strong>Repetir Nueva Clave</strong></label>

                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Cancelar</button>
                        <button type="submit" class="btn btn-success pull-right">Cambiar Contraseña</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>

@endsection
