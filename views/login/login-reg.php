<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="zxx">
    <head>
        <!-- TITLE OF SITE -->
        <title>Curricular | Login & Registration </title>
        
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="description" content="app landing page template" />
        <meta name="keywords" content="app, landing page, bootstrap" />
        <meta name="developer" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- FAV AND ICONS   -->
        <link rel="icon" href="../Frontend/assets/images/favicon.png" sizes="32x32" />
        <link rel="icon" href="../Frontend/assets/images/apple-icon-192.png" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="../Frontend/assets/images/apple-icon-180.png" />

        <!-- GOOGLE FONTS -->
        <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,700%7cVarela+Round" rel="stylesheet">

        <!-- FONT ICONS -->
        <link rel="stylesheet" href="../Frontend/assets/icons/font-awesome-4.7.0/css/font-awesome.min.css">
        
        <!-- Custom Icon Font -->
        <link rel="stylesheet" href="../Frontend/assets/font/flaticon.css">
        <!-- Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Animation -->
        <link rel="stylesheet" href="../Frontend/assets/plugins/css/animate.css">
        <!-- owl -->
        <link rel="stylesheet" href="../Frontend/assets/plugins/css/owl.css">
        <!-- selectize -->
        <link rel="stylesheet" href="../Frontend/assets/plugins/css/selectize.css">
        <!-- Fancybox-->
        <link rel="stylesheet" href="../Frontend/assets/plugins/css/jquery.fancybox.min.css">
        <!--dropdown -->
        <!-- mobile nav-->
        <link rel="stylesheet" href="../Frontend/assets/plugins/css/meanmenu.css">

        <!-- COUSTOM CSS link  -->
        <link rel="stylesheet" href="../Frontend/assets/less/style.css">
        <link rel="stylesheet" href="../Frontend/assets/less/responsive.css">

        <!--[if lt IE 9]>
            <script src="js/plagin-js/html5shiv.js"></script>
            <script src="js/plagin-js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="login-reg-page">
        <div class="uv-login-reg-form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 uv-login-reg-from-inner">
                        <div class="login-logo">
                            <a href="index.html">
                                <img src="../Frontend/assets/images/univ-logo-lg.png" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="uv-login-reg shadow-1">
                          <!-- Nav tabs -->
                            <div class="login-reg-nav">
                                <ul class="nav nav-tabs" role="tablist" id="myTabs">
                                    <li role="presentation" class=""><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Login</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Register</a></li>
                                </ul>
                                <hr>
                            </div>
                            <div>
	
						</div>
                        
                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <form id="login-form" class="uv-login-form">
               
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="login-password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> Remember Me</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="form-control btn btn-fill">Login Account</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <form id="register-form" class="uv-reg-form">
                                <div class="form-group">
                                    <div class="custom-control custom-radio custom-control-inline ">
	  <input type="radio" id="customRadioInline1" name="Client" class="custom-control-input">
	  <label class="custom-control-label" for="customRadioInline1">Etudiant</label>
	</div>
	<div class="custom-control custom-radio custom-control-inline pull right">
	  <input type="radio" id="customRadioInline2" name="Client" class="custom-control-input">
	  <label class="custom-control-label" for="customRadioInline2">Patient</label>
	</div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="regusername" id="reg-username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="regpassword" id="reg-password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirmPassword" id="confirmPassword" tabindex="2" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="form-control btn btn-fill ">Register an Account</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <!--
        |========================
        |      Script
        |========================
        -->
        <!-- jquery -->
        <script src="../Frontend/assets/plugins/js/jquery-1.11.3.min.js"></script>
        <!-- Bootstrap -->
        <!-- mean menu nav-->
        <script src="../Frontend/assets/plugins/js/meanmenu.js"></script>
        <!-- ajaxchimp -->
        <script src="../Frontend/assets/plugins/js/jquery.ajaxchimp.min.js"></script>
        <!-- wow -->
        <script src="../Frontend/assets/plugins/js/wow.min.js"></script>
        <!-- Owl carousel-->
        <script src="../Frontend/assets/plugins/js/owl.carousel.js"></script>
        <!--dropdownhover-->
        <!--jquery-ui.min-->
        <script src="../Frontend/assets/plugins/js/bars.js"></script>
        <!--validator -->
        <script src="../Frontend/assets/plugins/js/validator.min.js"></script>
        <!--smooth scroll-->
        <script src="../Frontend/assets/plugins/js/smooth-scroll.js"></script>
        <!-- Fancybox js-->
        <script src="../Frontend/assets/plugins/js/jquery.fancybox.min.js"></script>
        <!-- fitvids -->
        <script src="../Frontend/assets/plugins/js/jquery.fitvids.js"></script>
        <!-- SELECTIZE-->
        <script src="../Frontend/assets/plugins/js/standalone/selectize.js"></script>
        <!-- isotope js-->
        <script src="../Frontend/assets/plugins/js/isotope.pkgd.js"></script>
        <script src="../Frontend/assets/plugins/js/packery-mode.pkgd.js"></script>
        <script src="../Frontend/assets/plugins/js/jquery.inview.min.js"></script>
        <script src="../Frontend/assets/plugins/js/progressbar.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>

        <!-- init -->
        <script src="../Frontend/assets/js/init.js"></script>
        <script>
        $(function(){
            $("[role='presentation']").each(function(){
                $(this).click(function () { 

                 if($(this).index()===0){
                    $(this).addClass("active");
                    
                    $("[role='presentation']").eq(1).removeClass("active");
                 } 
                 else if($(this).index()===1){
                    $(this).addClass("active");
                    $("[role='presentation']").eq(0).removeClass("active");

                 }
                 });
            })

            // FORM VALIDATION
$.validator.setDefaults({
    errorClass: 'invalid-feedback',
    highlight: function(element) {
      $(element).addClass(' is-invalid');
    },
    unhighlight: function(element) {
      $(element).removeClass(' is-invalid');
    },
    errorPlacement: function (error, element) {
      if (element.prop('type') === 'text' ||  element.prop('type') === 'email' || element.prop('type') === 'password') {
element.after(error);
}
else if( element.prop('type') === 'radio'){
	element.parent().parent().after(error);
	
	
}
    }
  });

            $.validator.addMethod('strongPassword', function(value, element) {
    return this.optional(element) 
      || value.length >= 6
      && /\d/.test(value)
      && /[a-z]/i.test(value);
  }, '6 caractères au moins avec a moins 1 chiffre ');

  $.validator.addMethod("specialChars", function( value, element ) {
        var regex = new RegExp("^[a-zA-Z0-9éèà]+$");
        var key = value;

        if (!regex.test(key)) {
           return false;
        }
        return true;
    }, "Pas de caractères spéciaux");

$("#register-form").validate({
    submitHandler(function(form) {
			
            // Create variables from the form
            var to = $('input#to').val();
            var fullname = $('input#fullname').val(); 
            var emailaddress = $('input#emailaddress').val();  
            var message = $('textarea#message').val();
        
            // Create variables that will be sent in a URL string to mail.php
            // var dataString = 'to=' + to + '&fullname='+ fullname + '&emailaddress=' + emailaddress + '&message=' + message;
            
            // The AJAX
            $.ajax({  
              type: 'POST',
              url: 'connexion.php',
              data: dataString,
              success(function(data) {
                // This is a callback that runs if the submission was a success.
                
                // Clear the form
                $(':input','#mailform')
                 .not(':button, :submit, :reset, :hidden')
                 .val('')
                 .removeAttr('checked')
                 .removeAttr('selected');
                return false;
              }),
                error(function(){
                    alert('Whoops! This didn\'t work. Please contact us.')
                });
            });
            return false;
        });
	onkeyup:(element)=> {
           $(element).valid(); 
    },
	
	rules:{
	  email: {
        required: true,
        email: true,
      },
      regpassword: {
        required: true,
        strongPassword: true
      },
      confirmPassword: {
        required: true,
        equalTo: '#password'
      },
      regusername: {
        required: true,
        nowhitespace: true,
		specialChars:true,
      },
	  Client:{
		  required:true,
	  },
	
	},
	messages: {
      email: {
        required: 'ce champ est requis.',
        email: 'entrez une adresse mail valide',
      },
	  regusername: {
        required: 'ce champ est requis',
      },
	  confirmPassword: {
        equalTo: 'entrer le même mot de passe'
      },	
	  Client:{
		  required:"vous devez choisir ",
	  },
    }
	


})

        })
        </script>
        
    </body>
</html>