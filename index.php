<?php include('includes/header.html'); ?>
	<!-- Hero  -->
	<section id="hero">
		<div class="container h-100">
			<div class="row align-items-center h-100 hero-row">
				<!-- Video -->
				<div class="col-md-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5Rmv3nliwCs?rel=0" allowfullscreen modestbranding></iframe>
					</div>
				</div>
				<!-- Sign Up Form -->
				<div class="col-md-6 jumbotron">
					<form>
						<div class="container">
							<h3 lang="en">Sign Up</h3>
							<input type="name" placeholder="Name" id="name" class="form-control" lang="en">
							<br>
							<input type="surname" placeholder="Surname" id="surname" class="form-control" lang="en">
							<br>
							<input type="tel" placeholder="Phone" id="tel" class="form-control" lang="en">
							<br>
							<input type="email" placeholder="Email" id="email" class="form-control">
							<br>
							<button type="button" name="button" id="sendForm" class="btn btn-success btn-lg mb-1" lang="en">Sign Up</button>
					</form>
					<div id="errorMess"></div>
					<div id="successMess"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Text block -->
	<section id="text-block">
		<div class="container text-block-container">
			<div class="row align-items-center">
				<div class="col-md-6 text-block-1"> <span class="subtitle-icon">
      <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 60h60V0z"></path>
      </svg>
      </span> <span class="text-block-subtitle" lang="en">Subtitle</span>
					<h2 lang="en">Heading</h2>
					<p class="text-block-subtitle-p" lang="en">The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a bit of JavaScript. It works with a series of images, text, or custom markup. It also includes support for previous/next controls and indicators.</p>
				</div>
				<div class="col-md-6 text-block-2"> <span class="subtitle-icon-2">
      <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 60h60V0z"></path>
      </svg>
      </span> <span class="text-block-subtitle" lang="en">Subtitle</span>
					<h2 lang="en">Heading</h2>
					<p class="text-block-subtitle-p" lang="en">The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a bit of JavaScript. It works with a series of images, text, or custom markup. It also includes support for previous/next controls and indicators.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Carousel-->
	<section id="carousel">
		<div class="align-items-center">
			<div class="container">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active"> <img class="d-block w-100" src="images/1.jpg" alt="First slide"> </div>
						<div class="carousel-item"> <img class="d-block w-100" src="images/2.jpg" alt="Second slide"> </div>
						<div class="carousel-item"> <img class="d-block w-100" src="images/3.jpg" alt="Third slide"> </div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
				</div>
			</div>
		</div>
	</section>
	<?php include('includes/footer.html'); ?>