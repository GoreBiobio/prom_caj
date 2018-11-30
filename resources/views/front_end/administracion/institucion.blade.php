@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <div class="callout callout-warning">
        <h4>Atención del Usuario!</h4>
        Usted esta a punto de modificar datos de la Institución. Si tiene dudas favor contáctenos a <a
            href="mailto:soporte@gorebiobio.cl">soporte@gorebiobio.cl</a> o al teléfono +56 41 - 2405 766.
    </div>

    <div class="row">
        <div class="col-md-4">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Datos de la Institución</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label"><strong>RUT:</strong></label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="98.000.000-6" id="inputPassword3" placeholder="000000" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label"><strong>Institución</strong></label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="I. Municipalidad de Concepción" id="inputPassword3" placeholder="">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Cancelar</button>
                        <button type="submit" class="btn btn-info pull-right">Guardar Información</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <!-- Horizontal Form -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Datos del Funcionario</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label"><strong>RUT:</strong></label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="18.000.000-K" id="inputPassword3" placeholder="000000">
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label"><strong>Nombre</strong></label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="José Perez Alarcón" id="inputPassword3" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label"><strong>Correo</strong></label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="jperez@concepcion.cl" id="inputPassword3" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label"><strong>Teléfono</strong></label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="966550015" id="inputPassword3" placeholder="">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Cancelar</button>
                        <button type="submit" class="btn btn-success pull-right">Guardar Información</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>

@endsection
