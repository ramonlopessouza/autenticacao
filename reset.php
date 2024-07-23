<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redefinir Senha</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
</head>
<body>
<main class="fixed left-0 top-0 right-0 bottom-0 flex justify-center bg-zinc-800">
    <article class="flex flex-wrap content-center w-4/12 my-24 px-28 rounded-r-lg bg-zinc-800">
        <header class="w-full">
            <h1 class="text-3xl uppercase font-bold text-white">Esqueceu sua senha?</h1>
            <p class="text-xl font-bold text-white  mt-12">
                Por favor, insira seu endereço de e-mail abaixo. Enviaremos um link para você redefinir sua senha.</p>
        </header>
        <div class="w-full mt-12">
            <form method="post" action="#" autocomplete="off" class="">
                <div class="w-full flex p-6 rounded-full bg-slate-100/75">
                    <span class="material-symbols-outlined bases-4 mr-4 text-gray-500">mail</span>
                    <input type="email" id="email" name="email" placeholder="E-mail"
                           class="w-full bg-transparent font-bold outline-none placeholder:text-gray-500 font-bold outline-none"
                           required>
                </div>
                <button type="submit" class="w-full p-6 mt-6 rounded-full text-white font-bold
                        bg-gradient-to-r from-blue-700 to-sky-400 hover:from-blue-800 hover:to-sky-500">
                    Receber link no e-mail
                </button>
                <div class="w-full flex justify-between mt-6">
                    <a href="home.php" class="w-fit flex items-center font-bold text-white">
                        <span class="material-symbols-outlined text-sm mr-1">arrow_back</span>
                        <span class="text-sm hover:underline hover:decoration-sky-500">Voltar para o site</span>
                    </a>
                </div>
            </form>
        </div>
    </article>
</main>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="assets/js/auth.js"></script>
</body>
</html>