
  <div id="sidebox-overlay"></div>

    <div class="map-wrapper pt-90">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8826.923787362664!2d-118.27754354757262!3d34.03471770929568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20California%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1566525118697!5m2!1svi!2s" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div><!-- /#google-map -->

    <section class="contact-section bd-bottom padding">
    <div class="map" style="background: url('assets/img/map-placeholder.png') no-repeat center; background-size: cover; height: 300px;"></div>

    <div class="container mt-5">
        <div class="row">
            <!-- Contact Details -->
            <div class="col-md-6">
                <div class="contact-details-wrap shadow-lg p-4 rounded">
                    <div class="contact-title mb-4">
                        <h2>Have Any <span>Questions?</span></h2>
                        <p>Get in touch to discuss your needs. Call, email, or fill out the contact form below.</p>
                    </div>
                    <ul class="contact-details list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2"></i> 962 Fifth Avenue, New York, NY10022</li>
                        <li><i class="fas fa-envelope me-2"></i> hello@themeaster.net <br> Yourmail@gmail.com</li>
                        <li><i class="fas fa-phone me-2"></i> (+123) 456 789 101 <br> +1-302-123-4567</li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-6">
                <div class="contact-form shadow-lg p-4 rounded bg-white">
                    <form action="https://html.dynamiclayers.net/dl/ridek/contact.php" method="post" id="ajax_contact" class="form-horizontal">
                        <div class="contact-title mb-4">
                            <h2>Contact With Us! <span></span></h2>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" id="firstname" name="firstname" class="form-control rounded-1" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" id="lastname" name="lastname" class="form-control rounded-1" placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="email" id="email" name="email" class="form-control rounded-1" placeholder="Email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" id="phone" name="phone" class="form-control rounded-1" placeholder="Phone Number" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <textarea id="message" name="message" class="form-control rounded-1" rows="4" placeholder="Your Message..." required></textarea>
                        </div>

                        <div class="text-end">
                            <button id="submit" class="btn btn-primary px-4 py-2 rounded-pill" type="submit">Send Message</button>
                        </div>

                        <div id="form-messages" class="alert mt-3" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--/.contact-section-->

    <section class="branches-section bg-grey padding">
        <div class="container">
            <div class="row branches-lists">
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="branches-list">
                        <h3>Sydney (Head Office)</h3>
                        <ul>
                            <li>1 Epping Road</li>
                            <li>North Ryde, NSW 2113</li>
                            <li><a href="#">+61 2 9870 7689</a></li>
                            <li><a href="#">email@example.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="branches-list">
                        <h3>Brisbane</h3>
                        <ul>
                            <li>1 Epping Road</li>
                            <li>North Ryde, NSW 2113</li>
                            <li><a href="#">+61 2 9870 7689</a></li>
                            <li><a href="#">email@example.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="branches-list">
                        <h3>Hobart</h3>
                        <ul>
                            <li>1 Epping Road</li>
                            <li>North Ryde, NSW 2113</li>
                            <li><a href="#">+61 2 9870 7689</a></li>
                            <li><a href="#">email@example.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="branches-list">
                        <h3>Melbourne</h3>
                        <ul>
                            <li>1 Epping Road</li>
                            <li>North Ryde, NSW 2113</li>
                            <li><a href="#">+61 2 9870 7689</a></li>
                            <li><a href="#">email@example.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.branches-section-->

<script>
    function validate(val) {
    v1 = document.getElementById("fname");
    v2 = document.getElementById("lname");
    v3 = document.getElementById("email");
    v4 = document.getElementById("mob");
    v5 = document.getElementById("job");
    v6 = document.getElementById("ans");

    flag1 = true;
    flag2 = true;
    flag3 = true;
    flag4 = true;
    flag5 = true;
    flag6 = true;

    if(val>=1 || val==0) {
        if(v1.value == "") {
            v1.style.borderColor = "red";
            flag1 = false;
        }
        else {
            v1.style.borderColor = "green";
            flag1 = true;
        }
    }

    if(val>=2 || val==0) {
        if(v2.value == "") {
            v2.style.borderColor = "red";
            flag2 = false;
        }
        else {
            v2.style.borderColor = "green";
            flag2 = true;
        }
    }
    if(val>=3 || val==0) {
        if(v3.value == "") {
            v3.style.borderColor = "red";
            flag3 = false;
        }
        else {
            v3.style.borderColor = "green";
            flag3 = true;
        }
    }
    if(val>=4 || val==0) {
        if(v4.value == "") {
            v4.style.borderColor = "red";
            flag4 = false;
        }
        else {
            v4.style.borderColor = "green";
            flag4 = true;
        }
    }
    if(val>=5 || val==0) {
        if(v5.value == "") {
            v5.style.borderColor = "red";
            flag5 = false;
        }
        else {
            v5.style.borderColor = "green";
            flag5 = true;
        }
    }
    if(val>=6 || val==0) {
        if(v6.value == "") {
            v6.style.borderColor = "red";
            flag6 = false;
        }
        else {
            v6.style.borderColor = "green";
            flag6 = true;
        }
    }

    flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

    return flag;
}
</script>