<div class="container">
    	<div class="row">
    	<div class="col-lg-4 col-lg-offset-4">
        	<h3 class="text-center">CivilCrew</h3>
            <p class="text-center">Sign in to Access Admin Dashboard</p>
            <hr class="clean">
       	  <?php  
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm1' ,"name" => "registrationform" );
				     
				    echo form_open("admin/checklogin", $attributes); ?>
              <div class="form-group input-group">
              	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="User Name">
              </div>
              <div class="form-group input-group">
              	<span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <label class="cr-styled">
                    <input type="checkbox">
                    <i class="fa"></i> 
                </label>
                Remember me
              </div>
        	  <button type="submit" class="btn btn-red btn-block">Sign in</button>
            </form>
            <hr>
           
        </div>
        </div>
    </div>