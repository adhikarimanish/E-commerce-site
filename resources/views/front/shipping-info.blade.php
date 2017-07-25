@extends('layout.main')

@section('content')

<h3 align="center">Shipping-info</h3>

<div class="row">

<div class="small-6 small-centered columns" >

{!! Form::open(['route' => 'address.store','method' => 'POST']) !!}

<div class="form-group">

{{Form::label('addressline','Address Line')}}

{{Form::text('addressline',null,array('class' => 'form control'))}}
</div>

<div class="form-group">

{{Form::label('city','City')}}

{{Form::text('city',null,array('class' => 'form control'))}}
</div>

<div class="form-group">

{{Form::label('state','State')}}

{{Form::text('state',null,array('class' => 'form control'))}}
</div>

<div class="form-group">

{{Form::label('zip','Zip')}}

{{Form::text('zip',null,array('class' => 'form control'))}}
</div>

<div class="form-group">

{{Form::label('country','Country')}}

{{Form::text('country',null,array('class' => 'form control'))}}
</div>

<div class="form-group">

{{Form::label('phone','Phone')}}

{{Form::text('phone',null,array('class' => 'form control'))}}
</div>

{{Form::submit('Proceed to Payment',array('class'=>'button success'))}}

{!! Form::close() !!}
</div>
</div>


@endsection