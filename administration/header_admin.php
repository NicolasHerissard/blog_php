<!--En tête de la page admin-->
<header>
        <div>
            <h1>Panneau administration</h1>

            <select name="users" id="menu_users">
                <option value="none">Aucun</option>

            <?php 
                
                $query = $dbh->query('SELECT firstname FROM users');
                $query->execute();

                while ($user = $query->fetch()) {
                    ?>
                        <option value=""><?= $user['firstname'] ?></option>
                    <?php
                }

                ?>
            </select>

            <select name="menu deroulant" id="menu">
                <option value="none">Aucun</option>
                <option value="users">Utilisateur</option>
                <option value="admin">Administrateur</option>
                <option value="Author">Auteur</option>
            </select>

            <div>
                <button type="submit" id="btn_valide">Valider</button>
            </div>
        </div>
    </header>