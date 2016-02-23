@extends('layouts.resumelayout')
@section('content')
	@if($page == 'resume')
		@include('pages.resume.resume')
	@endif
	
@endsection
