<div id="heading-breadcrumbs" class="border-top-0 border-bottom-0">
    <div class="container">
      <div class="row d-flex align-items-center flex-wrap">
        <div class="col-md-7">
          <h1 class="h2">Contact Us</h1>
        </div>
        <div class="col-md-5">
          <ul class="breadcrumb d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ;?>">Home</a></li>
            <li class="breadcrumb-item active">Contact</li>
          </ul>
        </div>
      </div>
    </div>
</div>
<div id="content">
        <div id="map" class="with-border">
				<div id="googleMap" style="height: 310px;">&nbsp;</div>
					<script>
					function myMap() {
					var myCenter = new google.maps.LatLng(37.618228928074544, -122.13935184582134);
					var mapProp = {center:myCenter, zoom:9, scrollwheel:true, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
					var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
					var marker = new google.maps.Marker({position:myCenter});
					marker.setMap(map);
					}
					</script>
					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeOLEmQMnt6O2kEXJ7llYr1xw2y-BEm6M&callback=myMap"></script>
        </div>
        <div id="contact" class="container">
          <div class="row">
            <div class="col-lg-8">
              <section class="bar">
                <div class="heading">
                  <h3>We are always here</h3>
                </div>
                <p class="lead">Are you curious about something? Do you have some kind of problem with your Jeep? </p>
                <p class="text-sm">Some of our members are true experts and able to solve any Jeep problems. Just send us a note!</p>
                <div class="heading">
                  <h3>Contact form</h3>
                </div>
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input id="firstname" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input id="lastname" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input id="subject" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-template-outlined"><i class="fa fa-envelope-o"></i> Send message</button>
                    </div>
                  </div>
                </form>
              </section>
            </div>
            <div class="col-lg-4">
              <section class="bar mb-0">
                <h3 class="text-uppercase">Our Location:</h3>
                <p class="text-sm">Hayward, CA</p>
              </section>
            </div>
          </div>
        </div>
      </div>
      
      