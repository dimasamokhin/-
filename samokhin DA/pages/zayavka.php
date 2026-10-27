<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0">
    <title>Регистрация / Заявка - Праздник без границ</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <header class="site-header">
        <div class="container header-inner">
            <a href="../index.php" class="logo"> ПраздникБезГраниц</a>
            <nav class="main-nav">
                <a href="../index.php" class="nav-link">Главная</a>
                <a href="about.php" class="nav-link">Команда</a>
                <a href="catalog.php" class="nav-link">Услуги</a>
                <a href="sale.php" class="nav-link">Акции</a>
                <a href="zayavka.php" class="nav-link active">Оставить заявку</a>
                <a href="login.php" class="nav-link">Вход</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="section form-section">
            <div class="container form-container">
                <div class="form-header">
                    <h1 class="form-title">Хотите заказать проведение праздника?</h1>
                    <p class="form-title">Напишите нам своё пожелание заявку!</p>
                    <p class="form-note">Составьте заявку и мы свяжемся с вами</p>
                </div>

                <form class="main-form" action="#" method="POST">
                    <div class="form-row form-row--double">
                        <div class="form-group">
                            <input type="text" placeholder="Введите имя" required>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Введите фамилию" required>
                        </div>
                    </div>

                    <div class="form-row form-row--double">
                        <div class="form-group">
                            <input type="tel" placeholder="+7 (___) ___-__-__" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Почта" required>
                        </div>
                    </div>

                    <div class="form-group form-group--full">
                        <textarea id="request" rows="4" placeholder="Опишите ваш праздник" required></textarea>
                    </div>

                    <div class="form-group form-group--checkbox">
                        <label class="checkbox-label">
                            <input type="checkbox" required>
                            <span class="checkbox-text">Нажимая кнопку "Заказать" вы даёте согласие на обработку ваших персональных данных</span>
                        </label>
                    </div>

                    <div class="form-group form-group--checkbox">
                        <label class="checkbox-label">
                            <input type="checkbox">
                            <span class="checkbox-text">Я согласен получать рассылку</span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-form-submit">Заказать</button>
                </form>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container footer-kontact">
            <div class="footer-col">
                <h4>Контакты</h4>
                <p>Почта для связи:</p>
                <p>Svazi@gmail.com</p>
                <p>Почта для рекламных предложений:</p>
                <p>Pochta.reclama12@gmail.com</p>
                <p>Телефон поддержки:</p>
                <p>55-56-66</p>
            </div>
            <div class="footer-col">
                <h4>Навигация</h4>
                <a href="../index.html">Главная</a>
                <a href="about.html" class="nav-link">Команда</a>
                <a href="catalog.html" class="nav-link">Услуги</a>
                <a href="sale.html" class="nav-link">Акции</a>
                <a href="zayavka.html" class="nav-link">Оставить заявку</a>
                <a href="login.html" class="nav-link">Вход</a>
            </div>
            <div class="footer-col">
            </div>
        </div>
        <div class="footer-prava container">
            <p>© Все права защищены 2026</p>
        </div>
    </footer>
</body>
</html>