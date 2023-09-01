@extends('admin.layouts.defult')

@section('content')
    <div class="card mb-4">

        <div class="card-header">
            <h5 class="card-title">Group name: <strong>{{ $group->name }}</strong> </h5>
                <p>&nbsp;</p>
                <h6>Students</h6>
            {{-- <span class="small ms-1">Table head</span> --}}
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
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Batch</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($student as $s)
                                    <tr>
                                        <td>{{ $s->std_ID }}</td>
                                        <td>{{ $s->name }}</td>
                                        <td>{{ $s->email }}</td>
                                        <td>{{ $s->contact_no }}</td>
                                        <td>{{ $s->batch }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

                    <p>&nbsp;</p>
                <p>&nbsp;</p>
                <h6>Assignments</h6>

                <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1019">

                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Attachment</th>
                                    <th scope="col">Due</th>
                                    <th scope="col">Ans</th>
                                    <th scope="col">Sumbitted At</th>
                                    <th scope="col">Grade</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($assignment as $u)
                                    <tr>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->ques }}</td>
                                        <td>{{ $u->attachment }}</td>
                                        <td>{{ $u->due }}</td>
                                        <td>{{ $u->ans }}</td>
                                        <td>{{ $u->submission }}</td>
                                        <td>{{ $u->grade }}</td>
                                        <td><a href="{{ url('/assignment_information/' . $u->id) }}" class="btn btn-info btn-m"
                                            role="button">view</a></td>

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
