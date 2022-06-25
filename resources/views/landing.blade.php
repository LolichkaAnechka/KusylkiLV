<!DOCTYPE html>

<html>

<head>
	<title>
		Кисульки
	</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
	<link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css" >
	<link rel="icon" href="{{ asset('css/img-src/logo.png') }}">
</head>

<body class="landing-body">
	<header class="top-bar">
		<div class="landing-content">
			<div class="menu">
				<a href="landing">
					<img class="menu-logo" src="
					{{ asset('css/img-src/img2.png') }}" alt="" />
				</a>
				<nav class="menu-options">
					<a href=""><b>КОМАНДА</b> </a>
					<a href="blog"><b>БЛОГ</b></a>
					<a href=""><b>ПРО КЛУБ</b></a>
					<a href=""><b>ПАРТНЕРИ</b></a>
				</nav>
				<nav class="social-media-options">
					<a href="">
						<img class="socials-logo" src="{{ asset('css/img-src/upper-inst.png') }}" alt="" />
					</a>
					<a href="">
						<img class="socials-logo" src="{{ asset('css/img-src/upper-twitter.png') }}" alt="" />
					</a>
					<a href="">
						<img class="socials-logo" src="{{ asset('css/img-src/upper-youtube.png') }}" alt="" />
					</a>
					<a href="">
						<img class="socials-logo" src="{{ asset('css/img-src/upper-twitch.png') }}" alt="" />

					</a>
				</nav>
			</div>
		</div>
	</header>
	<header class="mobile-top-bar">
		<div class="landing-content">
			<div class="mobile-menu">
				<a href="landing">
					<img class="menu-logo" src="{{ asset('css/img-src/img2.png') }}" alt="" />
				</a>

				<h1> <b>Кисульки </b></h1>

				<div class="dropping-menu">
					<a href="javascript:void(0);" onclick="myFunction()">
						<img src="{{ asset('css/img-src/bars-solid.svg') }}" alt="">
					</a>
				</div>
			</div>
			<div id="droped-menu">
				<a href=""><b>КОМАНДА</b> </a>
				<a href="blog"><b>БЛОГ</b></a>
				<a href=""><b>ПРО КЛУБ</b></a>
				<a href=""><b>ПАРТНЕРИ</b></a>
			</div>
		</div>

	</header>




	<div class="landing-content">
		<div class="main-body">
			<div class="text-columns">
				<div class="column">
					<h1>
						Хто ми?
					</h1>
					<h2>
						Кисульки - кіберспортивний клуб, що спеціалізуэться на дисципліні Dota 2 <br>
						Учасники таких найвідоміших міжнародних змагань як: INTEL EXTREME MASTERS, THE DEFENSE, THE
						INTERNATIONAL
					</h2>


				</div>
				<div class="column">
					<h1>
						Чому саме ми?
					</h1>
					<h2>
						Незважаючи на серйозні наміри клубу стати кращою командою в світі, ми стараємося зберегти дружню
						атмосферу між нашими гравцями та менеджментом клубу, щоб вам було приємно за нами спостерігати
					</h2>


				</div>
			</div>

			<div class="landing-buttons">
				<a href="">
					<div class="landing-button">
						<h3>
							Наш відеоблог
						</h3>
					</div>
				</a>

				<a href="">
					<div class="landing-button">
						<h3>
							Наша сторінка на Liquipedia
						</h3>
					</div>
				</a>

			</div>
		</div>


		<div class="mobile-main-body">
			<div class="mobile-text-columns">
				<div class="mobile-column">
					<h1>
						Хто ми?
					</h1>
					<h2>
						Кисульки - кіберспортивний клуб, що спеціалізуэться на дисципліні Dota 2 <br>
						Учасники таких найвідоміших міжнародних змагань як: INTEL EXTREME MASTERS, THE DEFENSE, THE
						INTERNATIONAL
					</h2>

					<div class="mobile-landing-button">
						<h3>
							Наш відеоблог
						</h3>
					</div>


				</div>
				<div class="mobile-column">
					<h1>
						Чому саме ми?
					</h1>
					<h2>
						Незважаючи на серйозні наміри клубу стати кращою командою в світі, ми стараємося зберегти дружню
						атмосферу між нашими гравцями та менеджментом клубу, щоб вам було приємно за нами спостерігати
					</h2>

					<div class="mobile-landing-button">
						<h3>
							Наш відеоблог
						</h3>
					</div>


				</div>
			</div>
		</div>



		<footer class="landing-sponsors">
			<img src="{{ asset('css/img-src/sponsors/Red_Bull 1.png') }}" alt="">
			<img src="{{ asset('css/img-src/sponsors/hyperx 1.png') }}" alt="">
			<img src="{{ asset('css/img-src/sponsors/Transparent_SecretLab_Logo(black_font)(1)-1.png') }}" alt="">
		</footer>

		<footer class="mobile-landing-sponsors">
			<img src="{{ asset('css/img-src/sponsors/Red_Bull 1.png') }}" alt="">
			<img src="{{ asset('css/img-src/sponsors/hyperx 1.png') }}" alt="">
			<img src="{{ asset('css/img-src/sponsors/Transparent_SecretLab_Logo(black_font)(1)-1.png') }}" alt="">
		</footer>


	</div>

	<script>
		function myFunction() {
			var x = document.getElementById("droped-menu");
			if (x.style.display === "flex") {
				x.style.display = "none";
			} else {
				x.style.display = "flex";
			}
		}
		</script>
</body>

</html>