@extends('app')


@section('content')


<h1>
{{ $volunteerRaker->FirstName  }}
{{ $volunteerRaker->LastName }}
</h1>
email: {{ $volunteerRaker->Email }} 

@stop