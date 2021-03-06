@extends('master')
@section('main')
  <!-- Featured Image -->
  <div class="featured-image" style="background-image: url( {{asset('library/MD-shop/img/featured-image/account.jpg')}});"></div>

  <!-- Content -->
  <section class="container padding-top-3x">
    <h1 class="mobile-center">Howdy, <span class="text-semibold">John</span></h1>
    <div class="row padding-top">
      <div class="col-sm-9 padding-bottom-2x">
        <!-- Nav Tabs -->
        <ul class="nav-tabs mobile-center" role="tablist">
          <li class="active"><a href="#profile" role="tab" data-toggle="tab">
            <i class="material-icons person"></i>
            Profile
          </a></li>
          <li><a href="#orders" role="tab" data-toggle="tab">
            <i class="material-icons shopping_cart"></i>
            Orders (3)
          </a></li>
          <li><a href="#whishlist" role="tab" data-toggle="tab">
            <i class="material-icons favorite"></i>
            Whishlist (6)
          </a></li>
        </ul><!-- .nav-tabs -->

        <!-- Tab Panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane transition fade scale in active" id="profile">
            <form method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-element">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" class="form-control" value="John">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-element">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" class="form-control" value="Doe">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-element">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" class="form-control" value="johndoe@mail.com">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-element">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" class="form-control" value="+1 809 765 350 92">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-element">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" value="abracadabra">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-element">
                    <label for="password_confirm">Confirm Password</label>
                    <input type="password" id="password_confirm" class="form-control" value="abracadabra">
                  </div>
                </div>
              </div>
              <div class="form-element">
                <label for="address">Address</label>
                <input type="text" id="address" class="form-control" value="33 Bedford Str.">
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <label for="country">Country</label>
                  <div class="form-element form-select">
                    <select class="form-control" id="country">
                      <option value="">Country</option>
                      <option value="australia">Australia</option>
                      <option value="gb">Great Britain</option>
                      <option value="poland">Poland</option>
                      <option value="switzerland">Switzerland</option>
                      <option value="usa" selected>USA</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <label for="state">State</label>
                  <div class="form-element form-select">
                    <select class="form-control" id="state">
                      <option value="">State</option>
                      <option value="1" selected>New York</option>
                      <option value="2">State 2</option>
                      <option value="3">State 3</option>
                      <option value="4">State 4</option>
                      <option value="5">State 5</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <label for="city">City</label>
                  <div class="form-element form-select">
                    <select class="form-control" id="city">
                      <option value="">City</option>
                      <option value="bern">Bern</option>
                      <option value="london">London</option>
                      <option value="ny" selected>New York</option>
                      <option value="warsaw">Warsaw</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-element">
                    <label for="zip">ZIP Code</label>
                    <input type="text" id="zip" class="form-control" value="10021">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <label class="checkbox space-top">
                    <input type="checkbox" checked> Subscribe me to newsletter
                  </label>
                </div>
                <div class="col-sm-6 text-right mobile-center">
                  <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
                </div>
              </div>
            </form>
          </div><!-- .tab-pane#profile -->
          <div role="tabpanel" class="tab-pane transition fade scale" id="orders">
            <div class="table-responsive">
              <table>
                <thead>
                  <tr>
                    <th>Order #</th>
                    <th>Date Purchased</th>
                    <th>Status</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="#">31719DA0567</a></td>
                    <td>December 06, 2016</td>
                    <td><span class="text-warning">In Progress</span></td>
                    <td>$1,350.00</td>
                  </tr>
                  <tr>
                    <td><a href="#">22018770CV7</a></td>
                    <td>November 11, 206</td>
                    <td><span class="text-danger">Canceled</span></td>
                    <td>$475.60</td>
                  </tr>
                  <tr>
                    <td><a href="#">4B33FG45520</a></td>
                    <td>September 23, 2016</td>
                    <td><span class="text-success">Delivered</span></td>
                    <td>$2,140.80</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- .tab-pane#orders -->
          <div role="tabpanel" class="tab-pane transition fade scale" id="whishlist">
            <div class="row">
              <!-- Item -->
              <div class="col-md-4 col-sm-6">
                <div class="shop-item">
                  <div class="shop-thumbnail">
                    <a href="shop-single.html" class="item-link"></a>
                    <img src="img/shop/th02.jpg" alt="Shop item">
                    <div class="shop-item-tools">
                      <a href="#" class="add-to-whishlist" data-toggle="tooltip" title="Remove from wishlist">
                        <i class="material-icons close"></i>
                      </a>
                      <a href="#" class="add-to-cart">
                        <em>Add to Cart</em>
                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                          <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <div class="shop-item-details">
                    <h3 class="shop-item-title"><a href="shop-single.html">Shoulder Bag</a></h3>
                    <span class="shop-item-price">
                      $125.00
                    </span>
                  </div>
                </div><!-- .shop-item -->
              </div>
              <!-- Item -->
              <div class="col-md-4 col-sm-6">
                <div class="shop-item">
                  <div class="shop-thumbnail">
                    <a href="shop-single.html" class="item-link"></a>
                    <img src="img/shop/th05.jpg" alt="Shop item">
                    <div class="shop-item-tools">
                      <a href="#" class="add-to-whishlist" data-toggle="tooltip" title="Remove from wishlist">
                        <i class="material-icons close"></i>
                      </a>
                      <a href="#" class="add-to-cart">
                        <em>Add to Cart</em>
                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                          <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <div class="shop-item-details">
                    <h3 class="shop-item-title"><a href="shop-single.html">Wall Clock</a></h3>
                    <span class="shop-item-price">
                      $69.00
                    </span>
                  </div>
                </div><!-- .shop-item -->
              </div>
              <!-- Item -->
              <div class="col-md-4 col-sm-6">
                <div class="shop-item">
                  <div class="shop-thumbnail">
                    <a href="shop-single.html" class="item-link"></a>
                    <img src="img/shop/th06.jpg" alt="Shop item">
                    <div class="shop-item-tools">
                      <a href="#" class="add-to-whishlist" data-toggle="tooltip" title="Remove from wishlist">
                        <i class="material-icons close"></i>
                      </a>
                      <a href="#" class="add-to-cart">
                        <em>Add to Cart</em>
                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                          <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <div class="shop-item-details">
                    <h3 class="shop-item-title"><a href="shop-single.html">LED Lighting</a></h3>
                    <span class="shop-item-price">
                      $130.00
                    </span>
                  </div>
                </div><!-- .shop-item -->
              </div>
              <!-- Item -->
              <div class="col-md-4 col-sm-6">
                <div class="shop-item">
                  <div class="shop-thumbnail">
                    <a href="shop-single.html" class="item-link"></a>
                    <img src="img/shop/th08.jpg" alt="Shop item">
                    <div class="shop-item-tools">
                      <a href="#" class="add-to-whishlist" data-toggle="tooltip" title="Remove from wishlist">
                        <i class="material-icons close"></i>
                      </a>
                      <a href="#" class="add-to-cart">
                        <em>Add to Cart</em>
                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                          <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <div class="shop-item-details">
                    <h3 class="shop-item-title"><a href="shop-single.html">Hook Basket</a></h3>
                    <span class="shop-item-price">
                      $112.35
                    </span>
                  </div>
                </div><!-- .shop-item -->
              </div>
              <!-- Item -->
              <div class="col-md-4 col-sm-6">
                <div class="shop-item">
                  <div class="shop-thumbnail">
                    <a href="shop-single.html" class="item-link"></a>
                    <img src="img/shop/th11.jpg" alt="Shop item">
                    <div class="shop-item-tools">
                      <a href="#" class="add-to-whishlist" data-toggle="tooltip" title="Remove from wishlist">
                        <i class="material-icons close"></i>
                      </a>
                      <a href="#" class="add-to-cart">
                        <em>Add to Cart</em>
                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                          <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <div class="shop-item-details">
                    <h3 class="shop-item-title"><a href="shop-single.html">Stylish Chair</a></h3>
                    <span class="shop-item-price">
                      $417.00
                    </span>
                  </div>
                </div><!-- .shop-item -->
              </div>
              <!-- Item -->
              <div class="col-md-4 col-sm-6">
                <div class="shop-item">
                  <div class="shop-thumbnail">
                    <a href="shop-single.html" class="item-link"></a>
                    <img src="img/shop/th15.jpg" alt="Shop item">
                    <div class="shop-item-tools">
                      <a href="#" class="add-to-whishlist" data-toggle="tooltip" title="Remove from wishlist">
                        <i class="material-icons close"></i>
                      </a>
                      <a href="#" class="add-to-cart">
                        <em>Add to Cart</em>
                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                          <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <div class="shop-item-details">
                    <h3 class="shop-item-title"><a href="shop-single.html">Tissue Holder</a></h3>
                    <span class="shop-item-price">
                      $76.40
                    </span>
                  </div>
                </div><!-- .shop-item -->
              </div>
            </div>
          </div><!-- .tab-pane#whishlist -->
        </div><!-- .tab-content -->
      </div><!-- .col-sm-8 -->

      <!-- Sidebar -->
      <div class="col-sm-3 padding-bottom-2x">
        <aside class="mobile-center">
          <h3>Your reward points:</h3>
          <h3><span class="text-semibold">1356</span> <span class="h5">points</span></h3>
          <p class="text-sm text-gray">You can spend these points on products from our shop catalog, to reduce shipping cost, etc.</p>
          <a href="shop-boxed-sl.html" class="btn btn-default btn-ghost icon-left btn-block">
            <i class="material-icons arrow_back"></i>
            Go to Shop
          </a>
          <a href="#" class="btn btn-primary btn-block waves-effect waves-light space-top-none">Get more points</a>
        </aside>
      </div><!-- .col-sm-4 -->
    </div><!-- .row -->
  </section><!-- .container -->

    
@endsection