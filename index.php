<?php


$_Required = "";
$_Required2 = "";

if (isset($_POST['submit'])) {
   $_Search = $_POST['search-area'];

   if (empty($_Search)) {
       $_Required = "Text Area can't be empty!";  
   }

   else {
       $_Required = "Input either not certified or check below for certified restaurants!";
   }

};

if (isset($_POST['Contact-Submit'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    

    if (empty($Name) || empty($Email)) {
        $_Required2 = "All Text Area must be filled";
    }
    else{
        $_Required2 = "Message sent successfully!";
    }
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>O_Delivery</title>
</head>
<body>
    <!-- Header  -->
    <div class="Top-Section">
        <div class="header">
            <h2>ODelivery</h2>
        </div>
        <div class="header-heading">
            <h2>Welcome to ODelivery</h2>
            <p>We help deliver Foods to anywhere across the Country</p>
            <a href="#services" class="btn-1">GET STARTED</a>
        </div>
    </div>

    <!-- Services  -->
    <section class="services" id="services">
        <form action="index.php#services" method="POST">
            <div class="search-section">
                <input type="text" name="search-area" class="search-area" placeholder="Search Eatery or Restaurant">
                <label for="" class="label" ><?php echo $_Required ?></label>
                <input type="submit" value="Submit" class="btn-2" name="submit">
            </div>
        </form>
    </section>

    <!-- Available Eatery -->
    <section class="avaliable">
        <div class="avaliable-top">
            <h2>Available Restaurants</h2>
        </div>
        <div class="list">
            <div class="eatery">
                <a href=""><img src="assets/img/foo.png" alt="">
    </a>        </div>
            <div class="eatery">
<a href=""><img src="assets/img/ind111ex.png" alt=""></a>
            </div>
            <div class="eatery">
<a href=""><img src="assets/img/jj.png" alt="">
     </a>       </div>
            <div class="eatery">
<a href=""><img src="assets/img/pa.jpg" alt="">
     </a>       </div>
            
            <div class="eatery">
<a href=""><img src="assets/img/inde11x.png" alt="">
</a>            </div>
            <div class="eatery">
<a href=""><img src="assets/img/ind1ex.png" alt="">
 </a>           </div>
            <div class="eatery">
<a href=""><img src="assets/img/index3.jpg" alt="">
 </a>           </div>
            <div class="eatery">
<a href=""><img src="assets/img/indexz.jpg" alt="">
 </a>           </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section class="contact-section" id="contact-section">
        <div class="contact-top con">
            <h2>Contact Us</h2>
        </div>
        <div class="contact-wrapper">
            <div class="contact-social">
                <div class="details">
                    <img src="assets/img/svg/instagram-brands.svg" alt="">
                    <h3>Instagram</h3>
                    <p>@O_Delivery123</p>
                </div>
                <div class="details">
                    <img src="assets/img/svg/whatsapp-brands.svg" alt="">
                    <h3>Whatsapp</h3>
                    <p>+(123)-456-789</p>
                </div>
                <div class="details">
                    <img src="assets/img/svg/tag.svg" alt="">
                    <h3>Call</h3>
                    <p>+(123)-456-789</p>
                </div>
            </div>
            <div class="contact-menu">
                <form action="index.php#contact-section" method="POST">
                <input type="text" name="name" class="contact-input" placeholder="Name" required>
                <input type="Email" name="email" class="contact-input" placeholder="Email" required>
                <textarea name="" name="textarea" id="" placeholder="Your Message" cols="30" rows="10" class="contact-input" required></textarea>
                <label for="" class="label"><?php echo $_Required2 ?></label>
                <input type="submit" class="btn-2" value="Send Message" name="Contact-Submit">
                </form>
             </div>
        </div>
    </section>

    
    <footer>
        <p>Ib.codes &copy; 2020</p>
    </footer>



</body>
</html>