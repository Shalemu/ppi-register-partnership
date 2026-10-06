<section class="premium-cta-section">

    <!-- Decorative Glow -->
    <div class="cta-glow"></div>

    <div class="container text-center text-white position-relative">

        <span class="cta-badge">MAKE AN IMPACT</span>

        <h2>
            Ready to Spark a <span class="text-highlight">Success Story?</span>
        </h2>

        <p>
            Your support can be the turning point in a child’s life.
            Join our community of impact makers and help us build
            the next generation of leaders.
        </p>

        <div class="cta-buttons">
            <button type="button"
                class="btn btn-primary-cta"
                data-bs-toggle="modal"
                data-bs-target="#supportModal">
                Become a Partner
            </button>

            <a href="https://wa.me/255755794143?text=I%20want%20to%20volunteer%20at%20PPI"
               target="_blank"
               class="btn btn-outline-cta">
                Join as Volunteer
            </a>
        </div>
    </div>
</section>

<style>
/* ===============================
   PREMIUM CTA SECTION
=================================*/

.premium-cta-section {
    position: relative;
    padding: 100px 20px;
    margin: 80px 20px;
    border-radius: 40px;
    background: linear-gradient(135deg, #0096c7, #023e8a);
    overflow: hidden;
    box-shadow: 0 40px 80px rgba(0,0,0,0.15);
}

/* Soft Glow Effect */
.cta-glow {
    position: absolute;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(255,255,255,0.15), transparent 70%);
    top: -150px;
    right: -150px;
    animation: pulseGlow 6s infinite alternate ease-in-out;
}

@keyframes pulseGlow {
    from { transform: scale(1); opacity: 0.7; }
    to { transform: scale(1.2); opacity: 1; }
}

/* Badge */
.cta-badge {
    display: inline-block;
    font-size: 13px;
    letter-spacing: 2px;
    padding: 6px 18px;
    margin-bottom: 25px;
    border-radius: 10px;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.25);
}

/* Heading */
.premium-cta-section h2 {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    margin-bottom: 25px;
    line-height: 1.2;
     font-family: 'Ubuntu', sans-serif;
}

/* Highlight text */
.text-highlight {
    color: #fff;
}

/* Paragraph */
.premium-cta-section p {
    max-width: 720px;
    margin: auto;
    opacity: 0.85;
    font-size: 17px;
    margin-bottom: 40px;
     font-family: 'Poppins', sans-serif;
}

/* Buttons container */
.cta-buttons {
    display: flex;
    justify-content: center;
    gap: 18px;
    flex-wrap: wrap;
}

/* Primary CTA button */
.btn-primary-cta {
    background: #60BAEB;
    color: #000;
    padding: 14px 32px;
    border-radius: 8px; /* Reduced radius */
    font-weight: 600;
    border: none;
    transition: all 0.3s ease;
    box-shadow: 0 1px 35px rgba(255,214,10,0.4);
}

.btn-primary-cta:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 45px rgba(255,214,10,0.6);
}

/* Outline CTA button */
.btn-outline-cta {
    border: 1.5px solid #fff;
    padding: 14px 30px;
    border-radius: 4px; /* Reduced radius */
    color: #fff;
    transition: all 0.3s ease;
}

.btn-outline-cta:hover {
    background: #fff;
    color: #000;
    transform: translateY(-4px);
}

/* Mobile Optimization */
@media (max-width: 768px) {

    .premium-cta-section {
        margin: 60px 15px;
        padding: 80px 20px;
        border-radius: 20px;
    }

    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }

    .btn-primary-cta,
    .btn-outline-cta {
        width: 100%;
        max-width: 260px;
    }
}
</style>