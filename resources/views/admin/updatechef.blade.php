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
        <form action="{{ url('/updatefoodchef',$data->id) }}" method="POST" enctype="multipart/form-data" style="color: whitesmoke">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Chef Name</label>
                <input type="text"  name="name" class="form-control" value="{{$data->name}}"  style="color: whitesmoke">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Speciality</label>
                <input type="text" name="speciality" class="form-control" value="{{$data->speciality}}" style="color: whitesmoke">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Old Image</label>
                <td><img height="200" width="200" src="/chefimage/{{$data->image}}"></td>

            </div>
            <div class="mb-3">
                <label for="image" class="form-label">New Image</label>
                <input type="file"  name="image" class="form-control-file" >
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Update Chef</button>
            </div>
        </form>







    </div>
@include("admin.adminscript")

</body>
</html>
