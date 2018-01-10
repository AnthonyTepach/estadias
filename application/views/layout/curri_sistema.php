<!DOCTYPE html>
<html>
<head>
	<title>Curriculum vitae:<?php foreach($datos -> result() as $row){ echo ' '.$row-> nombre_alumno.' '.$row -> a_paterno_alumno;} ?></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type="text/css">
	
		body {
			background: #f0f0f0;
			margin: 0;
			padding: 0;
			
			font-family: 'Helvetica Neue', Helvetica, Arial;
			line-height: 18px;
			font-size: 12px;

			color: #222;
		}

		h1, h2, h3, h4 {
			margin: 0 0 15px 0;
			padding: 0;
		}
		h1 {
			font-size: 300%;
		}
		h2 {
			font-size: 210%;
		}
		h3 {
			font-size: 130%;
		}
		
		p {
			margin: 0 0 10px 0;
		}
		
		ul {
			margin: 0;
			padding: 0 0 0 10px;
			list-style-type: square;
		}
		a {
			color: #222;
		}
		/* ________________________________________________________ */
		
		.clear {
			clear: both;
		}

		#main {
			background: #fff;
			width: 900px;
			padding: 35px;
			margin: 0 auto 15px auto;
			overflow: hidden;
			
			box-shadow: 0 0 6px #ccc;
		}
		
		#title {
			line-height: 42px;
			border-bottom: 3px solid #000;
			padding-bottom: 30px;
			margin: 0px 0 30px 0;
			font-weight: bold;
		}
		
		#credit {
			margin-bottom: 20px;
			font-size: 11px;
			color: #999;
			text-align: center;
		}
			#credit a {
				color: #999;
			}
		
		p label {
			font-weight: bold;
			
			font-size: 110%;
			margin-right: 10px;
		}
			p label span.colon {
				display: inline;
			}

		
		.section {
			margin-bottom: 20px;
		}
		
		.item {
			margin: 0 0 20px 0;
		}

		/*  _____________________________ */
		.rtl {
			direction: rtl;
		}

		.photo .basic-info .set {
			float: none !important;
			width: auto !important;
		}
		.basic-info .address {
			width: 40%;
			float: left;
		}
		.basic-info .r {
			float: right;
			width: 58%;
			text-align: right;
		}
			.basic-info label {
				font-weight: bold;
			}
			.basic-info label, .basic-info span  {
				display: inline !important;
			}
		.basic-info p {
			margin: 0;
		}
		
		.section .title {
			background: #000;
			float: left;
			text-transform: uppercase;
			font-size: 105%;
			font-weight: bold;
			word-wrap: break-word;
			color: #fff;
			padding: 4px 6px;
			width: 16%;
			margin-right: 30px;
		}
		.section .set {
			float: left;
			width: 78%;
		}
			.section .set h3 {
				margin: 0;
			}
		.section span.value {
			display: block;
		}
		.section h3 span.l, .section span.r {
			width: 49%;
			float: left;
		}
			.section span.r {
				float: right;
				text-align: right;
			}
			.section-education .school,
			.section-work .job_title {
				font-size: 100%;
				display: block;
				margin: 5px 0 5px 0;
			}

		/* ___ photo ___ */
		#photo {
			width: 160px;
			height: 200px;
			overflow: hidden;
			float: left;
			margin-top: 8px;
			border-radius: 4px;
		}
		#photo img {
			width: 100%;
			height: auto;
		}
		.header.photo {
			margin-left: 190px;
		}
		.header.photo #title {
			text-align: left;
		}
		.header.photo .basic-info {
			float: none;
			padding: 0;
		}

		@media screen and (max-width: 950px) {
			body {
				background: #fff;
			}
			#main {
				box-shadow: none;
				padding: 0;
				padding: 5px;
			}
		}
	</style>
</head>
<body class="lang- ">

<div id="main">
	
	<h1 id="title"><?php foreach($datos -> result() as $row){ echo $row-> nombre_alumno.' '.$row -> a_paterno_alumno." ".$row -> a_materno_alumno;} ?></h1>
	<div class="basic-info section">
					<h2 class="title">Contactos</h2>
				<div class="set">
		
							<p class="address">
					<span class="value">
						<?php foreach($datos -> result() as $row){ echo $row-> calle_alumno.', '.$row -> colonia_alumno; } ?>
						<br />
						<?php foreach($datos -> result() as $row){ echo $row-> cp_alumno; } ?>
						<br />
						<?php foreach($datos -> result() as $row){ echo $row-> municipio_alumno.', '.$row -> estado_alumno; } ?>			
								</span>
				</p>
						<div class="r">
									<p class="email"><label>Correo electrónico<span class="colon">:</span></label> <span class="value"><?php foreach($datos -> result() as $row){ echo $row-> email_alumno; } ?></span></p>
				
													
									<p class="phone"><label>Teléfono<span class="colon">:</span></label> <span class="value"><?php foreach($datos -> result() as $row){ echo $row-> tel_cel_alumno; } ?></span></p>
							</div>
			<div class="clear"> </div>
		</div><!-- set //-->
		<div class="clear"> </div>
	</div><!-- basic-info //-->

	<div class="section section-interests">
			<h2 class="title">Onjetivo profecional</h2>
			<div class="set">
							<div class="item">
								<p style="text-align: justify; font-size: 16px;">
								<?php foreach($datos -> result() as $row){ ?>
								  <?php echo $row-> objetivo_personal;?></li>
								<?php }?>
								</p>
							</div>
						</div>
			<div class="clear"> </div>
		</div>
		
			<div class="section section-work">
			<h2 class="title">Experiencia laboral</h2>
			<div class="set">
			<?php foreach($la -> result() as $row){ ?>
								<div class="item">
									<h3><span class="company l"><?php echo $row-> nom_empresa;  ?></span>
							<span class="date r"><?php echo $row-> fecha_inicio;  ?> &mdash; <?php echo $row-> fecha_fin;  ?></span>
								</h3>
								<div class="clear"> </div>
								<span class="job_title"><?php echo $row-> nom_puesto;  ?></span><div class="clear"> </div>
								</div>
			<?php }?>
								
							</div>
			<div class="clear"> </div>
		</div>
			<div class="section section-education">
			<h2 class="title">Educación</h2>
			<div class="set">
			<?php foreach($es -> result() as $row){ ?>
						<div class="item">
							<h3><span class="course l"><?php echo $row-> nom_carrera;  ?></span>
						<span class="date r"><?php echo $row-> fecha_inicio;  ?> &mdash; <?php echo $row-> fecha_fin;  ?></span>
							</h3>
							<div class="clear"> </div>
							<span class="school"><?php echo $row-> nom_escuela;  ?></span><span class="clear"> </span>
						</div>
			<?php }?>
						</div>
			<div class="clear"> </div>
		</div>
			<div class="section section-1479143493851">
			<h2 class="title">Idioma</h2>
			<div class="set">
							<div class="item">
								<h2>Inglés</h2>

							<p>Speak: 
									<div class="progress">
								  <div class="progress-bar" role="progressbar" aria-valuenow="<?php foreach($datos -> result() as $row){echo $row-> speaking.'0';} ?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?php foreach($datos -> result() as $row){echo $row-> speaking.'0%';} ?>">
								    <?php foreach($datos -> result() as $row){echo $row-> speaking.'0%';} ?>
								  </div>
								</div>
							</p>
							<p>Listen: 
									<div class="progress">
								  <div class="progress-bar" role="progressbar" aria-valuenow="<?php foreach($datos -> result() as $row){echo $row-> listening.'0';} ?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?php foreach($datos -> result() as $row){echo $row-> listening.'0%';} ?>">
								    <?php foreach($datos -> result() as $row){echo $row-> listening.'0%';} ?>
								  </div>
								</div>
							</p>
							<p>Reading: 
									<div class="progress">
								  <div class="progress-bar" role="progressbar" aria-valuenow="<?php foreach($datos -> result() as $row){echo $row-> reading.'0';} ?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?php foreach($datos -> result() as $row){echo $row-> reading.'0%';} ?>">
								    <?php foreach($datos -> result() as $row){echo $row-> reading.'0%';} ?>
								  </div>
								</div>
							</p>
							
							</div>
						</div>
			<div class="clear"> </div>
		</div>
			<div class="section section-interests">
			<h2 class="title">Intereses</h2>
			<div class="set">
							<div class="item">
								<ul class="list-group">
								<?php foreach($intereses -> result() as $row){ ?>
								  <li class="list-group-item"><?php echo $row-> intereses;?></li>
								<?php }?>
								</ul>
							</div>
						</div>
			<div class="clear"> </div>
		</div>
			
		
</div>
	<div id="credit">Realzado por <a href="#">Anthony Tepach</a></div>
	
</body>
</html> 