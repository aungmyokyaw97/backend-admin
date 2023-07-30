<div class="col-sm-1">
    {!! Form::label('id', 'Id:') !!}
</div>
<div class="col-sm-11">
    <p>{{ $department->id }}</p>
</div>

<div class="col-sm-1">
    {!! Form::label('name', 'Name:') !!}
</div>
<div class="col-sm-11">
    <p>{{ $department->name }}</p>
</div>

<div class="col-sm-1">
    {!! Form::label('label', 'Label:') !!}
</div>
<div class="col-sm-11">
    <p>{{ $department->label }}</p>
</div>

<div class="col-sm-1">
    {!! Form::label('created_at', 'Created At:') !!}
</div>
<div class="col-sm-11">
    <p>{{ $department->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-1">
    {!! Form::label('updated_at', 'Updated At:') !!}
</div>
<div class="col-sm-11">
    <p>{{ $department->updated_at }}</p>
</div>

