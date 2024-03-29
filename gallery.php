<?php
  	ob_start();
	session_start();
	$_SESSION['page'] = "GALLERY" ;
  	include('baseHeader.html');
  	require_once('resources/dbconfig.php');
?>
<body>


<?php
  include('baseNavigation.php');
?>

<div class='container gallery'>
	
	<h2>NMKRV College, Jayanagar, Bangalore Workshops( Aug 2013 )</h2>
	<div class="row">
		<div class="span3">
			<a id="image15" class="polaroid" href="#pic-15" rel="lightbox" title="first image"> <img src="resources/images/gallery/jay1_s.jpg" alt="image" /> </a>
		</div>
		<div class="span3">
			<a id="image16" class="polaroid" href="#pic-16" rel="lightbox" title="first image"> <img src="resources/images/gallery/jay2_s.jpg" alt="image" /> </a>
		</div>
		<div class="span3">
			<a id="image17" class="polaroid" href="#pic-17" rel="lightbox" title="first image"> <img src="resources/images/gallery/jay3_s.jpg" alt="image" /> </a>
		</div>
		<div class="span3">
			<a id="image18" class="polaroid" href="#pic-18" rel="lightbox" title="first image"> <img src="resources/images/gallery/jay4_s.jpg" alt="image" /> </a>
		</div>
	</div>

	<div class="row">
		<div class="span3">
			<a id="image19" class="polaroid" href="#pic-19" rel="lightbox" title="first image"> <img src="resources/images/gallery/jay5_s.jpg" alt="image" /> </a>
		</div>
		<div class="span3">
			<a id="image20" class="polaroid" href="#pic-20" rel="lightbox" title="first image"> <img src="resources/images/gallery/jay6_s.jpg" alt="image" /> </a>
		</div>
		
	</div>

	<h2> Bangalore Workshops ( July/May, 2013 )</h2>
	<div class="row">

		<div class="span3">
			<a id="image6" class="polaroid" href="#pic-6" rel="lightbox" title="first image"> <img src="resources/images/gallery/bang1_s.jpg" alt="image" /> </a>
		</div>

		<div class="span3">
			<a id="image7" class="polaroid" href="#pic-7" rel="lightbox" title="first image"> <img src="resources/images/gallery/bang2_s.jpg" alt="image" /> </a>
		</div>

		<div class="span3">
			<a id="image8" class="polaroid" href="#pic-8" rel="lightbox" title="first image"> <img src="resources/images/gallery/bang3_s.jpg" alt="image" /> </a>
		</div>

		<div class="span3">
			<a id="image9" class="polaroid" href="#pic-9" rel="lightbox" title="first image"> <img src="resources/images/gallery/bang4_s.jpg" alt="image" /> </a>
		</div>

	</div>

	<div class="row">

		

		<div class="span3">
			<a id="image10" class="polaroid" href="#pic-10" rel="lightbox" title="first image"> <img src="resources/images/gallery/bang5_s.jpg" alt="image" /> </a>
		</div>

		<div class="span3">
			<a id="image11" class="polaroid" href="#pic-11" rel="lightbox" title="first image"> <img src="resources/images/gallery/bang6_s.jpg" alt="image" /> </a>
		</div>

		<div class="span3">
			<a id="image12" class="polaroid" href="#pic-12" rel="lightbox" title="first image"> <img src="resources/images/gallery/bang7_s.jpg" alt="image" /> </a>
		</div>

		<div class="span3">
			<a id="image13" class="polaroid" href="#pic-13" rel="lightbox" title="first image"> <img src="resources/images/gallery/bang8_s.jpg" alt="image" /> </a>
		</div>

		

	</div>

	<div class="row">
		<div class="span3">
			<a id="image14" class="polaroid" href="#pic-14" rel="lightbox" title="first image"> <img src="resources/images/gallery/bang9_s.jpg" alt="image" /> </a>
		</div>
	</div>


	<h2> Dehradun Workshops ( April, 2013 )</h2>
	<div class="row">
		
		<div class="span3">
			<a id="image1" class="polaroid" href="#pic-1" rel="lightbox" title="first image"> <img src="resources/images/gallery/dun1_s.jpg" alt="image" /> </a>
		</div>

		<div class="span3">
			<a id="image2" class="polaroid" href="#pic-2" rel="lightbox" title="first image"> <img src="resources/images/gallery/dun2_s.jpg" alt="image" /> </a>
		</div>

		<div class="span3">
			<a id="image3" class="polaroid" href="#pic-3" rel="lightbox" title="first image"> <img src="resources/images/gallery/dun3_s.jpg" alt="image" /> </a>
		</div>

		<div class="span3">
			<a id="image4" class="polaroid" href="#pic-4" rel="lightbox" title="first image"> <img src="resources/images/gallery/dun4_s.jpg" alt="image" /> </a>
		</div>

	</div>

	<div class="row">

		<div class="span3">
			<a id="image5" class="polaroid" href="#pic-5" rel="lightbox" title="first image"> <img src="resources/images/gallery/dun5_s.jpg" alt="image" /> </a>
		</div>

	</div>

		<div id="pic-1">
		    <img src="resources/images/gallery/dun1.jpg" alt="image" />
		</div>
		<div id="pic-2">
		    <img src="resources/images/gallery/dun2.jpg" alt="image" />
		</div>
		<div id="pic-3">
		    <img src="resources/images/gallery/dun3.jpg" alt="image" />
		</div>
		<div id="pic-4">
		    <img src="resources/images/gallery/dun4.jpg" alt="image" />
		</div>
		<div id="pic-5">
		    <img src="resources/images/gallery/dun5.jpg" alt="image" />
		</div>
		<div id="pic-6">
		    <img src="resources/images/gallery/bang1.jpg" alt="image" />
		</div>
		<div id="pic-7">
		    <img src="resources/images/gallery/bang2.jpg" alt="image" />
		</div>
		<div id="pic-8">
		    <img src="resources/images/gallery/bang3.jpg" alt="image" />
		</div>
		<div id="pic-9">
		    <img src="resources/images/gallery/bang4.jpg" alt="image" />
		</div>
		<div id="pic-10">
		    <img src="resources/images/gallery/bang5.jpg" alt="image" />
		</div>
		<div id="pic-11">
		    <img src="resources/images/gallery/bang6.jpg" alt="image" />
		</div>
		<div id="pic-12">
		    <img src="resources/images/gallery/bang7.jpg" alt="image" />
		</div>
		<div id="pic-13">
		    <img src="resources/images/gallery/bang8.jpg" alt="image" />
		</div>
		<div id="pic-14">
		    <img src="resources/images/gallery/bang9.jpg" alt="image" />
		</div>
		<div id="pic-15">
		    <img src="resources/images/gallery/jay1.jpg" alt="image" />
		</div>
		<div id="pic-16">
		    <img src="resources/images/gallery/jay2.jpg" alt="image" />
		</div>
		<div id="pic-17">
		    <img src="resources/images/gallery/jay3.jpg" alt="image" />
		</div>
		<div id="pic-18">
		    <img src="resources/images/gallery/jay4.jpg" alt="image" />
		</div>
		<div id="pic-19">
		    <img src="resources/images/gallery/jay5.jpg" alt="image" />
		</div>
		<div id="pic-20">
		    <img src="resources/images/gallery/jay6.jpg" alt="image" />
		</div>



	
</div><!-- container -->

<?php
	include('footer.php');
?>

</body>
</html>



