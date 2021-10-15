<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="noindex,nofollow">
		<title>DopeStudios || Dashboard</title>
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">
		<link href="{{ asset('assets/css/morris.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" crossorigin="anonymous" referrerpolicy="no-referrer"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
		<link href="{{ asset('assets/css/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
		<link href="{{ asset('assets/css/easy-pie-chart.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/dashboard2.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('assets/FontAwesome/css/all.min.css') }}"/>
	</head>

	<body class="skin-default-dark fixed-layout">
		<div class="preloader">
			<div class="loader">
				<div class="loader__figure"></div>
				<p class="loader__label">DopeStudios</p>
			</div>
		</div>
		<div id="main-wrapper">
			<header class="topbar">
				<nav class="navbar top-navbar navbar-expand-md navbar-dark">
					<div class="navbar-header">
						<a class="navbar-brand" href="{{ route('dashboard.home') }}">
                        <span>
                            <img src="{{ asset('assets/images/logo/logo-icon.png') }}" class="light-logo" alt="homepage"/>
                        </span>
						</a>
					</div>
					<div class="navbar-collapse">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item hidden-sm-up">
								<a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)">
									<i class="ti-menu"></i>
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle waves-effect waves-dark" href="javascript:void(0)" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>
									<div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
								</a>
								<div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
									<span class="with-arrow">
										<span class="bg-danger"></span>
									</span>
									<ul>
										<li>
											<div class="drop-title text-white bg-danger">
												<h4 class="m-b-0 m-t-5">5 New</h4>
												<span class="font-light">Messages</span>
											</div>
										</li>
										<li>
											<div class="message-center ps-container ps-theme-default" data-ps-id="ea183f97-7bcf-ba63-f637-df50b927166c">
												<!-- Message -->
												<a href="javascript:void(0)">
													<div class="user-img">
														<img src="{{ asset('assets/images/ClientsImgs/clientimg01.jpg') }}" alt="user" class="img-circle">
														<span class="profile-status online float-right"></span>
													</div>
													<div class="mail-contnet">
														<h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
													</div>
												</a>
												<!-- Message -->
												<a href="javascript:void(0)">
													<div class="user-img">
														<img src="{{ asset('assets/images/ClientsImgs/clientimg02.jpg') }}" alt="user" class="img-circle">
														<span class="profile-status busy float-right"></span>
													</div>
													<div class="mail-contnet">
														<h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
													</div>
												</a>
												<!-- Message -->
												<a href="javascript:void(0)">
													<div class="user-img">
														<img src="{{ asset('assets/images/ClientsImgs/clientimg03.jpg') }}" alt="user" class="img-circle">
														<span class="profile-status away float-right"></span>
													</div>
													<div class="mail-contnet">
														<h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
													</div>
												</a>
												<!-- Message -->
												<a href="javascript:void(0)">
													<div class="user-img">
														<img src="{{ asset('assets/images/ClientsImgs/clientimg04.jpg') }}" alt="user" class="img-circle">
														<span class="profile-status offline float-right"></span>
													</div>
													<div class="mail-contnet">
														<h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
													</div>
												</a>
												<div class="ps-scrollbar-x-rail" style="left: 0; bottom: 0">
													<div class="ps-scrollbar-x" tabindex="0" style="left: 0; width: 0"></div>
												</div>
												<div class="ps-scrollbar-y-rail" style="top: 0; right: 3px">
													<div class="ps-scrollbar-y" tabindex="0" style="top: 0; height: 0"></div>
												</div>
											</div>
										</li>
										<li>
											<a class="nav-link text-center link m-b-5" href="javascript:void(0);"> <b>See all e-Mails</b> <i class="fa fa-angle-right"></i> </a>
										</li>
									</ul>
								</div>
							</li>
							<li class="nav-item search-box">
								<a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i>
								</a>
								<form class="app-search">
									<label for="site-search"></label>
									<input id="site-search" type="text" class="form-control" placeholder="Search &amp; enter">
									<a class="srh-btn">
										<i class="ti-close"></i>
									</a>
								</form>
							</li>
						</ul>
						<ul class="navbar-nav my-lg-0">
							<li class="nav-item dropdown show">
								<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<img src="{{ asset('assets/images/ClientsImgs/clientimg03.jpg') }}" alt="user" class="img-circle" width="30">
								</a>
								<div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
									<span class="with-arrow">
										<span class="bg-primary"></span>
									</span>
									<div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
										<div class="">
											<img src="{{ asset('assets/images/ClientsImgs/clientimg03.jpg') }}" alt="user" class="img-circle" width="60">
										</div>
										<div class="m-l-10">
											<h4 class="m-b-0">Lorem Ipsum</h4>
											<p class=" m-b-0">Lorem Ipsum@gmail.com</p>
										</div>
									</div>
									<a class="dropdown-item" href="javascript:void(0)">
										<i class="ti-user m-r-5 m-l-5"></i> My Profile
									</a>
									<a class="dropdown-item" href="javascript:void(0)">
										<i class="ti-wallet m-r-5 m-l-5"></i> My Balance
									</a>
									<a class="dropdown-item" href="javascript:void(0)">
										<i class="ti-email m-r-5 m-l-5"></i> Inbox
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="javascript:void(0)">
										<i class="ti-settings m-r-5 m-l-5"></i> Account Setting
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="javascript:void(0)">
										<i class="fa fa-power-off m-r-5 m-l-5"></i> Logout
									</a>
									<div class="dropdown-divider"></div>
									<div class="p-l-30 p-10">
										<a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle waves-effect waves-dark" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-bell"></i>
									<div class="notify">
										<span class="heartbit"></span>
										<span class="point"></span>
									</div>
								</a>
								<div class="mailbox dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
									<ul>
										<li>
											<div class="drop-title bg-primary text-white">
												<h4 class="m-b-0 m-t-5">4 New</h4>
												<span class="font-light">Notifications</span>
											</div>
										</li>
										<li>
											<div class="message-center">
												<!-- Message -->
												<a href="javascript:void(0)">
													<div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
													<div class="mail-contnet">
														<h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new
                                                        admin!</span> <span class="time">9:30 AM</span>
													</div>
												</a>
												<!-- Message -->
												<a href="javascript:void(0)">
													<div class="btn btn-success btn-circle"><i class="ti-calendar"></i>
													</div>
													<div class="mail-contnet">
														<h5>Event today</h5> <span class="mail-desc">Just a reminder that
                                                        you have event</span> <span class="time">9:10 AM</span>
													</div>
												</a>
												<!-- Message -->
												<a href="javascript:void(0)">
													<div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
													<div class="mail-contnet">
														<h5>Settings</h5> <span class="mail-desc">You can customize this
                                                        template as you want</span> <span class="time">9:08 AM</span>
													</div>
												</a>
												<!-- Message -->
												<a href="javascript:void(0)">
													<div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
													<div class="mail-contnet">
														<h5>Pavan kumar</h5> <span class="mail-desc">Just see the my
                                                        admin!</span> <span class="time">9:02 AM</span>
													</div>
												</a>
											</div>
										</li>
										<li>
											<a class="nav-link text-center m-b-5" href="javascript:void(0);"> <strong>Check
													all notifications</strong> <i class="fa fa-angle-right"></i> </a>
										</li>
									</ul>
								</div>
							</li>
							<li class="nav-item right-side-toggle"><a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
						</ul>
					</div>
				</nav>
			</header>
			<aside class="left-sidebar">
				<div class="d-flex no-block nav-text-box align-items-center">
					<span>
						<img class="sideBarLogo" src="{{ asset('assets/images/favicon/favicon.png') }}" alt="">
					</span>
					<h4 class="light-logo ml-2 mt-1 text-white">DopeStudios</h4>
					<a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)">
						<i class="fas fa-toggle-on"></i>
					</a>

					<a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)">
						<i class="fas fa-times"></i>
					</a>
				</div>
				<div class="scroll-sidebar">
					<nav class="sidebar-nav">
						<ul id="sidebarnav">
							<li>
								<a class="waves-effect" href="{{ route('dashboard.home') }}">
									<i class="fas fa-tachometer-alt"></i>
									<span class="hide-menu">Dashboard</span>
								</a>
							</li>
							<li>
								<a class="waves-effect" href="{{ route('dashboard.users') }}">
									<i class="fas fa-users"></i>
									<span class="hide-menu">Users</span>
								</a>
							</li>
							<li>
								<a class="waves-effect" href="{{ route('dashboard.music') }}">
									<i class="fas fa-music"></i>
									<span class="hide-menu">Music</span>
								</a>
							</li>
							<li>
								<a class="waves-effect" href="{{ route('dashboard.bidding') }}">
									<i class="fas fa-bold"></i>
									<span class="hide-menu">Current Bidding</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</aside>

			@yield('content')


			<div class="right-sidebar">
				<div class="slimscrollright">
					<div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
					</div>
					<div class="r-panel-body">
						<ul id="themecolors" class="m-t-20">
							<li><b>With Light sidebar</b></li>
							<li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a>
							</li>
							<li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
							<li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
							<li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
							<li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
							<li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
							<li class="d-block m-t-30"><b>With Dark sidebar</b></li>
							<li><a href="javascript:void(0)" data-skin="skin-default-dark"
							       class="default-dark-theme working">7</a></li>
							<li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
							<li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a>
							</li>
							<li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
							<li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a>
							</li>
							<li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
		<script src="{{ asset('assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/perfect-scrollbar.jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/waves.js') }}"></script>
		<script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
		<script src="{{ asset('assets/js/custom.min.js') }}"></script>
		<script src="{{ asset('assets/js/raphael.min.js') }}"></script>
		<script src="{{ asset('assets/js/morris.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('assets/js/easy-pie-chart.init.js') }}"></script>
		<script src="{{ asset('assets/js/jquery-jvectormap-2.0.2.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery-jvectormap-world-mill-en.js') }}"></script>
		<script src="{{ asset('assets/js/dashboard2.js') }}"></script>
	</body>

</html>
