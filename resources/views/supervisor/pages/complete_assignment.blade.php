@extends("supervisor.layouts.defult")

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Group name: <strong>{{ $group->name }}</strong> </h5>
                <p>&nbsp;</p>
                <h6>Students</h6>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="align-middle text-center text-sm">ID</th>
                                <th class="align-middle text-center text-sm">Name</th>
                                <th class="align-middle text-center text-sm">Email</th>
                                <th class="align-middle text-center text-sm">Contact</th>
                                <th class="align-middle text-center text-sm">Batch</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $s)
                                <tr>
                                    <td class="align-middle text-center text-sm">{{ $s->std_ID }}</td>
                                    <td class="align-middle text-center text-sm">{{ $s->name }}</td>
                                    <td class="align-middle text-center text-sm">{{ $s->email }}</td>
                                    <td class="align-middle text-center text-sm">{{ $s->contact_no }}</td>
                                    <td class="align-middle text-center text-sm">{{ $s->batch }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <h6>Assignments</h6>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="align-middle text-center text-sm">Name</th>
                                <th class="align-middle text-center text-sm">Question</th>
                                <th class="align-middle text-center text-sm">Attachment</th>
                                <th class="align-middle text-center text-sm">Due</th>
                                <th class="align-middle text-center text-sm">Ans</th>
                                <th class="align-middle text-center text-sm">Sumbitted At</th>
                                <th class="align-middle text-center text-sm">Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assignment as $u)
                                <tr>
                                    <td class="align-middle text-center text-sm">{{ $u->name }}</td>
                                    <td class="align-middle text-center text-sm">{{ $u->ques }}</td>
                                    <td class="align-middle text-center text-sm">{{ $u->attachment }}</td>
                                    <td class="align-middle text-center text-sm">{{ $u->due }}</td>
                                    <td class="align-middle text-center text-sm">{{ $u->ans }}</td>
                                    <td class="align-middle text-center text-sm">{{ $u->submission }}</td>
                                    <td class="align-middle text-center text-sm">{{ $u->grade }}</td>
                                    <td><a href="{{ url('/assignment_info/' . $u->id) }}" class="btn btn-info btn-m"
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
