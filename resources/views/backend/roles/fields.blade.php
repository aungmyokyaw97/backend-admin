<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('label', 'Label:') !!}
    {!! Form::text('label', null, ['class' => 'form-control']) !!}
</div>

<div>
<h5>Choose Permissions</h5>
</div>
<br><br>

<div class="row col-sm-12 text-center">

    @foreach($permissions as $key => $value)
    <div class="form-group col-sm-4">
        {!! Form::checkbox('permission['.$key.']',false, in_array($key, $selected),['id' => 'permission_'.$key]) !!}
        {!! Form::label('permission_'.$key, $value) !!}
    </div>
    @endforeach
</div>