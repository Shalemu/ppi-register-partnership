<div id="sponsorFields" class="d-none">

	<div class="section-title">
		Ushirikiano & Udhamini
	</div>

	<div class="row">

		<div class="col-md-6 mb-4">

			<label class="form-label">
				Jina la Kampuni (Required)
			</label>

			<input type="text"
				   name="company_name"
				   class="form-control"
				   required>

		</div>

		<div class="col-md-6 mb-4">

			<label class="form-label">
				Jina la Mwakilishi (Required)
			</label>

			<input type="text"
				   name="full_name"
				   class="form-control"
				   required>

		</div>

		<div class="col-md-6 mb-4">

			<label class="form-label">
				Simu (Required)
			</label>

			<input type="text"
				   name="phone"
				   class="form-control"
				   required>

		</div>

		<div class="col-md-6 mb-4">

			<label class="form-label">
				Email (Required)
			</label>

			<input type="email"
				   name="email"
				   class="form-control"
				   required>

		</div>

		<div class="col-12 mb-4">

			<label class="form-label fw-bold">
				Aina ya Ushirikiano
			</label>

			<div class="row">

				@php
					$supports = [
						'Udhamini wa Fedha',
						'Jezi na Vifaa',
						'Huduma za Afya',
						'Media',
						'Maji na Vinywaji',
						'Trophies'
					];
				@endphp

				@foreach($supports as $support)

					<div class="col-md-4 mb-3">

						<div class="form-check">

							<input class="form-check-input"
								   type="checkbox"
								   name="support_type[]"
								   value="{{ $support }}">

							<label class="form-check-label">
								{{ $support }}
							</label>

						</div>

					</div>

				@endforeach

			</div>

		</div>

		<div class="col-12 mb-4">

			<label class="form-label">
				Maelezo ya Ziada
			</label>

			<textarea name="message"
					  rows="5"
					  class="form-control"></textarea>

		</div>

		<div class="col-12">

			<div class="form-check mb-4">

				<input class="form-check-input"
					   type="checkbox"
					   name="agreement"
					   value="1"
					   required>

				<label class="form-check-label">
					Nakubaliana na sheria na masharti ya mashindano haya
				</label>

			</div>

		</div>

	</div>

</div>