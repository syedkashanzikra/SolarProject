@extends("Layouts.dash-layout")
@section("title")
Insert Product
@endsection
@section("contant")
<br>
<center>
<h1>Update Product</h1>
</center>

<div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Update</h6>
                            <form action="/updateproductpost/{{$Products->id}}" method="POST">
                                @csrf
                            <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="ProName" value="{{$Products->Pro_Name}}">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Price</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="ProPrice" value="{{$Products->Pro_Price}}">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product URL</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="Prourl" value="{{$Products->Pro_Url}}">
                                 
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Description</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="ProDecs" value="{{$Products->Pro_Decs}}">
                                </div>

                               
                               
                                <button type="submit" class="btn btn-primary">Update Product</button>
                            </form>
                        </div>
                    </div>
@endsection