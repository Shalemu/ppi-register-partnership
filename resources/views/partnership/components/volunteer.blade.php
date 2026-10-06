<div id="volunteerFields" class="d-none">

		<div class="section-title">
			Volunteer Registration
		</div>

		<div class="mb-4">

			<label class="form-label fw-bold">
				Chagua Eneo la Kujitolea
			</label>

			<div class="row">

				@php
					$volunteers = [
						'Kocha',
						'Msaidizi wa Kocha',
						'Mwamuzi wa Mpira',
						'Mentor wa Vijana',
						'Mpiga picha / Media',
						'Huduma ya Kwanza',
						'Msaidizi wa Event'
					];
				@endphp

				@foreach($volunteers as $volunteer)

					<div class="col-md-4 mb-3">

						<div class="form-check">

							<input class="form-check-input"
								   type="checkbox"
								   name="volunteer_roles[]"
								   value="{{ $volunteer }}">

							<label class="form-check-label">
								{{ $volunteer }}
							</label>

						</div>

					</div>

				@endforeach

			</div>

		</div>

		<div class="row">

			<div class="col-md-6 mb-4">
				<label class="form-label">
					Full Name
				</label>

				<input type="text"
					   name="full_name"
					   class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				<label class="form-label">
					Gender
				</label>

				<select name="gender"
						class="form-select">

					<option value="">Choose</option>
					<option>Male</option>
					<option>Female</option>

				</select>

			</div>

			<div class="col-md-6 mb-4">
				<label class="form-label">
					Phone
				</label>

				<input type="text"
					   name="phone"
					   class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				<label class="form-label">
					Email
				</label>

				<input type="email"
					   name="email"
					   class="form-control">
			</div>

			<div class="col-12 mb-4">
				<label class="form-label">
					Kwa nini ungependa kuwa volunteer?
				</label>

				<textarea name="motivation"
						  rows="5"
						  class="form-control"></textarea>
			</div>

		</div>

	<div class="mt-4">
	<div class="form-check mb-3">
	 <input type="checkbox" name="agreement" value="1" required>

		<label class="form-check-label">
			Nakubaliana kufanya kazi kwa kuzingatia maadili, professionalism, na usalama wa watoto.
		</label>
	</div>

</div>

	</div>