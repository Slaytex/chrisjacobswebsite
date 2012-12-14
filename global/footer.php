<!--START FOOTER-->

	<footer class="footerback" style="margin:100px 0 100px;">
		<div class="row-fluid">
	        <div class="span4">
	        <img class="avatar" src="img/avatar.png" alt="My alter ego" />        
	        </div>
		    <div class="span8">
		    <form id="slaytexContactForm" name="slaytexContactForm">
		    <fieldset>
		        <div class="span6">
		        <label>Full Name</label>
		        <input id="sc_fullname" name="sc_fullname" class="span12 inputcolor" type="text" placeholder="">
		        </div>
		        <div class="span6">
		        <label>Email</label>
		        <input id="sc_emailaddress" name="sc_emailaddress" class="span12 inputcolor" type="text" placeholder="">
		        </div>
		        <div>
		        <label>Comments</label>
		        <textarea id="sc_comments" name="sc_comments" class="span12" rows="3"  placeholder=""></textarea>
		        </div>
		        <div>
		        <button id="sc_submit" class="btn btn-info btn-block span4">Send me your message</button>
		        </div>
		        <div class="span8">
                <noscript>
		        <label class="checkbox checkmove">
		        <a id="avatar"></a>
		          <input type="checkbox"><small><span class="checkme">Please check before submitting.</span> <a href="#avatar" class="whatsthis" id="tooltip1" rel="tooltip" title="So I know you're human">Why?</a></small>
		        </label>
                </noscript>
		        </div>
		        </fieldset>
                <input type="hidden" name="imahuman" id="imahuman" value="tobor" />
                <div id="loadergif"><img src="img/ajax-loader.gif"/></div>
                <div id="successMessage">Your Message has been sent successfully. Thank you.</div>
		        </form>
		    </div>
		</div>
	</footer>

<!--END FOOTER	-->
