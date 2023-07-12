@extends('user.userheader')

@section('content')
  <section class="section section-xl bg-default">
        <div class="container">
          <!-- shopping-cart-->
          <div class="table-custom-responsive">
            <table class="table-custom table-cart">
              <thead>
                <tr>
                  <th>Product name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>

              
             
             @php 
              $total=0
             @endphp
             @foreach($cart as $ct)
                <tr>
                  <td><a class="table-cart-figure" href="single-product.html"><img src="{{asset('ProductImages/'.$ct->photo) }}" alt="" width="146" height="132"/></a>
                  <a class="table-cart-link" href="single-product.html">{{$ct->pname}}</a></td>
                  <td>₹ {{$ct->price}}</td>
                  <td>
                    <div class="table-cart-stepper">
                      <input class="form-input" type="number" data-zeros="true" value="{{$ct->qty}}" min="1" max="1000">
                    </div>
                  </td>
                  <td>₹ {{$ct->price}}</td>
                </tr>
                 @php 
                 
                 $total=$total +$ct->price *$ct->qty  ;
                 @endphp
                @endforeach

              </tbody>
            </table>
          </div>
          <div class="group-xl group-justify justify-content-center justify-content-md-between">
            <div>
              <form class="ch-form ch-mailform ch-form-inline ch-form-coupon">
                <div class="form-wrap">
                  <input class="form-input form-input-inverse" id="coupon-code" type="text" name="text">
                  <label class="form-label" for="coupon-code">Coupon code</label>
                </div>
                <div class="form-button">
                  <button class="button button-lg button-primary button-zakaria" type="submit">Apply</button>
                </div>
              </form>
            </div>
            <div>
              <div class="group-xl group-middle">
                <div>
                  <div class="group-md group-middle">
                    <div class="heading-5 font-weight-medium text-gray-500"><b>Total</b></div>
                    <div > <b>₹ @php echo $total; @endphp</b></div>
                  </div>
                </div><a class="button button-lg button-primary button-zakaria" href="{{url('/checkout')}}">Proceed to checkout</a>
              </div>
            </div>
          </div>
        </div>
      </section>
 @endsection