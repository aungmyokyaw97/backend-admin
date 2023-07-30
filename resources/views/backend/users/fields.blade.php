<div class="row col-sm-12">

    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Staff Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Staff Email:') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('code', 'Code:') !!}
        {!! Form::text('code', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('mobile', 'Mobile:') !!}
        {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('position', 'Position:') !!}
        {!! Form::text('position', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('age', 'Age:') !!}
        {!! Form::text('age', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('gender', 'Gender:') !!}
        {!! Form::select('gender', config('cms.user.gender'), null, ['class' => 'form-control', 'placeholder' => 'Select Gender']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('department_id', 'Department:') !!}
        {!! Form::select('department_id', $departments, null, ['class' => 'form-control', 'placeholder' => 'Select Department']) !!}
    </div>

</div>

<div class="row col-sm-12 box">

    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Login Name:') !!}
        {!! Form::text('login_name', isset($user) ? $user->name : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Login Email:') !!}
        {!! Form::text('login_email', isset($user) ? $user->email : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('roles', 'Roles:') !!}
        {!! Form::select('roles[]', $roles, isset($user) ? $user->selectedRole : null, ['class' => 'form-control','id' => 'permission','multiple' => 'multiple']) !!}
    </div>
</div>



