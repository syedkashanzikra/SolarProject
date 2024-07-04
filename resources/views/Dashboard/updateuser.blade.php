@extends("Layouts.dash-layout")
@section("title")
Update User
@endsection
@section("contant")
<br>
<center>
<h1>Update User</h1>
</center>

<div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Update</h6>
                            <form action="/UpdateProfile/{{auth()->user()->id}}" method="POST">
                                @csrf
                            <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="UpdateName" value="{{ Auth::user()->name }}">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="UpdateEmail" value="{{ Auth::user()->email }}">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Role</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="UpdateRole" value="{{ Auth::user()->admin }}">
                                 
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="UpdatePassword" value="{{ Auth::user()->password }}">
                                </div>
                               
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
@endsection