<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Stay-Smartly : Stay-Smartly">
    <meta property="og:title" content="Stay-Smartly : Stay-Smartly">
    <meta property="og:description" content="Stay-Smartly : Stay-Smartly">
    <!-- <meta property="og:image" content="https:/Stay-Samartly.dexignlab.com/xhtml/social-image.png"> -->
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/asset/images/favicon.png">
    <link href="<?= base_url(); ?>/asset/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/asset/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/asset/vendor/nouislider/nouislider.min.css">

    <!-- Style css -->
    <link href="<?= base_url(); ?>/asset/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
                    <defs>
                    </defs>
                </svg>
                <div class="brand-title">
                    <h2 class="">Smartly</h2>
                    <span class="brand-sub-title"></span>
                </div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->



        <!--**********************************
            Header start
        ***********************************-->
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <!-- <li class="nav-item d-flex align-items-center">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                                </div>
                            </li> -->


                            <li class="nav-item dropdown  header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="<?= base_url(); ?>/asset/images/profile.jpg" width="56" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a> -->
                                    <!-- <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ms-2">Inbox </span>
                                    </a> -->
                                    <a href="<?= base_url('Auth/logout'); ?>" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                <li><a href="<?= base_url('Admin'); ?>" class="" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-building"></i>
                            <span class="nav-text">Hotel</span>
                        </a>
                        <ul aria-expanded="false">
                        <li><a href="<?= base_url('Admin/booked'); ?>">Booked</a></li>
                            <li><a href="<?= base_url('Admin/checkin'); ?>">Check In</a></li>
                            <li><a href="<?= base_url('Admin/checkout'); ?>">Check Out</a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-bookmark"></i>
                            <span class="nav-text">Room</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Admin/roomcategory'); ?>">Room Category List</a></li>
                            <li><a href="<?= base_url('Admin/room'); ?>">Room</a></li>
                        </ul>

                    </li>
                    <li><a href="<?= base_url('Admin/user'); ?>" class="" aria-expanded="false">
							<i class="fas fa-user"></i>
							<span class="nav-text">User</span>
						</a>
					</li>
                    <li><a href="<?= base_url('Admin/site'); ?>" class="" aria-expanded="false">
							<i class="fas fa-file-alt"></i>
							<span class="nav-text">Site Settings</span>
						</a>
					</li>
                    <li><a href="<?= base_url('Admin/log'); ?>" class="" aria-expanded="false">
							<i class="fas fa-clone"></i>
							<span class="nav-text">History</span>
						</a>
					</li>
                    <!-- <li><a href="<?= base_url('Admin/booked'); ?>" class="" aria-expanded="false">
                            <i class="fas fa-user-check"></i>
                            <span class="nav-text">Booked</span>
                        </a>
                    </li>
                    <li><a href="<?= base_url('Admin/checkin'); ?>" class="" aria-expanded="false">
                            <i class="fas fa-user-check"></i>
                            <span class="nav-text">Check In</span>
                        </a>
                    </li>
                    <li><a href="<?= base_url('Admin/checkout'); ?>" class="" aria-expanded="false">
                            <i class="fas fa-user-check"></i>
                            <span class="nav-text">Check Out</span>
                        </a>
                    </li>
                    <li><a href="<?= base_url('Admin/roomcategory'); ?>" class="" aria-expanded="false">
                            <i class="fas fa-user-check"></i>
                            <span class="nav-text">Room Category List</span>
                        </a>
                    </li>
                    <li><a href="<?= base_url('Admin/room'); ?>" class="" aria-expanded="false">
                            <i class="fas fa-user-check"></i>
                            <span class="nav-text">Room</span>
                        </a>
                    </li>
                    <li><a href="<?= base_url('Admin/user'); ?>" class="" aria-expanded="false">
                            <i class="fas fa-user-check"></i>
                            <span class="nav-text">User</span>
                        </a>
                    </li>
                    <li><a href="<?= base_url('Admin/site'); ?>" class="" aria-expanded="false">
                            <i class="fas fa-user-check"></i>
                            <span class="nav-text">Site Settings</span>
                        </a>
                    </li> -->

                    <!-- <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-info-circle"></i>
                            <span class="nav-text">Apps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="app-profile.html">Profile</a></li>
                            <li><a href="post-details.html">Post Details</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.html">Compose</a></li>
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="app-calender.html">Calendar</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="ecom-product-grid.html">Product Grid</a></li>
                                    <li><a href="ecom-product-list.html">Product List</a></li>
                                    <li><a href="ecom-product-detail.html">Product Details</a></li>
                                    <li><a href="ecom-product-order.html">Order</a></li>
                                    <li><a href="ecom-checkout.html">Checkout</a></li>
                                    <li><a href="ecom-invoice.html">Invoice</a></li>
                                    <li><a href="ecom-customers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fab fa-bootstrap"></i>
                            <span class="nav-text">Bootstrap</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="ui-accordion.html">Accordion</a></li>
                            <li><a href="ui-alert.html">Alert</a></li>
                            <li><a href="ui-badge.html">Badge</a></li>
                            <li><a href="ui-button.html">Button</a></li>
                            <li><a href="ui-modal.html">Modal</a></li>
                            <li><a href="ui-button-group.html">Button Group</a></li>
                            <li><a href="ui-list-group.html">List Group</a></li>
                            <li><a href="ui-card.html">Cards</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-dropdown.html">Dropdown</a></li>
                            <li><a href="ui-popover.html">Popover</a></li>
                            <li><a href="ui-progressbar.html">Progressbar</a></li>
                            <li><a href="ui-tab.html">Tab</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-pagination.html">Pagination</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-heart"></i>
                            <span class="nav-text">Plugins</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="uc-select2.html">Select 2</a></li>
                            <li><a href="uc-nestable.html">Nestedable</a></li>
                            <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="uc-toastr.html">Toastr</a></li>
                            <li><a href="map-jqvmap.html">Jqv Map</a></li>
                            <li><a href="uc-lightgallery.html">Light Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" class="" aria-expanded="false">
                            <i class="fas fa-user-check"></i>
                            <span class="nav-text">Widget</span>
                        </a>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-file-alt"></i>
                            <span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="form-element.html">Form Elements</a></li>
                            <li><a href="form-wizard.html">Wizard</a></li>
                            <li><a href="form-ckeditor.html">CkEditor</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation.html">Form Validate</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-table"></i>
                            <span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-clone"></i>
                            <span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">Error 400</a></li>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                    <li><a href="page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="empty-page.html">Empty Page</a></li>
                        </ul>
                    </li>
                </ul> -->
                    <!-- <div class="side-bar-profile">
					<div class="d-flex align-items-center justify-content-between mb-3">
						<div class="side-bar-profile-img">
							<img src="<?= base_url(); ?>/asset/images/user.jpg" alt="">
						</div>
						<div class="profile-info1">
							<h4 class="fs-18 font-w500">Soeng Souy</h4>
							<span>example@mail.com</span>
						</div>
						<div class="profile-button">
							<i class="fas fa-caret-down scale5 text-light"></i>
						</div>
					</div>	
					<div class="d-flex justify-content-between mb-2 progress-info">
						<span class="fs-12"><i class="fas fa-star text-orange me-2"></i>Task Progress</span>
						<span class="fs-12">20/45</span>
					</div>
					<div class="progress default-progress">
						<div class="progress-bar bg-gradientf progress-animated" style="width: 45%; height:10px;" role="progressbar">
							<span class="sr-only">45% Complete</span>
						</div>
					</div>
				</div> -->

                    <!-- <div class="copyright">
					<p><strong>Stay-Samartly Saas Admin</strong> © 2021 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by DexignLabs</p>
				</div> -->
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->