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
        <form action="{{ url('/uploadchef') }}" method="POST" enctype="multipart/form-data" style="color: whitesmoke">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text"  name="name" class="form-control" placeholder="Write a name" required style="color: whitesmoke">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Speciality</label>
                <input type="text"  name="speciality" class="form-control" placeholder="Write a speciality" required style="color: whitesmoke">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file"  name="image" class="form-control-file" required>
            </div>

            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Add chef</button>
            </div>
        </form>




        <div>
            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px;">Chef Name</th>
                    <th style="padding: 30px;">Speciality</th>
                    <th style="padding: 30px;">Image</th>
                    <th style="padding: 30px;">Action</th>

                </tr>
                @foreach($data as $data)
                    <tr align="center">
                        <td>{{$data->name}}</td>
                        <td>{{$data->speciality}}</td>
                        <td><img height="200" width="200" src="/chefimage/{{$data->image}}"></td>
                        <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
                        <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>

                    </tr>
                @endforeach
            </table>




        </div>


    </div>
</div>
@include("admin.adminscript")
</body>
</html>

