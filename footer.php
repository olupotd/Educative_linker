
<!--Footer-->
<script type="text/javascript">
  google.load("search", "1");
  google.load("jquery", "1.4.2");
  google.load("jqueryui", "1.7.2");
</script>
<footer id="footer">
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<div class="container">
		<div class="row-fluid">
			<div class="span5 cp">
				&copy; 2013 Owland Inc</a>. All Rights Reserved.
			</div>
			<!--/Copyright-->

			<div class="span6">
				<ul class="social pull-right">
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-pinterest"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
					<li><a href="#"><i class="icon-google-plus"></i></a></li>
					<li><a href="#"><i class="icon-youtube"></i></a></li>
					<li><a href="#"><i class="icon-tumblr"></i></a></li>
					<li><a href="#"><i class="icon-dribbble"></i></a></li>
					<li><a href="#"><i class="icon-rss"></i></a></li>
					<li><a href="#"><i class="icon-github-alt"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>

			<div class="span1">
				<a id="gototop" class="gototop pull-right" href="#"><i
					class="icon-angle-up"></i></a>
			</div>
			<!--/Goto Top-->
		</div>
	</div>
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
	<div class="modal-header">
		<i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
		<h4>Login</h4>

	</div>
	<!--Modal Body-->
	<div class="modal-body">
		<form class="form-inline" action="app_manager.php?perform_auth=true"
			method="post" id="form-login">
			<input type="text" class="input-small" name="username"
				placeholder="Email/Username"> <input type="password"
				class="input-small" name="password" placeholder="Password">
			<button type="submit" class="btn btn-primary">Sign in</button>
		</form>
		<a href="forgot_pass.php">Forgot your password?</a>
		<div class="pull-right">
			Not a member? <A href="register.php">Register</A>
		</div>
	</div>
	<!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>

</html>
