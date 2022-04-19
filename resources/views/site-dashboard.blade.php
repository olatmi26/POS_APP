@extends('layouts.master-dashboard')
@section('bgclass', 'hold-transition sidebar-mini layout-navbar-fixed layout-fixed')
@section('content')
    @livewire('dashboard-operation-summary')
    @livewire('sales-chart')
    @livewire('recent-product')
@endsection