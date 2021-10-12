
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php 
$location='';

  $cp=$homedata['choose_profeesionaldata'];

   $location=$homedata['citynmae'];
   
   $arracount=count($cp);
   
 
 
?>

<section class="top-section minify">
	<div class="container">
		<div class="search-bar-container">
    	<div class="main-search-bar">
    		<form class="form-inline" id="filterform">
    			<div class="form-group srch-location">
    				<input type="text" class="form-control" placeholder="Enter your Location or City">
    			</div>
    			<div class="form-group srch-category">
    				<select class="form-control selectpic" multiple title='Choose Professional'>
							<option>Companies</option>
							<option>Architects</option>
							<option>Civil Engineers</option>
							<option>Structural Engineers</option>
							<option>Interior Designers</option>
							<option>Modular Kitchens</option>
							<option>M.E.P. Consultants </option>
						</select>
    			</div>
    			<div class="form-group srch-button">
    				<button class="btn btn-block btn-red"> <i class="glyphicon glyphicon-search"></i> Search</button>
    			</div>
    		</form>
    	</div>
		</div>
	</div>
</section>

<section class="page-section listing-section bg-gray">
	<div class="container">
		<div class="listing-container-wrapper">
			<!-- <div class="listing-container-header">
				<div class="row">
					<div class="col-md-12">
						<div id="category-tab" class="scroll_tabs_theme_light">
			        <a href="#" class="tab_selected">View All</a>
			        <a href="#">Architects</a>
			        <a href="#">Companies</a>
			        <a href="#">Civil Engineers</a>
			        <a href="#">Structural Engineers</a>
			        <a href="#">MEP Engineers</a>
			        <a href="#">Interior Engineers</a>
			        <a href="#">Modular Engineers</a>
			        <a href="#">Suppliers</a>
			      </div>
					</div>
				</div>
			</div> -->
			<div class="row">
             
               		<form class="form-inline" method="post" name="filterform"  id="filterform">
            
				<div class="col-md-3">
					
					<div class="filter-sidebar">
						<div class="filter-sidebar-header">
							<h3 class="pull-left">Filter</h3>
							<button class="btn btn-red btn-sm pull-right">Apply Filter</button>
						</div>
						<h4>Professional Type</h4>
						 
                        
                        
                        <ul class="filter-list">
							<li>
								<div class="checkbox">
							    <input type="checkbox" name="jcCheckProfessional[]"   <?php  for($i=0;$i < $arracount;$i++){ 
								
								if($cp[$i]=='1')
								{
									echo"Checked";
									
								}
							 	
								 } ?>   value="1" class="checkboxId projecttybe"id="jcCheckProfessional1">
							    <label for="jcCheckProfessional1">
							       Company
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox" class="checkboxId projecttybe"  <?php  for($i=0;$i < $arracount;$i++){ 
								
								if($cp[$i]=='2')
								{
									echo"checked";
									
								}
							 	
								 } ?>      value="2"   name="jcCheckProfessional[] " id="jcCheckProfessional2">
							    <label for="jcCheckProfessional2">
							       Architects
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox" class="checkboxId projecttybe " <?php  for($i=0;$i < $arracount;$i++){ 
								
								if($cp[$i]=='3')
								{
									echo"checked";
									
								}
							 	
								 } ?>     value="3"   name="jcCheckProfessional[]"   id="jcCheckProfessional3">
							    <label for="jcCheckProfessional3">
							  Civil Engineers
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox" class="checkboxId projecttybe"  <?php  for($i=0;$i < $arracount;$i++){ 
								
								if($cp[$i]=='4')
								{
									echo"checked";
									
								}
							 	
								 } ?>    value="4"   name="jcCheckProfessional[]"   id="jcCheckProfessional4">
							    <label for="jcCheckProfessional4">
							      Structural Engineers 
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox"  name="jcCheckProfessional[]"  <?php  for($i=0;$i < $arracount;$i++){ 
								
								if($cp[$i]=='5')
								{
									echo"checked";
									
								}
							 	
								 } ?>    class="checkboxId projecttybe"    value="5"   id="jcCheckProfessional5">
							    <label for="jcCheckProfessional5">
							       Interior Designers 
							    </label>
							  </div>
							</li>
                            	<li>
								<div class="checkbox">
							    <input type="checkbox"  name="jcCheckProfessional[]"  <?php  for($i=0;$i < $arracount;$i++){ 
								
								if($cp[$i]=='6')
								{
									echo"checked";
									
								}
							 	
								 } ?>    class="checkboxId projecttybe"    value="6"   id="jcCheckProfessional6">
							    <label for="jcCheckProfessional6">
							     MEP Consultants
							    </label>
							  </div>
							</li>
                            	<li>
								<div class="checkbox">
							    <input type="checkbox"  name="jcCheckProfessional[]" <?php  for($i=0;$i < $arracount;$i++){ 
								
								if($cp[$i]=='7')
								{
									echo"checked";
									
								}
							 	
								 } ?>     class="checkboxId projecttybe"    value="7"   id="jcCheckProfessional7">
							    <label for="jcCheckProfessional7">
							  Modular Kitchens
							    </label>
							  </div>
							</li>
						</ul>
                        
                        
                        
						<h4>Project Type</h4>
						<ul class="filter-list">
							<li>
								<div class="checkbox">
							    <input type="checkbox" name="jcCheckProj[]"    value="1" class="checkboxId projecttybe"id="checkproject1">
							    <label for="checkproject1">
							       Villas
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox" class="checkboxId "  value="2"   name="jcCheckProj[]" id="checkproject2">
							    <label for="checkproject2">
							       Offices
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox" class="checkboxId  "  value="3"   name="jcCheckProj[]"   id="checkproject3">
							    <label for="checkproject3">
							       Commercial Buildings
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox" class="checkboxId "  value="4"   name="jcCheckProj[]"   id="checkproject4">
							    <label for="checkproject4">
							       Multiplexes
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox"  name="jcCheckProj[]"  class="checkboxId "    value="5"   id="checkproject5">
							    <label for="checkproject5">
							        Community Spaces
							    </label>
							  </div>
							</li>
						</ul>

						<h4>Services Offered</h4>
						<ul class="filter-list">
							<li>
								<div class="checkbox">
							    <input type="checkbox"  class="checkboxId "     name="Services[]" value="1" id="checkServ1">
							    <label for="checkServ1">
							       New Construction
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox"   class="checkboxId "    name="Services[]"  value="2"  id="checkServ2">
							    <label for="checkServ2">
							       Project Planning
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox"  class="checkboxId "     name="Services[]"  value="3"  id="checkServ3">
							    <label for="checkServ3">
							       Resuming Project
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox"  class="checkboxId "      name="Services[]"    value="4" id="checkServ4">
							    <label for="checkServ4">
							       Demoliton
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox"  class="checkboxId "     name="Services[]" value="5"   id="checkServ5">
							    <label for="checkServ5">
							        Re-Construction
							    </label>
							  </div>
							</li>
						</ul>

						<h4>Sq.ft. Range</h4>
						<ul class="filter-list">
							<li>
								<div class="checkbox">
							    <input type="checkbox" class="checkboxId " value="1"   name="Range[]" id="checkSqft1">
							    <label for="checkSqft1">
							       1000 - 5000 sqft
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox" class="checkboxId "  value="2"   name="Range[]" id="checkSqft2">
							    <label for="checkSqft2">
							       5001 - 10000 sqft
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox" class="checkboxId"  value="3"   name="Range[]" id="checkSqft3">
							    <label for="checkSqft3">
							      10001 - 15000 sqft 
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox" class="checkboxId "  value="4"   name="Range[]" id="checkSqft4">
							    <label for="checkSqft4"> 
							      15001 - 25000 sqft
							    </label>
							  </div>
							</li>
						</ul>

						<h4>Located</h4>
						<ul class="filter-list">
							<li>
								<div class="checkbox">
							    <input type="checkbox"  <?php if($location=='Chennai') { echo"checked";} ?> class="checkboxId  load1"  value="1"  name="Located[]" id="checkLocat1">
							    <label for="checkLocat1">
							      Chennai
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox" <?php if($location=='Bangalore') { echo"checked";} ?>  class="checkboxId load1  " value="2"   name="Located[]" id="checkLocat2">
							    <label for="checkLocat2">
							      Bangalore
							    </label>
							  </div>
							</li>
							<li>
								<div class="checkbox">
							    <input type="checkbox" <?php if($location=='Coimbatore') { echo"checked";} ?>  class="checkboxId load1  "  value="3"   name="Located[]" id="checkLocat3">
							    <label for="checkLocat3">
							      Coimbatore
							    </label>
							  </div>
							</li>
                            
                            <li>
								<div class="checkbox">
							    <input type="checkbox"  <?php if($location=='Coimbatore') { echo"checked";} ?> class="checkboxId  load1 "  value="3"   name="Located[]" id="checkLocat4">
							    <label for="checkLocat4">
							      Coimbatore
							    </label>
							  </div>
							</li>
							
						</ul>


					</div>

				</div>
                
                </form>
                		<div class="col-md-9">
  
					<div class="listing-container">
						<div class="listing-sub-header">
							<div class="row">
								<div class="col-md-6">
									<h2>Search Results</h2>
								</div>
								<div class="col-md-6">
									<div class="filter-section text-right">
                                    		  <?php  
				  
				 $attributes = array('class' => 'form-inline', 'id' => 'jcForm1' ,"name" => "registrationform" );
				     
				    echo form_open("home/savesearch", $attributes); ?>
                    
							 
										  <div class="form-group">
										  	<label>Sort by</label>
										  </div>
										  <div class="form-group">
										    <select class="form-control selectpic">
										    	<option>Highest Rated</option>
										    	<option>Popular First</option>
										    	<option>First Joined</option>
										    	<option>Newly Joined</option>
										    </select>
										  </div>
										  <div class="form-group">
										  	<button type="button"  onClick="savesearchbutton()" class="btn btn-success"><i class="glyphicon glyphicon-star-empty"></i> Save Search</button>
										  </div>

					
									</div>
								</div>
							</div>

						</div>

                    <div id="ajax-content-container">
						<div class="row">
                        <?php   
					 			  foreach ($data as $row){ ?>
							<div class="col-md-4 col-sm-4">
                                          
								<div class="fl-profile-box">
                                

									<div class="fl-box-header"  style="background-image: url(images/cover-default.jpg);">
										<a href="crew_profile/<?php echo $row->reg_id; ?>" class="comp-profile-pic">
											<img src="<?php echo base_url() ?>assets/images/dp-default.jpg">
										</a>
										<h3 class="fl-name-sm"><a href="#"><?php echo $row->reg_name; ?></a></h3>
										<p>
											<span>Company</span><br>
											<span><?php echo $row->reg_address; ?></span>
										</p>
										<p><span class="rating-view" data-score="1"></span> <small>100 Ratings</small></p>
									</div>
									<div class="fl-box-content">
										<h4>Skill Sets</h4>
										<p>Architecture, Civil Engineering, Interior Desiging, MEP Consulting, Structural Engeneering, Modular Kitchens</p>
										<div class="fl-box-footer">
											<a href="#" class="link">25 User Reviews</a>	
										</div>
									</div>
                                    
                                                   
								</div>
                                
               
							</div>
					 <?php } ?> 
							
						</div>
		</div>
        					</form>
        
						<div class="pagination-container">
							<ul class="pagination">
								<li class="disabled"><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>

					</div>

					
 
                </div>
			</div>

		</div>
	</div>    
</section>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>  

$( document ).ready(function() {
 
loadresult();
});
	
	 function loadresult()
 { 
 
var dataString = $("form").serialize();
  
    $.ajax({
        url: '<?php echo base_url();?>home/submit_form/',
        async: false,
        type: 'POST',
        data: dataString,
        dataType: 'html',
        success: function(data) {
        $('#ajax-content-container').html(data);
    }
});


}
	
$('.checkboxId1111111').change(function() {
	 $.ajax({
    type: "POST",
    url: "<?php echo site_url('home/test'); ?>",
    data: $("#filterform").serializeArray(),
    success: function(resp){
        $('#container').html(resp);
    },
    error: function(resp) { alert(JSON.stringify(resp)); }
});
	
	
	});
</script>

<script>   //no need to specify the language
 $(function(){
  $(".checkboxId4534").click(function(e){

            $.ajax({
                url: RootUrl + "Players/RatePlayer",
                type: 'POST',
                data: { object: JSON.Encode(obj) , vote1: vote1, vote2: vote2, vote3: vote3,vote4: vote4 },
                success: function (ratingAreaViewResult) {

                    alert("success");
                    document.getElementById("ratingArea").html(ratingAreaViewResult);
                },
                error: function (xhr) { alert("Something seems Wrong"); }
            });

        });
});
</script>


 
 
<!-- here is the script that will do the ajax. It is triggered when the form is submitted -->
<script>
   $(function(){
       $(".checkboxId").click(function(e){ 
 
var dataString = $("form").serialize();
  
    $.ajax({
        url: '<?php echo base_url();?>home/submit_form/',
        async: false,
        type: 'POST',
        data: dataString,
        dataType: 'html',
        success: function(data) {
        $('#ajax-content-container').html(data);
    }
});


});
   });


function savesearchbutton()

{  
  var jcCheckProfessional1='';
  var  PROJECTTYPE='';
  var SERVICESOFFERED='';
  var RANGE='';
  var locat='';
  
   jcCheckProfessional1=document.getElementById('prt').value;
 
    PROJECTTYPE=document.getElementById('pty').value;
  
     SERVICESOFFERED=document.getElementById('so').value;
 
    RANGE=document.getElementById('sqr').value;
     locat=document.getElementById('loc').value;
  

 
    $.ajax({
        url: '<?php echo base_url();?>home/savesearch/',
        async: false,
        type: 'POST',
		data: { jcCheckProfessional: jcCheckProfessional1, jcCheckProj: PROJECTTYPE, Services: SERVICESOFFERED, Range: RANGE, locat2: locat},
 
        dataType: 'html',
        success: function(data) {
		
        $('#savedsuccess').html(data);
    }
});



}




</script>