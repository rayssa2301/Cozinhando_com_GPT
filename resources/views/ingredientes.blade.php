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
         <h1>Gerador de Receitas 🍲</h1>
         <nav>
        <a href="/">Voltar</a>
         </nav>
    </header>
    <h2>Cozinhando com o que tem </h2>
    <main>

        <p>Encontre a receita perfeita usando o que está na sua geladeira.
             Use a inteligência artificial e nunca mais jogue comida fora!</p>
             <label>Digite os ingredientes</label>
             <article>

                <form method="POST" action="{{route('ingredientesAcao')}}">
                      @csrf
                <input type="text" name="ingredientes" value="{{$ingredientes ?? ''}}"/>
                <input type="submit" value="Pesquise a receita" />
                </form>
         </article>
         @if (!empty($receita))

                <h3>Receita</h3>
                {!!preg_replace("/\r\n|\n/", '<br>',$receita)!!}

            @endif
    </main>
</body>
<footer>
    By: Rayssa Carvalho
</footer>
</html>














