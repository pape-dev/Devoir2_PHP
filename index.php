<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Devoir 2 PHP</title>

    <!--
    -- -----------------------------------------------------Le Css------------------------------------------------------------------ 
-->
    <style>
        table {
            table-layout: fixed;
            width: 100%;
            border-collapse: collapse;
            border: 3px solid rgb(128, 82, 128);
        }

        th,
        td {
            padding: 20px;
            font-family: 'Times New Roman', Times, serif, cursive;
        }

        th {
            letter-spacing: 2px;
            text-align: center;
            font-weight: bolder;
            font-size: 20px;
            color: rgb(85, 15, 15);
        }

        td {
            letter-spacing: 1px;
            text-align: center;
            font-weight: bolder;
            font-size: 20px;
            color: rgb(213, 6, 6);
        }

        th,
        td {
            background: linear-gradient(to bottom, rgba(232, 222, 222, 0.943), rgba(242, 229, 229, 0.5));
            border: 3px solid rgb(19, 19, 19);
        }

        tr:nth-child(odd) {
            background-color: #e4d8e1;
        }

        tr:nth-child(even) {
            background-color: #fff5f5;
        }


        table {
            background-color: #ff33cc;
        }
    </style>
</head>
<!--
    -- -----------------------------------------------------Liste des films------------------------------------------------------------------ 
-->
<?php
// Liste des films
$films = array(

    //Films en 1994
    0 => array('film' => 'Les évadés', 'annee' => '1994', 'descriptions' => 'Le banquier Andy Dufresne est arrêté pour avoir tué sa femme et son amant. Après une dure adaptation, il tente d\'améliorer les conditions de la prison et de redonner de l\'espoir à ses compagnons.Le banquier Andy Dufresne est arrêté pour avoir tué sa femme et son amant. Après une dure adaptation, il tente d\'améliorer les conditions de la prison et de redonner de l\'espoir à ses compagnons.Le banquier Andy Dufresne est arrêté pour avoir tué sa femme et son amant. Après une dure adaptation, il tente d\'améliorer les conditions de la prison et de redonner de l\'espoir à ses compagnons..'),
    1 => array('film' => 'Pulp Fiction', 'annee' => '1994', 'descriptions' => 'Les vies de deux hommes de main, d\'un boxeur, de la femme d\'un gangster et de deux braqueurs s\'entremêlent dans quatre histoires de violence et de rédemption..'),
    2 => array('film' => 'Forrest Gump ', 'annee' => '1994', 'descriptions' => 'Les présidences de Kennedy et Johnson, le Vietnam, le Watergate et d\'autres histoires se déroulent à travers la perspective d\'un homme d\'Alabama avec un QI de 75..'),

    //Films en 1999
    3 => array('film' => 'Fight Club', 'annee' => '1999', 'descriptions' => "Un employé de bureau insomniaque et un fabriquant de savons forment un club de combat clandestin qui devient beaucoup plus que ça."),
    4 => array('film' => 'Matrix', 'annee' => '1999', 'descriptions' => "Un pirate informatique découvre par de mystérieux rebelles la véritable nature de sa réalité et son rôle dans la guerre contre ceux qui la contrôlent."),
    5 => array('film' => 'La ligne verte', 'annee' => '1999', 'descriptions' => "La vie des gardes du couloir de la mort est touchée par l'un de leurs détenus: a homme noir accusé de meurtre et de viol d'enfants, doté d'un pouvoir mystérieux."),

    //Films en 2022
    6 => array('film' => 'Top Gun : Maverick', 'annee' => '2022', 'descriptions' => "Après plus de trente ans de service en tant que l'un des meilleurs aviateurs de la Marine, Pete Mitchell est à sa place, étant un pilote d'essai courageux et esquivant l'avancement en grade qui le clouerait au sol."),
    7 => array('film' => 'Tout partout à la fois', 'annee' => '2022', 'descriptions' => "Dans l'ascenseur menant au contrôle fiscal de leur laverie, Waymond, qui adopte un comportement bizarre, explique à sa femme qu'elle seule peut sauver l'univers en utilisant les aptitudes de ses doubles provenant de mondes parallèles."),

    //Films 2016
    8 => array('film' => 'Dangal', 'annee' => '2016', 'descriptions' => "Former wrestler Mahavir Singh Phogat and his two wrestler daughters struggle towards glory at the Commonwealth Games in the face of societal oppression."),
    9 => array('film' => 'Tu ne tueras point', 'annee' => '2016', 'descriptions' => "Le médecin américain Desmond T. Doss de la Seconde Guerre mondiale servit pendant la bataille d'Okinawa, refusant de tuer des gens et devint le premier homme de l'histoire américaine à recevoir la médaille d'honneur sans tirer un seul coup de feu."),

    //Film 2011
    10 => array('film' => 'Intouchables', 'annee' => '2011', 'descriptions' => "Après être devenu tétraplégique à la suite d'un accident de parapente, un aristocrate engage un jeune homme des cités en tant qu'aide-soignant."),

    //Films 2000
    11 => array('film' => 'Snatch - Tu braques ou tu raques', 'annee' => '2000', 'descriptions' => "Des promoteurs de boxe sans scrupules, des bookmakers violents, un gangster russe, des voleurs amateurs incompétents et des bijoutiers soi-disant juifs se battent pour traquer un diamant volé à la valeur inestimable."),
    12 => array('film' => 'Requiem pour un rêve', 'annee' => '2000', 'descriptions' => "Un horrible accident de voiture relie trois histoires, chacune impliquant des personnages faisant face à la perte, au regret et aux dures réalités de la vie, tout cela au nom de l'amour."),

    //Films en 1997
    13 => array('film' => 'La vie est belle', 'annee' => '1997', 'descriptions' => "Lorsqu'un bibliothécaire juif ouvert d'esprit et son fils sont victimes de l'Holocauste, il utilise un mélange parfait de volonté, d'humour et d'imagination pour protéger son fils des dangers qui les entourent."),
    14 => array('film' => 'Will Hunting ', 'annee' => '1997', 'descriptions' => "Will Hunting, un employé de ménage à M.I.T., a un don pour les mathématiques, mais a besoin de l'aide d'un psychologue pour trouver sa voie.")
);

//Affiche liste des années des films

// Création d'un Tableau de stockage des années
$annees = array();

//On affiche les années avec la boucle foreach
foreach ($films as $film) {
    $annees[] = $film['annee'];
}


//On remarque qu'il y a des doublons on les supprime
$annees = array_unique($annees);

// Récupération de l'année choisie en vérifiant son existance
if (isset($_GET['annee'])) {
    $AnneChoisie = $_GET['annee'];
}
?>

<!--
    -- -----------------------------------------------------Liste des années------------------------------------------------------------------ 
-->

<body>
    <h1>RECHERCHE DE FILM</h1>
    <p>Voici la liste des années des films disponibles :</p>

    <!--Affichage en liste de liens HTML (<a target='_blank' href=« »>), les années des films listés avec la boucle foreach.-->
    <ol type="a">
        <?php
        foreach ($annees as $annee) { ?>
            <li><a href="?annee=<?= $annee; ?>"><?= $annee; ?></a></li>
        <?php
        } ?>
    </ol>


    <?php
    //Stocker les données dans un tableau
    echo '<table>';
    echo '<tr>
            <th>Année choisie</th>
            <th>Titre du film</th>
            <th>Description</th>
        </tr>';

    //Vérifier si le l'année choisie existe; si oui on affiche l'année choisie est :....
    if (isset($AnneChoisie)) {
        echo "<h3>Vous avez choisi l'année : <b>" . $AnneChoisie . '</b></h3>';
        foreach ($films as $film) {

            //Vérifier si l'année du film est égal à l'année choisie
            if ($film['annee'] == $AnneChoisie) {

                //Si annee du film est == à annee choisie; on affiche les données en mode tableau
                echo '<tr>';
                echo '<td>' . $AnneChoisie . '</td>';
                echo '<td>' . $film['film'] . '</td>';
                echo '<td>' . $film['descriptions'] . '</td>';
                echo '</tr>';
            }
        }
    }
    echo '</table>';
    ?>
</body>

</html>