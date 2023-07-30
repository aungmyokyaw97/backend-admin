{!! Form::open(['route' => ['roles.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
        @can('view-role')
        <a href="{{ route('roles.show', $id) }}" class='btn btn-success btn-xs' title="Show">
            <i class="fa fa-eye"></i>
        </a>
        @endcan

        @can('edit-role')
        <a href="{{ route('roles.edit', $id) }}" class='btn btn-warning btn-xs' title="Edit">
            <i class="fa fa-edit"></i>
        </a>
        @endcan

        @can('delete-role')
        {!! Form::button('<i class="fa fa-trash"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-danger btn-xs',
            'title' => 'Delete',
            'onclick' => "return confirm('Are you sure?')"
        ]) !!}
        @endcan
</div>
{!! Form::close() !!}
