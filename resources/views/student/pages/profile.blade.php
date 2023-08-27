@extends('student.layouts.profile')

@section('content')
    <div class="card shadow-lg mx-4 card-profile-bottom">

        <div class="card-body p-3">

            <div class="row gx-4">

                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        {{-- <img src="{{ asset('../assets/img/team-1.jpg') }}" alt="profile_image"
                            class="w-100 border-radius-lg shadow-sm"> --}}
                    </div>
                </div>

                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Name: {{ $profile[0]->name }}
                        </h5>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid py-4">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <button class="btn btn-primary btn-sm ms-auto">Settings</button>
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="text-uppercase text-sm">User Information</p>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Username</label>
                                    <input class="form-control" type="text" value={{ $profile[0]->name }}>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Email address</label>
                                    <input class="form-control" type="email" value={{ $profile[0]->email }}>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Phone Number</label>
                                    <input class="form-control" type="email" value={{ $profile[0]->contact_no }}>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Father's name</label>
                                    <input class="form-control" type="text" value={{ $profile[0]->fathers_name }}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Mother's name</label>
                                    <input class="form-control" type="text" value={{ $profile[0]->mothers_name }}>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Contact Information</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Address</label>
                                    <input class="form-control" type="text" value={{ $profile[0]->present_address }}>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">City</label>
                                    <input class="form-control" type="text" value={{ $profile[0]->present_state }}>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">State</label>
                                    <input class="form-control" type="text" value={{ $profile[0]->present_state }}>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Zip code</label>
                                    <input class="form-control" type="text" value={{ $profile[0]->present_zip_code }}>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                    </div>

                </div>

            </div>

        </div>

        @include('supervisor.includes.footer')

    </div>
@endsection
