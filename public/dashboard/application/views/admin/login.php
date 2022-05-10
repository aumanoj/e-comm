<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<!-- Basic -->
		<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/metropolis" type="text/css"/>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


<style type="text/css">
	html,body { 
	height: 100%; 
}

.global-container{
	height:100%;
	display: flex;
	align-items: center;
	justify-content: center;
	background:url(<?php echo base_url('cmn/img/ring.png'); ?>);
	background-size:cover;
}


form{
	padding-top: 10px;
	font-size: 14px;
	margin-top: 30px;
}

.card-title{ font-weight:300; }

.btn{
	font-size: 14px;
	margin-top:20px;
}


.login-form{ 
	width:430px;
	margin:20px;
}

.sign-up{
	text-align:center;
	padding:20px 0 0;
}

.line_one{
	height:2px;
	width:100px;
	background:#1a7aa3;
}

#error p{
    color: red!important;
  }

</style>
	</head>
	<body>
		
		<div class="global-container">

	<div class="card login-form border-0 shadow-lg">
	<div class="card-body">
		<h3 class="card-title text-center text-primary font-weight-bold">ADMIN LOGIN</h3>
		<div class="col-md-12 text-danger text-center">
                <p> <?php echo $this->session->flashdata('msg');?> </p>
            </div>
		<div class="line_btn d-flex justify-content-center align-items-center">
		<div class="line_one text-center"></div>
		</div>
		<div class="card-text">
			<form method="post" action="" enctype="multipart/form-data">
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo  $this->security->get_csrf_hash();?>"/>
  <div class="form-group">
    <label><b>Email:</b></label>
    <input class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="Enter Email" type="email">
      <?php 
            if(form_error('email'))
            {
              echo "<div id='error' style='color:red;'>".form_error('email')."</div>";
            }
          ?>
      </div>

  <div class="form-group">
    <label><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="password" value="<?php echo set_value('password'); ?>" class="form-control">
      <?php 
            if(form_error('password'))
            {
              echo "<div id='error' style='color:red;'>".form_error('password')."</div>";
            }
          ?>
      </div>


  <div class="form-group text-center">
    <input class="btn btn-primary" type="submit"  value="Submit"  name="submit">
  </div>
</form>


		</div>
	</div>
</div>
</div>

		<!--end-->
	
	</body>
</html>