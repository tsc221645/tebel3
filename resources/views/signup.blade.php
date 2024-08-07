<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Registro</title>

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
			href="back/src/plugins/jquery-steps/jquery.steps.css"
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

	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="login.html">
						<img src="back/vendors/images/bussineslogo.png" alt="" />
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href="{{ route('login.index') }}">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="register-box bg-white box-shadow border-radius-10">
            <div class="wizard-content">
                <form class="tab-wizard2 wizard-circle wizard">
                    <!-- Step 1 -->
                    <h5>Informacion de usuario</h5>
                    <section>
                        <div class="form-wrap max-width-600 mx-auto">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nombre completo</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="fullname" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Rol</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="jobposition" required>
                                        <option value="">Seleccione un puesto</option>
                                        <option value="Administrador">Adminstrador</option>
                                        <option value="Vendedor">Vendedor</option>
                                        <option value="Contador">Contador</option>
                                        <option value="Gerente">Gerente</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h5>Credenciales de la cuenta</h5>
                    <section>
                        <div class="form-wrap max-width-600 mx-auto">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nombre de usuario</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="username" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Contraseña</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Confirmar contraseña</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="confirm_password" required />
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>        

		<!-- success Popup html Start -->
		<button
			type="button"
			id="success-modal-btn"
			hidden
			data-toggle="modal"
			data-target="#success-modal"
			data-backdrop="static"
		>
			Launch modal
		</button>
		<div
			class="modal fade"
			id="success-modal"
			tabindex="-1"
			role="dialog"
			aria-labelledby="exampleModalCenterTitle"
			aria-hidden="true"
		>
			<div
				class="modal-dialog modal-dialog-centered max-width-400"
				role="document"
			>
				<div class="modal-content">
					<div class="modal-body text-center font-18">
						<h3 class="mb-20">Informacion guardada!</h3>
						<div class="mb-30 text-center">
							<img src="back/vendors/images/success.png" />
						</div>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
						eiusmod
					</div>
					<div class="modal-footer justify-content-center">
						<a href="login.html" class="btn btn-primary">Hecho</a>
					</div>
				</div>
			</div>
		</div>
		<!-- success Popup html End -->
		<!-- js -->
		<script src="back/vendors/scripts/core.js"></script>
		<script src="back/vendors/scripts/script.min.js"></script>
		<script src="back/vendors/scripts/process.js"></script>
		<script src="back/vendors/scripts/layout-settings.js"></script>
		<script src="back/src/plugins/jquery-steps/jquery.steps.js"></script>
		<script src="back/vendors/scripts/steps-setting.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>