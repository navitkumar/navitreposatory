<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
	echo $this->Html->script('jquery1.11'); 
	echo $this->Html->script('jquery.validate.min');
	?>

	<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#RegForm1").validate({
                rules: {
                    firstname: "required",
                    lastname: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    mobile: {
                        required: true,
						digits:true,
                        minlength: 11,
						maxlength: 12
                    },
					city:{
					  required: true
					}
                },
                messages: {
                    firstname: "Please enter your firstname",
                    lastname: "Please enter your lastname",
                    mobile: {
                        required: "Please enter mobile number",
                        digits: "Please enter ony digits",
						minlength: "Enter at least 11 digit",
						maxlength: "Mobile number can not be more then 12 digits"
                    },
                    email: "Please enter a valid email address",
					city: "Please select city"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('reset.css');
		echo $this->Html->css('style.css');
		echo $this->fetch('meta');
	?>
</head>
<body>
<div id="wrapper">
<div id="main">
<?php echo $this->element('main_header'); ?>
<?php echo $this->element('form'); ?>
</div>
</div>
</body>
</html>
