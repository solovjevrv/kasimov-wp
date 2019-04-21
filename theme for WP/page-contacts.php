<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>

<section class="contact-page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="left-content">
            <div class="form-title">
              <h2> Оставить заявку</h2>
              <h3>Начните сотрудничество</h3>
            </div>
            <div class="contacts-block">
              <img src="img/icon-contacts-1-red.svg" alt="Телефон">
              <h5 class="contacts-title color-red">Телефон</h5>
              <p class="contacts-text color-grey">+7 (49131) 2-26-69</p>
              <p class="contacts-text color-grey">+7 (905) 187-24-39</p>
            </div>
            <div class="contacts-block">
              <img src="img/icon-contacts-2-red.svg" alt="Email">
              <h5 class="contacts-title color-red">E-mail</h5>
              <p class="contacts-text color-grey">kasimovsetka@mail.ru</p>
              <p class="contacts-text color-grey">market@setka-kasimov.ru</p>
            </div>
            <div class="contacts-block">
              <img src="img/icon-contacts-3-red.svg" alt="Адрес">
              <h5 class="contacts-title color-red">Адрес</h5>
              <p class="contacts-text color-grey">Россия, 391302, Рязанская область, Касимов, ул. Федоровой, д. 53</p>
            </div>

          </div>
        </div>
        <div class="col-md-6">
          <div class="right-content">

            <div class="contact-form-block">
              <form>
                <input type="text" placeholder="Как к вам обращаться?">
                <input type="email" placeholder="Ваш E-mail">
                <textarea placeholder="Ваше сообщение"></textarea>
              </form>
              <p class="policy-text">Нажимая кнопку «Отправить», вы соглашаетесь с Политикой Конфиденциальности сайта
              </p>
              <a href="#" class="button-send">Отправить <img src="img/ico-button-send.svg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="map">
    <iframe class="yandex-map" src="https://yandex.ru/map-widget/v1/-/CCBjfWzg" frameborder="0"
      allowfullscreen="true"></iframe>
  </section>
	
<?php get_footer(); ?>