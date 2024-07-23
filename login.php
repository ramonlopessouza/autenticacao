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
        <article class="basis-7/12 flex flex-wrap py-20 px-16 rounded-l-2xl bg-blue-500">
            <h1 class="text-3xl uppercase font-bold text-white mt-12">Ainda não tem conta?</h1>
            <p class="text-lg text-white">Você será redirecionado para a página de
                <a href="register.php" class="underline decoration-sky-500">registro</a>, onde poderá preencher seus
                dados pessoais e criar sua conta com facilidade.</p>
            <div class="w-full">
                <a href="register.php"
                   class="w-full flex justify-center items-center rounded-full text-white font-bold">
                    <span class="w-full mx-12 rounded-full text-center py-4 text-white font-bold bg-sky-500">Criar conta</span>
                </a>
            </div>
        </article>
        <article class="basis-full flex flex-wrap pt-20 px-12 content-center rounded-r-2xl bg-white">
            <header class="w-full">
                <h1 class="text-3xl uppercase font-bold text-blue-500 text-center">Acessar a conta</h1>
            </header>
            <div class="w-full mt-24">
                <form method="post" action="#" autocomplete="off" class="">
                    <div class="w-full flex p-6 bg-stone-200/70">
                        <span class="material-symbols-outlined bases-4 mr-4 text-gray-500">mail</span>
                        <input type="email" id="email" name="email" placeholder="E-mail"
                               class="w-full bg-transparent font-bold outline-none placeholder:text-gray-500 font-bold outline-none"
                               required>
                    </div>
                    <div class="w-full flex items-center p-6 mt-6 bg-stone-200/70">

                        <span class="material-symbols-outlined w-fit mr-4 text-gray-500">lock</span>
                        <input type="password" id="password" name="password" placeholder="Senha"
                               class="w-full bg-transparent font-bold outline-none placeholder:text-gray-500 font-bold outline-none"
                               required>
                        <button type="button" class="w-fit flex items-center text-gray-500">
                        <span class="material-symbols-outlined ml-4 j_toggle_password"
                              data-id="password">visibility</span>
                        </button>
                    </div>
                    <div class="flex items-center mt-4">
                        <input type="checkbox" id="checkbox" class="text-xl">
                        <label for="checkbox" class="w-fit mx-2 text-base text-neutral-500 font-bold">Manter
                            conectado</label>
                    </div>
                    <div class="flex flex-wrap justify-center">
                        <button type="submit"
                                class="basis-5/12 p-4 mt-6 rounded-full uppercase text-white font-bold bg-blue-500 hover:sky-400">
                            Entrar
                        </button>
                    </div>
                    <div class="w-full flex justify-between mt-24 mb-12">
                        <a href="home.php" class="w-fit flex items-center font-bold text-neutral-500">
                            <span class="material-symbols-outlined text-sm mr-1">arrow_back</span>
                            <span class="text-sm hover:underline hover:decoration-sky-500">Voltar para o site</span>
                        </a>
                        <a href="reset.php" class="w-fit flex items-center font-bold text-neutral-500 text-sm
                     hover:underline hover:decoration-sky-500">Esqueceu a senha?</a>
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