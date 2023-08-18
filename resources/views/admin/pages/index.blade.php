@extends('admin.layouts.defult')

@section('content')
    <div class="card mb-4">

        <div class="card-header">
            <strong>This users need your approval to use this website</strong>
        </div>

        <div class="card-body">

            <div class="example">

                <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1019">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone No</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Abc</th>
                                    <td>123</td>
                                    <td>admin</td>
                                    <td>admin@gmail.com</td>
                                    <td>134567</td>
                                    <td><button class="btn btn-warning rounded-pill" type="button">Approve</button></td>
                                    <td><button class="btn btn-danger rounded-pill" type="button">Delete</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">Abc</th>
                                    <td>123</td>
                                    <td>teacher</td>
                                    <td>teacher@icloud.com</td>
                                    <td>23452</td>
                                    <td><button class="btn btn-warning rounded-pill" type="button">Approve</button></td>
                                    <td><button class="btn btn-danger rounded-pill" type="button">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
