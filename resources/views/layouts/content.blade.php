<!-- social -->
<div class="fixed bottom-[60px] right-[20px] z-30">
    <a href="tel:+84966976698"
       class="mb-5 phone-social w-[44px] h-[44px] rounded-full flex items-center justify-center">
        <img src="{{asset('assets/images/phone.svg')}}" alt="">
    </a>
    <a href="https://zalo.me/0966976698" target="_blank"
       class="scale1 mb-5 bg-[#0068FE] w-[44px] h-[44px] rounded-full flex items-center justify-center">
        <img src="{{asset('assets/images/zalo.svg')}}" alt="">
    </a>
    <a href="https://www.facebook.com/Oceanlink66?locale=vi_VN" target="_blank"
       class="scale1 mb-5 bg-[#1877F2] w-[44px] h-[44px] rounded-full flex items-center justify-center">
        <img src="{{asset('assets/images/fb.svg')}}" alt="">
    </a>
</div>
<div class="fixed bottom-[20px] -right-[100%] z-30" id="scrollTopWrap">
    <button class="gradient w-[34px] h-[34px] rounded-full flex items-center justify-center" id="scrollTop">
        <img src="{{asset('assets/images/sroll.svg')}}" alt="">
    </button>
</div>
<!-- end social -->


<!-- HERO SECTION -->
<div class="gradient pt-[95px] relative lg:flex lg:justify-between]">
    <div class="relative px-5 z-20 lg:max-w-[1440px] lg:mx-auto">
        <div class="container">
            <!-- <div class="lg:inline-flex lg:flex-col"> -->
            <div class="gradient-gold inline-block  table text-white rounded-lg px-4 py-[10px] font-bold">KHU ĐÔ THỊ
                THE
                ZENPARK
            </div>
            <div class="text-white pl-[15px] py-5 inline-flex flex-col gap-[9px]">
                <p class="title-hero__sub">BỪNG SẮC</p>
                <p class="title-hero pl-[14px]">An nhiên</p>
                <div class="inline-block">
                    <p class="title-hero__sub pl-[14px]">GIỮA</p>
                    <p class="title-hero">Phồn hoa</p>
                </div>
                <p class="title-hero__sub title-hero__sub--right">ĐÔ HỘI</p>
            </div>
            <br>
            <a href="tel:+84966976698" class="btn-register scale">
                <!-- <img src="./assets/images/send.svg" alt="icon send" /><span>GỬI ĐI</span> -->
                <p class="hotline text-left mt-0 flex gap-3">
                    <img src="{{asset('assets/images/call.svg')}}"/>
                    HOTLINE:
                    <b>0966 976 698</b>
                </p>
            </a>
            <!-- </div> -->
        </div>
    </div>
    <div class="relative">
        <img src="{{asset('assets/images/hero-banner.png')}}" alt="banner" class="w-[81%] lg:max-w-[704px] ml-auto">
    </div>
    <img src="{{asset('assets/images/hero-abstract.svg')}}" alt="abstract" class="absolute top-0 left-0 z-10">
</div>
<!-- END HERO SECTION -->

<!-- ABOUT US -->
<section class="wrapper-block">
    <div class="container px-5 lg:px-0 div-parent">
        <div class="lg:flex lg:items-center lg:gap-6">
            <div class="lg:flex-1">
                <h2 class="title" data-aos="fade-right" data-aos-offset="200">về chúng tôi</h2>
                <h3 class="title__sub" data-aos="fade-right" data-aos-offset="200">Chuyên gia bất động sản cao cấp
                </h3>
                <p class="hidden lg:block mb-6 font-normal">Lorem ipsum dolor sit amet consectetur. Diam sagittis
                    enim proin cursus tellus. Suspendisse et at dolor id laoreet. Cras ac etiam malesuada ipsum.
                    Viverra sit maecenas quam vulputate interdum.</p>
                <p class="more" data-aos="fade-right" data-aos-offset="200" data-aos-delay="500">anh chị xem video
                    để hiểu hơn về chúng tôi</p>
            </div>

            <div class="relative lg:w-[57%]">
                <div id="aboutVideo" class="video-wrap" data-aos="fade-left" data-aos-offset="200"
                     data-aos-delay="200">
                    <div class="lg:hidden">
                        <img src="{{asset('assets/images/about.png')}}" alt="about">
                    </div>
                    <div class="hidden lg:block">
                        <img src="{{asset('assets/images/about-pc.png')}}" alt="about">
                    </div>
                    <button class="btn-play z-10" id="videoAbout" onclick="loadVideo('WfdcLWjNwD8?si=xgS7wJY8aLlH2GeI', 'aboutVideo')">
                        <img src="{{asset('assets/images/play.svg')}}" alt="play"/>
                    </button>
                    <div id="video-container-aboutVideo" class="video-frame"></div>
                </div>
                <p class="more more-mobile" data-aos="fade-right" data-aos-offset="200" data-aos-delay="500">( Anh chị xem video
                    để hiểu hơn về chúng tôi )</p>
            </div>
        </div>
        <div class="flex justify-center div-cicle">
            <a href="#location" class="btn-scroll a-scroll" data-aos="zoom-in" data-aos-offset="200"
               data-aos-delay="500">
                <img src="{{asset('assets/images/Layer2.svg')}}" alt="">
            </a>
        </div>
    </div>
    </div>
</section>
<!-- END ABOUT US -->

<!-- LOCATION -->
<section class="bg-white relative wrapper-block" id="location">
    <div class="container px-5 lg:px-0 div-parent">
        <div class="lg:flex lg:items-center lg:gap-6 lg:flex-row-reverse">
            <div class="lg:flex-1">
                <h2 class="title" data-aos="fade-left" data-aos-offset="200">vị trí</h2>
                <h3 class="title__sub" data-aos="fade-left" data-aos-offset="200">Tọa độ vàng giữa lòng Thành phố
                    biển hồ</h3>
                <p class="hidden lg:block mb-6 font-normal">Lorem ipsum dolor sit amet consectetur. Diam sagittis
                    enim proin cursus tellus. Suspendisse et at dolor id laoreet. Cras ac etiam malesuada ipsum.
                    Viverra sit maecenas quam vulputate interdum.</p>
                <p class="more--left" data-aos="fade-left" data-aos-offset="200" data-aos-delay="500">anh chị xem
                    video để hiểu hơn về VỊ TRÍ THE ZENPARK</p>
            </div>
            <div class="relative lg:w-[57%]">
                <div id="locationVideo" class="video-wrap" data-aos="fade-right" data-aos-offset="200"
                     data-aos-delay="200">
                    <div class="lg:hidden">
                        <img src="{{asset('assets/images/location.png')}}" alt="location">
                    </div>
                    <div class="hidden lg:block">
                        <img src="{{asset('assets/images/location.png')}}" alt="location">
                    </div>
                    <button class="btn-play z-10" id="videoAbout"
                            onclick="loadVideo('WfdcLWjNwD8?si=xgS7wJY8aLlH2GeI', 'locationVideo')">
                        <img src="{{asset('assets/images/play.svg')}}" alt="play"/>
                    </button>
                    <div id="video-container-locationVideo" class="video-frame"></div>
                </div>
                <p class="more more-mobile" data-aos="fade-right" data-aos-offset="200" data-aos-delay="500">( Anh chị xem
                    video để hiểu hơn về vị trí THE ZENPARK )</p>
            </div>
        </div>
        <div class="flex justify-center div-cicle">
            <a href="#extension" class="btn-scroll a-scroll" data-aos="zoom-in" data-aos-offset="200"
               data-aos-delay="500">
                <img src="{{asset('assets/images/Layer2.svg')}}" alt="">
            </a>
        </div>
    </div>
    <img class="absolute max-w-[275px] lg:max-w-[515px] -right-[53px] lg:-right-[111px] top-[14px] " src="{{asset('assets/images/location-watermark.png')}}" alt="location watermark"/>
</section>
<!-- END LOCATION -->

<!-- EXTENSIONS -->
<section class="gradient-gold-white relative wrapper-block" id="extension">
    <div class="container px-5 lg:px-0 div-parent">
        <div class="lg:flex lg:items-center lg:gap-6">
            <div class="lg:flex-1">
                <h2 class="title" data-aos="fade-right" data-aos-offset="200">tiện ích</h2>
                <h3 class="title__sub" data-aos="fade-right" data-aos-offset="200">Chuỗi tiện ích đỉnh cao tại khu
                    đô thị bậc nhất</h3>
                <p class="hidden lg:block mb-6 font-normal">Lorem ipsum dolor sit amet consectetur. Diam sagittis
                    enim proin cursus tellus. Suspendisse et at dolor id laoreet. Cras ac etiam malesuada ipsum.
                    Viverra sit maecenas quam vulputate interdum.</p>
                <p class="more" data-aos="fade-right" data-aos-offset="200" data-aos-delay="500">anh chị xem video
                    để hiểu hơn về TIỆN ÍCH THE ZENPARK </p>
            </div>
            <div class="relative lg:w-[57%] z-20">
                <div id="extensionVideo" class="video-wrap" data-aos="fade-left" data-aos-offset="200"
                     data-aos-delay="200">
                    <div class="lg:hidden">
                        <img src="{{asset('assets/images/extension.png')}}" alt="extension">
                    </div>
                    <div class="hidden lg:block">
                        <img src="{{asset('assets/images/extension-pc.png')}}" alt="extension">
                    </div>
                    <button class="btn-play  z-10" id="extensionVideo"
                            onclick="loadVideo('WfdcLWjNwD8?si=xgS7wJY8aLlH2GeI', 'extensionVideo')">
                        <img src="{{asset('assets/images/play.svg')}}" alt="play"/>
                    </button>
                    <div id="video-container-extensionVideo" class="video-frame"></div>
                </div>
                <p class="more more-mobile" data-aos="fade-right" data-aos-offset="200" data-aos-delay="500">( Anh chị xem video
                    để hiểu hơn về tiện ích THE ZENPARK ) </p>
            </div>
        </div>
        <div class="flex justify-center div-cicle">
            <a href="#advantage" class="btn-scroll a-scroll" data-aos="zoom-in" data-aos-offset="200"
               data-aos-delay="500">
                <img src="{{asset('assets/images/Layer2.svg')}}" alt="">
            </a>
        </div>
    </div>
    <img src="{{asset('assets/images/abstract-extension.svg')}}" alt="abstract" class="hidden lg:block absolute top-[56px] right-0 z-10">
</section>
<!-- END EXTENSIONS -->

<!-- ADVANTAGE -->
<section class="bg-white relative wrapper-block" id="advantage">
    <div class="container px-5 lg:px-0 div-parent">
        <div class="lg:flex lg:items-center lg:gap-6 lg:flex-row-reverse">
            <div class="lg:flex-1">
                <h2 class="title" data-aos="fade-left" data-aos-offset="200">lợi thế</h2>
                <h3 class="title__sub whitespace-nowrap" data-aos="fade-left" data-aos-offset="200">Phân khu hiện
                    đại nhất Vinhomes Ocean park</h3>
                <p class="hidden lg:block mb-6 font-normal">Lorem ipsum dolor sit amet consectetur. Diam sagittis
                    enim proin cursus tellus. Suspendisse et at dolor id laoreet. Cras ac etiam malesuada ipsum.
                    Viverra sit maecenas quam vulputate interdum.</p>
                <p class="more--left" data-aos="fade-left" data-aos-offset="200" data-aos-delay="500">anh chị xem
                    video để hiểu hơn về LỢI THẾ THE ZENPARK</p>
            </div>
            <div class="relative lg:w-[57%]">
                <div id="advantageVideo" class="video-wrap" data-aos="fade-right" data-aos-offset="200"
                     data-aos-delay="200">
                    <div class="lg:hidden">
                        <img src="{{asset('assets/images/advantage.png')}}" alt="advantage">
                    </div>
                    <div class="hidden lg:block">
                        <img src="{{asset('assets/images/advantage-pc.png')}}" alt="advantage">
                    </div>
                    <button class="btn-play z-10" id="advantageVideo"
                            onclick="loadVideo('WfdcLWjNwD8?si=xgS7wJY8aLlH2GeI', 'advantageVideo')">
                        <img src="{{asset('assets/images/play.svg')}}" alt="play"/>
                    </button>
                    <div id="video-container-advantageVideo" class="video-frame"></div>
                </div>
                <p class="more more-mobile" data-aos="fade-right" data-aos-offset="200" data-aos-delay="500">( Anh chị xem
                    video để hiểu hơn về lợi thế THE ZENPARK )</p>
            </div>
        </div>
        <div class="flex justify-center div-cicle">
            <a href="#products" class="btn-scroll a-scroll" data-aos="zoom-in" data-aos-offset="200"
               data-aos-delay="500">
                <img src="{{asset('assets/images/Layer2.svg')}}" alt="">
            </a>
        </div>
    </div>
    <img src="{{asset('assets/images/abstract-advantage.svg')}}" alt="abstract" class="hidden lg:block absolute top-0 right-0 z-10">
</section>
<!-- END ADVANTAGE -->

<!-- PRODUCTS -->
<section id="products">
    <div class="container px-5">
        <h2 class="title text-center" data-aos="fade-down" data-aos-offset="200">sản phẩm</h2>
        <h3 class="title__sub text-center" data-aos="fade-down" data-aos-offset="200">Thiết kế căn hộ The Zenpark
        </h3>
    </div>
    <div class="swiper-custom">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="relative">
                        <div id="product1Video" data-aos="zoom-in" data-aos-offset="200">
                            <div class="lg:hidden">
                                <img src="{{asset('assets/images/studio.png')}}" alt="product" class="img-product">
                            </div>
                            <div class="hidden lg:block">
                                <img src="{{asset('assets/images/studio-pc.png')}}" alt="product" class="img-product">
                            </div>
                            <button class="btn-play z-10" id="product1Video"
                                    onclick="loadVideo('WfdcLWjNwD8?si=xgS7wJY8aLlH2GeI', 'product1Video')">
                                <img src="{{asset('assets/images/play.svg')}}" alt="play"/>
                            </button>
                            <div id="video-container-product1Video" class="video-frame video-frame--product"></div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative">
                        <div id="product2Video" data-aos="zoom-in" data-aos-offset="200">
                            <div class="lg:hidden">
                                <img src="{{asset('assets/images/1PN.png')}}" alt="product" class="img-product">
                            </div>
                            <div class="hidden lg:block">
                                <img src="{{asset('assets/images/1PN-pc.png')}}" alt="product" class="img-product">
                            </div>
                            <button class="btn-play z-10" id="product2Video"
                                    onclick="loadVideo('WfdcLWjNwD8?si=xgS7wJY8aLlH2GeI', 'product2Video')">
                                <img src="{{asset('assets/images/play.svg')}}" alt="play"/>
                            </button>
                            <div id="video-container-product2Video" class="video-frame video-frame--product"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative">
                        <div id="product3Video" data-aos="zoom-in" data-aos-offset="200">
                            <div class="lg:hidden">
                                <img src="{{asset('assets/images/1PN+1.png')}}" alt="product" class="img-product">
                            </div>
                            <div class="hidden lg:block">
                                <img src="{{asset('assets/images/1PN+1-pc.png')}}" alt="product" class="img-product">
                            </div>
                            <button class="btn-play z-10" id="product3Video"
                                    onclick="loadVideo('WfdcLWjNwD8?si=xgS7wJY8aLlH2GeI', 'product3Video')">
                                <img src="{{asset('assets/images/play.svg')}}" alt="play"/>
                            </button>
                            <div id="video-container-product3Video" class="video-frame video-frame--product"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative">
                        <div id="product4Video" data-aos="zoom-in" data-aos-offset="200">
                            <div class="lg:hidden">
                                <img src="{{asset('assets/images/2PN.png')}}" alt="product" class="img-product">
                            </div>
                            <div class="hidden lg:block">
                                <img src="{{asset('assets/images/2PN-pc.png')}}" alt="product" class="img-product">
                            </div>
                            <button class="btn-play z-10" id="product4Video"
                                    onclick="loadVideo('WfdcLWjNwD8?si=xgS7wJY8aLlH2GeI', 'product4Video')">
                                <img src="{{asset('assets/images/play.svg')}}" alt="play"/>
                            </button>
                            <div id="video-container-product4Video" class="video-frame video-frame--product"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative">
                        <div id="product5Video" data-aos="zoom-in" data-aos-offset="200">
                            <div class="lg:hidden">
                                <img src="{{asset('assets/images/2PN+1.png')}}" alt="product" class="img-product">
                            </div>
                            <div class="hidden lg:block">
                                <img src="{{asset('assets/images/2PN+1-pc.png')}}" alt="product" class="img-product">
                            </div>
                            <button class="btn-play z-10" id="product5Video"
                                    onclick="loadVideo('WfdcLWjNwD8?si=xgS7wJY8aLlH2GeI', 'product5Video')">
                                <img src="{{asset('assets/images/play.svg')}}" alt="play"/>
                            </button>
                            <div id="video-container-product5Video" class="video-frame video-frame--product"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative">
                        <div id="product6Video" data-aos="zoom-in" data-aos-offset="200">
                            <div class="lg:hidden">
                                <img src="{{asset('assets/images/3PN.png')}}" alt="product" class="img-product">
                            </div>
                            <div class="hidden lg:block">
                                <img src="{{asset('assets/images/3PN-pc.png')}}" alt="product" class="img-product">
                            </div>
                            <button class="btn-play z-10" id="product6Video"
                                    onclick="loadVideo('WfdcLWjNwD8?si=xgS7wJY8aLlH2GeI', 'product6Video')">
                                <img src="{{asset('assets/images/play.svg')}}" alt="play"/>
                            </button>
                            <div id="video-container-product6Video" class="video-frame video-frame--product"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination">
                <ul>
                    <span class="swiper-pagination-bullet">STUDIO</span>
                    <span class="swiper-pagination-bullet">1PN</span>
                    <span class="swiper-pagination-bullet">1PN+1</span>
                    <span class="swiper-pagination-bullet">2PN</span>
                    <span class="swiper-pagination-bullet">2PN+1</span>
                    <span class="swiper-pagination-bullet">3PN</span>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END PRODUCTS -->


<!-- POLICY -->
<section class="bg-white relative overflow-hidden wrapper-block" id="policy">
    <div class="container px-5 div-parent">
        <div class="lg:flex-1 lg:max-w-[632px] lg:text-center lg:mx-auto">
            <h2 class="title text-center" data-aos="fade-down" data-aos-offset="200">chính sách bán hàng</h2>
            <h3 class="title__sub text-center max-w-[291px] leading-[33px] mx-auto pt-3" data-aos="fade-down"
                data-aos-offset="200">Hãy để chúng tôi giúp bạn
                tìm
                thấy ngôi nhà mơ ước</h3>
            <p class="hidden lg:block mb-6 font-normal">Lorem ipsum dolor sit amet consectetur. Diam sagittis enim
                proin cursus tellus. Suspendisse et at dolor id laoreet. Cras ac etiam malesuada ipsum.</p>
            <p class="more--down mb-6" data-aos="fade-down" data-aos-offset="200" data-aos-delay="500">anh chị xem
                video để hiểu hơn về CHÍNH SÁCH BÁN HÀNG CỦA CHÚNG TÔI</p>
        </div>
        <div class="relative z-10 text-center">
            <div id="policyVideo" class="lg:max-w-[854px] lg:mx-auto video-wrap" data-aos="fade-left"
                 data-aos-offset="200" data-aos-delay="200">
                <div class="lg:hidden">
                    <img src="{{asset('assets/images/policy.png')}}" alt="policy">
                </div>
                <div class="hidden lg:block"><img src="./assets/images/policy-pc.png" alt="policy"></div>
                <button class="btn-play z-10" id="policyVideo"
                        onclick="loadVideo('WfdcLWjNwD8?si=xgS7wJY8aLlH2GeI', 'policyVideo')">
                    <img src="{{asset('assets/images/play.svg')}}" alt="play"/>
                </button>
                <div id="video-container-policyVideo" class="video-frame"></div>
            </div>
        </div>
        <div class="flex justify-center div-cicle">
            <a href="#register" class="btn-scroll a-scroll" data-aos="zoom-in" data-aos-offset="200"
               data-aos-delay="500">
                <img src="{{asset('assets/images/Layer2.svg')}}" alt="">
            </a>
        </div>
    </div>
    <img class="absolute w-[330px] h-[288px] -left-[81px] -bottom-[89px]" src="{{asset('assets/images/policy-watermark.png')}}" alt="policy watermark"/>
</section>
<!-- END POLICY -->

<!-- SUBMIT FORM -->
<section class="section__register" id="register">
    <div class="container">
        <div class="bg-white px-6 py-10 mx-5 box-register lg:max-w-[522px] lg:ml-auto lg:mx-0">
            <h2 class="title">GIẢI ĐÁP THẮC MẮC CỦA ANH/CHỊ?</h2>
            <p class="font-normal text-[#4D4D4D]"><br>Sau khi anh/chị đã tìm hiểu dự án chi tiết qua những Video em trình bày ở trên thì anh/chị có câu hỏi nào dành cho em? <br>
                Anh chị vui lòng điền thông tin theo mẫu dưới đây để em hỗ trợ ạ!
                <br>
                (Website của em là 100% tự code, được mã hoá, không qua một bên trung gian làm WEB nào nên thông tin của anh/chị sẽ được bảo mật "Tuyệt Đối" nhé ạ!
            </p>
            <form name="dummyframe" method="post" action="{{url('send-mail')}}" target="hiddenFrame">
            @csrf <!-- {{ csrf_field() }} -->
                <div class="mt-6">
                    <label class="block text-[#2E2E2E] text-base mb-[6px]" for="password">
                        Họ & tên anh/chị?
                    </label>
                    <input class="appearance-none border border-[#CCCCCC] rounded-lg w-full py-2 px-3 " id="name" name="name" type="text" placeholder="Họ & tên anh/chị?">
                </div>
                <div class="mt-6">
                    <label class="block text-[#2E2E2E] text-base mb-[6px]" for="password">
                        Số điện thoại anh/chị sử dụng Zalo để em gửi câu trả lời qua ạ?
                    </label>
                    <input class="appearance-none border border-[#CCCCCC] rounded-lg w-full py-2 px-3 " id="phone" name="phone" type="text" placeholder="Số điện thoại">
                </div>
                <div class="mt-6">
                    <label class="block text-[#2E2E2E] text-base mb-[6px]" for="password">
                        Những vấn đề anh/chị đang thắc mắc: (giá bán, chính sách bán hàng, hướng, tầng, tiện ích...)
                    </label>
                    <input class="appearance-none border border-[#CCCCCC] rounded-lg w-full py-2 px-3 " id="email" name="email" type="text" placeholder="Nội dung">
                </div>
                <div class="lg:flex lg:gap-[76px] lg:items-center">
                    <button onclick="sendEmail()"
                            class="scale1 btn-register--orange mt-6 w-[100%] lg:max-w-[224px] justify-center items-center">
                        <svg
                            width="19" height="20" viewBox="0 0 19 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.405282 6.11725C0.302664 6.15137 0.212089 6.21442 0.144448 6.2988C0.0768062 6.38318 0.0349781 6.4853 0.0239932 6.59288C0.0130083 6.70047 0.0333341 6.80894 0.0825266 6.90524C0.131719 7.00155 0.207684 7.0816 0.301287 7.13576L5.95037 10.4065C6.04357 10.4604 6.15029 10.4863 6.25783 10.4812C6.36536 10.4762 6.46917 10.4403 6.55688 10.3779L12.9054 5.84257C13.1642 5.6584 13.4817 5.97594 13.2975 6.23474L8.76301 12.5824C8.70031 12.6701 8.66419 12.7741 8.65898 12.8817C8.65377 12.9894 8.67969 13.0964 8.73364 13.1897L12.0043 18.8388C12.0585 18.9324 12.1385 19.0084 12.2348 19.0576C12.3312 19.1068 12.4396 19.1271 12.5472 19.1161C12.6548 19.1051 12.7569 19.0633 12.8413 18.9956C12.9257 18.928 12.9887 18.8374 13.0228 18.7348L18.9768 0.873027C19.0096 0.774183 19.0143 0.668153 18.9903 0.566793C18.9664 0.465434 18.9146 0.372746 18.841 0.299095C18.7673 0.225446 18.6747 0.173738 18.5733 0.149759C18.4719 0.125782 18.3659 0.130476 18.2671 0.163319L0.405282 6.11725Z"
                                fill="white"/>
                        </svg>
                        <span>GỬI ĐI</span>
                    </button>
                    <a href="tel:+84966976698">
                        <p class="hotline">HOTLINE: <b>0966 976 698</b></p>
                    </a>
                </div>
            </form>
        </div>
    </div>
    <iframe name="hiddenFrame" id="hiddenFrame" style="display: none;" ></iframe>
</section>
<!-- END SUBMIT FORM -->
