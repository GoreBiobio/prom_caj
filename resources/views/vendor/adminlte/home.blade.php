@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    @extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>$ 230 MM</h3>
                    <p>Total de Proyectos</p>
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
                    <h3>2</h3>

                    <p>N° de Proyectos</p>
                </div>
                <div class="icon">
                    <i class="fa fa-folder-open"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
    </div>

@endsection


@endsection
