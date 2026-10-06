<div class="modal fade" id="supportModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-2xl" style="border-radius: 30px; background: #ffffff;">
            <div class="modal-header border-0 pb-0 pt-4 px-4 position-relative">
                <button type="button" class="btn-close ms-auto shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-4 p-md-5 pt-0">
                <div class="text-center mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center  bg-opacity-10 text-info-ppi rounded-circle mb-3" >
                    <div class="support-icon" style="width: 80px; height: 80px;">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    </div>
                    <h3 class="fw-bolder text-dark">Your Support Powers Potential.</h3>
                    <p class="text-muted mx-auto" style="max-width: 320px;">Every great transformation begins with small acts of purpose.</p>
                </div>

                <form action="{{ route('support.store') }}" method="POST" class="custom-form">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label fw-bold text-dark small text-uppercase ls-1">Full Name</label>
                        <div class="input-group-modern">
                            <span class="material-symbols-outlined icon">person</span>
                            <input type="text" name="name" class="form-control-modern" placeholder="e.g. John Doe" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold text-dark small text-uppercase ls-1">Phone / WhatsApp</label>
                        <div class="input-group-modern">
                            <span class="material-symbols-outlined icon">call</span>
                            <input type="tel" name="phone" class="form-control-modern" placeholder="e.g. +255 712 000 000" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold text-dark small text-uppercase ls-1">Email Address</label>
                        <div class="input-group-modern">
                            <span class="material-symbols-outlined icon">mail</span>
                            <input type="email" name="email" class="form-control-modern" placeholder="e.g. john@example.com" required>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="form-label fw-bold text-dark small text-uppercase ls-1">How would you like to help?</label>
                        <div class="input-group-modern">
                            <span class="material-symbols-outlined icon">featured_play_list</span>
                            <select name="support_type" class="form-select-modern">
                                <option value="" disabled selected>Select Support Type</option>
                                <option value="Financial Contribution">Financial Contribution</option>
                                <option value="Equipment/Tools">Equipment (Laptops, Books, etc.)</option>
                                <option value="Mentorship">Mentorship & Skills Sharing</option>
                                <option value="Partnership">Corporate Partnership</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info-ppi w-100 py-3 fw-bold rounded-pill text-uppercase tracking-wider">
                        Send My Request
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
