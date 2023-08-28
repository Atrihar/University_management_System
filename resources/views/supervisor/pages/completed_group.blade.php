@extends('supervisor.layouts.defult')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Project Completed</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">

                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="align-middle text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Name
                                    </th>
                                    <th class="align-middle text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        Project Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Grade</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Started</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">
                                        Ended</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($group as $g)
                                    <tr>
                                        <td class="align-middle text-center text-sm font-weight-bold mb-0">
                                                {{ $g->name }}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                                {{ $g->project_name }}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-secondary">{{ $g->grade }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            {{ $g->created_at }}
                                        </td>
                                        <td class="align-middle text-center">
                                            {{ $g->updated_at }}
                                        </td>

                                        <td><a href="{{ url('/completed_group_info/' . $g->id) }}" class="btn btn-info btn-m"
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
