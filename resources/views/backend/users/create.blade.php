@extends('backend.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Users</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('backend.common.errors')

        <div class="card">

            {!! Form::open(['route' => 'users.store']) !!}

            <div class="card-body">
                <div class="row">
                    @include('backend.users.fields')
                </div>
            </div>

           
            <div class="card-footer">
                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
            </div>
            
            {!! Form::close() !!}

        </div>
    </div>
@endsection

@push('scripts')
<script>
    // Select2 Multiple
    $('#permission').select2({
        placeholder: "Select Permissions",
        allowClear: true
    });
</script>
@endpush