@extends("Layouts.dash-layout")
@section("title")
Insert Product
@endsection
@section("contant")
<br>
<center>
<h1>Insert New Product</h1>
</center>

<div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Update</h6>
                            <form action="/insert-Product" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="ProName">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Price</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="ProPrice">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product URL</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="Prourl">
                                 
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Description</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="ProDecs">
                                </div>

                                <div class="mb-3">
                                <label for="formFileSm" class="form-label">Product Image</label>
                                <input class="form-control form-control bg-dark" id="formFileSm" type="file" name="ProImage">
                            </div>
                               
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </form>
                        </div>
                    </div>
@endsection