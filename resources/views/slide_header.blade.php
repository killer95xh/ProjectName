<!-- HEADER -->
<div class="bg-white px-5 py-4 relative h-[68px] lg:h-[94px] lg:px-[72px]" id="header">
    <div class="container lg:h-full">
        <div class="lg:flex lg:items-center lg:justify-between lg:h-full">
            <ul class="hidden lg:flex nav">
                <!-- <a href="tel:+84966976698">
                    <p class="hotline text-left mt-0 flex gap-3"><img src="./assets/images/call.svg" />HOTLINE:
                        <b>0966 976 698</b>
                    </p>
                </a> -->
                <a href="#location" class="a-scroll">
                    <li>Vị trí</li>
                </a>
                <a href="#extension" class="a-scroll">
                    <li>Tiện ích</li>
                </a>

                <a href="#advantage" class="a-scroll">
                    <li>Lợi thế</li>
                </a>
                <a href="#products" class="a-scroll">
                    <li>Sản phẩm</li>
                </a>
            </ul>
            <ul class="hidden lg:flex nav">

                <a href="#policy" class="a-scroll">
                    <li>Chính sách bán hàng</li>
                </a>

                <a href="#register" class="a-scroll">
                    <li>Giải đáp thắc mắc của Khách Hàng</li>
                </a>
            </ul>
        </div>
        <div class="lg:hidden absolute right-5 top-1/2 -translate-y-1/2 z-40" id="menu">
            <img src="{{asset('assets/images/hamburger.svg')}}" alt="hamburger"/>
        </div>
        <div class="absolute z-10 -bottom-[65px] lg:-bottom-[87px] left-[50%] -translate-x-1/2 header__logo">
            <div
                class="relative w-[104px] h-[104px] lg:w-[144px] lg:h-[144px] mx-auto z-30 absolute top-[50px] lg:top-[70px]">
                <img src="{{asset('assets/images/logo.png')}}" alt="logo" class="object-fit"/>
            </div>
            <svg class="lg:hidden" width="204" height="66" viewBox="0 0 204 66" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M158.432 34.2439C146.854 53.2834 125.912 66 102 66C78.0878 66 57.1456 53.2834 45.5675 34.2439C35.237 17.2561 19.8822 0 0 0H204C184.118 0 168.763 17.2561 158.432 34.2439Z"
                    fill="white"/>
            </svg>
            <svg class="hidden lg:block" width="280" height="88" viewBox="0 0 280 88" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.641785 0C27.6259 0 48.6599 22.9401 63.1262 45.7188C79.2667 71.1339 107.664 88 140 88C172.336 88 200.733 71.1339 216.874 45.7188C231.34 22.9401 252.374 0 279.358 0H0.641785Z"
                    fill="white"/>
            </svg>

        </div>
        <sidebar class="sidebar nav" id="sidebar">
            <ul>
                <a href="#location" class="a-scroll">
                    <li>Vị trí</li>
                </a>
                <a href="#extension" class="a-scroll">
                    <li>Tiện ích</li>
                </a>
                <a href="#advantage" class="a-scroll">
                    <li>Lợi thế</li>
                </a>
                <a href="#products" class="a-scroll">
                    <li>Sản phẩm</li>
                </a>
                <a href="#policy" class="a-scroll">
                    <li>Chính sách bán hàng</li>
                </a>

                <a href="#register" class="a-scroll">
                    <li>Giải đáp thắc mắc của Khách Hàng</li>
                </a>
            </ul>
            <div class="mt-auto">
                <a href="tel:+84966976698" class="!pb-0">
                    <p class="hotline text-left">HOTLINE: <b>0966 976 698</b></p>
                </a>
                <br>
                <a href="#register" class="btn-register--orange  items-center flex justify-center">
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.405282 6.11725C0.302664 6.15137 0.212089 6.21442 0.144448 6.2988C0.0768062 6.38318 0.0349781 6.4853 0.0239932 6.59288C0.0130083 6.70047 0.0333341 6.80894 0.0825266 6.90524C0.131719 7.00155 0.207684 7.0816 0.301287 7.13576L5.95037 10.4065C6.04357 10.4604 6.15029 10.4863 6.25783 10.4812C6.36536 10.4762 6.46917 10.4403 6.55688 10.3779L12.9054 5.84257C13.1642 5.6584 13.4817 5.97594 13.2975 6.23474L8.76301 12.5824C8.70031 12.6701 8.66419 12.7741 8.65898 12.8817C8.65377 12.9894 8.67969 13.0964 8.73364 13.1897L12.0043 18.8388C12.0585 18.9324 12.1385 19.0084 12.2348 19.0576C12.3312 19.1068 12.4396 19.1271 12.5472 19.1161C12.6548 19.1051 12.7569 19.0633 12.8413 18.9956C12.9257 18.928 12.9887 18.8374 13.0228 18.7348L18.9768 0.873027C19.0096 0.774183 19.0143 0.668153 18.9903 0.566793C18.9664 0.465434 18.9146 0.372746 18.841 0.299095C18.7673 0.225446 18.6747 0.173738 18.5733 0.149759C18.4719 0.125782 18.3659 0.130476 18.2671 0.163319L0.405282 6.11725Z"
                            fill="white"/>
                    </svg>
                    <span>ĐĂNG KÝ TƯ
                            VẤN</span></a>
            </div>
        </sidebar>
        <div class="sidebar__fade" id="backdrop"></div>
    </div>
</div>
<!-- END HEADER -->
