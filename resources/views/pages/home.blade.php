@extends('layouts.app')

@section('content')
	@include('sections.banner-carousel')
	@include('sections.call-to-action-box')
	@include('sections.features')
	@include('sections.facts')
	@include('sections.service-area')
	@include('sections.project-area')
{{--	@include('sections.content')--}}
	@include('sections.subscribe')
{{--	@include('sections.news')--}}
@endsection