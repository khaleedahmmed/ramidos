{{-- <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing mt-3">
    <div class="form-group">
        <x-input wire:model="from" class="d-inline-block mx-2" type="date" name="from">{{ __('admin.from') }}</x-input>

        <x-input wire:model="to" class="d-inline-block mx-2" type="date" name="to">{{ __('admin.to') }}</x-input>
    </div>
    <div class="row">
        
        <div style="" class="col-lg-3 col">
          <div class="small-box bg-info">
            <div class="inner">
                <svg style="float: right" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                <div class="d-flex">
                <h3>{{ $customerCount }}</h3>
              </div>

              <p style="color: white">{{ __('admin.customers') }}</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{ url('/customers') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div style="" class="col-lg-3 col">
          <!-- small box -->
          <div class="small-box bg-warning">

            <div style=" color:white" class="inner">
                <svg style="float: right" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                <div class="d-flex">
                <h3>{{ $orderCount }}</h3>
              </div>

              <p style="color: white">{{ __('admin.orders') }}</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a  href="{{ url('/order-details') }}" class="small-box-footer"><span style=" color:white">More info <i class="fas fa-arrow-circle-right"></i></span></a>
          </div>
        </div>

        <div style="" class="col-lg-3 col">
            <!-- small box -->
            <div class="small-box bg-success">
  
              <div class="inner">
                  <svg style="float: right"  xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                  <div class="d-flex">
                  <h3>{{ $complainCount }}</h3>
                </div>
  
                <p style="color: white">{{ __('admin.complains') }}</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ url('/complains') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        <div style="" class="col-lg-3 col">
          <!-- small box -->
          <div class="small-box bg-danger">

            <div class="inner">
                <svg style="float: right" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                <div class="d-flex">
                <h3>{{ $inquireCount }}</h3>
              </div>

              <p style="color: white">{{ __('admin.inquires') }}</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{ url('/inquires') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
 </div>
</div> --}}
