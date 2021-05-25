<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Pinsk Meat-Packing Plant</title>
    <meta name="description" content="Pinsk Meat-Packing Plant">
    <meta name="keywords" content="">
    <link rel="icon" href="../favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
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
                    <img src="../images/logo/pikant.png" alt="" title="">
                </div>
                <div class="w60 company-info">
                    <h1>Pinsk Meat-Packing Plant</h1>
                    <a href="http://www.pikant.by/en" class="company-site" target="_blank">www.pikant.by</a>
                    <ul class="company-contacts">
                        <li>
                            <img src="../images/icons/mail.svg" alt="">
                            <a href="mailto:ved@pikant.by">ved@pikant.by</a>
                        </li>
                        <li>
                            <img src="../images/icons/mobile-phone.svg" alt="">
                            <a href="tel:+375165348572">+375 (16) 534-85-72</a>
                        </li>
                        <li>
                            <img src="../images/icons/placeholder.svg" alt="">
                           <span>Belarus, 225710, Pinsk, 1 Industrialnaya str.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a class="place">Hall 2, Stand № F2-2</a>
    </HEADER>
    <MAIN>
        <div class="section">
            <div class="container">
                <h2 class="section-title">
                    About the company
                </h2>
                <div class="inner _center">
                    <div class="video-wrap w50">
                        <div class="video">
                            <iframe width="420"
                                    height="315"
                                    src="https://www.youtube.com/embed/V5qRcpU9g_E?autoplay=0" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="info-wrap w50">
                        <p>
                            Production of meat, meat products, sausages. One of the largest meat processing plants in Belarus for the production of beef meat. Beef meat is exported to Azerbaijan, China, Kazakhstan, Russia, Uzbekistan.
                        </p>
                        <p>Key points:
                            <ul>
                                <li>more than 85 years on the market</li>
                                <li>the product range includes over 300 products</li>
                                <li>the production capacity of the enterprise allows to process over 1 800 tons of meat per day</li>
                                <li>68% of products are exported.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <h2 class="section-title">
                    Primary contacts
                </h2>
                <div class="member-list">
                    <div class="inner _center">
                        <div class="member _big w40">
                            <div class="member-photo"><img src="../images/company/company8(pinsk)/person1.jpg"></div>
                            <div class="member-name"><span>Tatsiana Arashkevich</span></div>
                            <div class="member-contacts">
                                <ul>
                                    <li id="job"><a href="#">Head of Foreign Trade Departament</a></li>
                                    <li id="c_email"><a href="mailto:ved@pikant.by">ved@pikant.by</a></li>
                                    <li id="c_phone"><a href="tel:+375296388352">+375 (29) 638-83-52</a></li>
                                    <li id="c_wapp"><a href="https://wa.me/375296388352" target="_blank">WhatsApp</a></li>
                                    <li id="c_wechat"><a href="weixin://dl/chat?375296388352" target="_blank">WeChat</a></li>
                                    <li id="c_viber"><a href="viber://chat?number=%2B375296388352" target="_blank">Viber</a></li>
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
                    Also present at the stand
                </h2>
                <div class="stand-wrap">
                    <div class="stand-img">
                        <img src="../images/render/pinsk.jpg" alt="#">
                    </div>
                    <div class="member-list">
                        <div class="member">
                            <div class="photo"><img src="../images/company/company8(pinsk)/person2.jpg" alt=""></div>
                            <div class="info">
                                <div class="name"><h4>Eduard Shybun</h4></div>
                                <div class="position"><p>General Director</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </MAIN>
    <FOOTER>
        <p>Still have a question?</p>
        <a href="#" class="btn">Contact us</a>
        <div class="form-wrap">
            <form class="inner en" id="sf">
                <div class="form-group">
                    <input type="text" name="t_name" id="tname" placeholder="Name" required />
                    <input type="text" name="t_phone" id="t_phone" placeholder="Mobile" required />
                    <textarea name="t_message" id="t_message" cols="30" rows="10" placeholder="Type your message" required></textarea>
                    <button type="submit">Send</button>
                </div>
            </form>
            <p id="result"></p>
        </div>
    </FOOTER>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/mp.min.js"></script>
    <script src="../js/app.js?v2.0.0"></script>
</body>
</html><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>