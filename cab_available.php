
    <!--/.popupsearch-box-->
    <div id="searchbox-overlay"></div>

    <div id="popup-sidebox" class="popup-sidebox">
        <div class="sidebox-content">
            <div class="site-logo">
                <a href="index-2.html"><img src="assets/img/logo-light.png" alt="logo" /></a>
            </div>
            <p>Everything your taxi business needs is already here! Ridek, a theme
                made for taxi service companies.</p>
            <ul class="sidebox-list">
                <li class="call"><span>Call for ride:</span>5267-214-392</li>
                <li>
                    <span>You can find us at:</span>Halk Street New York, USA - 2386
                </li>
                <li><span>Email now:</span>Info.ridek@mail.com</li>
            </ul>
        </div>
    </div>
    <!--/.popup-sidebox-->
    <div id="sidebox-overlay"></div>

    <section class="page-header">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h4>Book a Ride!</h4>
                <h2>Feel your journey <br> with <span>Ridek!</span></h2>
                <p>Everything your taxi business <br>needs is already here! </p>
            </div>
        </div>
    </section>
    <!--/.page-header-->

    <section class="taxi-details bd-bottom padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="taxi-details-img">
                        <img src="assets/img/car-2.png" alt="taxi">
                        <div class="price"><i class="las la-tachometer-alt"></i>$0.85/km</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h4><span></span>Introducing</h4>
                        <h2>Mercedes-Maybach Haute Voiture - 2024</h2>
                        <p>We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies. Our portfolio includes dozens of successfully completed projects of houses of different storeys, with high–quality finishes and good repairs. Book your taxi from anywhare today!</p>
                    </div>
                    <ul class="taxi-features">
                        <li><span><i class="las la-taxi"></i>Car ID:</span> 7762</li>
                        <li><span><i class="las la-compass"></i>Transmission:</span> Auto</li>
                        <li><span><i class="las la-route"></i>Mileage:</span> 170K</li>
                        <li><span><i class="las la-tools"></i>Engine:</span> 6.5L LP petrol</li>
                        <li><span><i class="las la-sync"></i>Air Condition:</span> Yes</li>
                        <li><span><i class="las la-briefcase"></i>Luggage Carry:</span> 4</li>
                    </ul>
              
                </div>
            </div>
        </div>
    </section>
    <!--/.taxi-details-->


<section class="related-taxi bg-grey min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h4><span></span>Our More Taxis</h4>
            <h2>Related Taxis To Ride</h2>
            <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly master new technologies.</p>
        </div>
<!-- Cab List Section -->
<!-- Cab List Section -->
<div class="d-flex justify-content-center">
    <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-lg-3" id="cab_list">
        <?php 
        $cabs = $conn->query("SELECT c.*, cc.name as category FROM `cab_list` c 
                              INNER JOIN category_list cc ON c.category_id = cc.id 
                              WHERE c.delete_flag = 0 
                              AND c.id NOT IN (SELECT cab_id FROM `booking_list` 
                                               WHERE `status` IN (0,1,2)) 
                              ORDER BY c.`reg_code`");
        while ($row = $cabs->fetch_assoc()):
        ?>
        <div class="col mb-4 d-flex justify-content-center">
            <div class="pricing-item book_cab shadow-sm" 
                 data-id="<?php echo $row['id'] ?>" 
                 data-bodyno="<?php echo $row['body_no'] ?>">
                <div class="pricing-head-wrap">
                    <div class="pricing-car">
                        <img src="assets/img/pricing-car.png" alt="car" class="img-fluid">
                        <div class="price"><?php echo $row['body_no'] ?></div>
                    </div>
                </div>
                <div class="pricing-head">
                    <h3><?php echo $row['body_no'] ?></h3>
                    <span class="location"><?php echo $row['category'] ?></span>
                </div>
                <ul class="pricing-list">
                    <li>Model: <span><?php echo $row['cab_model'] ?></span></li>
                    <li>Cab Reg No: <span><?php echo $row['cab_reg_no'] ?></span></li>
                    <li>Driver's Name: <span><?php echo $row['cab_driver'] ?></span></li>
                    <li><a href="javascript:void(0)" class="default-btn book-now">Book Taxi Now</a></li>
                </ul>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>

       <!-- No Result Section -->
        <div id="noResult" style="display:none" class="text-center my-5">
            <b>No Results Found</b>
        </div>
    </div>
</section>


<!-- Custom CSS -->
<style>
    .hover-zoom {
        transition: transform 0.3s ease;
    }
    .hover-zoom:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }
    .input-group .form-control:focus {
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }
    #noResult {
        font-size: 1.5rem;
        font-weight: 500;
        color: #6c757d;
    }
</style>

<!-- Updated JavaScript -->
<script>
    $(function() {
        $('#search').on('input', function() {
            var _search = $(this).val().toLowerCase().trim();
            $('#cab_list .item').each(function() {
                var _text = $(this).text().toLowerCase().trim();
                _text = _text.replace(/\s+/g, ' ');
                if (_text.includes(_search)) {
                    $(this).fadeIn();
                } else {
                    $(this).fadeOut();
                }
            });
            if ($('#cab_list .item:visible').length > 0) {
                $('#noResult').fadeOut();
            } else {
                $('#noResult').fadeIn();
            }
        });

        $('#cab_list .item').hover(function() {
            $(this).find('.callout').addClass('shadow-lg');
        }, function() {
            $(this).find('.callout').removeClass('shadow-lg');
        });

        $('#cab_list .book_cab').click(function() {
            if ("<?= $_settings->userdata('id') && $_settings->userdata('login_type') == 2 ?>" == 1) {
                uni_modal("Book Cab - " + $(this).attr('data-bodyno'), "booking.php?cid=" + $(this).attr('data-id'), 'mid-large');
            } else {
                location.href = './login.php';
            }
        });

        $('#send_request').click(function() {
            if ("<?= $_settings->userdata('id') > 0 && $_settings->userdata('login_type') == 2 ?>" == 1) {
                uni_modal("Fill the cab Request Form", "send_request.php", 'mid-large');
            } else {
                alert_toast(" Please Login First.", "warning");
            }
        });
    });

    $(document).scroll(function() {
        $('#topNavBar').removeClass('bg-transparent navbar-dark bg-primary');
        if ($(window).scrollTop() === 0) {
            $('#topNavBar').addClass('navbar-dark bg-transparent');
        } else {
            $('#topNavBar').addClass('navbar-dark bg-primary');
        }
    });
    
    $(document).trigger('scroll');

    // Search Functionality
    document.getElementById('search').addEventListener('input', function() {
        const query = this.value.toLowerCase();
        const items = document.querySelectorAll('#cab_list .swiper-slide');

        let hasResult = false;
        items.forEach(item => {
            const bodyNo = item.querySelector('h3').textContent.toLowerCase();
            if (bodyNo.includes(query)) {
                item.style.display = 'block';
                hasResult = true;
            } else {
                item.style.display = 'none';
            }
        });

        document.getElementById('noResult').style.display = hasResult ? 'none' : 'block';
    });
</script>
