
<?php
// Email Submit
// Note: filter_var() requires PHP >= 5.2.0
if ( isset($_POST['email']) && isset($_POST['name']) && isset($_POST['message']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
 
  // detect & prevent header injections
  $test = "/(content-type|bcc:|cc:|to:)/i";
  foreach ( $_POST as $key => $val ) {
    if ( preg_match( $test, $val ) ) {
      exit;
    }
  }

$headers = 'From: ' . '<' . $_POST["email"] . '>' . "\r\n" .
    'Reply-To: ' . $_POST["email"] . "\r\n";
$message = 'Booking for ' . $_POST["services"] . "\r\n" . 'Name :' . $_POST["name"]
. "\r\n" . 'Vehicle Number :' . $_POST["vehiclenumber"]
. "\r\n" . 'Mobile Number :' . $_POST["contactno"]
. "\r\n" . 'Appointment Date :' . $_POST["appointmentDt"]
. "\r\n" . 'Appointment Time :' . $_POST["appointmentTime"]
. "\r\n" . 'Message :' . $_POST['message']
. "\r\n" . 'Thank You';
$subject = "Booking from Web Site";

mail( "skcarcare17@gmail.com", $subject, $message, $headers );
echo '<script>alert("Booked successfully, Thank you for choosing us")</script>'; 
// header("Location: http://www.skcarcare.in/");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SK car care,Karaikal</title>
    <meta charset="utf-8">
    <meta name="description" content="The Leading Vechicle experts in Karaikal,Contact today for more offers.The Perfect Car service in Karaikal at affordable Price.">
  <meta name="keywords"
    content="SK car care,SK car care karaikal,best car service center in karaikal,car service center in karaikal,car painting services in karaikal,car denting services in karaikal,car ac services in karaikal,mahindra first choice karaikal">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
   
  
      <div class="wrap">
	    <div class="container">
				<div class="row justify-content-between">
					<div class="col-md-3 d-flex align-items-center">
						<a class="navbar-brand" href="index.html"><span><img src="images/car logo new one copy.png"style="width:300px;height:100px;"></span></a>
					</div>
							
				        </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
			
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	        	<li class="nav-item"><a href="project.html" class="nav-link">Project</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-start">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
		          		<h2>We are best car repair services</h2>
			            <h1 class="mb-4">Make your car last longer</h1>
			            <p><a href="#appointment" class="btn btn-primary">Book an appointment</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-start">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
		          		<h2>We care about your car</h2>
			            <h1 class="mb-4">It's time to come to repair your car</h1>
			            <p><a href="#appointment" class="btn btn-primary">Book an appointment</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div>
		
		<section class="intro">
			<div class="container intro-wrap">
				<div class="row no-gutters">
					<div class="col-md-12 col-lg-9 bg-intro d-sm-flex align-items-center align-items-stretch">
						<div class="intro-box d-flex align-items-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<i class="flaticon-repair"></i>
							</div>
							<h2 class="mb-0">Are you ready? <span>Let's repair it now!</span></h2>
						</div>
						<a href="#appointment" class="bg-primary btn-custom d-flex align-items-center"><span>Book an Appointment</span></a>
					</div>
				</div>
			</div>	
		</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">We offer Services</span>
            <h2>Our car services</h2>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-car-service"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Oil change</h3>
                <p>An oil change from our service technicians is a comprehensive maintenance service during which we carefully replace your vehicle’s oil, check all other fluids, replace your oil filter, and inspect your engine for leaks.</p>
                <p><a href="#" class="btn-custom"></a></p>
              </div>
            </div>
            
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tyre"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Tyre Change</h3>
                <p>SK car care provides all type of car tyre changes and wheel care services like Wheel Alignment, Tyre rotation, and Wheel balancing.</p>
                <p><a href="#" class="btn-custom"></a></p>
              </div>
            </div> 
          </div>
          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-battery"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Batteries</h3>
                <p>A good battery performance is important for a car to run perfectly,we bring the best Car battery replacement service near you at affordable prices.</p>
                <p><a href="#" class="btn-custom"></a></p>
              </div>
            </div> 
           
              <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-car-engine"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Engine Repair</h3>
                <p> We provide Car Engine Repair Service. Our entries services are timely rendered and maintain effective repairmen of car engines. We ensure to render maximum client satisfaction to our  valuable customer.</p>
                <p><a href="#" class="btn-custom"></a></p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-tow-truck"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Cashless Insurance Claim</h3>
                <p>SK car care provides cashless car insurance policy can get their vehicle repaired at any of the car garages as listed by the car insurance provider without paying a single rupee.  </p>
                <p><a href="#" class="btn-custom"></a></p>
              </div>
            </div>
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-repair"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Car Maintenance</h3>
                <p>SK car care Services offer unique annual car service & maintenance packages that offer huge savings on services like car wash and car repairs. </p>
                <p><a href="#" class="btn-custom"></a></p>
              </div>
            </div>
            </div>
            <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-car-service"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Under body Maintenance</h3>
                <p> we are providing a qualitative Car Body Repairing Service. The provided service is rendered as per the exact requirements of our precious customers.</p>
                <p><a href="#" class="btn-custom"></a></p>
              </div>
            </div>
             <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-repair"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Interior Cleaning</h3>
                <p>Car Interior Vacuum Cleaning (Including seats and boot) Car Foot Mats Cleaning. Car Dashboard Conditioning. Car Dashboard Basic Cleaning. Car Seat Dry-cleaning. Upholstery Cleaning. Indoor Glass & Side Panels Cleaning. </p>
                <p><a href="#" class="btn-custom"></a></p>
              </div>
            </div>   
          </div>
          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-repair"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Denting and Painting</h3>
                <p>SK car care have trained technicians and equipment technology to restore your paint jobs original look and feel with high quality and cost effective. </p>
                <p><a href="#" class="btn-custom"></a></p>
              </div>
            </div>  
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-repair"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Insurance Renewal</h3>
                <p>Searching for Car insurance renewal service in Karaikal?, So you are at the right place here we are one of the best car service center in Karaikal. We also provide car insurance renewal services in Karaikal. </p>
                <p><a href="#" class="btn-custom"></a></p>
              </div>
            </div>  
          </div>
           <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-repair"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">AC Services</h3>
                <p>we provides regular ac services and high performance ac services like Gas recharge, Ac gas leakage check-up, Full condenser cleaning, Blower and Vent cleaning. </p>
                <p><a href="#" class="btn-custom"></a></p>
              </div>
            </div>
             <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-repair"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Genuine Spare Parts</h3>
                <p>SK Car care provides all types of car body parts and Accessories at affordable prices. </p>
                <p><a href="#" class="btn-custom"></a></p>
              </div>
            </div>  
          </div>

 

        </div>
    	</div>
    </section>
   	
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to SK car care</span>
		            <h2 class="mb-4">We help more than 8 years of serving customer car</h2>
		            <p>We are the Leading Vechicle Experts in Karaikal and the perfect car service in Karaikal at affordable price.
</p>
		            <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-2" data-toggle="tab" href="#home1">Our Mission</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">Our Vision</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Our Value</a>
									  </li>
									</ul>
									<div class="tab-content rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>The longer you wait,the harder it is to produce outstanding customer service.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p>Make a customer, not a sale.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p>Best place to get your car repaired.</p>
									  </div>
									</div>
								</div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-counter" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8">0</strong>
              </div>
              <div class="text">
              	<span>Years of Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="4500">0</strong>
              </div>
              <div class="text">
              	<span>Project completed</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="4000">0</strong>
              </div>
              <div class="text">
              	<span>Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="2">0</strong>
              </div>
              <div class="text">
              	<span>Award Winning</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

		<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" id="appointment" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
    				<span class="subheading">Booking an Appointment</span>
    				<h2 class="mb-4">Free Consultation</h2>
    				<form method="post" action="sendmail.php" class="appointment">
    					<div class="row">
    						<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="services" id="" class="form-control">
	                      	<option value="">Select services</option>
	                        <option value="Change Oil">Change Oil</option>
	                        <option value="Engine Repair">Engine Repair</option>
	                        <option value="Battery Replace">Battery Replace</option>
	                        <option value="Car denting">Car denting</option>
	                         <option value="Ac services">Ac services</option>
	                          <option value="Spare parts">Spare parts</option>
	                        <option value="Change Tyre">Change Tyre</option>
	                        <option value="Car painting">Car painting</option>
	                         <option value="Other services">Other services</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="name" class="form-control" placeholder="Your Name">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="vehiclenumber" class="form-control" placeholder="Vehicle number">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="email" name="email" required class="form-control" placeholder="Email">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="contactno" class="form-control" placeholder="Mobile Number">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-calendar"></span></div>
			            		<input type="text" name="appointmentDt" class="form-control appointment_date" placeholder="Date">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-clock-o"></span></div>
			            		<input type="text" name="appointmentTime" class="form-control appointment_time" placeholder="Time">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Send message" class="btn btn-dark py-3 px-4">
			            </div>
								</div>
    					</div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Decent Workers and the Quality of Work is also Good.</p>
                    <div class="d-flex align-items-center">
                    
                    	<div class="pl-3">
		                    <p class="name">Deva</p>
		                    <span class="position"></span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Two Weeks ago,I gave my car for the complete body painting,now my car looks dashing.</p>
                    <div class="d-flex align-items-center">
                    	<div class="pl-3">
		                    <p class="name">Akilesh</p>
		                    <span class="position"></span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">I understood that electrical services on car were often challenging to fix it.SK car care not only fixed the current problem but all the other minor issues have disappeared.</p>
                    <div class="d-flex align-items-center">
                    	<div class="pl-3">
		                    <p class="name">Bala Murugan</p>
		                    <span class="position"></span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">They are Well knowledgeble and customer-focussed approach.</p>
                    <div class="d-flex align-items-center">
                    	<div class="pl-3">
		                    <p class="name">Sriram</p>
		                    <span class="position"></span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Great Customer srevice, got my annoying engine warning light fixed, fitted me in really quickly.</p>
                    <div class="d-flex align-items-center">
                    	<div class="pl-3">
		                    <p class="name">Prasath</p>
		                    <span class="position"></span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
               <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Beacuse of their Denting Services in my car, now my car looks too good.</p>
                    <div class="d-flex align-items-center">
                      <div class="pl-3">
                        <p class="name">Prabhu</p>
                        <span class="position"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">They gave Monthly offer Packs for their Customer,that was great initiative.</p>
                    <div class="d-flex align-items-center">
                      <div class="pl-3">
                        <p class="name">Aasife</p>
                        <span class="position"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Best denting and painting services in karaikal.</p>
                    <div class="d-flex align-items-center">
                      <div class="pl-3">
                        <p class="name">Krishna</p>
                        <span class="position"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Fantastic customer care, Always so polite and professional, Nothing is too difficult for them.</p>
                    <div class="d-flex align-items-center">
                      <div class="pl-3">
                        <p class="name">Sundar</p>
                        <span class="position"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Hi, I would just like to record that we have received excellent service from this company.</p>
                    <div class="d-flex align-items-center">
                      <div class="pl-3">
                        <p class="name">Ram Kumar</p>
                        <span class="position"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">News &amp; Blog</span>
            <h2>Latest news from our blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		
              		<div class="desc pl-3">
              			<span>Posted by Rahul</span>
              			<span>11 may 2019</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Best wheel alignment &amp; and wheel Balancing</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="desc pl-3">
              			<span>Posted by Selva Kumar</span>
              			<span>24 February 2020</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Best Car Painting Services </a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="desc pl-3">
              			<span>Posted by Eswaran</span>
              			<span>12 march 2019</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Best car engine services </a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Price &amp; Plans</span>
            <h2>Pricing</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<span class="excerpt d-block">PMS Services</span>
	            <span class="price"><span>Starts at</span> <span class="number">3499*</span></span>
	            
	            <div class="pricing-text">
	              <p>PMS is a Schedule of planned Maintenance Activities aimed to prevent any breakdowns and failures of your car.</p>
	            </div>

	            <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<span class="excerpt d-block">Underchassis Painting</span>
	            <span class="price"><span>Starts at</span> <span class="number">1999*</span></span>
	            
	            <div class="pricing-text">
	              <p>Protect the parts that do their job unseen with undercarriage paint and other coatings from SK car care.</p>
	            </div>

	            <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<span class="excerpt d-block">Rubbing & Polishing</span>
	            <span class="price"><span>Starts at</span> <span class="number">2499*</span></span>
	            
	            <div class="pricing-text">
	              <p>You can choose our rubbing/polishing service which will get rid all the surface scratches and swirl marks from your car.</p>
	            </div>

	            <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<span class="excerpt d-block">Single Panel Painting</span>
	            <span class="price"><span>Starts at</span> <span class="number">2799*</span></span>
	            
	            <div class="pricing-text">
	              <p>We apply a single-stage enamel paint to refresh your vechile's appearance.</p>
	            </div>

	            <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Projects</span>
            <h2>Completed Projects</h2>
          </div>
        </div>
			</div>
			<div class="container-fluid px-md-0">
				<div class="row no-gutters">
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-1.jpg);">
              <a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <span>Car Maintenence</span>
                  <h2><a href="work-single.html">Car Maintenence Works</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-2.jpg);">
            	<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Oil Change</span>
	              	<h2><a href="work-single.html">Oil Changing Works</a></h2>
	              </div>
              </div>
            </div>
             
            </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-3.jpg);">
            	<a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Engine</span>
	              	<h2><a href="work-single.html">Engine Diagnostics</a></h2>
	              </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-4.jpg);">
            	<a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Tyre change</span>
	              	<h2><a href="work-single.html">Tyre Changing works</a></h2>
	              </div>
              </div>
            </div>
          </div>
             
         
           <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/vacuum.jpg);">
              <a href="images/vacuum.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <span>Interior vacuum Cleaning</span>
                  <h2><a href="work-single.html">Interior vacuum Cleaning works</a></h2>
                </div>
              </div>
            </div>
          </div>
           <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/painting1.jpg);">
              <a href="images/painting1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <span>Car Painting</span>
                  <h2><a href="work-single.html">Car Painting works</a></h2>
                </div>
              </div>
            </div>
          </div>
           <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/underbody1.jpg);">
              <a href="images/underbody1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <span>Under Body</span>
                  <h2><a href="work-single.html">Under Body Maintenence works</a></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/Denting1.jpg);">
              <a href="images/Denting1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                  <span>Denting</span>
                  <h2><a href="work-single.html">Denting works</a></h2>
                </div>
              </div>
            </div>
          </div>


        </div>
			</div>
		</section>	

    <footer class="footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#"><span><img src="images/car logo new one copy.png"style="width:300px;height:200px;"></span></a></h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Oil Change</a></li>
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Batteries</a></li>
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Car Painting</a></li>
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Ac Services</a></li>
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Engine Repair</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Contact information</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map-marker"></span><span class="text">No.685/1,BHARATHIYAR ROAD,KEELAKASAKUDI, KARAIKAL - 609 609</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">9944402000 / 8056275009 / 04368-231888</span></a></li>
	                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">skcarcare17@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Business Hours</h2>
              <div class="opening-hours">
              	<h4>Opening Days:</h4>
              	<p class="pl-3">
              		<span>Monday – Saturday : 9am to 6.30 pm</span>
              	</p>
              	<h4>Holidays:</h4>
              	<p class="pl-3">
              		<span>All Sunday Days</span>
              		<span>are Official Holidays</span>
              	</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> This website is made by <a href="https://webdomus.herokuapp.com/index.html" target="_blank">webdomus</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://Colorlib" target="_blank">colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <!-- <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg> -->
<img  class="circular" src="images/loader.gif" />
  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>