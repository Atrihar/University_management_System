@extends('admin.layouts.defult')

@section('content')

<div class="card mb-4">

    <div class="card-header">
        <strong>All Admins</strong>
    </div>

    <div class="card-body">

      <div class="example">

        <div class="tab-content rounded-bottom">
          <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1019">

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $u)
                        <tr>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->contact_no }}</td>
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
