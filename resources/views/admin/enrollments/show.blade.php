@extends('app')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Enrollment Details</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.enrollments.index') }}" class="btn btn-default">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Personal Information</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $enrollment->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $enrollment->email }}</td>
                                </tr>
                                <tr>
                                    <th>Mobile</th>
                                    <td>{{ $enrollment->mobile }}</td>
                                </tr>
                                <tr>
                                    <th>Age</th>
                                    <td>{{ $enrollment->age }}</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>{{ ucfirst($enrollment->gender) }}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <h4>Course Information</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Package</th>
                                    <td>{{ $enrollment->package }}</td>
                                </tr>
                                <tr>
                                    <th>Course Details</th>
                                    <td>{{ $enrollment->course_details }}</td>
                                </tr>
                                <tr>
                                    <th>Preferred Days</th>
                                    <td>{{ implode(', ', $enrollment->preferred_days) }}</td>
                                </tr>
                                <tr>
                                    <th>Preferred Times</th>
                                    <td>{{ implode(', ', $enrollment->preferred_times) }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 