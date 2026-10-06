@extends('layouts.app')

@section('content')

<!-- PROGRAMS HERO -->
<section class="programs-hero">
    <div class="overlay"></div>

    <div class="container text-center">
        <h1>Empowering Youth Through <br> Purpose-Driven Programs</h1>
        <p>
            Discover the initiatives shaping a generation of innovators, 
            leaders, and change-makers.
        </p>
    </div>
</section>

<!-- INTRO SECTION -->
<section class="programs-intro">

    <div class="container">

        <div class="intro-card">

            <!-- LEFT CONTENT -->
            <div class="intro-content">
                <h2>Turning Potential Into Purpose</h2>

                <p>
                    At Potential Pioneers Initiatives (PPI), our programs are designed to unlock young people’s
                    potential by connecting their talents with real-world opportunities.
                </p>

                <p>
                    Through our flagship projects, we nurture creativity, instill confidence, and empower youth
                    to use their gifts to solve community challenges.
                </p>

                <p>
                    Our initiatives span across talent development, technology, leadership, and emotional growth,
                    ensuring that every participant emerges not only skilled, but inspired to lead with purpose.
                </p>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="intro-image">
                <img src="{{asset('assets/images/love destination 2.jpeg')}}" alt="Youth Programs">
            </div>

        </div>

    </div>

</section>

<section class="programs-section">

    <div class="container">

        <!-- HEADER -->
        <div class="programs-header text-center">
            <h3>Our Programs</h3>
            <p>
                Transformative initiatives designed to unlock potential, build skills, and empower youth
                to lead with purpose.
            </p>
        </div>

        <!-- ROW 1 (3 CARDS) -->
        <div class="programs-row three">

            <div class="program-card">
                <div class="icon-box"><i class="fas fa-lightbulb"></i></div>
                <h4>Talent Discovery</h4>
                <p>We conduct assessment-based workshops that identify natural abilities, strengths, and
                  growth areas, providing each participant with a clear development pathway.</p>
            </div>

            <div class="program-card">
                <div class="icon-box"><i class="fas fa-laptop-code"></i></div>
                <h4>Skills Training</h4>
                <p>We deliver competency-based programs in digital literacy, entrepreneurship, creative
                industries, financial education, and life skills, ensuring practical and market-relevant
                learning.</p>
            </div>

            <div class="program-card">
                <div class="icon-box"><i class="fas fa-user-friends"></i></div>
                <h4>Mentorship</h4>
                <p>We connect young people with professionals and leaders who provide structured
                    guidance, accountability, and long-term career navigation support.</p>
            </div>

        </div>

        <!-- ROW 2 (2 CENTERED CARDS) -->
        <div class="programs-row two">

            <div class="program-card">
                <div class="icon-box"><i class="fas fa-globe-africa"></i></div>
                <h4>Community Exposure</h4>
                <p>Through competitions, innovation challenges, and showcase events, we provide platforms
                for youth to present their ideas, talents, and solutions to real-world challenges.</p>
            </div>

            <div class="program-card">
                <div class="icon-box"><i class="fas fa-chart-line"></i></div>
                <h4>Consultation & Advisory</h4>
                <p>We offer professional consulting in talent assessment, career direction coaching, youth
                leadership programs, parental guidance, and financial mindset development.</p>
            </div>

        </div>

    </div>

</section>


<!-- FLAGSHIP PROJECTS -->
<section class="flagship-projects">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header text-center">
            <h2>Our Flagship Projects</h2>
            <p>Transforming lives through purpose-driven programs and impactful experiences.</p>
        </div>

        <!-- PROJECT 1 -->
        <div class="project-row">

            <div class="project-image">
                <img src="{{asset('assets/images/mwanza3.jpeg')}}" alt="The Power in Me">
            </div>

            <div class="project-content">
                <h3>The Power in Me</h3>

                <p>
                    The Power in Me is our flagship program that empowers youth to achieve their dreams
                    by fostering self-belief, resilience, and strategic thinking.
                </p>

                <p>
                    Through mentorship sessions, workshops, and experiential learning, the program builds
                    confidence, emotional intelligence, and visionary leadership.
                </p>

                <!-- PILLARS -->
                <ul class="pillars">
                    <li>Self-awareness and identity development</li>
                    <li>Emotional and mental resilience</li>
                    <li>Values-based leadership</li>
                    <li>Goal setting and decision-making</li>
                </ul>

                <!-- IMPACT -->
                <div class="impact">
                    <div><strong>600+</strong><span>Youth Trained</span></div>
                    <div><strong>20</strong><span>Leadership Camps</span></div>
                    <div><strong>8</strong><span>Communities Reached</span></div>
                </div>

                <!-- QUOTE -->
                <blockquote>
                    “The Power in Me taught me to see myself not as a problem but as a solution.”
                    <span>– Participant, Mwanza</span>
                </blockquote>

                <!-- CTA -->
                <div class="project-btns">
                    <a href="#" class="btn-primary">Join the Program</a>
                    <a href="#" class="btn-outline">Learn More</a>
                </div>
            </div>
        </div>

        <!-- PROJECT 2 -->
        <div class="project-row reverse">

            <div class="project-image">
                <img src="{{asset('assets/images/love destination 1.jpeg')}}" alt="Love Destination">
            </div>

            <div class="project-content">
                <h3>Love Destination</h3>

                <p>
                    Love Destination shapes emotionally intelligent and value-driven youth by helping them
                    understand relationships, purpose, and empathy.
                </p>

                <!-- FOCUS -->
                <ul class="pillars">
                    <li>Emotional wellness and empathy building</li>
                    <li>Positive relationships and communication</li>
                    <li>Purpose-driven mentorship</li>
                    <li>Faith and values education</li>
                </ul>

                <!-- ACTIVITIES -->
                <ul class="activities">
                    <li>Mentorship circles</li>
                    <li>Peer dialogue sessions</li>
                    <li>Workshops & trainings</li>
                </ul>

                <!-- IMPACT -->
                <div class="impact">
                    <div><strong>400+</strong><span>Youth Mentored</span></div>
                    <div><strong>12</strong><span>Workshops</span></div>
                    <div><strong>5</strong><span>Cohorts</span></div>
                </div>

                <!-- QUOTE -->
                <blockquote>
                    “True leadership starts with love, for self and others.”
                    <span>– Participant, Dar es Salaam</span>
                </blockquote>

                <!-- CTA -->
                <div class="project-btns">
                    <a href="#" class="btn-primary">Be Part of the Journey</a>
                    <a href="#" class="btn-outline">Learn More</a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- OTHER INITIATIVES & GET INVOLVED -->
<section class="impact-cta">
    <div class="container">

        <!-- PARTNERSHIP SECTION -->
        <div class="impact-grid">

            <div class="impact-text">
                <h2>Expanding Our Impact Through Partnerships</h2>
                <p>
                    In addition to our flagship programs, PPI collaborates with schools, 
                    community centers, and NGOs to broaden reach and promote inclusive 
                    youth empowerment initiatives.
                </p>
                <p>
                    Our future projects focus on digital inclusion, entrepreneurship training, 
                    and community innovation labs, ensuring more youth across Tanzania benefit 
                    from opportunities that unlock their potential.
                </p>
            </div>

            <div class="impact-card">
                <h4>Our Focus Areas</h4>
                <ul>
                    <li>Digital Inclusion Programs</li>
                    <li>Entrepreneurship Training</li>
                    <li>Community Innovation Labs</li>
                    <li>Youth Capacity Building</li>
                </ul>
            </div>

        </div>

        <!-- GET INVOLVED -->
        <div class="cta-box text-center">
            <h2>You Can Make a Difference</h2>
            <p>
                Whether you’re a volunteer, donor, or organization seeking partnership,
                you can become part of the movement transforming young lives across Tanzania.
            </p>

            <p>
                By supporting our programs, you help us train more youth, launch new projects, 
                and expand access to life-changing opportunities.
            </p>

            <!-- BUTTONS -->
            <div class="cta-buttons">
                <a href="#" class="btn-primary">Volunteer With Us</a>
                <a href="#" class="cta-btn-outline">Partner With PPI</a>
                <a href="#" class="btn-donate">Donate Now</a>
            </div>
        </div>

    </div>
</section>



@endsection

<style>
 /* PROGRAMS HERO SECTION */

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.05rem;
    color: #555;
}
.programs-hero {
    position: relative;
    width: 100%;
    /* height: 80vh; */
    background: url('{{asset("assets/images/love destination 3.jpeg") }}') center center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
        padding: 120px 20px;
}

/* DARK OVERLAY */
.programs-hero .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 1;
}

/* CONTENT */
.programs-hero .container {
    position: relative;
    z-index: 2;
    color: #fff;
    max-width: 1000px;
    padding: 20px;
}

/* HEADING */
.programs-hero h1 {
    font-family: 'Ubuntu', sans-serif;
    font-size: 3.4rem;
    font-weight: 800;
    line-height: 1.3;
    margin-bottom: 20px;
}

/* PARAGRAPH */
.programs-hero p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.2rem;
    line-height: 1.6;
    color: #ddd;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .programs-hero {
        height: 70vh;
    }

    .programs-hero h1 {
        font-size: 2.2rem;
    }

    .programs-hero p {
        font-size: 1rem;
    }
}

/* SECTION */
.programs-intro {
    padding: 80px 0px;
    background: #f9fafc;
}

/* MAIN CARD (FULL WIDTH PREMIUM CONTAINER) */
.intro-card {
    width: 100%;
    max-width: 100vmax;
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    align-items: stretch;
    border-radius: 0px;
    overflow: hidden;
    /* background: #ffffff; */
    /* box-shadow: 0 15px 40px rgba(0,0,0,0.08); */
}

/* LEFT CONTENT */
.intro-content {
    padding: 60px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* HEADING */
.intro-content h2 {
    font-size: 2.6rem;
    font-weight: 700;
    color: #0a2540;
    font-family: 'Ubuntu', sans-serif;
    margin-bottom: 25px;
    line-height: 1.3;
}

/* TEXT */
.intro-content p {
    font-size: 1.05rem;
    color: #555;
    line-height: 1.8;
    margin-bottom: 15px;
    font-family: 'Poppins', sans-serif;
}

/* RIGHT IMAGE */
.intro-image {
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.intro-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.5s ease;
}

/* IMAGE HOVER EFFECT */
.intro-card:hover .intro-image img {
    transform: scale(1.05);
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .intro-card {
        grid-template-columns: 1fr;
    }

    .intro-content {
        padding: 30px;
        text-align: center;
    }

    .intro-content h2 {
        font-size: 2rem;
    }

    .intro-image {
        height: 300px;
    }
}


/* SECTION (WHITE PREMIUM BACKGROUND) */
.programs-section {
    padding: 100px 20px;
    background: #ffffff;
}

/* HEADER */
.programs-header h3 {
    font-size: 2.6rem;
    font-family: 'Ubuntu', sans-serif;
    font-weight: 700;
    color: #0a2540;
    margin-bottom: 10px;
}

.programs-header p {
    font-size: 1.05rem;
    font-family: 'Poppins', sans-serif;
    color: #666;
    max-width: 700px;
    margin: 0 auto 60px;
    line-height: 1.7;
}

/* ROWS */
.programs-row {
    display: flex;
    gap: 25px;
    justify-content: center;
    margin-bottom: 30px;
}

/* 3 CARD ROW */
.programs-row.three .program-card {
    flex: 1;
    max-width: 320px;
}

/* 2 CARD ROW (CENTERED) */
.programs-row.two .program-card {
    flex: 1;
    max-width: 360px;
}

/* CARD (ULTRA CLEAN PREMIUM) */
.program-card {
    background: #ffffff;
    border: 1px solid #eef1f5;
    padding: 35px 25px;
    border-radius: 18px;
    text-align: center;
    transition: 0.4s ease;
    box-shadow: 0 10px 30px rgba(0,0,0,0.04);
    position: relative;
    overflow: hidden;
}

/* SOFT TOP ACCENT LINE */
.program-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 4px;
    width: 100%;
    background: linear-gradient(90deg, #007bff, #00c6ff);
    opacity: 0;
    transition: 0.3s;
}

.program-card:hover::before {
    opacity: 1;
}

/* HOVER */
.program-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
}

/* ICON */
.icon-box {
    width: 75px;
    height: 75px;
    margin: 0 auto 18px;
    background: #f4f8ff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #007bff;
    font-size: 26px;
    transition: 0.3s;
}

/* ICON HOVER */
.program-card:hover .icon-box {
    background: #007bff;
    color: #fff;
    transform: scale(1.1);
}

/* TITLE */
.program-card h4 {
    font-size: 1.2rem;
    font-family: 'Ubuntu', sans-serif;
    font-weight: 700;
    color: #0a2540;
    margin-bottom: 10px;
}

/* TEXT */
.program-card p {
    font-size: 0.95rem;
    font-family: 'Poppins', sans-serif;
    color: #666;
    line-height: 1.6;
}

/* TABLET */
@media (max-width: 992px) {
    .programs-row {
        gap: 20px;
    }

    .program-card {
        max-width: 48%; /* 2 per row */
    }
}

/* MOBILE */
@media (max-width: 768px) {
    .programs-header h3 {
        font-size: 2rem;
    }

    .programs-header p {
        font-size: 0.95rem;
        padding: 0 10px;
    }

    .programs-row {
        flex-direction: column; 
        align-items: center;
    }

    .program-card {
        width: 100%;
        max-width: 100%;
    }
}

/* SECTION */
.flagship-projects {
    padding: 90px 20px;
    background: rgb(245, 243, 243);
}

/* HEADER */
.section-header h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #0a2540;
     font-family: 'Ubuntu', sans-serif;
}

.section-header p {
    color: #666;
    margin-top: 10px;
    margin-bottom: 60px;
     font-family: 'Poppins', sans-serif;
}

/* ROW */
.project-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    margin-bottom: 80px;
    align-items: center;
}

/* REVERSE */
.project-row.reverse {
    direction: rtl;
}
.project-row.reverse .project-content {
    direction: ltr;
}

/* IMAGE */
.project-image img {
    width: 100%;
    border-radius: 5px;
    object-fit: cover;
}

/* CONTENT */
.project-content h3 {
    font-size: 1.8rem;
    margin-bottom: 15px;
    color: #0a2540;
     font-family: 'Ubuntu', sans-serif;
}

.project-content p {
    color: #555;
    line-height: 1.7;
    margin-bottom: 15px;
     font-family: 'Poppins', sans-serif;
}

/* LISTS */
.pillars, .activities {
    margin: 15px 0;
    padding-left: 18px;
}

.pillars li, .activities li {
    margin-bottom: 8px;
    color: #444;
     font-family: 'Poppins', sans-serif;
}

/* IMPACT */
.impact {
    display: flex;
    gap: 30px;
    margin: 20px 0;
}

.impact div {
    text-align: center;
}

.impact strong {
    display: block;
    font-size: 1.5rem;
    color: #007bff;
}

.impact span {
    font-size: 0.9rem;
    color: #666;
}

/* QUOTE */
blockquote {
    margin-top: 20px;
    padding-left: 15px;
    border-left: 4px solid #007bff;
    font-style: italic;
    color: #333;
}

blockquote span {
    display: block;
    margin-top: 5px;
    font-size: 0.85rem;
    color: #777;
}

/* BUTTONS */
.project-btns {
    margin-top: 20px;
}

.btn-primary {
    background: #007bff;
    color: #fff;
    padding: 10px 22px;
    border-radius: 4px;
    text-decoration: none;
    margin-right: 10px;
}

.btn-outline {
    background: #007bff;
    color: #fff;
    padding: 10px 22px;
    border-radius: 4px;
    text-decoration: none;
   
}

/* HOVER */
.btn-primary:hover {
    background: #0056b3;
}

.btn-outline:hover {
    background: #007bff;
    color: #fff;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .project-row {
        grid-template-columns: 1fr;
    }

    .project-row.reverse {
        direction: ltr;
    }

    .impact {
        justify-content: space-between;
    }
}


/* SECTION */
.impact-cta {
    padding: 90px 20px;
    background: #f7f9fc;
}

/* GRID */
.impact-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 50px;
    align-items: center;
    margin-bottom: 80px;
}

/* TEXT */
.impact-text h2 {
    font-size: 2.3rem;
    font-weight: 700;
    color: #0a2540;
    margin-bottom: 15px;
}

.impact-text p {
    color: #555;
    line-height: 1.7;
    margin-bottom: 15px;
     font-family: 'Poppins', sans-serif;
}

/* SIDE CARD */
.impact-card {
    background: #ffffff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.impact-card h4 {
    margin-bottom: 15px;
    color: #0a2540;
     font-family: 'Ubuntu', sans-serif;
}

.impact-card ul {
    padding-left: 18px;
     font-family: 'Poppins', sans-serif;
}

.impact-card li {
    margin-bottom: 10px;
    color: #444;
     font-family: 'Poppins', sans-serif;
}

/* CTA BOX */
.cta-box {
    background: linear-gradient(135deg, #007bff, #00c6ff);
    padding: 60px 30px;
    border-radius: 20px;
    color: #fff;
}

/* CTA TEXT */
.cta-box h2 {
    font-size: 2.2rem;
    margin-bottom: 15px;
     font-family: 'Ubuntu', sans-serif;
}

.cta-box p {
    max-width: 700px;
    margin: 0 auto 15px;
    line-height: 1.6;
    font-family: 'Poppins', sans-serif;
    color: #fff;
}

/* BUTTONS */
.cta-buttons {
    margin-top: 25px;
}

.cta-buttons a {
    display: inline-block;
    margin: 10px;
    padding: 12px 25px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 500;
     font-family: 'Poppins', sans-serif;
}


/* BUTTON STYLES */
.btn-primary {
    background: #fff;
    color: #007bff;
}

.cta-btn-outline {
    border: 1px solid #fff;
    color: #fff;
}

.btn-donate {
    background: #ffcc00;
    color: #000;
}

/* HOVER */
.btn-primary:hover {
    background: #e6e6e6;
}

.btn-outline:hover {
    background: #fff;
    color: #007bff;
}

.btn-donate:hover {
    background: #e6b800;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .impact-grid {
        grid-template-columns: 1fr;
    }

    .cta-box h2 {
        font-size: 1.8rem;
    }
}
</style>