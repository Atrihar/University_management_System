@extends('admin.layouts.defult')

@section('content')
    <div class="card mb-4">

        <div class="card-header">
            <strong>Unassigned project groups</strong>
        </div>

        <div class="card-body">

            <div class="example">

                <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1019">

                        <table class="table">

                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Supervisor</th>
                                    <th scope="col">Project Name</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($group as $g)
                                    <tr>
                                        <td>{{ $g->name }}</td>
                                        <td>{{ $g->instructor_id }}</td>
                                        <td>{{ $g->project_name }}</td>
                                        <td><a href="{{ url('/assign_instructor/' . $g->id) }}" class="btn btn-info btn-sm"
                                                role="button">Edit</a></td>
                                        <td><a href="{{ url('/delete_group/' . $g->id) }}" class="btn btn-danger btn-sm"
                                                role="button">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
