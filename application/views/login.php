
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Latihan - Login</title>

<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">My Latihan :: Log in</div>
				<div class="panel-body">
					<form role="form" method="post" action="<?=base_url()?>auth/login">
                        <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>" />
						<fieldset>
							<div class="form-group">
								<input id="<?=$identity['id']?>" class="form-control" placeholder="My Id" name="<?=$identity['name']?>" type="<?=$identity['type']?>" autofocus="" value="<?=$identity['value']?>" required>
							</div>
							<div class="form-group">
								<input id="<?=$password['id']?>" class="form-control" placeholder="Katalaluan" name="<?=$password['name']?>" type="<?=$password['type']?>" value="" required>
							</div>
							<div class="checkbox">
								<label>
									<input id="remember" name="remember" type="checkbox" value="1">Remember Me
								</label>
							</div>
							<button class="btn btn-primary" type="submit">Login</button>
						</fieldset>
					</form>
				</div>
				<?php if($message !== NULL): ?>
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $message;?>
				</div>
				<?php endif ?>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->



	<script src="<?=base_url()?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap-datepicker.js"></script>
	<script src="<?=base_url()?>assets/js/chart.min.js"></script>
	<script src="<?=base_url()?>assets/js/chart-data.js"></script>
	<script src="<?=base_url()?>assets/js/easypiechart.js"></script>
	<script src="<?=base_url()?>assets/js/easypiechart-data.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>
