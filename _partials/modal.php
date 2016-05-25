<!--
FORM 
----
----
Send with https://formspree.io
----
----
-->
  	<div class="md-modal md-effect-16" id="modal-16">
			<div class="md-content">
				<h3>What's missing? </h3>
				<div>
					<p>Everyone has something to do before kicking the bucket, so what's your "thing"?</p>
                    <form action="https://formspree.io/your@email.com" method="POST">
						<input type="email" name="_replyto" class="input" placeholder="Your e-mail" required />
						<input  type="textarea" class="input" placeholder="Your 'thing'" required />
                        <input type="hidden" name="_subject" value="Kings List Submission!" />
                        <input type="hidden" name="_next" value="//yoursite.io/thanks.html" />
                        <input type="text" name="_gotcha" style="display:none" />
						<input type="submit" class="btn_send" value="Send">
					</form>
					<i class="fa fa-times md-close" id="close"></i>
				</div>
			</div>
		</div>
		<div class="md-overlay"></div><!-- the overlay element -->