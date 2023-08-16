@extends('admin.layouts.defult')

@section('content')

    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">

                        <div class="card-header">
                            <strong>Add A New User</strong>
                        </div>

                        <div class="card-body">

                            <p class="text-medium-emphasis small">Fill up all the input fields with appropiate information.</p>

                            <div class="example">
                                <div class="tab-content rounded-bottom">

                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1003">
                                        <form class="row g-3">

                                            <div class="col-md-6">
                                                <label class="form-label" for="inputEmail4">Email</label>
                                                <input class="form-control" id="inputEmail4" type="email">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="inputPassword4">Password</label>
                                                <input class="form-control" id="inputPassword4" type="password">
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label" for="inputAddress">Address</label>
                                                <input class="form-control" id="inputAddress" type="text"
                                                    placeholder="1234 Main St">
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label" for="inputAddress2">Address 2</label>
                                                <input class="form-control" id="inputAddress2" type="text"
                                                    placeholder="Apartment, studio, or floor">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="inputCity">City</label>
                                                <input class="form-control" id="inputCity" type="text">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label" for="inputState">State</label>
                                                <select class="form-select" id="inputState">
                                                    <option selected="">Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>

                                            <div class="col-md-2">
                                                <label class="form-label" for="inputZip">Zip</label>
                                                <input class="form-control" id="inputZip" type="text">
                                            </div>

                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="gridCheck" type="checkbox">
                                                    <label class="form-check-label" for="gridCheck">Check me out</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Register</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
