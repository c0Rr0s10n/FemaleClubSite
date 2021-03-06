<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <script type="text/javascript" src="/js/wow.min.js"></script>
  <script>
    var wow = new WOW();
    wow.init();
    <?php
$dbhost = 'srv-pleskdb48.ps.kz:3306';
$dbuser = 'onemusec_admin';
$dbpass = 'V3K3~5qtc*4n';
$dbname = 'onemusec_data';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
}
$sql = "SELECT * from promos";
$codes = array();
$data = mysqli_query($conn, $sql)
	  	or die (mysqli_error($conn));
while ($row = mysqli_fetch_array($data)) {
	array_push($codes, $row['promo']);
}
?>
  </script>
  <title>Female Club</title>
</head>

<body>
  <!-- START HERE -->
  <!--Navigation bar-->
  <nav class="navbar navbar-expand-md bg-light navbar-light sticky-top mb-auto" id="main-nav">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a href="#header" class="nav-link">Главная</a></li>
          <li class="nav-item"><a href="#description-continue" class="nav-link">О нас</a></li>
          <li class="nav-item"><a href="#timer" class="nav-link">Скидка</a></li>
          <li class="nav-item"><a href="#faq" class="nav-link">FAQ</a></li>
          <li class="nav-item"><a href="#reviews" class="nav-link">Отзывы</a></li>
        </ul>
      </div>
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a href="https://www.instagram.com/club_by_one.muse.story/" class="nav-link waves-effect waves-light" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>


  <section id="header" class="view">
    <div class="black-overlay">
      <div class="backgr">
        <div class="container-fluid">
          <div class="row">
            <div class="col-10 text-white text-center pt-5 pb-0 align-self-center mx-auto mt-5">
              <h4 class="company-name display-5 align-self-center mt-5 wow animate__fadeInUpBig"><span>CLUB BY ONE MUSE STORE</span></h4>
            </div>
            <div class="col-10 text-white text-center pt-0 pb-0 align-self-center mx-auto">
              <h1 class="header-text1 align-self-center mt-5 wow animate__fadeInUpBig">ТРАНСФОРМАЦИЯ ВНУТРЕНЕЙ КРАСОТЫ</h1>
            </div>
            <div class="col-10 text-white text-center pt-0 pb-5 align-self-center mx-auto">
              <h4 class="header-text2 display-5 align-self-center mt-5 wow animate__fadeInUpBig"><span>ПРОЕКТ ПО РАЗВИТИЮ ЛИЧНОСТИ И РАСКРЫТИЮ<br>ИСТИНОЙ ЖЕНСВЕННОСТИ</span></h4>
            </div>
            <div id="arrow1" class="col-10 text-center align-self-center mx-auto"><a href="#description"><i class="arrow-down fas fa-angle-down fa-4x"></i></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--OLD Header section-->
  <!-- <section id="home" class="bg-light">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6 col-lg-12 text-md-center p-5 align-self-center mt-5">
          <h1 class="display-3 py-5 wow fadeInUp">Lorem ipsum dolor sit.</h1>
          <a href="#" class="btn btn-outline-info btn-lg text-dark wow animate__bounceIn mb-2"><i class="fas fa-arrow-right"></i> Purchase now</a>
          <a href="#" class="btn btn-outline-info btn-lg text-dark wow animate__bounceIn mb-2"><i class="fas fa-arrow-right"></i> Purchase now</a>
        </div>
        <div class="col-xl-6 ml-auto pr-0 d-none d-xl-block">
          <img src="img/for_banner.webp" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section> -->

  <!--Description section-->
  <section id="description" class="text-center">
    <div class="container-fluid">
      <div class="row">
        <div class="video-background-holder">
          <div class="video-background-overlay"></div>
          <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="vid/luxury.mp4" type="video/mp4" class="">
            </video>
          <div class="video-background-content container h-100">
            <div class="d-flex h-100 text-center">
              <div class="w-100 text-white">
                <h1 class="display-4 pt-5 pb-5 wow fadeInUpBig">В преддверии дня Святого Валентина 
                  Февральский СДМ - Это мощное женское оружие 🌪</h1>
                <p class="lead mb-0 wow fadeInUpBig">Как правило - женская энергия очень мягкая, плавучая и текучая. И слово «оружие» агрессивно звучит. Но я не могу назвать по-другому февральский СДМ. Потому что это пушка 💥</p>
                </p>
                <p class="lead mb-0 wow fadeInUpBig">Секс. Деньги. Мужчина 3.0 ( Путь к Королеве лежит через Раскрепощенность)
                  Новая программа 
                  5 эфиров в закрытом Инстаграмм 
                  5 аудио уроков в закрытом телеграмм </p>
              </div>
            </div>
          </>
        </div>
      </div>
    </div>
  </section>


  <!--Description continue section-->
  <section id="description-continue" class=" text-left bg-light pt-5">
    <div class="text-dark">
      <div class="container">
        <div class="row">
          <div class="col align-self-center">
            <h1></h1>
            <p><span>Я</span> проведу Вас глубоко в истоки страсти/ секса и любви. В истоки, где каждая из Вас познает свою женскую силу над мужчиной. И умением управлять и становиться для себя и него Музой 💙</p>
            <p>Зарегистрировавшись сейчас - после курса Вы получаете гайд ( мини книга) СДМ- секс деньги мужчина 
              И пару бонусов к 14 февраля 😍😍😍😍😍😍😍😍😍😍😍😍😍😍😍 
              Например:  
              • эфиры подарочные ( помимо 5 основных) от гостей: </p>
              <p class="">- <span><strong>Сая Оразгалиева</strong></span> о своей жизни, о том как она получает все желания, ее секреты и подарочная практика.</p>
              <p class="">- <span><strong>Марк Ифраимов</strong></span> - эфир о Сексуальности. О том, что путь к Королеве лежит через Шл*ху. И подарочная практика </p>
              <p class="">- <span><strong>Дана Есеева</strong></span> о том как создать семью мечты и стать для своего мужчины Музой. И подарочная практика.</p>
              <p class="">- <span><strong>Жания Джуринская</strong></span> о том как встретить свою любовь, в любом возрасте. И сохранять чистоту, искренность и доброту при любых обстоятельствах. О ценности себя и границах. И подарочная практика </p>
              <p class="">- <span><strong>Руслан ( визажист салона Нучи)</strong></span> - с макияжем на 14 к февраля </p>
              <p class="">- <span><strong>Стрип пластика ( танец)</strong></span> для своего мужчины на 14е февраля </p>
              <!-- - Сая Оразгалиева о своей жизни, о том как она получает все желания, ее секреты и подарочная практика.
              - Марк Ифраимов - эфир о Сексуальности. О том, что путь к Королеве лежит через Шл*ху. И подарочная практика 
              - Дана Есеева о том как создать семью мечты и стать для своего мужчины Музой. И подарочная практика.
              - Жания Джуринская- о том как встретить свою любовь, в любом возрасте. И сохранять чистоту, искренность и доброту при любых обстоятельствах. О ценности себя и границах. И подарочная практика 
              - Руслан ( визажист салона Нучи)- с макияжем на 14 к февраля 
              - Стрип пластика ( танец) для своего мужчины на 14е февраля 
               -->
              Программа:
              
              <p>1) Очищение 
                Денежной энергии 
                Обрыв связей с прошлым все что тянет вниз, включая бывшие отношения
                Сексуальной энергии</p>
              
              <p>2) Разблокировка сексуальности/сексуальной энергии 
                Разбор архетипов 
                Прокачка неуверенности в себе и телесных блоков </p>

                <p> 3) Образ мужчины / архетипы мужчины /прокачка / укрепление отношений и улучшение отношений / подарки от мужчин и деньги / Новый уровень тантрической любви/ как сделать из своего мужчины Короля </p>
              
              <p>4) Деньги, денежная энергия, устранение долгов, притягивание денег, и тд</p>
              
              <p>5) Вербальное/невербальное общение/ женские секреты и фишки/ состояние магнетизма</p>
          </div>
        </div>
        <!-- <div class="row">
          <div class="block1 col-11 col-md-11 align-self-md-end align-self-start wow fadeInUpBig mx-auto d-flex">
            <img src="img/1.jpg" alt="" class="pr-5">
            <p class="lead mb-2 my-auto">Я проведу Вас глубоко в истоки страсти/ секса и любви.
            В истоки, где каждая из Вас познает свою женскую силу над мужчиной.
             И умением управлять и становиться для себя и него Музой 💙  </p>
          </div>
        </div>
        <div class="row">
          <div class="col-11 col-md-11 align-self-start mx-auto wow fadeInUpBig my-5 d-flex mx-auto">
            <p class="lead mb-2 my-auto mr-5">Зарегистрировавшись сейчас - после курса Вы получаете гайд ( мини книга) СДМ- секс деньги мужчина 
              И пару бонусов к 14 февраля 😍😍😍😍😍😍😍😍😍😍😍😍😍😍😍 
              Например:  
              • эфиры подарочные ( помимо 5 основных) от гостей: 
              
              - Сая Оразгалиева о своей жизни, о том как она получает все желания, ее секреты и подарочная практика.
              - Марк Ифраимов - эфир о Сексуальности. О том, что путь к Королеве лежит через Шл*ху. И подарочная практика 
              - Дана Есеева о том как создать семью мечты и стать для своего мужчины Музой. И подарочная практика.
              - Жания Джуринская- о том как встретить свою любовь, в любом возрасте. И сохранять чистоту, искренность и доброту при любых обстоятельствах. О ценности себя и границах. И подарочная практика 
              - Руслан ( визажист салона Нучи)- с макияжем на 14 к февраля 
              - Стрип пластика ( танец) для своего мужчины на 14е февраля </p>
              <img src="img/2.jpg" alt="">
          </div>

        </div>
        <div class="row">
          <div class="col-11 col-md-11 align-self-start mx-auto wow fadeInUpBig">
            
            <h1 class="text pb-3 pt-5">Программа:</h1>
            <p class="lead mb-2">
              1) Очищение 
              Денежной энергии 
              Обрыв связей с прошлым все что тянет вниз, включая бывшие отношения
              Сексуальной энергии
              
              2) Разблокировка сексуальности/сексуальной энергии 
              Разбор архетипов 
              Прокачка неуверенности в себе и телесных блоков 
              
              3) Образ мужчины / архетипы мужчины /прокачка / укрепление отношений и улучшение отношений / подарки от мужчин и деньги / Новый уровень тантрической любви/ как сделать из своего мужчины Короля 
              
              4) Деньги, денежная энергия, устранение долгов, притягивание денег, и тд
              
              5) Вербальное/невербальное общение/ женские секреты и фишки/ состояние магнетизма</p>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <!--Timer section-->
  <section id="timer" class="text-white">
    <div class="black-overlay">
      <div class="container">
        <div class="row text-center pt-5">
          <div class="col-12 p-5 mt-5 wow fadeInUpBig">
            <h1 class="">УСПЕЙ <br>ПРИОБРЕСТИ МАРАФОН
            </h1>
          </div>
          <div class="col-12 wow fadeInUpBig"><p>ЦЕНА СО СКИДКОЙ <span>12.500тг</span><br>
            <span>ДЕЙСТВУЕТ ТОЛЬКО 15 МИНУТ!</span><br>
            ЦЕНА БЕЗ СКИДКИ <span>17.000тг</span><br>
            СТАРТ 20 ЯНВАРЯ <br>
            <span>ЦЕНА ПОСЛЕ СТАРТА 55.000тг</span></p></div>
        </div>
        <div class="col-12 align-self-center text-center wow fadeInUpBig">
          <div class="timer1"></div>
        </div>
        <div class="col-12 align-self-center text-center">
          <button type="button" class="btn btn-outline-tpink mt-3" data-toggle="modal" data-target="#buy-modal">Купить сейчас</button>

          <div class="modal fade col-10 col-md-12" id="buy-modal" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header mx-auto">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-dark">
                  <div class="form-group">
                    <img src="img/karta.jpg" alt="" class="karta">
                    <strong>
                      <p class="mt-5">УДОБНЫЙ СПОСОБ ОПЛАТЫ</p>
                    <p>ПРОИЗВЕДИТЕ ОПЛАТУ</p>
                    <p>НА РЕКВИЗИТЫ KASPI</p>
                    <p>5169 4971 3410 0092</p>
                    <p><span>KARINA MUKASHEVA</span></p>
                    <p>ПО НОМЕРУ <span>+7 702 166 6638</span></p>
						<!-- <p><strong>Обратите, пожалуйста, внимание!</strong><br>После проведения платежа <strong>ОБЯЗАТЕЛЬНО</strong> запомните либо запишите ваш ID платежа, который покажется по завершению транзакции.<br>В дальнейшем он будет использоваться для проверки вашей оплаты.</p>
                    <label class="clarify" for="exampleInputEmail1">Промокод</label>
                    <input type="text" class="form-control promo-code" id="" aria-describedby="" placeholder="Введите промокод">
                    <input type="hidden" class="codes" value="<?php foreach ($codes as $code) echo $code.' '; ?>">
                    <a href="https://ecommerce.pult24.kz/invoice?id=12089446729974178" class="btn btn-outline-tpink mt-3" target="_blank">Купить</a>

                    <div class="widget-body mt-5">
                       <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Button with data-target
                      </button> 
                      <p>Для проверки платежа нажмите на стрелочку ниже.</p>
                      <i class="arrow-down fas fa-angle-down fa-3x" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"></i>
                      
                      <div class="collapse" id="collapseExample">
						  Введите ваш идентификатор платежа.
                        <div class="card card-body">
                          В случае, если вы забыли\утеряли идентификатор, но указывали свой адрес электронной почты при оплате, проверьте его. Там должно быть письмо об оплате со всей необходимой информацией.
                          <label for="" class="mt-5 text-left">ID платежа</label>
							<form action="bill-check" method="post">
                          <input type="text" class="form-control" placeholder="" name="bill_id">
                          <button class="btn btn-outline-tpink mt-3">Получить доступ!</button>
							</form> -->
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="faq">
    <div class="container-fluid">
      <div class="row">
        <div class="col-10 wow fadeInUpBig"><h2 class="ml-5 display-4 mb-5 mt-5">ОТВЕТЫ НА ЧАСТО ЗАДАВАЕМЫЕ ВОПРOСЫ</h2></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 d-inline-flex mb-3">
            <div class="circle d-inline-flex wow fadeInUpBig"></div>
              <div class="col-6 wow fadeInUpBig">
                <h4>Когда у меня будут результаты?</h4>
                <p>Все индивидуально, все зависит от того на каком энергетическом уровне вы пришли и как качественно вы выполняли задания.</p>
              </div>
              <div class="circle d-inline-flex wow fadeInUpBig"></div>
              <div class="col-6 wow fadeInUpBig">
                <h4>Когда нельзя делать практики?</h4>
                <p>Если присутствуют псих. диагнозы, и приеме антидепрессантов.</p>
              </div>
          </div>
          <div class="col-12 d-inline-flex mb-3">
            <div class="circle d-inline-flex wow fadeInUpBig"></div>
              <div class="col-6 wow fadeInUpBig">
                <h4>Можно ли делать практики во время беременности и менструации?</h4>
                <p>Да, можно</p>
              </div>
              <div class="circle d-inline-flex wow fadeInUpBig"></div>
              <div class="col-6 wow fadeInUpBig">
                <h4>Для чего нужна атрибутика во время практик?</h4>
                <p>Свечи и цветы на очищение, вода и личные вещи на заряд</p>
              </div>
          </div>
          <div class="col-12 d-inline-flex mb-3">
            <div class="circle d-inline-flex wow fadeInUpBig"></div>
              <div class="col-6 wow fadeInUpBig">
                <h4>Чем мне помогут женские практики?</h4>
                <p>Прокачать женскую энергию, на которую притягиваются ваши истинные желания!</p>
              </div>
              <div class="circle d-inline-flex wow fadeInUpBig"></div>
              <div class="col-6 wow fadeInUpBig">
                <h4>Чем отличаются ваши курсы?</h4>
                <p>Качество каждого курса превышает ценовую политику во много раз</p>
              </div>
          </div>
          <div class="col-12 d-inline-flex mb-3">
            <div class="circle d-inline-flex wow fadeInUpBig"></div>
              <div class="col-6 wow fadeInUpBig">
                <h4>Доступ к записям только во время курса?</h4>
                <p>Нет, доступ к записям на 3 месяца но есть возможность продлить</p>
              </div>
              <div class="circle d-inline-flex wow fadeInUpBig"></div>
              <div class="col-6 wow fadeInUpBig">
                <h4>Возраст ограничения в практиках?</h4>
                <p>Наши курсы 16+</p>
              </div>
          </div>
          <div class="col-12 d-inline-flex mb-3">
            <div class="circle d-inline-flex wow fadeInUpBig"></div>
              <div class="col-6 wow fadeInUpBig">
                <h4>Есть ли ограничения в практиках?</h4>
                <p>Да. Запрещается делать практики в состоянии алкогольного и наркотического опьянения</p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <section id="reviews">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-5 wow fadeInUpBig">
          <h1 class="display-2">Отзывы наших клиенток</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5 col-10 mx-auto wow fadeInUpBig">
          <div id="slider" class="carousel slide carousel-fade mb-5" data-ride="carousel">
            <ol class="carousel-indicators">
              <li class="active" data-target="#slider" data-slide-to="0"></li>
              <li data-target="#slider" data-slide-to="1"></li>
              <li data-target="#slider" data-slide-to="2"></li>
              <li data-target="#slider" data-slide-to="3"></li>
              <li data-target="#slider" data-slide-to="4"></li>
              <li data-target="#slider" data-slide-to="5"></li>
              <li data-target="#slider" data-slide-to="6"></li>
              <li data-target="#slider" data-slide-to="7"></li>
              <li data-target="#slider" data-slide-to="8"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/reviews/1.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/reviews/2.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/reviews/3.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/reviews/4.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/reviews/5.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/reviews/6.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/reviews/7.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/reviews/8.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/reviews/9.jpg" alt="">
              </div>
            </div>
  
            <!-- CONTROLS -->
            <a href="#slider" class="carousel-control-prev" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
  
            <a href="#slider" class="carousel-control-next" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  


  <footer id="main-footer" class="py-3 bg-dark text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6 ml-auto">
          <p class="lead">
            Copyright &copy;
            <span id="year"></span>
          </p>
        </div>
        <div class="col-md-6 col-lg-6 text-center text-md-right">
          <a href="https://www.instagram.com/club_by_one.muse.story/" class="fb-ic ml-0" target="_blank">
            <i class="fab fa-instagram white-text mr-4"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/test.js"></script>
  <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  
  <!-- <script type="text/javascript" src="/js/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="/js/popper.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script> -->

  <!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" -->
    <!-- crossorigin="anonymous"></script> -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
  </script>

  <!--Scrollspy-->
  <script>
    $('body').scrollspy({ target: '#main-nav' });

    // Add smooth scrolling
    $('#main-nav a').on('click', function(e){
        if(this.hash !== ''){
            e.preventDefault();

            const hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top 
            }, 800, function(){
                window.location.hash = hash;
            });
        }
    });  
</script>
<script>
  $('body').scrollspy({ target: '#arrow1' });

  // Add smooth scrolling
  $('#arrow1 a').on('click', function(e){
      if(this.hash !== ''){
          e.preventDefault();

          const hash = this.hash;

          $('html, body').animate({
              scrollTop: $(hash).offset().top+40 
          }, 800, function(){
              window.location.hash = hash+40;
          });
      }
  });  
</script>
<script src="js/timer.js"></script>

</body>

</html>