

@extends('layouts.layout_1')
@section('main-body')
<div class="hero-section">
    <div class="hero-left">
      <h1>Hi, I'm <strong style="color:rgb(84, 230, 186)">Rohit Patel</strong></h1>
      <p>PHP Laravel Developer | Full Stack Developer | Problem Solver</p>
      <div class="hero-buttons">
        <a href="#portfolio" class="btn .btn-grad ">Resume</a>
        <a href="#contact" class="btn .btn-grad">Contact Me</a>
      </div>
    </div>
  
    <div class="hero-right">
      <img src="https://assets6.lottiefiles.com/packages/lf20_kkflmtur.json" alt="Animated Developer" id="lottie-animation">
    </div>
  </div>


  <section class="intro-section">
    <div class="content">
      <div class="text-content">
        <h1 class="">LET ME <span class="highlight">INTRODUCE</span> MYSELF</h1>
        <p>Development is my passion, and I’m always learning, even if just a little. <i class='bx bxs-message-rounded bx-tada fs-1' style='color:#60f5a3' ></i></p>
        <p>
          I am a passionate <em class="purple">Backend Developer</em> fluent in PHP,
          with strong experience in <em class="purple">Laravel Framework</em>.
          I specialize in creating innovative web technologies and products,
          focusing on Backend Development. I use PHP and Laravel Framework
        </p>
        <p>
          Currently, I’m <em class="purple">expanding my skills in AWS, Azure, S3</em>,
          as I continue to explore cloud technologies and their applications in web development.
        </p>
        <p>
          I am always <em class="purple">eager to explore new technologies</em> and tackle challenges,
          combining my passion for development with a forward-thinking approach to deliver high-quality web solutions.
        </p>
      </div>
      <div class="avatar">
        <img src="images/Aviator.webp" alt="Avatar" />
      </div>
    </div>
  </section>




  {{-- <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center bg-dark"> --}}

  <section class="contact-section m-auto row  w-100 " >
    
    <!-- Contact Form Section -->
    <div class=" col-md-8  text-white mb-3">
      <h2 class="fw-bold mb-4">Send us a message</h2>
      <form action="contactUs">
        <div class="row p-0 mb-3">
          <div class="col-md-6 ">
            <label class="form-label">Name<span class="text-danger">*</span></label>
            <input type="text" class="form-control bg-dark text-white border-0" placeholder="Enter your name">
          </div>
          <div class="col-md-6">
            <label class="form-label">Email<span class="text-danger">*</span></label>
            <input type="email" class="form-control bg-dark text-white border-0" placeholder="Enter your email">
          </div>
        </div>

        <div class="row p-0 mb-3">
          <div class="col-md-6">
            <label class="form-label">Phone Number<span class="text-danger">*</span></label>
            <input type="text" class="form-control bg-dark text-white border-0" placeholder="Enter your Phone Number">
          </div>
          <div class="col-md-6">
            <label class="form-label">Subject<span class="text-danger">*</span></label>
            <input type="text" class="form-control bg-dark text-white border-0" placeholder="Enter your Subject">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Message<span class="text-danger">*</span></label>
          <textarea class="form-control bg-dark text-white border-0" rows="3" placeholder="Enter your message"></textarea>
        </div>

        <div class="mb-3">
          <div class="g-recaptcha" data-sitekey="your-site-key"></div>
        </div>

        <button type="submit" class="btn btn-dark px-4 py-2 _btn">
          Submit <i class='bx bxs-send bx-rotate-90 bx-fade-right'  ></i>
        </button>
      </form>
    </div>

    <!-- Contact Info Section -->
    <div class="contact-info-section col-md-4 text-white p-3 d-flex flex-column align-items-center justify-content-around">
      <div class="text-center" >
        <h4 class="fw-bold mb-4">FIND ME ON</h4>
        <p >Feel free to <span class="highlight">connect</span> with me</p>
        <p><i class='bx bx-envelope bx-burst fs-1' style='color:#60f592' ></i></p>
        <p class="fw-bold sel">rohitkumarpatel38401@gmail.com</p>
      </div>
      <div class="d-flex gap-3 fs-5">
        <a href="https://github.com/Rohitkumarpatel38401"  class="icon github text-light">
            <i class='bx bxl-github' ></i>
        </a>
        <a href="https://wa.me/7991686009" target="_blank" class="icon whatsapp text-success">
            <i class='bx bxl-whatsapp ' ></i>
        </a>
        <a href="https://www.linkedin.com/in/rohit-kumar-patel-079b0024b/" target="_blank" class="icon linkedin">
        <i class='bx bxl-linkedin ' ></i>
        </a>
      </div>
    </div>
  </section>
@endsection
