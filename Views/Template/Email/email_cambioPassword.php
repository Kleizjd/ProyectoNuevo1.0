<html lang="es">

<head>
	<title> - Recuperación de Contraseña - </title>
	<!-- Correo: Jose Daniel Grijalba Osorio  -->
</head>

<body>
	<div>
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tbody>
				<tr>
					<td align="center" height="100%" valign="top" width="100%" bgcolor="#f8f9fa" class="x_mobile-padding" style="padding:25px 15px 25px 15px">
						<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" class="x_mobile-wrapper">
							<tbody>
								<tr>
									<td align="center" valign="top" style="padding:0; font-family:'Proxima Nova Soft','Proxima Nova','Helvetica Neue',Helvetica,Arial,sans-serif">
										<table cellspacing="0" cellpadding="0" border="0" width="100%">
											<tbody>
												<tr>
													<td align="center" bgcolor="#ffffff" style="border-radius:8px; padding:40px">
														<table cellspacing="0" cellpadding="0" border="0" width="100%">
															<tbody>
																<tr>
																	<td align="left" style="font-family:'Proxima Nova Soft','Proxima Nova','Helvetica Neue',Helvetica,Arial,sans-serif; padding-bottom:20px">
																		<h3 style="font-size:20px; font-weight:600; color:#495057; margin:0; margin-bottom:5px">
																			<?= NOMBRE_EMPESA ?></h3>
																		<p>¡Hola! <?= $data['nombreUsuario']; ?></p>
																		<p style="color:#868e96; font-size:16px; line-height:24px; margin:0 0 20px 0">
																			Parece que enviaste una solicitud para restablecer tu contraseña de usuario: <?= $data['email']; ?></p>
																		<p style="color:#868e96; font-size:16px; line-height:24px; margin:0">
																			Si este eres tu, Haz Clic en el Boton de bajo
																			para cambiar tu contrase&ntilde;a y poder ingresar a tu cuenta...
																		</p>
																		<br>

																	</td>
																</tr>
																<tr>
																	<td align="left">
																		<table width="100%" class="x_button" cellpadding="0" cellspacing="0" border="0">
																			<tbody>
																				<tr>
																					<td align="left" style="font-size:16px; font-family:'Proxima Nova Soft','Proxima Nova','Helvetica Neue',Helvetica,Arial,sans-serif">
																						<table cellpadding="0" cellspacing="0" border="0">
																							<tbody>
																								<tr>
																									<td align="center" style="background-color:#4dadf7; border-radius:4px">
																										<a href="<?= $data['url_recovery']; ?>" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" style="font-size:20px; font-weight:600; font-family:'Proxima Nova Soft','Proxima Nova','Helvetica Neue',Helvetica,Arial,sans-serif; color:#f8f9fa; display:inline-block; border:1px solid #4dadf7; padding:16px 24px; border-radius:4px; text-decoration:none">Cambiar
																											mi
																											contrasena</a>
																									</td>
																								</tr>
																								<tr>
																									<td>
																										<p style="color:#868e96; font-size:16px; line-height:24px; margin:0">Si no te funciona el botón puedes copiar y pegar la siguiente dirección en tu navegador.</p>
																										<span><?= $data['url_recovery']; ?></span>
																										<p class="x_title_gray"><a href="<?= WEB_EMPRESA; ?>" target="_blanck"><?= WEB_EMPRESA; ?></a></p>
																									</td>
																								</tr>
																							</tbody>
																						</table>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center" height="100%" valign="top" width="100%" bgcolor="#f8f9fa" class="x_mobile-padding" style="padding:25px 15px 50px 15px">
						<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" class="x_mobile-wrapper">
							<tbody>
								<tr>
									<td align="center" valign="top" style="padding:0 0 15px 0"><a href="" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" border="0" style="display:block; color:#adb5bd; text-decoration:none"><img data-imagetype="External" blockedimagesrc="../../public/img2/Gaming.jpg" width="33" height="33" alt="" border="0" style="display:block">
										</a></td>
								</tr>
								<tr>
									<td align="center" valign="top" style="padding:0 0 5px 0; font-family:'Proxima Nova Soft','Proxima Nova','Helvetica Neue',Helvetica,Arial,sans-serif; color:#868e96">
										<p style="font-size:14px; line-height:20px; color:#868e96"><a href="" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" style="color:#adb5bd">Game JD
											</a> &nbsp; • &nbsp; <a href="" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" style="color:#adb5bd">
												Tu cuenta</a> &nbsp; • &nbsp; <a href="mailto:jose.jdgo97@gmail..com?subject=Hola, Game JD!" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" style="color:#adb5bd">
												Contactanos</a> </p>
									</td>
								</tr>
								<tr>
									<td align="center" valign="top" style="padding:0 0 5px 0; font-family:'Proxima Nova Soft','Proxima Nova','Helvetica Neue',Helvetica,Arial,sans-serif; color:#adb5bd">
										<p style="margin:0 30px; font-size:14px; line-height:20px">Estas recibiendo
											este correo es proque tienes una cuenta
											<a href="<ENLACE>" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" style="color:#adb5bd">
												Game -JD </a> .
										</p>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<img data-imagetype="External" blockedimagesrc="" data-connectorsauthtoken="1" data-imageproxyendpoint="/actions/ei" data-imageproxyid="" width="1px" height="1px" alt="">
	</div>


</body>

</html>


<!-- <html lang="es">
<head>
	<link rel="stylesheet" href="vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<title> - Recuperación de Contraseña - </title>
</head>
<body>
	<div class="card">
		<div class="card-header">
			<div class="card-title">
				<h2 style="background-color: #3e93d0;">Recuperación de Contraseña</h2>

	
			</div>
		</div>
		<div class="card-body">
			<p>A continuación encontrará un enlace para recuperar su contraseña</p>

			<a href="<ENLACE>">Haga clic aquí</a>

		</div>
	</div>

</body>
</html> -->