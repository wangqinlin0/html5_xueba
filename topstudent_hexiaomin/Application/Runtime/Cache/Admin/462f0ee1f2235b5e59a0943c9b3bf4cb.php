<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>学霸养成后台管理系统</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="/topstudent/Public/admin/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/topstudent/Public/admin/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/topstudent/Public/admin/css/ace.min.css" />
		<link rel="stylesheet" href="/topstudent/Public/admin/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="/topstudent/Public/admin/css/login.css" />
	</head>
	<body class="login-layout">
    <div class="content">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<span class="white white2">学霸养成后台管理系统</span>
								</h1>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger yh">
												<a class="iccon coffee"></a>
												请输入您的个人信息
											</h4>

											<div class="space-6"></div>

											<form action="" method="post">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="txt form-control loginuser" name="username" placeholder="请输入用户名" />
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="txt form-control loginpsw" name="password" placeholder="请输入密码" />
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl yh jz">记住登陆</span>
														</label>

														<button  type="submit" class="width-35 pull-right btn btn-sm btn-primary btcolor">
															
															登陆
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											
										</div><!-- /widget-main -->

										<div class="toolbar clearfix">
											<div>
	
											</div>

											<div>
												<a href="<?php echo U('admins/register');?>" class="user-signup-link yh">
													我要注册
													<i class="iccon2 zcarrow"></i>
												</a>
											</div>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->

								

							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->
        </div>

		<!-- basic scripts -->

		<!--[if !IE]> -->

	
		<script src="/topstudent/Public/admin/js/jquery.min.js"></script>
		<script src="/topstudent/Public/admin/js/bootstrap.min.js"></script>

</body>
</html>