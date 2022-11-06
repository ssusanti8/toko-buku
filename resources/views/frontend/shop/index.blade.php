@extends('layouts.frontend')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/bread.png') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
              <h2>BOOK STORE</h2>
              <div class="breadcrumb__option">
                <a href="/">Home</a>
                <span>About Us</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->
<br>
    <p>Menulis BUKU tidaklah mudah.

Disaat seseorang menulis sebuah BUKU, siapapun orang itu, dari pegawai sederhana sampai pemimpin negara, Ia akan memberi seluruh kemampuan, tenaga, dan kepintarannya, untuk disalurkan kepada karyanya sendiri.

Disitulah, terungkap sebuah pribadi yang begitu transaparan, dan kualitas yang begitu jelas.

Toko Buku Karisma percaya bahwa setiap orang berhak mendapat akses ke kualitas tersebut. 

Kami adalah sebuah distributor, percetakan, dan penerbit dari ribuan karya penulis di seluruh dunia. Sejak tahun 1994, Karisma selalu gembira melayani pembaca-pembaca buku dalam bahasa Indonesia ataupun bahasa Inggris.

Selamat datang di website kami, semoga Anda menikmati pengalaman yang baru dalam membeli buku, alat tulis, ataupun produk berkualitas lainnya.</p>
    <!-- Product Section Begin -->
    <section class="product spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-5">
            @include('frontend.shop.sidebar')
          </div>
          <div class="col-lg-9 col-md-7" id="product-shop">
           
          </div>
        </div>
      </div>
    </section>
    <!-- Product Section End -->
@endsection
