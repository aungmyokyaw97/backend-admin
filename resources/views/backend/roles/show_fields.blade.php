<div class="col-sm-2">
    {!! Form::label('id', 'Id:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $role->id }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('name', 'Name:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $role->name }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('lable', 'Label:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $role->label }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('slug', 'Slug:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $role->slug }}</p>
</div>



<div class="col-sm-2">
    {!! Form::label('permission', 'Permissions:') !!}
</div>
<div class="col-sm-10">
    <p>
        @foreach($role->permissions as $row)
            <span class="badge badge-pill badge-info">{{ $row->name }}</span>
        @endforeach
    </p>
</div>

<div class="col-sm-2">
    {!! Form::label('created_at', 'Created At:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $role->created_at }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('updated_at', 'Updated At:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $role->updated_at }}</p>
</div>

