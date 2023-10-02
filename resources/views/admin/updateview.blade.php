<div class="flex justify-end" >
    <x-app-layout>

    </x-app-layout>
</div>



<!DOCTYPE html>
<html lang="en">
<header>
    <base href="/public">
    @include("admin.admincss")
</header>
<body>

<div class="container-scroller">
@include("admin.navbar")

    <div class="card p-4">
        <h2 class="text-center mb-4">Add Product</h2>
        <form action="{{ url('/update',$data->id) }}" method="POST" enctype="multipart/form-data" style="color: whitesmoke">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{$data->title}}"  style="color: whitesmoke">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" id="price" name="price" class="form-control" value="{{$data->price}}" style="color: whitesmoke">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" id="description" name="description" class="form-control" value="{{$data->description}}"  style="color: whitesmoke">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Old Image</label>
                <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>

            </div>
            <div class="mb-3">
                <label for="image" class="form-label">New Image</label>
                <input type="file" id="image" name="image" class="form-control-file" >
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Update Product</button>
            </div>
        </form>







    </div>
@include("admin.adminscript")

</body>
</html>
