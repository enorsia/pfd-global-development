<!-- Contact Section-->
<div id="contact_form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12 text-center">
                <div class="contact_title">
                    <h2>GET IN TOUCH</h2>
                    <span class="global_underline"><i class="fa-regular fa-snowflake"></i></span>
                    <p>
                        We’d love to hear from you! Whether you have a question, need
                        support, or want to provide feedback, our team is ready to
                        assist. Simply reach out, and we promise to respond quickly and
                        with the information you need. Our customer service team is
                        dedicated to making sure your experience with us is seamless and
                        satisfying.
                    </p>
                </div>
            </div>
            <div class="col-lg-8 col-md-10 col-12">
                <div class="contact_form">
                    <form class="row g-3" id="contactForm" method="post" action="{{route('contact')}}">
                        @csrf
                        <div class="col-md-4">
                          <input
                            type="text"
                            class="form-control"
                            id="name"
                            placeholder="Name"
                            name="name"
                          />
                          <div class="error-message" id="name-error"></div>
                        </div>
                        <div class="col-md-4">
                          <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="Email"
                            name="email"
                          />
                          <div class="error-message" id="email-error"></div>
                        </div>
                        <div class="col-md-4">
                          <input
                            type="tel"
                            class="form-control"
                            id="phone"
                            placeholder="Telephone"
                            name="phone"
                          />
                          <div class="error-message" id="telephone-error"></div>
                        </div>
                        <div class="col-12">
                          <textarea
                            class="form-control"
                            id="message"
                            rows="10"
                            cols="10"
                            placeholder="Write Your Message Here..."
                            name="message"
                          ></textarea>
                          <div class="error-message" id="message-error"></div>
                        </div>
                        <div class="col-12 text-center">
                          <button type="submit" class="">Send</button>
                        </div>
                      </form>
                      <div id="alert-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Section-->
