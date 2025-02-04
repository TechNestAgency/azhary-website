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
                                <div class="card-body text-center">
                                    <h4 class="card-title text-primary">Welcome To Online Academy Meet App</h4>
                                    <a href="javascript:;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">Create Room</a>
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
                            <div class="row justify-content-center p-5">
                                <div class="col-12 col-md-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="searchInput" placeholder="Search for rooms..">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row">
                @foreach($rooms as $room)
                    <div class="col-12 col-md-4 mb-4 room">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-center justify-content-center">
                                    <h4>{{$room->name}}</h4>
                                </div>
                                <div>
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <a class="btn btn-outline-success" href="{{url('https://wa.me/'.$room->mobile.'?text=https://almajd.link/join/'.$room->name)}}" target="_blank" title="send whatsapp">
                                                <img src="{{asset('whatsapp.png')}}" style="width: 20px">
                                            </a>
                                        </div>
                                        <input type="text" value="{{'https://almajd.link/join/'.$room->name}}" class="form-control" id="copyInput{{$room->id}}">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-success" type="button" id="copyButton{{$room->id}}" title="copy link">
                                                <i class="fas fa-copy"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div style="display: flex;align-items: center;justify-content: center">
                                    <div class="p-4">
                                        <!-- Enable/Disable Switch -->
                                        <label class="switch">
                                            <input type="checkbox" class="toggleSwitch" data-room-id="{{ $room->id }}" @if($room->status) checked @endif>
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="p-4">
                                        <!-- Fancy Delete Button -->
                                        <button class="btn btn-danger deleteButton" data-room-id="{{ $room->id }}">Delete</button>
                                    </div>
                                </div>
                                <div style="display: flex;align-items: center;justify-content: center">
                                    <div class="p-4">
                                        <!-- Change Password Button -->
                                        <button class="btn btn-warning changePasswordButton" data-room-id="{{ $room->id }}">Change Password</button>
                                    </div>
                                    <div class="p-4">
                                        <!-- Select Families Button -->
                                        <button class="btn btn-info selectFamiliesButton" data-room-id="{{ $room->id }}" data-room-password="{{ $room->password }}">Select Families</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                @endforeach
            </div>
        </div>

    </div>
    <!-- Select Families Modal -->
    <!-- Select Families Modal -->
    <div class="modal fade" id="selectFamiliesModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Select Families</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="familiesSelect" class="form-label">Families</label>
                            <select id="familiesSelect" class="form-control select2" style="width: 100%;">
                                @foreach($data['data'] as $whatsapp_number => $name)
                                    <option value="{{ $whatsapp_number }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveFamiliesButton">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Change Password Modal -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="newPassword" class="form-label">New Password</label>
                            <input type="password" id="newPassword" class="form-control" placeholder="Enter new password" required/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="savePasswordButton">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Include jQuery -->
    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"  rel="stylesheet" />
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js')}}" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#familiesSelect').select2({
            placeholder: 'Select families',
            allowClear: true,
            dropdownParent: $("#selectFamiliesModal")
        });
    </script>

    <script>
        $(document).ready(function() {
            var roomId;
            var roomPassword;

            $('.selectFamiliesButton').click(function() {
                roomId = $(this).data('room-id');
                roomPassword = $(this).data('room-password');
                $('#selectFamiliesModal').modal('show');
            });

            $('#saveFamiliesButton').click(function() {
                var selectedFamily = $('#familiesSelect').val();
                if (selectedFamily) {
                    var whatsappUrl = 'https://wa.me/' + selectedFamily + '?text=' + encodeURIComponent('The new password of your room is: ' + roomPassword);
                    window.open(whatsappUrl, '_blank');
                }
                $('#selectFamiliesModal').modal('hide');
            });
        });
        $(document).ready(function() {
            var roomId;

            $('.selectFamiliesButton').click(function() {
                roomId = $(this).data('room-id');
                $('#selectFamiliesModal').modal('show');
            });

            $('#saveFamiliesButton').click(function() {
                var selectedFamilies = $('#familiesSelect').val();
                console.log('Selected Families:', selectedFamilies);
                $('#selectFamiliesModal').modal('hide');
            });
        });
        document.getElementById("copyButton{{$room->id}}").addEventListener("click", function() {
            var copyText = document.getElementById("copyInput{{$room->id}}");
            copyText.select();
            document.execCommand("copy");
            // Get the switch
            var toggleSwitch = document.getElementById('toggleSwitch');

// Add event listener for the switch
            toggleSwitch.addEventListener('change', function() {
                if (this.checked) {
                    console.log("Switch is in 'Enable' state");
                } else {
                    console.log("Switch is in 'Disable' state");
                }
            });
        });

        $(document).ready(function() {
            var roomId;

            $('.changePasswordButton').click(function() {
                roomId = $(this).data('room-id');
                $('#changePasswordModal').modal('show');
            });

            $('#savePasswordButton').click(function() {
                var newPassword = $('#newPassword').val();
                $.ajax({
                    url: '/change-password/' + roomId,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        password: newPassword
                    },
                    success: function(response) {
                        Swal.fire("Success!", 'Password changed successfully', "success");
                        $('#changePasswordModal').modal('hide');
                        location.reload();
                    },
                    error: function(response) {
                        Swal.fire("Error!", "Something went wrong.", "error");
                    }
                });
            });
        });

        $('.deleteButton').click(function() {
            var roomId = $(this).data('room-id'); // Assuming you have the room ID stored in a data attribute

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/room/' + roomId + '/delete',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            window.location.href = document.referrer;

                        },
                        error: function(response) {
                            Swal.fire("Error!", "Something went wrong.", "error");
                        }
                    });
                }
            });
        });

        $('.toggleSwitch').change(function() {
            var roomId = $(this).data('room-id'); // Assuming you have the room ID stored in a data attribute
            $.ajax({
                url: '/room/' + roomId + '/toggle',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire("Success!", 'Room Status Changed Successfully', "success");

                },
                error: function(response) {
                    Swal.fire("Error!", "Something went wrong.", "error");
                }
            });
        });
    </script>
    <!-- Content wrapper -->
    <!-- Vertically Centered Modal -->
    <div class="col-lg-4 col-md-6">
        <div class="mt-3">
            <!-- Button trigger modal -->
            <!-- Modal -->
            <form action="{{route('create-room')}}" method="Post">
                @csrf
                <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="name" class="form-label">Room Name (English)</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Room Name" required/>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-3">
                                        <label for="password" class="form-label">Room Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Room Password " required/>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-3">
                                        <label for="mobile" class="form-label">Teacher Mobile</label>
                                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Room Mobile " required/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let filter = this.value.toUpperCase();
        let rooms = document.getElementsByClassName('room');

        for (let i = 0; i < rooms.length; i++) {
            let roomName = rooms[i].getElementsByTagName('h4')[0];
            if (roomName) {
                let textValue = roomName.textContent || roomName.innerText;
                if (textValue.toUpperCase().indexOf(filter) > -1) {
                    rooms[i].style.display = "";
                } else {
                    rooms[i].style.display = "none";
                }
            }
        }
    });
</script>
@endsection
