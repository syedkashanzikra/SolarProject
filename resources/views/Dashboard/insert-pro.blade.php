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
                <label for="ProName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="ProName" name="ProName" required>
            </div>

            <div class="mb-3">
                <label for="ProPrice" class="form-label">Product Price</label>
                <input type="number" class="form-control" id="ProPrice" name="ProPrice" min="0" required>
            </div>

            <div class="mb-3">
                <label for="Prourl" class="form-label">Product URL</label>
                <input type="url" class="form-control" id="Prourl" name="Prourl" required>
            </div>

            <div class="mb-3">
                <label for="ProDecs" class="form-label">Product Description</label>
                <input type="text" class="form-control" id="ProDecs" name="ProDecs" maxlength="500" required>
            </div>

            <div class="mb-3">
                <label for="ProImage" class="form-label">Product Image</label>
                <input class="form-control form-control bg-dark" id="ProImage" type="file" name="ProImage" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</div>
@endsection
