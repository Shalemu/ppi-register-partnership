
<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPI | Potential Pioneer Initiatives</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <link href="{{ asset('assets/css/base.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/utilities.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/components/hero.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/components/navbar.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/components/footer.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/components/support-widget.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/components/modal.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/components/team.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/components/forms.css')}}" rel="stylesheet">
</head>
<body>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">



<style>

.custom-navbar {
    background-color: #ffffff !important;
    padding: 12px 24px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.05);
}


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


.navbar-nav .nav-link {
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 15px;
    color: #333 !important;
    margin: 0 12px;
    position: relative;
    transition: all 0.3s ease;
}


.navbar-nav .nav-link::after {
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    left: 0;
    bottom: -4px;
    background-color: #0dcaf0;
    transition: 0.3s;
}

.navbar-nav .nav-link:hover {
    color: #0dcaf0 !important;
}

.navbar-nav .nav-link:hover::after {
    width: 100%;
}


.btn-info-ppi {
    background-color: #0dcaf0;
    color: #fff;
    border: none;
    border-radius: 6px; /* reduced radius */
    padding: 8px 18px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    transition: all 0.3s ease;
}

/* Button hover */
.btn-info-ppi:hover {
    background-color: #0bb6d9;
    transform: translateY(-2px);
}


@media (max-width: 991px) {
    .navbar-nav {
        padding-top: 15px;
    }

    .navbar-nav .nav-link {
        margin: 10px 0;
    }

    .btn-info-ppi {
        margin-top: 10px;
    }
}
</style>



@yield('content')


<div class="modal fade" id="welcomeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 glass-modal shadow-lg">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-5 pt-2">
                <div class="modal-icon-wrapper mb-4">
                    <span class="material-symbols-outlined text-info-ppi" style="font-size: 60px;">rocket_launch</span>
                </div>
                <h2 class="fw-bold mb-3">Welcome to <span class="text-info-ppi">PPI</span></h2>
                <p class="text-muted lead mb-4">
                    We are a bridge to success for young people. We help nurture talents, technology (Coding), and leadership to build a better tomorrow.
                </p>
                <div class="d-grid gap-2">
                    <button class="btn btn-info-ppi btn-lg rounded-pill" data-bs-dismiss="modal">Discover More</button>
                    <a href="javascript:void(0)" class="btn btn-link text-decoration-none text-muted">Maybe later</a>
                </div>
            </div>
        </div>
    </div>
</div>





@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: "{{ session('success') }}",
        confirmButtonColor: '#0d6efd'
    });
</script>
@endif

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: "{{ session('error') }}",
        confirmButtonColor: '#dc3545'
    });
</script>
@endif
</body>
</html>
