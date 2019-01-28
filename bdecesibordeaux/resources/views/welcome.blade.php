@extends('layouts.app')
<html>
<body>
	@if(checkPermission(['superAdmin'])))
	<a href="{{('stat')}}"> Changer le status</a>
	@endif
    @section('content')
    @include('goodiesDuMois')
    @include('eventDuMois')
    @include('cookie')
    @endsection
</body>
</html>