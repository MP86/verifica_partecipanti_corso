<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('surname', 'Surname') !!}
	{!! Form::text('surname', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('phone_number', 'Phone number') !!}
	{!! Form::text('phone_number', ['class' => 'form-control']) !!}
</div>

