@extends('student.layouts.defult')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Assignment table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">

                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="align-middle text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Due</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Submission Date</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Status</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Grade</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($assignment_info as $a)
                                    <tr>
                                        <td class="align-middle text-center text-sm font-weight-bold mb-0">
                                            {{ $a->name }}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $a->due }}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $a->submission }}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $a->status }}
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-sm font-weight-bold">{{ $a->grade }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ url('/view/' . $a->id) }}" class="btn btn-info btn-m"
                                                role="button">View</a>
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
