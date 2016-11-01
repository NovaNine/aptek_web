<div class="col-xs-12">
	<div class="content-frame">
		<div class="section-sidebar left blue narrow">
			<div class="single-glyph">
				<i class="fa fa-calendar-check-o glyph" aria-hidden="true"></i>
			</div>
		</div>
		<div class="content">
			<form action="formProcess.php" method="post" class="contact-form" id="contactForm">
				<input type="hidden" name="formId" value="schedule">
				<div class="form-group">
					<label for="contactName">Name</label>
					<input type="text" class="form-control" id="contactName" placeholder="Enter your name" name="Name">
				</div>
				<div class="form-group">
					<label for="contactEmail">Email</label>
					<input type="email" class="form-control" id="contactEmail" aria-describedby="emailHelp" placeholder="Enter email" name="Email">
					<small id="emailHelp" class="form-text text-muted">We will only use the email you provide to reply to your inquiry.</small>
				</div>
				<div class="form-group">
					<label for="contactPhone">Phone</label>
					<input type="phone" class="form-control" id="contactPhone" placeholder="(000) 000-0000" name="Phone">
				</div>
				<div class="form-group">
					<label for="contactLocationType">Location Type</label>
					<select class="form-control" id="contactLocationType" name="LocationType">
						<option>Residential</option>
						<option>Office</option>
					</select>
				</div>
				<div class="form-group">
					<label for="contactAddress">Address</label>
					<textarea class="form-control" id="contactAddress" placeholder="Enter your address" name="Address"></textarea>
				</div>
				<div class="form-group">
					<label for="contactTimes">Enter 3 dates and times when you can be available:</label>
					<textarea class="form-control" id="contactTimes" placeholder="YYYY/MM/DD HH:MM
YYYY/MM/DD HH:MM
YYYY/MM/DD HH:MM" name="RequestedTimes"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Send</button>
			</form>
		</div>
	</div>
</div>