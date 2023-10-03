<form action="thanks.php" method="post">
    <div>
        <label for="name">Nom</label>
        <input type="text" id="name" name="user_name" />
    </div>
    <div>
        <label for="surname">Prénom</label>
        <input type="text" id="surname" name="user_surname" />
    </div>
    <div>
        <label for="phone">Téléphone</label>
        <input type="text" id="phone" name="user_phone" />
    </div>
    <div>
        <label for="subjectSelect">Choisir un sujet:</label>
        <select name="subject" id="subjectSelect">
            <option value="">--SVP Séléctionnez une option--</option>
            <option value="infos">Infos</option>
            <option value="Commandes">Commandes</option>
            <option value="SAV">SAV</option>
        </select>
    </div>
    <div>   
        <label for="mail">Email</label>
        <input type="mail" id="mail" name="user_mail" />
    </div>
    <div>
        <label for="msg">Nom</label>
        <textarea id="message" name="user_message" /></textarea>
    </div>
    <button type="submit">Envoyer le message</button>
    </form>

    <?php

    ?>