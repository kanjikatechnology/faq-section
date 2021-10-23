<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kanjika Technology - Jquery - Hide / Show / Slide </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<style> 
	#faq, #faq-panel {
	  cursor: pointer;
	  padding: 5px;
	  text-align: center;
	  color: #fff;     
	  background-color: #798077;
	  border: solid 1px #c3c3c3;
	}

	#faq-panel {
	  padding: 80px;
	  display: none;
	}
	</style>
	
</head>
<body>
	<!-- Navbar Start -->
	<section class="container-fluid bg-dark navbar-dark">
		<div class="conatiner">
			<nav class="navbar navbar-expand-md ">
			  <!-- Brand -->
			  <a class="navbar-brand" href="#">Kanjika Technology</a>

			  <!-- Toggler/collapsibe Button -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <!-- Navbar links -->
			  <div class="collapse navbar-collapse" id="collapsibleNavbar">
			    <ul class="navbar-nav">
			      <li class="nav-item">
			        <a class="nav-link" href="#">Link</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Link</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Link</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#"><div id="google_translate_element"></div></a>
			      </li>
			    </ul>
			  </div>
			</nav>
		</div>
	</section>
	<!-- Navbar End -->


	<!-- Jquery Hide / Show start -->
	<section>
		<div id="abc">Click here</div>
		<div id="faq-panel">Welcome to Kanjika Technology!</div>
	</section>
	<!-- Jquery Hide / Show end -->



<!-- jquery hide-show slide start -->
<script> 
	$(document).ready(function(){
	  $("#abc").click(function(){
	    $("#faq-panel").slideToggle("slow");
	  });
	});
</script>
<!-- jquery hide-show slide end -->

</body>
</html>