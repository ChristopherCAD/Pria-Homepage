<!DOCTYPE html>
<html>
<head>
    
<title>
    PRIA Homepage Design
</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!-- <meta http-equiv="X-UA-Compatible" content="ie-edge"> -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> -->

<link rel="icon" type="image/x-icon" href="home/assets/imgs/priaxarc-cropped.png" />
<link href="home/css/homepage.css" rel="stylesheet" />
<link href="home/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

<link rel="stylesheet" href="home/css/owl.carousel.min.css">
<link rel="stylesheet" href="home/css/owl.theme.default.min.css">
<link rel="stylesheet" href="home/css/style.css">


<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
<link rel="stylesheet" href="home/css/aos/aos.css"/>
<link rel="stylesheet" href="home/css/animate-css/animate.min.css"/>
<script src="home/css/aos/aos.js"></script>

<style>
    .swiper {
        width: 100%;
        height: 80%;

        padding: 50px;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: gray;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;

        border-radius: 30px;
        
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .swiper-navBtn {
        color: #B80F22;
        transition: color 0.3s ease;
      }

      .swiper-navBtn:hover {
        color: #20D432;
      }

      .swiper-navBtn:before,
      .swiper-navBtn:after {
        font-size: 40px;
      }

      .swiper-pagination-bullet {
        background-color: #fff;
        border: 1px solid #B80F22;
        opacity: 4;
      }

      .swiper-pagination-bullet-active {
        background-color: #B80F22;
      }

</style>
<style>

    .float{
        
        position:fixed;
        width:120px;
        height:60px;
        bottom:1.4rem;
        right:1.5rem;
        background-color: #B80F22;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        box-shadow: 2px 2px 3px #999;
        z-index: 1;
    }

    .my-float{
        margin-top:22px;
    }

</style>



</head>
<body>
   
<a href="#" class="float my-float float-lg-right float-md-right float-sm-right d-flex justify-content-center align-items-center">ENROLL NOW! </a>
    <nav class="navbar navbar-menu navbar-expand-lg navbar-dark p-3">
        <div class="container-fluid">
          <a class="navbar-brand navbar-logo" href="#"><img src="home/assets/imgs/logos/priaxarc-tag.png" class="cologo"></a>
          <button class="navbar-toggler" type="button" style="background-color: #B80F22;" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ></span>
          </button>
        
          <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a id="homepage" class="nav-link mx-2" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a id="enroll" class="nav-link mx-2" href="#midpage-container">Our Team</a>
              </li>
              <li class="nav-item">
                <a id="updates" class="nav-link mx-2" href="#article-section">Testimonials</a>
              </li>
              <li class="nav-item">
                <a id="updates" class="nav-link mx-2" href="school-visit.html">School Visit</a>
              </li>
              
            </ul>
          </div>
        </div>
    </nav>
    <nav class="navbar navbar-menu navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto ">                                  
                        <li class="nav-item p-0"> <a href="https://pdacgroup.com/enrollment/public/index.php/user/splash/84" class="nav-link mx-2" style="font-weight:bold; font-size: 22px;">
                        <span style="color: #004AAD;"> ENROLL</span> <span style="color: #8b0305">NOW!</a></li>

                        <li class="nav-item pt-2"> <a href="#" class="nav-link mx-2" style="color:#000;">Hello,  CHRISTOPHER</a></li>
                        
                        <li class="nav-item"> <a href="https://pdacgroup.com/enrollment/public/index.php/guest/guestedit/84" class="nav-link mx-2" style="display:none;">
                        ENROLL NOW!</a></li>                           
                                <li class="nav-item pt-2"> 
                                    <a href="https://pdacgroup.com/enrollment/public/index.php/logout" style="color:red;" class="nav-link mx-2" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                                <form id="logout-form" action="https://pdacgroup.com/enrollment/public/index.php/logout" method="POST" class="d-none">
                                    <input type="hidden" name="_token" value="DS44iZsKxm83KSIaueE3WWqXp3gcrLUWGDdSv1E3">                                </form>
                                                                            </ul>
                </div>
            </div>
        </nav>

                        <!---------------------------------------->
                        <!--                                    -->
                        <!--                                    -->
                        <!--         Slideshow Gallery          -->
                        <!--                                    -->
                        <!--                                    -->
                        <!---------------------------------------->
    <header>
        <div class="slideshow-container">
            <div class="slideshow-content">
                <div id="carouselExampleControls" class="carousel carousel-dark" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="background-image: url('home/assets/imgs/slideshow-img-001.jpg');">
                                <img class="d-block w-100" src="home/assets/imgs/slideshow-img-001.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="home/assets/imgs/slideshow-img-002.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">`
                            <img class="d-block w-100" src="home/assets/imgs/slideshow-img-003.jpg" alt="Third slide">
                        </div>
                        <a class="carousel-control-prev m-0" href="#carouselExampleControls" role="button" data-slide="prev" 
                            style="width: 50px; height: 50px; top: 50%; background-color: aquamarine; border-radius: 0 10px 10px 0;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" 
                            style="width: 50px; height: 50px; top: 50%; background-color: aquamarine; border-radius: 10px 0 0 10px;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
   
    </header>


                        <!---------------------------------------->
                        <!--                                    -->
                        <!--                                    -->
                        <!--       Reviewer Backgrounds         -->
                        <!--                                    -->
                        <!--                                    -->
                        <!---------------------------------------->

    <br><br>
    <div class="divider" data-aos="fade-right"> </div>
    <br><br>

    <!-- <a href="#" class="float float-md-right"> Enroll Now!
    <i class="fa fa-plus my-float"></i>
    </a> -->


<div class="midpage-container h-50" id="midpage-container" data-aos="fade-up">
        
    <h2> Our Team </h2>
    <br>
    <center> <h2> Face-to-Face Reviewers </h2> </center>
    <br>
    <div class="container-lg container-styling" data-aos="fade-left">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                <img src="home/assets/imgs/rvrs/floyd.jpeg" alt="" class="card-img-top" style="background-color: transparent;">
            </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                    <h3 class="card-title overflow-auto" style="height: 60px; color: black;"> Floyd C. Paguio | FAR Reviewer
                    <p class="card-subtitle muted" style="font-size: 18px;"> CPA, MBA </p> </h3>
                    
                    <ul style="font-size: 18px; color: black;">
                        <li> Chairman/CEO: Paguio Dumayas & Associates, CPAs (PrimeGlobal Philippines) </li>
                        <li> Chairman/CEO/Reviewer – Philippine Review Institute for Accountance Inc. (PRIA) </li>
                        <li> National Board Member – Association of CPAs in Public Practice (ACPAPP)</li>
                        <li> Member – PICPA Quality Assurance Review (QAR) Committee </li>
                        <li> Faculty Member – Laguna State Polytechnic University (LSPU) </li>
                    </ul>
                </div>
                <!-- <div class="col-lg-2 col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 1 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
    </div>
    <br>
    <div class="container-lg container-styling" data-aos="fade-right">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/emmanuel.png" class="card-img-top">
            </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                    <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Atty. Emmanuel C. Dumayas | RFBT Reviewer
                    <p class="card-subtitle muted" style="font-size: 18px;"> CPA, CRFA </p> </h3>
                    
                    <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                        <li> Managing Partner/QAR Head - Paguio Dumayas and Associates, CPAs </li>
                        <li> Chairman for Media Affairs - Association of Certified Public Accountants in Public Practice
                            (ACPAPP) </li>
                        <li> Reviewer - Philippine Review Institute for Accountancy </li>
                        <li> Member - Institute of Certified Forensic Accountants </li>
                        <li> Former Team Leader - Chevron Holdings Inc. </li>
                        <li> Former Finance Head - CCC Insurance Corporation </li>
                    </ul>
                </div>
                
        </div>
    </div>
    <br>
    <div class="container-lg container-styling" data-aos="fade-left">
        <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="assets/imgs/rvrs/emmanuel.jpg" alt="" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                    <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Emmanuel S. Varona | FAR / AP Reviewer 
                    <p class="card-subtitle muted" style="font-size: 18px;"> CPA, MBA, CMA (US), PgDip </p> </h3>
                    
                    <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                            <li> Assistant Professor | Department Head of Accountancy at San Pedro College of Business Administration </li>
                            <li> Work as Tax Consultant and Accountant to various Micro and Small Enterprises</li>
                            <li> Graduated with Master of Business Administration at San Pedro College of Business Administration </li>
                            <li> Obtained Post Graduate Diploma in Financial Management and Account at
                                European Business School of Barcelona
                            </li>
                            <li> Graduated with Bachelor of Science in Accountancy at San Pedro
                                College of Business Administration – Magna Cum Laude </li>
                        
                        </ul>  
                </div>
                
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 2 / 11 </div>
                            <a class="prev-button"><img src="assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
            
        </div>
    </div>
    <br>
    <div class="container-lg container-styling" data-aos="fade-right">
        <div class="row" style="overflow: hidden;">
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/nenita.jpg" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Nenita S. Robles 
                <p class="card-subtitle muted" style="font-size: 18px;"> CPA, MBA, BSC </p> </h3>
                
                <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                        <li> Author of Intermediate Accounting (Volume 1, 2, & 3) | The Philippine Financial Reporting | Notes & Quizzers in Theory of Accounts | Fundamentals of Accounting, Col. 2 </li>
                        <li> Work as Tax Consultant and Accountant to various Micro and Small Enterprises</li>
                        <li> Graduated with Master of Business Administration at San Pedro College of Business Administration </li>
                        <li> Obtained Post Graduate Diploma in Financial Management and Account at
                            European Business School of Barcelona
                        </li>
                        <li> Graduated with Bachelor of Science in Accountancy at San Pedro
                            College of Business Administration – Magna Cum Laude </li>
                    
                    </ul>  
                </div>
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 3 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
    </div>
    <br>
    <div class="container-lg container-styling" data-aos="fade-left">
        <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/josart.jpg" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Josart B. Tubay | MS Reviewer
                <p class="card-subtitle muted" style="font-size: 18px;"> CPA, MBA </p> </h3>
                
                <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                    <li> Graduated at Dr. Filemon C. Aguilar Memorial College of Las Pinas, Cum Laude, BS in Accountancy </li>
                    <li> Graduated Master of Business Administrator at Philippine Christian University, Manila </li>
                    <li> Former Project Controller at Makati Development Corp. </li>
                    <li> Former Faculty member in Various Colleges and Universities
                    </li>
                    <li> Former Undergraduate Reviewer in Varioys Colleges and Universities handling Advanced Financial Accounting
                        and Reporting Subject </li>
                    <li> Currently Faculty Member at Laguna State University Polytechnic University </li>
                    <li> Dr. Filemon C. Aguilar Memorial College and First City Providential College </li>
                    <li> Review Director of Philippine Review Institute for Accountancy Inc., </li>
                </ul>  
                </div>
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 4 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
    </div>
    <br>
    <div class="container-lg container-styling" data-aos="fade-right">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/cesar.jpg" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Atty. Cesar Nickolai F. Soriano Jr. | RFBT / Tax Reviewer
                <p class="card-subtitle muted" style="font-size: 18px;"> CPA, MBA </p> </h3>
                
                <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                    <li> Graduated Magna Cum Laude at the University of Santo Tomas </li>
                    <li> 1ST Honorable Mention - Arellano University </li>
                    <li> AVP / Head: Tax Advisory and COmpliance-Maybank Philippines, Inc. </li>
                    <li> Reviewer: RESA, Succeed Review School
                    </li>
                    <li> Faculty member of University of Santo Tomas </li>
                    <li> Former Tax Services Manager - Reyes Tacadong & Co. </li>
                    <li> Tax Specialist - San Miguel Brewery Inc. </li>
                </ul>
                </div>
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 5 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
    </div>
    <br>
    <div class="container-lg container-styling" data-aos="fade-left">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/jmiguel.png" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Juan Miguel Santos Ungsod | AFAR Reviewer
                <p class="card-subtitle muted" style="font-size: 18px;"> CPA </p> </h3>
                
                <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                    <li> Tax Consultant in PwC Isla Lipana </li>
                    <li> Officer in Charge Head, Accountancy Department, Universal College of Paranaque </li>
                    <li> Part-time Instructor in Dr. FIlemon C. Aguilar Memorial College of Las Pinas (DFCAMCLP)
                            and Southville International Schools and COlleges (SISC) </li>
                    <li> Teaching Advanced Financial Accounting and Reporting Auditing Problems, Taxation </li>
                    <li> Graduated Cum Laude in DFCAMCLP </li>
                    <li> Consistent topnotcher in Pre-Board examinations during review. </li>
                    <li> Former Tax Consultant  </li>
                </ul>
                </div>
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 5 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
    </div>
    <br>
    <div class="container-lg container-styling" data-aos="fade-right">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/vincent.jpg" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Atty. Paul Vincent T. Cunanan | RFBT | Tax Reviewer
                <p class="card-subtitle muted" style="font-size: 18px;"> CPA </p> </h3>
                
                <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                    <li> CPA-Lawyer with more than 10 years of combined practice in taxation, corporate law,
                        and commercial transactions </li>
                    <li> Handles legal and compliance requirements of various companies in the port operations,
                        power, and investments industries </li>
                    <li> Teaches Tax and RFBT Subjects at UST-AMV College of Accountancy. </li>
                    <li> Obtained Bachelor of Science in Accountancy Degree from UST and Bachelor of Laws from
                        San Beda Mendiola </li>
                </ul>
                </div>
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 5 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
    </div>
    <br>
    <div class="container-lg container-styling" data-aos="fade-left">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/anecito.jpg" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Mark Anecito Perlas | AUD THEO Reviewer 
                <p class="card-subtitle muted" style="font-size: 18px;"> CPA </p> </h3>
                
                <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                    <li> Instructor of various accounting and auditing subjects </li>
                    <li> Co-Author, "Integrated Reviewer in Auditing and Assurance Principles", "Operations Auditing, A Conceptual
                        and Practical Approach" and "Sustainability and Strategic Audit" </li>
                    <li> Former Senior Assurance (Audit) Associate at SyCip, Gorres, Velayo & Co. </li>
                    <li> BS Accountancy Graduate at PUP Manila (Cum Laude) </li>
                    <li> Member of National Association of CPAs in Education, Philippine Institute of CPAs,
                        Philippine Association of Management Accountants, Association of Government Internal Auditors, Inc. </li>
                </ul>
                </div>
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 5 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
    </div>

    <br><br>
    <div class="divider"> </div>
    <br><br>

    <center> <h2 data-aos="fade-up"> Online Reviewers </h2> </center>
    <br>
    <div class="container-lg container-styling" data-aos="fade-up">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/johnson.jpg" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Atty. Johnson A.H. Ong | RFBT Reviewer
                <p class="card-subtitle muted" style="font-size: 18px;"> CPA, MBA </p> </h3>
                
                <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                    <li> 10th place, 2005 BAR Examination </li>
                    <li> Faculty Member for Far Easter University Manila </li>
                    <li> RFBT Reviewer </li>
                    <li> Reviewer: RESA, Succeed Review School
                    </li>
                    <li> Former Professor / Special Lecturer: </li>
                        - Lyceum of the Philippines Manila &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Wesleyan University (Cabanatuan)<br>
                        - San Sebastian Recolletos Manila College &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Miriam College<br>
                        - Philippine School of Business Administration&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- University of the East - Manila <br>
                        - Arellano University Manila </li>
                </ul>
                </div>
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 6 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
    </div>
    <br>
    <div class="container-lg container-styling" data-aos="fade-left">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/enrico.jpg" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Enrico D. Tabag | Tax Reviewer
                <p class="card-subtitle muted" style="font-size: 18px;"> CPA, MBA </p> </h3>
                
                <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                    <li> Managing Partner at EDT & Co., CPAs, formerly Enrico D. Tabag Consultancy Services - (January 2019 - Present ) </li>
                    <li> Ass. Professor at university of Sto. Tomas, Aflredo M. Velayo, College of Accountancy (June 2008 - Present) </li>
                    <li> President and CPA Reviewer for Taxation at Accountancy Review Center of the Philippines (ARC - June 2020 - Present) </li>
                    <li> Former CPA Reviewer for Taxation at Professional Review and Training Center, Inc., (PRTC - June 2014 - 2020)
                    </li>
                    <li> Chairperson: Philippine Air Force Accounting Center of the Philippines Multi-Sector Advisory Board (MSAB) </li>
                    <li> Member of PICPA Ethics Committee for FY: 2022-2023 </li>
                    <li> Member of Taxation Committee for TOS Syllabus Review for the LECPA </li>
                    <li> Author of Taxation Texbooks and CPA Reviewer Books. (EDT BOOKSHOP) </li>
                    <li> YouTube Content Creator for Tax Lecture and Tutorials (EDT Talks) </li>
                </ul>
                </div>
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 7 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
    </div>
    <br>
    <div class="container-lg container-styling" data-aos="fade-right">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/michael.jpg" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Michael Vincent U. | Tax Reviewer
                <p class="card-subtitle muted" style="font-size: 18px;"> SIA, CPA </p> </h3>
                
                <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                    <li> Currently: Vice President - Tax, Citibank </li>
                    <li> NA Faculty - Taxation - University of St. Lasalle </li>
                    
                    <li> Tax Reviewer University of the East Caloocan </li>
                    <li> Formerly: Senior Director - Tax SGV & Co. </li>
                    <li> Tax Reviewer - PRCT </li>
                </ul>
                </div>
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 8 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
    </div>
    <br>
    <div class="container-lg container-styling" data-aos="fade-left">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/leomar.jpg" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Leomar R. Cabarles | AUD Reviewer
                <p class="card-subtitle muted" style="font-size: 18px;"> CPA </p> </h3>
                
                <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                    <li> 2ND PLACE, May 2009 CPA Licensure Examination </li>
                    <li> Author - Auditing: A Risk Based Approach, 2018 Ed. </li>
                    <li> Director, Audit and Assurance Division - A.M Yu & Associates </li>
                    <li> Former Reviewer - Professional Review and Training Center (PRTC) for FAR, AT, & Auditing Problem </li>
                    <li> Former Senior Associate, Technical Research Group, Navarro Amper & Co. (Deloitte) </li>
                    <li> Former Head, Tax and Special Projects, Maybank Philippines Inc., </li>
                    <li> Former Associate Auditor, SGV & CO (Ernst & Young) </li>
                </ul>
                </div>
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 9 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
    </div>
    <br>
    <div class="container-lg container-styling overflow-hidden" data-aos="fade-right">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/apolinario.jpg" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Dean Apolinario D. Bobadilla | MS Reviewer
                <p class="card-subtitle muted" style="font-size: 18px;"> CMA, MBA</p> </h3>
                
                <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                    <li> Cum Laude, University of Batangas </li>
                    <li> Author of the following books: <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Reviewer in Management Advisory Services &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Reviewer in Auditing Theory </li>
                    <li> Former Reviewer: <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Professional Review & Training Center (PRTC) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - For MAS CPAR for MAS and Auditing</li>
                    <li> Former College Dean, Wesleyan University of the Philippines </li>
                    <li> Former Faculty member / Lecturer: <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - University of Santo Tomas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- San Beda College<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Far Eastern University &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;- University of the East </li>
                    <li> Former Senior Bank Manager </li>
                    <li> Former Staff, SGV & CO., </li>
                </ul>
                </div>
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 11 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
    </div>
    <br>
    <div class="container-lg container-styling" data-aos="fade-left">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/daryll.jpg" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> ATTY. Daryl Matthew A. SALES| RFBT / Tax Reviewer
                <p class="card-subtitle muted" style="font-size: 18px;"> CMA, MBA</p> </h3>
                
                <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                    <li> Attorney-at-Law engaged in Tax, Corporate, and Ligitation Practice </li>
                    <li> Corporate Legal Counsel for a group of companies engaged in Manufacturing, Transportation, and Real Estate Development </li>
                    <li> Former Senior Tax Manager in one of leading professional Services (audit) firms in the Philippines </li>
                    <li> Professional Lecturer in Taxation, RFBT, and Basic Accounting since 2011 </li>
                    <li> CPA Reviewer in various school </li>
                    <li> Juris Doctor - Graduated with Honors </li>
                </ul>
                </div>
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 10 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
    </div>
    <br>
    <div class="container-lg container-styling overflow-hidden" data-aos="fade-right">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/daniella.jpg" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Atty. Daniella A. Namoca | RFBT/Tax Reviewer
                <p class="card-subtitle muted" style="font-size: 18px;"> CPA </p> </h3>
                
                <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                    <li> Attorney-at-Law engaged in Tax, Corporate, and Ligitation Practice </li>
                    <li> Passed the 2020-21 Bar Examinations with Exemplary Distinction </li>
                    <li> Legal and Accounting Manager in a manufacturing Corporation </li>
                    <li> Attorney-at-Law engaged in ligitation practice </li>
                    <li> Has an 8-year combined experience in Finance, Tax, and Corporate Compliance </li>
                    <li> Worked in SyCip, Gorres, Velayo & Co. (SGV) </li>
                </ul>
                </div>
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 11 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
    </div>
    <br>
    <div class="container-lg container-styling overflow-hidden" data-aos="fade-left">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 mt-sm-3 p-md-3">
                    <img src="home/assets/imgs/rvrs/neil.jpg" class="card-img-top">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-padding">
                <h3 class="card-title overflow-auto" style="height: 70px; color: black;"> Neil Andre M. Buladoco | MS Reviewe
                <p class="card-subtitle muted" style="font-size: 18px;"> CPA </p> </h3>
                
                <ul class="overflow-auto" style="font-size: 18px; color: black; height: 200px;">
                    <li> 9TH Place, May 2017 CPA Licensure Examination </li>
                    <li> Magna Cum Laude, BS in Accountancy at University of Mindanao Tagum College (UTMC) </li>
                    <li> Summa Cum Laude, BS in Accounting Technology at UTMC </li>
                    <li> Financial Systems Officer, Private Entity </li>
                    <li> Former Financial Assurance Associate, SGV & Co. </li>
                    <li> Part-Time Lecturer, UTMC's Competency Appraisal Course </li>
                </ul>
                </div>
                <!-- <div class="col-sm-2 mt-md-2 col-sm-2-custom">
                            <div class="profile-text"> 11 / 11 </div>
                            <a class="prev-button"><img src="home/assets/imgs/icons/arrow-prev.png" onclick="pageRvr(-1)" style="height: 30px; width: 30px">
                            </a>
                            <a class="next-button"><img src="home/assets/imgs/icons/arrow-next.png" onclick="pageRvr(1)" style="height: 30px; width: 30px"></a>
                </div> -->
        </div>
        </div>
    </div>

</div>

<br><br>
<br><br>
    <div class="divider" data-aos="fade-right"> </div>
<br><br>

<section class="how-to" id="how-to">

    <div class="container-lg container-md text-center" data-aos="fade-up">
        <h2> How to Register an Account </h2>
        <br><br>
        <img class="w-100" src="home/assets/imgs/pria-gallery/tutorial.png" data-aos="flip-right"/>
    </div>

</section>

                        <!---------------------------------------->
                        <!--                                    -->
                        <!--                                    -->
                        <!--         Articles and News          -->
                        <!--                                    -->
                        <!--                                    -->
                        <!---------------------------------------->

    <br><br>
    <div class="divider" data-aos="fade-left"> </div>
    <br><br>

    <center><h2 data-aos="fade-up" data-aos-delay="100"> Reviews and Testimonials </h2></center>
    <div class="article-title" id="article-section" data-aos="fade-up">
    </div>
    <br><br>

<section class="ftco-section ftco-no-pt ftco-no-pb" data-aos="fade-up">
			<div class="container-lg container-md container-sm" data-aos="fade-left">
				<div class="row">
						<div class="col-md-12">
							<div class="featured-carousel owl-carousel">
								<div class="item">
									<div class="blog-entry">
                                        <!-- <img class="card-img-top rounded-circle text-align-center mx-auto py-2" style="width: 200px;" src="home/assets/imgs/passers/jellowmear-cricle.jpg"> -->
                                        <a href="#" class="block-20 d-flex align-items-start card-img-top" style="height: 250px; background-image: url('home/assets/imgs/passers/passer-001.jpg');">
											<div class="meta-date text-center p-2">
												<span class="day">10</span>
												<span class="mos">May</span>
												<span class="yr">2023</span>
											</div>
										</a>
										<!-- <a href="#" class="block-20 d-flex align-items-start card-img-top rounded-circle" style="background-image: url('home/assets/imgs/passers/jellowmear-cricle.jpg');">
										</a> -->
										<div class="text border border-top-0 p-4">
											<h3 class="heading text-center"><a href="#">Thank you, PRIA Family</a></h3>
											<h6 class="card-subtitle mb-2 text-center pb-1" style="color: #B80F22;">Jellowmear Rubio</h6>
											<p class="article-height">"Thankful ako sa PRIA because during at the height of the
                                                                        pandemic, they really helped us to find a way para hindi 
                                                                        panghinaan ng loob and motivated us to keep moving forward.
                                                                        I am really thankful that I was once a part of the PRIA 
                                                                        Family." </p>
											
										</div>
									</div>
								</div>
							
								<div class="item">
									<div class="blog-entry">
                                    <a href="#" class="block-20 d-flex align-items-start card-img-top" style="height: 250px; background-image: url('home/assets/imgs/passers/passer-008.jpg');">
											<div class="meta-date text-center p-2">
												<span class="day">10</span>
												<span class="mos">May</span>
												<span class="yr">2023</span>
											</div>
										</a>
										<div class="text border border-top-0 p-4">
											<h3 class="heading text-center text-dark"> Comprehensive Concepts </h3>
											<h6 class="card-subtitle mb-2 text-center pb-1" style="color: #B80F22;">Bien Carlos Lumbre</h6>
											<p class="article-height">"As we started our review with PRIA, I really appreciate how they
                                                                        are applying zero-based teaching. They approach us in a manner
                                                                        that they don't even ask us about our foundation and that is really
                                                                        beneficial for all of us. Also, the handouts that they provided
                                                                        us is very comprehensive and the concepts can be understood deeply with
                                                                        the help of those."</p>
											
										</div>
									</div>
								</div>

                                <div class="item">
									<div class="blog-entry">
                                    <a href="#" class="block-20 d-flex align-items-start card-img-top" style="height: 250px; background-image: url('home/assets/imgs/passers/passer-002.jpg');">
											<div class="meta-date text-center p-2">
												<span class="day">10</span>
												<span class="mos">May</span>
												<span class="yr">2023</span>
											</div>
										</a>
										<div class="text border border-top-0 p-4">
											<h3 class="heading text-center text-dark"> To Future CPAs, </h3>
											<h6 class="card-subtitle mb-2 text-center pb-1" style="color: #B80F22;">Princess Exito</h6>
											<p class="article-height">"I know it's been a tough journey. Sometimes, you may feel unmotivated
                                                or you may feel like you haven't progressed at all. It's frustrating to have down days but these
                                                are completely normal to anyone who's in the process of learning. You shouldn't rush your learning
                                                progress. Breath, and take care of yourself."</p>
											
										</div>
									</div>
								</div>

							<div class="item">
								<div class="blog-entry">
                                        <a href="#" class="block-20 d-flex align-items-start card-img-top" style="height: 250px; background-image: url('home/assets/imgs/passers/passer-007.jpg');">
											<div class="meta-date text-center p-2">
												<span class="day">10</span>
												<span class="mos">May</span>
												<span class="yr">2023</span>
											</div>
										</a>
									<div class="text border border-top-0 p-4">
										<h3 class="heading text-center text-dark">I am a Proud PRIA Reviewee</h3>
										<h6 class="card-subtitle mb-2 text-center pb-1" style="color: #B80F22;">John Ivan Bautista</h6>
										<p class="article-height overflow-auto">"Nakakaproud maging part ng PRIA dahil yung mga di ko masyadong
                                                                    natutunan sa undergraduate subjects ko ay sa PRIA ko natutunan
                                                                    at mas lalong lumawak ang aking kaalaman. Masaya din ako sapagkat
                                                                    medyo naging confident na din ako sa mga subjects na di ko 
                                                                    masyadong natutunan."
                                        </p>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="blog-entry">
                                        <a href="#" class="block-20 d-flex align-items-start card-img-top" style="height: 250px; background-image: url('home/assets/imgs/passers/passer-004.jpg');">
											<div class="meta-date text-center p-2">
												<span class="day">10</span>
												<span class="mos">May</span>
												<span class="yr">2023</span>
											</div>
										</a>
									<div class="text border border-top-0 p-4">
										<h3 class="heading text-center text-dark">Gained Knowledge from PRIA!</h3>
										<h6 class="card-subtitle mb-2 text-center pb-1" style="color: #B80F22;">Michelle Vida</h6>
										<p class="article-height overflow-auto" style="height: 200px;">"Maraming salamat PRIA! Malaking tulong po yung review para saakin lalo
                                                                                na't average student lang ako. Thank you for sharing us your knowledge
                                                                                in accounting. I truly learned something from this undegrad review."
                                        </p>
										
									</div>
								</div>
							</div>

							<div class="item">
								<div class="blog-entry">
                                        <a href="#" class="block-20 d-flex align-items-start card-img-top" style="height: 250px; background-image: url('home/assets/imgs/passers/passer-005.jpg');">
											<div class="meta-date text-center p-2">
												<span class="day">10</span>
												<span class="mos">May</span>
												<span class="yr">2023</span>
											</div>
										</a>
									<div class="text border border-top-0 p-4">
										<h3 class="heading text-center text-dark">Reinforced my Foundations</h3>
										<h6 class="card-subtitle mb-2 text-center pb-1" style="color: #B80F22;">Joyce Anne Ilao</h6>
										<p class="article-height">"My foundation on some subjects were really not that great so I'm very thankful
                                                                  to PRIA and to the reviewers because they provide vey helpful and useful review materials
                                                                  and for always inspiring and motivating us to continue thriving until we become
                                                                CPAs in the near future."
                                        </p>
										
									</div>
								</div>
							</div>

							<div class="item">
								<div class="blog-entry">
                                        <a href="#" class="block-20 d-flex align-items-start card-img-top" style="height: 250px; background-image: url('home/assets/imgs/passers/passer-006.jpg');">
											<div class="meta-date text-center p-2">
												<span class="day">10</span>
												<span class="mos">May</span>
												<span class="yr">2023</span>
											</div>
										</a>
									<div class="text border border-top-0 p-4">
										<h3 class="heading text-center text-dark">Encouraging Experience</h3>
										<h6 class="card-subtitle mb-2 text-center pb-1" style="color: #B80F22;">Jededeah Bernales</h6>
										<p class="article-height">PRIA team has encouraged me to never give up until I get the CPA title.</p>
										
									</div>
								</div>
							</div>

							<div class="item">
								<div class="blog-entry">
                                        <a href="#" class="block-20 d-flex align-items-start card-img-top" style="height: 250px; background-image: url('home/assets/imgs/passers/passer-003.jpg');">
											<div class="meta-date text-center p-2">
												<span class="day">10</span>
												<span class="mos">May</span>
												<span class="yr">2023</span>
											</div>
										</a>
									<div class="text border border-top-0 p-4">
										<h3 class="heading text-center text-dark">We were lucky to find and join PRIA.</h3>
										<h6 class="card-subtitle mb-2 text-center pb-1" style="color: #B80F22;">Klariz Anne Angcanan</h6>
										<p class="article-height">"We are lucky to have a review center like pria
                                                                    during our Integrated Accounting Review Subject for 
                                                                    this semester. It relly simulates how the reviewfor CPALE
                                                                    will be conducted."</p>
										
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>


                        <!---------------------------------------->
                        <!--                                    -->
                        <!--                                    -->
                        <!--     Offered Programs Section       -->
                        <!--                                    -->
                        <!--                                    -->
                        <!---------------------------------------->

    <br><br><br><br>
    <div class="divider" data-aos="fade-right"> </div>
    <br><br>

    <h2 class="offered-programs" data-aos="zoom-in"> OFFERED PROGRAMS </h2>
    <br>

    <div class="container-lg px-4 px-lg-5 py-md-5" data-aos="fade-left">
    <h2 class="offered-programs text-lg-left" data-aos="fade-left"> Face-to-Face CPA Review Class </h2>
    <br>
        <div class="row gx-0 mb-5 mb-lg-5 justify-content-center" data-aos="fade-up">

            <div class="row mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6 mb-0 px-0" style="border:none;" data-aos="fade-right" data-aos-delay="100">
                        <img src="home/assets/imgs/pria-gallery/gallery-009.jpg" class="img-fluid">
                </div>
                <div class="text-white col-lg-6" style="background-color:#b80f22;" data-aos="fade-left" data-aos-delay="200">
                    <div class="text-center h-100">
                        <div class="d-flex h-100">
                            <div class="w-100 my-auto text-center text-lg-center">
                                <h4 class="text-white my-auto">Face-to-Face Classes</h4>
                                <p>Classroom discussion and hands-on problem solving.
                                Engage in dynamic classroom discussions and collaborative 
                                problem-solving sessions to enhance your understanding of accounting concepts.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6 mb-0 px-0" style="border:none" data-aos="fade-left" data-aos-delay="400">
                    <img src="home/assets/imgs/pria-gallery/pria-010.jpg" class="img-fluid">
                </div>
                    <div class="text-white col-lg-6 order-lg-first" style="background-color:#263560;" data-aos="fade-right" data-aos-delay="300">
                        <div class="text-center h-100">
                            <div class="d-flex h-100">
                                <div class="w-100 my-auto text-center text-lg-center">
                                    <h4 class="text-white my-auto">Printed Handouts</h4>
                                    <p>Amplify your learning with visually rich printed 
                                        hand-outs that provide clear and concise summaries of key topics.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="row mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6 mb-0 px-0" style="border:none;" data-aos="fade-right" data-aos-delay="500">
                        <img src="home/assets/imgs/pria-gallery/gallery-012.jpg" class="img-fluid">
                </div>
                <div class="text-white col-lg-6" style="background-color:#b80f22;" data-aos="fade-left" data-aos-delay="600">
                    <div class="text-center h-100">
                        <div class="d-flex h-100">
                            <div class="w-100 my-auto text-center text-lg-center">
                                <h4 class="text-white my-auto">Access to learning resources</h4>
                                <p>Enjoy full access to a wealth of learning resources that 
                                    complement your studies and cater to various learning preferences..
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6 mb-0 px-0" style="border:none;" data-aos="fade-left" data-aos-delay="800">
                    <img src="home/assets/imgs/pria-gallery/pria-005.jpg" class="img-fluid">
                </div>
                    <div class="text-white col-lg-6 order-lg-first" style="background-color:#263560;" data-aos="fade-right" data-aos-delay="700">
                        <div class="text-center h-100">
                            <div class="d-flex h-100">
                                <div class="w-100 my-auto text-center text-lg-center">
                                    <h4 class="text-white my-auto">Face to face interaction with the reviewer</h4>
                                    <p>Immerse yourself in valuable face-to-face interactions with experienced reviewers, 
                                        gaining personalized insights in a classroom environment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="row mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6 mb-0 px-0" style="border:none;" data-aos="fade-right" data-aos-delay="900">
                        <img src="home/assets/imgs/pria-gallery/gallery-014.jpg" class="img-fluid">
                </div>
                <div class="text-white col-lg-6" style="background-color:#b80f22;" data-aos="fade-left" data-aos-delay="1000">
                    <div class="text-center h-100">
                        <div class="d-flex h-100">
                            <div class="w-100 my-auto text-center text-lg-center">
                                <h4 class="text-white my-auto">Optional Online Access</h4>
                                <p>Embrace the convenience of optional online access, allowing you 
                                    to continue your accounting review journey from anywhere, anytime.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="offered-programs" data-aos="zoom-in" data-aos-delay=""> MORE </h2>

<div class="programs-container container-lg" id="offered-programs-section" data-aos="fade-left">
    <!-- <div class="container-xxl">
        <div class="row m-0 justify-content-center align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-10 col-sm-10 mb-4 m-sm-5">
                <div class="card mb-4" style="width: 100%; border-radius: 20px; background-color: #B80F22; padding: 0 0 10px 0;">
                    <div class="image-container" style="height: 300px;">
                        <img class="card-img-top" src="home/assets/imgs/accounting-mastery-course.jpeg">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Mock Board Exam</h4>
                        <p class="card-text" style="height: 150px; overflow: hidden;">
                        Test your knowledge, skills, and readiness for the real Board Exam with our 
                        comprehensive mock test.
                        </p>
                
                    </div>   
                </div>
                <div class="card mb-4" style="width: 100%; border-radius: 20px; background-color: #B80F22; padding: 0 0 10px 0;">
                    <div class="image-container" style="height: 300px;">
                        <img class="card-img-top" src="home/assets/imgs/accounting-mastery-course.jpeg">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Mock Board Exam</h4>
                        <p class="card-text" style="height: 150px; overflow: hidden;">
                        Test your knowledge, skills, and readiness for the real Board Exam with our 
                        comprehensive mock test.
                        </p>
                
                    </div>   
                </div>
            </div>
            
    </div> -->
                <div class="card mb-4" style="width: 20wh; border-radius: 20px; background-color: #B80F22; padding: 0 0 10px 0; height: 600px;" data-aos="flip-right" data-aos-delay="100">
                    <div class="image-container" style="height: 300px;">
                        <img class="card-img-top" src="home/assets/imgs/pria-gallery/gallery-014.jpg">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Online Class for Flexible Learning</h4>
                            <ul class="text-white">
                                <li> Customized program for integrated review </li>
                                <li> Flexible Review </li>
                            </ul>
                            
                    </div>
                    <div class="d-flex align-items-center justify-content-center mt-4">
                                <p class="mb-0"><a href="https://pdacgroup.com/enrollment/public/index.php/user/splash/84" 
                                target="_blank" class="btn btn-primary" 
                                style="background-color: #B80F22; border: none;">
                                Enroll Now! <span class="ion-ios-arrow-round-forward"></span></a></p>
                    </div>
                </div>
        <div class="card mb-4" style="width: 20wh; border-radius: 20px; background-color: #B80F22; padding: 0 0 10px 0; height: 600px;" data-aos="flip-right" data-aos-delay="200">
            <div class="image-container" style="height: 300px;">
                    <img class="card-img-top" src="home/assets/imgs/pria-gallery/gallery-015.jpg">
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center">Open Pre-Board Registration</h4>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-4">
                            <p class="mb-0"><a href="https://pdacgroup.com/enrollment/public/index.php/user/splash/84" target="_blank" class="btn btn-primary" style="background-color: #B80F22; border: none;">
                            Enroll Now! <span class="ion-ios-arrow-round-forward"></span></a></p>
                </div>
        </div>

    <div class="card mb-4" style="width: 30wh; border-radius: 20px; background-color: #B80F22; padding: 0 0 10px 0; height: 600px;" data-aos="flip-right" data-aos-delay="300">
        <div class="image-container" style="height: 300px;">
            <img class="card-img-top" src="home/assets/imgs/pria-background.jpg" style="width: 100%; height: 100%;">
        </div>
        <div class="card-body">
            <h4 class="card-title">Mastery Program</h4>

            <ul class="text-white">
                    <li> Discussion of all topics for all SUBJECTS – 8 HRS of lectures and problem solving per subject.</li>
                    <li> Flexible Review </li>
                </ul>
        </div>
        <div class="d-flex align-items-center justify-content-center mt-4">
                    <p class="mb-0"><a href="https://pdacgroup.com/enrollment/public/index.php/user/splash/84" target="_blank" class="btn btn-primary" style="background-color: #B80F22; border: none;">Enroll Now! <span class="ion-ios-arrow-round-forward"></span></a></p>
                </div>
</div>

    </div>
    <br>
    
    </div>
    
</div>


<br>

                        <!---------------------------------------->
                        <!--                                    -->
                        <!--                                    -->
                        <!--           FOOTER DIV               -->
                        <!--                                    -->
                        <!--                                    -->
                        <!---------------------------------------->

<!-- <div class="container my-5" style="margin: 0;"> -->

    
  <footer class="footer-container text-center text-lg-start mt-md-5 mt-sm-5 text-white" id="about" style="height: auto;">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
        <div class="row my-4">
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4" style="color: black;">LOCATION</h5>

          <ul class="list-unstyled">
            <li>
              <p  style="font-size: 15px; font-weight: 200; color: black;"></i>
               3RD Floor, Elizabeth Bldg.,
               National Road, Barangay Putatan,
               Muntinlupa City, Metro Manila,
               Philippines </p>
            </li>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4" style="color: black;">CONTACT INFO</h5>

          <ul class="list-unstyled">
            <li>
              <p  style="font-size: 15px; font-weight: 200; color: black;"></i>
               0945-360-8753 | (02) 8838-30-99
            </li>
            
            <p  style="font-size: 15px; font-weight: 200; color: black;">
               info@pria-pdacgroup.com </p>
            </li>
        </div>

        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <div class="d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px; margin-right: 100px;">
                <img src="home/assets/imgs/logos/pria-arc-logo.png" height="110px" alt="" loading="lazy"/>
            </div>
      </div>
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <div class=" d-flex align-items-center justify-content-center mx-auto" style="width: 150px; height: 150px; margin-right: 10px;">
                <img src="home/assets/imgs/logos/pdacgroup-logo.png" style="height:70px;" alt="" loading="lazy"/>
            </div>
        </div>
        <!--Grid column-->
        <div class="col-lg-1 col-md-6 mb-4 mb-md-0">
            <div class=" d-flex align-items-center justify-content-center mx-auto" style="width: 200px; height: 150px; padding: 0 0 0 0;">
                <img src="home/assets/imgs/logos/pdactech-logo.png" style="height:100px;" alt="" loading="lazy"/>
            </div>
        </div>
      <!--Grid row-->
      
    </div>
    <!-- Grid container -->
    
  </footer>

<!-- </div> -->
<script>
    AOS.init();
</script>
<script src="home/js/jsslider.js"></script>
<script src="home/js/details-script.js"></script>

<!-- JavaScript / Swiper JS -->
<script src="home/js/jquery.min.js"></script>
<script src="home/js/popper.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="home/js/bootstrap.min.js"></script>
<script src="home/js/owl.carousel.min.js"></script>
<script src="home/js/main.js"></script>

</body>

</html>
