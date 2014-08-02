<!doctype html>
<html>
<?php
	include 'head.php';
?>
    
    <div class="row color">
    <div class="col-sm-9 col-xs-12 lead">
    <h1>Contact Form</h1>
        <h4>Please include your name and email and a short description</h4>
        <form class="form-inline" method="post" action="http://martin-calvert.com/formmail.php" role="form">
		<input type="hidden" name="recipients" value="martin@martin-calvert.com" />
    <input type="hidden" name="required" value="EmailAddr:Your email address,FullName:Your name" />

    <!-- STEP 4: Put your subject line in the 'subject' value. -->
    <input type="hidden" name="subject" value="Portfolio Forms" />
     <input type="hidden" name="derive_fields" value="email=EmailAddr,realname=FullName" />

    <!-- this excludes the "email" and "realname" special fields from the body of the email you receive -->
    <input type="hidden" name="mail_options" value="Exclude=email;realname" />
        <div class="form-group">
        <input type="hidden" name="good_url" value="http://martin-calvert.com/goodsub.html"/>
		<input type="hidden" name="bad_url" value="http://martin-calvert.com/badsub.html" />
    <label class="form-label" for="inputName">Name</label>
    <div class="controls">
      <input name="FullName" type="text" id="inputName" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label class="form-label" for="inputEmail">Email</label>
    <div class="controls">
      <input name="EmailAddr" type="email" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label class="form-label" for="inputSubject" >Subject</label>
    <div class="controls">
      <input type="text" id="inputSubject" placeholder="Subject" name="Subject">
    </div>
  </div>
  
  <div class="form-group">
    <label class="form-label" for="inputSubject">Message</label>
    <div class="controls">
      <textarea placeholder="Message" name="Message"></textarea>
    </div>
    
    <input class="btn btn-primary" type="submit" value="Submit" />
  </div>
</form>

    </div>
    <div class="col-sm-3 hidden-xs lead" style="padding-top:5px; padding-bottom:5px">
    <div id="myCarousel" class="carousel slide vertical" data-ride="carousel" data-interval="3500" >
      <div class="carousel-inner">
        <div class="item active">
          <a href="http://www.linkedin.com/pub/martin-calvert/86/972/741/"><img src="assets/img/linkedin.png" alt="Linkedin Logo" class="img-responsive"></a>
          <div class="container">
          View Linkedin
          </div>
        </div>
        <div class="item">
          <a href="http://github.com/sdla4ever"><img src="assets/img/github.png" alt="Github Logo" class="img-responsive"></a>
          <div class="container">
     	View Git Repos
          </div>
        </div>
        <div class="item">
          <a href="http://stackoverflow.com/users/1947373/sdla4ever"><img src="assets/img/stack.png" alt="Stackoverflow Logo" class="img-responsive"></a>
          <div class="container">
            View Stack <span class="hidden-sm">Overflow</span>
          </div>
        </div>
      </div>

    </div>
    <hr>
    <div id="mCarousel" class="carousel slide" data-ride="carousel" data-interval="3500">
      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/img/html5.png" alt="HTML5 Logo" class="img-responsive">
          <div class="container">
          </div>
        </div>
        <div class="item">
          <img src="assets/img/css3.gif" alt="CSS3 Logo" class="img-responsive">
          <div class="container">
     
          </div>
        </div>
        <div class="item">
          <img src="assets/img/jquery.gif" alt="Jquery Logo" class="img-responsive">
          <div class="container">
     
          </div>
        </div>
        <div class="item">
          <img src="assets/img/mysql.png" alt="MySQL Logo" class="img-responsive">
          <div class="container">
     
          </div>
        </div>
        <div class="item">
          <img src="assets/img/java.png" alt="Java Logo" class="img-responsive">
          <div class="container">
            
          </div>
        </div>
      </div>
      </div>
    </div> 
</div><!--row div-->
</div><!--container div-->
</body>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
$('#contact').addClass("active");
</script>

</html>



