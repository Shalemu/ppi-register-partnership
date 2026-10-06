<!-- CONTACT SECTION -->
<section id="contact-section" class="contact-section">

    <!-- HERO -->
    <div class="contact-hero">
        <div class="overlay"></div>
        <div class="container text-center hero-content">
            <h1>Let’s Stay Connected</h1>
            <p>
                We’d love to hear from you, partner with us, volunteer, <br>
                or learn more about our mission.
            </p>
        </div>
    </div>

    <div class="container">

        <!-- INTRO -->
        <div class="contact-intro text-center">
            <h2>We Are Here for You</h2>
            <p>
                Whether you’re a young person seeking to join our programs, a partner exploring collaboration,
                or a supporter looking to contribute, we’d love to connect and walk this journey with you.
            </p>
        </div>

        <!-- GRID -->
        <div class="contact-grid">

            <!-- LEFT PREMIUM INFO -->
            <div class="contact-info">

                <h3>Contact Information</h3>

                <div class="info-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Address</h4>
                        <p>
                            Potential Pioneers Initiatives (PPI)<br>
                            Dar es Salaam, Tanzania<br>
                            Mon–Fri, 8:00 AM – 5:00 PM
                        </p>
                    </div>
                </div>

                <div class="info-card">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>
                            ppinitiatives@yahoo.com<br>
                           
                        </p>
                    </div>
                </div>

                <div class="info-card">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <h4>Phone / WhatsApp</h4>
                        <p>+255 755 794 143</p>
                    </div>
                </div>

                <!-- SOCIAL -->
                <div class="social-links">
                    <h4>Follow Us</h4>

                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                
                </div>

            </div>

            <!-- RIGHT FORM -->
            <div class="contact-form">

                <h3>Send Us a Message</h3>

                @if(session('success'))
                    <div class="alert-success">
                        Thank you for reaching out! We’ll get back to you within 24–48 hours.
                    </div>
                @endif

                <form action="#" method="POST">
                    @csrf

                    <input type="text" name="name" placeholder="Full Name" required>

                    <input type="email" name="email" placeholder="Email Address" required>

                    <input type="text" name="phone" placeholder="Phone Number (optional)">

                    <select name="subject" required>
                        <option value="">Select Subject</option>
                        <option>Volunteering</option>
                        <option>Partnership</option>
                        <option>Donation Inquiry</option>
                        <option>Media/Press</option>
                        <option>Other</option>
                    </select>

                    <textarea name="message" rows="5" placeholder="Your Message..." required></textarea>

                    <button type="submit" class="btn-primary">Send Message</button>

                </form>

            </div>
            <br>

        </div>

    </div>
</section>

<style>
    /* GLOBAL FONTS */
h1, h2, h3, h4 {
    font-family: 'Ubuntu', sans-serif;
    font-weight: 700;

}

p {
    font-family: 'Poppins', sans-serif;
    line-height: 1.7;
}

/* SECTION */
.contact-section {
     margin: 80px 20px;
    background: #f7f9fc;
    
}

/* HERO */
.contact-hero {
    position: relative;
    height: 65vh;
    background: url('../img/contact/contact-bg.jpg') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
}

.contact-hero .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0,0,0,0.7), rgba(0,123,255,0.4));
}

.hero-content {
    position: relative;
    color: #fff;
}

.hero-content h1 {
    font-size: 3.4rem;
    font-family: 'Ubuntu', sans-serif;
    color: #fff;
    font-weight: 800;
   

}

.hero-content p {
    font-size: 1.4rem;
    color: #eaeaea;
    font-family: 'Poppins', sans-serif;
}

/* INTRO */
.contact-intro {
    margin: 70px 0 40px;
    font-family: 'Poppins', sans-serif;
}
.contact-intro h2 {
    font-family: 'Poppins', sans-serif;
}
.contact-intro p {
    max-width: 900px;
    margin: auto;
    opacity: 0.85;
    font-size: 1.1rem;
}

/* GRID */
.contact-grid {
    
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 50px;
}

/* LEFT INFO PANEL (PREMIUM CARDS) */
.contact-info h3 {
    margin-bottom: 25px;
    font-family: 'Poppins', sans-serif;
}

/* INFO CARD */
.info-card {
    display: flex;
    gap: 15px;
    background: #fff;
    padding: 18px;
    border-radius: 12px;
    margin-bottom: 18px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.05);
    transition: 0.3s;
    
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.08);
}

.info-card i {
    font-size: 20px;
    color: #007bff;
    margin-top: 5px;
}

.info-card h4 {
    margin-bottom: 5px;
    font-size: 1rem;
      font-family: 'Poppins', sans-serif;
}

/* SOCIAL */
.social-links {
    margin-top: 25px;
}

.social-links a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    margin-right: 10px;
    border-radius: 50%;
    background: #eef3ff;
    color: #007bff;
    transition: 0.3s;
    text-decoration: none;
}

.social-links a:hover {
    background: #007bff;
    color: #fff;
    transform: translateY(-4px);
}

/* FORM (PREMIUM GLASS STYLE) */
.contact-form {
    background: #fff;
    padding: 35px;
    border-radius: 16px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

.contact-form h3 {
    margin-bottom: 20px;
}

/* INPUTS (MODERN STYLE) */
.contact-form input,
.contact-form select,
.contact-form textarea {
    width: 100%;
    padding: 14px;
    margin-bottom: 15px;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    font-family: 'Poppins', sans-serif;
    transition: 0.3s;
    background: #fafafa;
}

.contact-form input:focus,
.contact-form select:focus,
.contact-form textarea:focus {
    border-color: #007bff;
    background: #fff;
    outline: none;
    box-shadow: 0 0 0 3px rgba(0,123,255,0.1);
}

/* BUTTON */
.contact-form button {
    width: 100%;
    padding: 12px;
    font-family: 'Ubuntu', sans-serif;
    background: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

/* SUCCESS */
.alert-success {
    background: #d4edda;
    color: #155724;
    padding: 12px;
    border-radius: 10px;
    margin-bottom: 15px;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr;
    }

    .hero-content h1 {
        font-size: 2.2rem;
    }
}
</style>