<section id="programs-section" class="programs-premium position-relative">

    <!-- Background Effects -->
    <div class="bg-pattern-overlay"></div>
    <div class="glow-orb orb-1"></div>
    <div class="glow-orb orb-2"></div>

    <div class="container position-relative">

        <!-- HEADER -->
        <div class="text-center mb-5">
            <span class="section-badge">Our Programs</span>
            <h2 class="section-title">
                Transforming Potential into <span>Real Impact</span>
            </h2>
            <p class="section-subtitle">
                We deliver structured, practical, and future-focused programs designed to guide youth
                from discovery to leadership and economic empowerment.
            </p>
        </div>

        <!-- PROGRAM GRID -->
        <div class="row g-4 justify-content-center">

            <!-- 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="program-card">
                    <div class="icon-box"><span class="material-symbols-outlined">explore</span></div>
                    <h4>Talent Discovery</h4>
                    <p>
                        Assessment-based workshops that identify natural abilities, strengths, and growth areas,
                        providing each participant with a clear development pathway.
                    </p>
                </div>
            </div>

            <!-- 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="program-card">
                    <div class="icon-box"><span class="material-symbols-outlined">school</span></div>
                    <h4>Skills Training</h4>
                    <p>
                    We deliver competency-based programs in digital literacy, entrepreneurship, creative
                    industries, financial education, and life skills, ensuring practical and market-relevant
                    learning.
                    </p>
                </div>
            </div>

            <!-- 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="program-card">
                    <div class="icon-box"><span class="material-symbols-outlined">groups</span></div>
                    <h4>Mentorship</h4>
                    <p>
                    We connect young people with professionals and leaders who provide structured
                    guidance, accountability, and long-term career navigation support.
                    </p>
                </div>
            </div>

            <!-- 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="program-card">
                    <div class="icon-box"><span class="material-symbols-outlined">emoji_events</span></div>
                    <h4>Community Exposure</h4>
                    <p>
                    Through competitions, innovation challenges, and showcase events, we provide platforms
                    for youth to present their ideas, talents, and solutions to real-world challenges.
                    </p>
                </div>
            </div>

            <!-- 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="program-card highlight-card">
                    <div class="icon-box"><span class="material-symbols-outlined">support_agent</span></div>
                    <h4>Consultation & Advisory</h4>
                    <p>
                    We offer professional consulting in talent assessment, career direction coaching, youth
                    leadership programs, parental guidance, and financial mindset development.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
    /* =========================
   SECTION BASE
========================= */
.programs-premium {
    padding: 120px 0;
    background: radial-gradient(circle at top, #0f172a, #020617);
    position: relative;
    overflow: hidden;
}

/* =========================
   BACKGROUND EFFECTS
========================= */
.bg-pattern-overlay {
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px);
    background-size: 28px 28px;
    opacity: 0.3;
}

/* glowing orbs */
.glow-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(120px);
    opacity: 0.25;
}

.orb-1 {
    width: 300px;
    height: 300px;
    background: #00b4d8;
    top: -100px;
    left: -100px;
}

.orb-2 {
    width: 250px;
    height: 250px;
    background: #0077b6;
    bottom: -100px;
    right: -80px;
     font-family: 'Ubuntu', sans-serif;;
}

/* =========================
   HEADER
========================= */
.section-badge {
    display: inline-block;
    padding: 6px 16px;
    border-radius: 50px;
    background: rgba(0,180,216,0.1);
    color: #00d4ff;
    font-size: 0.75rem;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 15px;
}

.section-title {
    font-size: 2.8rem;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 15px;
     font-family: 'Ubuntu', sans-serif;
}

.section-title span {
    background: linear-gradient(45deg, #00d4ff, #0077b6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.section-subtitle {
    color: #94a3b8;
    max-width: 600px;
    margin: auto;
    line-height: 1.7;
}

/* =========================
   PROGRAM CARD
========================= */
.program-card {
    background: rgba(255, 255, 255, 0.04);
    border-radius: 22px;
    padding: 35px 28px;
    border: 1px solid rgba(255,255,255,0.08);
    backdrop-filter: blur(14px);
    transition: all 0.4s ease;
    height: 100%;
    color: #fff;
    position: relative;
}

/* glow border on hover */
.program-card::before {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 22px;
    padding: 1px;
    opacity: 0;
    transition: 0.4s;
}

.program-card:hover::before {
    opacity: 1;
}

/* hover */
.program-card:hover {
    transform: translateY(-12px) scale(1.02);
    background: #ffffff;
    color: #0b1d2a;
    box-shadow: 0 25px 70px rgba(0,0,0,0.5);
}

/* text on hover */
.program-card:hover p,
.program-card:hover h4 {
    color: #0b1d2a;
     font-family: 'Poppins', sans-serif;
}

/* =========================
   ICON
========================= */
.icon-box {
    width: 60px;
    height: 60px;
    border-radius: 16px;
    background: linear-gradient(45deg, #00d4ff, #0077b6);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    font-size: 26px;
}

/* =========================
   TEXT
========================= */
.program-card h4 {
    font-weight: 700;
    margin-bottom: 10px;
     font-family: 'Ubuntu', sans-serif;
}

.program-card p {
    font-size: 0.95rem;
    color: #cbd5e1;
    line-height: 1.7;
     font-family: 'Poppins', sans-serif;
}

/* =========================
   FEATURED CARD
========================= */
.highlight-card {
    border: 1px solid rgba(0,212,255,0.4);
     font-family: 'Ubuntu', sans-serif;
}

/* =========================
   RESPONSIVE
========================= */
@media (max-width: 768px) {

    .programs-premium {
        padding: 80px 0;
    }

    .section-title {
        font-size: 2rem;
    }

}
</style>