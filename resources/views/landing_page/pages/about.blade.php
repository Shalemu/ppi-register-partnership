@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="about-hero">
    <div class="container text-center">
        <h1>About Potential Pioneers <br>Initiatives</h1>
        <p>Empowering Tanzania’s youth to unlock potential and live purpose-driven lives.</p>
    </div>
</section>

<!-- OUR STORY -->
<section class="about-section">
    <div class="container">

        <div class="row about-row align-items-stretch g-5">

            <!-- IMAGE -->
            <div class="col-lg-6">
                <div class="about-image h-100">
                    <img src="{{ asset('assets/images/who we serve.jpeg') }}" alt="Who We Serve">
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-lg-6">
                <div class="about-content h-100">

                    <span class="section-tag">Who We Are</span>
                    <h2>Our Story</h2>

                    <p>
                        Potential Pioneers Initiatives (PPI) began its journey in 2022 as the Youth and Children Development Centre, a creative youth collective dedicated to nurturing talent, innovation, and community empowerment. From its inception, the initiative focused on identifying and developing the unique 
                        abilities of children and young people, providing them with platforms to explore their creativity and potential.
                    </p>

                    <p>
                       On May 14, 2025, the organization was officially registered as a Non-Governmental Organization (NGO) under the name Potential Pioneers Initiatives (PPI). This milestone marked a new chapter, enabling the organization to expand its reach and formalize its programs, which include talent discovery workshops, skills training,
                        mentorship, community competitions, and professional consultation services.
                    </p>

                    <p>
                       Since its official registration, PPI has been committed to transforming potential into tangible outcomes by empowering youth and children to become innovative, confident, and socially responsible leaders. Our story reflects our belief that every child carries unique potential, and with guidance, opportunity, and mentorship,
                        they can drive positive change in their communities and beyond.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="purpose-showcase">
    <div class="container">

        <div class="row align-items-center g-5">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6">
                <div class="purpose-text">

                    <span class="section-tag">Our Purpose</span>

                    <h2>Why We Exist</h2>

                    <p class="lead-text">
                    Tanzania has a rapidly growing youth population with significant untapped potential. However, many young people lack structured systems for early 
                    talent identification, career alignment, skills development, and mentorship guidance.
                    </p>

                    <!-- PURPOSE BLOCKS -->
                    <div class="purpose-block">

                       
                        <p>
                    Potential Pioneers Initiatives was established to close this gap by creating an integrated youth development ecosystem that supports
                        children and young people from talent discovery to leadership formation and economic empowerment
                        </p>

                        <h4>Our Mission</h4>
                        <p>
                        To identify, develop, and empower children and youth through structured talent discovery,
                        practical skills training, mentorship, leadership development, and strategic guidance.
                        </p>

                        <h4>Our Vision</h4>
                        <p>
                        To raise a generation of purpose-driven, skilled, and economically 
                        empowered young leaders who create sustainable impact in Tanzania and beyond.
                        </p>

                    </div>

                </div>
            </div>

            <!-- RIGHT IMAGE GRID -->
            <div class="col-lg-6">
                <div class="image-grid">

                    <div class="img img-main">
                        <img src="{{ asset('assets/images/stakeholder.jpeg') }}" alt="">
                    </div>

                    <div class="img">
                        <img src="{{ asset('assets/images/image1.jpeg') }}" alt="">
                    </div>

                    <div class="img">
                        <img src="{{ asset('assets/images/image2.jpeg') }}" alt="">
                    </div>

                </div>
            </div>

             <!-- FEATURES -->
                    <!-- APPROACH / STRATEGIC MODEL -->
           <div class="row align-items-stretch g-5 mt-5">

                <!-- LEFT IMAGE -->
                <div class="col-lg-6">
                    <div class="approach-image">
                        <img src="{{ asset('assets/images/3.jpeg') }}" alt="">
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-6">
                    <div class="purpose-features">

                        <h2>OUR STRATEGIC MODEL</h2>
                        <p>Our approach follows a structured development pipeline:</p>

                        <div class="feature-item">
                            <div class="icon"><i class="fa-solid fa-bullseye"></i></div>
                            <div>
                                <h5>Talent Discovery</h5>
                                <p>We conduct assessment-based workshops that identify natural abilities, strengths, and growth areas,
                                    providing each participant with a clear development pathway.</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="icon"><i class="fa-solid fa-book-open"></i></div>
                            <div>
                                <h5>Skills Development</h5>
                                <p>We deliver competency-based programs in digital literacy, entrepreneurship, creative industries,
                                    financial education, and life skills.</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="icon"><i class="fa-solid fa-hands-helping"></i></div>
                            <div>
                                <h5>Mentorship & Growth</h5>
                                <p>We connect young people with professionals and leaders for structured guidance and career support.</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="icon"><i class="fa-solid fa-lightbulb"></i></div>
                            <div>
                                <h5>Community Exposure</h5>
                                <p>We provide platforms for youth to showcase ideas through competitions and innovation challenges.</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="icon"><i class="fa-solid fa-briefcase"></i></div>
                            <div>
                                <h5>Consultation & Advisory</h5>
                                <p>We offer guidance in talent assessment, career coaching, leadership, and financial mindset.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

                </div>

        </div>

    </div>
</section>

<section class="ppia-system">
    <div class="container">

        <!-- HEADER -->
        <div class="section-header text-center">
            <h2>Our Development Framework</h2>
            <p>A structured ecosystem for identifying, developing, and empowering young people.</p>
        </div>

        <!-- GRID -->
        <div class="row g-4">

            <!-- LEFT: STRATEGIC MODEL -->
            <div class="col-lg-6">

                <div class="pillar-card">

                    <h3>Our Strategic Model</h3>

                    <div class="timeline">

                        <div class="step">
                            <i class="fa-solid fa-circle-check"></i>
                            <div>
                                <h5>Talent Discovery</h5>
                                <p>Assessment-based identification of strengths and abilities.</p>
                            </div>
                        </div>

                        <div class="step">
                            <i class="fa-solid fa-circle-check"></i>
                            <div>
                                <h5>Skills Training</h5>
                                <p>Practical learning in digital, entrepreneurship, and life skills.</p>
                            </div>
                        </div>

                        <div class="step">
                            <i class="fa-solid fa-circle-check"></i>
                            <div>
                                <h5>Mentorship</h5>
                                <p>Guidance from professionals and industry leaders.</p>
                            </div>
                        </div>

                        <div class="step">
                            <i class="fa-solid fa-circle-check"></i>
                            <div>
                                <h5>Exposure</h5>
                                <p>Competitions, innovation showcases, and real-world engagement.</p>
                            </div>
                        </div>

                        <div class="step">
                            <i class="fa-solid fa-circle-check"></i>
                            <div>
                                <h5>Consultation</h5>
                                <p>Career guidance, leadership coaching, and advisory support.</p>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- VALUES -->
                <div class="pillar-card mt-4">

                    <h3>Core Values</h3>

                    <div class="value-list">

                        <span><i class="fa-solid fa-check"></i> Integrity</span>
                        <span><i class="fa-solid fa-check"></i> Excellence</span>
                        <span><i class="fa-solid fa-check"></i> Innovation</span>
                        <span><i class="fa-solid fa-check"></i> Inclusion</span>
                        <span><i class="fa-solid fa-check"></i> Purpose</span>

                    </div>

                </div>

            </div>

            <!-- RIGHT: IDENTITY + IMPACT -->
            <div class="col-lg-6">

                <!-- WHO WE SERVE -->
                <div class="pillar-card">

                    <h3>Who We Serve</h3>

                    <div class="grid-list">

                        <div><i class="fa-solid fa-check"></i> Children (5–12)</div>
                        <div><i class="fa-solid fa-check"></i> Adolescents (13–18)</div>
                        <div><i class="fa-solid fa-check"></i> Youth (18–35)</div>
                        <div><i class="fa-solid fa-check"></i> Parents & Educators</div>

                    </div>

                </div>

                <!-- GLOBAL ALIGNMENT -->
                <div class="pillar-card mt-4">

                    <h3>Global Alignment</h3>

                    <p>
                        Our programs align with UN Sustainable Development Goals including:
                        SDG 4 (Quality Education), SDG 8 (Decent Work), SDG 10 (Reduced Inequalities),
                        and SDG 17 (Partnerships).
                    </p>

                </div>

                <!-- COMMITMENT (HIGHLIGHT) -->
                <div class="commit-card mt-4">

                    <h3>Our Commitment</h3>

                    <p>
                        We are committed to transforming potential into measurable achievement by building
                        a structured pipeline from discovery to leadership and impact.
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- QUOTE -->
<section class="quote-section text-center">
    <div class="container">
        <blockquote>
            “We don’t just train youth — we inspire pioneers.”
        </blockquote>
    </div>
</section>

<section class="ngo-objectives">
    <div class="container">

        <!-- HEADER -->
        <div class="ngo-header text-center">
            <h2>Our Objectives</h2>
            <p>What We Aim to Achieve</p>
        </div>

        <!-- GRID -->
        <div class="row g-4">

            <!-- 01 -->
            <div class="col-lg-4 col-md-6">
                <div class="ngo-card">
                    <div class="ngo-number">01</div>
                    <div class="ngo-icon"><i class="fa-solid fa-bolt"></i></div>
                    <h5>Empowerment Through Talent</h5>
                    <p>
                        To empower youth and children to solve societal challenges through effective use of their talents.
                    </p>
                </div>
            </div>

            <!-- 02 -->
            <div class="col-lg-4 col-md-6">
                <div class="ngo-card">
                    <div class="ngo-number">02</div>
                    <div class="ngo-icon"><i class="fa-solid fa-briefcase"></i></div>
                    <h5>Economic Opportunity Creation</h5>
                    <p>
                        To identify and unlock opportunities within talents that enhance employment and entrepreneurship.
                    </p>
                </div>
            </div>

            <!-- 03 -->
            <div class="col-lg-4 col-md-6">
                <div class="ngo-card">
                    <div class="ngo-number">03</div>
                    <div class="ngo-icon"><i class="fa-solid fa-book-open"></i></div>
                    <h5>Community Awareness</h5>
                    <p>
                        To educate communities on socio-economic issues linked to talent and personal development.
                    </p>
                </div>
            </div>

            <!-- 04 -->
            <div class="col-lg-6 col-md-6">
                <div class="ngo-card">
                    <div class="ngo-number">04</div>
                    <div class="ngo-icon"><i class="fa-solid fa-seedling"></i></div>
                    <h5>Structured Talent Development</h5>
                    <p>
                        To develop youth and children’s talents through structured training, exposure, and networking programs.
                    </p>
                </div>
            </div>

            <!-- 05 -->
            <div class="col-lg-6 col-md-12">
                <div class="ngo-card">
                    <div class="ngo-number">05</div>
                    <div class="ngo-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <h5>Leadership & Self-Reliance</h5>
                    <p>
                        To promote self-awareness, leadership, and independence among youth and children.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="impact-section">
    <div class="container">

        <div class="impact-header text-center">
            <h2>Our Impact & Approach</h2>
            <p>How We Create Change</p>
        </div>

        <!-- FORCE EQUAL HEIGHT ROW -->
        <div class="row g-5 impact-row">

            <!-- LEFT -->
            <div class="col-lg-6 d-flex">
                <div class="impact-card w-100 h-100">

                    <h3>Our Approach</h3>

                    <p>
                        At PPI, our approach combines education, mentorship, leadership training, and technology
                        to create practical, real-world solutions for youth development.
                    </p>

                    <p>
                        We believe in empowering from within — giving youth real-life experiences,
                        hands-on learning, and community responsibility that shapes long-term transformation.
                    </p>

                    <p class="highlight-text">
                        Our impact is measured not only in numbers, but in transformed lives:
                        confidence restored, dreams rekindled, and talents turned into tools for progress.
                    </p>

                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-lg-6 d-flex">
                <div class="impact-grid w-100 h-100">

                    <div class="kpi-card">
                        <i class="fa-solid fa-users"></i>
                        <h3>1200+</h3>
                        <p>Youth Reached</p>
                    </div>

                    <div class="kpi-card">
                        <i class="fa-solid fa-chalkboard-teacher"></i>
                        <h3>25+</h3>
                        <p>Workshops Conducted</p>
                    </div>

                    <div class="kpi-card">
                        <i class="fa-solid fa-layer-group"></i>
                        <h3>3</h3>
                        <p>Flagship Programs</p>
                    </div>

                    <div class="kpi-card">
                        <i class="fa-solid fa-school"></i>
                        <h3>10+</h3>
                        <p>Partner Schools</p>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

@include('landing_page.partials.ppi_team')

@endsection

<style>
    /* HERO */
.about-hero {
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.8)),
                url('{{ asset('assets/images/about.png') }}') center/cover no-repeat;

                
    color: #fff;
    padding: 120px 20px;
}



.hero-content {
    max-width: 500px;
    margin: 0 auto;
    padding: 0 15px;
}

.about-hero h1 {
    font-size: 4rem;
    font-weight: 800;
     font-family: 'Ubuntu', sans-serif;
}

.about-hero p {
    font-size: 1.4rem;
    opacity: 0.9;
     font-family: 'Poppins', sans-serif;
}

/* SECTION BASE (CLEAN WHITE PREMIUM LOOK) */
.about-section {
    padding: 110px 0;
    background: #ffffff;
}

/* IMAGE SIDE (FLOATING PREMIUM CARD) */
.about-image {
    position: relative;
    border-radius: 22px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
    transform: translateY(0);
    transition: all 0.5s ease;
}

/* SUBTLE FLOAT EFFECT */
.about-image:hover {
    transform: translateY(-8px);
    box-shadow: 0 30px 70px rgba(0,0,0,0.12);
}

/* IMAGE */
.about-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.7s ease;
}

/* ZOOM ON HOVER */
.about-image:hover img {
    transform: scale(1.06);
}

/* TEXT TAG (MINIMAL PREMIUM STYLE) */
.section-tag {
    display: inline-block;
    font-size: 0.78rem;
    font-weight: 600;
    letter-spacing: 1px;
    color: #0077b6;
    text-transform: uppercase;
    margin-bottom: 12px;
    position: relative;
}

/* SMALL ACCENT LINE */
.section-tag::after {
    content: "";
    display: block;
    width: 40px;
    height: 2px;
    background: #0077b6;
    margin-top: 6px;
    border-radius: 5px;
}

/* TITLE (MORE EDITORIAL STYLE) */
.about-section h2 {
    font-size: 2.6rem;
    font-weight: 700;
    color: #111;
    margin-bottom: 22px;
    line-height: 1.2;
     font-family: 'Ubuntu', sans-serif;
}

/* PARAGRAPH (READABILITY PREMIUM) */
.about-section p {
    font-size: 1.08rem;
    line-height: 1.9;
    color: #555;
    margin-bottom: 16px;
     font-family: 'Poppins', sans-serif;
}

/* RIGHT SIDE CONTENT CARD (VERY SUBTLE LAYERING) */
.about-section .col-lg-6:last-child {
    padding: 40px;
    border-radius: 20px;
    background: #ffffff;
    border: 1px solid rgba(0,0,0,0.06);
    box-shadow: 0 10px 30px rgba(0,0,0,0.04);
    position: relative;
}

/* SOFT ACCENT BORDER LINE (LEFT SIDE) */
.about-section .col-lg-6:last-child::before {
    content: "";
    position: absolute;
    left: 0;
    top: 20%;
    height: 60%;
    width: 3px;
    background: linear-gradient(to bottom, #0077b6, transparent);
    border-radius: 10px;
}

/* RESPONSIVE */
@media (max-width: 992px) {
    .about-section {
        padding: 70px 0;
    }

    .about-section h2 {
        font-size: 2rem;
    }

    .about-section .col-lg-6:last-child {
        padding: 25px;
    }
}

/* =========================
   SECTION BASE
========================= */
.purpose-showcase {
    padding: 100px 0;
    background: #ffffff;
}

/* =========================
   GLOBAL TEXT SMOOTHING
========================= */
body {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

/* =========================
   LEFT CONTENT
========================= */
.purpose-text {
    padding-right: 30px;
}

/* =========================
   SECTION TAG
========================= */
.section-tag {
    display: inline-block;
    font-size: 0.75rem;
    font-weight: 700;
    color: #0077b6;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 12px;
    position: relative;
    padding-left: 18px;
}

.section-tag::before {
    content: "";
    width: 10px;
    height: 2px;
    background: #0077b6;
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
}

/* =========================
   MAIN HEADINGS
========================= */
.purpose-text h2,
.purpose-features h2 {
    font-size: 2.6rem;
    font-weight: 700;
    color: #0b1d2a;
    margin-bottom: 18px;
    position: relative;
    line-height: 1.2;
    font-family: 'Ubuntu', sans-serif;
}

.purpose-text h2::after,
.purpose-features h2::after {
    content: "";
    width: 55px;
    height: 4px;
    background: linear-gradient(90deg, #0077b6, #00b4d8);
    position: absolute;
    left: 0;
    bottom: -8px;
    border-radius: 10px;
}

/* =========================
   LEAD TEXT
========================= */
.lead-text {
    font-size: 1.05rem;
    color: #5a6a75;
    line-height: 1.75;
    margin-bottom: 25px;
     font-family: 'Poppins', sans-serif;
}

/* =========================
   PURPOSE TEXT BLOCKS
========================= */
.purpose-block h4 {
    font-size: 1.2rem;
    font-weight: 700;
    margin-top: 22px;
    margin-bottom: 6px;
    color: #0b1d2a;
    position: relative;
    padding-left: 14px;
     font-family: 'Ubuntu', sans-serif;
}

.purpose-block h4::before {
    content: "";
    width: 4px;
    height: 16px;
    background: #0077b6;
    position: absolute;
    left: 0;
    top: 4px;
    border-radius: 2px;
}

.purpose-block p {
    font-size: 0.95rem;
    color: #5a6a75;
    line-height: 1.75;
    margin-bottom: 10px;
     font-family: 'Poppins', sans-serif;
}

/* =========================
   FEATURES SECTION
========================= */
.purpose-features {
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.purpose-features h2 {
    margin-top: 10px;
     font-family: 'Ubuntu', sans-serif;
}

/* FEATURE ITEM */
.feature-item {
    display: flex;
    gap: 14px;
    align-items: flex-start;
    transition: 0.3s ease;
}

/* ICON */
.feature-item .icon {
    width: 45px;
    height: 45px;
    background: rgba(0,119,182,0.08);
    color: #0077b6;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    flex-shrink: 0;
    transition: 0.3s ease;
}

.feature-item:hover .icon {
    background: #0077b6;
    color: #fff;
    transform: scale(1.08);
}

/* FEATURE TEXT */
.feature-item h5 {
    font-size: 1.05rem;
    font-weight: 700;
    margin-bottom: 5px;
    color: #0b1d2a;
     font-family: 'Ubuntu', sans-serif;
}

.feature-item p {
    font-size: 0.92rem;
    color: #5a6a75;
    margin: 0;
    line-height: 1.7;
     font-family: 'Poppins', sans-serif;
}

/* =========================
   IMAGE GRID (TOP RIGHT)
========================= */
.image-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-template-rows: 1fr 1fr;
    gap: 15px;
    height: 480px;
}

.img {
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 18px 45px rgba(0,0,0,0.12);
    transition: 0.3s ease;
}

.img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.img-main {
    grid-row: span 2;
}

.img:hover {
    transform: translateY(-6px);
}

/* =========================
   APPROACH IMAGE (BOTTOM LEFT)
========================= */
.approach-image {
    width: 100%;
    height: 100%;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 18px 45px rgba(0,0,0,0.12);
    display: flex;
}

.approach-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Desktop height balance */
@media (min-width: 992px) {
    .approach-image {
        min-height: 520px;
    }
}

/* =========================
   RESPONSIVE
========================= */
@media (max-width: 992px) {

    .purpose-text {
        padding-right: 0;
    }

    .purpose-text h2,
    .purpose-features h2 {
        font-size: 2rem;
    }

    .image-grid {
        height: 350px;
        margin-top: 25px;
    }

    .approach-image {
        margin-bottom: 25px;
    }
}

/* =========================
   BASE SECTION
========================= */
.ppia-system {
    padding: 100px 0;
    background: #f6f9fc;
}

/* =========================
   HEADER
========================= */
.section-header {
    margin-bottom: 40px;
}

.section-header h2 {
    font-size: 2.2rem;
    font-weight: 700;
    color: #111;
    font-family: 'Ubuntu', sans-serif;
}

.section-header p {
    color: #666;
    font-size: 1rem;
    font-family: 'Poppins', sans-serif;
    max-width: 650px;
    margin: 10px auto 0;
}

/* =========================
   PILLAR CARD (MAIN STRUCTURE)
========================= */
.pillar-card {
    background: #fff;
    border-radius: 16px;
    padding: 25px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.pillar-card h3 {
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 18px;
     font-family: 'Ubuntu', sans-serif;
}

/* =========================
   TIMELINE STYLE (STRATEGIC MODEL)
========================= */
.timeline {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.step {
    display: flex;
    gap: 12px;
    align-items: flex-start;
}

.step i {
    color: #00a6fb;
    font-size: 1.1rem;
    margin-top: 4px;
}

.step h5 {
    margin: 0;
    font-size: 1rem;
    font-weight: 700;
    font-family: 'ubuntu', sans-serif;
}

.step p {
    margin: 3px 0 0;
    font-size: 0.92rem;
    color: #666;
    line-height: 1.6;
     font-family: 'Poppins', sans-serif;
      font-family: 'Poppins', sans-serif;

}

/* =========================
   VALUES
========================= */
.value-list {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;

}

.value-list span {
    background: rgba(0,166,251,0.08);
    color: #0077b6;
    padding: 7px 12px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    display: flex;
    gap: 6px;
    align-items: center;
     font-family: 'Poppins', sans-serif;
}

/* =========================
   GRID LIST (WHO WE SERVE)
========================= */
.grid-list {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
}

.grid-list div {
    background: #f1f5f9;
    padding: 12px;
    border-radius: 12px;
    font-weight: 600;
    font-size: 0.9rem;
    display: flex;
    gap: 8px;
    align-items: center;
}

/* =========================
   COMMITMENT CARD (HIGHLIGHT)
========================= */
.commit-card {
    background: linear-gradient(135deg, #0077b6, #00b4d8);
    padding: 25px;
    border-radius: 16px;
    color: #fff;
}

.commit-card h3 {
    color: #fff;
     font-family: 'Ubuntu', sans-serif;
}

.commit-card p {
    color: #eaf6ff;
    font-size: 0.95rem;
    line-height: 1.7;
    font-family: 'Poppins', sans-serif;
}

/* =========================
   RESPONSIVE
========================= */
@media (max-width: 992px) {
    .grid-list {
        grid-template-columns: 1fr;
    }
}


/* QUOTE */
.quote-section {
    background: #0077b6;
    color: #fff;
    padding: 60px 20px;
}

.quote-section blockquote {
    font-size: 1.5rem;
    font-style: italic;
}


/* =========================
   SECTION BASE
========================= */
.ngo-objectives {
    padding: 110px 0;
    background: #f4f7fb;
}

/* =========================
   HEADER (NGO STYLE)
========================= */
.ngo-header {
    margin-bottom: 50px;
}

.ngo-header h2 {
    font-size: 2.4rem;
    font-weight: 700;
    color: #0b1f3a;
    letter-spacing: -0.5px;
     font-family: 'Ubuntu', sans-serif;
}

.ngo-header p {
    font-size: 1.05rem;
    color: #5b6b7a;
    margin-top: 10px;
    font-family: 'Poppins', sans-serif;
}

/* =========================
   CARD (INTERNATIONAL STYLE)
========================= */
.ngo-card {
    background: #ffffff;
    padding: 30px 28px;
    border-radius: 18px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.06);
    border: 1px solid rgba(11,31,58,0.06);
    position: relative;
    transition: all 0.3s ease;
    height: 100%;
}

/* HOVER */
.ngo-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 50px rgba(0,0,0,0.10);
}

/* =========================
   NUMBER BADGE (VERY NGO STYLE)
========================= */
.ngo-number {
    position: absolute;
    top: 18px;
    right: 18px;
    font-size: 0.85rem;
    font-weight: 700;
    color: #0077b6;
    background: rgba(0,119,182,0.08);
    padding: 6px 10px;
    border-radius: 20px;
}

/* =========================
   ICON BADGE
========================= */
.ngo-icon {
    width: 46px;
    height: 46px;
    background: #eaf6ff;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 14px;
    color: #0077b6;
    font-size: 1.2rem;
}

/* =========================
   TEXT
========================= */
.ngo-card h5 {
    font-size: 1.05rem;
    font-weight: 700;
    color: #0b1f3a;
    margin-bottom: 10px;
     font-family: 'Ubuntu', sans-serif;
}

.ngo-card p {
    font-size: 0.95rem;
    color: #5b6b7a;
     font-family: 'Poppins', sans-serif;
    line-height: 1.7;
    margin: 0;
}

/* =========================
   RESPONSIVE
========================= */
@media (max-width: 768px) {
    .ngo-header h2 {
        font-size: 2rem;
    }

    .ngo-card {
        padding: 25px;
    }
}


/* =========================
   SECTION BASE
========================= */
.impact-section {
    padding: 110px 0;
    background: #f4f7fb;
}

/* =========================
   HEADER (NGO STYLE)
========================= */
.impact-header {
    margin-bottom: 50px;
}

.impact-header h2 {
    font-size: 2.4rem;
    font-weight: 700;
    color: #0b1f3a;
    letter-spacing: -0.5px;
     font-family: 'Ubuntu', sans-serif;
}

.impact-header p {
    font-size: 1.05rem;
    color: #5b6b7a;
    margin-top: 8px;
     font-family: 'Poppins', sans-serif;
}

/* =========================
   FORCE EQUAL HEIGHT SYSTEM
========================= */
.impact-row {
    display: flex;
    align-items: stretch;
}

/* Make Bootstrap columns behave properly */
.impact-row > .col-lg-6 {
    display: flex;
}

/* =========================
   LEFT CARD (APPROACH)
========================= */
.impact-card {
    background: #ffffff;
    padding: 32px;
    border-radius: 18px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.06);
    border: 1px solid rgba(0,0,0,0.04);

    height: 100%;
    width: 100%;

    display: flex;
    flex-direction: column;
    justify-content: center;
}

.impact-card h3 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #0b1f3a;
    margin-bottom: 18px;
     font-family: 'Ubuntu', sans-serif;
}

.impact-card p {
    font-size: 0.98rem;
    color: #5b6b7a;
    line-height: 1.8;
    margin-bottom: 14px;
        font-family: 'Poppins', sans-serif;
}

/* Highlight statement (VERY IMPORTANT NGO STYLE) */
.highlight-text {
    font-weight: 600;
    color: #0077b6;
    border-left: 4px solid #0077b6;
    padding-left: 14px;
    margin-top: 10px;
      font-family: 'poppins', sans-serif;
}

/* =========================
   RIGHT KPI GRID
========================= */
.impact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 18px;

    width: 100%;
    height: 100%;
}

/* =========================
   KPI CARD (NGO DASHBOARD STYLE)
========================= */
.kpi-card {
    background: #ffffff;
    padding: 28px;
    border-radius: 16px;
    text-align: center;
    box-shadow: 0 12px 35px rgba(0,0,0,0.06);
    border: 1px solid rgba(0,0,0,0.04);

    transition: all 0.3s ease;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

/* HOVER EFFECT */
.kpi-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 45px rgba(0,0,0,0.10);
}

/* ICON */
.kpi-card i {
    font-size: 1.4rem;
    color: #0077b6;
    margin-bottom: 10px;
    font-family: 'poppins', sans-serif;
}

/* NUMBER */
.kpi-card h3 {
    font-size: 2rem;
    font-weight: 700;
    color: #0b1f3a;
    margin: 5px 0;
     font-family: 'Ubuntu', sans-serif;
}

/* LABEL */
.kpi-card p {
    font-size: 0.9rem;
    color: #5b6b7a;
    margin: 0;
    font-family: 'poppins', sans-serif;
}

/* =========================
   RESPONSIVE DESIGN
========================= */
@media (max-width: 992px) {

    .impact-row {
        flex-direction: column;
    }

    .impact-grid {
        grid-template-columns: 1fr;
    }

    .impact-card {
        padding: 25px;
    }
}
</style>