
<section class="py-5 team-section-modern">
    <div class="container" id="ourTeam">
        <div class="text-center mb-5 mt-4">
            <h2 class="display-5 fw-bolder mt-2">The Brains Behind <span class="text-gradient">PPI</span></h2>
            <div class="mx-auto bg-info-ppi" style="height: 5px; width: 80px; border-radius: 10px;"></div>
        </div>

        <div class="row g-4 mt-2">
            @php
                $team = [
                    ['name' => 'Ayubu Michael', 'role' => 'CEO & Founder', 'img' => 'Ayub.png'],
                    ['name' => 'Felix Mwasongela', 'role' => 'Program Director', 'img' => 'Felix.png'],
                    ['name' => 'Edina Magoti', 'role' => 'Finance Manager', 'img' => 'Edina.png'],
                    ['name' => 'Elizabeth Masolwa', 'role' => 'Engagement Officer', 'img' => 'Elizabeth.png']
                ];
            @endphp
            @foreach($team as $member)
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="team-card-premium">
                        <div class="team-card-image">
                            <img src="{{ asset('/assets/images/team/' . $member['img']) }}" alt="{{ $member['name'] }}">
                            <div class="team-social-overlay">
                                <a href="#"><span class="material-symbols-outlined">share</span></a>
                                <a href="#"><span class="material-symbols-outlined">link</span></a>
                            </div>
                        </div>
                        <div class="team-card-info text-center">
                            <h5 class="fw-bold mb-0">{{ $member['name'] }}</h5>
                            <p class="text-info-ppi small fw-semibold">{{ $member['role'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
