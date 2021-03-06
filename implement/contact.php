<div class="fond">
	<!--Section heading-->
	<h2 class="h1-responsive font-weight-bold text-center my-4">Contactez moi</h2>
	<!--Section description-->
	<p class="text-center w-responsive mx-auto mb-5">Vous avez des questions ? N'hésitez pas à me contacter directement via le formulaire, ou en passant par les adresses ci dessous.
	</p>
</div>

<div class="row fond">

	<!--Grid column-->
	<div class="col-md-9 mb-md-0 mb-5">
		<form id="contact-form" name="contact-form" action="implement/mail.php" method="POST">

			<!--Grid row-->
			<div class="row">

				<!--Grid column-->
				<div class="col-md-6">
					<div class="md-form mb-0">
						<label for="name" class="">Votre nom</label>
						<input type="text" id="name" name="name" class="form-control">
						
					</div>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-md-6">
					<div class="md-form mb-0">
						<label for="email" class="">Votre email</label>
						<input type="text" id="email" name="email" class="form-control">
						
					</div>
				</div>
				<!--Grid column-->

			</div>
			<!--Grid row-->

			<!--Grid row-->
			<div class="row">
				<div class="col-md-12">
					<div class="md-form mb-0">
						<label for="subject" class="">Le sujet</label>
						<input type="text" id="subject" name="subject" class="form-control">
					</div>
				</div>
			</div>
			<!--Grid row-->

			<!--Grid row-->
			<div class="row">

				<!--Grid column-->
				<div class="col-md-12">

					<div class="md-form">
						<label for="message">Votre message</label>
						<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
					</div>

				</div>
			</div>
			<!--Grid row-->

		</form>

		<div class="text-center text-md-left mrgtop">
			<a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
		</div>
		<div class="status"></div>
	</div>
	<!--Grid column-->

	<!--Grid column-->
	<div class="col-md-3 align-self-center">
		<ul class="list-unstyled mb-0">
			<li>
				<i class="fas fa-envelope"></i>
				<p>5 rue Emile Le Taillandier</p>
				<p>22300 Lannion, France</p>
			</li>
			<hr>
			<li>
				<i class="fas fa-at"></i>
				<p>contact@alan-coiffard.ovh</p>
			</li>
		</ul>
	</div>
	<!--Grid column-->

</div>