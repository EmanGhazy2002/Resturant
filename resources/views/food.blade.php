<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach($data as  $data)
                    <div class="item">
                        <form action="{{url('/addcart', $data->id)}}" method="post">
                            @csrf
                            <div class="card" style="background-image: url('/foodimage/{{ $data->image}}');">
                                <div class="price"><h6>{{ $data->price}}$</h6></div>
                                <div class="card-body" style="display: flex; justify-content: flex-end;">
                                <div class="info">
                                    <h1 class="title">{{ $data->title}}</h1>
                                    <p class="description">{{ $data->description}}</p>
                                </div>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <input type="number" name="quantity" min="0" style="width: 80px; margin-right: 10px;" min="1" value="1" class="form-control-file">
                                <input type="hidden" name="item_id" value="{{ $data->id}}">
                                <input type="submit" value="Add to Cart" class="btn btn-sm btn-primary custom-button"  style=" background-color: #007bff;">
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->
