<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->

        <!-- Footer -->
        <div id="footer">
            <div class="row">
                <div class="large-3 columns">
                    <a href="#" class="scrollTop">Наверх</a>
                </div>
                <div class="large-6 columns">
                    Документы, предоставляемые мобильным приложением, не являются официальным изданием и предназначены для справочного применения.
                </div>
                <div class="large-3 columns">
                    <a href="http://imarket.kttsoft.com/">Created by KTTSoft</a>
                </div>
            </div>
        </div>

		<!--<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<!--<div class="site-info">
				<?php // do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php // printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a>
			</div>--><!-- .site-info -->
		<!--</footer><!-- #colophon -->
	</div><!-- #page -->
	
	<script type="text/javascript">
			var validator = new FormValidator('contact-us', [{
				name: 'name',
				display: ' ',
				rules: 'required|alpha|min_length[2]'
			},{
				name: 'email',
				display: ' ',
				rules: 'required|valid_email'
			},{
				name: 'message',
				display: ' ',
				rules: 'required'
			}],
					function(errors, event) {
						$("#contact-us input[title], #contact-us textarea[title]").removeAttr("title").removeClass("form-error");
						if (errors.length > 0) {
							for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
								$("#contact-us #"+errors[i].id).attr('title', errors[i].message).addClass('form-error');
							}
							$().toastmessage('showWarningToast', "Ошибка при заполнении формы");
						}
						else {
							$("#contact-us input").attr("disabled", "true");
							var name = $("#contact-us #name").val();
							var email = $("#contact-us #email").val();
							var message = $("#contact-us #message").val();
							$.ajax({
								type: "POST",
								url: "./wp-content/themes/twentythirteen/send.php",
								data: "type=contact-us&name="+name+"&email="+email+"&message="+message,
								error: function (xml, msg) {
									$().toastmessage('showErrorToast', "При отправке данных произошла ошибка");
								},
								success: function (msg){
									$("#contact-us input, #contact-us textarea").removeAttr("disabled");
									$().toastmessage('showSuccessToast', msg);
								}
							});
						}
					}
			);

			validator.setMessage('required', 'Обязательно для заполнения');
			validator.setMessage('min_length', 'Минимум 2 символа');
			validator.setMessage('valid_email', 'Не верно введенный email');
			validator.setMessage('alpha', 'Должно содержать только буквы');
		</script>
		
		<script type='text/javascript'>   
			function addReferExperationDate(){
				var referUserName = $('#referUserName').val();
				var that = this;
				//check if link is refer
				if(referUserName != 'false'){
					var ec = new evercookie();
					ec.get("id", function(value) { 
						//check first visit
						if(value == undefined){
							var value = new Date().getTime();
							value = value+referUserName;
							ec.set("id", value);
						}
						//set cookie and add one
						$.ajax({
							type: "post",
							url:  "protected/ajax/setExpDate.php", 
							data: {
								'name': referUserName,
								'value': value
							  },
							success: function(msg) {
								if(msg != 'true'){
									alert(msg);
								}
							}
						});
					});
				
				}
			}
        </script>

	<?php wp_footer(); ?>

<!-- jQuery Library -->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>-->

<!-- Foundation Scripts -->
<script src="./wp-content/themes/twentythirteen/js/foundation.min.js"></script>

<script>
    jQuery(document).foundation();
</script>


<script type="text/javascript">
    <!--//--><![CDATA[//><!--
    jQuery(document).ready(function() {
        jQuery('form#contact-us').submit(function(event) {
            jQuery('form#contact-us .error').remove();
            var hasError = false;
            jQuery('.requiredField').each(function() {
                if(jQuery.trim(jQuery(this).val()) == '') {
                    var labelText = jQuery(this).prev('label').text();

                    jQuery(this).addClass('inputError');
                    hasError = true;
                } else if(jQuery(this).hasClass('email')) {
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    if(!emailReg.test(jQuery.trim(jQuery(this).val()))) {
                        var labelText = jQuery(this).prev('label').text();

                        jQuery(this).addClass('inputError');
                        hasError = true;
                    }
                }
            });
            if(!hasError) {
                var formInput = jQuery(this).serialize();
                jQuery.post(jQuery(this).attr('action'),formInput, function(data){
                    jQuery('form#contact-us').slideUp("fast", function() {
                        jQuery(this).before('<p class="tick"><strong>Thanks!</strong> Your email has been delivered!</p>');
                    });
                });
            }

            return false;
        });
    });
    //-->!]]>
</script>


<!-- Page Scripts -->
<script src="./wp-content/themes/twentythirteen/js/gooeymenu.js"></script>
<script src="./wp-content/themes/twentythirteen/js/jquery.parallax.js"></script>
<script src="./wp-content/themes/twentythirteen/js/tabulous.js"></script>
<script src="./wp-content/themes/twentythirteen/js/js.js"></script>
<script src="./wp-content/themes/twentythirteen/js/jquery.carouFredSel-6.2.1.js"></script>
<script src="./wp-content/themes/twentythirteen/js/jquery.prettyPhoto.js"></script>
<script src="./wp-content/themes/twentythirteen/js/plugins.js"></script>
<script src="./wp-content/themes/twentythirteen/js/main.js"></script>

</body>
</html>