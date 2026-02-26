/**
 * Twenty-Four-Feb-Six: Core Engine
 * Технологии: Vanilla JS + SVG Interaction
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. ГЛОБАЛЬНЫЙ СКРОЛЛ И ХЕДЕР ---
    const header = document.querySelector('.header');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
        // Запуск анимации линии пути (если есть)
        updatePathDrawing();
    });

    // --- 2. МОБИЛЬНОЕ МЕНЮ ---
    const burger = document.getElementById('burger-btn');
    const overlay = document.getElementById('mobile-overlay');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    const toggleMenu = () => {
        burger.classList.toggle('active');
        overlay.classList.toggle('active');
        document.body.style.overflow = overlay.classList.contains('active') ? 'hidden' : '';
    };

    if (burger) {
        burger.addEventListener('click', toggleMenu);
        mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));
    }

    // --- 3. HERO: ИНТЕРАКТИВНОЕ ЯДРО (SVG MORPHING) ---
    const coreLayers = document.getElementById('core-layers');
    const mouse = { x: 0, y: 0 };
    let time = 0;

    if (coreLayers) {
        // Создаем центральное "живое" ядро
        const blob = document.createElementNS("http://www.w3.org/2000/svg", "path");
        blob.setAttribute("fill", "url(#core-grad)");
        blob.setAttribute("filter", "url(#core-glow)");
        coreLayers.appendChild(blob);

        // Генерация органического пути
        function createBlobPath(t) {
            const points = [];
            const numPoints = 8;
            const radius = 60;
            for (let i = 0; i < numPoints; i++) {
                const angle = (i / numPoints) * Math.PI * 2;
                const shift = Math.sin(t + i) * 12; // Колебания
                const r = radius + shift;
                const x = 200 + Math.cos(angle) * r + (mouse.x * 30);
                const y = 200 + Math.sin(angle) * r + (mouse.y * 30);
                points.push(`${i === 0 ? 'M' : 'L'} ${x} ${y}`);
            }
            return points.join(' ') + ' Z';
        }

        function animateCore() {
            time += 0.04;
            blob.setAttribute("d", createBlobPath(time));
            requestAnimationFrame(animateCore);
        }

        window.addEventListener('mousemove', (e) => {
            mouse.x = (e.clientX / window.innerWidth) - 0.5;
            mouse.y = (e.clientY / window.innerHeight) - 0.5;
        });

        animateCore();
    }

    // --- 4. SCROLL REVEAL (КАСКАДНОЕ ПОЯВЛЕНИЕ) ---
    const revealOptions = { threshold: 0.15 };
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, revealOptions);

    // Применяем к карточкам и секциям
    document.querySelectorAll('.feature-card, .method-step, .bento-item, .section-head').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.8s cubic-bezier(0.2, 1, 0.3, 1)';
        revealObserver.observe(el);
    });

    // CSS Helper для анимации
    const style = document.createElement('style');
    style.innerHTML = '.is-visible { opacity: 1 !important; transform: translateY(0) !important; }';
    document.head.appendChild(style);

    // --- 5. АНИМАЦИЯ СЧЕТЧИКОВ ---
    const stats = document.querySelectorAll('.stat-num');
    const countObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.getAttribute('data-target'));
                let current = 0;
                const increment = target / 50;
                const updateCount = () => {
                    if (current < target) {
                        current += increment;
                        entry.target.innerText = Math.ceil(current) + '+';
                        setTimeout(updateCount, 30);
                    } else {
                        entry.target.innerText = target + '+';
                    }
                };
                updateCount();
                countObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    stats.forEach(s => countObserver.observe(s));

    // --- 6. PATH DRAWING (ЛИНИЯ В ОБУЧЕНИИ) ---
    const pathDraw = document.getElementById('path-draw');
    function updatePathDrawing() {
        if (!pathDraw) return;
        const rect = pathDraw.getBoundingClientRect();
        const viewHeight = window.innerHeight;
        
        if (rect.top < viewHeight && rect.bottom > 0) {
            const length = pathDraw.getTotalLength();
            pathDraw.style.strokeDasharray = length;
            const progress = (viewHeight - rect.top) / (viewHeight + rect.height);
            pathDraw.style.strokeDashoffset = length * (1 - Math.min(Math.max(progress, 0), 1));
        }
    }

    // --- 7. FAQ ACCORDION ---
    document.querySelectorAll('.faq__question').forEach(q => {
        q.addEventListener('click', () => {
            const item = q.parentElement;
            const isActive = item.classList.contains('active');
            document.querySelectorAll('.faq__item').forEach(el => el.classList.remove('active'));
            if (!isActive) item.classList.add('active');
        });
    });

    // --- 8. КОНТАКТНАЯ ФОРМА И КАПЧА ---
    const form = document.getElementById('ai-form');
    if (form) {
        const phoneInput = document.getElementById('phone-input');
        const captchaLabel = document.getElementById('captcha-label');
        const captchaInput = document.getElementById('captcha-input');
        const formMessage = document.getElementById('form-message');

        // Генерация капчи
        const n1 = Math.floor(Math.random() * 10) + 1;
        const n2 = Math.floor(Math.random() * 5) + 1;
        const sum = n1 + n2;
        captchaLabel.innerText = `Подтвердите, что вы не робот: ${n1} + ${n2} = ?`;

        // Только цифры для телефона
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^\d+]/g, '');
        });

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            formMessage.style.display = 'none';

            if (parseInt(captchaInput.value) !== sum) {
                formMessage.textContent = 'Неверный ответ на защитный вопрос.';
                formMessage.className = 'form__message error';
                return;
            }

            const btn = form.querySelector('.form__submit');
            btn.disabled = true;
            btn.innerText = 'Отправка данных...';

            // Имитация AJAX
            setTimeout(() => {
                formMessage.textContent = 'Запрос успешно отправлен! Платформа уже доступна для вас.';
                formMessage.className = 'form__message success';
                form.reset();
                btn.disabled = false;
                btn.innerText = 'Начать сейчас';
            }, 1500);
        });
    }

    // --- 9. COOKIE POLICY ---
    const cookiePopup = document.getElementById('cookie-popup');
    if (cookiePopup && !localStorage.getItem('cookies_accepted_v1')) {
        setTimeout(() => cookiePopup.classList.add('active'), 2500);
        document.getElementById('cookie-accept').addEventListener('click', () => {
            localStorage.setItem('cookies_accepted_v1', 'true');
            cookiePopup.classList.remove('active');
        });
    }

    // --- 10. SMOOTH SCROLL ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            e.preventDefault();
            const target = document.querySelector(targetId);
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
            }
        });
    });
});
// --- TABS LOGIC ---
document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const targetId = btn.getAttribute('data-target');
        
        // Переключаем кнопки
        document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        
        // Переключаем контент
        document.querySelectorAll('.tab-pane').forEach(pane => {
            pane.classList.remove('active');
        });
        document.getElementById(targetId).classList.add('active');
    });
});