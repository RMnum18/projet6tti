<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <title>Inscription</title>
</head>
<body>
    <div id= "tete">
        <div id = "titre">
            <h1>FOOTBALL LIBRARY</h1>
        </div>
        <div id = "logo">
            <img src="logo.png" id = "image1"/>
        </div>
    </div>
    <form method="post" action="index.php">
        <div id = "inscription">    
            <p>
                <label for="nom">Nom : </label>
                <input type="text" name="nom" id="nom">
            </p>
            <p>
                <label for="prenom">Prenom : </label>
                <input type="text" name="prenom" id="prenom">
            </p>
            <p>
                <label for="MDP">Mot de passe : </label>
                <input type="password" id="MDP" name="MDP">
            </p>
            <p>
                <label for="role">Role dans le football :</label>
                <select name="role" id="role">
                    <option value="investisseurs">Investisseurs</option>
                    <option value="entraineurs">Entraineurs</option>
                    <option value="agents ">Agents</option>
                    <option value="fans">Fans</option>
                    <option value="president">President</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Valider" name="Valider">
            </p>
        </div>
    </form>
</body>
</html>