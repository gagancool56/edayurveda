<div class="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p class="text-center fs-5">Please get in touch and our expert support team will answer all your questions.</p>
            </div>
        </div>

        <div>
            <!-- <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
        </div>

        <div class="container">
            <div class="row mt-5">
                <p>Customer Service Hours (Pacific Time):<br>
                    Monday &ndash; Friday 8:00am to 5:00pm<br>
                    (Times displayed in Pacific Standard Time)</p>

                <p>ED-Ayurveda Physician Service Hours and Response Times:<br>
                    ED-Ayurveda Physicians monitor email and phone requests regularly during customer service hours and generally respond to customers within a few hours. A response to an specific email or phone request made directly to a Physician during a weekend could take as long as 24 hours. NOTE: This will not affect the general review or processing of your order.</p>

                <p>If you require more urgent assistance please contact your local Physician or hospital. If you do contact a local Physician or hospital regarding an adverse reaction to a medication received from ED-Ayurveda please also inform your ED-Ayurveda Physician.</p>
                <div class="col-sm-6">
                    <p><b>Live Chat:</b><br>
                        Livechat BOT<br>
                        Click Here to Chat with a Representative<br>
                        Monday &ndash; Friday 8:00am to 5:00pm<br>
                        (Times displayed in Pacific Standard Time)</p>
                </div>
                <div class="col-sm-6">
                    <p><b>Email:</b><br>
                        Customer Support: <a href="mailto:service@ed-ayurveda.com">service@ed-ayurveda.com</a><br>
                        Affiliate Support: <a href="mailto:support@ed-ayurveda.com">support@ed-ayurveda.com</a><br>
                        Complaint Dept: <a href="mailto:complaints@ed-ayurveda.com">complaints@ed-ayurveda.com</a><br>
                        Report an Adverse Drug Reaction: <a href="mailto:adverse@ed-ayurveda.com">adverse@ed-ayurveda.com</a></p>
                </div>

                <p><b>File a Complaint</b><br>
                    DOPL: <a href="www.dopl.utah.gov"> Click Here - www.dopl.utah.gov</a></p>

                <p>Iowa medical board: <a href="https://medicalboard.iowa.gov/consumers/filing-complaint">Click Here - Filing a Complaint | Iowa Board of Medicine</a><br>
                    Kentucky medical board: <a href="https://kbml.ky.gov/grievances/Pages/default.aspx"> Click Here - Microsoft (ky.gov)</a><br>
                    Maine medical board: <a href="https://www.maine.gov/md/discipline/file-complaint.html"> Click Here - Maine Board of Licensure in Medicine</a><br>
                    Maryland medical board: <a href="https://www.mbp.state.md.us/resource_information/res_con/resource_consumer_complaints.aspx"> Click Here - Consumer Resources | Submitting a Complaint (state.md.us)</a><br>
                    Rhode Island medical board: <a href="https://health.ri.gov/complaints/"> Click Here - Licensee Complaints: Department of Health (ri.gov)</a><br>
                    Texas medical board: <a href="https://www.tmb.state.tx.us/page/place-a-complaint"> Click Here - Texas Medical Board (state.tx.us)</a><br>
                    Vermont medical board: <a href="https://www.healthvermont.gov/health-professionals-systems/board-medical-practice/file-complaint"> Click Here - File a Complaint | Vermont Department of Health (healthvermont.gov)</a><br>
                </p>

            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p><?= business_info('address') ?></p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p><?= business_info('email') ?></p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p><?= business_info('phone') ?></p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="" method="post" role="form" id="contact-us" class="appointment-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit" id="contact-submit-btn">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
</div>