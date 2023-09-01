@extends('admin.layouts.defult')

@section('content')
    <div class="card mb-4">

        <div class="card-header">
            <h6>On Going Groups</h6>
            {{-- <span class="small ms-1">Table head</span> --}}
        </div>

        <div class="card-body">

            <div class="example">

                <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1019">

                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Started</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($group as $g)
                                    <tr>
                                        <td>{{ $g->name }}</td>
                                        <td>{{ $g->project_name }}</td>
                                        <td>{{ $g->created_at }}</td>

                                        <td><a href="{{ url('/running_group_information/' . $g->id) }}"
                                                class="btn btn-primary btn-sm" role="button">Info</a></td>
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
