<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>210 ОСБ BERLINGO</title>

  <link rel="stylesheet" href="./styles/style.css" />
  <link rel="stylesheet" href="./styles/main.css" />
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
        <a href="javascript:void(0)" class="header__list-close"><img src="./assets/close-arrow.png" alt="Закрити"></a>
        <li class="header__list-item">
          <a class="header__list-link header__list-link-active" href="#">Головна</a>
        </li>
        <li class="header__list-item">
          <a class="header__list-link" href="">Стіна пам'яті</a>
        </li>
        <li class="header__list-item">
          <a class="header__list-link" href="./anketa">Анкета на вступ</a>
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
    <div class="header__content-wrapper">
      <img src="./assets/berlingo-colored.png" alt="БЕРЛІНГО" class="header__content-logo" />
      <div class="header__content-title-wrapper">
        <h1 class="header__content-title header__content-name">
          210 окремий спеціальний батальйон
        </h1>
        <h2 class="header__content-title header__content-slogan">
          Боронимо своє!
        </h2>
      </div>
      <div class="header__content-btns-wrapper">
        <a href="./anketa" class="btn btn-filled">Подати анкету</a>
        <a href="#" class="btn btn-bordered">Підтримати</a>
      </div>
      <div class="header__content-pointer-wrapper">
        <p class="header__content-pointer-title">Дізнайся про нас</p>
        <a href="#about" class="header__content-pointer-link"><img src="./assets/pointer.png" alt="Подивитися" /></a>
      </div>
    </div>
  </header>

  <!-- ПРО БАТАЛЬЙОН -->
  <!-- Спробувати застосувати GRID -->
  <section class="about" id="about">
    <div class="about__row">
      <h2 class="about__title about__title-mobile">Про батальйон</h2>
      <img src="./assets/about-batalion.jpg" alt="Картинка про батальйон" class="about__img" />
      <div class="about__row-col">
        <h2 class="about__title">Про батальйон</h2>
        <p class="about__text">
          210 окремий спеціальний батальйон «BERLINGO» створений в березні
          2022 року. Основу батальйону склали добровольці, які стали до лав
          Збройних Сил України в перші дні повномаштабного вторгнення. На той
          час ворог впритул наблизився до Києва і бої точилися на околицях
          міста. У випадку ворожого прориву невеликі високомобільні групи зі
          складу батальйону повинні були швидко висуватися на зустріч ворогу і
          захистити столицю.
        </p>
      </div>
    </div>
    <div class="about__row">
      <div class="about__row-col">
        <h2 class="about__title">Бойовий шлях</h2>
        <img src="./assets/fight-road.jpg" alt="Картинка про батальйон" class="about__img about__img-mobile" />
        <p class="about__text">
          З моменту створення 210 окремий спеціальний батальйон «BERLINGO»
          пройшов складний і звитяжний шлях. Навесні 2022 року батальйон
          протидіяв ворожому десанту на березі Київського водосховища в районі
          населеного пункту Лютіж. Батальйон брав участь у звільненні
          населених пунктів Шпитьки, Ясногородка, Мотижин та Ветрівка
          Київської області. Виконували бойові завдання в Харківській,
          Сумській та Полтавській областях. З червня 2022 року батальйон
          постійно задіяний на східному фронті, в тому числі при обороні
          Бахмута і Куп’янська.
        </p>
      </div>
      <img src="./assets/fight-road.jpg" alt="Картинка про батальйон" class="about__img" />
    </div>
  </section>

  <!-- КОНТАКТИ -->
  <section class="contact" id="contact">
    <div class="contact__col">
      <img src="./assets/berlingo-colored.png" alt="Емблема батальйону" class="contact__logo" />
      <div class="contact__col-content">
        <h2 class="contact__title">Зворотній зв'язок</h2>
        <p class="contact__slogan">
          Зателефонуй нам.<br />Заповни анкету на вступ
        </p>
      </div>
    </div>
    <div class="contact__col">
      <div class="contact__col-block">
        <h3 class="contact__subtitle">
          <a href="tel:+380960330247"><img src="./assets/phone.png" /></a>Зателефонуй нам
        </h3>
        <a href="tel:+380960330247" class="contact__phone">+380960330247</a>
      </div>
      <div class="contact__col-block">
        <h3 class="contact__subtitle">Заповни анкету на вступ</h3>
        <a href="./anketa" class="btn btn-filled">Подати анкету</a>
      </div>
    </div>
  </section>

  <!-- ЦІННОСТІ -->
  <section class="values" id="values">
    <h2 class="values__title">Наші цінності</h2>
    <ul class="values__list">
      <li class="values__list-item">
        <h3 class="values__list-title">Гарна команда</h3>
        <p class="values__list-text">
          Основу батальйону складають добровольці, які долучились до лав
          Збройних Сил України за покликом серця. Вони чітко розуміють кінцеву
          мету – Перемога України!
        </p>
      </li>
      <li class="values__list-item">
        <h3 class="values__list-title">Якісна підготовка</h3>
        <p class="values__list-text">
          Висока увага приділяється підготовці кожного бійця. Якісне
          індивідуальне навчання по сучасним стандартам є запорукою збереження
          життя особового складу.
        </p>
      </li>
      <li class="values__list-item">
        <h3 class="values__list-title">Стандарти NATO</h3>
        <p class="values__list-text">
          Проводяться навчання у відповідності до стандартів NATO при сприянні
          країн-партнерів. Свій досвід та знання молодому поповненню успішно
          передають ветерани бойових дій.
        </p>
      </li>
      <li class="values__list-item">
        <h3 class="values__list-title">Новітня зброя</h3>
        <p class="values__list-text">
          В батальйоні додаються нові зразки зброї, в тому числі виробництва
          країн NATO. Проводиться постійна підготовка особового складу з
          опанування різноманітного сучасного озброєння та техніки. Значна
          увага приділяється практичним навичкам застосування всіх наявних у
          батальйоні зразків зброї.
        </p>
      </li>
      <li class="values__list-item">
        <h3 class="values__list-title">Ретельний підбір</h3>
        <p class="values__list-text">
          Ідеологія батальйону не дозволяє затриматись в підрозділі випадковим
          особистостям. Бійці, які схильні до зловживання забороненими
          речовинами, різноманітні маргинали та особи з меркантильними
          намірами, як правило, швидко залишають батальйон.
        </p>
      </li>
    </ul>
  </section>

  <!-- ПІДТРИМАТИ -->
  <section class="donate" id="donate">
    <div class="bg-filter"></div>
    <div class="donate__col">
      <h2 class="donate__title">Підтримати <br /><span>батальйон</span></h2>
      <p class="donate__subtitle">
        Долучайся до Перемоги! Тримаємо стрій разом!
      </p>
      <a href="#" class="btn btn-filled">Підтримати</a>
    </div>
    <div class="donate__col">
      <img src="./assets/berlingo-colored.png" alt="Емблема батальйону" class="donate__logo" />
    </div>
  </section>

  <!-- ЗАПИТАННЯ І ВІДПОВІДІ -->
  <section class="faq" id="faq">
    <div class="faq__col">
      <img src="./assets/berlingo-colored.png" alt="Емблема батальйону" class="faq__logo" />
      <h2 class="faq__title">Поширені запитання і відповіді</h2>
      <p class="faq__subtitle">
        Не знайшли відповіді на свої питання?
        <a href="mailto:a4122@post.mil.gov.ua" class="faq__link">Напишіть нам.</a>
      </p>
    </div>
    <div class="faq__col">
      <ul class="faq__list">
        <li class="faq__list-item">
          <div class="faq__list-question">
            <h3 class="faq__list-title">Як отримати відношення?</h3>
            <img src="./assets/pointer-black.png" alt="Розгорнути" class="faq__list-pointer" />
          </div>
          <div class="faq__list-answer">
            <p class="faq__list-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Recusandae, doloribus vel! Suscipit, sequi nostrum, blanditiis
              reprehenderit qui quia maxime, eaque quam magni quaerat dolor
              inventore architecto temporibus veniam deleniti velit.
            </p>
          </div>
        </li>
        <li class="faq__list-item">
          <div class="faq__list-question">
            <h3 class="faq__list-title">Чому батальйон має таку назву?</h3>
            <img src="./assets/pointer-black.png" alt="Розгорнути" class="faq__list-pointer" />
          </div>
          <div class="faq__list-answer">
            <p class="faq__list-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Recusandae, doloribus vel! Suscipit, sequi nostrum, blanditiis
              reprehenderit qui quia maxime, eaque quam magni quaerat dolor
              inventore architecto temporibus veniam deleniti velit.
            </p>
          </div>
        </li>
        <li class="faq__list-item">
          <div class="faq__list-question">
            <h3 class="faq__list-title">Що означає шеврон батальйону?</h3>
            <img src="./assets/pointer-black.png" alt="Розгорнути" class="faq__list-pointer" />
          </div>
          <div class="faq__list-answer">
            <p class="faq__list-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Recusandae, doloribus vel! Suscipit, sequi nostrum, blanditiis
              reprehenderit qui quia maxime, eaque quam magni quaerat dolor
              inventore architecto temporibus veniam deleniti velit.
            </p>
          </div>
        </li>
        <li class="faq__list-item">
          <div class="faq__list-question">
            <h3 class="faq__list-title">
              Я сержант, але хочу стати офіцером...
            </h3>
            <img src="./assets/pointer-black.png" alt="Розгорнути" class="faq__list-pointer" />
          </div>
          <div class="faq__list-answer">
            <p class="faq__list-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Recusandae, doloribus vel! Suscipit, sequi nostrum, blanditiis
              reprehenderit qui quia maxime, eaque quam magni quaerat dolor
              inventore architecto temporibus veniam deleniti velit.
            </p>
          </div>
        </li>
        <li class="faq__list-item">
          <div class="faq__list-question">
            <h3 class="faq__list-title">Які спеціалізації є у батальйоні?</h3>
            <img src="./assets/pointer-black.png" alt="Розгорнути" class="faq__list-pointer" />
          </div>
          <div class="faq__list-answer">
            <p class="faq__list-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Recusandae, doloribus vel! Suscipit, sequi nostrum, blanditiis
              reprehenderit qui quia maxime, eaque quam magni quaerat dolor
              inventore architecto temporibus veniam deleniti velit.
            </p>
          </div>
        </li>
        <li class="faq__list-item">
          <div class="faq__list-question">
            <h3 class="faq__list-title">Тривалість навчання поповнення?</h3>
            <img src="./assets/pointer-black.png" alt="Розгорнути" class="faq__list-pointer" />
          </div>
          <div class="faq__list-answer">
            <p class="faq__list-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Recusandae, doloribus vel! Suscipit, sequi nostrum, blanditiis
              reprehenderit qui quia maxime, eaque quam magni quaerat dolor
              inventore architecto temporibus veniam deleniti velit.
            </p>
          </div>
        </li>
        <li class="faq__list-item">
          <div class="faq__list-question">
            <h3 class="faq__list-title">
              Різниця між контрактом і мобілізацією?
            </h3>
            <img src="./assets/pointer-black.png" alt="Розгорнути" class="faq__list-pointer" />
          </div>
          <div class="faq__list-answer">
            <p class="faq__list-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Recusandae, doloribus vel! Suscipit, sequi nostrum, blanditiis
              reprehenderit qui quia maxime, eaque quam magni quaerat dolor
              inventore architecto temporibus veniam deleniti velit.
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- ГАЛЕРЕЯ -->
  <section class="gallery" id="gallery">
    <div class="bg-filter"></div>
    <div class="gallery__col">
      <img src="./assets/berlingo-colored.png" alt="Емблема батальйону" class="gallery__logo" />
      <h2 class="gallery__title">Галерея</h2>
      <a href="./gallery" class="btn btn-filled">Переглянути</a>
    </div>
  </section>

  <!-- СТІНА ПАМ'ЯТІ -->
  <section class="wall" id="wall">
    <div class="bg-filter"></div>
    <div class="wall__col">
      <h2 class="wall__title">Ми <span>Пам’ятаємо!</span></h2>
      <p class="wall__subtitle">Вони боролись за наше майбутнє</p>
      <a href="" class="btn btn-filled">Відкрити стіну пам'яті</a>
    </div>
    <div class="wall__col">
      <img src="./assets/berlingo-black&white.png" alt="Емблема батальйону" class="wall__logo" />
    </div>
  </section>

  <!-- НАШІ КОНТАКТИ -->
  <section class="full-contact" id="contact">
    <div class="full-contact__col">
      <div class="full-contact__content-block">
        <h2 class="full-contact__title">Наші <br />Контакти</h2>
        <p class="full-contact__subtitle">
          Ви можете зв’язатись з нами будь яким зручним для Вас способом.
        </p>
      </div>
      <div class="full-contact__content-block">
        <h3 class="full-contact__content-title">Наш телефон</h3>
        <a href="tel:+380960330247" class="full-contact__content-link">+380960330247</a>
      </div>
      <div class="full-contact__content-block">
        <h3 class="full-contact__content-title">Наша електронна пошта</h3>
        <a href="mailto:osberlingo210@gmail.com" class="full-contact__content-link">osberlingo210@gmail.com</a>
      </div>
    </div>
    <div class="full-contact__col">
      <div class="full-contact__qr-block">
        <h3 class="full-contact__qr-title">
          Наш <a class="full-contact__qr-link"
            href="https://www.facebook.com/profile.php?id=100087101127695">Фейсбук</a>
        </h3>
        <img src="assets/fb-qr.png" alt="QR-код на Facebook" class="full-contact__qr-img" />
      </div>
      <div class="full-contact__qr-block">
        <h3 class="full-contact__qr-title">
          Наш <a class="full-contact__qr-link" href="https://www.instagram.com/210berlingo_official/">Інстаграм</a>
        </h3>
        <img src="assets/inst-qr.png" alt="QR-код на Instagram" class="full-contact__qr-img" />
      </div>
      <div class="full-contact__qr-block">
        <h3 class="full-contact__qr-title">
          Наш <a class="full-contact__qr-link" href="https://www.youtube.com/@210Berlingo/">Ютуб</a>
        </h3>
        <img src="assets/yt-qr.png" alt="QR-код на YouTube" class="full-contact__qr-img" />
      </div>
    </div>
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
          <a class="footer__list-link" href="">Стіна пам'яті</a>
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