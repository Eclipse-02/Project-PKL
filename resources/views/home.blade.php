@extends('dashboard.master')

@section('title', 'Dashboard')

@section('content')
    <!--begin::Page title-->
    <div class="page-title me-3 mb-5">
        <!--begin::Title-->
        <h1 class="d-flex align-items-center fw-light text-dark fs-2x my-1">Welcome Back,<span class="fw-bolder ms-1">{{ auth()->user()->name }}</span></h1>
        <!--begin::Description-->
        <small class="text-muted fs-7 fw-bold my-1 ms-1">You are logged in as {{ auth()->user()->roles->first()->display_name }}</small>
        <!--end::Description-->
        <!--end::Title-->
    </div>
@endsection
