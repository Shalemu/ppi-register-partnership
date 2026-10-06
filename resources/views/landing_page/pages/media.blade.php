@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="media-hero">
    <div class="overlay"></div>

    <div class="container text-center">
        <h1>Stories of Hope. Impact. Purpose.</h1>
        <p>
            Real journeys. Real transformations. The power of potential in action.
        </p>
    </div>
</section>


<!-- INTRO -->
<section class="media-intro">
    <div class="container">

        <div class="intro-grid">

            <div class="intro-left">
                <h2>Every Story is a Spark.</h2>
            </div>

            <div class="intro-right">
                <p>
                    At PPI, every youth we reach represents a story of transformation —
                    from uncertainty to purpose, from potential to performance.
                </p>

                <p>
                    Our media platform sheds light on these journeys through success stories,
                    updates, and visual highlights that inspire action.
                </p>

                <p>
                    We celebrate young pioneers and inspire others to dream, dare, and do.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- STORIES -->
<section class="stories-section">
    <div class="container">

        <div class="section-title text-center">
            <h2>Inspiring Stories from Across Tanzania</h2>
        </div>

        <div class="stories-grid">

            <!-- STORY 1 -->
            <div class="story-card">
                <img src="img/stories/neema.jpg" alt="Neema">

                <div class="story-content">
                    <h3>Neema – Finding Confidence Through The Power in Me</h3>

                    <p>
                        Before joining PPI, Neema struggled with low self-esteem and uncertainty.
                        Through The Power in Me program, she discovered leadership potential and confidence.
                        Today she mentors young girls in Mwanza.
                    </p>

                    <blockquote>
                        “Now I know I was created with a reason — and that reason drives me every day.”
                    </blockquote>
                </div>
            </div>

            <!-- STORY 2 -->
            <div class="story-card">
                <img src="img/stories/elias.jpg" alt="Elias">

                <div class="story-content">
                    <h3>Elias – Coding His Way to the Future</h3>

                    <p>
                        Elias joined Coding for Kids with little experience.
                        After 8 weeks, he built his first project and became a top presenter.
                        His dream is now software engineering.
                    </p>

                    <blockquote>
                        “PPI made computers feel fun — not scary.”
                    </blockquote>
                </div>
            </div>

            <!-- STORY 3 -->
            <div class="story-card">
                <img src="img/stories/halima-amani.jpg" alt="Halima & Amani">

                <div class="story-content">
                    <h3>Halima & Amani – Love Destination Partners</h3>

                    <p>
                        They joined seeking direction and discovered empathy, purpose, and communication.
                        Now they run a youth mentorship group in Dar es Salaam.
                    </p>

                    <blockquote>
                        “Love Destination changed how we see relationships — it moved us from pain to purpose.”
                    </blockquote>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- GALLERY -->
<section class="gallery-section" id="gallery">
    <div class="container">

        <div class="section-title text-center">
            <h2>Moments that Inspire Action</h2>
        </div>

        <div class="gallery-grid">

            <a href="img/gallery/1.jpg" class="gallery-item">
                <img src="img/gallery/1.jpg">
                <span>Mentorship Session – Dodoma 2023</span>
            </a>

            <a href="img/gallery/2.jpg" class="gallery-item">
                <img src="img/gallery/2.jpg">
                <span>Coding for Kids – Arusha 2024</span>
            </a>

            <a href="img/gallery/3.jpg" class="gallery-item">
                <img src="img/gallery/3.jpg">
                <span>Leadership Training</span>
            </a>

            <a href="img/gallery/4.jpg" class="gallery-item">
                <img src="img/gallery/4.jpg">
                <span>Community Outreach</span>
            </a>

        </div>

    </div>
</section>


<!-- VIDEO -->
<section class="video-section">
    <div class="container text-center">

        <h2>Watch the Impact in Motion</h2>

        <div class="video-grid">

            <div class="video-card">
                <iframe src="https://www.youtube.com/embed/xxxx"></iframe>
                <p>Empowering Youth Through Innovation</p>
            </div>

            <div class="video-card">
                <iframe src="https://www.youtube.com/embed/xxxx"></iframe>
                <p>Love Destination Mentorship Showcase</p>
            </div>

            <div class="video-card">
                <iframe src="https://www.youtube.com/embed/xxxx"></iframe>
                <p>Coding for Kids Graduation</p>
            </div>

        </div>

    </div>
</section>



@endsection

<style>
 /* PROGRAMS HERO SECTION */
/* GLOBAL TYPOGRAPHY */
h1, h2, h3 {
    font-family: 'Ubuntu', sans-serif;
    color: #0a2540;
}

p {
    font-family: 'Poppins', sans-serif;
    color: #555;
    line-height: 1.7;
}

/* HERO */
.media-hero {
    position: relative;
    height: 65vh;
    background: url('../img/media/hero.jpg') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
}

.media-hero .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0,0,0,0.7), rgba(0,123,255,0.4));
}

.media-hero h1 {
    color: #fff;
    font-size: 3rem;
}

.media-hero p {
    color: #eaeaea;
    font-size: 1.2rem;
}

/* INTRO */
.media-intro {
    padding: 80px 0;
}

/* GRID */
.intro-grid {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 40px;
}

/* STORIES */
.stories-section {
    background: #f7f9fc;
    padding: 80px 0;
}

.stories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

/* STORY CARD */
.story-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    transition: 0.3s;
}

.story-card:hover {
    transform: translateY(-8px);
}

.story-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.story-content {
    padding: 20px;
}

.story-content h3 {
    font-size: 1.1rem;
    margin-bottom: 10px;
}

.story-content blockquote {
    font-style: italic;
    color: #007bff;
    margin-top: 10px;
}

/* GALLERY */
.gallery-section {
    padding: 80px 0;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    display: block;
}

.gallery-item img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    transition: 0.4s;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.gallery-item span {
    position: absolute;
    bottom: 0;
    background: rgba(0,0,0,0.6);
    color: #fff;
    width: 100%;
    padding: 8px;
    font-size: 0.85rem;
}

/* VIDEO */
.video-section {
    background: #f7f9fc;
    padding: 80px 0;
}

.video-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.video-card iframe {
    width: 100%;
    height: 200px;
    border-radius: 12px;
}

.video-card p {
    margin-top: 10px;
    font-weight: 500;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .intro-grid {
        grid-template-columns: 1fr;
    }

    .gallery-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .video-grid {
        grid-template-columns: 1fr;
    }

    .media-hero h1 {
        font-size: 2rem;
    }
}
</style>