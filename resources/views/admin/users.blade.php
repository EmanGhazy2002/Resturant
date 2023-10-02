<div class="flex justify-end" >
    <x-app-layout>

    </x-app-layout>
</div>



<!DOCTYPE html>
<html lang="en">
<header>
@include("admin.admincss")
</header>
<body>
<div class="container-scroller">
@include("admin.navbar")

<div style="position: relative; top: 60px; right: -150px">
    <table bgcolor="#808080" border="3px">
        <tr>
            <th style="padding: 30px">Name</th>
            <th style="padding: 30px">Email</th>
            <th style="padding: 30px">Action</th>
        </tr>
         @foreach($data as $data)
        <tr align="center">
            <th>{{$data->name}}</th>
            <th>{{$data->email}}</th>
            @if($data->usertype=="0")
              <th><a href="{{url('/deleteuser',$data->id)}}">Delet</a></th>
            @else
               <th><a>Not Allowed</a></th>
            @endif
        </tr>
        @endforeach
    </table>



</div>

</div>
@include("admin.adminscript")

</body>
</html>
