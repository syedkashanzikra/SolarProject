@extends("Layouts.dash-layout")
@section("title")
Dashboard
@endsection
@section("contant")
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Users</p>
                                <h6 class="mb-0">@php $user = \App\Models\User::all();@endphp
                                                    {{count($user)}}</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Products</p>
                                <h6 class="mb-0">@php $user = \App\Models\Products::all();@endphp
                                                    {{count($user)}}</h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Reviews</p>
                                <h6 class="mb-0">@php $user = \App\Models\ContactUs::all();@endphp
                                                    {{count($user)}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <br>
<center>
<h1>Users Details</h1>
</center>

<div class="col-12">
    
                        <div class="bg-secondary rounded h-100 p-4">

                            <h6 class="mb-4">Details</h6>
                                <form class="d-none d-md-flex ">
                                     <input class="form-control bg-dark border-0" type="search" id="search" placeholder="Search">
                                </form>
                                <br>
                            <div class="table-responsive">
                                <table class="table" id="body">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Created</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @foreach($users as $u)
                                    <tbody>
                                        <tr>
                                            <th>{{$u->id}}</th>
                                            <td>{{$u->name}}</td>
                                            <td>{{$u->email}}</td>
                                            <td>{{$u->password}}</td>
                                            <td>{{$u->admin}}</td>
                                            <td>{{$u->created_at->format('d/m/Y')}}</td>
                                            <td>
                                                <a href="/deleteuser{{$u->id}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>


<!-- Add this script to your HTML -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




<script>
    $(document).ready(function () {
        $('#search').keyup(function () {
            var search = $("#search").val();
            var url = "{{ route('user.search', ':search') }}".replace(':search', search);

            if (search !== "") {
                $.get(url, function (data) {
                    const users = JSON.parse(data);
                    var body = '';

                    if (users.length <= 0) {
                        body = "<p class='text-danger'>User not found</p>";
                    } else {
                        for (let user of users) {
                            body += `
                            <tbody>
                                        <tr>
                                            <th>${user.id}</th>
                                            <td>${user.name}</td>
                                            <td>${user.email}</td>
                                            <td>${user.password}</td>
                                            <td>${user.admin}</td>
                                            <td>${user.created_at}</td> <!-- Display date directly, no need to format in JavaScript -->
                                            <td>
                                                <a href="/deleteuser${user.id}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>`;
                        }
                    }

                    $("#body").html(body);
                });
            } else {
                url = "{{ route('user.getalldata') }}";

                $.get(url, function (data) {
                    const users = JSON.parse(data);
                    var body = '';

                    if (users.length <= 0) {
                        body = "<p class='text-danger'>User not found</p>";
                    } else {
                        for (let user of users) {
                            body += `
                            <tbody>
                                        <tr>
                                            <th>${user.id}</th>
                                            <td>${user.name}</td>
                                            <td>${user.email}</td>
                                            <td>${user.password}</td>
                                            <td>${user.admin}</td>
                                            <td>${user.created_at}</td> <!-- Display date directly, no need to format in JavaScript -->
                                            <td>
                                                <a href="/deleteuser${user.id}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>`;
                        }
                    }

                    $("#body").html(body);
                });
            }
        });
    });
</script>

           



@endsection