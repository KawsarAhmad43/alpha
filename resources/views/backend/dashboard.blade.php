<!-- resources/views/backend/pages/dashboard.blade.php -->
@extends('backend.layouts.admin')

@section('content')
    <!-- Include your dashboard content here -->
    <div class="pt-7 pb-6 bg-cover"
        style="background-image: url('{{ asset('admin/assets/img/header-orange-purple.jpg') }}'); background-position: bottom;">
    </div>
    <div class="container">
        <div class="card card-body py-2 bg-transparent shadow-none">
            <!-- Your dashboard content goes here -->
            <div class="row">
                <div class="col-auto">
                    <div class="avatar avatar-2xl rounded-circle position-relative mt-n7 border border-gray-100 border-4">
                        <img src="{{ asset('admin/assets/img/team-2.jpg') }}" alt="profile_image" class="w-100">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h3 class="mb-0 font-weight-bold">
                            Noah Mclaren
                        </h3>
                        <p class="mb-0">
                            noah_mclaren@mail.com
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-sm-end">
                    <a href="javascript:;" class="btn btn-sm btn-white">Cancel</a>
                    <a href="javascript:;" class="btn btn-sm btn-dark">Save</a>
                </div>
            </div>
        </div>
    </div>
@endsection
