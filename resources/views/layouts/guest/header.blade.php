<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<nav class="navbar navbar-expand-lg sticky-top custom-navbar">
    <div class="container-fluid">

        <!-- Logo -->
        <div class="d-flex align-items-center">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/images/ppi-logo.png') }}" 
                     alt="PPI Logo"
                     class="navbar-logo">
            </a>
        </div>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="material-symbols-outlined">menu</span>
        </button>

        <!-- Nav Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/program') }}">Our Program</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/media') }}">Media Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact-section">Contact</a>
                </li>

                <!-- CTA Button -->
                <li class="nav-item ms-lg-4">
                    <a href="#" 
                       class="btn btn-info-ppi shadow-sm"
                       data-bs-toggle="modal" 
                       data-bs-target="#supportModal">
                        Get Involved
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!--  EVENT BANNER (OUTSIDE UL - IMPORTANT) -->
<div class="event-banner">
    <a href="{{ url('/event-registration') }}" class="event-link">

        <span class="material-symbols-outlined event-icon">
            sports_soccer
        </span>

        <span class="event-text">
            PLAY WITH PURPOSE KIDS TOURNAMENT  2026 
        </span>
       
        <span class="event-action">
            Register Now
        </span>

    </a>
</div>

<style>
    .custom-navbar {
    background-color: #ffffff !important;
    padding: 12px 24px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.05);
    z-index: 1100;
}

/* Logo */
.navbar-logo {
    height: 55px;
    width: auto;
    margin-left: 20px;
}

@media (max-width: 768px) {
    .navbar-logo {
        height: 34px;
    }
}

/* Nav links */
.navbar-nav .nav-link {
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 15px;
    color: #333 !important;
    margin: 0 12px;
    position: relative;
    transition: all 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #0dcaf0 !important;
}

/* CTA button */
.btn-info-ppi {
    background-color: #0dcaf0;
    color: #fff;
    border-radius: 8px;
    padding: 8px 18px;
    font-weight: 600;
    transition: 0.3s ease;
}

.btn-info-ppi:hover {
    background-color: #0bb6d9;
    transform: translateY(-2px);
}



.event-banner {
    background: linear-gradient(135deg, #ffb703, #fb8500);
    padding: 10px 12px;
    text-align: center;
    position: sticky;
    top: 0;
    z-index: 1200;
    box-shadow: 0 6px 18px rgba(0,0,0,0.15);
    animation: slideDown 0.6s ease;
}

/* clickable container */
.event-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    background: rgba(255,255,255,0.95);
    padding: 8px 16px;
    border-radius: 50px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

/* icon */
.event-icon {
    font-size: 20px;
    color: #fb8500;
    animation: pulse 1.5s infinite;
}

/* text */
.event-text {
    font-weight: 700;
    color: #000;
    font-size: 14px;
}

/* CTA small button inside banner */
.event-action {
    background: #0bb6d9;
    color: #fff;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    transition: 0.3s;
}

/* hover effect */
.event-link:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

.event-link:hover .event-action {
    background: #fff;
    color: #000;
}

/* animations */
@keyframes slideDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.15); }
    100% { transform: scale(1); }
}

@media (max-width: 576px) {
    .event-text {
        font-size: 12px;
    }

    .event-action {
        display: inline-block;
        font-size: 10px;
        padding: 4px 8px;
        border-radius: 15px;
    }
}
</style>