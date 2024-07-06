<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- bootstrap -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!--  -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <!-- font2 -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="{{url('/public/style.css')}}" /> -->
    <link rel="stylesheet" href="{{url('/public/stylebootstrap.css')}}" />
    <link rel="shortcut icon" href="{{url('/public/fav-icon.png')}}" type="image/x-icon" />
    <title>Businesscertificateservices</title>
  </head>
  <body>
    <!-- header -->
  @include('sections.header')
  <!-- section 2 -->
  <div class="container-fluid bg-dark-blue text-light p-5">
      <div class="row align-items-center">
        <div class="col-md-6 d-flex flex-column align-items-start gap-15">
          <h1 class="display-4 playfair-display-font">Florida Business Services</h1>
          <p class="lead">
            Simplifying Success, One Form at a Time. Offering Business Services
            and Support since 2022
          </p>
          <a href="#" class="btn btn-primary btn-lg mb-3"
            >Click to get your Certificate of Status here &rarr;</a
          >
        </div>
        <div class="col-md-6">
          <img
            src="https://www.businesscertificateservices.com/images/woman_at_desk.jpg"
            class="img-fluid sec2-img"
            alt="Business Image"
          />
        </div>
      </div>
    </div>
    <!-- section 3 -->
    <section class="certificate-section">
      <div class="container">
        <h1 class='playfair-display-font'>
          Secure your business's reputation and credibility with our hassle-free
          <span class="highlight">Certificate of Status</span> service.
        </h1>
        <p>
          Take the next step towards success and ensure your legal standing with
          confidence today! Accelerate your business with our streamlined
          Employer Identification Number (EIN) service. Obtain your official
          Employer Identification Number (EIN) effortlessly. Get started now and
          pave the way for financial growth and compliance!
        </p>
      </div>
    </section>
    <!-- cards 1 -->
    <div class="bg-dark-blue">
      <div class="container text-white py-5">
        <h2 class="h1 text-center playfair-display-font">
          Top Reasons why you should use our services:
        </h2>
      </div>
    </div>
    <!-- cards -->

    <div class="bg-dark-blue">
      <div class="card-group container text-white py-5">
        <!-- Card 1 -->
        <div class="card bg-dark-blue">
          <img
            class="card-img-top"
            src="https://www.businesscertificateservices.com/images/features-home-3-01.jpg"
            alt="Card image 1"
          />
          <div class="card-body">
            <h5 class="card-title playfair-display-font">Time-saving</h5>
            <p class="card-text">
              Streamlines the EIN registration and Certificate of Status
              process. Allows you to quickly and efficiently obtain a Employer
              Identification Number without navigating complex IRS procedures.
            </p>
            <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
          </div>
        </div>

        <!-- Card 2 -->
        <div class="card bg-dark-blue">
          <img
            class="card-img-top"
            src="https://www.businesscertificateservices.com/images/features-home-3-02.jpg"
            alt="Card image 2"
          />
          <div class="card-body">
            <h5 class="card-title playfair-display-font">Convenience</h5>
            <p class="card-text">
              Easy process. This makes it accessible even to those who are not
              familiar with business registration procedures, reducing confusion
              and time spent on research
            </p>
            <!-- <a href="#" class="btn btn-primary">Explore</a> -->
          </div>
        </div>

        <!-- Card 3 -->
        <div class="card bg-dark-blue">
          <img
            class="card-img-top"
            src="https://www.businesscertificateservices.com/images/features-home-3-03.jpg"
            alt="Card image 3"
          />
          <div class="card-body">
            <h5 class="card-title playfair-display-font">Expert Support and Guidance</h5>
            <p class="card-text">
              This can be invaluable for new business owners or those unfamiliar
              with the specifics of business documentation, ensuring accuracy
              and compliance with legal requirements.
            </p>
            <!-- <a href="#" class="btn btn-primary">Get Started</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- sec 4 part1 -->
    <div class="">
      <div class="container text-white py-5">
        <h2 class="h1 text-center text-dark playfair-display-font">
          Simplifying Success, One Form at a Time
        </h2>
      </div>
    </div>
    <!-- sec-4-part2 -->
    <div class="container-fluid text-dark p-5">
      <div class="row">
        <div class="col-md-6">
          <img
            src="https://www.businesscertificateservices.com/images/features-home-02.png"
            class="img-fluid sec4-img"
            alt="Business Image"
          />
        </div>
        <div class="col-md-6">
          <h2 class="display-5 playfair-display-font">Built for New Florida Businesses</h2>
          <p class="lead">
            Streamlines the bureaucratic hurdles for Florida businesses,
            offering a hassle-free, efficient platform for obtaining crucial
            documents like EINs and certificates of status.
          </p>
          <!-- new -->
          <div class="main-cards-4">
            <div class="header-part-4-cards">
              <div class="cards-svg-flex">
                <svg
                  class="w-4 h-4 fill-current text-blue-600 shrink-0 mt-1 mr-4 svg-sec-4-a"
                  viewBox="0 0 16 16"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.4 6.6c.8.8.8 2 0 2.8-.8.8-2 .8-2.8 0-.8-.8-5-7.8-5-7.8s7 4.2 7.8 5Z"
                  ></path>
                  <path
                    d="M8 16c-4.4 0-8-3.6-8-8 0-.6.4-1 1-1s1 .4 1 1c0 3.3 2.7 6 6 6s6-2.7 6-6-2.7-6-6-6c-.6 0-1-.4-1-1s.4-1 1-1c4.4 0 8 3.6 8 8s-3.6 8-8 8Z"
                  ></path>
                </svg>
                <div class="svg-sec-4-b">
                  <h3>Centralized Services</h3>

                  <p>
                    Offers a one-stop-shop for various business needs, including
                    EIN registration and obtaining certificates of status. This
                    eliminates the need to navigate to multiple websites or
                    government agencies.
                  </p>
                </div>
              </div>
            </div>
            <div class="header-part-4-cards">
              <div class="cards-svg-flex">
                <svg
                  class="w-4 h-4 fill-current text-blue-600 shrink-0 mt-1 mr-4 svg-sec-4-a"
                  viewBox="0 0 16 16"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M4.019 15.276.034 1.329A1.058 1.058 0 0 1 1.33.034L15.276 4.02c.896.299.996 1.494.1 1.893L8.8 8.8l-2.79 6.574c-.498.897-1.693.797-1.992-.1ZM2.525 2.525l2.69 9.463 1.892-4.383c.1-.199.299-.398.498-.498l4.383-1.893-9.463-2.69Z"
                  ></path>
                </svg>
                <div class="svg-sec-4-b">
                  <h3>User-Friendly Interface</h3>

                  <p>
                    The platform is designed for ease of use, with clear
                    instructions and a straightforward process. This makes it
                    accessible even to those who are not familiar with business
                    registration procedures.
                  </p>
                </div>
              </div>
            </div>
            <div class="header-part-4-cards">
              <div class="cards-svg-flex">
                <svg
                  class="w-4 h-4 fill-current text-blue-600 shrink-0 mt-1 mr-4 svg-sec-4-a"
                  viewBox="0 0 16 16"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M15.686 5.71 10.291.3c-.4-.4-.999-.4-1.399 0a.97.97 0 0 0 0 1.403l.6.6L2.698 6.01l-1-1.002c-.4-.4-.999-.4-1.398 0a.97.97 0 0 0 0 1.403l1.498 1.502 2.398 2.404L.6 14.023 2 15.425l3.696-3.706 3.997 4.007c.5.5 1.199.2 1.398 0a.97.97 0 0 0 0-1.402l-.999-1.002 3.697-6.711.6.6c.599.602 1.199.201 1.398 0 .3-.4.3-1.1-.1-1.502Zm-7.193 6.11L4.196 7.511l6.695-3.706 1.298 1.302-3.696 6.711Z"
                  ></path>
                </svg>
                <div class="svg-sec-4-b">
                  <h3>Expert Support and Guidance</h3>

                  <p>
                    Provides expert support and guidance throughout the process.
                    This is invaluable for new business owners or those
                    unfamiliar with the specifics of business documentation.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- sec 5 -->
    <div class="sec-5 bg-dark-blue">
      <div
        class="container text-white py-5 d-flex flex-column align-content-center"
      >
        <h2 class='playfair-display-font'>
          Say goodbye to being on the phone for hours on hold with the IRS.
        </h2>
        <p>
          When there is an issue with your EIN (Employer Identification Number)
          application, let us take care of the complications for you. We have
          handled hundreds of applications for our customers' new businesses.
        </p>
        <a href="#" class="btn btn-primary">Start Your EIN Application Now →</a>
      </div>
    </div>
   <!-- footer  -->
@include('sections.footer')

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
