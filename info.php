<?php
$nomEtablissement = "Institut Fictif";
$module = "Programmation Web";
$annee = 2025;

$a = 10;
$b = 5;

$addition = $a + $b;
$multiplication = $a * $b;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Info PHP</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f5f5f5; padding: 2rem; }
        .card { background-color: white; padding: 1rem; margin-bottom: 1rem; border-radius: 8px; box-shadow: 0 0 5px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <h1>Informations PHP</h1>

    <div class="card">
        <p><strong>Nom de l'établissement :</strong> <?php echo $nomEtablissement; ?></p>
        <p><strong>Module :</strong> <?php echo $module; ?></p>
        <p><strong>Année :</strong> <?php echo $annee; ?></p>
    </div>

    <div class="card">
        <p><strong>Exemple de variables :</strong></p>
        <p>a = <?php echo $a; ?>, b = <?php echo $b; ?></p>
        <p><strong>Résultat addition :</strong> <?php echo $addition; ?></p>
        <p><strong>Résultat multiplication :</strong> <?php echo $multiplication; ?></p>
    </div>
</body>
</html>

