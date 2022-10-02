
<?php
    include 'header.php';
?>
<section class="breadcrumb bg-white">
    <div class="container p-1 p-sm-3">
        <div class="row">
            <div class="col-12">
                <h2 class="text-muted">Contact us</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.aspx">Home</a></li>
                    <li class="breadcrumb-item active"><a href="#">Contact us</a></li>

                </ol>
            </div>

        </div>

    </div>
</section>

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="section-title">Your Message</h3>
            <div style="font-weight:bold; color:red;">
            </div>
            <p>
                End us an Email throught this form....You can gives us suggestion for improvment in any department or you can complain about anything disturbing...Your message will be checked by the admistration and will be highly apperciated
            </p>

            <form method="POST" action="contact.php" name="ContactUs" class="form-light mt-20" role="form">
                <div class="form-group">
                    <label>Name</label>
                    <input name="con_name" type="text" class="form-control" placeholder="Your name" required />
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input name="con_email" type="email" class="form-control" placeholder="Email address" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input name="con_phone" type="number" class="form-control" placeholder="Phone number" required />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input name="con_subject" type="text" class="form-control" placeholder="Subject" required />
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="con_message" class="form-control" id="message" placeholder="Write you message here..." style="height:100px;" required></textarea>
                </div>
                <button name="sendmessage" type="submit" class="btn btn-two">Send message</button>
                <p><br /></p>
            </form>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="section-title">Office Address</h3>
                    <div class="contact-info">
                        <h5>Address</h5>
                        <p>Deatils of campus</p>

                        <h5>Email</h5>
                        <p>ors.com.pk</p>

                        <h5>Phone</h5>
                        <p>+923145860118</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="section-title">Timings</h3>
                    <div class="contact-info">
                        <h5>Monday - Friday</h5>
                        <p>09:00 AM - 2:00 PM</p>

                        <h5>Saturday</h5>
                        <p>Closed</p>

                        <h5>Sunday</h5>
                        <p>Closed</p>
                    </div>
                </div>
            </div>
            <h3 class="section-title">Get connected</h3>
            <p>
                Get Connect to us .We can built future of pakistan
            </p>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>
