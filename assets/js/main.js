$(document).ready(function(){
	
	$('input, textarea').blur(function(){
		//$(this).val($.trim($(this).val()));
		$(this).val(($(this).val()).replace(/(^\s+|\s+$)/g,''));
	});
	
	
	var home_slide = $('.home-slider');
	
	home_slide.owlCarousel({
		singleItem: true,
		navigation: false,
		transitionStyle: 'fade',
		autoPlay: 5000
	});

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



	

	var top = $('.main-header').offset().top - parseFloat($('.main-header').css('marginTop').replace(/auto/, 30));
	$(window).scroll(function (event) {
	 	var y = $(this).scrollTop();
	 	if (y >= 30) {
	 		$('.main-header').addClass('fixed');
	  } else {
	  	$('.main-header').removeClass('fixed');
	  }
	});

	$('[data-toggle="popover"]').popover();

	$('.select2').select2();
	$('.city-select').select2({
	  placeholder: "Select your City*"
	});
	$('.zone-select').select2({
	  placeholder: "Select your Zone*"
	});
	$('.selectpic').selectpicker({

	});

	$('.add-pg').click(function(){
		$('.pg-tog-container').slideToggle(0);
		$('.add-pg span').toggle();
	});

	$(".datepicker").datetimepicker({
    timepicker:false,
    format:'d/m/Y',
    closeOnDateSelect:true,
    scrollInput:false,
    formatDate:'Y/m/d'
  });



	$('.prof_type1').prop('checked', false);
	$('.prof_type2').prop('checked', false);
	$('.prof_type3').prop('checked', false);
  

  $('.popup-with-zoom-anim').magnificPopup({
    type: 'inline',
    closeBtnInside: true,
    preloader: false,
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in'
  });

  $('.search-toggle-btn').click(function(){
  	$('.toggle-search-container').slideToggle(500);
  });

  var projects_slide = $(".projects-slider");
  projects_slide.owlCarousel({
    items : 4,
    lazyLoad : true,
    pagination: false,
    navigation : false
  }); 
   $(".projects-nav-item.next").click(function(){
    projects_slide.trigger('owl.next');
  });
  $(".projects-nav-item.prev").click(function(){
    projects_slide.trigger('owl.prev');
  });
  $(".projects-pop").colorbox({
  	rel:'projects-pop',
  	current: "Project {current} of {total}",
  	scalePhotos: true,
  	maxWidth: '1000px',
  	maxheight: '700px',
  	scrolling: false,
  });

  $('.rating-input').raty();

  $('.rating-view').raty({
  	readOnly: true,
	  score: function() {
	   	return $(this).attr('data-score');
	  }
	});


 //  $(document).bind('cbox_open', function() {
	//     $('html').css({ overflow: 'hidden' });
	// }).bind('cbox_closed', function() {
	//     $('html').css({ overflow: 'auto' });
	// });

	var profile = (function() {
				function popupResult(result) {
					var html;
					if (result.html) {
						html = result.html;
					}
					if (result.src) {
						// html = '<img src="' + result.src + '" />';
						$('.profile-picture-preview').html('<img src="' + result.src + '" />');
						$('.profile-picture-value').html('<input type="text" value="' + result.src + '" />');
					}
				}

				function profileUpload() {
					var $uploadCrop;

					function readFile(input) {
			 			if (input.files && input.files[0]) {
				            var reader = new FileReader();
				            
				            reader.onload = function (e) {
				            	$uploadCrop.croppie('bind', {
				            		url: e.target.result
				            	});
				            	$('.upload-profile').addClass('ready');
				                // $('#blah').attr('src', e.target.result);
				            }
				            
				            reader.readAsDataURL(input.files[0]);
				        }
				        else {
					        alert("Sorry - you're browser doesn't support the FileReader API");
					    }
					}

					$uploadCrop = $('#upload-profile').croppie({
						viewport: {
							width: 200,
							height: 200,
						},
						boundary: {
							width: 300,
							height: 300
						}
					});

					$('.upload-profile-picture').on('change', function () { readFile(this); });
					$('.upload-result').on('click', function (ev) {
						$uploadCrop.croppie('result', 'canvas').then(function (resp) {
							popupResult({
								src: resp
							});
						});
					});
				}
				function init() {
					profileUpload();
				}
				return {
					init: init
				};

			})();

			profile.init();


			$('.upload-profile-pop').click(function(){
				$('#upload-profile').croppie('refresh')
			});




			var cover = (function() {
				function popupResult(result) {
					var html;
					if (result.html) {
						html = result.html;
					}
					if (result.src) {
						// html = '<img src="' + result.src + '" />';
						$('.cover-picture-preview').html('<img src="' + result.src + '" />');
						$('.cover-picture-value').html('<input type="text" value="' + result.src + '" />');
					}
				}

				function profileUpload() {
					var $uploadCrop;

					function readFile(input) {
			 			if (input.files && input.files[0]) {
				            var reader = new FileReader();
				            
				            reader.onload = function (e) {
				            	$uploadCrop.croppie('bind', {
				            		url: e.target.result
				            	});
				            	$('.upload-cover').addClass('ready');
				                // $('#blah').attr('src', e.target.result);
				            }
				            
				            reader.readAsDataURL(input.files[0]);
				        }
				        else {
					        alert("Sorry - you're browser doesn't support the FileReader API");
					    }
					}

					$uploadCrop = $('#upload-cover').croppie({
						viewport: {
							width: 300,
							height: 100,
						},
						boundary: {
							width: 300,
							height: 150
						}
					});

					$('.upload-cover-picture').on('change', function () { readFile(this); });
					$('.upload-result').on('click', function (ev) {
						$uploadCrop.croppie('result', 'canvas').then(function (resp) {
							popupResult({
								src: resp
							});
						});
					});
				}
				function init() {
					profileUpload();
				}
				return {
					init: init
				};

			})();

			cover.init();

	// //////////////// Form Validations
	$("#mainsearch").validate({
	  rules: {
	    search_city: "required",
	    search_zone: "required",
	    
	  },
	  messages: {
	    name: "Please specify your name",
	  },
	  errorPlacement: function (error, element) {
      $(element).parent().addClass('has-error');
	  },
	  success: function (label, element) {
	    $(element).parent().removeClass('has-error');
	  },
	});

	$("#MainLogin").validate({
		rules: {
	    ml_email: {
	      required: true,
	      email: true
    	},
	    ml_pass: "required",
	  },
	  messages: {
	    ml_email: "Enter Registered Email",
	    ml_pass: "Enter Your Password",
	  },
	});
	$("#MainRegister").validate({
		rules: {
	    mr_email: {
	      required: true,
	      email: true
    	},
	    mr_mobile: {
	    	required: true,
	    	number: true,
	    	rangelength: [10, 10]
	    },
	    mr_password: "required",
	  },
	  messages: {
	    ml_email: "Enter Registered Email",
	    ml_pass: "Enter Your Password",
	    mr_mobile: "Enter Valid Mobile Number",
	  },
	  errorPlacement: function (error, element) {
      if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
          error.insertAfter(element.parent());
      } else {
          error.insertAfter(element);
      }
    },
    success: function (label, element) {
	    $(element).parent().removeClass('has-error');
	  },
	});

	$("#numberPicker").dpNumberPicker({
		value: 1,
		min: 1,
		max: 6,
		step: .5,
		editable: false,
		formatter: function(val){
			return val+" Hrs";
		}
	});

$('.datetime_inline').datetimepicker({
	  inline:true,
	  minDate:0,
	  timepicker:false,
    format:'d/m/Y',
	});

});


