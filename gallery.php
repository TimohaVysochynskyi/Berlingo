<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>210 ОСБ BERLINGO | Галерея</title>

	<link rel="stylesheet" href="./styles/style.css">
	<link rel="stylesheet" href="./styles/gallery.css">
	<link rel="stylesheet" href="./styles/responsive.css">
</head>

<body>
	<!-- ХЕДЕР -->
	<header class="header">
		<nav class="header__nav">
			<div class="header__icon-wrapper">
				<img src="./assets/mo.png" alt="МО" class="header__icon" />
				<img src="./assets/lf.png" alt="LF" class="header__icon" />
			</div>
			<ul class="header__list">
				<a href="javascript:void(0)" class="header__list-close"><img src="./assets/close-arrow.png"
						alt="Закрити"></a>
				<li class="header__list-item">
					<a class="header__list-link" href="./">Головна</a>
				</li>
				<li class="header__list-item">
					<a class="header__list-link" href="./memory">Стіна пам'яті</a>
				</li>
				<li class="header__list-item">
					<a class="header__list-link" href="./anketa">Анкета на вступ</a>
				</li>
				<li class="header__list-item">
					<a class="header__list-link header__list-link-active" href="#">Галерея</a>
				</li>
				<li class="header__list-item">
					<a class="header__list-link btn btn-bordered" href="#">Підтримати</a>
				</li>
			</ul>
			<a href="javascript:void(0)" id="burger-btn" class="header__burger"><img src="./assets/burger-menu.png"
					alt="Меню"></a>
		</nav>
	</header>

	<!-- ГАЛЕРЕЯ -->
	<section class="gallery-wrapper">
		<ul class="gallery">
			<li class="gallery__item">
				<p class="gallery__item-date">21.12.2023</p>
				<img src="./assets/gallery/slider1.png" class="gallery__item-img">
				<p class="gallery__item-description">Особовий склад 210 окремого спеціального батальйону “BERLINGO” на
					заняттях з вогневої підготовки. Працює розрахунок СПГ-9.
					Разом до Перемоги!</p>
			</li>
			<div class="gallery__item">
				<hr class="gallery__line">
			</div>
			<li class="gallery__item">
				<p class="gallery__item-date">10.08.2023</p>
				<img src="./assets/gallery/slider2.png" class="gallery__item-img">
				<p class="gallery__item-description">Кулеметні групи готові до зустрічі з ворожими безпілотниками. Veni,
					vidi, vici...</p>
			</li>
		</ul>
	</section>

	<!-- ФУТЕР -->
	<footer class="footer">
		<nav class="footer__nav">
			<div class="footer__icon-wrapper">
				<img src="./assets/mo.png" alt="МО" class="footer__icon" />
				<img src="./assets/lf.png" alt="LF" class="footer__icon" />
			</div>
			<ul class="footer__list">
				<li class="footer__list-item">
					<a class="footer__list-link btn btn-bordered" href="#">Підтримати</a>
				</li>
				<li class="footer__list-item">
					<a class="footer__list-link" href="./anketa">Анкета на вступ</a>
				</li>
				<li class="footer__list-item">
					<a class="footer__list-link" href="./memory">Стіна пам'яті</a>
				</li>
			</ul>
		</nav>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="./scripts/burger.js"></script>
</body>

</html>