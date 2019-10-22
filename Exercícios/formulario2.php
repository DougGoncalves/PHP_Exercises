<!-- Persistência e Validação -->


<!-- 1. Vamos adicionar validação para o formulário de registro. Para isso, sugerimos alguns fatores a serem considerados:
a. Uma boa estratégia é o formulário de registro colocar um pedido pelo POST para o mesmo arquivo. Isso nos permite validar e depois enviá-lo para a página de sucesso.
b. É importante validar antes de qualquer coisa se o usuário enviou informações.
c. Se o usuário realmente enviou informações, vamos querer validar campo por campo, adotando a abordagem "perguntar se há um erro no campo".
d. É importante acumular todos os erros para exibi-los de forma ordenada no HTML.
e. Se depois de todas as validações não houver erro, podemos redirecionar o usuário para a página de sucesso.
■ Para redirecionar ver ​header(“Location...”)
f. Caso o formulário traga erros, queremos persistir os dados que o usuário já
enviou no formulário.
g. Em uma segunda versão, seria ideal persistir apenas os campos que não
tiveram erros! -->

<!DOCTYPE HTML>
<html>
    <body>
        <form action="formulario2.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
            <br>
            <label for="email">E-mail:</label>
            <input type="text" name="email">
            <br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

<?php
    echo "<pre>";
    var_dump($_POST);
    if ($_POST) {
        // if ( (!(isset($_POS["nome"]))) && (!(isset($_POST["idade"]))) ) {
        //     echo "<br>Favor preencher os campos";
        // } elseif ($_POST["nome"]==null) {
        //     echo "<br>Favor preencher o campo nome";
        // } else {
        //     echo "<br>Favor preencher o campo email";
        // }
        echo strlen($_POST["nome"]);
        echo "<br>";
        echo filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
   
        if ( ($_POST["nome"] == "") && (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false) )  {
            echo "<br>Favor preencher os campos";
        } elseif ($_POST["nome"] == "") {
            echo "<br>Favor preencher o campo nome";
        } elseif (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false) {
            echo "<br>Favor preencher o campo email";
        } else {
            header('Location: imprimir.php?nome=Douglas&email=doug.goncalvesf@gmail.com');
            die();
        }
       
    }
?>