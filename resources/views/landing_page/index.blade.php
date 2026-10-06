@extends('layouts.guest.app')

@section('content')
    @include('landing_page.partials.banner_slider')

    <!-- COUNTERS SECTION -->
    <section class="py-5">
        <div class="container" id="ourMission">
            <div class="row g-4 text-center">
                <div class="col-md-3">
                    <div class="glass-card p-4 shadow-sm bg-white">
                        <h2 class="display-6 fw-bold text-info-ppi mb-1">
                            <span class="counter" data-target="500">0</span>+
                        </h2>
                        <p class="text-muted mb-0">Youth Impacted</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="glass-card p-4 shadow-sm bg-white">
                        <h2 class="display-6 fw-bold text-info-ppi mb-1">
                            <span class="counter" data-target="12">0</span>+
                        </h2>
                        <p class="text-muted mb-0">Active Programs</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="glass-card p-4 shadow-sm bg-white">
                        <h2 class="display-6 fw-bold text-info-ppi mb-1">
                            <span class="counter" data-target="15">0</span>+
                        </h2>
                        <p class="text-muted mb-0">Expert Mentors</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="glass-card p-4 shadow-sm bg-white">
                        <h2 class="display-6 fw-bold text-info-ppi mb-1">
                            <span class="counter" data-target="100">0</span>+
                        </h2>
                        <p class="text-muted mb-0">Dedication</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<section class="about-modern">

    <div class="container">

        <!-- TOP SECTION -->
        <div class="about-grid">

            <!-- LEFT: ABOUT -->
            <div class="about-left">
                <h6 class="section-label">ABOUT US</h6>

                <p>
                   Potential Pioneers Initiatives (PPI) is a Non-Governmental Organization (NGO) registered under <b>Act No. 24 of 2002</b>with the registration number <b>00NGO/R/8334.</b>
                </p>

                <p>
                  We empower children and youth in Tanzania by unlocking their potential, promoting structured talent development, and nurturing purposeful living. We believe that every young person carries unique abilities that, when properly identified and developed,
                  can translate into lifelong impact for individuals, families, and society.
                </p>
            </div>

            <!-- RIGHT: CORE VALUES -->
            <div class="about-right">
                <h6 class="section-label text-center">CORE VALUES</h6>

                <div class="values-grid">

                    <div class="value-box active">
                        <span class="material-symbols-outlined">verified</span>
                        <p>Integrity</p>
                    </div>

                    <div class="value-box">
                        <span class="material-symbols-outlined">emoji_events</span>
                        <p>Excellence</p>
                    </div>

                    <div class="value-box highlight">
                        <span class="material-symbols-outlined">lightbulb</span>
                        <p>Innovation</p>
                    </div>

                    <div class="value-box">
                        <span class="material-symbols-outlined">diversity_3</span>
                        <p>Inclusion</p>
                    </div>

                    <div class="value-box">
                        <span class="material-symbols-outlined">flag</span>
                        <p>Purpose</p>
                    </div>

                </div>
            </div>

        </div>

        <!-- PROJECTS -->
        <div class="projects-modern">

            <div class="projects-header">
                <h6 class="section-label">FEATURED PROJECTS</h6>
                <h6 class="section-label text-end">IMPACT SNAPSHOT</h6>
            </div>

            <div class="projects-grid">

                <!-- CARD 1 -->
                <div class="project-card blue">
                    <img src="{{ asset('assets/images/5.jpeg') }}" alt="Project">

                    <div class="project-body">
                        <h5>The Power in Me</h5>

                        <div class="project-stat">
                            🎓 <strong>1,200+</strong>
                        </div>

                        <small>Empowered young leaders</small>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="project-card yellow">
                    <img src="{{ asset('assets/images/events/bg.jpeg') }}" alt="Project">

                    <div class="project-body">
                        <h5>Coding for Kids</h5>

                        <div class="project-stat">
                            💻 <strong>200+</strong>
                        </div>

                        <small>Students trained in tech</small>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="project-card green">
                    <img src="{{ asset('assets/images/love destination 2.jpeg') }}" alt="Project">

                    <div class="project-body">
                        <h5>Love Destination</h5>

                        <div class="project-stat">
                            ❤️ <strong>25+</strong>
                        </div>

                        <small>Mentorship sessions</small>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<style>
/* =========================
   ABOUT SECTION
========================= */
.about-modern {
    font-family: 'Poppins', sans-serif;
    background: #f5f7fa;
    padding: 80px 20px;
}

/* GRID */
.about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin-bottom: 60px;
}

/* LABEL */
.section-label {
    font-size: 12px;
    font-weight: 600;
    color: #6c757d;
    margin-bottom: 12px;
    letter-spacing: 1px;
}

/* ABOUT TEXT */
.about-left p {
    color: #555;
    line-height: 1.7;
    margin-bottom: 15px;
}

/* =========================
   CORE VALUES
========================= */
.values-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 12px;
}

.value-box {
    background: #e9ecef;
    text-align: center;
    padding: 16px 10px;
    border-radius: 6px;
    transition: 0.3s;
}

.value-box span {
    font-size: 24px;
    display: block;
    margin-bottom: 6px;
}

.value-box p {
    font-size: 13px;
    margin: 0;
}

/* Active + Highlight */
.value-box.active {
    background: #1e88e5;
    color: #fff;
}

.value-box.highlight {
    background: #ffc107;
    color: #000;
}

/* =========================
   PROJECTS
========================= */
.projects-header {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.projects-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.project-card {
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    transition: 0.3s;
    border-top: 5px solid transparent;
}

.project-card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
}

.project-body {
    padding: 15px;
    text-align: center;
}

.project-body h5 {
    font-size: 15px;
    font-weight: 600;
    margin-bottom: 8px;
}

.project-stat {
    font-size: 20px;
    margin-bottom: 5px;
}

/* COLOR BORDERS */
.project-card.blue {
    border-top-color: #1e88e5;
}

.project-card.yellow {
    border-top-color: #ffc107;
}

.project-card.green {
    border-top-color: #43a047;
}

/* =========================
   MOBILE
========================= */
@media (max-width: 992px) {

    .about-grid {
        grid-template-columns: 1fr;
    }

    .values-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .projects-grid {
        grid-template-columns: 1fr;
    }

    .projects-header {
        flex-direction: column;
        gap: 5px;
    }
}
</style>

   <section class="objectives-modern">
    <div class="container">

        <div class="objectives-grid">

            <!-- IMAGE -->
            <div class="objectives-image">
                <img src="assets/images/objective.jpeg" alt="Youth Empowerment">
            </div>

            <!-- CONTENT -->
            <div class="objectives-content">

             
                <h2 class="section-title" style="color: #0b1d2a;">Our Objectives</h2>

                <div class="objectives-list">

    <div class="objective-item">
        <div class="icon"><i class="fas fa-bolt"></i></div>
        <p>To empower youth & children to solve real-world challenges using their talents.</p>
    </div>

    <div class="objective-item">
        <div class="icon"><i class="fas fa-lightbulb"></i></div>
        <p>To identify opportunities within talents to improve employability.</p>
    </div>

    <div class="objective-item">
        <div class="icon"><i class="fas fa-book-open"></i></div>
        <p>To educate communities on socio-economic issues tied to talent development.</p>
    </div>

    <div class="objective-item">
        <div class="icon"><i class="fas fa-compass"></i></div>
        <p>To develop talents through training, exposure, and networking.</p>
    </div>

    <div class="objective-item">
        <div class="icon"><i class="fas fa-comments"></i></div>
        <p>To foster self-awareness and independence among youth and children.</p>
    </div>

</div>

            </div>

        </div>

    </div>
</section>


    <!-- PROGRAMS SECTION -->
    

    @include('landing_page.partials.ppi_programs')
    @include('landing_page.partials.contact-section')
    @include('landing_page.partials.modal')
@endsection

<style>
    /* ==========================
   GLOBAL STYLING
========================== */
body {
    line-height: 1.6;
}

/* GRADIENT TEXT */
.text-gradient {
    background: linear-gradient(45deg, #00b4d8, #0077b6);
    -webkit-text-fill-color: transparent;
}

/* ==========================
   ABOUT SECTION
========================== */
.about-premium {
    background: linear-gradient(180deg, #f8fbff, #ffffff);
    position: relative;
    padding: 80px 0;
}

/* ==========================
   TEXT IMPROVEMENTS
========================== */
.about-premium h2 {
    color: #0b1d2a;
    line-height: 1.2;
    font-family: 'ubuntu', sans-serif;
}

.text-gradient {
    background: linear-gradient(45deg, #00b4d8, #0077b6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* ==========================
   HIGHLIGHT BOX
========================== */
.about-highlight {
    background: rgba(0,119,182,0.08);
    border-left: 4px solid #0077b6;
    border-radius: 8px;
    font-weight: 500;
    color: #0b1d2a;
}

/* ==========================
   BUTTON (FIXED FOR MOBILE)
========================== */
.btn-premium {
    background: linear-gradient(45deg, #00b4d8, #0077b6);
    color: #fff;
    font-weight: 600;
    border: none;
    transition: all 0.3s ease;
    display: inline-block;
}

.btn-premium:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0,119,182,0.3);
    color: #fff;
}

/* ==========================
   ABOUT IMAGE (NEW)
========================== */
.about-image {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 25px 60px rgba(0,0,0,0.15);
}

.about-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.5s ease;
}

.about-image:hover img {
    transform: scale(1.05);
}

/* subtle overlay */
.about-image::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to top,
        rgba(0,0,0,0.25),
        rgba(0,0,0,0)
    );
}

/* ==========================
   DECORATIVE SHAPE
========================== */
.about-shape {
    position: absolute;
    top: -80px;
    right: -80px;
    width: 250px;
    height: 250px;
    background: rgba(0,180,216,0.08);
    border-radius: 50%;
    z-index: 0;
}

/* ==========================
   DESKTOP HEIGHT BALANCE
========================== */
@media (min-width: 992px) {
    .about-image {
        min-height: 420px;
    }
}

/* ==========================
   MOBILE OPTIMIZATION
========================== */
@media (max-width: 768px) {

    .about-premium {
        padding: 60px 0;
    }

    /* Improve heading size */
    .about-premium h2 {
        font-size: 1.9rem;
    }

    /* Make button FULL WIDTH and visible */
    .btn-premium {
        display: block;
        width: 100%;
        text-align: center;
        margin-top: 20px;
        padding: 14px 20px;
        font-size: 1rem;
    }

    /* Add spacing so it doesn't stick to edge */
    .about-premium .container > a {
        margin-top: 25px;
        font-family: 'poppins', sans-serif;
    }

    /* Improve spacing */
    .about-highlight {
        font-size: 0.95rem;
    }
}

/* =========================
   OBJECTIVES MODERN
========================= */
.objectives-modern {
    padding: 100px 20px;
    background: linear-gradient(to right, #f8fafc, #ffffff);
    font-family: 'Poppins', sans-serif;
}

/* GRID */
.objectives-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

/* IMAGE */
.objectives-image {
    position: relative;
}

.objectives-image img {
    width: 100%;
    height: 100%;
    border-radius: 20px;
    object-fit: cover;
    box-shadow: 0 30px 70px rgba(0,0,0,0.15);
}

/* subtle floating effect */
.objectives-image::after {
    content: "";
    position: absolute;
    inset: 20px -20px -20px 20px;
    background: rgba(0, 180, 216, 0.15);
    border-radius: 20px;
    z-index: -1;
}

/* CONTENT */
.objectives-content {
    max-width: 550px;
}

/* TAG */
.section-tag {
    display: inline-block;
    font-size: 13px;
    font-weight: 600;
    color: #00b4d8;
    background: rgba(0,180,216,0.1);
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 15px;
}

/* TITLE */
.section-title h2 {
     font-family: 'Ubuntu', sans-serif;
    font-size: 2.6rem;
    font-weight: 700;
    margin-bottom: 30px;
    color: #0b1d2a;
}

/* LIST */
.objectives-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

/* ITEM */
.objective-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 16px 18px;
    background: #ffffff;
    border-radius: 12px;
    transition: 0.3s ease;
    border: 1px solid #f1f1f1;
}

/* hover */
.objective-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

/* ICON */
.icon {
    min-width: 42px;
    height: 42px;
    background: linear-gradient(135deg, #00b4d8, #0077b6);
    border-radius: 10px; /* modern square instead of circle */
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 16px;
    transition: 0.3s ease;
}

/* hover animation */
.objective-item:hover .icon {
    transform: scale(1.1);
    box-shadow: 0 8px 20px rgba(0,180,216,0.4);
}

/* TEXT */
.objective-item p {
    margin: 0;
    font-size: 15px;
    color: #444;
    line-height: 1.6;
}

/* RESPONSIVE */
@media (max-width: 992px) {
    .objectives-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .objectives-content {
        max-width: 100%;
    }

    .section-title {
        font-size: 2rem;
    }
}
/* ==========================
   PROJECTS SECTION - PREMIUM
========================== */
/* SECTION */
.projects-section {
    padding: 100px 0;
    background: linear-gradient(180deg, #f7fbff 0%, #ffffff 100%);
}

.project-section h2{
    color: #0b1d2a;
    line-height: 1.2;
     font-family: 'Ubuntu', sans-serif;
}

/* HEADER */
.section-header {
    max-width: 700px;
    margin: auto;
    margin-bottom: 60px;
}

.section-tag {
    display: inline-block;
    font-size: 0.8rem;
    font-weight: 600;
    color: #0077b6;
    background: rgba(0,119,182,0.1);
    padding: 6px 14px;
    border-radius: 20px;
    margin-bottom: 15px;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #0a0a0a;
     font-family: 'Ubuntu', sans-serif;
}

/* CARD */
.project-card {
    background: rgba(255,255,255,0.8);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 30px;
    height: 100%;
    position: relative;
    transition: all 0.4s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

/* BORDER GLOW EFFECT */
.project-card::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 20px;
    border: 1px solid transparent;
    background: linear-gradient(120deg, #00b4d8, #0077b6) border-box;
    -webkit-mask:
        linear-gradient(#fff 0 0) padding-box,
        linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    opacity: 0;
    transition: 0.4s;
}

.project-card:hover::after {
    opacity: 1;
}

.project-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 60px rgba(0,0,0,0.12);
}

/* TOP AREA */
.project-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

/* ICON */
.project-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #00b4d8, #0077b6);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 28px;
    transition: 0.3s;
}

.project-card:hover .project-icon {
    transform: rotate(8deg) scale(1.1);
}

/* FOCUS BADGE */
.project-focus {
    font-size: 0.75rem;
    font-weight: 600;
    color: #0077b6;
    background: rgba(0,119,182,0.08);
    padding: 6px 10px;
    border-radius: 10px;
}

/* TEXT */
.project-card h4 {
    font-weight: 700;
    margin-bottom: 12px;
    font-family: 'Ubuntu', sans-serif;
}

.project-card p {
    color: #555;
    line-height: 1.6;
    margin-bottom: 25px;
     font-family: 'Poppins', sans-serif;
}

/* LINK */
.project-link {
    font-weight: 700;
    color: #0077b6;
    text-decoration: none;
    position: relative;
    display: inline-block;
}

.project-link::after {
    content: "";
    width: 0%;
    height: 2px;
    background: #0077b6;
    position: absolute;
    left: 0;
    bottom: -4px;
    transition: 0.3s;
}

.project-link:hover::after {
    width: 100%;
}

/* RESPONSIVE */
@media (max-width: 992px) {
    .section-title {
        font-size: 2rem;
    }
}

@media (max-width: 576px) {
    .projects-section {
        padding: 60px 0;
    }
}
</style>