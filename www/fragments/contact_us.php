<div class="col-xs-12">
	<div class="content-frame">
		<div class="section-sidebar left blue narrow">
			<div class="single-glyph">
				<i class="fa fa-envelope glyph" aria-hidden="true"></i>
			</div>
		</div>
		<div class="content">
			<form action="formProcess.php" method="post" class="contact-form" id="contactForm">
				<input type="hidden" name="formId" value="contact">
				<div class="form-group">
					<label for="contactName">Your Name</label>
					<input type="text" class="form-control" id="contactName" placeholder="Enter your name" name="Name">
				</div>
				<div class="form-group">
					<label for="contactEmail">Your Email</label>
					<input type="email" class="form-control" id="contactEmail" aria-describedby="emailHelp" placeholder="Enter email" name="Email">
					<small id="emailHelp" class="form-text text-muted">We will only use the email you provide to reply to your inquiry.</small>
				</div>
				<div class="form-group">
					<label for="contactMessage">Message</label>
					<textarea class="form-control" id="contactMessage" placeholder="How may we help you?" name="Inquiry"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Send</button>
			</form>
		</div>
	</div>
	<br>
	<div class="content-frame">
		<div class="section-sidebar left blue narrow">
			<div class="single-glyph">
				<i class="fa fa-phone glyph" aria-hidden="true"></i>
			</div>
		</div>
		<div class="content">
			You can also reach us at
			<h2 class="indent-3em">(519) 362-3243</h2>
		</div>
	</div>
</div>