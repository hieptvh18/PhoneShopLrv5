@extends('layouts.master')

@section('title', 'Về chúng tôi')

@section('content')

  <section class="bread-crumb">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home_page') }}">{{ __('header.Home') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">Về chúng tôi</li>
      </ol>
    </nav>
  </section>

  <div class="site-about">
    <section class="section-advertise">
      <div class="content-advertise">
        <div id="slide-advertise" class="owl-carousel">
          @foreach($advertises as $advertise)
            <div class="slide-advertise-inner" style="background-image: url('{{ Helper::get_image_advertise_url($advertise->image) }}');" data-dot="<button>{{ $advertise->title }}</button>"></div>
          @endforeach
        </div>
      </div>
    </section>

    <section class="section-about">
      <div class="section-header">
        <h2 class="section-title">Về chúng tôi</h2>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-md-9 col-sm-8">
            <div class="content-left">
              <div class="note">
                <div class="note-icon"><i class="fas fa-info-circle"></i></div>
                <div class="note-content">
                  <p>website <strong>DienThoaiGiaKho</strong> là một Sản Phẩm của đồ án tốt nghiệp đề tài: <i>Thiết kế website bán điện thoại</p>
                </div>
              </div>
              <div class="content">
                <p>DienThoaiGiaKho là trang web chuyên bán điện thoại được nhập chính hãng từ nhà sản xuất hàng đầu thế giới như: Apple, Samsung, Oppo, Xiaomi, Huawei, Asus...
                Ngày này trong nhịp sống hối hả của con người thì việc giành thời gian để ra ngoài để mua sắm trở nên là 1 điều quá xa sỉ.. Những lo lắng về giao thông không an toàn và hạn chế trong việc mua hàng truyền thống có thể tránh được trong khi mua sắm trực tuyến. Với mua sắm trực tuyến(online), bạn cũng không cần phải lo lắng về điều kiện thời tiết. Người tiêu dùng và các khách hàng là những tổ chức, công ty,… đang dần chuyển sang mua sắm trực tuyến nhiều hơn nhằm tiết kiệm thời gian

Chính vì thế việc mua sắm online càng trở nên quan trọng và cần thiết,chỉ cần 1 cú click chuột thì họ có thể có được Sản Phẩm mà mình mong muốn.Việc mua sắm online có nhiều ưu điểm là có thể sở hữu mọi thứ thông qua các cú click chuột chứ không cần phải đến tận nơi để mua hàng. Sau khi vào website bán hàng, chọn Sản Phẩm, chỉ cần đặt hàng (order) người bán sẽ mang Sản Phẩm đến tận nhà bạn. Mua sắm online cho phép mua hàng bất cứ khi nào bạn muốn. Các cửa hang trên mạng không bao giờ đóng cửa, có thể mua sắm 24/24 giờ và 7 ngày trong tuần. Mua sắm ở các chợ, trung tâm thương mại hay cửa hàng rất khó để bạn có thể so sánh đặc điểm và giá của Sản Phẩm với nhau. Khi mua hàng online, bạn dễ dàng so sánh và đưa ra lựa chọn Sản Phẩm phù hợp nhất. Đôi khi bạn gặp phải những người bán hàng khó tính tại một số địa điểm bán hàng. Mua sắm online thì khách hàng chẳng phải để ý đến chuyện ấy nữa.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="content-right">
              <div class="online_support">
                <h2 class="title">CHÚNG TÔI LUÔN SẴN SÀNG<br>ĐỂ GIÚP ĐỠ BẠN</h2>
                <img src="{{ asset('images/support_online.jpg') }}">
                <h3 class="sub_title">Để được hỗ trợ tốt nhất. Hãy gọi</h3>
                <div class="phone">
                  <a href="tel:18006750" title="0705272760">0705272760</a>
                </div>
                <div class="or"><span>HOẶC</span></div>
                <h3 class="title"><a href="https://forms.gle/LLbbNCwdF7gL1tL27">Chat hỗ trợ trực tuyến</a></h3>
                <h3 class="sub_title">Chúng tôi luôn trực tuyến 24/7.</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

@endsection

@section('css')
  <style>
    .slide-advertise-inner {
      background-repeat: no-repeat;
      background-size: cover;
      padding-top: 21.25%;
    }
    #slide-advertise.owl-carousel .owl-item.active {
      -webkit-animation-name: zoomIn;
      animation-name: zoomIn;
      -webkit-animation-duration: .6s;
      animation-duration: .6s;
    }
  </style>
@endsection

@section('js')
  <script>
    $(document).ready(function(){

      $("#slide-advertise").owlCarousel({
        items: 2,
        autoplay: true,
        loop: true,
        margin: 10,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        responsive:{
          0:{
            items: 1,
          },
          992:{
            items: 2,
            animateOut: 'zoomInRight',
            animateIn: 'zoomOutLeft',
          }
        },
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>']
      });
    });
  </script>
@endsection
