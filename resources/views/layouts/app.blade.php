<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>
<div class="body-inner">
@section('top-bar')
		@include('layouts.components.top-bar')
@endsection

@include('layouts.components.header')
	
@yield('content')

<x-footer/>
</div><!-- Body inner end -->
@include('layouts.includes.javascript')
</body>

</html>