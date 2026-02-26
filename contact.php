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
    <main class="pages">
    <section class="contact-page">
        <div class="container">
            <span class="section-badge">Expert Support</span>
            <h1>Контактная информация</h1>

            <p class="pages__lead">
                Мы всегда на связи, чтобы помочь вам внедрить <strong>AI-инструменты для реальных задач</strong>. 
                Свяжитесь с командой <strong><?= $domainTitle ?></strong> для получения экспертной поддержки. 
                Наш офис в Париже координирует проекты по всей Европе, предоставляя решения, которые меняют правила игры.
            </p>

            <div class="contact-cards">
                <div class="contact-card">
                    <div class="contact-card__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </div>
                    <h3>Пишите нам</h3>
                    <p>Для вопросов по обучению и партнерству:</p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="contact-card__link">support@<?= $fullDomain ?></a>
                </div>

                <div class="contact-card">
                    <div class="contact-card__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    </div>
                    <h3>Звоните</h3>
                    <p>Экспертная поддержка на всех этапах (Пн-Пт, 09:00 - 18:00 CET):</p>
                    <a href="tel:+33189480612" class="contact-card__link">+33 1 89 48 06 12</a>
                </div>

                <div class="contact-card">
                    <div class="contact-card__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <h3>Наш адрес</h3>
                    <p>Центральный офис <strong><?= $domainTitle ?></strong> во Франции:</p>
                    <address class="contact-card__address">
                        24 Rue du Quatre Septembre,<br>
                        75002 Paris,<br>
                        France
                    </address>
                </div>
            </div>

            <div class="pages__footer-note">
                <p>
                    <strong>Доступ к платформе открыт:</strong> Предложение активно только в странах ЕС. 
                    Вы также можете <a href="./#contact">запросить доступ</a> через экспресс-форму на главной.
                </p>
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