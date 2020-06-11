<?php include("common/header.php"); ?>
			<div class="bg-success">
				<div class="row">
					<div class="col-12 col-lg-6 col-md-6">
						<div>
							<img src="images/contact.png" class="w-100">
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-6">
						<div style="background:white;">
							<form action= "contact_insert.php" method= "POST">
								<label class="ml-5 mt-5">Your Name</label>
								<div>
									<input class="ml-5 w-75 border border-danger rounded-lg" type="text" name="name" placeholder="Enter Your Name" required>
								</div>
								<label class="ml-5 mt-4">Your Mobile Number</label>
								<div>
									<input class="ml-5 w-75 border border-danger rounded-lg" type="text" name="mobile" placeholder="Enter Your Mobile Number" required>
								</div>
								<label class="ml-5 mt-4">Your Email</label>
								<div>
									<input class="ml-5 w-75 border border-danger rounded-lg" type="text" name="email" placeholder="Enter Your Email" required>
								</div>
								<label class="ml-5 mt-4">Your Address</label>
								<div>
									<input class="ml-5 w-75 border border-danger rounded-lg" type="text" name="address" placeholder="Enter Your Address" required>
								</div>
								<label class="ml-5 mt-4">Message</label>
								<div>
									<textarea class="border border-danger rounded-lg" style="margin-left:50px;width:75%" name="message" ></textarea>							
								</div>
								<div onsubmit="validation()">
									<button type="submit" class="btn btn-success m-5" id="submit">Send Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-12 col-md-12 col-lg-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6896.362461205658!2d77.51769667290162!3d30.20337449966897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ee72c9ee05ba5%3A0x1b2d7df1626a24a!2sNanauli%2C%20Uttar%20Pradesh%20247121!5e0!3m2!1sen!2sin!4v1591096480706!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
<?php include("common/footer.php"); ?>			