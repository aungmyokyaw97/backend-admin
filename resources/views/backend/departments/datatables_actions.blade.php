{!! Form::open(['route' => ['departments.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    @can('view-department')
        <a href="{{ route('departments.show', $id) }}" class='btn btn-success btn-xs' title="Show">
            <i class="fa fa-eye"></i>
        </a>
    @endcan

    @can('edit-department')
        <a href="{{ route('departments.edit', $id) }}" class='btn btn-warning btn-xs' title="Edit">
            <i class="fa fa-edit"></i>
        </a>
    @endcan

    @can('delete-department')
        {!! Form::button('<i class="fa fa-trash"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-danger btn-xs',
            'title' => 'Delete',
            'onclick' => "return confirm('Are you sure?')"
        ]) !!}
    @endcan
    
</div>
{!! Form::close() !!}
