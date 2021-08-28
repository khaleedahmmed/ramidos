
<div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
    data-owl-options='{
        "nav": false, 
        "dots": false,
        "margin": 20,
        "loop": false,
        "responsive": {
            "0": {
                "items":2
            },
            "480": {
                "items":2
            },
            "992": {
                "items":3
            },
            "1200": {
                "items":4
            }
        }
    }'>
    @foreach ($chemicals as $chemical)
    <div class="product product-2">
        <figure class="product-media">
            {{-- <span class="product-label label-circle label-sale">Sale</span> --}}
            {{-- <span class="product-label label-circle label-new">New</span> --}}

            <a href="product.html" style="height: 200px">
                <img style="" src="{{ url('/uploads/chemical/'.$chemical->image) }}" alt="Product image" class="product-image">
            </a>

            {{-- <div class="product-countdown" data-until="2019, 11, 2"></div> --}}
            <!-- End .product-countdown -->

            <div class="product-action-vertical">
                {{-- <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>share</span></a> --}}
            </div><!-- End .product-action -->

            <div class="product-action product-action-dark">
                @if($chemical->shared==1)
                <a href="#" class="btn-product btn-cart"><span>Share</span></a>
               @endif
                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>Buy</span></a>
            </div><!-- End .product-action -->
        </figure><!-- End .product-media -->

        <div class="product-body">
            <div class="product-cat">
                <span>{{ $chemical->company_name }}</span>
            </div><!-- End .product-cat -->
            <h3 class="product-title"><a href="product.html">{{ $chemical->name }}</a></h3><!-- End .product-title -->
            <p > {{ substr($chemical->description, 0, 40).'...' }}</p><!-- End .product-description -->
            <div class="product-price">
            @if($chemical->discount>0)
                <span class="new-price">{{ $chemical->price - $chemical->discount }} .00</span>
                <span class="old-price">{{ $chemical->price }}</span>
            @else
            <span class="new-price">{{ $chemical->price}}</span>
            @endif
            </div><!-- End .product-price -->
            <div class="ratings-container">
                {{-- <div class="ratings">
                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                </div><!-- End .ratings --> --}}
                {{-- <span class="ratings-text">( 4 Reviews )</span> --}}
            </div><!-- End .rating-container -->
        </div><!-- End .product-body -->
    </div><!-- End .product -->
    @endforeach
</div><!-- End .owl-carousel -->
