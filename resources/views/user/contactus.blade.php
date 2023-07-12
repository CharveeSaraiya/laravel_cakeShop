@extends('user.userheader2')
@section('content2')
<section class="breadcrumbs-custom">
        <div class="parallax-container breadcrumbs_section">
          <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
              <h1 class="breadcrumbs-custom-title">Contact Us</h1>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-footer">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">Elements</a></li>
              <li class="active">Contact Us</li>
            </ul>
          </div>
        </div>
      </section>
      @endsection
      @section('content')
      <!-- Get in touch-->
      <section class="section section-xl bg-default text-md-left">
        <div class="container">
          <div class="title-classic">
            <h3 class="title-classic-title">Get in touch</h3>
            <p class="title-classic-subtitle">We are available 24/7 by fax, e-mail or by phone. You can also use our <br class="d-none d-lg-block">quick contact form to ask a question about our products.</p>
          </div>
          <form  method="post" action="{{ route('userheader.store') }}">
        @csrf
          <div class="row row-20 row-md-30">
              <div class="col-lg-8">
                <div class="row row-20 row-md-30">
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-first-name-2" type="text" name="fname" data-constraints="@Required"/>
                      <label class="form-label" for="contact-first-name-2">First Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-last-name-2" type="text" name="lname" data-constraints="@Required"/>
                      <label class="form-label" for="contact-last-name-2">Last Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required"/>
                      <label class="form-label" for="contact-email-2">E-mail</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric"/>
                      <label class="form-label" for="contact-phone-2">Phone</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message-2">Message</label>
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
            </div>
            <button class="button button-sm button-primary button-zakaria" type="submit">Send Message</button>
          </form>
        </div>
      </section>
      <!-- Get in touch-->
      <section class="section section-xl bg-gray-4">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-6 col-md-4">
              <h4 class="font-weight-regular"> Phones</h4>
              <ul class="contacts-classic">
                <li>Office <a href="tel:#">+01-23-4226789</a>
                </li>
                <li>Fax <a href="tel:#">+01-23-4226789</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4">
              <h4 class="font-weight-regular"> Address</h4>
              <div class="contacts-classic"><a href="#">272B St#4, 1st Floor<br/>
                    DC Office, Washington USA</a></div>
            </div>
            <div class="col-sm-6 col-md-4">
              <h4 class="font-weight-regular"> E-mails</h4>
              <ul class="contacts-classic">
                <li><a href="mailTo:#"> hello@example.com</a></li>
                <li><a href="mailTo:#"> hello@example.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <!-- RD Google Map-->
        <div class="google-map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405688.61889475735!2d-122.32129492150699!3d37.40301850690098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb68ad0cfc739%3A0x7eb356b66bd4b50e!2sSilicon%20Valley%2C%20CA%2C%20USA!5e0!3m2!1sen!2s!4v1575373426305!5m2!1sen!2s" width="100%"></iframe>
        </div>
      </section>
      @endsection     