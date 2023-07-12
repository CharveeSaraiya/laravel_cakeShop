  @extends('user.userheader')
  @section('content')
          <script language="javascript">
            function find()
            {
              var val1=document.getElementById("value-1").value;
              var val2=document.getElementById("value-2").value;
              var cat=document.getElementById("input-group-radio").value;
            alert(val1);
            alert(val2);
            alert(cat);
            
            var selected = new Array();
 
 //Reference the Table.
 var catlist = document.getElementById("catlist");

 //Reference all the CheckBoxes in Table.
 var chks = catlist.getElementsByTagName("INPUT");

 // Loop and push the checked CheckBox value in Array.
 for (var i = 0; i < chks.length; i++) {
     if (chks[i].checked) {
         selected.push(chks[i].value);
     }
 }

 //Display the selected CheckBox values.
 if (selected.length > 0) {
     alert("Selected values: " + selected.join(","));
 }
 var clist=selected.join(",");
 var xhtp;
xhtp = new XMLHttpRequest();
var data = "value1=" + val1+"&value2="+val2+"&catlist="+clist;
alert(data);     

alert("/search?"+data);
xhtp.open("GET", "/search?"+data, true); 
xhtp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhtp.send();
xhtp.onreadystatechange = display_data;
   
  function display_data() {
   if (xhtp.readyState == 4) {
      if (xhtp.status == 200) {
       alert(xhtp.responseText);    
    document.getElementById("suggestion").innerHTML = xhtp.responseText;
      } else {
        alert('There was a problem with the request.');
      }
     }
  }
 
            }
            </script>
          <div class="row row-50">
            <div class="col-lg-4 col-xl-3">
              <div class="aside row row-30 row-md-50 justify-content-md-between">
                <div class="aside-item col-12">
                  <h6 class="aside-title">Filter by Price</h6>
                  <!-- RD Range-->
                  <div class="ch-range" data-min="0" data-max="999" data-min-diff="100" data-start="[66, 235]" data-step="1" data-tooltip="false" data-input=".ch-range-input-value-1" data-input-2=".ch-range-input-value-2"></div>
                  <div class="group-xs group-justify">
                    <div>
                      <div class="ch-range-wrap">
                        <div class="ch-range-title">Price:</div>
                        <div class="ch-range-form-wrap"><span> ₹ </span>
                          <input class="ch-range-input ch-range-input-value-1" type="text" id="value-1" name="value-1">
                        </div>
                        <div class="ch-range-divider"></div>
                        <div class="ch-range-form-wrap"><span> ₹ </span>
                          <input class="ch-range-input ch-range-input-value-2" type="text" id="value-2" name="value-2">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="aside-item col-sm-6 col-md-5 col-lg-12">
                  <h6 class="aside-title">Categories</h6>
                  <ul class="list-shop-filter" id="catlist">
                  <!-- <li>
                      <label class="checkbox-inline">
                        <input name="input-group-radio" id="input-group-radio" value="All" type="checkbox">All
                      </label> 
                    </li> -->
                    @foreach ($category as $cdata)
                    
                    <li>
                      <label class="checkbox-inline">
                        <input name="input-group-radio" id="input-group-radio" value="{{$cdata->id}}" type="checkbox">{{$cdata->cname}}
                      </label><span class="list-shop-filter-number">(9)</span>
                    </li>
                    @endforeach
                    <!-- <li>
                      <label class="checkbox-inline">
                        <input name="input-group-radio" value="checkbox-3" type="checkbox">Macarons
                      </label><span class="list-shop-filter-number">(5)</span>
                    </li>
                    <li>
                      <label class="checkbox-inline">
                        <input name="input-group-radio" value="checkbox-4" type="checkbox">Other Pastry
                      </label><span class="list-shop-filter-number">(8)</span>
                    </li> -->
                  </ul>
                  <!-- RD Search Form-->
                  <!-- <form class="ch-search form-search form-custom" action="http://malikhassan.com/blog_designer/tehzeeb/html/search-results.html" method="GET">
                    <div class="form-wrap">
                      <input class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                      <label class="form-label" for="search-form">Search in shop...</label>
                      <button class="button-search fl-bigmug-line-search74" type="submit"></button>
                    </div>
                  </form> -->
                  <br/>
                  <div>
                      <button class="button-secondary" type="button" onclick="find()">Search Products</button>
                    </div>
                    
                </div>
                <div class="aside-item col-sm-6 col-lg-12">
                  <h6 class="aside-title">Popular products</h6>
                  <div class="row row-10 row-lg-20 gutters-10">
                    <div class="col-4 col-sm-6 col-md-12">
                      <!-- Product Minimal-->
                      <article class="product-minimal">
                        <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                          <div class="unit-left"><a class="product-minimal-figure" href="single-product.html"><img src="{{url('images/shop/product-mini-1.png')}}" alt="" width="106" height="104"/></a></div>
                          <div class="unit-body">
                            <p class="product-minimal-title"><a href="single-product.html">Birthday Cake</a></p>
                            <p class="product-minimal-price"> ₹ 22.00</p>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-4 col-sm-6 col-md-12">
                      <!-- Product Minimal-->
                      <article class="product-minimal">
                        <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                          <div class="unit-left"><a class="product-minimal-figure" href="single-product.html"><img src="{{url('images/shop/product-mini-2.png')}}" alt="" width="106" height="104"/></a></div>
                          <div class="unit-body">
                            <p class="product-minimal-title"><a href="single-product.html">White Cupcake</a></p>
                            <p class="product-minimal-price"> ₹10.00</p>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-4 col-sm-6 col-md-12">
                      <!-- Product Minimal-->
                      <article class="product-minimal">
                        <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                          <div class="unit-left"><a class="product-minimal-figure" href="single-product.html"><img src="{{url('images/shop/product-mini-3.png')}}" alt="" width="106" height="104"/></a></div>
                          <div class="unit-body">
                            <p class="product-minimal-title"><a href="single-product.html">Summer Cupcake</a></p>
                            <p class="product-minimal-price"> ₹ 11.00</p>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-xl-9">
              <div class="product-top-panel group-md">
                <p class="product-top-panel-title">Showing 1–9 of 28 results</p>
                <div>
                  <div class="group-sm group-middle">
                    <div class="product-top-panel-sorting">
                      <select>
                        <option value="1">Sort by newness</option>
                        <option value="2">Sort by popularity</option>
                        <option value="3">Sort by alphabet</option>
                      </select>
                    </div>
                    <div class="product-view-toggle"><a class="mdi mdi-apps product-view-link product-view-grid active" href="grid-shop.html"></a><a class="mdi mdi-format-list-bulleted product-view-link product-view-list" href="shop-list.html"></a></div>
                  </div>
                </div>
              </div>
              <div class="row row-30 row-lg-50" id="suggestion">

              @foreach ($product as $pdata)
              
                   <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4"> 
          <!-- Product-->
          <article class="product wow fadeInRight">
            <div class="product-body">
              <div class="product-figure"><img src="{{asset('ProductImages/'.$pdata->image1) }}" alt="" width="148" height="128"/> </div>
              <h5 class="product-title"><a href="{{ route('userhome.show',$pdata->id) }}">{{$pdata->pname}}</a></h5>
              <div class="product-price-wrap">
                <div class="product-price product-price-old">₹{{$pdata->price}}</div>
                <div class="product-price">₹{{$pdata->price}}</div>
              </div>
            </div>
            <span class="product-badge product-badge-sale">Sale</span>
            <div class="product-button-wrap">
              <div class="product-button"><a class="button button-gray-14 button-zakaria fl-bigmug-line-search74" href="{{ route('userhome.show',$pdata->id) }}"></a></div>
              <div class="product-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="/cartś"></a></div>
            </div>
          </article>
        </div>
             @endforeach

 

                
              </div>
              <div class="pagination-wrap">
                <!-- Bootstrap Pagination-->
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <li class="page-item page-item-control disabled"><a class="page-link" href="#" aria-label="Previous"><span class="icon" aria-hidden="true"></span></a></li>
                    <li class="page-item active"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item page-item-control"><a class="page-link" href="#" aria-label="Next"><span class="icon" aria-hidden="true"></span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
                  </section>
 @endsection