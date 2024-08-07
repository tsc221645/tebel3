<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Inicio</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="back/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="back/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="back/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="back/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="back/vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="back/src/plugins/jquery-steps/jquery.steps.css""
		/>
		<link rel="stylesheet" type="text/css" href="back/vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
    <body>
        <div class="header">
            <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
            <div class="header-search">
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here" />
                        <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="ion-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
        </div>
        </div>

        <div class="left-side-bar">
            <div class="brand-logo">
                <a href="index.html">
                    <img src="back/vendors/images/bussineslogo.png" alt="" class="dark-logo" />
                    <img src="back/vendors/images/bussineslogo.png" alt="" class="light-logo" />
                </a>
                <div class="close-sidebar" data-toggle="left-sidebar-close">
                    <i class="ion-close-round"></i>
                </div>
            </div>
            <div class="menu-block customscroll">
                <div class="sidebar-menu">
                    <ul id="accordion-menu">
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon bi bi-house"></span>
                                <span class="mtext">Home</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="index.html">Inicio</a></li>
                                <!-- Otras opciones de dashboard eliminadas -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon bi bi-file-earmark-text"></span>
                                <span class="mtext">Productos</span>
                            </a>
                            <ul class="submenu">
                                <!-- Opciones relacionadas con los productos -->
                                <li><a href="#">Productos</a></li>
                                <!-- Agrega más productos según sea necesario -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon bi bi-archive"></span>
                                <span class="mtext">Misión</span>
                            </a>
                            <!-- Opciones relacionadas con la misión -->
                        </li>
                    </ul>
                </div>
            </div>
            </div>
            <div class="mobile-menu-overlay"></div>

        <div class="main-container">
            @yield('content')
        </div>
        
                
        <!-- js -->
        <script src="back/vendors/scripts/core.js"></script>
        <script src="back/vendors/scripts/script.min.js"></script>
        <script src="back/vendors/scripts/process.js"></script>
        <script src="back/vendors/scripts/layout-settings.js"></script>
        <script src="back/src/plugins/jquery-steps/jquery.steps.js"></script>
        <script src="back/vendors/scripts/steps-setting.js"></script>
    </body>

</html>