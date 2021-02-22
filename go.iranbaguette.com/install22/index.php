<?php

session_start();

define('ABSOLUTE_PATH', realpath(dirname(__FILE__) . '/../') . '/');

function check_settings() {
	
	$errors = array();
	
	if (version_compare(PHP_VERSION, '5.3.7', '<=')) {
		
		$errors[] = true;
		
	}
	
	if (!ini_get('file_uploads')) {
		
		$errors[] = true;
		
	}
	
	if (ini_get('register_globals')) {
		
		$errors[] = true;
		
	}
	
	if (ini_get('magic_quotes_gpc')) {
		
		$errors[] = true;
		
	}
	
	if (ini_get('session_auto_start')) {
		
		$errors[] = true;
		
	}
	
	if (!extension_loaded('PDO') || !extension_loaded('pdo_mysql')) {
		
		$errors[] = true;
		
	}
	
	if (!extension_loaded('gd')) {
		
		$errors[] = true;
		
	}
	
	if (!is_writable(ABSOLUTE_PATH . 'config/database.php')) {
		
		$errors[] = true;
		
	}

	if (!is_writable(ABSOLUTE_PATH . 'config')) {
		
		$errors[] = true;
		
	}

	if (!is_writable(ABSOLUTE_PATH . 'uploads')) {
		
		$errors[] = true;
		
	}
	
	return (count($errors) > 0) ? false : true;

}


$_SESSION['step_1'] = (check_settings()) ? true : false;

if (isset($_POST['upgrade'])) {
	
	$_SESSION['upgrade'] = true;
	
	header('Location: step_1.php');
	
} else {
	
	$_SESSION['upgrade'] = false;
	
}

?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="UTF-8">
		
		<title>Requirements</title>
		
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
		
		<style>
			body {
				background-color: #F4F4F4;
				margin-top: 20px;
			}
			
			a:hover {
				text-decoration: none;
			}

			#steps ul li{
				width: 25%;
			}
			
			#steps ul li {
				background: #EEEEEE;
				color: #AAAAAA;
				padding: 8px;
				border-radius: 5px;
			}
			
			#steps ul li.active {
				background: #337AB7;
				color: #FFFFFF;
			}
		</style>
		
	</head>
	<body>
		
		<div class="container">

			<div class="row">
				
				<div class="col-md-12">
					
					<div class="panel panel-default">

						<div class="panel-body">
							
							<div id="steps" class="text-center">
								
								<ul class="list-inline">
									<li>1. Database</li>
									<li>2. Settings</li>
									<li>3. All done!</li>
								</ul>
								
							</div>

						</div>
						
					</div>
					
				</div>
				
			</div>
			
			<div class="row">
				
				<div class="col-md-12">
					
					<div class="panel panel-default">

						<div class="panel-body">
							
							<p>Before getting started, please make sure your system meet the requirements for installation. If the server configuration does not meet the requirements, you need to contact your hosting support.</p>
							
							<hr>
							
							<?php if (!check_settings()): ?>
							
								<div class="alert alert-warning">
									It seems that your server failed to meet the requirements to run the script. Please contact your server administrator or hosting provider to get this resolved.
								</div>
								
							<?php endif; ?>
								
							<table class="table">
								<thead>
									<tr>
										<th>PHP settings</th>
										<th>Required settings</th>
										<th>&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>PHP Version</td>
										<td>5.3.7+</td>
										<td><?php if (version_compare(PHP_VERSION, '5.3.7', '<=')): ?> <span class="label label-danger pull-right">Failed</span> <?php else: ?> <span class="label label-success pull-right">Success</span> <?php endif; ?></td>
									</tr>
									<tr>
										<td>File Uploads</td>
										<td>On</td>
										<td><?php if (ini_get('file_uploads')): ?> <span class="label label-success pull-right">Success</span> <?php else: ?> <span class="label label-danger pull-right">Failed</span> <?php endif; ?></td>
									</tr>
									<tr>
										<td>Register Globals</td>
										<td>Off</td>
										<td><?php if (!ini_get('register_globals')): ?> <span class="label label-success pull-right">Success</span> <?php else: ?> <span class="label label-danger pull-right">Failed</span> <?php endif; ?></td>
									</tr>
									<tr>
										<td>Magic Quotes GPC</td>
										<td>Off</td>
										<td><?php if (!ini_get('magic_quotes_gpc')): ?> <span class="label label-success pull-right">Success</span> <?php else: ?> <span class="label label-danger pull-right">Failed</span> <?php endif; ?></td>
									</tr>
									<tr>
										<td>Session Auto Start</td>
										<td>Off</td>
										<td><?php if (!ini_get('session_auto_start')): ?> <span class="label label-success pull-right">Success</span> <?php else: ?> <span class="label label-danger pull-right">Failed</span> <?php endif; ?></td>
									</tr>
								</tbody>
							</table>
							
							<table class="table">
								<thead>
									<tr>
										<th>PHP extensions</th>
										<th>&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>PDO</td>
										<td><?php if (extension_loaded('PDO') || extension_loaded('pdo_mysql')): ?> <span class="label label-success pull-right">Success</span> <?php else: ?> <span class="label label-danger pull-right">Failed</span> <?php endif; ?></td>
									</tr>
									<tr>
										<td>GD</td>
										<td><?php if (extension_loaded('gd')): ?> <span class="label label-success pull-right">Success</span> <?php else: ?> <span class="label label-danger pull-right">Failed</span> <?php endif; ?></td>
									</tr>
								</tbody>
							</table>

							<table class="table">
								<thead>
									<tr>
										<th>File permissions</th>
										<th>&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?php echo 'config/database.php'; ?></td>
										<td><?php if (is_writable(ABSOLUTE_PATH . 'config/database.php')): ?> <span class="label label-success pull-right">Success</span> <?php else: ?> <span class="label label-danger pull-right">Failed</span> <?php endif; ?></td>
									</tr>
								</tbody>
							</table>
							
							<table class="table">
								<thead>
									<tr>
										<th>Folder permissions</th>
										<th>&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?php echo 'config/'; ?></td>
										<td><?php if (is_writable(ABSOLUTE_PATH . 'config')): ?> <span class="label label-success pull-right">Success</span> <?php else: ?> <span class="label label-danger pull-right">Failed</span> <?php endif; ?></td>
									</tr>
									<tr>
										<td><?php echo 'uploads/'; ?></td>
										<td><?php if (is_writable(ABSOLUTE_PATH . 'uploads')): ?> <span class="label label-success pull-right">Success</span> <?php else: ?> <span class="label label-danger pull-right">Failed</span> <?php endif; ?></td>
									</tr>
								</tbody>
							</table>
							
							<?php if (check_settings()): ?>
							
								<form method="post">
									<button type="submit" name="upgrade" class="btn btn-primary">Continue to upgrade</button>
									<a href="step_1.php" class="btn btn-primary">Continue to install</a>
								</form>
								
							<?php else: ?>
							
								<a href="index.php" class="btn btn-warning">Try again</a>
								
							<?php endif; ?>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			<div class="row">
				
				<div class="col-md-12 text-right">
					
					<p class="small"><a href="http://www.naz-skin.ir" target="_blank">ناز اسکین</a></p>

				</div>
				
			</div>
			
		</div>
		
	</body>
</html>
