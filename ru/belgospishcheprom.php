<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Белорусский государственный концерн пищевой промышленности "Белгоспищепром"</title>
    <meta name="description" content="Белорусский государственный концерн пищевой промышленности «Белгоспищепром»">
    <meta name="keywords" content="">
    <link rel="icon" href="../favicon.png" type="../image/x-icon">
    <link rel="shortcut icon" href="../favicon.png" type="../image/x-icon">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/mp.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="companie">
    <HEADER>
        <div class="backgorund-image">
            <img src="../images/banner.jpg" alt="">
        </div>
        <div class="container">
            <div class="inner _center h_between">
                <div class="w30 complany-logo">
                    <img src="../images/logo/belgospischeprom.png" alt="" title="">
                </div>
                <div class="w60 company-info">
                    <h1>Белорусский государственный концерн пищевой промышленности "Белгоспищепром"</h1>
                    <a href="http://www.bgp.by/en/" class="company-site">www.bgp.by</a>
                    <ul class="company-contacts">
                        <li>
                            <img src="../images/icons/mail.svg" alt="concern@bgp.by">
                            <a href="mailto:concern@bgp.by">concern@bgp.by</a>
                        </li>
                        <li>
                            <img src="../images/icons/mobile-phone.svg" alt="">
                            <a href="tel:+375447129204">+375 (44) 712-92-04</a>
                        </li>
                        <li>
                            <img src="../images/icons/placeholder.svg" alt="">
                           <span>Беларусь, 220006, г.Минск, ул. Аранская ул. 6, </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a class="place">Павильон 2, стенд № F2-20</a>
    </HEADER>
    <MAIN>
        <div class="section">
            <div class="container">
                <h2 class="section-title">
                    О компании
                </h2>
                <div class="inner _center">
                    <div class="info-wrap w100">
                        <p>Белорусский государственный концерн пищевой промышленности «БЕЛГОСПИЩЕПРОМ» - ведущий производитель продуктов питания. Концерн объединяет в себя 46 предприятий, в том числе предприятия сахарной, кондитерской, масложировой, ликероводочной, пивоваренной, табачной и других отраслей пищевой промышленности.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <h2 class="section-title">
                    Контактные лица
                </h2>
                <div class="member-list">
                    <div class="inner _center">
                        <div class="member _big w40">
                            <div class="member-photo"><img src="../images/company/company2(belgospisheprom)/person1.jpg"></div>
                            <div class="member-name"><span>Ольга Климакова</span></div>
                            <div class="member-contacts">
                                <ul>
                                    <li id="job"><a href="#">Главный специалист управления ВЭД</a></li>
                                    <li id="c_email"><a href="mailto:klimakova@bgp.by">klimakova@bgp.by</a></li>
                                    <li id="c_phone"><a href="tel:+375297004289">+375 (29) 700-42-89</a></li>
                                    <li id="c_wapp"><a href="https://wa.me/375297004289" target="_blank">WhatsApp</a></li>
                                    <li id="c_wechat"><a href="weixin://dl/chat?375297004289" target="_blank">WeChat</a></li>
                                    <li id="c_viber"><a href="viber://chat?number=%2B375297004289" target="_blank">Viber</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <h2 class="section-title">
                    Также на стенде присутствуют
                </h2>
                <div class="stand-wrap">
                    <div class="stand-img">
                        <img src="../images/render/belgospisheprom.png" alt="#">
                    </div>
                    <div class="member-list">
                        <div class="member">
                            <div class="photo"><img src="../images/company/company2(belgospisheprom)/person2.jpg" alt=""></div>
                            <div class="info">
                                <div class="name"><h4>Александр Яковчиц</h4></div>
                                <div class="position"><p>Заместитель председателя концерна</p></div>
                            </div>
                        </div>
                        <div class="member">
                            <div class="photo"><img src="../images/company/company2(belgospisheprom)/person3.JPG" alt=""></div>
                            <div class="info">
                                <div class="name"><h4>Игорь Груцо</h4></div>
                                <div class="position"><p>Начальник управления ВЭД</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </MAIN>
    <FOOTER>
        <p>Не удалось связаться?</p>
        <a href="#" class="btn">Напишите нам</a>
        <div class="form-wrap">
            <form class="inner" id="sf" class="ru">
                <div class="form-group">
                    <input type="text" name="t_name" id="tname" placeholder="Имя" required />
                    <input type="text" name="t_phone" id="t_phone" placeholder="Телефон" required />
                    <textarea name="t_message" id="t_message" cols="30" rows="10" placeholder="Введите свое сообщение" required></textarea>
                    <button type="submit">Отправить</button>
                </div>
            </form>
            <p id="result"></p>
        </div>
    </FOOTER>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/mp.min.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>