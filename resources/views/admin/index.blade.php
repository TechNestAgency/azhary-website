@extends('app')

@section('content')

    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h4 class="card-title text-primary">Welcome To Azhary Academy Dashboard</h4>
                                    <p class="mb-4">Here's an overview of your academy's performance</p>
                                    <div class="mt-4">
                                        <a href="{{ route('admin.teachers.index') }}" class="btn btn-primary">Manage Teachers</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img
                                        src="../assets/img/illustrations/man-with-laptop-light.png"
                                        height="140"
                                        alt="View Badge User"
                                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                        data-app-light-img="illustrations/man-with-laptop-light.png"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="row">
                <!-- Total Teachers -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted fw-normal mt-0">Total Teachers</h6>
                                    <h3 class="mt-3 mb-3">{{ \App\Models\Teacher::count() }}</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success me-2">
                                            <i class="mdi mdi-arrow-up-bold"></i> 5.27%
                                        </span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-soft-primary rounded">
                                        <i class="mdi mdi-account-group font-20 text-primary"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Active Teachers -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted fw-normal mt-0">Active Teachers</h6>
                                    <h3 class="mt-3 mb-3">{{ \App\Models\Teacher::where('is_active', true)->count() }}</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success me-2">
                                            <i class="mdi mdi-arrow-up-bold"></i> 3.27%
                                        </span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-soft-success rounded">
                                        <i class="mdi mdi-account-check font-20 text-success"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Reviews -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted fw-normal mt-0">Total Reviews</h6>
                                    <h3 class="mt-3 mb-3">{{ \App\Models\TeacherReview::count() }}</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success me-2">
                                            <i class="mdi mdi-arrow-up-bold"></i> 8.27%
                                        </span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-soft-warning rounded">
                                        <i class="mdi mdi-star font-20 text-warning"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Average Rating -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted fw-normal mt-0">Average Rating</h6>
                                    <h3 class="mt-3 mb-3">{{ number_format(\App\Models\Teacher::avg('rating'), 1) }}</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success me-2">
                                            <i class="mdi mdi-arrow-up-bold"></i> 2.27%
                                        </span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-soft-info rounded">
                                        <i class="mdi mdi-star-half font-20 text-info"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Recent Activity</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Teacher</th>
                                            <th>Review</th>
                                            <th>Rating</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(\App\Models\TeacherReview::with(['teacher'])->latest()->take(5)->get() as $review)
                                        <tr>
                                            <td>{{ $review->teacher->name }}</td>
                                            <td>{{ Str::limit($review->comment, 50) }}</td>
                                            <td>
                                                <div class="text-warning">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= $review->rating)
                                                            ★
                                                        @else
                                                            ☆
                                                        @endif
                                                    @endfor
                                                </div>
                                            </td>
                                            <td>{{ $review->created_at->diffForHumans() }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Select Families Modal -->


@endsection
