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
            <span class="section-badge">Legal Documents</span>
            <h1>Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="pages__lead">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы сделать ваш путь в мир ИИ максимально плавным, 
                    обеспечить корректную работу платформы и анализировать 
                    <strong>решения, которые меняют правила игры</strong>, мы используем файлы cookie.
                </p>

                <div class="legal-block">
                    <h2>Что такое файлы cookie?</h2>
                    <p>
                        Файл cookie — это небольшой фрагмент данных, который наш сайт сохраняет на вашем устройстве. 
                        Это позволяет платформе <strong><?= $domainTitle ?></strong> "узнавать" вас, помнить ваши предпочтения 
                        и настройки региона (Франция и страны ЕС) для обеспечения <strong>быстрого и лёгкого старта</strong> при каждом посещении.
                    </p>
                </div>

                <div class="legal-block">
                    <h2>Какие типы файлов cookie мы используем?</h2>
                    <p>
                        Для поддержания <strong>передовой цифровой инфраструктуры</strong> сайта <?= $fullDomain ?> мы используем:
                    </p>
                    <ul class="practice-list">
                        <li>
                            <strong>Строго необходимые:</strong> Обеспечивают безопасность и базовую навигацию. Без них работа с AI-инструментами на сайте невозможна.
                        </li>
                        <li>
                            <strong>Аналитические:</strong> Помогают нам понять, какие <strong>практики применения ИИ</strong> наиболее востребованы, чтобы улучшать контент.
                        </li>
                        <li>
                            <strong>Функциональные:</strong> Позволяют персонализировать ваш опыт, сохраняя настройки языка и выбранные сценарии в разделе «Практика».
                        </li>
                        <li>
                            <strong>Маркетинговые:</strong> Помогают доставлять информацию о новых программах и инструментах для <strong>пассивного дохода</strong>, которые интересны именно вам.
                        </li>
                    </ul>
                </div>

                <div class="legal-block">
                    <h2>Зачем это нужно?</h2>
                    <ul class="practice-list">
                        <li>Обеспечение стабильной работы интерактивных SVG-элементов и анимаций.</li>
                        <li>Анализ пользовательского поведения для оптимизации обучающих траекторий.</li>
                        <li><strong>Персонализация контента:</strong> Платформа уже доступна в Европе, и cookie помогают нам адаптироваться под локальные запросы.</li>
                        <li>Предоставление доступа к закрытым разделам сообщества.</li>
                    </ul>
                </div>

                <div class="legal-block">
                    <h2>Управление вашим выбором</h2>
                    <p>
                        Вы имеете полный контроль. Настройки браузера позволяют блокировать cookie, однако это может ограничить доступ к некоторым 
                        <strong>инновационным технологиям</strong> нашего сайта. Изменить свой выбор можно в любой момент, очистив кэш браузера.
                    </p>
                </div>

                <div class="pages__footer-note">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики использования cookie на платформе <strong><?= $domainTitle ?></strong>, 
                        наша <strong>экспертная поддержка</strong> всегда готова помочь:
                    </p>
                    <ul class="contact-data" style="list-style: none; padding-left: 0; margin-top: 20px;">
                        <li style="margin-bottom: 10px;"><strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>" style="color: var(--primary);">support@<?= $fullDomain ?></a></li>
                        <li style="margin-bottom: 10px;"><strong>Телефон:</strong> <a href="tel:+33189480612" style="color: var(--primary);">+33 1 89 48 06 12</a></li>
                        <li style="margin-bottom: 10px;"><strong>Адрес:</strong> 24 Rue du Quatre Septembre, 75002 Paris, France</li>
                    </ul>
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