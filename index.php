<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art21 Portrait</title>
    <link rel="stylesheet" href="index.css">
    <style>
        /* Smooth scrolling effect */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
        <a href="#"><img src="images/logo.png"class="a" width="70px" alt="logo"></a>
        </div>
<nav>
<ul class="nav-links">
    <li><a href="#hero">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#art">Featured Artworks</a></li>
    <li><a href="#artist">Artists</a></li>
    <li><a href="#contact">Contact</a></li>
    <?php
    // Check if the user cookie is set
    if (isset($_COOKIE['customer'])) {
        // Display profile, cart, and logout links
        echo '<li><a href="profile.php" title="' . $_COOKIE['customer'] . '">Profile</a></li>';
        echo '<li><a href="cart.php" title="' . $_COOKIE['customer'] . '">Cart</a></li>';
        echo '<li><a href="logout.php">Logout</a></li>'; // Changed from login to logout
    } else {
        // Display login link
        echo '<li><a href="login/login.php">Login</a></li>';
    }
    ?>
</ul>

</nav>
    </div>
</header>


    <section id="hero" class="hero">
        <div class="hero-content">
            <h1>Discover the Beauty of Art</h1>
            <p>Experience stunning artworks from around the world.</p>
            <a href="Gallery.html" class="cta-hero">Explore the Gallery</a>
        </div>
    </section>
    <section id="art" class="featured-artworks">
        <div class="container">
            <h2>Featured Artworks</h2>
            <div class="artwork-grid">
                <div class="artwork-item">
                    <img src="art21images/charcoal1.jpg" alt="Artwork 1">
                    <h3>Apo Whang Od</h3>
                    <p>Maki Igura</p>
                </div>
                <div class="artwork-item">
                    <img src="art21images/paint1.jpg" alt="Artwork 2">
                    <h3>Michiko Igura</h3>
                    <p>Maki Igura</p>
                </div>
                <div class="artwork-item">
                    <img src="art21images/paint2.jpg" alt="Artwork 3">
                    <h3>Organista</h3>
                    <p>Maki Igura</p>
                </div>
                <!-- Add more artwork items as needed -->
            </div>
        </div>
    </section>
    <section id="about" class="about-gallery">
        <div class="container">
            <h2>About the Gallery</h2>
            <div class="about-content">
                <div class="gallery-story">
                    <h3>Our Story</h3>
                    <p>Founded in 2020, our gallery is dedicated to showcasing contemporary art from both emerging and established artists. Our mission is to create a space where art can be appreciated, discussed, and enjoyed by everyone. We believe in the power of art to inspire and transform lives.</p>
                    <p>Located in the heart of the city, our gallery features a diverse collection of artworks, ranging from paintings and sculptures to digital art and installations. We host regular exhibitions, workshops, and events to engage with our community and support the arts.</p>
                </div>
                <div class="gallery-photo">
                    <img src="art21images/ourstory.jpg" alt="Gallery Photo">
                </div>
            </div>
        </div>
    </section>

    <section id="artist" class="featured-artist">
        <div class="container">
            <h2>Featured Artist</h2>
            <div class="artist-content">
                <div class="artist-photo">
                    <img src="art21images/ArtistMaki.jpg" alt="Artist Photo">
                </div>
                <div class="artist-details">
                    <h3>Maki Igura</h3>
                    <p>Maki Igura, Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis consectetur aliquid iste sunt nemo a velit soluta harum provident vel dolorum quis voluptates earum similique possimus, alias enim neque! Id?</p>
                    <a href="#" class="cta-artist">View Gallery</a>
                </div>
            </div>
            <div class="artist-content">
                <div class="artist-photo">
                    <img src="art21images/ArtistJay.jpg" alt="Artist Photo">
                </div>
                <div class="artist-details">
                    <h3>Jay Legaspi</h3>
                    <p>Jay Legaspi (co-artist), Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt nihil similique iure quisquam libero temporibus ipsam saepe, ea fuga nobis natus amet unde vero quidem possimus, soluta cumque provident distinctio?</p>
                    <a href="#" class="cta-artist">View Gallery</a>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <h2>What Our Visitors Say</h2>
            <div class="testimonial-grid">
                <div class="testimonial-item">
                    <p>"highly recommended,mabilis at pulido Ang gawa,higit sa lahat lagi ka nilang inaupdate sa progress ng pinagawa mo sa kanila.Thank you ART21 nagustuhan po Nmin ng girlfriend ko🙂🙂"</p>
                    <h3>Joel Serrano Bergonia</h3>
                    <span>Client</span>
                </div>
                <div class="testimonial-item">
                    <p>"Ang ganda po ng pagkakagawa, kuhang kuha po lalo na po si hubby and sobrang nagustuhan po niya 😍😍 I highly recommend this page, sa uulitin po 😊😊 next time yung mas malaki na 😆😆"</p>
                    <h3>Charie Cacho</h3>
                    <span>Client</span>
                </div>
                <div class="testimonial-item">
                    <p>"i highly reccomended the artist are so nice and friendly and their works are truly amazing..👍❤❤"</p>
                    <h3>Joy S. Alba</h3>
                    <span>Client</span>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="container">
            <h2>Stay Updated</h2>
            <p>Subscribe to our newsletter for the latest updates and exclusive content.</p>
            <form class="signup-form">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <button type="submit" class="cta-button">Subscribe Now</button>
            </form>
        </div>
    </section>

    <section id="contact" class="contact-info">
        <div class="container">
            <div class="contact-details">
                <h2>Contact Details</h2>
                <p><strong>Address:</strong> Blk O-16 Excess Lot 4114 Dasmariñas, Philippines</p>
                <p><strong>Phone:</strong> 09566650590</p>
                <p><strong>Email:</strong> makiiguraart@gmail.com</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/makiiguraart" class="social-link">Facebook</a>
                    <a href="#" class="social-link">Tiktok</a>
                    <a href="https://www.instagram.com/juam.ai/" class="social-link">Instagram</a>
                </div>
            </div>
            <div class="contact-form">
                <h2>Contact Form</h2>
                <form>
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <input type="text" placeholder="Subject" required>
                    <textarea placeholder="Your Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="quick-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#art">Featured Artworks</a></li>
                    <li><a href="#artist">Artists</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="social-media">
                <h3>Connect With Us</h3>
                <div class="social-icons">
                    <a href="https://www.facebook.com/jdhenrei/" class="icon-link"><img src="images/fblogo.png" alt="Facebook"></a>
                    <a href="https://mail.google.com/mail/u/0/?hl=en-GB#inbox" class="icon-link"><img src="images/gmaillogo.png" alt="Gmail"></a>
                    <a href="https://www.instagram.com/juam.ai/" class="icon-link"><img src="images/iglogo.png" alt="Instagram"></a>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2024 Art Gallery. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    
</body>
</html>
