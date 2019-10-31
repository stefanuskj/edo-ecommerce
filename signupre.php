<!DOCTYPE html>
<html>
<head>
    <title>Miku Sushi</title>
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.css"></link>
	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="formvalidation-master/vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="formvalidation-master/dist/css/formValidation.css"/>
    <script type="text/javascript" src="formvalidation-master/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="formvalidation-master/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="formvalidation-master/dist/js/formValidation.js"></script>
    <script type="text/javascript" src="formvalidation-master/dist/js/framework/bootstrap.js"></script>
	<style>
	body{font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
			font-size: 14px;
			background: url('background4.jpg');
			color:#FF9B32;}
	</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <section>
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="page-header">
                        <h2>Sign Up</h2>
						<p>Sign up for your personal Edo JR ID</p>
                    </div>

                    <form id="defaultForm" method="post" class="form-horizontal form-register box box-white" action="miku.php">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Full name</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="firstName" placeholder="First name" />
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="lastName" placeholder="Last name" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Username</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" name="username" placeholder="Username" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email Address</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" name="email" placeholder="Email"/>
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Address</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="address" placeholder="Address"/>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Password</label>
                            <div class="col-lg-5">
                                <input type="password" class="form-control" name="password" placeholder="Password"/>
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label class="col-lg-3 control-label">Confirm password</label>
                            <div class="col-lg-5">
                                <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Gender</label>
                            <div class="col-lg-5">
                               <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="male" /> Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="female" /> Female
                                    </label>
                                </div>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary col-md-2" name="signup">Sign up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm')
        .formValidation({
            message: 'This value is not valid',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                firstName: {
                    validators: {
                        notEmpty: {
                            message: 'The first name is required and cannot be empty'
                        }
                    }
                },
                lastName: {
                    validators: {
                        notEmpty: {
                            message: 'The last name is required and cannot be empty'
                        }
                    }
                },
                username: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The username is required and cannot be empty'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'The username must be more than 6 and less than 30 characters long'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                        }
                    }
                },
                email: {
                    validators: {
					    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
						},
					regexp: {
                            regexp:  /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/,
                            message: 'The email address is not valid'
                        }
					}
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required and cannot be empty'
                        },
                        different: {
                            field: 'username',
                            message: 'The password cannot be the same as username'
                        }
                    }
                },
				confirmPassword: {
					validators: {
                        notEmpty: {
                            message: 'The password is required and cannot be empty'
                        },
						identical: {
                            field: 'password',
                            message: 'The password and its confirm are not the same'
                        }
						
					}
				},
				address: {
                    validators: {
                        notEmpty: {
                            message: 'The address is required and cannot be empty'
                        }
                    }
                },
                gender: {
                    validators: {
                        notEmpty: {
                            message: 'The gender is required'
                        }
                    }
                }
            }
        })
});
</script>
</body>
</html>