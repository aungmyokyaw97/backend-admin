
<div class="col-sm-2">
    {!! Form::label('id', 'Id:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $user->staff->id }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('name', 'Name:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $user->staff->name }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('phone', 'Phone:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $user->staff->mobile }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('email', 'Email:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $user->staff->email }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('code', 'Code:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $user->staff->code }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('position', 'Position:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $user->staff->position }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('age', 'Age:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $user->staff->age }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('gender', 'Gender:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $user->staff->gender }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('join_date', 'Join Date:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $user->staff->join_date }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('created_by', 'Created By:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $user->staff->created_by }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('updated_by', 'Updated By:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $user->staff->updated_by }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('department', 'Department:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $user->staff->department->name }}</p>
</div>



<div class="col-sm-2">
    {!! Form::label('role', 'Role:') !!}
</div>
<div class="col-sm-10">
    <p>
        @foreach($user->roles as $row)
            <span class="badge badge-pill badge-info">{{ $row->name }}</span>
        @endforeach
    </p>
</div>

<div class="col-sm-2">
    {!! Form::label('name', 'Login Name:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $user->name }}</p>
</div>

<div class="col-sm-2">
    {!! Form::label('email', 'Login Email:') !!}
</div>
<div class="col-sm-10">
    <p>{{ $user->email }}</p>
</div>

