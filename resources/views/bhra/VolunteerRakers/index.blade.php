@extends('app')

@section('content')

<h1>VolunteerRakers</h1>

@foreach ($volunteerRakers as $volunteerRaker)
<article>
<h2>

<!--
<a href="volunteerraker/{{ $volunteerRaker->id  }}">
{{  $volunteerRaker->FirstName }}
{{  $volunteerRaker->LastName }}
</a>
-->
  
<!--
<a href="{{ url('/volunteerraker', $volunteerRaker->id) }}">
{{  $volunteerRaker->FirstName }}
{{  $volunteerRaker->LastName }}
-->
      
  
<a href="{{ action('VolunteerRakersController@show', [$volunteerRaker->id]) }}">
{{  $volunteerRaker->FirstName }}
{{  $volunteerRaker->LastName }}
{{  $volunteerRaker->email }}
</a>


  

</h2>
<div class="body"> {{ $volunteerRaker->Email }} </div>
</article>
    @endforeach
    
@stop