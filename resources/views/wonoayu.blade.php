@extends('layouts.cobalayout')

@section('content')
        {{-- Carousel --}}
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($sliders as $slider)
                <div class="carousel-item @if($loop->first) active @endif">
                <a href="{{ $slider->link }}" target="_blank" rel="noopener noreferrer"><img src="{{ $slider->takeImage }}/{{ $slider->imageslider }}" class="d-block w-100" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                    <h3>{{ $slider->title }}</h3>
                    <p>{{ $slider->subtitle }}</p>
                </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        {{-- Tentang Desa --}}
        <section id="about">
            <div class="container">
                <div class="row">

                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                    <img src="http://via.placeholder.com/463x686" alt="">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="about-content">
                    <h2>Tentang Desa</h2>
                    <h3>Singkat tentang Wonoayu.</h3>
                    <p>Wonoayu adalah sebuah desa di wilayah Kecamatan Wajak, Kabupaten Malang, Provinsi Jawa Timur. Desa ini terletak sekitar 37 km dari kabupaten Malang. Desa ini memiliki luas wilayah 254,6 ha dengan struktur tanah yang berbukit dan memiliki ketinggian tanah 630 Mdpl. Desa Wonoayu sudah berdiri sejak tahun 1913 . Berawal dari perpindahan 11 kepala keluarga dari kecamatan Poncokusumo, sampai akhirnya terbentuk menjadi sebuah desa baru.</p>
                    <p>Desa yang berkependudukan 1551 jiwa ini memiliki 6 RT dan mayoritas masyarakatnya beragama islam. Sebagai wilayah yang terletak di bawah kaki Gunung Semeru, adapun suhu rata-rata yang ada yakni berkisar antara 22°-27 °C. Daerah sejuk dan subur menjadikannya wilayah yang memiliki potensi tinggi dalam hal sektor pertanian. Desa Wonoayu memiliki daerah yang cukup luas. Wilayah sebelah timur berbatasan dengan Desa Sumberputih, wilayah sebelah utara berbatasan dengan Desa Bambang, wilayah sebelah barat berbatasan dengan Desa Bringin dan wilayah sebelah selatan berbatasan dengan Desa Sumber Putih. Desa Wonoayu dapat dikatakan sebagai desa yang tergolong maju, hal tersebut terbukti dengan akses jalan menuju desa yang sudah beraspal dan tertata rapi. Juga beberapa dari warga desanya telah mandiri dalam hal memanfaatkan peluang usaha di sektor pertanian.</p>
                    <ul>
                        <li><i class="ion-android-checkmark-circle"></i>Luas desa 254,6 ha 630 mdpl</li>
                        <li><i class="ion-android-checkmark-circle"></i>Memiliki 1551 jumlah jiwa dan 6 RT</li>
                        <li><i class="ion-android-checkmark-circle"></i>Desa yang sejuh dan subur dan memiliki potensi tinggi dalam sektor pertanian</li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        </section>

        {{-- Statistik Desa --}}
        <section id="why-us" class="wow fadeIn">
            <div class="container-fluid">

                <header class="section-header">
                <h3>Statistik Desa</h3>
                <p>Statistik data kependudukan Desa Wonoayu</p>
                </header>

            </div>

            {{-- Jumlah --}}
            <div class="container">
                <div class="row counters">
                @foreach ($statistics as $statistic)
                <div class="col-md text-center">
                    <span data-toggle="counter-up">{{ $statistic->penduduk }}</span>
                    <p>Penduduk</p>
                </div>
                <div class="col-md text-center">
                    <span data-toggle="counter-up">{{ $statistic->kepala_keluarga }}</span>
                    <p>Kepala Keluarga</p>
                </div>
                <div class="col-md text-center">
                    <span data-toggle="counter-up">{{ $statistic->anggota_keluarga }}</span>
                    <p>Anggota Keluarga</p>
                </div>
                <div class="col-md text-center">
                    <span data-toggle="counter-up">{{ $statistic->male }}</span>
                    <p>Laki-laki</p>
                </div>
                <div class="col-md text-center">
                    <span data-toggle="counter-up">{{ $statistic->female }}</span>
                    <p>Perempuan</p>
                </div>

                @endforeach
                </div>
            </div>
        </section>

        {{-- Perangkat Desa --}}
        <section id="team">
            <div class="container">
                <div class="section-header">
                <h3>Struktur Desa</h3>
                <p>Struktur Organisasi dan Tata Kerja Pemerintah Desa Wonoayu Kecamatan Wajak Kabupaten Malang Provinsi Jawa Timur</p>
                </div>

                <div class="row">

                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="member">
                    <img src="http://via.placeholder.com/800x800" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                    <img src="http://via.placeholder.com/800x800" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                        <h4>Sarah Jhonson</h4>
                        <span>Product Manager</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member">
                    <img src="http://via.placeholder.com/800x800" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="member">
                    <img src="http://via.placeholder.com/800x800" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                        <h4>Amanda Jepson</h4>
                        <span>Accountant</span>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                </div>

            </div>
        </section>

        {{-- Kata Masyarakat --}}
        <section id="testimonials">
            <div class="container">

                <header class="section-header">
                <h3>Kata Masyarakat</h3>
                </header>

                <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="owl-carousel testimonials-carousel wow fadeInUp">

                    @foreach ($posts as $post)
                    <div class="testimonial-item">
                        @if($post->thumbnail)
                        <img src="{{ $post->takeImage }}" style="object-fit: cover; object-position: center; width: 100px; height: 100px" class="testimonial-img" alt="">
                        @else
                        <img src="https://www.labelprint.co.za/wp-content/uploads/2018/11/user-icon-image-placeholder-300-grey.jpg" style="object-fit: cover; object-position: center; width: 100px; height: 100px" class="testimonial-img" alt="">
                        @endif
                        <h3>{{ $post->title }}</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <p>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        </p>
                    </div>
                    @endforeach

                    </div>

                </div>
                </div>


            </div>
        </section>

        {{-- Pelayanan --}}
        <section id="services" class="section-bg">
            <div class="container">

                <header class="section-header">
                <h3>Pelayanan</h3>
                <p>Pelayanan yang diberikan oleh Pemerintah Desa kepada Masyaratak Desa Wonoayu.</p>
                </header>

                <div class="row d-flex justify-content-center">

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="formktp">Layanan Pengurusan Kartu Tanda Penduduk</a></h4>
                    <p class="description">Layanan Ini Mencakup Pengajuan KTP Baru, KTP Hilang, dan Perubahan Data KTP</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="formkk">Layanan Pendaftaran Kartu Keluarga</a></h4>
                    <p class="description">Layanan Ini Mencakup Pendaftaran Isian Kartu Keluarga (KK)</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="formaktakelahiran">Layanan Pengurusan Akta Kelahiran</a></h4>
                    <p class="description">Layanan Ini Mencakup Pendaftaran Akta Kelahiran</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="formaktakematian">Layanan Pengurusan Akta Kematian</a></h4>
                    <p class="description">Layanan Ini Mencakup Pendaftaran Akta Kematian</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="suratpernyataan">Layanan Pengurusan Surat Pernyataan Kematian</a></h4>
                    <p class="description">Layanan Ini Mencakup Pengurusan Surat Pernyataan Kematian</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="pelaporankematian">Layanan Pelaporan Kematian</a></h4>
                    <p class="description">Layanan Ini Mencakup Pelaporan Kematian</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="persyaratan">Persyaratan Pengurusan Dokumen Penting dan Pendirian Usaha</a></h4>
                    <p class="description">Layanan Ini Memberi Info tentang Persyaratan Pengurusan Dokumen Penting dan Pendirian Usaha</p>
                    </div>
                </div>

                </div>

            </div>
        </section>

        {{-- Curhat Desa --}}
        <section id="call-to-action" class="wow fadeInUp">
            <div class="container">
                <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3 class="cta-title">Curhat Desa</h3>
                    <p class="cta-text">Wadah untuk menyampaikan kritik dan saran mengenai keluhan tentang Desa Wonoayu.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Curhat Desa</a>
                </div>
                </div>

            </div>
        </section>
{{--
        {{-- Empty Section 2 --}}
        {{-- <section id="features">
            <div class="container">

                <div class="row feature-item">
                <div class="col-lg-6 wow fadeInUp">
                    <img src="frontend/img/features-1.svg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                    <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
                    <p>
                    Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
                    </p>
                    <p>
                    Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
                    </p>
                </div>
                </div>

                <div class="row feature-item mt-5 pt-5">
                <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                    <img src="frontend/img/features-2.svg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                    <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
                    <p>
                    Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
                    </p>
                    <p>
                    Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
                    </p>
                    <p>
                    Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
                    </p>
                </div>

                </div>

            </div>
        </section>  --}}

        {{-- Portal Berita --}}
        <section id="pricing" class="wow fadeInUp section-bg">
            <div class="container">

                <header class="section-header">
                <a href="posts/allposts" class=""><h3>Portal Berita</h3></a>
                <p>Portal berita yang berisikan informasi-informasi terbaru mengenai Desa Wonoayu.</p>
                </header>

                <div class="row flex-items-xs-middle flex-items-xs-center">
                    @foreach ($posts as $post)
                    <div class="col-xs-12 col-lg-4">
                        <div class="card">
                            @if ($post->thumbnail)
                            <a href=""><img src="{{ $post->takeImage }}" class="card-img-top" style="height: 275px; object-fit: cover; object-position: center;" alt=""></a>
                            @endif
                        <div class="card-block mt-3">
                            <p style="font-size: 12px">{{ $post->created_at->format("d M y") }}</p>
                            <a href=""><h4 class="card-title">{{ $post->title }}</h4></a>
                            <p>{!! Str::limit($post->body, 100) !!}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn">Selengkapnya</a>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- <div class="row mt-5 d-flex justify-content-center">
                    <div class="card pb-0">
                    <a href="#" class="btn">Semua Berita</a>
                    </div>
                </div> --}}
            </div>
        </section>

        {{-- Galeri --}}
        <section id="portfolio" class="section-bg">
            <div class="container">

                <header class="section-header">
                <a href="/galleries" class=""><h3 class="section-title">Galeri</h3></a>
                <p>Galeri kegiatan kegiatan Desa Wonoayu.</p>
                </header>

                <div class="row portfolio-container">

                @foreach ($galleries as $gallery)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ $gallery->takeImage }}/{{ $gallery->imagegallery }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="" class="">{{ $gallery->title }}</a></h4>
                            <div>
                                <a href="{{ $gallery->takeImage }}/{{ $gallery->imagegallery }}" data-lightbox="portfolio" class="link-preview" title="{{ $gallery->title }}"><i class="ion ion-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                </div>

            </div>
            {{-- <div class="row mt-5 d-flex justify-content-center">
                <div class="card pb-0">
                <a href="#" class="btn">Semua Foto</a>
                </div>
            </div> --}}
        </section>

        {{-- Didukung Oleh --}}
        {{-- <section id="clients" class="wow fadeInUp">
            <div class="container">

                <header class="section-header">
                <h3>Didukung Oleh</h3>
                </header>

                <div class="owl-carousel clients-carousel">
                <img src="{{asset('logokabmalang.svg')}}" alt="">
                <img src="{{asset('logoumm.png')}}" alt="">
                </div>

            </div>
        </section> --}}

        {{-- Tanya Jawab --}}
        <section id="faq">
            <div class="container">
                <header class="section-header">
                <h3>Tanya Jawab</h3>
                <p>Pertanyaan yang sering diajukan masyarakat kepada Pemerintah Desa, termasuk Pelayanan.</p>
                </header>

                <ul id="faq-list" class="wow fadeInUp">
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="ion-android-remove"></i></a>
                    <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="ion-android-remove"></i></a>
                    <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="ion-android-remove"></i></a>
                    <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="ion-android-remove"></i></a>
                    <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="ion-android-remove"></i></a>
                    <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>
                    <div id="faq6" class="collapse" data-parent="#faq-list">
                    <p>
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                    </p>
                    </div>
                </li>

                </ul>

            </div>
        </section>
@endsection

