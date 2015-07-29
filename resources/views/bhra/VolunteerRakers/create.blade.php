@extends('app')


@section('content')
<h1>Write a new article</h1>
<hr/>

{!! Form::open(['url'=>'volunteerraker']) !!}

<div class="form-group">
  {!! Form::label('firstname', 'First Name:')  !!}
  {!! Form::text('firstname', 'foo', ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('lastname', 'Last Name:');  !!}
  {!! Form::text('lastname', 'bar', ['class'=>'form-control']) !!}
</div>


<div class="form-group">
  {!! Form::label('email', 'Email:');  !!}
  {!! Form::textarea('email', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Add Article', ['class'=>'btn btn-primary form-control']) !!}


{!! Form::close() !!}
@stop

