<?php
	session_start();
	error_reporting(0);

	include 'header.php';
?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/member.js" type="text/javascript"></script>

<div class="container" style="margin-top: 200px;">
	<h4>Other Members</h4>
</div>

<div class="container" >
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
			<ul id="namelist">
				<?php include 'phpfunction/memberfun.php'; ?>
		</ul>
		</div>
	</div> 
	
</div>


<!-- detail modal -->





<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2 id="usermsg"></h2>
        <img src="" id="userimage" height="200" width="100">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>




</body>
</html>
