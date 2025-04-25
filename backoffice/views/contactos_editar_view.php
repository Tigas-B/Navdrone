    <?php
        $infos = contactos();
        $form = !empty($_GET["telemovel"]) && !empty($_GET["morada"]) && !empty($_GET["email"])  && !empty($_GET["atendimento"]) && !empty($_GET["facebook"])  && !empty($_GET["instagram"]) && !empty($_GET["youtube"]);
        if($form){
            $telemovel = $_GET["telemovel"];
            $morada = $_GET["morada"];
            $email = $_GET["email"];
            $atendimento = $_GET["atendimento"];
            $facebook = $_GET["facebook"];
            $instagram = $_GET["instagram"];
            $youtube = $_GET["youtube"]; 
            iduSQL("UPDATE contactos SET telemovel ='$telemovel', morada='$morada', email='$email', atendimento='$atendimento', facebook='$facebook', instagram='$instagram', youtube='$youtube'");
            header("Location: contactos.php");
            exit();
        }
    ?>
    <main>
        <div class="row">
            <div class="col my-5 text-center">
                <h1>Contactos</h1>
            </div>
        </div>
        <div class="row text-center mb-5">
            <div class="col contactos">
                    <form>
                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?= $infos["email"];?>" required>
                        <br><br>
                        <label for="telemovel">Telemóvel</label>
                        <input type="text" name="telemovel" value="<?= $infos["telemovel"]; ?>" required>
                        <br><br>
                        <label for="atendimento">Atendimento</label>
                        <input type="text" name="atendimento" value="<?= $infos["atendimento"]; ?>" required>
                        <br><br>
                        <label for="morada">Morada</label>
                        <input type="text" name="morada" value="<?= $infos["morada"]; ?>" required>
                        <br><br>
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" value="<?= $infos["facebook"]; ?>" required>
                        <br><br>
                        <label for="instagram">Instagram</label>
                        <input type="text" name="instagram" value="<?= $infos["instagram"]; ?>" required>
                        <br><br>
                        <label for="youtube">Youtube</label>
                        <input type="text" name="youtube" value="<?= $infos["youtube"]; ?>" required>
                        <br><br>
                        <input class="btn btn-warning" type="submit" value="Editar">
                    </form>
            </div>
        </div>
    </main>