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
            <span class="section-tag" data-aos="fade-down">Privacy Policy</span>
            <h1 data-aos="fade-up">Политика конфиденциальности</h1>

            <div class="legal-content">
                <div class="policy-hero-card" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Политика конфиденциальности распространяется на персональные данные,
                        предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания услуг по карьерному консультированию, так и для других взаимодействий в электронном
                        формате на территории Италии и стран ЕС.
                    </p>
                </div>

                <div class="policy-notice" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в положения Политики. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц. Предоставляя свои данные, вы даете полное согласие на их обработку способами, предусмотренными настоящей Политикой.
                    </p>
                </div>

                <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения</h2>
                <div class="storage-info" data-aos="zoom-in" data-aos-delay="300">
                    <div class="storage-item">
                        <i data-lucide="history"></i>
                        <span>Срок хранения до <strong>75 лет</strong></span>
                    </div>
                    <div class="storage-item">
                        <i data-lucide="user-check"></i>
                        <span>Только с вашего согласия</span>
                    </div>
                </div>
                <p data-aos="fade-up">
                    Для предотвращения утечки данных мы используем полный комплекс мер информационной безопасности. Инновационная технология защиты данных позволяет нам минимизировать риски. Уничтожение или блокирование данных осуществляется по запросу клиента или при достижении целей сбора.
                </p>

                <div class="data-collection-grid">
                    <div class="data-box" data-aos="fade-right" data-aos-delay="400">
                        <h3><i data-lucide="cpu"></i> Техническая информация</h3>
                        <ul class="legal-list">
                            <li>IP-адрес и точное время доступа</li>
                            <li>Источники перехода на <strong><?= $fullDomain ?></strong></li>
                            <li>Данные браузера и просмотры контентных блоков</li>
                        </ul>
                    </div>
                    <div class="data-box" data-aos="fade-left" data-aos-delay="500">
                        <h3><i data-lucide="contact-2"></i> Персонализация</h3>
                        <ul class="legal-list">
                            <li>Имя пользователя и предпочтения</li>
                            <li>E-mail и номер телефона (+39)</li>
                            <li>Данные о контрактах и выбранных AI-инструментах</li>
                        </ul>
                    </div>
                </div>

                <h2 data-aos="fade-up">Цели обработки персональных данных</h2>
                <ul class="legal-list" data-aos="fade-up">
                    <li>Предоставление доступа к инновационной платформе обучения в Европе.</li>
                    <li>Учет пожеланий при разработке новых технологических решений.</li>
                    <li>Информирование об акциях и эксклюзивных материалах блога.</li>
                    <li>Обеспечение экспертной обратной связи на всех этапах.</li>
                </ul>

                <h2 data-aos="fade-up">Использование Cookies</h2>
                <p data-aos="fade-up">
                    Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Италия), чтобы сделать использование <strong><?= $fullDomain ?></strong> удобнее. Вы можете в любой момент изменить настройки в своем браузере.
                </p>

                <div class="rights-block" data-aos="zoom-in" data-aos-delay="600">
                    <h2>Ваши права</h2>
                    <p>
                        Если вы хотите отредактировать свои данные, получить доступ к ним или прекратить их обработку, свяжитесь с командой <strong><?= $domainTitle ?></strong>:
                    </p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="contact-btn">
                        <i data-lucide="send"></i>
                        support@<?= $fullDomain ?>
                    </a>
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