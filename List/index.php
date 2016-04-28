<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Baptiste Guesnon — Now</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <style type="text/css">
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
  body{background-color: black;}</style>
</head>
<body>
<?php
$nb_fichier = 0;
echo '<ul>';
?>

<?php
if($dossier = opendir('./'))
{
?>

<?php
while(false !== ($fichier = readdir($dossier)))
{
?>

<?php
if($fichier != 'index.php' && $fichier != 'style.css' && $fichier != '.' && $fichier != '..' && $fichier != '.DS_Store')
{
?>

<?php
$nb_fichier++; // On incrémente le compteur de 1
echo '<div style="position: relative;width:100%;display:block;"><img src="./' . $fichier . '" style="display:block;margin-left:auto;margin-right:auto;z-index:0;margin-top:50px;max-height:600px;max-width:900px;cursor:pointer;"></div><div style="text-align:center;color:white;margin-top:20px;font-size:2em;">' . $fichier . '</div>';
} // On ferme le if (qui permet de ne pas afficher index.php, etc.)
 
} // On termine la boucle
?>

<?php
echo '</ul><br/>';
/*echo $nb_fichier;*/
closedir($dossier);
 
}
 
else
     echo 'Le dossier n\' a pas pu être ouvert';
?>
</body>
</html>