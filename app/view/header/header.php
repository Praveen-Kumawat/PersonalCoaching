<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>mYCoaching</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?=ROOT?>" class="nav-item nav-link active">Home</a>
                <a href="<?=ROOT?>home/about" class="nav-item nav-link">About</a>
                <a href="<?=ROOT?>course" class="nav-item nav-link">Courses</a>
                <a href="<?=ROOT?>home/courses" class="nav-item nav-link">Books</a>
                  <!-- <button style="border:none;background:none; display:inline-block;margin:0;padding:0;">Videos</button> -->
                  <a href="<?=  ROOT?>videos/folderview" class="nav-item nav-link">Videos</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Docs</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">PDFs</a>
                        <a href="<?=ROOT?>docs/timetable" class="dropdown-item">Time Table</a>
                        <a href="team.html" class="dropdown-item">Results</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Options</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="<?=ROOT?>options/quicklinks" class="dropdown-item">Quick Links</a>
                        <a href="team.html" class="dropdown-item"></a>
                        <a href="team.html" class="dropdown-item">Purchased</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                      
                    </div>
                </div>
                <a href="<?=ROOT?>home/contact" class="nav-item nav-link">Contact</a>
            </div>
            
            <?php 
            if(isset($_SESSION['user_info']) && $_SESSION['user_info'])
            {
              ?>
              <div class="nav-item dropdown">
              <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block ms- nav-link dropdown-toggle" data-bs-toggle="dropdown">Welcome! <?=$_SESSION['user_info']['users']?></a>
              <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">My Profile</a>
                        <a href="team.html" class="dropdown-item">My Courses</a>
                        <a href="team.html" class="dropdown-item">Updates For me</a>
                        <a href="<?=ROOT?>/users/logout" class="dropdown-item">Logout</a>
                        
                      
                    </div>
            </div>
              <?php
            }
            else
            {
              ?>
               <a href="<?=ROOT?>register" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Register / Login<i class="fa fa-arrow-right ms-3"></i></a>
              <?php
              // echo "Register / Login";
            }
              ?>
            
        </div>
    </nav>
    <!-- Navbar End -->








































<!-- <div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MyCoaching</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Social Media
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Instagram</a></li>
            <li><a class="dropdown-item" href="#">Facebook</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Whatsapp</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    
</div> -->