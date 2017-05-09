@extends('backend/layout/layout')
@section('content')
{!! HTML::script('highcharts/highcharts.js') !!}
{!! HTML::script('highcharts/exporting.js') !!}
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
<!-- Main content -->
<div class="row">
  <div class="col-md-4 col-md-offset-1">
    <!-- Widget: user widget -->
    <div class="box box-widget widget-user-2">
      <div class="widget-user-header bg-yellow">
        <div class="widget-user-image">
          <img class="img-circle" src="{!! gravatarUrl(Sentinel::getUser()->email) !!}" alt="User Avatar">
        </div>
        <!-- /.widget-user-image -->
        <h3 class="widget-user-username">{{ Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name }}</h3>
        <h5 class="widget-user-desc">Lead Developer</h5>
      </div>
      <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
          <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
          <li><a href="#">Artilces <span class="pull-right badge bg-aqua">5</span></a></li>
          <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
          <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
        </ul>
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
</div>
</section>

@stop
