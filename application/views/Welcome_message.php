
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Financial Advisor</title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- Favicons -->
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">    
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .text-justify {
  text-align: justify;
}
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	  /* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */




/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body style="font-family: 'Prompt', sans-serif;">
    
<header>
  <nav class="navbar navbar-dark" style="background-color: #2C085F;">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><b>Financial Advisor</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page"><b>บัญชีสมาชิก</b></a>
          </li>         
        </ul>
        <?php
          if($this->session->userdata('username')== null){
          
        ?>
        <form class="d-flex" method="post" action="<?php echo base_url('customer/SignIn'); ?>"> 
          <input class="form-control mr-2" type="search" min_length="10" name="username" max_length="10" placeholder="Username" required>
          <input class="form-control mr-2" type="search" min_length="10" name="password" max_length="10" placeholder="Password" required>
          <button class="btn btn-success" type="submit">Login</button>
        </form>
        <hr/>
        <form class="d-flex align-right"> 
        <ul class="navbar-nav mr-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="" data-toggle="modal" data-target="#staticBackdrop">เปิดบัญชีใหม่</a>
          </li>  
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="" data-toggle="modal" data-target="#staticInfo">เงื่อนไขการบริการ</a>
          </li> 
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="" data-toggle="modal" data-target="#staticForget">ฉันลืมรหัสผ่านเข้าบัญชี</a>
          </li>         
        </ul>    
        </form>
            <?php 
            }else{
            ?>
            <form class="d-flex"> 
            <ul class="navbar-nav mr-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page"><b><?php echo $this->session->userdata('username'); ?></b></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="" data-toggle="modal" data-target="#staticBackdrop">เปิดบัญชีเครือข่าย</a>
          </li> 
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="" data-toggle="modal" data-target="#staticBackdrop">ฝากเงิน</a>
          </li>   
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="" data-toggle="modal" data-target="#staticBackdrop">ถอนเงิน</a>
          </li>   
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="" data-toggle="modal" data-target="#staticBackdrop">คอมมิชชั่น</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="<?php echo base_url('Customer/logout'); ?>">ออกจากระบบ</a>
          </li>        
        </ul>          
        </form>        
        <?php 
            }
            ?>
      </div>
    </div>
  </nav>
</header>

<main>
<br/>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- ลงทะเบียน -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><b>เปิดบัญชีลงทุนใหม่</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url('customer/Signup'); ?>" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">รายละเอียดบัญชีผู้ใช้งาน</label>
            <input type="text" class="form-control" name="customer_name" id="recipient-name" placeholder="ชื่อบัญชีผู้ใช้งาน" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="customer_email" id="recipient-name" placeholder="กรอกบัญชีอีเมล์" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="customer_phone" id="recipient-name" placeholder="กรอกเบอร์โทรศัพท์" required>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-success">เปิดบัญชีใหม่</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
<!-- ลงทะเบียน -->

 <!-- เงื่อนไขการให้บริการ -->
 <div class="modal fade" id="staticInfo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><b>เงื่อนไขการให้บริการ</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
      <p class="text-justify">
      การเชื่อมโยงกับเว็บไซต์ของบุคคลที่สามผ่านเว็บไซต์ เป็นสิ่งที่อยู่ภายใต้ความเสี่ยงของท่านเอง เนื้อหาสาระ ความถูกต้อง การแสดงความคิดเห็น และการเชื่อมต่ออื่นใด ที่จัดสรรขึ้นภายใต้เว็บไซต์นี้ เป็นเพียงการให้บริการเพื่อความสะดวกเท่านั้น ดังนั้น จึงไม่มีอำนาจควบคุม รับรอง ยืนยันความถูกต้องหรือความครบถ้วน หรือความสมบูรณ์ หรือความต่อเนื่อง หรือความเป็นปัจจุบัน ความน่าเชื่อถือ หรือรับผิดชอบในเนื้อหาข้อมูลของเว็บไซต์ของบุคคลที่สาม นอกจากนี้ ข้อมูลดังกล่าวอาจมีข้อจำกัดในการที่ท่านจะนำไปเผยแพร่อีกต่อหนึ่งตามกฎหมายลิขสิทธิ์ ดังนั้น ท่านจะต้องติดต่อขออนุญาตใช้ลิขสิทธิ์ในข้อมูลดังกล่าวจากเจ้าของข้อมูลโดยตรง ทั้งนี้ เงื่อนไขข้อตกลงการใช้บริการ การใช้งานระหว่างประเทศ การตีความ และการบังคับใช้ให้เป็นไปตามกฎหมายของประเทศไทย</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- เงื่อนไขการให้บริการ -->

<!-- ลืมรหัสผ่าน -->
<div class="modal fade" id="staticForget" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><b>คุณลืมรหัสผ่าน ?</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>         
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">บัญชีอีเมล์สำหรับกู้คืนบัญชี</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="กรอกบัญชีอีเมล์">
          </div>         
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-success">กู้คืนับัญชี</button>
      </div>
    </div>
  </div>
</div>
<!-- ลืมรหัสผ่าน -->


    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading text-center">บริการให้คำปรึกษาด้านการลงทุน <br/><span class="text-muted">Investment Consulting service</span></h2>
         </div>
      <div class="col-md-5">
       <img src="<?php  echo base_url('assets/iconfinder_users-2_984102.svg'); ?>" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" />
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2 text-center">
        <h2 class="featurette-heading">ที่ปรึกษาด้านการเงิน <br/><span class="text-muted">Financial Advisor</span></h2>
        </div>
      <div class="col-md-5 order-md-1">
      <img src="<?php  echo base_url('assets/iconfinder_users-14_984106.svg'); ?>" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" />
        
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 text-center">
        <h2 class="featurette-heading">การวางแผนการเงิน <br/> <span class="text-muted">Wealth management</span></h2>
       </div>
      <div class="col-md-5">
      <img src="<?php  echo base_url('assets/iconfinder_users-1_984101.svg'); ?>" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" />
        
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#" class="btn btn-success btn-sm">กลับสู่ด้านบน</a></p>
    <p>&copy; 2020 INVESTMENT, Inc. &middot; 
  </footer>
</main>

<!-- JavaScript and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  
  </body>
</html>
