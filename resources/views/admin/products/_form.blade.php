

<div class="form-group">
    {!! Form::label('Category', 'Category:', ['class'=>'exampleInputEmail'])  !!}
    {!! Form::select('category_id', $categories,  ['class:'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('Name', 'Product Name:', ['class'=>'exampleInputEmail'])  !!}
    {!! Form::text('name', null, ['class:'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('Description', 'Description:', ['class'=>'exampleInputEmail']) !!}
    {!! Form::textarea('description', null, ['class:'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Price', 'Price:', ['class'=>'exampleInputEmail'])  !!}
    {!! Form::text('price', null, ['class:'=>'form-control']) !!}
</div>
