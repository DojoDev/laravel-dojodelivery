

<div class="form-group">
    {!! Form::label('Name', 'Name Client:') !!}
    {!! Form::text('user[name]', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Email', 'E-mail:') !!}

    {!! Form::text('user[email]', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Phone', 'Phone Number:') !!}
    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Address', 'Your Address:') !!}
    {!! Form::textarea('address', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('City', 'Your City:') !!}
    {!! Form::text('city', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('State', 'Your State:') !!}
    {!! Form::text('state', null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('Code Post', 'Your Code Post:') !!}
    {!! Form::text('zipcode', null, ['class'=>'form-control']) !!}
</div>

