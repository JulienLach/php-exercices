<form action="views/user_data.php" method="POST">
    <label for="email">E-mail:</label>
    <input type="email" name="email" required><br>

    <label for="password">Mot de passe:</label>
    <input type="password" name="password" required><br>


    <!-- <label for="gender">Civilité:</label>
    <select id="gender" name="gender" required>
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
    </select><br>

    <label for="name">Nom:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="birthdate">Date de naissance:</label>
    <input type="date" id="birthdate" name="birthdate" required><br>

    <label for="birthcountry">Pays de naissance:</label>
    <select id="birthcountry" name="birthcountry" required>
        <option value="France">France</option>
        <option value="Belgique">Belgique</option>
        <option value="Suisse">Suisse</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Allemagne">Allemagne</option>
        <option value="Italie">Italie</option>
        <option value="Espagne">Espagne</option>
        <option value="Portugal">Portugal</option>
    </select><br>

    <label for="postalcode">Code postal:</label>
    <input type="text" id="postalcode" name="postalcode" required><br>

    <label for="profilepic">Photo de profil:</label>
    <input type="file" id="profilepic" name="profilepic" accept="image/*" required><br>

    <label for="linkedin">Url compte linked:</label>
    <input type="url" id="linkedin" name="linkedin" required><br>

    <label for="weblanguages">Quel langages web connaissez-vous?</label><br>
    <input type="checkbox" id="htmlcss" name="weblanguages[]" value="HTML/CSS">
    <label for="htmlcss">HTML/CSS</label><br>
    <input type="checkbox" id="php" name="weblanguages[]" value="PHP">
    <label for="php">PHP</label><br>
    <input type="checkbox" id="javascript" name="weblanguages[]" value="Javascript">
    <label for="javascript">Javascript</label><br>
    <input type="checkbox" id="python" name="weblanguages[]" value="Python">
    <label for="python">Python</label><br>
    <input type="checkbox" id="others" name="weblanguages[]" value="Autres">
    <label for="others">Autres</label><br>

    <label for="experience">Racontez une expérience avec la programmation et/ou l'informatique que vous auriez pu avoir:</label><br>
    <textarea id="experience" name="experience" rows="4" cols="50" required></textarea><br> -->

    <input type="submit" value="Envoyer">
</form>
