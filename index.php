<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Boxbreathing</title>
		<meta charset="utf-8">
		<meta name="description" content="Boxbreathing is a timed breathing technique that consists of four consecutive intervals. Boxbreathing may have a positive impact on your mood as well as maintaining focus.">
		<meta name="author" content="Christof Kälin">
		<meta name="robots" content="index,follow">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Roboto:wght@400;900&display=swap">
		<link rel="shortcut icon" href="favicon/favicon.ico">
		<link rel="icon" sizes="16x16 32x32 64x64" href="favicon/favicon.ico">
		<link rel="icon" type="image/png" sizes="196x196" href="favicon/favicon-192.png">
		<link rel="icon" type="image/png" sizes="160x160" href="favicon/favicon-160.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96.png">
		<link rel="icon" type="image/png" sizes="64x64" href="favicon/favicon-64.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16.png">
		<link rel="apple-touch-icon" href="favicon/favicon-57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicon/favicon-114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicon/favicon-72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicon/favicon-144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon/favicon-60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon/favicon-120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicon/favicon-76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicon/favicon-152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/favicon-180.png">
		<meta name="msapplication-TileColor" content="#FFFFFF">
		<meta name="msapplication-TileImage" content="favicon/favicon-144.png">
		<meta name="msapplication-config" content="favicon/browserconfig.xml">
		<style>
			* {
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}

			html {
				scroll-behavior: smooth;
			}

			body {
				height: 200vh;
				font-size: 1.2em;
				line-height: 1.4;
				font-family: 'Roboto', sans-serif;
				background-color: #eee;
			}

			a, a:visited, a:hover, a:active {
				color: inherit;
			}
			
			.center {
				display: flex;
				justify-content: center;
				align-items:center;
				text-align: center;
			}

			main {
				color: #666;
				background-color: #eee;
				width: inherit;
				height: inherit;
				border-bottom: 1em solid #eee;
			}

			.slide {
				height: 50%;
			}

			h1,
			h2,
			h3,
			h4,
			h5 {
				font-family: 'Bad Script', serif;
			}

			#switch {
				z-index: 1;
				-webkit-appearance: none;
				width: 5rem;
				height: 1.6rem;
				border: 1px solid rgba(160,160,160,1);
				border-radius: 1rem;
				position: absolute;
				right: 1em;
				bottom: 1em;
			}

			#switch::after {
				position: absolute;
				font-size: .8em;
				top: 0;
				left: 0;
				width: 50%;
				height: 100%;
				background: #514878;
				border-top-left-radius: 1rem;
				border-bottom-left-radius: 1rem;
				content: 'OFF';
				display: flex;
				align-items: center;
				justify-content: center;
				color: white;
			}

			#switch:checked ~ main {
				color: #dedede;
				background-color: #000;
				width: inherit;
				height: inherit;
				border-bottom: 1em solid #000;
			}

			#switch:checked ~ label[for="switch"],
			#switch:checked ~ .about-link {
				color: #dedede !important;
			}

			#switch:checked::after {
				right: 0;
				left: auto;
				background: #52cf71;
				border-radius: 0 1rem 1rem 0;
				content: 'ON';
			}

			label[for="switch"] {
				position: absolute;
				right: 0.8em;
				bottom: 3em;
				color: #666;
                -webkit-touch-callout: none;
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
			}

			.circle {
				line-height: 1.15;
				border-radius: 50%;
				width: 45vh;
				height: 45vh;
				flex-wrap: wrap;
				align-content: center;
				animation: circle 16s infinite forwards;
			}

			@keyframes circle {
				0% { transform: scale(1); background-color: #f2ba49 }
				24% { transform: scale(1.5); background-color: #f2ba49 }
				25% { background-color: #e6a1d2 }
				49% { transform: scale(1.5); background-color: #e6a1d2 }
				50% { background-color: #f2ba49 }
				74% { transform: scale(1); background-color: #f2ba49 }
				75% { background-color: #e6a1d2 }
				99% { background: #e6a1d2 }
				100% { background-color: #f2ba49 }
			}

			.lead,
			.countdown {
				color: #fff;
				display: inline-block;
				width: 100%;
			}

			.lead span,
			.countdown span {
				display: block;
			}

			.lead {
				height: 1.15em;
				font-size: 3em;
				overflow: hidden;
			}

			.strings {
				animation: strings 16s infinite step-end forwards;
			}

			@keyframes strings {
				0%  { transform: translateY(0); }
				25% { transform: translateY(-1.15em) }
				50% { transform: translateY(-2.3em) }
				75% { transform: translateY(-3.45em) }
				100% { 
					transform: translateY(-4.6em);
					width: 0;
				}
			}

			.countdown {
				height: 1.15em;
				font-size: 6em;
				overflow: hidden;
			}

			.numbers {
				animation: numbers 4s infinite step-end forwards;
			}

			@keyframes numbers {
				0%  { transform: translateY(0) }
				20% { transform: translateY(-1.15em) }
				40% { transform: translateY(-2.3em) }
				60% { transform: translateY(-3.45em) }
				80% { transform: translateY(-4.6em) }
				100% {
					transform: translateY(-5.75em);
					width: 0;
				}
			}

			#about {
				width: 70%;
				margin-left:auto;
				margin-right:auto;
				padding: 2em 0;
			}

			.about-link {
				font-family: 'Bad Script', serif;
				font-size: 3em;
				position: absolute;
				left: .5em;
				bottom: .5em;
				color: #666 !important;
				text-decoration: none;
				transition: transform .3s;
                transform-origin: bottom left;
			}

			.about-link:hover {
				transform: scale(1.2);
				transform-origin: bottom left;
			}
		</style>
	</head>
	<body>
	<input type="checkbox" id="switch"
        <?php
            if (isset($_GET["nightmode"])){
                if ($_GET["nightmode"] == "on") {
                    echo ("checked");
                }
            } ?>>
	<label for="switch">Nightmode?</label>
	<main>
		<div class="center slide">
			<div class="center circle">
				<div class="lead">
					<div class="strings">
						<span>Breathe In</span>
						<span>Hold</span>
						<span>Breathe Out</span>
						<span>Hold</span>
					</div>
				</div>
				<div class="countdown">
					<div class="numbers">
						<span>4</span>
						<span>3</span>
						<span>2</span>
						<span>1</span>
						<span>0</span>
					</div>
				</div>
			</div>
		</div>
		<div id="about" class="slide">
			<h1>What is boxbreathing?</h1>
			<p>Boxbreathing is a timed breathing technique that consists of four consecutive intervals: Breathe in, holding your breath, breathe out, and hold again. Each of those segments is supposed to last for around 4 seconds in order to have a positive impact on your mood as well as maintaining focus. Detailed information can be found on <a href="https://www.medicalnewstoday.com/articles/321805" target="_blank">Medical News Today</a>, medically reviewed by <a href="https://rm.edu/rmu-bios/timothy-legg/" target="_blank">Dr. Timothy J. Legg</a>.</p>
			<h2>About this page</h2>
			<p>This website is based on <a href="https://gfycat.com/finishedobesedormouse" target="_blank">this gfycat</a> by <a href="https://www.healthline.com/health/box-breathing" target="_blank">Healthline</a>. For the purpose of simplicity, only HTML and CSS 3 were used to create this site. During the realisation, I found <a href="https://www.chenhuijing.com/blog/can-you-make-a-countdown-timer-in-pure-css/" target="_blank">this article</a> on CSS countdowns by Chen Hui Jing exceedingly helpful. Along with <a href="https://dev.wgao19.cc/sun-moon-blending-mode/" target="_blank">Wei Gao's</a> solution for a pure night mode in form of a <a href="https://codepen.io/wgao19/pen/vMzOgQ" target="_blank">codepen</a>, I was able to avoid Javascript entirely.<br>Last but not least, the icons in use were provided by <a href="https://www.flaticon.com/authors/roundicons" title="Roundicons" target="_blank">Roundicons</a> from <a href="https://www.flaticon.com/" title="Flaticon" target="_blank">flaticon.com</a>.<br>Thank you all for sharing your knowledge/icons. The source code is publicly available on <a href="https://github.com/christofkaelin/boxbreathing" target="_blank">GitHub</a></p>
			<p>boxbreathing.info is created by <a href="https://www.christofkaelin.ch/" target="_blank">Christof Kälin</a> – if you have any questions or suggestions, make sure to stop by and let me know.</p>
			<h3>Liability</h3>
			<p>All information published on the website is made available by <a href="https://www.boxbreathing.info">boxbreathing.info</a> and is for personal use and information purposes only, it may be changed at any time and without prior notice. boxbreathing.info assumes no liability (neither expressly nor impliedly) for the accuracy, completeness and timeliness of the information published on boxbreathing.info; even though all due care was taken during the collection of sources regarded as trustworthy.</p>
			<h3>Links</h3>
			<p>The majority of links on boxbreathing.info lead to third-party websites, which are beyond the control of boxbreathing.info. Accordingly, boxbreathing.info assumes no responsibility for the accuracy, completeness and legality of the contents of such websites or for any offers and services contained therein.</p>
		</div>
	</main>
	<a class="about-link" href="#about">What is<br>boxbreathing?</a>
	</body>
</html>
