@extends('admin.layouts.defult')

@section('content')

<div class="card mb-4">

    <div class="card-header">
        <strong>Completed project groups</strong>
    </div>

    <div class="card-body">

      <div class="example">

        <div class="tab-content rounded-bottom">
          <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1019"></div></div>
            <table class="table">

              <thead class="table-dark">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Supervisor</th>
                  <th scope="col">Project Name</th>
                  <th scope="col">Grade</th>
                  <th scope="col">Started</th>
                  <th scope="col">Finished</th>
                  <th scope="col"></th>
                </tr>
              </thead>

              <tbody>
                @foreach ($group as $g)
                    <tr>
                        <td>{{ $g->name }}</td>
                        <td>{{ $g->supervisour }}</td>
                        <td>{{ $g->project }}</td>
                        <td>{{ $g->grade }}</td>
                        <td>{{ $g->started }}</td>
                        <td>{{ $g->ended }}</td>
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
