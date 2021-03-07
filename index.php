<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- Datepicker style -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>World Bank</title>
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <header class="header">
                <div class="container">
                    <div class="header__inner">
                        <a href="#" class="header__logo">
                            <img src="img/logo.png" alt="logo">
                        </a>
                        <div class="header__phone">
                            <a href="tel:88001005005">8-800-100-5005</a>
                            <a href="tel:+73452522000">+7 (3452) 522-000</a>
                        </div>
                    </div>
                </div>
            </header>
            <nav class="nav">
                <div class="container">
                    <div class="nav__inner">
                        <ul class="nav__list">
                            <li><a class="nav__list-item" href="#">Кредитные карты</a></li>
                            <li><a class="nav__list-item _active" href="#">Вклады</a></li>
                            <li><a class="nav__list-item" href="#">Дебетовая карта</a></li>
                            <li><a class="nav__list-item" href="#">Страхование</a></li>
                            <li><a class="nav__list-item" href="#">Друзья</a></li>
                            <li><a class="nav__list-item" href="#">Интернет-банк</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="main">
                <section class="calculate">
                    <div class="container">
                        <div class="calculate__bread">
                            <a href="#">Главная</a>
                            <span>-</span>
                            <a href="#">Вклады</a>
                            <span>-</span>
                            <span class="_active" href="#">Калькулятор</span>
                        </div>
                        <div class="calculate__inner">
                            <h2 class="calculate__title">Калькулятор  </h2>
                            <form class="calculate__form" action="calc.php" method="POST">
                                <label>Дата оформления вклада <input type="text" id="datepicker" name="date" placeholder="дд.мм.гг"></label>
                                <label>Сумма вклада <input class="cl" type="text" name="sum"> 
                                    <input type="range" min="1000" max="3000000" data-rangeslider="" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"> 
                                </label>
                                <label>Срок вклада
                                    <select name="years">
                                        <option value="1">1 год</option>
                                        <option value="2">2 года</option>
                                        <option value="3">3 года</option>
                                        <option value="4">4 года</option>
                                        <option value="5">5 лет</option>
                                    </select>
                                </label>
                                <label>Пополнение вклада
                                    <span class="calculate__radio">
                                        <input type="radio" name="radio" id="1" checked><label for="1">Нет</label>
                                        <input type="radio" name="radio" id="2"><label for="2">Да</label>
                                    </span>
                                </label>
                                <label>Сумма пополнения вклада <input type="text" name="sum1">
                                    <input type="range" min="1000" max="3000000" step="1000" value="10000" data-rangeslider style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"> 
                                </label>
                                <button class="calculate__btn" type="submit">Рассчитать</button>
                                <span class="calculate__sum">Результат: <span></span></span>
                            </form>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <ul class="footer__list">
                        <li><a class="footer__list-item" href="#">Кредитные карты</a></li>
                        <li><a class="footer__list-item" href="#">Вклады</a></li>
                        <li><a class="footer__list-item" href="#">Дебетовая карта</a></li>
                        <li><a class="footer__list-item" href="#">Страхование</a></li>
                        <li><a class="footer__list-item" href="#">Друзья</a></li>
                        <li><a class="footer__list-item" href="#">Интернет-банк</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Datepicker script -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
          $( "#datepicker" ).datepicker({
            dateFormat: 'dd.mm.yy',
          });
        } );
    </script>
    <!-- /Datepicker script -->
    <script src="js/rangeslider.js"></script>
    <script src="js/main.js"></script>
</body>
</html>