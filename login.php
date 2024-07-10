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
</head>
<body>
<main class="fixed left-0 top-0 right-0 bottom-0 flex justify-center bg-cover bg-no-repeat bg-center"
      style='background-image: url("../autenticacao/assets/images/image_1.jpg")'>
    <article
            class="flex flex-wrap py-12 w-3/12 my-24 px-12 rounded-l-lg bg-zinc-900">
        <h1 class="text-3xl uppercase font-bold text-white mt-12">Não tem uma conta?</h1>
        <p class="text-lg text-white">Você será redirecionado para a página de
            <a href="register.php" class="underline decoration-sky-500">registro</a>, onde poderá preencher seus
            dados pessoais e criar sua conta com facilidade.</p>
        <div class="w-full">
            <a href="register.php" class="w-full flex justify-center items-center rounded-full text-white font-bold">
        <span class="w-full mx-12 rounded-full text-center py-4 text-white font-bold bg-sky-500
         hover:decoration-sky-500 hover:shadow-lg hover:bg-sky-400 hover:border-sky-400">Criar conta</span>
            </a>
        </div>
    </article>
    <article class="flex flex-wrap content-center w-4/12 my-24 px-28 rounded-r-lg bg-zinc-800">
        <header class="w-full">
            <h1 class="text-3xl uppercase font-bold text-white text-center">Acessar a conta</h1>
        </header>
        <div class="w-full mt-24">
            <form method="post" action="#" autocomplete="off" class="">
                <div class="w-full flex p-6 rounded-full bg-slate-100/75">
                    <span class="material-symbols-outlined bases-4 mr-4 text-gray-500">mail</span>
                    <input type="email" id="email" name="email" placeholder="E-mail"
                           class="w-full bg-transparent font-bold outline-none placeholder:text-gray-500 font-bold outline-none"
                           required>
                </div>
                <div class="w-full flex items-center p-6 mt-6 rounded-full bg-slate-100/75">
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
                <input type="checkbox" id="checkbox" class="w-fit"></input>
                <label for="checkbox" class="w-fit mx-2 text-sm text-white font-bold">Manter conectado</label>
                </div>
                <button type="submit" class="w-full p-6 mt-6 rounded-full text-white font-bold
                        bg-gradient-to-r from-blue-700 to-sky-400 hover:from-blue-800 hover:to-sky-500">
                    Entrar
                </button>
                <div class="w-full flex justify-between mt-6">
                    <a href="home.php" class="w-fit flex items-center font-bold text-white">
                        <span class="material-symbols-outlined text-sm mr-1">arrow_back</span>
                        <span class="text-sm hover:underline hover:decoration-sky-500">Voltar para o site</span>
                    </a>
                    <a href="#" class="w-fit flex items-center font-bold text-white text-sm text-sky-600
                     hover:underline hover:decoration-sky-500">Esqueceu a senha?</a>
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