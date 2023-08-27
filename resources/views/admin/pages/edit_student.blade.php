@extends('admin.layouts.defult')

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">

                        <div class="card-header">
                            <strong>Edit Student's Information</strong>
                        </div>

                        <div class="card-body">

                            <p class="text-medium-emphasis small">Fill up all the input fields with appropiate information.
                            </p>

                            <div class="example">
                                <div class="tab-content rounded-bottom">

                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1003">
                                        <form method="post" action="{{ url('update_student/' . $student->id) }}" class="row g-3">
                                            @csrf

                                            <div class="col-md-12">
                                                <label class="form-label" for="profile_pic">Enter Student's Photo</label>
                                                <input class="form-control" value="{{ $student->profile_pic }}" id="profile_pic" name="profile_pic"
                                                    type="file">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="name">Name</label>
                                                <input class="form-control" value="{{ $student->name }}" id="name" name="name" type="text">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="std_ID">ID</label>
                                                <input class="form-control" id="std_ID" value="{{ $student->std_ID }}" name="std_ID" type="number">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="email">Email</label>
                                                <input class="form-control"  value="{{ $student->email }}" id="email" name="email" type="email">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="contact_no">Phone Number</label>
                                                <input class="form-control" value="{{ $student->contact_no }}" id="contact_no" name="contact_no"
                                                    type="tel">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="fathers_name">Father's Name</label>
                                                <input class="form-control" value="{{ $student->fathers_name }}" id="fathers_name" name="fathers_name"
                                                    type="text">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="mothers_name">Mother's Name</label>
                                                <input class="form-control" value="{{ $student->mothers_name }}" id="mothers_name" name="mothers_name"
                                                    type="text">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="fathers_contact_no">Father's Phone
                                                    Number</label>
                                                <input class="form-control" value="{{ $student->fathers_contact_no }}" id="fathers_contact_no"
                                                    name="fathers_contact_no" type="tel">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="mothers_contact_no">Mother's Phone
                                                    Number</label>
                                                <input class="form-control" value="{{ $student->mothers_contact_no }}" id="mothers_contact_no"
                                                    name="mothers_contact_no" type="tel">
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label" for="present_address">Present Address</label>
                                                <input class="form-control" value="{{ $student->present_address }}" id="present_address" name="present_address"
                                                    type="text" placeholder="1234 Main St">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="present_city">City</label>
                                                <input class="form-control" value="{{ $student->present_city }}" id="present_city" name="present_city"
                                                    type="text">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label" for="present_state">State</label>
                                                <input class="form-control" value="{{ $student->present_state }}" id="present_state" name="present_state"
                                                    type="text">
                                            </div>

                                            <div class="col-md-2">
                                                <label class="form-label" for="present_zip_code">Zip</label>
                                                <input class="form-control" value="{{ $student->present_zip_code }}" id="present_zip_code" name="present_zip_code"
                                                    type="text">
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label" for="parmenent_address">Parmenent
                                                    Address</label>
                                                <input class="form-control" value="{{ $student->parmenent_address }}" id="parmenent_address"
                                                    name="parmenent_address" type="text"
                                                    placeholder="Apartment, studio, or floor">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="parmenent_city">City</label>
                                                <input class="form-control" value="{{ $student->parmenent_city }}" id="parmenent_city" name="parmenent_city"
                                                    type="text">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label" for="parmenent_state">State</label>
                                                <input class="form-control" value="{{ $student->parmenent_state }}" id="parmenent_state" name="parmenent_state"
                                                    type="text">
                                            </div>

                                            <div class="col-md-2">
                                                <label class="form-label" for="parmenent_zip_code">Zip</label>
                                                <input class="form-control" value="{{ $student->parmenent_zip_code }}" id="parmenent_zip_code"
                                                    name="parmenent_zip_code" type="text">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="batch">Batch</label>
                                                <input class="form-control" value="{{ $student->batch }}" id="batch" name="batch"
                                                    type="number">
                                            </div>

                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="gridCheck" type="checkbox">
                                                    <label class="form-check-label" for="gridCheck">Filled Up</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Update</button>
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
