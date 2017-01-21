<?php
$page_title = "MBoutique: Contact Page";
include_once("header.php");
?>
<section id="big-image">
    <img src="../../assets/images/contact-image.png" alt="Map to our location">
</section>
<section id="contact-columns">
    <div class="text-column">
        <p class="stressed">Visit us!</p>
        <p>Monday-Friday | 10am - 9pm</p>
        <p>Saturday | 10am - 8pm</p>
        <p>Sunday | 11am - 7pm</p>
        <p>Closed Thanksgiving Day, Christmas Day and Easter Day</p>
        <br>
        <p>1625 Post St.</p>
        <p>San Francisco, CA 94115</p>
        <br>
        <p><a id="rose_link" href="mailto:orders@mboutique.com">orders@mboutique.com</a></p>
        <br>
        <p>Send your questions, comments and flavor suggestions or place an order!</p>
    </div>
    <div class="text-column">
        <p class="stressed">Contact Form</p>
        <form action="http://danielpaschal.com/learningfuze/reflect.php" method="get">
            <input type="text" name="cust_name" placeholder="Name">
            <input type="text" name="cust_email" placeholder="Email">
            <input type="text" name="cust_phone" placeholder="Phone">
            <input type="text" name="subject" placeholder="Subject">
            <textarea rows="4" cols="40" name="message" placeholder="Message"></textarea>
            <button type="submit" value="Submit">SEND</button>
        </form>
    </div>
    <div class="picture-column">
        <img src="../../assets/images/macarons-image.png" alt="Picture of macarons">
    </div>
</section>
<?php
include("footer.php");
?>