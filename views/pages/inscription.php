<section>
    <div class="formInscription">
        <form action="./accueil.php" method="POST">
            <select name="groupe" id="mon-select">
                <option value="" disabled>Choisir un groupe</option>
                <?php
                foreach ($selectOptions as $option) {
                    echo "<option value=" . $option->getId() . ">" . $option->getNom() . "</option>";
                }
                ?>
            </select>
            <input type="email" name="email" placeholder="Votre email" required />
            <input type="text" name="pseudo" placeholder="Votre pseudo" required />
            <input type="password" name="password" placeholder="******" required />
            <input type="password" name="confPassword" placeholder="Confirmez mot de passe" required />
            <input type="submit" value="S'inscrire">
        </form>
    </div>
</section>