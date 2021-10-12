    <!-- Sripts Here
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url() ?>assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/boot-select/js/bootstrap-select.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jasny/js/jasny-bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datetime/js/jquery.datetimepicker.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/popup/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/popup/jquery.history.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/scrolltab/jquery.scrolltabs.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/scrolltab/jquery.mousewheel.js"></script>
    <!-- // <script src="plugins/popup/magnific-popup.history.js"></script> -->
    <!-- // <script src="plugins/popup/magnific-popup.open-item.js"></script> -->

    
    <script src="<?php echo base_url() ?>assets/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/colorbox/jquery.colorbox.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/raty/jquery.raty.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/croppie/croppie.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-switch.js"></script>
    <script src="<?php echo base_url() ?>assets/js/typeahead.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
    <!-- // <script src="js/jquery-validate.bootstrap-tooltip.js"></script> -->


    <script src="<?php echo base_url() ?>assets/js/faq.js"></script> <!-- *** Add this file only on Faq Page --> 


      <script src="<?php echo base_url() ?>assets/js/jquery.dpNumberPicker-1.0.1.js"></script>
      
      
    <script src="<?php echo base_url() ?>assets/js/faq.js"></script> <!-- *** Add this file only on Faq Page --> 
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>


    <script>
      $(document).ready(function() {
		 
 
			$('#category-tab').scrollTabs();
	var substringMatcher = function(strs) {
		

	  return function findMatches(q, cb) {
	    var matches, substringRegex;
	    // an array that will be populated with substring matches
	    matches = [];	    // regex used to determine if a string contains the substring `q`
	    substrRegex = new RegExp(q, 'i');
	    // iterate through the pool of strings and for any string that
	    // contains the substring `q`, add it to the `matches` array
	    $.each(strs, function(i, str) {
	      if (substrRegex.test(str)) {
	        matches.push(str);
	      }
	    });

	    cb(matches);
	  };
	};

	var states = ['Mumbai', 'Delhi', 'Bangalore', 'Hyderabad', 'Chennai', 'Ahmedabad', 'Kolkata', 'Surat', 'Pune', 'Jaipur', 'Lucknow', 'Kanpur', 'Nagpur', 'Indore', 'Visakhapatnam', 'Thane', 'Bhopal', 'Pimpri Chinchwad', 'Patna', 'Vadodara', 'Ghaziabad', 'Ludhiana', 'Agra', 'Nashik', 'Faridabad', 'Meerut', 'Rajkot', 'Kalyan Dombivali', 'Vasai Virar', 'Varanasi', 'Srinagar', 'Aurangabad', 'Dhanbad', 'Amritsar', 'Navi Mumbai', 'Allahabad', 'Anantnag', 'Ranchi', 'Howrah', 'Coimbatore', 'Jabalpur', 'Gwalior', 'Vijayawada', 'Jodhpur', 'Madurai', 'Raipur', 'Kota', 'Guwahati', 'Chandigarh', 'Solapur'
	];

	$('.city_search').typeahead({
	  hint: true,
	  highlight: true,
	  minLength: 1
	},
	{
	  name: 'states',
	  source: substringMatcher(states)
	});

		
		
      });
    </script>


    <script type="text/javascript">
	
	
      
      //Registration1 Page Validation Start ************************************

      $('#jcForm1').validate({
        rules: {
          jcName: "required",
          jcEmail: {
            required: true,
            email: true
          },
          jcPassword: {
            required: true,
            minlength : 6,
          },
          jsRepeatpass : {
            minlength : 6,
            equalTo : "#jcPassword"
          },
          // jcDob: "required",
          radio1: "required",
  
          jcCheckProf: "required",
          jcRadioProf: "required",
        },
        messages: {
          jcName: "Enter Your Name",
          jcEmail: "Enter Valid Email",
          jcPassword: "Password Must contain minumum 6 Charecters.",
          jsRepeatpass: "Your Password doesn't Match",
          radio1: "Select Profession",
          jcCheckProf: "Required",
          jcRadioProf: "Required",
          // jcDob: "Enter your Date of Birth",
        },
        errorPlacement: function (error, element) {
          if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
          } 
          else if (element.prop('type') === 'checkbox'){
            error.insertAfter(element.parent().parent().parent());
          } 
          else if (element.prop('type') === 'radio'){
            error.insertAfter(element.parent().parent().parent());
          }
          else {
            error.insertAfter(element);
          }
        }
      });

        $( ".prof_type1" ).on( "click", function() {
          $('.freelance_select').hide();
          $('.supplier_select').hide();
          $('.company_select').show();
          $('.company_select').rules("add", {
                required: true
          });
        });
        $( ".prof_type2" ).on( "click", function() {
          $('.company_select').hide();
          $('.supplier_select').hide();
          $('.freelance_select').show();
          $('.freelance_select').rules("add", {
               required: true
          });
        });
        $( ".prof_type3" ).on( "click", function() {
          $('.company_select').hide();
          $('.freelance_select').hide();
          $('.supplier_select').show();
          $('.supplier_select').rules("add", {
               required: true
          });
        });
        
        // Need to display the about line in its specific page only 

        //Registration1 Page Validation End ************************************


        //Registration2 Freelancer Page Validation Start ************************************
        
        $('#jcForm2').validate({
          rules: {
            jcRadio2: "required",
            jcExperience: "required",
            jcCOA: "required",
            jcMobile: {
              required: true,
              number: true,
              rangelength: [10, 10]
            },
            jcAddress: "required",
            jcState: "required",
            jcCity: "required",
            jcZone: "required",
            jcPincode: "required",
          },
          messages: {
            jcRadio2: "Select Working Status",
            jcExperience: "Select Your Experience",
            jcCOA: "Please enter your COA Number",
            jcMobile: "Please enter Valid Mobile Number",
            jcAddress: "Please enter your Address",
            jcState: "Please select Your State",
            jcCity: "Please select your City",
            jcZone: "Please select your Zone/Locality",
            jcPincode: "Please enter your Pincode",
          },
          errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
          }
        });

        // $('#jcForm2').validate().settings.ignore = ':not(select:hidden, input:visible, textarea:visible, select:visible)';
        // Need to display the about line in its specific page only 

        //Registration2 Freelancer Page Validation End ************************************



        //Registration2 Company Page Validation Start ************************************
        
        $('#jcForm2c').validate({
          rules: {
            jcCompany: "required",
            jcCompanyReg: "required",
            jcCompanyRegDate: "required",
            jcCompanyCOA: "required",
            jcCompanyMobile: {
              required: true,
              number: true,
              rangelength: [10, 10]
            },
            jcAddress: "required",
            jcState: "required",
            jcCity: "required",
            jcZone: "required",
            jcPincode: "required",
          },
          messages: {
            jcCompany: "Please Enter Company Name",
            jcCompanyReg: "Please Enter Reg. Number",
            jcCompanyRegDate: "Please enter Company registered Date",
            jcCompanyCOA: "Please Enter COA Number",
            jcCompanyMobile: "Please Enter Valid Mobile Number",
            jcAddress: "Please Enter Address",
            jcState: "Please Enter State",
            jcCity: "Please Enter City",
            jcZone: "Please Enter Zone",
            jcPincode: "Please Enter Pincode",
          },
          errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
          }
        });

        //Registration2 Company Page Validation End ************************************

        //Registration3 Company Page Validation Start ************************************
        
        $('#jcForm3c').validate({
          rules: {
            jcCompSkills: "required",
            jcCheckSq: "required",
            jcCheckProj: "required",
            jcCheckServ: "required",
            
          },
          messages: {
            jcCompSkills: "Required",
          },
          errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else if (element.prop('type') === 'checkbox'){
              error.insertAfter(element.parent().parent().parent());
            }

            else {
                error.insertAfter(element);
            }
          }
        });

        //Registration3 Company Page Validation End ************************************

        //Registration3 Freelancer Page Validation Start ************************************
        
        $('#jcForm3').validate({
          rules: {
            jcFlSkills: "required",
            jcCheckSq: "required",
            jcCheckProj: "required",
            jcCheckServ: "required",
            jcUGYear: "required",
            jcUGCourse: "required",
            jcUGName: "required",
            jcUGCert: "required",
          },
          messages: {
            jcFlSkills: "Required",
          },
          errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else if (element.prop('type') === 'checkbox'){
              error.insertAfter(element.parent().parent().parent());
            }
            else if (element.prop('type') === 'file'){
              error.insertAfter(element.parent().parent());
            }

            else {
                error.insertAfter(element);
            }
          }
        });

        //Registration3 Freelancer Page Validation End ************************************

        //Registration4 Page Validation Start ************************************
        
        $('#jcForm4').validate({
          rules: {
            jcServArea: "required",
            jcTerms: "required",
           
          },
          messages: {
            jcServArea: "Required",
          },
          errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else if (element.prop('type') === 'checkbox'){
              error.insertAfter(element.parent().parent().parent());
            }
            else if (element.prop('type') === 'file'){
              error.insertAfter(element.parent().parent());
            }

            else {
              error.insertAfter(element);
            }
          }
        });

        //Registration4 Page Validation End ************************************
        //Registration4 Page Validation Start ************************************
        
        $('#verifyForm').validate({
          rules: {
            verify_code: "required",
           
          },
          messages: {
            verify_code: "Please enter Verificatrion code",
          },
          errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else if (element.prop('type') === 'checkbox'){
              error.insertAfter(element.parent().parent().parent());
            }
            else if (element.prop('type') === 'file'){
              error.insertAfter(element.parent().parent());
            }

            else {
              error.insertAfter(element);
            }
          }
        });

        //Registration4 Page Validation End ************************************


    </script>


  </body>
</html>
