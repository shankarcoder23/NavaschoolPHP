<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Naba Siksha School</title>

<!--Google Fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<link rel="stylesheet" href="assets/css/index.css">
<link rel="stylesheet" href="assets/css/about.css">
<link rel="stylesheet" href="assets/css/faculty.css">
<link rel="stylesheet" href="assets/css/founder.css">
<link rel="stylesheet" href="assets/css/principalmsg.css">
<link rel="stylesheet" href="assets/css/parentsmeet.css">
<link rel="stylesheet" href="assets/css/rules.css">
<link rel="stylesheet" href="assets/css/noticeboard.css">
<link rel="stylesheet" href="assets/css/contact.css">
</head>

<body>

<!-- Top Header -->
<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span><i class="bi bi-telephone-fill"></i> +91 9876543210</span>
            </div>

            <div class="col-md-6 text-end">
                <span><i class="bi bi-envelope-fill"></i> info@nabasiksha.edu</span>
            </div>
        </div>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">

       <a class="navbar-brand d-flex align-items-center" href="index.php">
    
    <img src="assets/image/logo/logo.png"
         alt="School Logo"
         class="school-logo">

    <div class="ms-3">
        <h5 class="mb-0 school-name">
            Nava Shiksha Public School
        
    </div>

</a>

     <button class="navbar-toggler custom-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarContent"
        aria-label="Toggle navigation">

    <span></span>
    <span></span>
    <span></span>

</button>

        <div class="collapse navbar-collapse" id="navbarContent">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                       href="aboutus.php"
                       data-bs-toggle="dropdown">
                        About Us
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="about.php">
                                About The School
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">
                                Vision & Goals
                            </a>
                        </li>
                    </ul>
                </li>
                

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                       href="#"
                       data-bs-toggle="dropdown">
                        Staff
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="founder.php">Founder's</a></li>
                        <li><a class="dropdown-item" href="principalmsg.php">Principal's Message</a></li>
                        <li><a class="dropdown-item" href="faculty.php">Our Faculty</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                       href="#"
                       data-bs-toggle="dropdown">
                        Academics
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Sports</a></li>
                        <li><a class="dropdown-item" href="#">Occasions</a></li>
                        <li><a class="dropdown-item" href="parentsmeet.php">Parent Teacher Meet</a></li>
                        <li><a class="dropdown-item" href="rules.php">Rules & Regulations</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                       href="#"
                       data-bs-toggle="dropdown">
                        Gallery
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Photos</a></li>
                        <li><a class="dropdown-item" href="">Video</a></li>                       
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="noticeboard.php">Notice Board</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>

                

                 <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Contact Us</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<script>
document.addEventListener("DOMContentLoaded", function(){

    const toggler = document.querySelector(".custom-toggler");
    const menu = document.getElementById("navbarContent");

    menu.addEventListener("show.bs.collapse", function(){
        toggler.classList.add("active");
    });

    menu.addEventListener("hide.bs.collapse", function(){
        toggler.classList.remove("active");
    });

});
</script>