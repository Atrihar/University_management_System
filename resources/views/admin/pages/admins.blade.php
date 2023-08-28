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
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $u)
                        <tr>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->contact_no }}</td>
                            <td>
                                @if ($u->is_approved == 0)
                                    <a href="{{ url('admin/userapprove/' . $u->id) }}">Approve</a>
                                @else
                                    <label>Approved</label>
                                @endif
                            </td>
                            <td><a href="{{ url('/edit_instructor/' . $u->id) }}" class="btn btn-primary btn-sm"
                                    role="button">Edit</a></td>
                            <td><a href="{{ url('/delete_instructor/' . $u->id) }}"
                                    class="btn btn-danger btn-sm" role="button">Delete</a></td>
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
