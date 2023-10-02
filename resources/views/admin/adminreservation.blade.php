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
        <table bgcolor="#808080" border="1px">
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Phone</th>
                <th style="padding: 30px">Date</th>
                <th style="padding: 30px">Time</th>
                <th style="padding: 30px">Message</th>

            </tr>
            @foreach($data as $data)
                <tr align="center">
                    <th>{{$data->name}}</th>
                    <th>{{$data->email}}</th>
                    <th>{{$data->phone}}</th>
                    <th>{{$data->date}}</th>
                    <th>{{$data->time}}</th>
                    <th>{{$data->message}}</th>

                </tr>
            @endforeach
        </table>



    </div>

</div>
@include("admin.adminscript")

</body>
</html>
