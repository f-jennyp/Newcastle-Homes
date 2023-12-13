<footer>
	<div id="footer">
		<div class="row flex">
			<div class="left">
				<div class="img-holder"><img src="public/images/content" class=""></div>

				<div class="contact-info">
					<div class="phone-holder">
						<a href="tel:<?php $this->info("phone"); ?>"><img src="public/images/content/phone.png">
							<span class="label">Phone</span>
							<?php $this->info("phone"); ?>
						</a>
					</div>
					<div class="email-holder">
						<a href="tel:<?php $this->info("email"); ?>"><img src="public/images/content/email.png">
							<span class="label">Phone</span>
							<?php $this->info("email"); ?>
						</a>
					</div>
					<div class="loc-holder">
						<a href="tel:<?php $this->info("location"); ?>"><img src="public/images/content/location.png">
							<span class="label">Phone</span>
							<?php $this->info("location"); ?>
						</a>
					</div>

				</div>
				<div class="copyrights">
					<p class="copy">
						©
						<?php echo date("Y"); ?>.
						<?php $this->info("company_name"); ?> All Rights Reserved.
						<?php if ($this->siteInfo['policy_link']): ?>
							<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>.
						<?php endif ?>
					</p>
				</div>
			</div>

			<div class="contact">
				<h1>Connect with us</h1>
				<span>Don’t be afraid to ask if you are not sure what you would need, we would be happy to help you plan
					your future projects!</span>
				<form action="sendContactForm" method="post" class="sends-email ctc-form">
					<div class="flex">
						<label><span class="ctc-hide">Name</span>
							<input type="text" name="name" placeholder="Name">
						</label>
						<label><span class="ctc-hide">Email</span>
							<input type="text" name="email" placeholder="Email">
						</label>
						<label><span class="ctc-hide">Phone</span>
							<input type="text" name="phone" placeholder="Phone">
						</label>
					</div>
					<label><span class="ctc-hide">Message</span>
						<textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
					</label>
					<label for="g-recaptcha-response"><span class="ctc-hide">Recaptcha</span></label>
					<div class="g-recaptcha"></div>
					<label>
						<input type="checkbox" name="consent" class="consentBox">I hereby consent to having this website
						store my submitted information so that they can respond to my inquiry.
					</label><br>
					<?php if ($this->siteInfo['policy_link']): ?>
						<label>
							<input type="checkbox" name="termsConditions" class="termsBox" /> I hereby confirm that I have
							read
							and understood this website's <a href="<?php $this->info("policy_link"); ?>"
								target="_blank">Privacy
								Policy.</a>
						</label>
					<?php endif ?>
					<button type="submit" class="ctcBtn btn" disabled>Submit Form</button>
				</form>
			</div>

		</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>

<?php if ($this->siteInfo['cookie']): ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if (in_array($view, ["home", "contact"])): ?>
	<textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
	<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
	<script>
		var captchaCallBack = function () {
			$('.g-recaptcha').each(function (index, el) {
				var recaptcha = grecaptcha.render(el, { 'sitekey': '<?php $this->info("site_key"); ?>' });
				$('.destroy-on-load').remove();
			})
		};


		$('.consentBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.termsBox').length) {
					if ($('.termsBox').is(':checked')) {
						$('.ctcBtn').removeAttr('disabled');
					}
				} else {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

		$('.termsBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.consentBox').is(':checked')) {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

	</script>

<?php endif; ?>


<?php if ($view == "gallery"): ?>
	<script src="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script src="<?php echo URL; ?>public/scripts/jquery.pajinate.js"></script>
	<script>
		$('#gall1').pajinate({ num_page_links_to_display: 3, items_per_page: 10 });
		$('.fancy').fancybox({
			helpers: {
				title: {
					type: 'over'
				}
			}
		});
	</script>
<?php endif; ?>

<a class="cta" href="tel:<?php $this->info("phone"); ?>"><span
		style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<?php $this->checkSuspensionFooter(); ?>
</body>

</html>