@extends('student.layouts.defult')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">

                <div class="card-header pb-0">
                    <h6>Group Name: {{ $group_name[0]->name }} </h6>
                    <div class="text-uppercase text-secondary text-sm font-weight-bolder">Supervisor: {{ $t_name[0]->tname }}
                    </div>
                </div>

                <p>&nbsp;</p>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">

                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="align-middle text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        ID</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Email</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Contact No</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Batch</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($student_info as $s)
                                    <tr>
                                        <td class="align-middle text-center text-sm font-weight-bold mb-0">
                                            {{ $s->std_ID }}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $s->name }}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $s->email }}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $s->contact_no }}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $s->batch }}
                                        </td>

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
