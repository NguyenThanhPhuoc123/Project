@extends('layout.master')

@section('content')
</div>

<!-- about section -->

<section class="about_section layout_padding">
  <div class="container  ">

    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="{{$product_detail -> img}}" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              {{$product_detail-> name}}
            </h2>
            <h4>
              Loại: {{$product_detail -> loai}}
            </h4>
            <h5>
              Giá: {{$product_detail -> gia}} $
            </h5>
            <input type="number" value="1" class="quantity_detail">
          </div>
          <p>
            Mô tả : {{$product_detail -> chitiet}}
          </p>
          <a href="">
            Mua hàng
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->
@endsection