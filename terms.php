<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Практический ИИ для каждого</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='45' stroke='%236366f1' stroke-width='5' fill='none'/><path d='M30 50 Q50 20 70 50 T30 50' fill='%23a855f7' opacity='0.8'/></svg>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Syne:wght@700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#home" class="logo">
                <svg class="logo__icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" rx="8" fill="url(#logo-grad)"/>
                    <path d="M10 16L14 20L22 12" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                        <linearGradient id="logo-grad" x1="0" y1="0" x2="32" y2="32" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#6366f1"/>
                            <stop offset="1" stop-color="#a855f7"/>
                        </linearGradient>
                    </defs>
                </svg>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>

            <nav class="nav" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="./#home" class="nav__link">Главная</a></li>
                    <li><a href="./#features" class="nav__link">Возможности</a></li>
                    <li><a href="./#cases" class="nav__link">Практика</a></li>
                    <li><a href="./#learning" class="nav__link">Обучение</a></li>
                    <li><a href="./#faq" class="nav__link">Вопросы</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--outline">Связаться</a>
                <button class="burger" id="burger-btn" aria-label="Menu">
                    <span></span><span></span>
                </button>
            </div>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag" data-aos="fade-down">Terms & Conditions</span>
            <h1 data-aos="fade-up">Условия использования</h1>

            <div class="legal-content">
                <div class="policy-hero-card terms-accent" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                        представляют собой юридически обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>.
                        Используя наш сайт, вы подтверждаете свое полное согласие с данными Условиями в рамках законодательства Италии и ЕС.
                    </p>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>1. Предмет Соглашения</h2>
                    <p>
                        Компания предоставляет Пользователю доступ к использованию сайта
                        <strong><?= $fullDomain ?></strong> и его функционала, включая: доступ к
                        инновационным технологиям обучения, статьям, AI-инструментам для реальных задач и экспертной поддержке. 
                        Настоящее Соглашение регулирует все аспекты взаимодействия Пользователя с цифровой инфраструктурой <strong><?= $domainTitle ?></strong>.
                    </p>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>2. Обязанности и права Пользователя</h2>
                    <p>При использовании платформы <strong><?= $domainTitle ?></strong> запрещается:</p>
                    <ul class="legal-list">
                        <li>Публиковать или передавать любую незаконную, вредоносную или клеветническую информацию.</li>
                        <li>Предпринимать действия, которые могут нарушить работу передовой цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.</li>
                        <li>Использовать автоматизированные скрипты (боты) для сбора информации без письменного разрешения.</li>
                        <li>Предоставлять недостоверную информацию при запросе доступа к платформе.</li>
                    </ul>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>3. Интеллектуальная собственность</h2>
                    <div class="property-block">
                        <i data-lucide="copyright"></i>
                        <p>
                            Весь контент на <strong><?= $fullDomain ?></strong> (тексты, программный код, графика, логотипы) является собственностью Компании. 
                            Вам предоставляется ограниченная лицензия для личного использования в целях развития и построения карьеры. Любое копирование материалов запрещено.
                        </p>
                    </div>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>4. Ограничение ответственности</h2>
                    <div class="warning-block">
                        <p>
                            Услуги предоставляются по принципу <strong>«как есть» (as is)</strong>. Компания не несет ответственности за любые убытки, 
                            возникшие в результате использования или невозможности использования методологий платформы <strong><?= $domainTitle ?></strong>. 
                            Предложение активно только в странах ЕС.
                        </p>
                    </div>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>5. Изменения и разрешение споров</h2>
                    <p>
                        Мы оставляем за собой право изменять Условия в любое время. Все споры будут разрешаться путем переговоров. 
                        В случае недостижения согласия, спор подлежит рассмотрению по месту регистрации штаб-квартиры <strong><?= $domainTitle ?></strong> в Риме.
                    </p>
                </div>

                <div class="contact-footer-policy" data-aos="zoom-in">
                    <h2>Контактная информация</h2>
                    <p>Если у вас возникли вопросы, связанные с настоящими Условиями, пожалуйста, свяжитесь с нами:</p>
                    <div class="policy-contact-box">
                        <i data-lucide="mail"></i>
                        <a href="mailto:support@<?= $fullDomain ?>" class="policy-mail">support@<?= $fullDomain ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#home" class="logo footer__logo">
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__desc">
                    Технологии нового поколения, которые меняют правила игры. Делаем ИИ понятным инструментом для каждого.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#home">Главная</a></li>
                    <li><a href="./#features">Возможности</a></li>
                    <li><a href="./#cases">Практика</a></li>
                    <li><a href="./#learning">Обучение</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <div class="footer__contact-item">
                    <span>Телефон:</span>
                    <a href="tel:+33189480612">+33 1 89 48 06 12</a>
                </div>
                <div class="footer__contact-item">
                    <span>Email:</span>
                    <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                </div>
                <div class="footer__contact-item">
                    <span>Адрес:</span>
                    <address>24 Rue du Quatre Septembre, 75002 Paris, France</address>
                </div>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026 <?= $domainTitle ?>. Платформа уже доступна в Европе.</p>
        </div>
    </footer>
    <div class="mobile-overlay" id="mobile-overlay">
        <div class="mobile-overlay__content">
            <nav class="mobile-nav">
                <ul>
                    <li><a href="./#home" class="mobile-link">Главная</a></li>
                    <li><a href="./#features" class="mobile-link">Возможности</a></li>
                    <li><a href="./#cases" class="mobile-link">Практика</a></li>
                    <li><a href="./#learning" class="mobile-link">Обучение</a></li>
                    <li><a href="./#contact" class="mobile-link">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__inner">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button class="btn btn--primary btn--sm" id="cookie-accept">Принять</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>