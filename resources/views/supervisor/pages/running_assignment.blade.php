@extends('supervisor.layouts.defult')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>On Going Groups</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">

                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="align-middle text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th
                                        class="align-middle text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        Question</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Attachment</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Due</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Ans</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Sumbitted</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Grade</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($assignment as $u)
                                    <tr>
                                        <td class="align-middle text-center text-sm font-weight-bold mb-0">
                                            {{ $u->name }}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $u->ques }}
                                        </td>
                                        <td class="align-middle text-center">
                                            {{ $u->attachment }}
                                        </td>
                                        <td class="align-middle text-center">
                                            {{ $u->due }}
                                        </td>
                                        <td class="align-middle text-center">
                                            {{ $u->ans }}
                                        </td>
                                        <td class="align-middle text-center">
                                            {{ $u->submission }}
                                        </td>
                                        <td class="align-middle text-center">
                                            {{ $u->grade }}
                                        </td>
                                        <td><a href="{{ url('/assignment_info/' . $u->id) }}" class="btn btn-info btn-m"
                                                role="button">view</a></td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <p> &nbsp; </p>
                        &emsp;&emsp; <a href="{{ url('/new_task/' . $x) }}" class="btn btn-dark btn-m" role="button">Create
                            Assignment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
