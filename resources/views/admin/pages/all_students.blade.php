@extends('admin.layouts.defult')

@section('content')
    <div class="card mb-4">

        <div class="card-header">
            <strong>All Students</strong>
        </div>

        <div class="card-body">

            <div class="example">

                <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1019">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Batch</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact no</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $s)
                                    <tr>
                                        <td>{{ $s->std_ID }}</td>
                                        <td>{{ $s->name }}</td>
                                        <td>{{ $s->batch }}</td>
                                        <td>{{ $s->email }}</td>
                                        <td>{{ $s->contact_no }}</td>
                                        <td>
                                            @if ($s->is_approved == 0)
                                                <a href="{{ url('admin/approve/' . $s->id) }}">Approve</a>
                                            @else
                                                <label>Approved</label>
                                            @endif
                                        </td>
                                        <td><a href="{{ url('/edit_student/' . $s->id) }}" class="btn btn-primary btn-sm" role="button">Edit</a></td>
                                        <td><a href="{{ url('/delete_student/' . $s->id) }}" class="btn btn-danger btn-sm" role="button">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
