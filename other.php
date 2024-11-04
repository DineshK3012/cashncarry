<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Other</title>
    <link rel="icon" href="img/6.png" type="image/icon type">

    <!-- Css Files -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="responsive.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="other.css?v=<?php echo time(); ?>">

    <!-- owl Carousel Css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
</head>

<body class="bgColor">
    <!------------------------------ Navigation Bar ------------------------------>
    <nav class="nav-bar">
        <div class="logo">
            <a href="index.php"><img src="img/4.png" alt="LOGO_Cash'N'Carry"></a>
        </div>

        <div class="list">
            <ul>
                <li class="list-item"><a href="index.php">Home</a></li>
                <li class="list-item" onclick="rnrFunc()"><a href="other.php?other=rnr">Terms</a></li>
                <li class="list-item"><a href="other.php?other=about">About</a></li>
                <li class="list-item" onclick="contactFunc()"><a href="other.php?other=contact">Contact Us</a></li>
            </ul>
        </div>
        <i class="fas fa-bars menu-btn" onclick="showMM()"></i>
    </nav>

    <!---------------------- menu bar for small screens ---------------------->
    <div class="listC">
        <ul>
            <li class="list-item"><a href="index.php">Home</a></li>
            <li class="list-item" onclick="rnrFunc()"><a href="other.php?other=rnr">Terms</a></li>
            <li class="list-item"><a href="other.php?other=about">About</a></li>
            <li class="list-item" onclick="contactFunc()"><a href="other.php?other=contact">Contact Us</a></li>
        </ul>
    </div>

    <!-- content of this page -->
    <?php
        if (isset($_GET['other']) && $_GET['other'] == 'contact'){
            echo '<!---------------------------- Contact section ---------------------------->
            <div class="container">
                <div class="content ">
                    <div class="image-box">
                        <img src="img/contact.png" alt="Contact-Image">
                    </div>
                    <form class="contactform">
                        <div class="topic">Send us a message</div>
                        <div class="input-box">
                            <input type="text" name="name" required>
                            <label>Enter your name</label>
                        </div>
                        <div class="input-box">
                            <input type="email" name="email" required>
                            <label>Enter your email</label>
                        </div>
                        <div class="message-box">
                            <textarea type="text" name="message" required></textarea>
                            <label>Enter your message</label>
                        </div>
                        <div class="input-box">
                            <input type="button" value="Send Message" id="sendmsg">
                        </div>
                    </form>
                </div>
            </div>
        
            <!------------------------ Locate us Section ------------------------>
            <div class="container mp-box">
                <div class="content map-cont">
                    <div class="address">
                        <div class="topic">Locate us!</div>
                        <div>
                            <h3>Address: </h3>
                            <p>
                                Sector 24<br>
                                Karol bhag, New Delhi
                            </p>
                            <h3>Contact us at </h3>
                            <p> <i class="fas fa-phone-alt"></i> 011-98375388<br>
                                <i class="fas fa-envelope"></i> cncarry@cninfo.com
                            </p>
                        </div>
                    </div>
                    <div class="map-div">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448183.7391372154!2d76.8130653580598!3d28.646677244206412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1633689321065!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>';
        }
        else if(isset($_GET['other']) && $_GET['other'] == 'rnr')
        {
            echo ' <!---------------------- Returns & refund sections ---------------------->
            <section class="rnr-container" id="rnr">
                <div class="rnr">
                    <h1 class="title">Returns and Refunds</h1>
                    <div class="qna">
                        <div class="que">
                            What are the terms of the exchange policy?
                        </div>
                        <p class="ans">You can apply for an exchange for your order within 30 days after an order has been
                            delivered. We have a reverse pick up facility for most pin codes. If you wish to exchange products
                            from a
                            <i>combo pack</i>, the whole pack will have to be sent back to us. Partial returns aren’t accepted.
                            If there is a manufacturing issue, or if you have any other query regarding this, you can email us
                            on
                            <b>connect@cashncarry.com</b>. Gift wrapping charges are non-refundable and we will not be able to
                            gift wrap any exchanges requested.
                        </p>
                    </div>
        
                    <div class="qna">
                        <div class="que">
                            What are the terms of the Return Policy?
                        </div>
                        <p class="ans">
                        <ul>
                            <li  class="ans">Customers can return their order within 30 days after an order has been delivered. We have a
                                reverse pick up facility for most pin codes. For pin codes that are non- serviceable by our
                                courier partners against the reverse pick
                                up policy, you will have to self ship the product(s).</li>
        
                            <br>
                            <li class="ans">In the interest of hygiene, we may refuse returns where it\'s obvious that the item has been
                                soiled. Defective products need not be sent back to us, unless confirmed by the Customer
                                Experience Team. If you have received a defective
                                product, send us images at <b>connect@cashncarry.com</b> and we will get back to you. Once
                                confirmed by the Customer Experience Team the refund will be provided into your bank account.
                            </li>
        
                            <br>
                            <li class="ans">If you have to return anything from a <i>combo pack</i>, the whole pack will have to be
                                returned. There will not be any partial returns accepted. If there is a manufacturing issue, or
                                if you have any other query regarding this,
                                you can contact us on the number or email us on <b>connect@cashncarry.com</b>. Gift
                                cards/vouchers are non-refundable.</li>
        
                            <br>
                            <li class="ans">Gift wrapping charges will not be refunded if goods are returned. Also, we will not be able to
                                gift wrap any replacements you have asked for.</li>
                        </ul>
                        </p>
                    </div>
        
                    <div class="qna">
                        <div class="que">
                            How long will it take for my order to be delivered?
                        </div>
                        <p class="ans">Orders in India, once shipped, are typically delivered in 1-4 business days in metros,
                            and 4-7 business days for the rest of India. Delivery time may vary depending upon the shipping
                            address and other factors (public holidays, extreme
                            weather conditions, etc.).
                        </p>
                    </div>
        
                    <div class="qna">
                        <div class="que">
                            How do I check the status of my order?
                        </div>
                        <p class="ans">
                        <ol>
                            <li class="ans">To find out when your order is arriving, you need to first log in to your account. Click on the
                                Menu bar on your left hand side of the screen.</li>
        
                            <br>
                            <li class="ans">Click on My Orders to see the status of your current order (as well as your order history). You
                                can also simply click on the product from the Order ID to check your order status.</li>
                            <br>
                            <li class="ans">After your order has been successfully placed, you will immediately receive a confirmation and
                                order details via email and SMS. Once your products have been shipped, you will be notified
                                again via email, SMS and Whatsapp.</li>
                            <br>
                            <li class="ans">In case there is any unusual event or complication that leads to a delay in shipping your order,
                                you will immediately receive an update from our end- with reasons and the revised shipping and
                                delivery timelines.</li>
                            <br>
                            <li class="ans">If there are any other issues/ delays that come up, or you need the order to be delivered
                                urgently, write to us at <b>connect@cashncarry.com</b>, we will see what we can do to help.</li>
                        </ol>
                        </p>
                    </div>
            </section>';
        }
        else if(isset($_GET['other']) && $_GET['other'] == 'about'){
            echo '
            <div class="about-container">
                <div class="about-img">
                    <img src="img/about-img.png" alt="about-img">
                </div>
                <div class="about-content">
                    <p> Imagine if you could get anything delivered to you in less than 10 minutes. Milk for your morning
                        chai. The perfect shade of lipstick for tonight’s party. Even an iPhone(maybe).</p>
        
                    <p>Imagine the store that delivered these to you is owned by someone just like you — a community
                        entrepreneur. Your neighbour. Your friend. Maybe even you. Post-Covid, all of us are skeptical with the
                        idea of going to the store, so we at <b>Say Data Data</b> decided to bring the store to you by
                        establishing
                        this venture in collaboration with hundreds of <b>Cash\'n\'Carry</b> grocery stores which our now just a
                        tap
                        away. No need to wait in those long queues again! Shop away your groceries now on <b>Cash\'n\'Carry</b>.
                    </p>
        
                    <p>Shop on the go and buy groceries, fresh fruits & vegetables, cakes & other bakery items, meats & seafood,
                        and baby care products. We get it all delivered at your doorstep within hours. You not only save time
                        but also money with our best prices and offers.</p>
        
                    <p>
                        Order thousands of products at just a tap - <span>milk, eggs, bread, cooking oil, ghee, atta, rice,
                            fresh
                            fruits & vegetables, spices, chocolates, chips, biscuits, Maggi, cold drinks, shampoos, soaps, body
                            wash, pet food, diapers, other organic and gourmet</span> products from your neighbourhood stores. A
                        majority
                        of these products belong to the company’s 8 in house brands namely <span>Cash\'n\'Carry Happy Day,
                        Cash\'n\'Carry
                        Happy Home, Cash\'n\'Carry Mothers choice, Cash\'n\'Carry Happy Baby, G Fresh, O’range and
                        budget
                        brands
                        like Savemore</span>.
                    </p>
        
                    <p>
                        <b>Cities we currently serve:</b> <span>Agra, Ahmedabad, Allahabad, Bengaluru, Chandigarh, Chennai,
                            Delhi,
                            Durgapur,
                            Faridabad, Guwahati, HR-NCR, Hyderabad, Jaipur, Kanpur, Kolkata, Lucknow, Mathura, Meerut, Mohali,
                            Moradabad, Mumbai, Panipat, Pune, Sonipat, UP-NCR, Vadodara</span>.
                    </p>
        
                    <div class="about-footer">
                        <div class="trademark">
                            <img src="img/1.png" alt="logo">
                        </div>
                        <span>
                            is a registered trademark of <b>Say Data Data</b> - all terms and conditions applied.
                        </span>
                    </div>
        
                </div>
            </div>';
        }
        else
        {
            echo '<!---------------------------- Contact section ---------------------------->
            <div class="container">
                <div class="content ">
                    <div class="image-box">
                        <img src="img/contact.png" alt="Contact-Image">
                    </div>
                    <form class="contactform">
                        <div class="topic">Send us a message</div>
                        <div class="input-box">
                            <input type="text" name="name" required>
                            <label>Enter your name</label>
                        </div>
                        <div class="input-box">
                            <input type="email" name="email" required>
                            <label>Enter your email</label>
                        </div>
                        <div class="message-box">
                            <textarea type="text" name="message" required></textarea>
                            <label>Enter your message</label>
                        </div>
                        <div class="input-box">
                            <input type="button" value="Send Message" id="sendmsg">
                        </div>
                    </form>
                </div>
            </div>
        
            <!------------------------ Locate us Section ------------------------>
            <div class="container mp-box">
                <div class="content map-cont">
                    <div class="address">
                        <div class="topic">Locate us!</div>
                        <div>
                            <h3>Address: </h3>
                            <p>
                                Sector 24<br>
                                Karol bhag, New Delhi
                            </p>
                            <h3>Contact us at </h3>
                            <p> <i class="fas fa-phone-alt"></i> 011-98375388<br>
                                <i class="fas fa-envelope"></i> cncarry@cninfo.com
                            </p>
                        </div>
                    </div>
                    <div class="map-div">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448183.7391372154!2d76.8130653580598!3d28.646677244206412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1633689321065!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>';

            echo '
            <div class="about-container">
                <div class="about-img">
                    <img src="img/about-img.png" alt="about-img">
                </div>
                <div class="about-content">
                    <p> Imagine if you could get anything delivered to you in less than 10 minutes. Milk for your morning
                        chai. The perfect shade of lipstick for tonight’s party. Even an iPhone(maybe).</p>
        
                    <p>Imagine the store that delivered these to you is owned by someone just like you — a community
                        entrepreneur. Your neighbour. Your friend. Maybe even you. Post-Covid, all of us are skeptical with the
                        idea of going to the store, so we at <b>Say Data Data</b> decided to bring the store to you by
                        establishing
                        this venture in collaboration with hundreds of <b>Cash\'n\'Carry</b> grocery stores which our now just a
                        tap
                        away. No need to wait in those long queues again! Shop away your groceries now on <b>Cash\'n\'Carry</b>.
                    </p>
        
                    <p>Shop on the go and buy groceries, fresh fruits & vegetables, cakes & other bakery items, meats & seafood,
                        and baby care products. We get it all delivered at your doorstep within hours. You not only save time
                        but also money with our best prices and offers.</p>
        
                    <p>
                        Order thousands of products at just a tap - <span>milk, eggs, bread, cooking oil, ghee, atta, rice,
                            fresh
                            fruits & vegetables, spices, chocolates, chips, biscuits, Maggi, cold drinks, shampoos, soaps, body
                            wash, pet food, diapers, other organic and gourmet</span> products from your neighbourhood stores. A
                        majority
                        of these products belong to the company’s 8 in house brands namely <span>Cash\'n\'Carry Happy Day,
                        Cash\'n\'Carry
                        Happy Home, Cash\'n\'Carry Mothers choice, Cash\'n\'Carry Happy Baby, G Fresh, O’range and
                        budget
                        brands
                        like Savemore</span>.
                    </p>
        
                    <p>
                        <b>Cities we currently serve:</b> <span>Agra, Ahmedabad, Allahabad, Bengaluru, Chandigarh, Chennai,
                            Delhi,
                            Durgapur,
                            Faridabad, Guwahati, HR-NCR, Hyderabad, Jaipur, Kanpur, Kolkata, Lucknow, Mathura, Meerut, Mohali,
                            Moradabad, Mumbai, Panipat, Pune, Sonipat, UP-NCR, Vadodara</span>.
                    </p>
        
                    <div class="about-footer">
                        <div class="trademark">
                            <img src="img/1.png" alt="logo">
                        </div>
                        <span>
                            is a registered trademark of <b>Say Data Data</b> - all terms and conditions applied.
                        </span>
                    </div>
        
                </div>
            </div>';

            echo ' <!---------------------- Returns & refund sections ---------------------->
            <section class="rnr-container" id="rnr">
                <div class="rnr">
                    <h1 class="title">Returns and Refunds</h1>
                    <div class="qna">
                        <div class="que">
                            What are the terms of the exchange policy?
                        </div>
                        <p class="ans">You can apply for an exchange for your order within 30 days after an order has been
                            delivered. We have a reverse pick up facility for most pin codes. If you wish to exchange products
                            from a
                            <i>combo pack</i>, the whole pack will have to be sent back to us. Partial returns aren’t accepted.
                            If there is a manufacturing issue, or if you have any other query regarding this, you can email us
                            on
                            <b>connect@cashncarry.com</b>. Gift wrapping charges are non-refundable and we will not be able to
                            gift wrap any exchanges requested.
                        </p>
                    </div>
        
                    <div class="qna">
                        <div class="que">
                            What are the terms of the Return Policy?
                        </div>
                        <p class="ans">
                        <ul>
                            <li  class="ans">Customers can return their order within 30 days after an order has been delivered. We have a
                                reverse pick up facility for most pin codes. For pin codes that are non- serviceable by our
                                courier partners against the reverse pick
                                up policy, you will have to self ship the product(s).</li>
        
                            <br>
                            <li class="ans">In the interest of hygiene, we may refuse returns where it\'s obvious that the item has been
                                soiled. Defective products need not be sent back to us, unless confirmed by the Customer
                                Experience Team. If you have received a defective
                                product, send us images at <b>connect@cashncarry.com</b> and we will get back to you. Once
                                confirmed by the Customer Experience Team the refund will be provided into your bank account.
                            </li>
        
                            <br>
                            <li class="ans">If you have to return anything from a <i>combo pack</i>, the whole pack will have to be
                                returned. There will not be any partial returns accepted. If there is a manufacturing issue, or
                                if you have any other query regarding this,
                                you can contact us on the number or email us on <b>connect@cashncarry.com</b>. Gift
                                cards/vouchers are non-refundable.</li>
        
                            <br>
                            <li class="ans">Gift wrapping charges will not be refunded if goods are returned. Also, we will not be able to
                                gift wrap any replacements you have asked for.</li>
                        </ul>
                        </p>
                    </div>
        
                    <div class="qna">
                        <div class="que">
                            How long will it take for my order to be delivered?
                        </div>
                        <p class="ans">Orders in India, once shipped, are typically delivered in 1-4 business days in metros,
                            and 4-7 business days for the rest of India. Delivery time may vary depending upon the shipping
                            address and other factors (public holidays, extreme
                            weather conditions, etc.).
                        </p>
                    </div>
        
                    <div class="qna">
                        <div class="que">
                            How do I check the status of my order?
                        </div>
                        <p class="ans">
                        <ol>
                            <li class="ans">To find out when your order is arriving, you need to first log in to your account. Click on the
                                Menu bar on your left hand side of the screen.</li>
        
                            <br>
                            <li class="ans">Click on My Orders to see the status of your current order (as well as your order history). You
                                can also simply click on the product from the Order ID to check your order status.</li>
                            <br>
                            <li class="ans">After your order has been successfully placed, you will immediately receive a confirmation and
                                order details via email and SMS. Once your products have been shipped, you will be notified
                                again via email, SMS and Whatsapp.</li>
                            <br>
                            <li class="ans">In case there is any unusual event or complication that leads to a delay in shipping your order,
                                you will immediately receive an update from our end- with reasons and the revised shipping and
                                delivery timelines.</li>
                            <br>
                            <li class="ans">If there are any other issues/ delays that come up, or you need the order to be delivered
                                urgently, write to us at <b>connect@cashncarry.com</b>, we will see what we can do to help.</li>
                        </ol>
                        </p>
                    </div>
            </section>';
        }
    ?>

    <!-------------------------- footer section-------------------------->
    <?php require 'partials/_footer.php'; ?>

    <!------------------------ Script Section ------------------------>

    <!--------------- Font Awesome Script --------------->
    <script src="https://kit.fontawesome.com/76448c9004.js" crossorigin="anonymous"></script>

    <!-- Jquery & owl Carousel Javascript-->
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/owl.carousel.js"></script>

    <!------------------------ Slider js ------------------------>
    <script src="js/owlSlider.js"></script>

    <!------------------- My Js ------------------->
    <script src="scriptJQ.js"></script>
    <script src="index.js"></script>
</body>

</html>