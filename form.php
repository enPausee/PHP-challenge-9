<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire</title>
</head>

<body>
<form method="post" action="print.php">
        <p>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" require/>
        </p>
        
        <p>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" require />
        </p>

        <p>
            <label for="mail">Email</label>
            <input type="email" name="mail" id="mail" require/>
        </p>

        <p>
            <label for="tel">Téléphone</label>
            <input type="tel" name="tel" id="tel" require/>
        </p>

        <p>
            <select name="sujet" id="sujet" require>
                <option value="commercial">Sujet 1</option>
                <option value="technique">Sujet 2</option>
                <option value="client">Sujet 3</option>
            </select>
        </p>

        <p>
            <textarea name="message" id="message" cols="50" rows="10" require></textarea>
        </p>

        <p>
            <button type="submit" name="update">Valider</button>
        </p>
    </form>
</body>

</html>