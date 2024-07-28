<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrar</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <link rel="stylesheet" href="assets/css/login.css" type="text/css">
</head>
<body>
<main class="main-container">
    <section class="main-content">
        <article class="main-left-article">
            <header>
                <h1 class="main-left-article-header-title">Ainda não tem conta?</h1>
            </header>
            <p class="main-left-article-content">Você será redirecionado para a página de
                <a href="register.php" class="main-left-article-link">registro</a>, onde poderá preencher seus
                dados pessoais e criar sua conta com facilidade.
            </p>
            <div class="main-left-article-content-action">
                <a href="register.php"
                   class="main-left-article-content-action-link">
                   Criar conta
                </a>
            </div>
        </article>
        <article class="main-rigth-article">
            <header class="main-rigth-article-header">
                <h1 class="main-rigth-article-header-title">Acessar a conta</h1>
            </header>
            <div class="main-rigth-article-content">
                <form method="post" action="#" autocomplete="off">
                    <div class="main-rigth-article-content-div-email">
                        <span class="material-symbols-outlined main-rigth-article-content-div-email-icon">mail</span>
                        <input type="email" id="email" name="email" placeholder="E-mail"
                               class="main-rigth-article-content-div-email-input"
                               required>
                    </div>
                    <div class="main-rigth-article-content-div-password">
                        <span class="material-symbols-outlined main-rigth-article-content-div-password-icon">lock</span>
                        <input type="password" id="password" name="password" placeholder="Senha"
                               class="main-rigth-article-content-div-password-input"
                               required>
                        <button type="button" class="w-fit flex items-center text-gray-500">
                        <span class="material-symbols-outlined ml-4 j_toggle_password"
                              data-id="password">visibility</span>
                        </button>
                    </div>
                    <div class="main-rigth-article-content-div-checkbox">
                        <input type="checkbox" id="checkbox" class="main-rigth-article-content-div-checkbox-input">
                        <label for="checkbox" class="main-rigth-article-content-div-checkbox-label">Manter
                            conectado</label>
                    </div>
                    <div class="main-rigth-article-content-div-button">
                        <button type="submit"
                                class="main-rigth-article-content-div-button-button">
                            Entrar
                        </button>
                    </div>
                    <div class="main-rigth-article-content-div-links">
                        <a href="home.php" class="main-rigth-article-content-div-links-left">
                            <span class="material-symbols-outlined main-rigth-article-content-div-links-span-icon">arrow_back</span>
                            <span class="main-rigth-article-content-div-links-span">Voltar para o site</span>
                        </a>
                        <a href="reset.php" class="main-rigth-article-content-div-links-right">Esqueceu a senha?</a>
                    </div>
                </form>
            </div>
        </article>

    </section>
</main>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="assets/js/auth.js"></script>
</body>
</html