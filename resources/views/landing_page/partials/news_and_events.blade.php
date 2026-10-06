@push('styles')
    <style>
        .blog-section {
            background-color: #0b1120 !important;
            position: relative;
        }

        .blog-card {
            background: rgba(255, 255, 255, 0.03) !important;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-radius: 25px !important;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            height: 100%;
        }

        .blog-card:hover {
            transform: translateY(-12px);
            background: rgba(255, 255, 255, 0.08) !important;
            border-color: var(--ppi-info) !important;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3) !important;
        }

        .blog-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 240px;
        }

        .blog-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .blog-card:hover .blog-image-wrapper img {
            transform: scale(1.1);
        }

        .blog-date {
            position: absolute;
            top: 20px;
            left: 20px;
            background: var(--ppi-info);
            color: white;
            padding: 6px 18px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.85rem;
            box-shadow: 0 5px 15px rgba(13, 202, 240, 0.3);
            z-index: 2;
        }

        .blog-title {
            color: white !important;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.25rem;
            transition: color 0.3s ease;
            display: block;
        }

        .blog-card:hover .blog-title {
            color: var(--ppi-info) !important;
        }

        .blog-card p {
            color: #cbd5e0 !important;
            line-height: 1.6;
        }

        .opacity-10 {
            opacity: 0.1;
            border-color: rgba(255, 255, 255, 0.1) !important;
        }
    </style>
@endpush

<section class="py-5 blog-section bg-soft-dark position-relative overflow-hidden">
    <div class="bg-pattern-overlay"></div>

    <div class="container position-relative" id="LatestNews">
        <div class="d-flex justify-content-between align-items-end mb-5">
            <div>
                <span class="text-info-ppi fw-bold text-uppercase" style="letter-spacing: 2px;">News & Updates</span>
                <h2 class="display-5 fw-bold mt-2 text-white">Latest from <span class="text-gradient">Our Blog</span></h2>
            </div>
            <a href="#" class="btn btn-outline-light rounded-pill px-4 mb-2 d-none d-md-block">View All Stories</a>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="blog-card h-100">
                    <div class="blog-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Coding">
                        <span class="blog-date">15 Feb</span>
                    </div>
                    <div class="card-body p-4 text-white">
                        <span class="badge bg-info-ppi mb-2">Technology</span>
                        <h4 class="fw-bold mb-3"><a href="#" class="blog-title">Coding Progress for Kids in Tanzania</a></h4>
                        <p class="text-light opacity-75 small">Exploring how children can start learning programming languages early to solve local challenges...</p>
                        <hr class="opacity-10 border-white">
                        <div class="d-flex align-items-center opacity-75">
                            <span class="material-symbols-outlined text-info-ppi me-2" style="font-size: 18px;">schedule</span>
                            <small>5 min read</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-card h-100">
                    <div class="blog-image-wrapper">
                        <img src="assets/images/leadership.jpeg" class="card-img-top" alt="Youth Leadership Hub">
                        <span class="blog-date">10 Feb</span>
                          <!-- <img src="assets/images/objective.jpeg" alt="Youth Empowerment"> -->
                    </div>
                    <div class="card-body p-4 text-white">
                        <span class="badge bg-info-ppi mb-2">Leadership</span>
                        <h4 class="fw-bold mb-3"><a href="#" class="blog-title">The Impact of Leadership Hubs on Youth</a></h4>
                        <p class="text-light opacity-75 small">Leadership is not just a gift, but a set of skills that can be nurtured through the right environment and guidance...</p>
                        <hr class="opacity-10 border-white">
                        <div class="d-flex align-items-center opacity-75">
                            <span class="material-symbols-outlined text-info-ppi me-2" style="font-size: 18px;">schedule</span>
                            <small>4 min read</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-card h-100">
                    <div class="blog-image-wrapper">
                        <img src="assets/images/stakeholder.jpeg" class="card-img-top" alt="Community">
                        <span class="blog-date">02 Feb</span>
                    </div>
                    <div class="card-body p-4 text-white">
                        <span class="badge bg-info-ppi mb-2">Community</span>
                        <h4 class="fw-bold mb-3"><a href="#" class="blog-title">PPI Connects with Stakeholders in Dar</a></h4>
                        <p class="text-light opacity-75 small">During our recent visit, we discussed the future of youth potential with various educational partners...</p>
                        <hr class="opacity-10 border-white">
                        <div class="d-flex align-items-center opacity-75">
                            <span class="material-symbols-outlined text-info-ppi me-2" style="font-size: 18px;">schedule</span>
                            <small>3 min read</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
