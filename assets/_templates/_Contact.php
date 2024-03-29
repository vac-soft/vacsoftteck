<section id="contact" class="contact py-5">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
        </div>

        <div class="row">

            <div class="col-lg-4">
                <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>VAC SOFTTECK LLP,<br>Flat No:K, 2nd Floor ,<br>Senthil Flats, <br>No.59, Burkit Rd,
                            <br>T. Nagar, Chennai-600017 <br>Near RR Dental Hospital.
                        </p>
                    </div>
                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <h4>For Sales:</h4>
                        <p>sales@vacsoftteck.com</p>
                        <h4>For Support:</h4>
                        <p>support@vacsoftteck.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p> <a href="tel:+914435109600">+91-4435109600</a></p>
                        <p> <a href="tel:+914443512000">+91-4443512000</a></p>
                        <p> <a href="tel:+919884862743">+91-9884862743</a></p>
                        <p> <a href="tel:+919840862743">+91-9840862743</a></p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="https://vex.vaccrm.com/VAC/api/vacweblead.php"   role="form" class="php-email-form" data-aos="fade-left" method="get">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="lastname" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="company" placeholder="Organization" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Number" required>
                        </div>
                    </div>
                    <!-- <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div> -->
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="description" rows="5" placeholder="Description" required></textarea>
			<input type="hidden" class="form-control" name="ref" id="ref" value="<?php echo $_SESSION['ref']; ?>">
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center" ><button value="Sumbit" type="submit">Send Message</buttont></div>
                </form>

            </div>

        </div>

    </div>
</section>
<?php/*
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            $lastname = $_GET['lastname'];
			$email = $_GET['email'];
			$company = $_GET['company'];
			$phone = $_GET['phone'];
			$description = $_GET['description'];
            file_get_contents("https://vex.vaccrm.com/VAC/api/vacweblead.php?lastname=$lastname&email=$email&company=$company&phone=$phone&description=$description");
            // echo "echo '<script type="text/javascript">';
            // echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
            // echo '</script>'"
        }
*/	?>

 <script>
        // JavaScript code to check the URL and show the 'contactSection' if necessary
        document.addEventListener("DOMContentLoaded", function() {
            // Get the current URL fragment identifier
            var currentFragment = window.location.hash;

            // Check if the fragment is '#contact'
            if (currentFragment === '#contact') {
                // Show the 'contactSection' div
                document.getElementById('sent-message').style.display = 'block';
            }
        });
    </script>

