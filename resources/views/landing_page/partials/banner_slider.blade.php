<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

<section class="hero-modern">

    <div class="hero-container">

        <!-- LEFT CONTENT -->
        <div class="hero-left">
            <h1>
                Unlocking <span>Potential</span> Inspiring Purpose
            </h1>

            <p>
                We believe every young person carries within them endless potential, we simply help them discover it.
            </p>

            <div class="hero-buttons">
                <a href="#" class="btn-primary">Join Us</a>
                <a href="#" class="btn-outline">Learn More</a>
            </div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="hero-right">
            <div class="hero-image-circle">
                <img src="{{ asset('/assets/images/events/bg.jpeg') }}" alt="Youth Impact">
            </div>
        </div>

    </div>

</section>

<style>
/* =========================
   HERO MODERN LAYOUT
========================= */
.hero-modern {
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                url('{{ asset('/assets/images/events/bg.jpeg') }}') center/cover no-repeat;
    padding: 100px 40px;
    font-family: 'Poppins', sans-serif;
    color: #fff;
}

/* Container */
.hero-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    margin: auto;
    gap: 40px;
}

/* LEFT */
.hero-left {
    flex: 1;
}

.hero-left h1 {
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 20px;

    max-width: 700px; /* increase this (e.g. 800px, 900px, or 100%) */
}

.hero-left h1 span {
    color: #00b4d8;
}

.hero-left p {
    font-size: 18px;
    opacity: 0.9;
    margin-bottom: 30px;
    max-width: 1000px;
}

/* BUTTONS */
.hero-buttons {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.btn-primary {
    background: #00b4d8;
    color: #fff;
    padding: 12px 26px;
    border-radius: 6px;
    font-weight: 600;
    text-decoration: none;
    transition: 0.3s;
}

.btn-primary:hover {
    background: #0096c7;
    transform: translateY(-3px);
}

.btn-outline {
    border: 1.5px solid #fff;
    padding: 12px 24px;
    border-radius: 6px;
    color: #fff;
    text-decoration: none;
    transition: 0.3s;
}

.btn-outline:hover {
    background: #fff;
    color: #000;
}

/* RIGHT IMAGE */
.hero-right {
    flex: 0.7; 
    display: flex;
    justify-content: center;
}

.hero-image-circle {
    width: 280px;
    height: 280px;
    border-radius: 50%;
    overflow: hidden;
    border: 6px solid rgba(255,255,255,0.8);
    box-shadow: 0 10px 40px rgba(0,0,0,0.4);
}

.hero-image-circle img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* MOBILE */
@media (max-width: 900px) {
    .hero-container {
        flex-direction: column;
        text-align: center;
    }

    .hero-left p {
        margin: auto;
    }

    .hero-buttons {
        justify-content: center;
    }

    .hero-image-circle {
        width: 220px;
        height: 220px;
        margin-top: 20px;
    }
}
</style>