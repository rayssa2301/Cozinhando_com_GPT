<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CookSmart</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <link rel="stylesheet" href="/assets/css/style.css"/>
</head>
<body>
    <header>
      <h1>Cozinhando com o que tem 🍲</h1>
    </header>
    <main>
        <h2>Gerador de Receitas</h2>
        <p>Encontre a receita perfeita usando o que está na sua geladeira.
             Use a inteligência artificial e nunca mais jogue comida fora!</p>

             <article>
                <label>Digite os ingredientes? </label>
                <form method="POST" action="{{route('ingredientesAcao')}}">
                      @csrf
                <input type="text" name="ingredientes" />
                <button type="submit">Pesquise a receita</button>
                </form>
         </article>
    </main>
</body>
<footer>
    By: Rayssa Carvalho
</footer>
</html>














