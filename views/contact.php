<div class="section" style="padding-top:50px; padding-bottom:10px; background-color:; background-image:url(images/home_lawyer_section.jpg); background-repeat:no-repeat; background-position:center top; background-attachment:fixed; background-size:cover; -webkit-background-size:cover" data-stellar-background-ratio="0.5">
	<div class="section_wrapper clearfix">
		<div class="items_group clearfix">
			<div class="column one-third column_column ">
				<div class="column_attr " >
					<h3>MacBride Law</h4>
					<p class="big">
						2066 Stadium Drive, Suite 101
						<br />
						Bozeman, MT 59715
					</p>
					<p style="font-weight: bold;">
						Available by appointment
					</p>
					<div>Mon-Fri 9:00AM - 5:00PM</div>
				</div>
			</div>

			<div class="column two-third column_column ">
				<div class="column_attr " >
					<h3>Contact Us</h3>
                    <br/>
					<p class="big">
						Please give us a call or email us. At that time, we look forward to discussing your needs and assessing how we
						can best help you. MacBride Law encourages all potential clients to schedule a consultation or phone conversation
						with Mr. MacBride in order to determine the best course of action for your needs.
					</p>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="section " style="padding-top:40px; padding-bottom:0px; background-color:#EACCBB" >
	<div class="section_wrapper clearfix">
		<div class="items_group clearfix">
			<div class="column one column_column">
				<div class="column_attr align_center">
					<h2 class="contact-details" style="margin: 0; color: #2991d6;">
						Call us at <a href="tel:406-577-2777">406-577-2777</a> <br/> Email us at <a href="mailto:wlm@macbridelaw.com">wlm@macbridelaw.com</a>
					</h2>
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
