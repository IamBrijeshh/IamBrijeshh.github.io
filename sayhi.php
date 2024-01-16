<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap.js-->
    <!-- We have downloaded this files and we can use it as offline in our machine-->
    <script src="Bootstrap/js/jquery-3.3.1.slim.min.js"> </script>
    <script src="Bootstrap/js/popper.min.js"> </script>
    <script src="Bootstrap/js/js_bootstrap.min.js"> </script>

    
    <!-- Bootstrap CSS file-->
    <link href="Bootstrap/css/css_bootstrap.min.css" rel="stylesheet">
    <!-- downloaded font awsome file for offline use-->
    <link href="fontawesome-free-6.4.0-web/css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Say Hiii!</title>
  </head>

  <!--
      xs<576 | 576<sm<768 | 768<md<992 | 992<lg|1200 | 1200<xl
  -->

  <body>
    <!-- Start of Header-->

    <header> 
      <div class="p-1" id="topheader">
          <div class="container">
            <div class="row">
              <div class="col-12 text-end">
                <a class="p-1" href="tel:+919586011927"><i class="fa-solid fa-phone-flip headericonstyle"></i> +(91) 9586011927</a>
                <a class="p-1" href="mailto:bjotaniya4@gmail.com"><i class="fa-solid fa-envelope headericonstyle"></i> bjotaniya4@gmail.com</a>
              </div>
            </div>
          </div>
      </div>

      <div id="bottomheader">
        <div class="container-fluid">
          <nav class="navbar navbar-dark navbar-expand-md p-3 pe-4 pe-sm-5">
            <a class="navbar-brand" href="#">
              <h3 style="font-size: 1.8rem;">Brijesh Jotaniya</h3>
            </a>
            <button data-bs-toggle="collapse" data-bs-target="#navbarToggler" type="button" class="navbar-toggler">
            <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarToggler">
              <ul class="navbar-nav ms-1 navli">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" href="#">Projects</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="webdevelopment.html">Web Development Projects</a>
                    <a class="dropdown-item" href="mobileapp.html">Mobile App Project</a>
                    <a class="dropdown-item" href="softwaredevelopment.html">Software Development Project</a>
                    <a class="dropdown-item" href="datascience.html">Data Science Projects</a>
                    <a class="dropdown-item" href="systemdesign.html">System Design Project</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="sayhi.php">Say Hii!</a>
                </li>
              </ul>
            </div>
          </nav>

        </div>
      </div>
    </header>

    <!--End of Header-->

    <!--Start of sayhii getin class--> 

    <section class="getin">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 mt-4 p-2 mainheading">
            <h3>Want to Know More?</h3>
          </div>
        </div>
      </div>
    </section>

    <!--End of sayhii getin class-->

    <!-- Start of formcontent section -->

    <section class="formcontent mb-3">
      <div class="container contact" style="background-color: #e7fffa;">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6 p-3 p-md-4">
            <h2 class="hero">Let's Connect!</h2>
            <p class="contactpara">I’d love to hear from you; whether you want to know more about my profile, want to collaborate on a project, or simply just want to say hello.</p>
            <p class="contactpara">You can fill out the form on the right to get in touch with me !!!</p>
          </div>
          
          
          <div class="col-12 col-sm-6 col-md-6 p-3 formc">
            <form action="contactform.php" method="post">
              <div class="row mt-4">
                <div class="form-group col-md-6 mb-3">
                  <input type="text" class="form-control" id="myTextInput" name="fname" oninput="restrictToAlphabetic(this)" placeholder="First Name*" required>
                  <script>
                    function restrictToAlphabetic(element) {
                      element.value = element.value.replace(/[^a-zA-Z]/g, '');
                    }
                  </script>
                </div>
                <div class="form-group col-md-6 mb-3">
                  <input type="text" class="form-control" id="myTextInput" name="lname" oninput="restrictToAlphabetic(this)" placeholder="Last Name*" required>
                </div>
               </div>

              <div class="row"> 
                <div class="form-group col-md-6 mb-3">
                  <input type="phone" class="form-control" id="myNumberInput" name="monumber" oninput="limitNumberLength(this, 13)"  placeholder="Phone*" required>
                  <script>
                    function limitNumberLength(element, maxLength) {
                      if (element.value.length > maxLength) {
                          element.value = element.value.slice(0, maxLength);
                          }
                    }
                  </script>
                </div>

                <div class="form-group col-md-6 mb-3">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-12 mb-3">
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*" required>
                </div>
              </div>

              <div class="row">  
                <div class="form-group col-md-12 mb-3">
                  <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
                </div>
              </div>

              <div class="row">  
                <div class="form-group col-md-12 mb-3 text-center">
                  <button class="btn btn-primary submitbtn" name="btn-submit" type="submit"><i class="fa-solid fa-paper-plane"></i>  Send Message
                  </button>
                </div>
              </div>

            </form>  
          </div>  
        </div>  
      </div>
    </section>

    <!-- End of formcontent section -->

    <!--Start of Footer-->

    <footer class="full-footer">
      <div class="container top-footer p-md-3 p-1">
        <div class="row footertxt">
          <div class="col-md-5 ps-4 pe-4">
            <h4>Brijesh Jotaniya</h4>
            <p>
              Completed Bachlore of Science in Information Technology at Charusat University. Having knowledge
              of many programming language.. <a href="">Read more</a>
            </p>
            <a href="https://www.linkedin.com/in/brijesh-jotaniya-01890227a/"><i class="fa-brands fa-2x fa-linkedin"></i></a>
            <a href="https://www.instagram.com/brijesh_jotaniya/" class="mx-2"><i class="fa-brands fa-2x fa-instagram"></i></a>
            <a href="https://github.com/Brijeshvj"><i class="fa-brands fa-2x fa-github"></i></a>
          </div>
          <div class="col-md-3 ps-4 pe-4 mt-1 footer-col2">
            <h4>Important Skills</h4>
            <h6>Web Development</h6>
            <h6>Mobile App Development</h6>
            <h6>Software Development</h6>
            <h6>Data Science</h6>
            <h6>System Design</h6>
          </div>
          <div class="col-md-4 mt-1 ps-4 pe-4">
            <h4>Contact Me</h4>
            <a href="tel:+919586011927" class="footercontactlinkstyle"><i class="fa-solid fa-phone-flip"></i> +(91) 9586011927</a><br>
            <a href="mailto:bjotaniya4@gmail.com" class="footercontactlinkstyle"><i class="fa-solid fa-envelope"></i> bjotaniya4@gmail.com</a>
            <div class="ratio ratio-16x9">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118147.82106515896!2d70.73889438913474!3d22.273466166614785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c98ac71cdf0f%3A0x76dd15cfbe93ad3b!2sRajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1687956208082!5m2!1sen!2sin" frameborder="0"></iframe>
            </div> 
          </div>
        </div>
      </div>
      <div class="coontainer-fluid bottom-footer pt-2">
        <div class="row">
          <div class="col-12 text-center">
            <p>Copyright &#169 2023 - Brijesh Jotaniya</p>
          </div>
        </div>
      </div>
    </footer>

    <!--End of Footer-->

  </body>
</html>