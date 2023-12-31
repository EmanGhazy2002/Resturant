<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>

                        <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                        <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                        <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                        <li class="submenu">
                            <a href="javascript:;">Features</a>
                            <ul>
                                <li><a href="#">Features Page 1</a></li>
                                <li><a href="#">Features Page 2</a></li>
                                <li><a href="#">Features Page 3</a></li>
                                <li><a href="#">Features Page 4</a></li>
                            </ul>
                        </li>
                        <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                        <li class="scroll-to-section" ><a href="#reservation">Contact Us</a></li>
                        <li>


                        <li class="scroll-to-section" style="background-color: red;">
                            @auth()
                                <a href="{{url('/showcart',Auth::user()->id)}} ">
                                    Cart{{$count}}
                                </a>
                            @endauth
                            @guest()
                                Cart[0]
                                @endguest

                                </a></li>
                        <li>











                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                        <li>
                                            <x-app-layout>

                                            </x-app-layout>
                                        </li>
                                    @else
                                        <li> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a> </li>

                                        @if (Route::has('register'))
                                            <li> <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a> </li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </li>
                    </ul>
                    {{--                    <a class='menu-trigger'>--}}
                    {{--                        <span>Menu</span>--}}
                    {{--                    </a>--}}
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
    <div id="top">
        <form action="{{ url('/orderconfirm') }}" method="post">
            @csrf
            <table align="center">
                <tr>
                    <th style="padding: 30px;">Food Name</th>
                    <th style="padding: 30px;">Price</th>
                    <th style="padding: 30px;">Quantity</th>
                    <th style="padding: 30px;">Action</th>
                </tr>
                @foreach($data as $data)
                    <tr>
                        <td align="center">
                            <input type="text" name="foodname[]" value=" {{ $data->title }}" hidden="">
                            {{ $data->title }}
                        </td>
                        <td style="padding: 30px;">
                            <input type="text" name="price[]" value=" {{ $data->price }}" hidden="">
                            {{ $data->price }}
                        </td>
                        <td style="padding: 30px;">
                            <input type="text" name="quantity[]" value="  {{ $data->quantity }}" hidden="">
                            {{ $data->quantity }}
                        </td>
                    </tr>
                @endforeach
                @foreach($data2 as $data2)
                    <tr style="position: relative; top: -60px; right: -360px;">
                    <td ><a href="{{ url('/remove',$data2->id) }}" class="btn btn-sm btn-warning">Remove</a></td>
                    </tr>
                @endforeach
            </table>
    </div>


<div align="center" >
    <button class="btn btn-primary " type="button" id="order" style="background-color: #0a58ca;">Order Now</button>

</div>

<div align="center" id="appear" style="display: none">
    <div style="padding: 10px;">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Name" >
    </div>
    <div style="padding: 10px;">
        <label for="phone">Phone</label>
        <input type="number" id="phone" name="phone" placeholder="Phone Number" >
    </div>
    <div style="padding: 10px;">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Address" >
    </div>
    <div style="padding: 10px;">
        <input type="submit" value="Order Confirm" class="btn btn-success"  style="background-color: #28a745;">
        <button id="close" type="button" class="btn btn-danger " style="background-color: #bd2130;">Close</button>
    </div>


</div>

</form>


<script type="text/javascript">
    $(document).ready(function () {
        $("#order").click(function () {
            $("#appear").show();
        });
        $("#close").click(function () {
            $("#appear").hide();
        });
    });
</script>



<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
                $("."+selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });

</script>
</body>
</html>

