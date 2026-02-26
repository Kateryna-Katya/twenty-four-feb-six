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
            <span class="section-badge">Risk Awareness</span>
            <div class="legal-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 40px;">
                <div class="warning-icon" style="color: var(--accent); flex-shrink: 0;">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                </div>
                <h1>Отказ от ответственности</h1>
            </div>

            <div class="legal-content">
                <div class="legal-block" style="margin-bottom: 30px;">
                    <p class="pages__lead">
                        <strong>Общая информация:</strong> Все материалы, методики и <strong>AI-инструменты для реальных задач</strong>, 
                        представленные на платформе <strong><?= $domainTitle ?></strong>, носят исключительно информационно-образовательный характер. 
                        Они не являются профессиональными финансовыми, юридическими или инвестиционными рекомендациями.
                    </p>
                </div>

                <div class="legal-block" style="margin-bottom: 30px; padding: 25px; background: var(--glass); border-radius: 16px; border: 1px solid var(--glass-border);">
                    <p>
                        <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> стремится предоставлять 
                        <strong>технологии нового поколения</strong>, доказавшие свою эффективность. Однако мы не даем гарантий 
                        относительно того, что использование данных практик принесет вам конкретный результат, карьерный рост или 
                        <strong>пассивный доход</strong>. Индивидуальные успехи зависят от вашего опыта, усердия и рыночной ситуации в Европе.
                    </p>
                </div>

                <div class="legal-block" style="margin-bottom: 30px;">
                    <p>
                        <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong> не несет 
                        ответственности за любые решения или действия, предпринятые вами на основе контента платформы. 
                        <strong>Решения, которые меняют правила игры</strong>, требуют ответственного подхода. Вся ответственность 
                        за внедрение ИИ-методологий в ваш бизнес или быт лежит исключительно на вас как на пользователе.
                    </p>
                </div>

                <div class="legal-block risk-warning" style="margin-bottom: 30px; padding: 25px; border-left: 4px solid var(--primary); background: rgba(99, 102, 241, 0.05); border-radius: 0 16px 16px 0;">
                    <p>
                        <strong>Предупреждение о рисках:</strong> Любая <strong>стратегия роста на базе инноваций</strong> сопряжена 
                        с определенными рисками, включая технические изменения в работе сторонних сервисов ИИ. Предложение активно 
                        только в странах ЕС. Перед принятием важных стратегических решений мы рекомендуем провести собственное исследование.
                    </p>
                </div>

                <div class="legal-block agreement" style="margin-top: 50px; border-top: 1px solid var(--glass-border); padding-top: 30px; color: var(--text-muted); font-size: 0.9rem;">
                    <p>
                        <strong>Подтверждение пользователя:</strong> Продолжая использовать <strong><?= $domainTitle ?></strong>, 
                        вы подтверждаете, что полностью осознаете и принимаете условия данного отказа от ответственности. 
                        Мы работаем, чтобы сделать ваш путь к ИИ безопасным и понятным.
                    </p>
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