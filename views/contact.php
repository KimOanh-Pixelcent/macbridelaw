<div class="section" style="padding-top:50px; padding-bottom:10px; background-color:; background-image:url(images/home_lawyer_section.jpg); background-repeat:no-repeat; background-position:center top; background-attachment:fixed; background-size:cover; -webkit-background-size:cover" data-stellar-background-ratio="0.5">
	<div class="section_wrapper clearfix">
		<div class="items_group clearfix">
			<div class="column one-fourth column_column ">
				<div class="column_attr " >
					<h3>MacBride Law</h4>
					<p class="big">
						2066 Stadium Drive, Suite 101
						<br />
						Bozeman, MT 59715
					</p>
					<table>
						<tr>
							<td>Mon-Fri</td><td><b>9:00</b> a.m.</td><td><b>5:00</b> p.m.</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="column one-second column_column ">
				<div class="column_attr " >
					<h3>Send us a message</h4>
					<div class="wpcf7" id="wpcf7-f43-p36-o1" lang="en-US" dir="ltr">
						<div class="screen-reader-response"></div>
						<form name="" action="#" method="post" class="wpcf7-form" novalidate="novalidate">
							<div style="display: none;">
								<input type="hidden" name="_wpcf7" value="43" />
								<input type="hidden" name="_wpcf7_version" value="4.1.1" />
								<input type="hidden" name="_wpcf7_locale" value="en_US" />
								<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f43-p36-o1" />
								<input type="hidden" name="_wpnonce" value="9a88b9cc25" />
							</div>
							<div class="column one-second">
								<span class="wpcf7-form-control-wrap your-name">
									<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your name" />
								</span>
							</div>
							<div class="column one-second">
								<span class="wpcf7-form-control-wrap your-email">
									<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your e-mail" />
								</span>
							</div>
							<div class="column one">
								<span class="wpcf7-form-control-wrap your-subject">
									<input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject" />
								</span>
							</div>
							<div class="column one">
								<span class="wpcf7-form-control-wrap your-message">																<textarea name="your-message" cols="40" rows="4" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea></span>
							</div>
							<div class="column one">
								<input type="submit" value="Send a message" class="wpcf7-form-control wpcf7-submit" />
							</div><div class="wpcf7-response-output wpcf7-display-none"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="column one-fourth column_column ">
				<div class="column_attr " >
					<h3>You are welcome</h4>
					<p class="big">
						Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis.
					</p>
					<p>
						Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
					</p>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="section " style="padding-top:40px; padding-bottom:0px; background-color:#EACCBB" >
	<div class="section_wrapper clearfix">
		<div class="items_group clearfix">
			<div class="column one column_column ">
				<div class="column_attr align_center" >
					<h2 style="margin: 0; color: #2991d6;">Call us 406-202-5839</h2>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="section full-width sections_style_0 " >
	<div class="section_wrapper clearfix">
		<div class="items_group clearfix">
			<div class="column one column_map ">

				<div class="google-map-wrapper no_border">
					<div class="google-map" id="google-map-area" style="width:100%; height:500px;">
						&nbsp;
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="section the_content no_content">
	<div class="section_wrapper">
		<div class="the_content_wrapper"></div>
	</div>
	</div>


<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&amp;ver=5.9'></script>
<script>
	function google_maps() {
		var latlng = new google.maps.LatLng(45.6592018,-111.0556073);
		var myOptions = {
			zoom : 16,
			center : latlng,
			mapTypeId : google.maps.MapTypeId.ROADMAP,
			zoomControl : true,
			mapTypeControl : false,
			streetViewControl : false,
			scrollwheel : false
		};
		var map = new google.maps.Map(document.getElementById("google-map-area"), myOptions);
		var marker = new google.maps.Marker({
			position : latlng,
			map : map
		});
	}
	jQuery(document).ready(function($) {
		google_maps();
	});
</script>