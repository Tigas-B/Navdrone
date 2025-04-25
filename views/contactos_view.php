    <?php

        $contactos = contactos();

        $form = !empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["telefone"]) && !empty($_POST["assunto"]) && !empty($_POST["mensagem"]);
        if($form){

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $assunto = $_POST["assunto"];
            $mensagem = $_POST["mensagem"];
            
            $headers = "MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n";
            $mensagem_final = "<ol>";
            $mensagem_final .= "<li>Nome: $nome</li>";
            $mensagem_final .= "<li>E-mail: $email</li>";
            $mensagem_final .= "<li>Assunto: $assunto</li>";
            $mensagem_final .= "<li>Mensagem: $mensagem</li>";
            $mensagem_final .= "</ol>";

        }
    ?>
    <main class="container-fluid pages contactos">
        <div class="row">
            <div class="col w-100 h-100 text-white d-flex justify-content-center align-items-center">
                <h1>Contactos</h1>
            </div>
        </div>
        <div class="row text-white py-5 ">
            <div class="col-12 col-md-5 px-5 my-auto text-center">
                <h4>Email</h4>
                <p><?=$contactos["email"];?></p>
                <br><br>
                <h4>Telemóvel</h4>
                <p><?=$contactos["telemovel"];?></p>
                <br>
                <h4>Localização</h4>
                <p class="px-5"><?=$contactos["morada"];?></p>
            </div>
            <div class="col-12 col-md-7 p-5 text-white">
                <form method="post" class="w-100 p-5">
                    <label for="nome">O Seu Nome*</label>
                    <input type="text" name="nome" required>
                    <br><br>
                    <label for="email">E-mail*</label>
                    <input type="text" name="email" required>
                    <br><br>
                    <label for="assunto">Assunto*</label>
                    <input type="text" name="assunto" required>
                    <br><br>
                    <label for="mensagem">A Sua Mensagem*</label>
                    <textarea name="mensagem" required></textarea>
                    <br><br>
                    <div class="text-center">
                        <input type="submit" class="text-white p-2 px-3" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
  </main>