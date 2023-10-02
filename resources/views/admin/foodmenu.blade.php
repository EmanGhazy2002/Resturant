<div class="flex justify-end" >
    <x-app-layout>

    </x-app-layout>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>

<div class="container-scroller">
    @include("admin.navbar")
    <div class="card p-4">
        <h2 class="text-center mb-4">Add Product</h2>
        <form action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data" style="color: whitesmoke">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Write a title" required style="color: whitesmoke">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" id="price" name="price" class="form-control" placeholder="Price" required style="color: whitesmoke">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control-file" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" id="description" name="description" class="form-control" placeholder="Description" required style="color: whitesmoke">
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Add Product</button>
            </div>
        </form>



        <div>
            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px;">Food Name</th>
                    <th style="padding: 30px;">Price</th>
                    <th style="padding: 30px;">Description</th>
                    <th style="padding: 30px;">Image</th>
                    <th style="padding: 30px;">Action</th>

                </tr>
        @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
                    <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>

                </tr>
                @endforeach
            </table>




        </div>







    </div>
</div>
@include("admin.adminscript")
</body>
</html>

