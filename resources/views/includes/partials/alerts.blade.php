@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 rounded-pill position-fixed top-0 start-50 translate-middle-x mt-4" role="alert" style="z-index: 10000; padding: 15px 40px;">
        <i class="material-symbols-outlined align-middle me-2">check_circle</i>
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
