@extends("Layouts.dash-layout")
@section("title")
Products Details
@endsection
@section("contant")
<br>
<center>
<h1>Products Details</h1>
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
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">URL</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @foreach($Products as $p)
                                    <tbody id="body">
                                        <tr>
                                            <th>{{$p->id}}</th>
                                            <th>
                                                <img src="insert-image/{{$p->Pro_Image}}" style="width: 50px; height: 50px; border-radius: 50%;">
                                            </th>
                                            <td>{{$p->Pro_Name}}</td>
                                            <td>{{$p->Pro_Price}}</td>
                                            <td>{{$p->Pro_Url}}</td>
                                            <td>{{$p->Pro_Decs}}</td>
                                            <td>
                                                <a href="/deleteproduct{{$p->id}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                                <a href="/update-product/{{$p->id}}" class="btn btn-success"><i class="bi bi-arrow-down-left-square-fill"></i></a>
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
    // Search Products
    $(document).ready(function () {
        $('#search').keyup(function () {
            var search = $("#search").val();
            var url = "{{ route('manage.search', ':search') }}".replace(':search', search);

            if (search !== "") {
                $.get(url, function (data) {
                    const products = JSON.parse(data);
                    var body = '';

                    if (products.length <= 0) {
                        body = "<p class='text-danger'>Product not found</p>";
                    } else {
                        for (let product of products) {
                            body += `
                            <tr>
                                <th>${product.id}</th>
                                <th>
                                                <img src="insert-image/${product.Pro_Image}" style="width: 50px; height: 50px; border-radius: 50%;">
                                            </th>
                                <td>${product.Pro_Name}</td>
                                <td>${product.Pro_Price}</td>
                                <td>${product.Pro_Url}</td>
                                <td>${product.Pro_Decs}</td>
                                <td>
                                    <a href="/deleteuser${product.id}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    <a href="/update-product/${product.id}" class="btn btn-success"><i class="bi bi-arrow-down-left-square-fill"></i></a>
                                </td>
                            </tr>`;
                        }

                    }

                    $("#body").html(body);
                });
            } else {
                url = "{{ route('manage.getalldata') }}";

                $.get(url, function (data) {
                    const products = JSON.parse(data);
                    var body = '';

                    if (products.length <= 0) {
                        body = "<p class='text-danger'>Product not found</p>";
                    } else {
                        for (let product of products) {
                            body += `
                            <tr>
                                <th>${product.id}</th>
                                <th>
                                      <img src="insert-image/${product.Pro_Image}" style="width: 50px; height: 50px; border-radius: 50%;">
                                 </th>
                                <td>${product.Pro_Name}</td>
                                <td>${product.Pro_Price}</td>
                                <td>${product.Pro_Url}</td>
                                <td>${product.Pro_Decs}</td>
                                <td>
                                    <a href="/deleteuser${product.id}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    <a href="/update-product/${product.id}" class="btn btn-success"><i class="bi bi-arrow-down-left-square-fill"></i></a>
                                </td>
                            </tr>`;
                        }
                    }

                    $("#body").html(body);
                });
            }
        });
    });
</script>

                    
@endsection