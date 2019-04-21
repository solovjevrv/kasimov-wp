<?php
/*
Template Name: Каталог (основная)
*/
?>

<!-- Здесь html/php код шаблона -->
<?php get_header(); ?>

<!-- < ---------- HERO_CATALOG ---------- > -->

  <section class="hero-catalog">
    <a class="hero-catalog-btn" href="#">Каталог продукции</a>
  </section>

  <!-- < ---------- CATALOG-MAIN-BLOCK ---------- > -->
  <section class="catalog-main-block">
    <div class="container">
      <div class="col-lg-6">
        <h3 class="main-block-heading">Касимовсетеснасть</h3>
        <p class="main-block-description">Здесь должно быть краткое описание возможных услуг и продукции вцелом. Ut eget
          imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet. Sed sit amet arcu aliquet,
          molestie justo at, auctor nunc. Phasellus ligula ipsum, volutpat eget semper id, viverra eget nibh.
          Suspendisse
          luctus mattis cursus.</p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card-catalog-1">
            <div class="card-catalog-content">
              <h4 class="card-catalog-heading">Садки для аквакультуры</h4>
              <a href="catalog-sadki.html" class="card-catalog-btn">каталог</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card-catalog-2">
            <div class="card-catalog-content">
              <h4 class="card-catalog-heading">Дели и сетные пластины</h4>
              <a href="catalog-main-deli.html" class="card-catalog-btn">каталог</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card-catalog-3">
            <div class="card-catalog-content">
              <h4 class="card-catalog-heading">Материалы для лова</h4>
              <a href="catalog-main-materiali.html" class="card-catalog-btn">каталог</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card-catalog-4">
            <div class="card-catalog-content">
              <h4 class="card-catalog-heading">Готовые изделия в наличии</h4>
              <a href="catalog-gotovie.html" class="card-catalog-btn">каталог</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="container">
      <h3 class="main-block-heading">Касимовсетеснасть</h3>
      <div class="product-list-all">
        <div class="row">
          <div class="col-lg-6">
            <ul class="product-list">
              <li class="product-list-item"><a href="catalog-sadki.html">Садки для аквакультуры</a></li>
              <li class="product-list-item"><a href="catalog-bezuzlovie-deli.html">Дели ниточные трикотажные
                  (безузловые) полиамидные</a></li>
              <li class="product-list-item"><a href="catalog-nitochnie-uzlovie-deli.html">Дели рыболовные ниточные
                  узловые полиамидные</a>
              </li>
              <li class="product-list-item"><a href="catalog-setnie-plastini.html">Пластины сетные рыболовные узловые из
                  крученых ниток</a></li>
              <li class="product-list-item"><a href="catalog-setepolotna.html">Ряжевые полотна (ряжь) </a></li>
              <li class="product-list-item"><a href="catalog-nitki-rybolovnie.html">Нитки рыболовные крученые
                  полиамидные</a></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="product-list">
              <li class="product-list-item"><a href="catalog-verevki.html">Веревки рыболовные крученые полиамидные</a>
              </li>
              <li class="product-list-item"><a href="catalog-shnuri.html">Шнуры рыболовные плетеные полиамидные</a></li>
              <li class="product-list-item"><a href="catalog-poplavki.html">Поплавки и наплава</a></li>
              <li class="product-list-item"><a href="catalog-gotovie.html">Садок рыбоводный</a></li>
              <li class="product-list-item"><a href="#">Сети для частных лиц</a></li>
              <li class="product-list-item"><a href="#">Сети для рыбной ловли</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- < ---------- SCREEN-DELIVERY-BLOCK ---------- > -->
  <section class="screen-delivery">
    <div class="container">
      <div class="screen-delivery-content">
        <div class="screen-delivery-text">
          <h3 class="screen-delivery-heading">Доставка по всему миру</h3>
          <p class="screen-delivery-description">Mauris non tempor quam, et lacinia sapien. Mauris accumsan eros eget
            libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing vitae est. Sed nec felis
            pellentesque.</p>
        </div>
        <a href="#" class="screen-delivery-btn">подробнее</a>
      </div>
    </div>
  </section>

  <!-- < ---------- GALLERY ---------- > -->
  <section class="gallery">
    <div class="container">
      <h3 class="gallery-heading">Галерея нашей продукции</h3>
      <p class="gallery-decription">Здесь должно быть краткое описание продуктов</p>
      <div class="gallery-items">
        <img src="img/gallery/1.png" alt="" class="gallery-item">
        <img src="img/gallery/2.png" alt="" class="gallery-item">
        <img src="img/gallery/3.png" alt="" class="gallery-item">
        <img src="img/gallery/4.png" alt="" class="gallery-item">
        <img src="img/gallery/5.png" alt="" class="gallery-item">
        <img src="img/gallery/6.png" alt="" class="gallery-item">
        <img src="img/gallery/7.png" alt="" class="gallery-item">
        <img src="img/gallery/8.png" alt="" class="gallery-item">
        <img src="img/gallery/9.png" alt="" class="gallery-item">
      </div>
    </div>
  </section>
<?php get_footer(); ?>