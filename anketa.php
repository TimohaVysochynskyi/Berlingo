<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>210 ОСБ BERLINGO | Анкета на вступ</title>

	<link rel="stylesheet" href="./styles/style.css" />
	<link rel="stylesheet" href="./styles/anketa.css" />
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
					<a class="header__list-link" href="">Стіна пам'яті</a>
				</li>
				<li class="header__list-item">
					<a class="header__list-link header__list-link-active" href="#">Анкета на вступ</a>
				</li>
				<li class="header__list-item">
					<a class="header__list-link" href="./gallery">Галерея</a>
				</li>
				<li class="header__list-item">
					<a class="header__list-link btn btn-bordered" href="#">Підтримати</a>
				</li>
			</ul>
			<a href="javascript:void(0)" id="burger-btn" class="header__burger"><img src="./assets/burger-menu.png"
					alt="Меню"></a>
		</nav>
	</header>

	<!-- АНКЕТА -->
	<section class="anketa-wrapper">
		<h1 class="anketa-title">Анкета на вступ до 210 ОСБ</h1>
		<p class="anketa-note"><span>*</span> - обов'язкові поля</p>
		<form action="./scripts/send_anketa.php" method="post" class="anketa">

			<!-- ПЕРСОНАЛЬНІ ДАНІ -->
			<div class="anketa__row">
				<div class="anketa__input-wrapper name-input">
					<label class="anketa__label" for="name">Ім'я <span>*</span></label>
					<input name="name" id="name" class="anketa__input" type="text" placeholder="Ім'я" required="" />
				</div>
				<div class="anketa__input-wrapper birth-input">
					<label class="anketa__label" for="birth">Рік народження <span>*</span></label>
					<input name="birth" id="birth" class="anketa__input" type="number" min="1900" max="2099" step="1"
						placeholder="1980" required="" />
				</div>
				<div class="anketa__input-wrapper tel-input">
					<label class="anketa__label" for="tel">Контактний номер телефону <span>*</span></label>
					<input name="tel" id="tel" class="anketa__input" type="tel" placeholder="+38(0__)___ __ __"
						required="" />
				</div>
			</div>

			<!-- ОСВІТА -->
			<div class="anketa__row">
				<div class="anketa__input-wrapper degree-input">
					<label class="anketa__label" for="degree">Освіта, спеціальність</label>
					<select name="degree" id="degree" class="anketa__input">
						<option value="">Не вибрано</option>
						<option value="Базова середня">Базова середня</option>
						<option value="Повна середня">Повна середня</option>
						<option value="Професійно-технічна">Професійно-технічна</option>
						<option value="Неповна вища">Неповна вища</option>
						<option value="Базова вища">Базова вища</option>
						<option value="Повна вища">Повна вища</option>
					</select>
				</div>
				<div class="anketa__input-wrapper school-input">
					<label class="anketa__label" for="school">Навчальний заклад</label>
					<input name="school" id="school" class="anketa__input" type="text" placeholder="Назва" />
				</div>
			</div>

			<!-- ДОСВІД -->
			<div class="anketa__row">
				<div class="anketa__input-wrapper exp-in-structure-input">
					<label class="anketa__label" for="exp-in-structure">Досвід у силових структурах?</label>
					<div class="anketa__input-row">
						<input name="exp-in-structure" id="exp-in-structure" class="anketa__input" type="radio"
							value="1" />
						Так
					</div>
					<div class="anketa__input-row">
						<input name="exp-in-structure" id="exp-in-structure" class="anketa__input" type="radio"
							value="0" />
						Ні
					</div>
				</div>
				<div class="anketa__input-wrapper structure-input">
					<label class="anketa__label" for="structure">Де саме?</label>
					<input name="structure" id="structure" class="anketa__input" type="text"
						placeholder="Де? Як довго?" />
				</div>
				<div class="anketa__input-wrapper rank-input">
					<label class="anketa__label" for="rank">Військове звання</label>
					<select name="rank" id="rank" class="anketa__input">
						<option value="">Не вибрано</option>
						<option value="Рекрут">Рекрут</option>
						<option value="Солдат">Солдат</option>
						<option value="Старший солдат">Старший солдат</option>
						<option value="Молодший сержант">Молодший сержант</option>
						<option value="Сержант">Сержант</option>
						<option value="Старший сержант">Старший сержант</option>
						<option value="Перший сержант">Перший сержант</option>
						<option value="Штаб-сержант">Штаб-сержант</option>
						<option value="Майстер-сержант">Майстер-сержант</option>
						<option value="Старший майстер-сержант">Старший майстер-сержант</option>
						<option value="Головний майстер-сержант">Головний майстер-сержант</option>
					</select>
				</div>
				<div class="anketa__input-wrapper vos-input">
					<label class="anketa__label" for="vos">ВОС</label>
					<input name="vos" id="vos" class="anketa__input" type="text" placeholder="Стрілець" />
				</div>
			</div>
			<div class="anketa__row">
				<div class="anketa__input-wrapper exp-in-battle-input">
					<label class="anketa__label" for="exp-in-battle">Бойовий досвід</label>
					<div class="anketa__input-row">
						<input name="exp-in-battle" id="exp-in-battle" class="anketa__input" type="radio" value="1" />
						Так
					</div>
					<div class="anketa__input-row">
						<input name="exp-in-battle" id="exp-in-battle" class="anketa__input" type="radio" value="0" />
						Ні
					</div>
				</div>
				<div class="anketa__input-wrapper battle-input">
					<label class="anketa__label" for="battle">Де саме? Які роки?</label>
					<input name="battle" id="battle" class="anketa__input" type="text" placeholder="Бахмут, 2023" />
				</div>
				<div class="anketa__input-wrapper exp-with-guns-input">
					<label class="anketa__label" for="exp-with-guns">Досвід зі зброєю?</label>
					<div class="anketa__input-row">
						<input name="exp-with-guns" id="exp-with-guns" class="anketa__input" type="radio" value="1" />
						Так
					</div>
					<div class="anketa__input-row">
						<input name="exp-with-guns" id="exp-with-guns" class="anketa__input" type="radio" value="0" />
						Ні
					</div>
				</div>
				<div class="anketa__input-wrapper guns-input">
					<label class="anketa__label" for="guns">Якою саме зброєю?</label>
					<input name="guns" id="guns" class="anketa__input" type="text" placeholder="АК-74, РПГ-7" />
				</div>
			</div>

			<!-- ПРИМІТКИ -->
			<div class="anketa__row">
				<div class="anketa__input-wrapper driver-input">
					<label class="anketa__label" for="driver">Водійське посвідчення, категорія</label>
					<input name="driver" id="driver" class="anketa__input" type="text" placeholder="Категорія С" />
				</div>
				<div class="anketa__input-wrapper notes-input">
					<label class="anketa__label" for="notes">Примітки</label>
					<input name="notes" id="notes" class="anketa__input" type="text"
						placeholder="Додаткові навички, уміння" />
				</div>
			</div>

			<div class="anketa__row">
				<button type="submit" class="btn btn-filled anketa__btn">Відправити анкету</button>
			</div>
		</form>
	</section>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="./scripts/burger.js"></script>
</body>

</html>