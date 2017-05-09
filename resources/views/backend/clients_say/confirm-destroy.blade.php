@extends('backend/layout/layout')
@section('content')
<section class="content-header">
    <h1> Clients Say
        <small> | Delete Quotation</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! langRoute('admin.slider.index') !!}"><i class="fa fa-dashboard"></i> Clients Say</a></li>
        <li class="active">Delete Quotation</li>
    </ol>
</section>
<br>
<br>
<br>
<div class="col-lg-10">
    {!! Form::open( array(  'route' => array(getLang(). '.admin.clients-say.destroy', $quotation->id ) ) ) !!}
    {!! Form::hidden( '_method', 'DELETE' ) !!}
    <div class="alert alert-warning">
        <div class="pull-left"><b> Be Careful!</b> Are you sure you want to delete this quotation? <br/> <b>{!! $quotation->content !!} <small>{!! $quotation->name !!}</small> </b> ?
        </div>
        <div class="pull-right">
            {!! Form::submit( 'Yes', array( 'class' => 'btn btn-danger' ) ) !!}
            {!! link_to( URL::previous(), 'No', array( 'class' => 'btn btn-primary' ) ) !!}
        </div>
        <div class="clearfix"></div>
    </div>
    {!! Form::close() !!}
</div>
@stop
