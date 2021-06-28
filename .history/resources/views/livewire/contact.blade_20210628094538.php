
@component('frontend.components.breadCrumb')

@endcomponent


<section class="py-5 bg-white">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4">
<h3 class="mt-1 mb-4">Get In Touch</h3>
<h6 class="text-dark"><i class="mdi mdi-home-map-marker"></i> Address :</h6>
<p>86 Petersham town, New South wales Waedll Steet, Australia PA 6550</p>
<h6 class="text-dark"><i class="mdi mdi-phone"></i> Phone :</h6>
<p>+91 12345-67890, (+91) 123 456 7890</p>
<h6 class="text-dark"><i class="mdi mdi-deskphone"></i> Mobile :</h6>
<p>(+20) 220 145 6589, +91 12345-67890</p>
<h6 class="text-dark"><i class="mdi mdi-email"></i> Email :</h6>
<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="651c0a1017160c1100250208040c094b060a08">[email&#160;protected]</a>, <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="046d6a626b446369656d682a676b69">[email&#160;protected]</a></p>
<h6 class="text-dark"><i class="mdi mdi-link"></i> Website :</h6>
<p>www.Webartinfo.com</p>
<div class="footer-social mb-4"><span>Follow : </span>
<a href="#"><i class="mdi mdi-facebook"></i></a>
<a href="#"><i class="mdi mdi-twitter"></i></a>
<a href="#"><i class="mdi mdi-instagram"></i></a>
<a href="#"><i class="mdi mdi-google"></i></a>
</div>
</div>
<div class="col-lg-8 col-md-8">
<div class="card">
<div class="card-body">
<div class="map" id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="fe709d2aff3d2dda6ebac92d-text/javascript">(function () {
                              var setting = {"height":450,"width":803,"zoom":15,"queryString":"Candás, Spain","place_id":"ChIJuXoxw-aANg0RZ1DUQHMSFTM","satellite":false,"centerCoord":[43.59051127662882,-5.768219799999998],"cid":"0x3315127340d45067","lang":"en","cityUrl":"/spain/candas-8349","cityAnchorText":"Map of Candas, Asturias, Spain","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"215844"};
                              var d = document;
                              var s = d.createElement('script');
                              s.src = 'https://1map.com/js/script-for-user.js?embed_id=215844';
                              s.async = true;
                              s.onload = function (e) {
                                window.OneMap.initMap(setting)
                              };
                              var to = d.getElementsByTagName('script')[0];
                              to.parentNode.insertBefore(s, to);
                              })();
                           </script><a href="../../map-embed.html">1 Map</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="py-5">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 section-title text-left mb-4">
<h2>Contact Us</h2>
</div>
@if(Session::has('message'))

<p class="alert alert-success">{{ Session::get('message') }}</p>

@endif
<form method="POST" action="{{ route('send.contact') }}"  name="sentMessage" class="col-lg-12 col-md-12"  >
    @csrf
<div class="control-group form-group">
<div class="controls">
<label>Full Name <small class="text-danger">*</small></label>
<input type="text" placeholder="Ex.Mandeep Osahan" name="name" class="form-control" id="name" required="" data-validation-required-message="Please enter your name.">
<p class="help-block"></p>
</div>
</div>
<div class="form-row">
<div class="control-group col form-group">
<div class="controls">
<label>Phone Number <small class="text-danger">*</small></label>
<input type="tel" placeholder="1-800-643-4500" name="phone" class="form-control" id="phone" required="" data-validation-required-message="Please enter your phone number.">
</div>
</div>
<div class="control-group col form-group">
<div class="controls">
<label>Email Address <small class="text-danger">*</small></label>
<input type="email" placeholder="youremail@gmail.com" name="email" class="form-control" id="email" required="" data-validation-required-message="Please enter your email address.">
</div>
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Message <small class="text-danger">*</small></label>
<textarea placeholder="Hi there, I would like to ..." rows="4" name="message" cols="100" class="form-control" id="message" required="" data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
</div>
</div>
<div id="success"></div>

<div class="text-right">
<button type="submit" class="btn btn-success" >Send Message</button>
</div>
</form>
</div>
</div>
</section>
