@extends('admin.layouts.defult')

@section('content')

<div class="card mb-4">

    <div class="card-header">
        <strong>Completed project groups</strong>
    </div>

    <div class="card-body">

      <div class="example">

        <div class="tab-content rounded-bottom">
          <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1019">
            <table class="table">

              <thead class="table-dark">
                <tr>
                  <th scope="col">Group ID</th>
                  <th scope="col">Supervisor</th>
                  <th scope="col">Type</th>
                  <th scope="col">Topic</th>
                  <th scope="col">Grade</th>
                  <th scope="col">Started</th>
                  <th scope="col">Finished</th>
                  <th scope="col"></th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Project</td>
                  <td>Web Development</td>
                  <td>A</td>
                  <td>23.3.22</td>
                  <td>23.3.23</td>
                  <td><button class="btn btn-ghost-info active rounded-pill" type="button">Info</button></td>
                </tr>
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
