<?php
require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/functions.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site VITALLPLUS</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <!-- inclusion de l'entête du site -->
        <?php require_once(__DIR__ . '/header.php'); ?>
        <h1>Site <strong> PHP</strong>  modifier par GAB </h1>

<table height="50" width="100" background="LOGOVITALL.png" >
	<tr>
		<td><I><b>Ce tableau à une image d'arrière-plan</b></i></td>
	</tr>
</table>

<p>

<b>Thibault est nul dans quel sport .</b></p>
<p>
	course à pied: <input type="checkbox" name="colors" value="course à pied" /><br />
	foot: <input type="checkbox" name="colors" value="foot" /><br />
	rugby: <input type="checkbox" name="colors" value="rugby" /><br />
	tennis: <input type="checkbox" name="colors" value="tennis" />
</p>
<p><b><code>voici le fichier qui le prouve.</code></b></p>
<input type="hidden" name="MAX_FILE_SIZE" value="4194304" />





<input type="file" />
        <!-- Formulaire de connexion -->
        <?php require_once(__DIR__ . '/login.php'); ?>

        <?php if (isset($loggedUser)) : ?>
            <?php foreach (getRecipes($recipes) as $recipe) : ?>
                <article>
                    <h3><?php echo $recipe['title']; ?></h3>
                    <div><?php echo $recipe['recipe']; ?></div>
                    <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
                </article>
            <?php endforeach ?>
        <?php endif; ?>
    </div>

    <!-- inclusion du bas de page du site -->
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>
