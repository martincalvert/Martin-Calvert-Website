<!doctype html>
<html>
<?php
	include 'head.php';
?>
    
    <div class="row color lead col-xs-12">
        <h1>Portfolio</h1>
        <p>Take a look below at some of my previous works, from coding to websites to graphic designs.</p>
 
        <div class="col-xs-12 col-sm-4">
          <h2>Command Line Apps</h2>
          <p>NBA Draft Lottery <br>
<a class="btn btn-xs btn-inverse" data-target="#draft" data-toggle="modal">View &raquo;</a></p>
          <p>Lotto Pool Calculator<br>
 <a class="btn btn-xs btn-inverse" href="#lotto" data-toggle="modal">View &raquo;</a></p>
        </div>
        <div class="col-xs-12 col-sm-4">
          <h2>Websites</h2>
          
          
          
          <p>Creme De La Creme Bakery <br>
          <button type="button" class="btn btn-xs popop btn-inverse" id="popoverId"   data-container="body" data-toggle="popover" data-placement="top" data-content='This will lead you too the Creme Bakery website and you will be leaving this domain.<br>
 <a class="btn btn-xs btn-success" href="//www.CremeBakery.com">Continue &raquo;</a><a class="close" href="#");">&times;</a>'>
  View
</button>
</p>
          <p>Palm Canyon Community Church <br>
          <button type="button" class="btn btn-xs btn-inverse" id="popoverId2" data-container="body" data-toggle="popover" data-placement="top" data-content='This will lead you too the Palm Canyon website and you will be leaving this domain.<br>
 <a class="btn btn-xs btn-success"  href="//www.PalmCanyon.org">View &raquo;</a><a class="close" href="#");">&times;</a>'>
  View
</button>
</p>
       </div>
       <div class="col-xs-12 col-sm-4">
          <h2>Mobile Apps</h2>
          <p>Academy Music Group <br>
          <button type="button" class="btn btn-xs btn-inverse" id="popoverId3" data-container="body" data-toggle="popover" data-placement="top" data-content='This will lead you too Google Play and you will be leaving this domain.<br>
 <a class="btn btn-xs btn-success" id="amgand" href="https://play.google.com/store/apps/details?id=com.AMG.special&feature=search_result#?t=W251bGwsMSwyLDEsImNvbS5BTUcuc3BlY2lhbCJd">Continue &raquo;</a><a class="close" href="#");">&times;</a>'>
  Android
</button>
 <a id="amgios" class="btn btn-xs btn-inverse disabled" href="#">iOS (Coming Soon)&raquo;</a></p>
       </div>
      </div> 
      
      

 <div class="modal fade" id="draft">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Draft Lottery Simulator</h4>
      </div>
      <div class="modal-body">
        <p>This is a command line application that simulates the Draft lottery from the NBA.</p>
    <p>OSX/Linux<br>
<a class="btn btn-inverse btn-xs" href="assets/port/draftlottery_osx.zip" >Download</a> <br>
    Windows<br>
<a class="btn btn-inverse btn-xs" href="assets/port/draftlottery_windows.zip" >Download</a></p>
      </div>
      <div class="modal-footer">
        <p>&copy; Martin Calvert 2014</p>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="lotto">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Lotto Pool Calculator</h4>
      </div>
      <div class="modal-body">
        <p>This command line App allows you to insert lotto picks and then insert the winning numbers and it will compare them to all the number sets and print the winning sets.</p>
    <p>OSX/Linux<br>
<a class="btn btn-inverse btn-xs disabled" href="assets/port/lotto_osx.zip">Coming Soon</a><br>
    Windows<br>
<a class="btn btn-inverse btn-xs disabled" href="assets/port/lotto_windows.zip">Coming Soon</a></p>
      </div>
      <div class="modal-footer">
      <p>&copy; Martin Calvert 2014</p>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
    </div> <!-- /container -->
    


</body>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
$('#works').addClass("active");

$("[data-toggle=popover]")
.popover({html:true});
	
	$('#popoverId2').click(function (e) {
    e.stopPropagation();
});

$(document).click(function (e) {
    if (($('.popover').has(e.target).length == 0) || $(e.target).is('.close')) {
        $('#popoverId2').popover('hide');
    }
});


	$('#popoverId3').click(function (e) {
    e.stopPropagation();
});

$(document).click(function (e) {
    if (($('.popover').has(e.target).length == 0) || $(e.target).is('.close')) {
        $('#popoverId3').popover('hide');
    }
});

$('#popoverId').click(function (e) {
    e.stopPropagation();
});

$(document).click(function (e) {
    if (($('.popover').has(e.target).length == 0) || $(e.target).is('.close')) {
        $('#popoverId').popover('hide');
    }
});
</script>
</html>
