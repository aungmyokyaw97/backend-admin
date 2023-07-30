@push('third_party_stylesheets')
    @include('backend.layouts.datatables_css')
@endpush

{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered dt-responsive']) !!}

@push('third_party_scripts')
    @include('backend.layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endpush