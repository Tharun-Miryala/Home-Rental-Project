<!-- <div class="row"> -->			
  <div class="col-md-11 col-xs-12 col-sm-12"><br>  	
  	<div class="alert alert-secondary" role="alert">
  		<?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
  		<h2 class="text-center">Apartment Rooms</h2><br>
  		<form action="" method="post" enctype="multipart/form-data">

		  	 <div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="apartment_name">Apartment Name:<a style="color:red">*</a></label>
				    <input type="text" class="form-control" id="apartment_name" placeholder="Apartment Name" name="apartment_name" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="mobile">Mobile:<a style="color:red">*</a></label>
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="mobile" title="10 digit mobile number" placeholder="10 digit mobile number" name="mobile" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="alternat_mobile">Alternat Mobile:</label>
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="alternat_mobile" title="10 digit mobile number" placeholder="10 digit mobile number" name="alternat_mobile">
				  </div>
				</div>
			</div>

			<div class="row">
		  	 	<div class="col-md-6">
				  <div class="form-group">
				    <label for="email">Email:<a style="color:red">*</a></label>
				    <input type="email" class="form-control" id="email" placeholder="Email id" name="email" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="plot_number">Plot/Home Number:<a style="color:red">*</a></label>
				    <input type="text" class="form-control" id="plot_number" placeholder="Plot Number/Home Number" name="plot_number" required>
				  </div>
				 </div>				 
			</div>

			<div class="row">
				<div class="col-md-3">
				  <div class="form-group">
				    <label for="country">Country:<a style="color:red">*</a></label>
				    <input type="country" class="form-control" id="country" placeholder="Country" name="country" required>
				  </div>
			  	</div>

			 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="state">State:<a style="color:red">*</a></label>
				    <input type="state" class="form-control" id="state" placeholder="State" name="state" required>
				  </div>
			  	</div>
			  	<div class="col-md-4">
				  <div class="form-group">
				    <label for="city">City:<a style="color:red">*</a></label>
				    <input type="city" class="form-control" id="city" placeholder="City" name="city" required>
				  </div>
			 	 </div>
			</div>

			<div class="row">
				<div class="col-md-4"> 
					<div class="form-group"> 
						<label for="landmark">Landmark:</label> 
						<input type="landmark" class="form-control" id="landmark" placeholder="landmark" name="landmark"> 
					</div> 
				</div> 
				<div class="col-md-6"> 
					<div class="form-group"> 
						<label for="address">Address:<a style="color:red">*</a></label> 
						<input type="address" class="form-control" id="address" placeholder="Address" name="address" required> 
					</div> 
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="description">Image</label>
				    <input type="file" name="image" id="image">
				  </div>
				</div>
			</div>

			 <div class="row">			 	
				<div class="col-md-12"> 
					<div class="form-group">
						<a onclick="addMoreRows(this.form);" class="btn  btn-sm">Add More Details</a>     <!--  btn-danger        Add More(Plat Number/Description)-->
						<div id="addedRows"></div>
					</div>
				</div>
			</div>			
			 <button type="submit" class="btn btn-info" name='register_apartment' value="register_apartment">Submit</button>
			</form>	
		</div>			
  	</div>
<!-- </div> -->	