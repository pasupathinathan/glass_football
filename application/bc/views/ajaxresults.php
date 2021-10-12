<?php 
     
$tcount=0;
$tcount1=0;	
$tcount2=0;
$tcount3=0;	
$tcount4=0;
$ptype[]='';
$pservices[]='';
$prange[]='';
$professionaltypefirst[]='';
 
 $prlocation2[]='';
 
 $qes='';
 extract($_POST);
 if(!empty($professionaltybe))
{
$professionaltypefirst=explode(',',$professionaltybe);

  
}
else
{
 
$tcount3=10;	
}


if(!empty($projecttybe))
{
$ptype=explode(',',$projecttybe);

}
else
{ 
$tcount=10;	
}


if(!empty($projectservices))
{


$pservices=explode(',',$projectservices);
 
}
else
{
 
$tcount1=10;	
}



if(!empty($projectrange))
{

$prange=explode(',',$projectrange);
 
}
else
{
$tcount2=10;	
}



if(!empty($prlocation1))
{
$prlocation2=explode(',',$prlocation1);

}
else
{
 
$tcount4=10;	
}



 

 

?>

 <input type="hidden" id="prt" value="<?php echo   $professionaltybe; ?>">
  <input type="hidden" id="pty" value="<?php echo   $projecttybe; ?>">
     <input type="hidden" id="so" value="<?php echo   $projectservices; ?>">
   <input type="hidden" id="sqr" value="<?php echo   $projectrange; ?>">
    <input type="hidden" id="loc" value="<?php echo   $prlocation1; ?>">

<div class="row"> 
     
   <?php   
   
 

foreach ($data as $row){

	 
$dbservices=explode(',',$row->reg_services);

$dbreg_projects=explode(',',$row->reg_projects);
$dbreg_sqft=explode(',',$row->reg_sqft);
$dbreg_profession=explode(',',$row->reg_profession);


  
if(!empty($projecttybe))
{ 

 
   
foreach ($ptype as $value) {
	 
	 
    if (in_array($value,$dbreg_projects)) {
  

   $tcount=10;
    }
	

}
   
//$resprojects = array_intersect($dbreg_projects, $ptype);


  //  $tcounttest=count($resprojects);
  
  
 //$tcount=count($resprojects);
 
  
}
 
if(!empty($projectservices))
{ 

$resservives = array_intersect($dbservices,$pservices);
  
 foreach ($pservices as $value) {
    if (in_array($value, $dbservices)) {
 
   $tcount1=10;
    }
	
}


}
 
 if(!empty($professionaltybe))
{ 
  

 foreach ($professionaltypefirst as $value) {
    if (in_array($value, $dbreg_profession)) {
	
   $tcount3=10;
    }
 
 
 
}


}


  
  if(!empty($Range))
{
  	  
 
foreach ($prange as $value) {
	
	
    if (in_array($value, $dbreg_sqft)) {
	 
    $tcount2=10;
    }
	
}
 
}



 
if($tcount >= 10 and $tcount1 >= 10 and $tcount2 >= 10 and $tcount3 >= 10 and $tcount4 >= 10) 
{
	
 ?>
 

    
    
 
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
                                        	<?php	 echo $row->reg_services;  ?>
										<p>Architecture, Civil Engineering, Interior Desiging, MEP Consulting, Structural Engeneering, Modular Kitchens</p>
										<div class="fl-box-footer">
											<a href="#" class="link">25 User Reviews</a>	
										</div>
									</div>
                                    
                                                   
								</div>
                                
               
							</div>
                            
                     <?php 
 
 
					 } ?> 
							        
                            
                            
					 <?php 
					 
if(!empty($projecttybe))
{
   $tcount=0;
  
}
if(!empty($projectservices))
{ 
   $tcount1=0;
}
  if(!empty($projectrange))
{
	   $tcount2=0; 
 
}
 
   if(!empty($prlocation1))
{
	   $tcount4=0; 
 
}
  if(!empty($professionaltybe))
{
	   $tcount3=0; 
 
}
 
 
					 } ?> 
							
						</div>