@extends('student.layouts.auth')

@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">

                    <div class="card-header">
                        <strong>Teacher Registration Form</strong>
                    </div>

                    <div class="card-body">

                        <p class="text-medium-emphasis small">Fill up all the input fields with appropiate information.
                        </p>

                        <div class="example">
                            <div class="tab-content rounded-bottom">

                                <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1003">
                                    <form method="post" action="{{ url('user/registration') }}" class="row g-3">
                                        @csrf

                                        <div class="col-md-12">
                                            <label class="form-label" for="profile_pic">Enter Photo</label>
                                            <input class="form-control" id="profile_pic" name="profile_pic" type="file">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="name">Name</label>
                                            <input class="form-control" id="name" name="name" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="email">Email</label>
                                            <input class="form-control" id="email" name="email" type="email">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="contact_no">Phone Number</label>
                                            <input class="form-control" id="contact_no" name="contact_no" type="tel">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="fathers_name">Father's Name</label>
                                            <input class="form-control" id="fathers_name" name="fathers_name" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="mothers_name">Mother's Name</label>
                                            <input class="form-control" id="mothers_name" name="mothers_name" type="text">
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label" for="parmenent_address">Parmenent Address</label>
                                            <input class="form-control" id="parmenent_address" name="parmenent_address" type="text"
                                                placeholder="1234 Main St">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="parmenent_city">City</label>
                                            <input class="form-control" id="parmenent_city" name="parmenent_city" type="text">
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="parmenent_state">State</label>
                                            <input class="form-control" id="parmenent_state" name="parmenent_state" type="text">
                                        </div>

                                        <div class="col-md-2">
                                            <label class="form-label" for="parmenent_zip_code">Zip</label>
                                            <input class="form-control" id="parmenent_zip_code" name="parmenent_zip_code" type="text">
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label" for="present_address">Present
                                                Address</label>
                                            <input class="form-control" id="present_address" name="present_address" type="text"
                                                placeholder="Apartment, studio, or floor">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="present_city">City</label>
                                            <input class="form-control" id="present_city" name="present_city" type="text">
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="present_state">State</label>
                                            <input class="form-control" id="present_state" name="present_state" type="text">
                                        </div>

                                        <div class="col-md-2">
                                            <label class="form-label" for="present_zip_code">Zip</label>
                                            <input class="form-control" id="present_zip_code" name="present_zip_code" type="text">
                                        </div>

                                        <div class="col-md-12">
                                            <select class="form-select" name="role" id="role" aria-label="Default select example">
                                                <option selected="">Select Role</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Teacher">Teacher</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="password">Password</label>
                                            <input class="form-control" id="password" name="password" type="password">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="cnf_password">Confirm Password</label>
                                            <input class="form-control" id="cnf_password" name="cnf_password" type="password">
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" id="gridCheck" type="checkbox">
                                                <label class="form-check-label" for="gridCheck">Filled Up</label>
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
