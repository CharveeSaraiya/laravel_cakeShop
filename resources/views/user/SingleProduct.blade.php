@extends('user.userheader')


@section('content')
          <div class="row row-30">
            <div class="col-lg-6">
              <div class="slick-vertical slick-product">
                <!-- Slick Carousel-->
                <div class="slick-slider carousel-parent" id="carousel-parent" data-items="1" data-swipe="true" data-child="#child-carousel" data-for="#child-carousel">
                  <div class="item">
                    <div class="slick-product-figure"><img src="{{asset('ProductImages/'.$product->image1) }}" alt="" width="530" height="480"/>
                    </div>
                  </div>
                  <div class="item">
                    <div class="slick-product-figure"><img src="{{asset('ProductImages/'.$product->image2) }}" alt="" width="530" height="480"/>
                    </div>
                  </div>
                  <div class="item">
                    <div class="slick-product-figure"><img src="{{asset('ProductImages/'.$product->image3) }}" alt="" width="530" height="480"/>
                    </div>
                  </div>
                </div>
                <div class="slick-slider child-carousel slick-nav-1" id="child-carousel" data-arrows="true" data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-md-vertical="true" data-for="#carousel-parent">
                  <div class="item">
                    <div class="slick-product-figure"><img src="{{asset('ProductImages/'.$product->image1) }}" alt="" width="530" height="480"/>
                    </div>
                  </div>
                  <div class="item">
                    <div class="slick-product-figure"><img src="{{asset('ProductImages/'.$product->image2) }}" alt="" width="530" height="480"/>
                    </div>
                  </div>
                  <div class="item">
                    <div class="slick-product-figure"><img src="{{asset('ProductImages/'.$product->image3) }}" alt="" width="530" height="480"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
            <form  method="POST"  action="{{ route('userhome.update', $product->id ) }} "  class="form-horizontal">
    @csrf
@method('PUT')
              <div class="single-product">
                <h3 class="text-transform-none font-weight-medium">{{$product->pname }}</h3>
                <div class="group-md group-middle">
                  <div class="single-product-price">₹{{$product->price }}</div>
                  <div class="single-product-rating"><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star-half"></span></div>
                </div>
                <p>{{$product->description}}
                  <hr class="hr-gray-100">
                <ul class="list list-description">
                  
                  <li><span>Weight:</span><span>{{$product->weight}} </span></li>
                  <li><span>Calories:</span><span>{{$product->calories}} </span></li>
                  
                  <li><span>Unit:</span><span>{{$product->unit}} </span></li>
                  <li><span>Expdate:</span><span>{{$product->expdate}} </span></li>
                  <li><span>Description:</span><span>{{$product->description}} </span></li>
                  <li><span>Mfgdate:</span><span>{{$product->mfgdate}} </span></li>
                  <li><span>Status:</span><span>{{$product->status}} </span></li>
                  <input type=hidden name="pname" id="pname" value='{{$product->pname }}' />
                  <input type=hidden name="price" id="price" value='{{$product->price }}' />
                  <input type=hidden name="photo" id="photo" value='{{$product->image1 }}' />
                  
                </ul>
                <div class="group-xs group-middle">
                  <div class="product-stepper">
                    <input class="form-input" type="number" name="qty" id="qty" data-zeros="true" value="1" min="1" max="1000">
                  </div>
                  <div><input type=submit  class="button button-lg button-secondary button-zakaria" value="Add to cart" /></div>
                </div>
                <hr class="hr-gray-100">
                <div class="group-xs group-middle"><span class="list-social-title">Share</span>
                  <div>
                    <ul class="list-inline list-social list-inline-sm">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                       <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
</form>
            </div>
          </div>
          
        </div>
      </section>
      @endsection