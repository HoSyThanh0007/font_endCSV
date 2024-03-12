<style>
    img{
        width: 70px;
        height: 70px;
        margin-right: 4px;
    }
     .left-column{
        color: red;
        font-size:18px;
        font-weight: bold;
        
    }
    .phone-number {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color:#45a037 ; /* Màu nền của nút */
    color: white; /* Màu chữ */
    transition: background-color 0.3s ease; /* Hiệu ứng chuyển đổi màu nền khi hover */
}

.phone-number:hover {
    background-color: #45a049; /* Màu nền mới khi hover */
}
.clor{
    font-size: 16px;
    margin-top: -3px;
    margin-left: 10px;
}
.clor2{
    margin-top:-5px ;
}
</style>

 <!-- Main Header -->
    <header class="main-header header-style-one">

        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="left-column">
                    <img src="./assets/images/LogoFBU.png" alt="">
                            <ul class="clor">
                              
                                
                              <li class="clor1">Hệ Thống Cựu Sinh Viên  </li>
                              <li class="clor2">Trường Đại Học Tài Chính Ngân Hàng Hà Nội </li>

                          
                            
</ul>
                            
                    </div>
                    <div class="right-colunm">
                        
                        <div class="phone-number"><i class=""></i><a href="">Đăng nhập</a></div>
                        <div class="phone-number"><i class=""></i><a href="./sign_in.php">Đăng ký thành viên</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.php"></a></div>
                    </div>
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar" alt=""></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="index.php">Trang chủ</a></li>
                                         
                                        
                                        <li class="dropdown"><a href="csv.php">CLB Cựu Sinh Viên</a></li>
                                       
                                        
                                        <li class="dropdown"><a href="service.php">Sự Kiên</a>
                                        <li class="dropdown"><a href="faq.php"></a>
                                       
                                        </li>
                                       
                                        <li class="dropdown"><a href="tuyendung.php">Tuyển Dụng</a>
                                          
                                        </li>
                                        <li><a href="contact.php">Liên Hệ</a></li>
                                         <div class="language">
                                    
                                    <form action="#" class="language-switcher">
                                       
                                    </form>
                                </div>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    
                    </div>                        
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.html"><img src="assets/images/LogoFBU.png" alt=""></a></div>
                        </div>
                        <div class="right-column">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>
    
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                </nav>
                            </div>
                            <div class="navbar-right-info">
                                <div class="sig"><a href="#"><i class=""></i></a></div>
                                <div class="lang">
                                    <!--<span class="icon"><img src="assets/images/resource/flags/de.png" alt=""></span> -->
                                    <form action="#" class="language-switcher">
                                       
                                    </form>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-remove"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
			
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->