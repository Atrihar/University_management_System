@extends('student.layouts.auth')

@section('content')

    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">

                        <div class="card-header">
                            <strong><h2>Teacher Registration Form</h2></strong>
                        </div>

                        <div class="card-body">

                            <p class="text-medium-emphasis small">Fill up all the input fields with appropiate information.</p>

                            <div class="example">
                                <div class="tab-content rounded-bottom">

                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1003">
                                        <form class="row g-3">

                                            <div class="col-md-12">
                                                    <label class="form-label" for="std_photo">Enter Student's Photo</label>
                                                    <input class="form-control" id="std_photo" type="file">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="std_name">Name</label>
                                                <input class="form-control" id="std_name" type="text">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="std_ID">ID</label>
                                                <input class="form-control" id="std_ID" type="number">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="std_email">Email</label>
                                                <input class="form-control" id="std_email" type="email">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="std_tel">Phone Number</label>
                                                <input class="form-control" id="std_tel" type="tel">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="std_f_name">Father's Name</label>
                                                <input class="form-control" id="std_f_name" type="text">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="std_m_name">Mother's Name</label>
                                                <input class="form-control" id="std_m_name" type="text">
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label" for="std_present_address">Present Address</label>
                                                <input class="form-control" id="std_present_address" type="text"
                                                    placeholder="1234 Main St">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="std_present_city">City</label>
                                                <input class="form-control" id="std_present_city" type="text">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label" for="std_present_state">State</label>
                                                <input class="form-control" id="std_present_state" type="text">
                                            </div>

                                            <div class="col-md-2">
                                                <label class="form-label" for="std_present_zip">Zip</label>
                                                <input class="form-control" id="std_present_zip" type="text">
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label" for="std_parmenent_address">Parmenent Address</label>
                                                <input class="form-control" id="std_parmenent_address" type="text"
                                                    placeholder="Apartment, studio, or floor">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="std_parmenent_city">City</label>
                                                <input class="form-control" id="std_parmenent_city" type="text">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label" for="std_parmenent_state">State</label>
                                                <input class="form-control" id="std_parmenent_state" type="text">
                                            </div>

                                            <div class="col-md-2">
                                                <label class="form-label" for="std_parmenent_zip">Zip</label>
                                                <input class="form-control" id="std_parmenent_zip" type="text">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="std_pass">Password</label>
                                                <input class="form-control" id="std_pass" type="password">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="std_cnf_pass">Confirm Password</label>
                                                <input class="form-control" id="std_cnf_pass" type="password">
                                            </div>

                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="gridCheck" type="checkbox">
                                                    <label class="form-check-label" for="gridCheck">Agreed</label>
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
