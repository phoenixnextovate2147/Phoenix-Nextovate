<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phoenix Nextovate</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
            <img src="logo.jpeg" style="height: auto; width: 150px;">

              </div>
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#services">Services</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </nav>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <h1 class="hero-title">Elevate Your <span>Business</span> with IT Excellence</h1>
            <p class="hero-subtitle">We deliver cutting-edge IT solutions tailored for your success.</p>
            <a href="#contact" class="cta-button pulse">Get Started <i class="fas fa-arrow-right"></i></a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Our <span>Services</span></h2>
            <div class="services-grid">
                <!-- Service Card 1 -->
                <div class="service-card">
                    <div class="card-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3>Digital Marketing</h3>
                    <p>Boost your brand visibility and drive results with our expert digital marketing solutions.</p>
                    <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <!-- Service Card 2 -->
                <div class="service-card">
                    <div class="card-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Development</h3>
                    <p>Crafting powerful, scalable, and custom-built digital solutions to elevate your business.</p>
                    <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <!-- Service Card 3 -->
                <div class="service-card">
                    <div class="card-icon">
                        <i class="fas fa-laptop-house"></i>
                    </div>
                    <h3>Internships</h3>
                    <p>Kickstart your tech career with hands-on coding internships guided by industry experts.</p>
                    <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section (CEO) -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About <span>Us</span></h2>
            <div class="about-content">
                <div class="ceo-card">
                    <div class="ceo-img">
                    <img src="ceo.png" style="height: auto; width: 150px;">
                    </div>
                    <div class="ceo-info">
                        <h3>Prashansa Mathpati</h3>
                        <p class="position">Founder & CEO</p>
                        <p class="quote">"We don't just provide IT solutions—we build digital futures."</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Get In <span>Touch</span></h2>
            <form class="contact-form">
                <div class="form-group">
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="submit-btn glow">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <a href="#home" style="color: white; font-weight: bold;">Home</a>
<a href="#services" style="color: white; font-weight: bold;">Services</a>
<a href="#about" style="color: white; font-weight: bold;">About</a>
<a href="#contact" style="color: white; font-weight: bold;">Contact</a>
                </div>
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-envelope"></i> phoenixnextovate2147@gmail.com</p>
                    <p><i class="fas fa-phone"></i> 9834633557</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; <?php echo date("Y"); ?> <span>Phoenix Nextovate</span>. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>