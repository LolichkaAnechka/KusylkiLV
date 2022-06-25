<!DOCTYPE html>

<html>

<head>

	@yield('title')
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
	<link rel="icon" href="{{ asset('css/img-src/logo.png') }}">
	<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
	<header class="top-bar">
		<div class="landing-content">
			<div class="menu">
				<a href="/landing">
					<img class="menu-logo" src="{{ asset('css/img-src/img2.png')}}" alt="" />
				</a>
				<nav class="menu-options">
					<a href=""><b>КОМАНДА</b> </a>
					<a href="/blog"><b>БЛОГ</b></a>
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
				<a href="/landing">
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
				<a href="/blog"><b>БЛОГ</b></a>
				<a href=""><b>ПРО КЛУБ</b></a>
				<a href=""><b>ПАРТНЕРИ</b></a>
			</div>
		</div>

	</header>

		<div class="content">
		<div>

			@yield('post_content')
			
			<div class="comment-section">
				<div class="title">
					<span> <b> Коментарі </b> </span>
					<div class="line">
					</div>
				</div>
					
				@yield('comments')
				

			

			</div>
			<div class="blog-landing-sponsors">
				<img src="{{ asset('css/img-src/sponsors/Red_Bull 1.png') }}" alt="">
				<img src="{{ asset('css/img-src/sponsors/hyperx 1.png') }}" alt="">
				<img src="{{ asset('css/img-src/sponsors/Transparent_SecretLab_Logo(black_font)(1)-1.png') }}" alt="">
			</div>

			<div class="mobile-landing-sponsors av-sponsors">
				<img src="{{ asset('css/img-src/sponsors/Red_Bull 1.png') }}" alt="">
				<img src="{{ asset('css/img-src/sponsors/hyperx 1.png') }}" alt="">
				<img src="{{ asset('css/img-src/sponsors/Transparent_SecretLab_Logo(black_font)(1)-1.png') }}" alt="">
			</div>

			<footer class="footer">
				<div class="line">

				</div>

				<div class="info">
					<div class="info-text-column-left">
						<h3>
							<b>
								Навігація
							</b>
						</h3>
						<span> <b>
								<a href="">Команда</a><br>
								<a href="">Про нас</a><br>
								<a href="/blog">Блог</a><br>
								<a href="">Партнери</a><br>
							</b>
						</span>
					</div>

					<div class="info-text-column-center">
						<h3>
							<b>
								Контакти
							</b>
						</h3>
						<span> <b>
								contact@kusylki.com<br>
								+38(096)-735-27-04 <br>
							</b>
						</span>
					</div>

					<div class="info-text-column-right">
						<h3>
							<b>
								Наші соц. мережі
							</b>
						</h3>
						<span> <b>

								<a href="">Twitter</a><br>
								<a href="">Instagram</a><br>
								<a href="">Youtube</a><br>
								<a href="">Twitch</a><br>
							</b>
						</span>
					</div>
				</div>
				<div class="right-reserved">
					<b>2022 © Кисульки. All rights reserved</b>
				</div>
			</footer>

			<footer class="mobile-footer">
				<div class="line">
				</div>

				<h3>
					Наші соц. мережі
				</h3>

				<div class="social-line">
					<a href="">
						<img class="socials-logo" src="{{ asset('css/img-src/bot-inst.png') }}" alt="" />
					</a>
					<a href="">
						<img class="socials-logo" src="{{ asset('css/img-src/bot-twitter.png') }}" alt="" />
					</a>
					<a href="">
						<img class="socials-logo" src="{{ asset('css/img-src/bot-youtube.png') }}" alt="" />
					</a>
					<a href="">
						<img class="socials-logo" src="{{ asset('css/img-src/bot-twitch.png') }}" alt="" />

					</a>
				</div>

				<h3>
					Контакти
				</h3>

				<div class="bot-contacts">
					<span>
						<b> contact@kusylki.com </b> 
					</span>
					<span>
						<b>+38(096)-735-27-04</b> 
					</span>
				</div>

				<div class="mobile-right-reserved">
					<b>2022 © Кисульки. All rights reserved</b>
				</div>

			</footer>
	</div>
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