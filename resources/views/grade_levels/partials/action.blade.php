<a href="{{ route('grade_levels.edit', $data->id) }}" class="btn btn-primary btn-sm">Edit</a>
<a href="{{ route('grade_levels.delete', $data->id) }}"
    onclick="return confirm('are you sure you want to delete this item?')" class="btn btn-danger btn-sm">Delete</a>