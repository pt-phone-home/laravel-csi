@extends('master')

@section('title')
    CSI Home | Experts in ... 
@endsection

@section('content')

    <div class="banner split" id="image">
        <h1>Lorem, ipsum dolor </h1>
        {{-- <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum laudantium quos dolore voluptatibus cupiditate! Illum repellat
            libero voluptas molestias consectetur?
        </p> --}}
        <a href="#!" class="btn-flat banner-button">Read More</a>

    </div>
	<div class="about-banner-container">
		<div class="about-banner">
			<h1 class="about-banner-heading">About Cube Specialist Interiors</h1>
		</div>
	</div>
    

    <div class="about-us-container">
		<div class="about-us">
			<div class="about" data-aos="fade-right" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
				<h2 class="about-heading">Expertise</h2>
				<p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate beatae aut aliquid accusamus deleniti. Impedit eligendi
					iure velit quas optio sequi. Ad quidem, fugiat veniam ea nesciunt aliquam aperiam itaque.</p>
				<p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam ipsam, ducimus, tempora atque vero facere eveniet quis
					consequatur sit dignissimos iusto temporibus, fuga tenetur architecto.</p>
				<p class="about-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit architecto veritatis dolores optio, saepe dicta officia
					debitis blanditiis nam voluptatum doloremque magnam odit at animi eos! Nobis, ipsa dignissimos. Vitae blanditiis fugiat
					minus recusandae molestiae.</p>
			</div>
			<div class="special" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
				<h2 class="special-heading">We specialise in</h2>
				<div class="special-item sp1">
					<i class="fas fa-torii-gate"></i>
					<h4 class="special-item-heading">Commercial Fit Out</h4>
				</div>
				<div class="special-item sp2">
					<i class="fas fa-torii-gate"></i>
					<h4 class="special-item-heading">Commercial Fit Out</h4>
				</div>
				<div class="special-item sp3">
					<i class="fas fa-torii-gate"></i>
					<h4 class="special-item-heading">Commercial Fit Out</h4>
				</div>
				<div class="special-item sp4">
					<i class="fas fa-torii-gate"></i>
					<h4 class="special-item-heading">Commercial Fit Out</h4>
				</div>
			</div>
	
			<div class="images" data-aos="fade-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
				<img src="/images/banner.jpg" id="image" alt="">
				<img src="/images/banner.jpg" class="image" alt="">
				<img src="/images/banner.jpg" alt="">
			</div>
		</div>
    </div>

    <div class="projects-heading-container">
		<div class="projects-heading">
			<h1 class="projects-heading-heading">Our Projects</h1>
		</div>
	</div>
    
    
    <div class="projects">
			<div class="pr1" data-aos="flip-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">

				<h1>Google</h1>

			</div>
			<div class="pr2" data-aos="flip-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
			 data-aos-once="true">
				<h1>Google</h1>
			</div>
			<div class="pr3" data-aos="flip-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
				<h1>Google</h1>
			</div>
			<div class="pr4" data-aos="flip-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
				<h1>Google</h1>
			</div>
			<div class="pr5" data-aos="flip-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
				<h1>Google</h1>
			</div>
			<div class="pr6" data-aos="flip-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
				<h1>Google</h1>
			</div>
    </div>
    
    <div class="clients-banner">
			<h1>Our Clients</h1>
		</div>

		<div class="clients-background">

		</div>

		<div class="clients">
			<div class="cl1">
				<i class="fab fa-youtube">
				</i>
				<h1>YouTube</h1>
			</div>
			<div class="cl2">
				<i class="fab fa-google">
				</i>
				<h1>Google</h1>

			</div>
			<div class="cl3">
				<img src="/images/virgin_media.svg" alt="">
				<h1>Virgin Media</h1>

			</div>
			<div class="cl4">
				<i class="fab fa-youtube">
				</i>
				<h1>YouTube</h1>
			</div>
			<div class="cl5">
				<i class="fab fa-youtube">
				</i>
				<h1>YouTube</h1>
			</div>
			<div class="cl6">
				<i class="fab fa-youtube">
				</i>
				<h1>YouTube</h1>
			</div>

		</div>

		<div class="contact-banner">
			<h1>Contact Us</h1>
		</div>

		<div class="contact-background">

		</div>

		<div class="contact">
			<div class="address">
				<p>CSI</p>
				<p>Unit 1</p>
				<p>333 Limewood Business Park</p>
				<p>Dublin 15</p>
			</div>
			<div class="contact-form-container">
				<form action="">
					<div class="form-group-inline">
						<input type="text" placeholder="Name*" required>
					</div>
					<div class="form-group-inline">
						<input type="number" placeholder="Phone">
					</div>
					<p>
						<div class="form-group-inline">
							<input type="email" placeholder="Email*" required>
						</div>
						<div class="form-group-inline">
							<input type="text" placeholder="Company">
						</div>
					</p>
					<div class="form-group-inline">
						<textarea name="message" id="message" cols="30" rows="10"></textarea>
					</div>

					<button class="btn-flat" data-aos="flip-up" data-aos-duration="4000" data-aos-delay="50">Submit</button>

				</form>
			</div>
		</div>

@endsection