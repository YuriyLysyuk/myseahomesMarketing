<?php  

require 'phpLibs/php-multilang/MultiLang.php'; 
$ml = new MultiLang();

if ($_GET && ($_GET['lang']) && ($_GET['lang'] === 'ru')) {
  $ml->setLanguage('RU');
}

?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />

    <title>Отдел маркетинга Myseahomes</title>
    <meta
      name="description"
      content="Первые лиды на второй день работы или мы вернем вам деньги"
    />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#1c222a" />
    <link rel="shortcut icon" href="favicon.ico" />
    <meta name="msapplication-TileColor" content="#1c222a" />
    <meta name="msapplication-config" content="browserconfig.xml" />
    <meta name="theme-color" content="#1c222a" />

    <link rel="stylesheet" href="css/fonts.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css"
    />
    <link rel="stylesheet" href="css/main.min.css" />

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
      (function (m, e, t, r, i, k, a) {
        m[i] =
          m[i] ||
          function () {
            (m[i].a = m[i].a || []).push(arguments);
          };
        m[i].l = 1 * new Date();
        (k = e.createElement(t)),
          (a = e.getElementsByTagName(t)[0]),
          (k.async = 1),
          (k.src = r),
          a.parentNode.insertBefore(k, a);
      })(
        window,
        document,
        'script',
        'https://mc.yandex.ru/metrika/tag.js',
        'ym'
      );

      ym(72242728, 'init', {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true,
      });
    </script>
    <noscript
      ><div>
        <img
          src="https://mc.yandex.ru/watch/72242728"
          style="position: absolute; left: -9999px"
          alt=""
        /></div
    ></noscript>
    <!-- /Yandex.Metrika counter -->
  </head>

  <body>
    <header id="top" class="header">
      <div class="wrap">
        <img class="logo" src="img/logo.png" alt="Myseahomes logo" />
      </div>
    </header>

    <section class="hero">
      <div class="wrap">
        <h1>
          <span class="hero__subtitle">Отдел маркетинга</span><br />
          <span class="text--accented">My</span>seahomes
        </h1>
        <p class="hero__desc">
          <span class="text--accented">/</span> Первые лиды на второй день
          работы <br />или
          <span
            class="text--accented text--uppercased text--underlined text--bolded"
            >мы вернем вам деньги</span
          >
        </p>
        <button class="btn trigger">Оставить заявку</button>
      </div>
    </section>

    <section class="differents">
      <div class="wrap">
        <h2 class="uppercased">
          Чем мы <br /><span class="text--accented">отличаемся</span> от
          конкурентов?
        </h2>
        <div class="differents__grid">
          <div class="differents__item">
            <div class="differents__item__number">
              0<span class="text--accented">1</span>
            </div>
            <div class="differents__item__desc">
              Заказав у нас трафик, вы получите полноценную маркетинговую
              ревизию бизнеса с рекомендациями, начиная от сайта, заканчивая
              оффлайном.
            </div>
          </div>
          <div class="differents__item">
            <div class="differents__item__number">
              0<span class="text--accented">2</span>
            </div>
            <div class="differents__item__desc">
              24/7. Мы работаем с разными странами и нам приходится
              подстраиваться под время клиентов. Мы создаем чат со специалистами
              и ваш вопрос не останется без ответа дольше часа.
            </div>
          </div>
          <div class="differents__item">
            <div class="differents__item__number">
              0<span class="text--accented">3</span>
            </div>
            <div class="differents__item__desc">
              Мы постоянно развиваемся: посещаем топовые мастер-классы, читаем
              книги, учимся. Что это дает вам? Команду людей, которые не стоят
              на месте, внедряют в бизнес новые инструменты маркетинга.
            </div>
          </div>
          <div class="differents__item">
            <div class="differents__item__number">
              0<span class="text--accented">4</span>
            </div>
            <div class="differents__item__desc">
              Мыслим цифрами, поэтому БЕСПЛАТНО даем аналитику и CRM для анализа
              каждой заявки и настроенной аудитории.
            </div>
          </div>
          <div class="differents__item">
            <div class="differents__item__number">
              0<span class="text--accented">5</span>
            </div>
            <div class="differents__item__desc">
              Ориентируемся не на цену заявки, а на итог — заказ.
            </div>
          </div>
          <div class="differents__item differents__item--bordered">
            <div class="differents__item__title text--uppercased">
              <span>и наконец главное...</span><br />
              Мы делаем много денег
            </div>
            <button class="btn btn--small trigger">Оставить заявку</button>
          </div>
        </div>
      </div>
    </section>

    <section class="more">
      <div class="wrap">
        <h2 class="text--uppercased heading--smaller">
          <span class="text--accented">Делаем больше, </span><br />чем требуют
          наши обязанности!
        </h2>
        <div class="text--smaller">
          Заполните форму ниже и мы сделаем анализ и приблизительный прогноз по
          результатам
        </div>
        <form action="#" class="form">
          <input
            type="text"
            name="name"
            placeholder="Введите ваше имя"
            required
            class="form__control form__control--wide"
            autocomplete="off"
          />
          <input
            type="tel"
            name="phone"
            placeholder="Контактный телефон"
            required
            class="form__control form__control--wide"
            autocomplete="off"
          />
          <button class="btn btn--wide" type="submit">Оставить заявку</button>
        </form>
      </div>
    </section>

    <section id="services" class="services">
      <h2 class="text--centered">
        Наши <span class="text--accented">Услуги</span>
      </h2>
      <div class="wrap">
        <div class="services__item">
          <div class="img__wrap">
            <img src="img/services-1.jpg" alt="Таргетинговая реклама" />
          </div>
          <div class="services__box">
            <h3><span class="text--accented">Таргетинговая</span> реклама</h3>
            <p>
              Мы делаем полный анализ посадочных страниц, подключаем аналитику и
              AmoCRM для анализа рекламных объявлений и каждой заявки. Это
              позволяет ориентироваться не на цену лида, а на конечную
              стоимость.
            </p>
            <button class="btn trigger">Узнать подробнее</button>
          </div>
        </div>
        <div class="services__item">
          <div class="img__wrap">
            <img src="img/services-2.jpg" alt="Воронки" />
          </div>
          <div class="services__box">
            <h3><span class="text--accented">Воронки</span></h3>
            <p>
              Разрабатываем автоматизированные маркетинговые воронки с
              подключением чат-ботов. Это не только разгружает отдел продаж, но
              и позволяет прогревать каждого потенциального клиента, доводя его
              до покупки. Вы заплатили деньги, чтобы он перешел на сайт и
              оставил заявку, значит нужно работать с ним и "дожимать".
            </p>
            <button class="btn trigger">Узнать подробнее</button>
          </div>
        </div>
      </div>
    </section>

    <section id="offer" class="offer">
      <div class="wrap">
        <h2>
          Что мы <span class="text--accented text--underlined">предлагаем</span>
        </h2>
        <div class="offer__grid">
          <div class="offer__item line__bottom line__bottom--first">
            <i class="fas fa-chart-line"></i>
            <h3>
              <span class="text--accented">Анализ бизнеса</span>
              и конкурентов
            </h3>
            <p>
              Даем советы по улучшению воронки/лид магнита и в целом вашей
              бизнес модели
            </p>
            <div class="offer__number"><span>1</span></div>
          </div>
          <div class="offer__item line__bottom">
            <i class="far fa-user-circle"></i>
            <h3>
              <span class="text--accented">Ментальная</span>
              карта
            </h3>
            <p>Наглядно предоставляем план работ</p>
            <div class="offer__number"><span>2</span></div>
          </div>
          <div class="offer__item line__bottom line__bottom--last">
            <i class="fas fa-sliders-h"></i>
            <h3>
              <span class="text--accented">Подключение метрик</span>
              к вашему сайту
            </h3>
            <p>для полного анализа поведения целевого трафика</p>
            <div class="offer__number"><span>3</span></div>
          </div>
          <div class="offer__item line__bottom">
            <i class="fab fa-instagram"></i>
            <h3><span class="text--accented">Масштабирование</span></h3>
            <p>Проработка новых источников трафика</p>
            <div class="offer__number"><span>6</span></div>
          </div>
          <div class="offer__item line__bottom">
            <i class="fas fa-layer-group"></i>
            <h3><span class="text--accented">Ремаркетинг</span></h3>
            <p>Дожимаем теплую аудиторию в покупку</p>
            <div class="offer__number"><span>5</span></div>
          </div>
          <div class="offer__item line__bottom line__bottom--last line__right">
            <i class="fab fa-sketch"></i>
            <h3>
              <span class="text--accented">Разработка</span>
              дизайнерских креативов
            </h3>
            <p>Уникальные изображения/видео</p>
            <div class="offer__number"><span>4</span></div>
          </div>
          <div class="offer__item line__bottom line__left">
            <i class="fas fa-check-double"></i>
            <h3>
              <span class="text--accented">Промежуточный</span>
              анализ
            </h3>
            <p>Выявления слабых мест и оптимизация рекламной кампании</p>
            <div class="offer__number"><span>7</span></div>
          </div>
          <div class="offer__item line__bottom">
            <i class="fas fa-cog"></i>
            <h3>
              <span class="text--accented">Настройка</span> тестовой рекламной
              кампании
            </h3>
            <p>Сегментация аудитории и тест креативов</p>
            <div class="offer__number"><span>8</span></div>
          </div>
          <div
            class="offer__item offer__item--bg line__bottom line__bottom--last"
          >
            <div class="bg">
              <h3>
                <span class="text--accented">Отбивайтесь</span><br />
                от клиентов
              </h3>
            </div>
            <div class="offer__number">
              <span><i class="fas fa-check"></i></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="why-we" class="why-we">
      <div class="wrap">
        <h2 class="text--centered">
          <span class="text--accented">Почему мы</span> а не кто-то другой
        </h2>
        <div class="why-we__grid">
          <div class="why-we__item why-we__item--bordered">
            <p>
              <span class="text--accented">Мы пропишем</span> маркетинговую
              стратегию
            </p>
            <p>Именно под Вашу нишу и Вашу бизнес-модель</p>
          </div>
          <div class="why-we__item why-we__item--bordered">
            <p>
              <span class="text--accented">Комплексный</span> маркетинговый
              подход
            </p>
            <p>
              Поэтому будьте готовы, что помимо рекламы мы настроим Вам еще
              "кучу" полезных инструментов
            </p>
          </div>
          <div class="why-we__item why-we__item--bordered">
            <p>
              <span class="text--accented">Усиливаем пиксель</span> Вашего сайта
            </p>
            <p>Чтобы Вы получали только качественных клиентов</p>
          </div>
          <div class="why-we__item why-we__item--bordered">
            <p>
              <span class="text--accented">Мы работаем</span> на окупаемость
            </p>
            <p>И на Ваш ROI, а не за лиды и CTR</p>
          </div>
          <div class="why-we__item why-we__item--bordered">
            <p>
              <span class="text--accented">Проработаем гибкую</span> стратегию
              ремаркетинга
            </p>
            <p>С помощью эффективной рекламной кампании</p>
          </div>
          <div class="why-we__item why-we__item--bordered">
            <p>
              <span class="text--accented">Создаем</span> дизайнерские креативы
              в фирменном стиле
            </p>
            <p>И да, мы работаем с видео)</p>
          </div>
          <div class="why-we__item why-we__item--bordered why-we__item--last">
            <p>
              <span class="text--accented">Наша команда на связи</span> 24/7
            </p>
            <p>А еще мы просто хорошие ребята)</p>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer__grid">
        <div class="footer__item footer__title">
          <p class="text--uppercased">
            <span class="text--accented">My</span>seahomes
          </p>
        </div>
        <div class="footer__item footer__nav">
          <a href="#top">Главная</a>
          <a href="#services">Наши услуги</a>
          <a href="#offer">Что мы предлагаем</a>
          <a href="#why-we">Почему мы</a>
        </div>
        <div class="footer__item footer__social">
          <p>Ищите нас в соц сетях</p>
          <div class="footer__social__grid">
            <a
              href="https://www.instagram.com/targetolog_ustinov/"
              target="_blank"
              class="instagram"
              ><i class="fab fa-instagram"></i
            ></a>
            <a
              href="https://www.facebook.com/Myseahomes"
              target="_blank"
              class="facebook"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a
              href="https://t.me/targetolog_ustinov"
              target="_blank"
              class="telegram"
              ><i class="fab fa-telegram-plane"></i
            ></a>
            <!--<a href="#" target="_blank" class="viber"
              ><i class="fab fa-viber"></i
            ></a>-->
            <a
              href="https://wa.me/905338365211"
              target="_blank"
              class="whatsapp"
              ><i class="fab fa-whatsapp"></i
            ></a>
          </div>
        </div>
        <div class="footer__item footer__phone">
          <a href="tel:+905338365211" class="btn">+905338365211</a>
          <p>Звоните, мы на связи</p>
        </div>
        <div class="footer__item footer__copyrights">
          <a
            href="https://www.myseahomes.com/privacy-policy.html"
            target="_blank"
            >Политика конфиденциальности</a
          >
          <p>Все права защищены <br />© 2022</p>
        </div>
        <div class="footer__item footer__address">
          <p>
            <i class="fas fa-map-marker-alt"></i> Catalkoy, Ayaztepe Sokak,
            Riverside Sitesi
          </p>
        </div>
      </div>
    </footer>

    <div id="modal">
      <form action="#" class="form">
        <input
          type="text"
          name="name"
          placeholder="Введите ваше имя"
          required
          class="form__control form__control--wide"
          autocomplete="off"
        />
        <input
          type="tel"
          name="phone"
          placeholder="Контактный телефон"
          required
          class="form__control form__control--wide"
          autocomplete="off"
        />
        <button class="btn btn--wide" type="submit">Оставить заявку</button>
      </form>
    </div>

    <div id="thank-you"></div>

    <script
      defer
      src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
      integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
      crossorigin="anonymous"
    ></script>
    <script src="js/libs.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
    <script src="js/common.js"></script>
  </body>
</html>
