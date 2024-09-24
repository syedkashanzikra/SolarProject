@extends("Layouts.dash-layout")
@section("title")
Contact Details
@endsection
@section("contant")
<br>
<center>
    <h1>Contact Details</h1>
</center>

<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Details</h6>
        <form class="d-none d-md-flex">
            <input class="form-control bg-dark border-0" type="search" id="search" placeholder="Search">
        </form>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Message</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    @foreach($contactdetails as $c)
                    <tr>
                        <th>{{$c->id}}</th>
                        <td>{{$c->Name}}</td>
                        <td>{{$c->Email}}</td>
                        <td>{{$c->Phone}}</td>
                        <td>{{$c->Message}}</td>
                        <td>
                            <a href="/delete{{$c->id}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
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

        if (search !== "") {
            // Direct URL construction
            var url = "/getdatacontact/" + search;

            $.get(url, function (data) {
                var contacts = data; // No need to use JSON.parse, it's already in JSON format
                var body = '';

                if (contacts.length <= 0) {
                    body = "<tr><td colspan='6' class='text-danger'>Contact not found</td></tr>";
                } else {
                    contacts.forEach(function(contact) {
                        body += `
                            <tr>
                                <th>${contact.id}</th>
                                <td>${contact.Name}</td>
                                <td>${contact.Email}</td>
                                <td>${contact.Phone}</td>
                                <td>${contact.Message}</td>
                                <td>
                                    <a href="/deleteuser${contact.id}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>`;
                    });
                }

                $("#table-body").html(body);
            });
        } else {
            // Fetch all contacts if search input is empty
            var url = "/getdatacontacts";

            $.get(url, function (data) {
                var contacts = data;
                var body = '';

                if (contacts.length <= 0) {
                    body = "<tr><td colspan='6' class='text-danger'>Contact not found</td></tr>";
                } else {
                    contacts.forEach(function(contact) {
                        body += `
                            <tr>
                                <th>${contact.id}</th>
                                <td>${contact.Name}</td>
                                <td>${contact.Email}</td>
                                <td>${contact.Phone}</td>
                                <td>${contact.Message}</td>
                                <td>
                                    <a href="/deleteuser${contact.id}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>`;
                    });
                }

                $("#table-body").html(body);
            });
        }
    });
});


</script>
@endsection
