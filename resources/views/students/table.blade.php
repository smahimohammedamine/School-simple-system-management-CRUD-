@if (isset($data) && count($data) > 0)
    @foreach ($data as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->address }}</td>
            <td><img src="{{ asset('uploads/' . $student->image) }}" alt="" srcset="" height="50px" width="50px">
            </td>
            <td>{{ $student->notes }}</td>
            <td><span class="tag tag-success">
                    @if ($student->active)
                        Active
                    @else
                        Inactive
                    @endif
                </span></td>

            <td>
                <a href=" {{ route('students.edit', $student->id) }} " class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('students.delete', $student->id) }}" method="POST" style="display:inline">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="8" style="text-align: center; color:rgb(212, 21, 21);">Data Not Found</td>
    </tr>
@endif
