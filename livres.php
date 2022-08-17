<?php
require_once "Livre.class.php";
require_once "LivreManager.class.php";

// Création des livres
$l1 = new Livre(1, "Algorithmique", 250, "algo.jpg");
$l2 = new Livre(2, "HTML5 et CSS3", 300, "html5.jpg");
$l3 = new Livre(3, "JavaScript", 350, "javascript.jpg");
$l4 = new Livre(4, "PHP", 300, "php.jpg");

//On va instancier un nouvel objet
$livreManager = new LivreManager;
$livreManager->ajoutLivre($l1);
$livreManager->ajoutLivre($l2);
$livreManager->ajoutLivre($l3);
$livreManager->ajoutLivre($l4);


ob_start()
?>

<!-- On définit la table -->
<table class="table text-center">
    <!--On va définir une ligne -->
    <tr class="table-dark">
        <!--Pour définir un titre  -->
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <!--Ici on aura les actions, donc on va regrouper 2 colonnes en une seule -->
        <th colspan="2">Actions</th>
    </tr>
    <!--getLivres permet de retourner le tableau de livres -->
    <?php for ($i = 0; $i < count($livreManager->getLivres()); $i++) : ?>
        <tr>
            <td class="align-middle"><img src="public/images/<?= $livreManager->getLivres()[$i]->getImage(); ?>" width="80px;">
            </td>
            <td class="align-middle"><?= $livreManager->getLivres()[$i]->getTitre(); ?></td>
            <td class="align-middle"><?= $livreManager->getLivres()[$i]->getNbPages(); ?></td>
            <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
            <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
        </tr>
    <?php endfor; ?>

</table>

<!--Bouton Ajouter -->
<a href="" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les livres de la bibliothèque";
require "template.php";
?>