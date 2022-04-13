@extends('./layout/index')

@section('title', 'Selamat Datangg!')

<!-- hides header -->
@section('header')
@endsection
@section('content')
<style>
    .container-slideshow {
        max-width: 800px;
        /* height: 361px; */
        background-color: #fff;
        margin-left: auto;
        margin-right: auto;
    }

    /* .slider .slick-slide {
        border: solid 1px #000;
    } */

    .slider .slick-slide img {
        width: 100%;
    }

    .slick-dots {
        display: none;
    }

    .listing-search {
      padding: 60px 0 40px;
    }

    .listing-search .breadcrumb {
      background: transparent;
      margin-bottom: 6px;
    }

    .listing-search .breadcrumb li {
      color: #000;
      font-weight: 200;
      font-size: 20px;
      font-family: 'poppins';
      color: #2B4060;
      margin-right: 10px;

    }

    .listing-search .breadcrumb li a {
      color: #000;
      font-weight: 200;
      font-family: 'poppins';
      color: #2B4060;
    }
    ol, ul {
      margin: 0;
      padding: 0;
      list-style: none;
    }
    .card-insureel-cover {
        /* Rectangle 139 */
        width: auto;
        height: auto;
        left: 250px;
        right: 250px;
        top: 140px;

        background: #FFFFFF;
        box-shadow: 0px 25px 50px rgba(19, 15, 15, 0.67);
        border-radius: 13px;
    }
    .car-listing-head{
        color: #2B4060;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 34px;
    }
    .car-listing-title{
        color: #F64C72;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 17px;
        line-height: 21px;
    }
    .btn-default{
        border: 0.55px solid #F64C72;
        color: #F64C72;
        background-color: #FFFFFF;
        width: 90px;
        height: 30px;
        left: 580px;
        top: 356px;
        margin-right: 5px;
        margin-bottom: 5px;


        border: 0.55px solid #F64C72;
        box-sizing: border-box;
        border-radius: 4px;
    }
    .btn-default:hover{
        background-color: #F64C72;
        color: #FFFFFF;
    }
    .btn-default-solid{
        border: 0.55px solid #F64C72;
        color: #FFFFFF;
        background-color: #F64C72;
        font-weight: bold;

        border: 0.55px solid #F64C72;
        box-sizing: border-box;
        border-radius: 4px;
    }
    .btn-xl{
        width: 820px;
        height: 40px;
    }
    .search-form{
        color: #8E99B3;
    }
    .search-form label{
        font-family: Poppins;
        font-size: 14px;
        font-weight: 500 medium;
        line-height: 21px;
        letter-spacing: 0em;
        text-align: left;
        color: #8E99B3;
    }
    .filter-input{
        font-family: Poppins;
        font-size: 15px;
        font-weight: 500 medium;
        line-height: 21px;
        letter-spacing: 0em;
        text-align: left;
        color: #8E99B3;
        margin-bottom: 10px;
    }
    input[type=text] {
        background: transparent;
        border: none;
        border-bottom: 1px solid #9BA5BC;
    }

    .listing-search-slider .carousel .carousel-control i {
      font-size: 40px;
      text-shadow: none;
      color: #555;
    }

    .listing-search-slider .carousel .carousel-indicators li img {
      height: auto;
      width: 70px;
      padding: 0px;
      margin-right: 2vw;
    }

    .listing-search-slider .carousel .carousel-control.right, .listing-search-slider .carousel .carousel-control.left {
      background-image: none;
      top: 40%;
    }

    .listing-search-slider .carousel-indicators {
      margin: 20px 0 0;
      overflow: auto;
      position: relative;
      text-align: left;
      white-space: nowrap;
      width: 100%;
      overflow: hidden;
    }

    .listing-search-slider .carousel-indicators li {
      background-color: transparent;
      border-radius: 0;
      display: inline-block;
      height: auto;
      margin: 0 !important;
      width: auto;
    }

    .listing-search-slider .carousel-indicators li.active img {
      opacity: 1;
    }

    .listing-search-slider .carousel-indicators li:hover img {
      opacity: 0.75;
    }
    .tabRating .nav-tabs {
      border-bottom: 0;
      margin-bottom: 10px;
    }

    .tabRating .nav-tabs li {
      margin-right: 5px;
    }

    .tabRating .nav-tabs li.active a {
      background-color: #000;
      border: 1px solid #000;
      color: #ffffff;
    }

    .tabRating .nav-tabs a {
      border-radius: 0;
      background: #f9f9f9;
    }

    .tabRating .nav-tabs a:hover {
      border: 1px solid transparent;
      background: #000;
      color: #fff;
    }

    .tabRating .tab-content {
      padding: 20px;
      border: 3px solid #f4ca23;
      top: 150px;
    }
    .tabComment .tab-content {
      padding: 20px;
      border: 3px solid #f4ca23;
      top: 150px;
    }
    .bage { 
        background: #e8e4e5;
        color: #000;
        text-align: center;
        border-radius: 4px;
        font-size: 15px;
        padding: 4px 12px;
        font-weight: 300;
        margin: 5px 5px 5px 0 ;
        display: inline-block;
    }
    .total-review {
        color: #f4ca23;
        font-size: 65px;
        top: 20px;
    }
    .comment-avatar {
        width: 41px;
        height: 41px;
        left: 280px;
        top: 1171px;

        background: linear-gradient(132.35deg, #EB73EE -13.47%, #FA97AD 118.52%);
        box-shadow: 0px 45px 80px rgba(246, 76, 114, 0.07);
        border-radius: 20.5px;
    }
    .pull-left {
        float: left !important;
        padding-right: 20px;
    }
    .media-body {
        display: table-cell;
        vertical-align: top;
    }
    .card-product {
        height: 361px;
        padding: 5px;
        top: 2770px;
        box-shadow: 0px 50.4316px 100.863px rgba(125, 125, 125, 0.1);
        border: 0.5px solid #E8E8E8;
        border-radius: 5px;

    }
    .product-benefit li {
        background: #e8e4e5;
        display: inline-block;
        font-size: 14px;
    }
    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
        min-height: 250px;
    }
    .card-product {
        margin-top: 3px;
    }
    .card-icon {
        float: right;
        margin-bottom: 25px;
    }
    .bi-star-fill {
      color: #f4ca23;
      size: 50px;
    }

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<div style="background-color: ">
    <div class="container">
        <div class="">
            <section class="listing-search">
                    <div class="row">
                        <div class="col-md-6 mb-7">
                            <ol class="breadcrumb">
                                <li>Home</li>
                                <li>Shop</li>
                                <li class="active">Single Product</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row mt-20">
                        <div class="col-md-4">
                            <div class="listing-search-slider">
                                <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                                    <div class='carousel-outer'>
                                        <!-- me art lab slider -->
                                        <div class='carousel-inner '>
                                            <div class='item active'>
                                                <img src="{{ asset('img/model/lunamaya.png') }}" alt="" style="border-radius: 12px;width: 100%;" data-zoom-image="images/shop/listing-searchs/product-1.jpg" />
                                            </div>
                                        </div>
                                        
                                        <!-- sag sol -->
                                        <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                                            <i class="tf-ion-ios-arrow-left"></i>
                                        </a>
                                        <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                                            <i class="tf-ion-ios-arrow-right"></i>
                                        </a>
                                    </div>
                                    
                                    <!-- thumb -->
                                    <ol class='carousel-indicators mCustomScrollbar meartlab'>
                                        <li data-target='#carousel-custom' data-slide-to='0' class='active'>
                                            <img src="{{ asset('img/model/lunamaya.png') }}" alt='' style="border-radius: 8px;" />
                                        </li>
                                        <li data-target='#carousel-custom' data-slide-to='1'>
                                            <img src="{{ asset('img/model/lunamaya.png') }}" alt='' style="border-radius: 8px;" />
                                        </li>
                                        <li data-target='#carousel-custom' data-slide-to='2'>
                                            <img src="{{ asset('img/model/lunamaya.png') }}" alt='' style="border-radius: 8px;" />
                                        </li>
                                        <li data-target='#carousel-custom' data-slide-to='3'>
                                            <img src="{{ asset('img/model/lunamaya.png') }}" alt='' style="border-radius: 8px;" />
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="car-listing-head">
                                <h2><strong>Car Insurance</strong></h2><br>
                            </div>    
                            <p class="car-listing-title">
                                Model Kendaraan Anda 
                            </p>
                            <br>
                            <div class="col-sm-12">
                            <hr style="border-color: #F64C72;width: 285px;">
                                <button class="btn-default">Honda</button>
                                <button class="btn-default">Toyota</button>
                                <button class="btn-default">Suzuki</button>
                                <button class="btn-default">Audi</button>
                                <button class="btn-default">Nissan</button>
                                <button class="btn-default">BMW</button>
                                <button class="btn-default">More</button>
                            </div>
                            <div class="form-group" style="margin-top: 15px;">
                                    <form class="search-form">
                                    <div class="">
                                        <input type="text" name="" class="form-control filter-input" placeholder="Tipe">
                                    </div>
                                    <div class="">
                                        <input type="text" name="" class="form-control filter-input" placeholder="No Kendaraan">
                                    </div>
                                    <div class="">
                                        <input type="text" name="" class="form-control filter-input" placeholder="Harga">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group" style="margin-top: 100px;">
                                <div class="col-sm-12">
                                    <div class="">
                                        <input type="text" name="" class="form-control filter-input" placeholder="Model">
                                    </div>
                                    <div class="">
                                        <input type="text" name="" class="form-control filter-input" placeholder="Tahun">
                                    </div>
                                    <div class="">
                                        <input type="text" name="" class="form-control filter-input" placeholder="Provinsi">
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-8">
                            <button class="btn-default-solid btn-xl">Lihat Produk</button>
                        </div>
                    </div>
                    <div class="row mt-20">
                        <div class="col-md-12">
                            <div class="tabRating">
                                <div class="tab-content patternbg">
                                    <div id="details" class="tab-pane active in">
                                        <h2>Review Pelanggan &nbsp;
                                            <text class="total-review">4.8</text>
                                            <i class="fa fa-star"></i>
                                        </h2>
                                        <br>
                                        <span class="bage">Verified Claim<br>(20)</span>
                                        <span class="bage">Verified Purchase<br>(20)</span>
                                        <span class="bage">Murah<br>(8)</span>
                                        <span class="bage">Klaim Cepat<br>(10)</span>
                                        <span class="bage">Baik<br>(8)</span>
                                        <span class="bage">Mantap<br>(8)</span>
                                        <span class="bage">Responsive<br>(20)</span>
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-20">
                        <div class="col-md-12">
                            <div class="tabComment">
                                <div class="tab-content patternbg">
                                    <div id="reviews">
                                        <div class="post-comments">
                                            <ul class="media-list comments-list m-bot-50 clearlist">
                                                <!-- Comment Item start-->
                                                <li class="media">

                                                    <a class="pull-left" href="#!">
                                                        <img class="media-object comment-avatar" src="img/icon/avatar-1.png" alt="" width="50" height="50" />
                                                    </a>

                                                    <div class="media-body">
                                                        <div class="comment-info">
                                                            <h4 class="comment-author">
                                                                <a href="#!">Arnold Poe</a>
                                                                
                                                            </h4>
                                                            <time datetime="2013-04-06T13:53">July 02, 2015, at 11:34</time>
                                                            <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
                                                        </div>

                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod laborum minima, reprehenderit laboriosam officiis praesentium? Impedit minus provident assumenda quae.
                                                        </p>
                                                    </div>

                                                </li>
                                                <!-- End Comment Item -->

                                                <!-- Comment Item start-->
                                                <li class="media">

                                                    <a class="pull-left" href="#!">
                                                        <img class="media-object comment-avatar" src="img/icon/avatar-1.png" alt="" width="50" height="50" />
                                                    </a>

                                                    <div class="media-body">

                                                        <div class="comment-info">
                                                            <div class="comment-author">
                                                                <a href="#!">Arnold Poe</a>
                                                            </div>
                                                            <time datetime="2013-04-06T13:53">July 02, 2015, at 11:34</time>
                                                            <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
                                                        </div>

                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni natus, nostrum iste non delectus atque ab a accusantium optio, dolor!
                                                        </p>

                                                    </div>

                                                </li>
                                                <!-- End Comment Item -->

                                                <!-- Comment Item start-->
                                                <li class="media">

                                                    <a class="pull-left" href="#!">
                                                        <img class="media-object comment-avatar" src="img/icon/avatar-1.png" alt="" width="50" height="50">
                                                    </a>

                                                    <div class="media-body">

                                                        <div class="comment-info">
                                                            <div class="comment-author">
                                                                <a href="#!">Arnold Poe</a>
                                                            </div>
                                                            <time datetime="2013-04-06T13:53">July 02, 2015, at 11:34</time>
                                                            <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
                                                        </div>

                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                                                        </p>

                                                    </div>

                                                </li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- div row -->
                    <div class="row mt-20">
                        <div class="col-md-3">
                            <div class="card-product">
                                <div class="card-body">

                                    <img src="{{ asset('img/icon/mobil.png') }}" class="card-icon" width="100%" alt="">
                                    <ul class="product-benefit">
                                        <li>Free Rp200.000 petrol voucher</li>
                                        <li>Self Claims Video</li>
                                        <li>Discount 10%</li>
                                    </ul>
                                    <h2 class="product-title">Asuransi Mobil KB Insurance</h2>
                                    <h5>4.8<span><i class="bi bi-star-fill fa-2x"></i></span>13,244 Sold</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-product">
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-product">
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-product">
                                
                            </div>
                        </div>
                    </div><!-- div row -->
            </section>
        </div>
    </div>
</div>

 <!-- JQuery -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<!-- Slick JS -->    
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<!-- Our Script -->
<script>
    $(document).ready(function(){
        $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 2500,
        dots: true
        });
    });
</script>

@endsection