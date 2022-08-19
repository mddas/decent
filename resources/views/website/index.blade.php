@extends('layouts.master')
@section('slider')
	@include("website.slider")
@endsection
@section('content')
	@include('website.top-section')
	@include('website.about')
	@include('website.service')
	@include('website.job_list')
	@include('website.partner')
@endsection