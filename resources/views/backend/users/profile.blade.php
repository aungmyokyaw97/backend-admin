@extends('backend.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Profile</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('backend.common.errors')
        @include('flash::message')

        <div class="card">
                {!! Form::model($user->staff, ['route' => ['profile.update', $user->id], 'method' => 'patch']) !!}

                <div class="card-body">
                    <div class="row">
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
                        </div>

                    </div>
                </div>

                <div class="card-footer">
                    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
                </div>
                {!! Form::close() !!}
        </div>
    </div>
@endsection
