<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Resume-Pavin.C</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('/assets/img/cv.png') }}">

  <meta content="Resume" name="About my details">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/boxicons/2.0.7/css/boxicons.min.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset('/assets/img/profile.jpg') }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="{{ url('/') }}">Pavin C</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="{{url('https://www.instagram.com/_noway_xyz/')}}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="{{url('mailto:pavinsanthi6@gmail.com')}}" class="gmail"><i class="bx bxl-gmail"></i></a>
          <a href="{{url('https://www.linkedin.com/in/pavin-c/')}}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="{{url('https://github.com/Pavin-C')}}" target="_blank" class="github"><i class="bx bxl-github"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="{{ url('#hero') }}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="{{ url('#about') }}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="{{ url('#skills') }}" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Skills</span></a></li>
          <li><a href="{{ url('#resume') }}" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="{{ url('#contact') }}" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Pavin Chandramani</h1>
      <p>I'm <span class="typed" data-typed-items="Web Developer, Biomedical Engineer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Welcome to my portfolio! I'm Pavin C, a final-year student pursuing a degree in Biomedical Engineering interest in Web Development. As I prepare to graduate and transition into the professional world, I'm excited to share my Skills, experiences, and projects with you.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{ asset('/assets/img/profile.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Web Developer</h3>
            <p class="fst-italic">
            My academic journey has been characterized by a passion for web development and a commitment to academic excellence. Throughout my studies, I've had the opportunity to explore various aspects of web development, gaining hands-on experience through internships, research projects, and extracurricular activities.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>07 November 2002</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Linkedin:</strong> <span>www.linkedin.com/in/pavin-c</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+91 6381281441</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Namakkal, Tamil Nadu, India</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>B.E-BioMedical</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>pavinsanthi6@gmail.com</span></li>
                </ul>
              </div>
            </div>
            <p>
            I'm excited about the possibilities that lie ahead and am eager to explore opportunities that align with my interests and skills. Whether it's discussing potential collaborations, internship opportunities, or simply connecting with fellow professionals, I'd love to hear from you. Feel free to browse through my portfolio and reach out to me via about contact information.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Discover the diverse skill set that I bring to the table. From technical proficiencies to soft skills, explore how my capabilities can add value to your projects and initiatives. Whether it's programming languages, data analysis tools, or leadership abilities, delve into my skill portfolio to understand how I can contribute to your team's success. Let's explore together and unlock new possibilities!</p>
         </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">
           <h2>Technical Skills</h2>
            <div class="progress">
              <span class="skill">HTML5 <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS and bootstrap <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript and JQuery <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">C <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Java <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Mysql <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            

            <div class="progress">
              <span class="skill">Laravel Framework <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Git,Bitbucket and Sourcetree <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
           <h2>Soft Skills</h2>
            <div class="progress">
              <span class="skill">Communication Skills <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Team Working skills <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Leadership skills <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Adaptability <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Welcome to my resume! Here you'll find a comprehensive overview of my education, skills, experiences, and achievements. Take a closer look to discover how my background and expertise align with your needs and objectives. From my academic qualifications to my professional accomplishments, my resume provides a snapshot of what I have to offer. Dive in and explore to learn more about how I can contribute to your team or organization.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Pavin Chandramani</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <ul>
                <li>Namakkal,TamilNadu,India</li>
                <li>+91 6381281441</li>
                <li>pavinsanthi6@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor of Engineering-Biomedical</h4>
              <h5>2020 - 2024</h5>
              <p><em>Rathinam Technical Campus,Coimbatore|Anna University|CGPA-8.1</em></p>
              </div>
            <div class="resume-item">
              <h4>Higher Secondary Certificate</h4>
              <h5>2019 - 2020</h5>
              <p><em>Sri Vinayaga Matric Hr.Sec.School|TN State Board|Namakkal|85%</em></p>
             </div>
             <div class="resume-item">
              <h4>Secondary School Certificate</h4>
              <h5>2017 - 2018</h5>
              <p><em>Sri Vinayaga Matric Hr.Sec.School|TN State Board|Namakkal|93.6%</em></p>
             </div>
             <h3 class="resume-title">Certifications</h3>
            <div class="resume-item">
              <h4>NPTEL Certified</h4>
              <h5>Aug-Sep 2022</h5>
              <p><em>Biomedical Nanotechnology|53%</em></p>
              </div>
              <div class="resume-item">
              <h4>Great Learning Academy</h4>
              <h5>Sep-2022</h5>
              <p><em>Data Structures in C</em></p>
              </div>
              <div class="resume-item">
              <h4>NASSCOM</h4>
              <h5>Dec-2022</h5>
              <p><em>Embracing Change</em></p>
              </div>
              <h3 class="resume-title">Achievements</h3>
            <div class="resume-item">
              <h4>Paper Publication</h4>
              <h5>Jan-2023</h5>
              <p><em>Automatic Railway Gate Controller Using IOT|IJRAR</em></p>
              <h5>Jun-2022</h5>
              <p><em>Embedded-BasedFloral Stiching Machine With Automatic Knotting |IJRAR</em></p>
              <h5>Jun-2022</h5>
              <p><em>Bi-Level Authentication For ATM Using IOT|IJSREM</em></p>
              </div>
              <div class="resume-item">
              <h4>Extra-Curricular Activities</h4>
              <h5>2021-2022</h5>
              <p><em>Idea Presentation|Yudhisthira|Rathinam Technical Campus|Second Prize</em></p>
              <h5>2022-2023</h5>
              <p><em>Technical Presentation|Rathinam Technical Campus|First Prize</em></p>
              </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Junior Web Developer</h4>
              <h5>Jul2023 - Present</h5>
              <ul>
                <li>Creating and maintaing dynamic responsive websites.</li>
                <li>Developing and maintaing backend logics for websites.</li>
              </ul>
            </div>
            <h3 class="resume-title">Projects</h3>
            <div class="resume-item">
              <h4>Real Estate Website</h4>
              <h5>2023-2024</h5>
              <ul>
                <li>This project created by using Laravel framework,Ajax functions.</li>
                <li>Map,Payment system is also integrated into this project.</li>
                <li>Roles and Permissions ,Authentication ,E-mail System are also included into this project.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Automated Medication Management System</h4>
              <h5>2022-2023</h5>
              <ul>
                <li>Automating a medical store can greatly improves accuracy and customer service.</li>
                <li>By automating inventory management,prescription handling,point of Sale transactions and other crucial aspects  it enhances efficiency ,minimizes errors and elevates customer service.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Automatic Railway Gate Controller using IOT</h4>
              <h5>2022-2023</h5>
              <ul>
                <li>The gate will be controlled automatically by an automatic railway gate controller.</li>
                <li>Accidents at railway level crossings will be avoided by using an automatic railway gate controler.</li>
               </ul>
            </div>
            <h3 class="resume-title">Internships</h3>
            <div class="resume-item">
            <h4>Deepam Clinical Research</h4>
              <h5>2021-2022</h5>
              <p><em>Learned about the Biomedical Instruments|15 Days</em></p>
            </div>
            <h3 class="resume-title">Field Of Interest</h3>
            <div class="resume-item">
            <p>Web Development</p>
            </div>
            <div class="resume-item">
            <p>Database Management</p>
            </div>
            <h3 class="resume-title">Languages</h3>
            <div class="resume-item">
            <p>Tamil</p>
            </div>
            <div class="resume-item">
            <p>English</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

           

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Ready to connect? Explore this section to find out how to reach me. Whether you have a question, want to discuss potential collaborations, or simply mail to me. Let's start a conversation and explore the possibilities together. Reach out today!</p>
          </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-10 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>3/114,Vallipuram,Namakkal,TamilNadu,India-637003</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>pavinsanthi6@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 6381281441</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.9456213480887!2d78.12871491467717!3d11.172076891835087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babe28b2e3bb9db%3A0x7daa8accecf1fd11!2sVallipuram%2C%20Tamil%20Nadu%20638014%2C%20India!5e0!3m2!1sen!2suk!4v1643547879885!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>

          </div>

          <!-- <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div> -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Pavin-Portfolio</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by Pavin</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="{{ url('/') }}" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/assets/js/main.js') }}"></script>

</body>

</html>