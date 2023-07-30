@extends('backend.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit User</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('backend.common.errors')

        <div class="card">
           
                {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}

                <div class="card-body">
                    <div class="row">
                        @include('backend.roles.fields')
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
