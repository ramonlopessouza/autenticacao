<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<main class="fixed left-0 top-0 right-0 bottom-0 flex items-center justify-center bg-blue-500">
    <article>
        <header>
            <h1 class="text-3xl">Cadastra-se</h1>
        </header>
        <div>
            <form class="">
                <div class="">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" placeholder="Fulano de tal" class="" required>
                </div>
                <div class="">
                    <label for="email" class="">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="teste@gmail.com" class="" required>
                </div>
                <div class="">
                    <label for="password" class="">Senha: </label>
                    <input type="password" id="password" name="password" class="" required>
                </div>
                <div class="">
                    <label for="password_repeat" class="">Repita a senha: </label>
                    <input type="password" id="password_repeat" name="password_repeat" class="" required>
                </div>
                <button type="submit" class="w-full p-2 mt-2 bg-gradient-to-r from-red-500 to-red-700">Cadastra-se</button>
            </form>
        </div>
    </article>
</main>
</body>
</html>