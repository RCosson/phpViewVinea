<?php
$term = taxonomy_term_load($data->field_field_type_d_honoraires[0]['raw']['tid']);
$name = $term->name;
if ($name == "Charge acquéreur") {
  echo(
  		"<p class='selling-p'>PRIX DE VENTE</p>" .
  		"<p class='number-p'>" . number_format($data->field_field_prix_avec_honoraires[0]['raw']['value'], 0, ' ', ' ') . " €</p>" .
  		"<p class='fees-p'>honoraires inclus</p>" .
  		"<p class='number-p'>" . number_format($data->field_field_prix_reel[0]['raw']['value'], 0, ' ', ' ') . " €</p>" .
  		"<p class='fees-p'>honoraires exclus</p>" .
  		"<p class='selling-p'>HONORAIRES :</p>" .
  		"<p class='number-p'>" . number_format($data->field_field_taux_d_honoraires[0]['raw']['value'], 0, ' ', ' ') . " %</p>" .
  		"<p class='number-p'>" . $name . "</p>");
  	} else if ($name == "Charged to the customer") {
  	echo(
  		"<p class='selling-p'>SELLING PRICE</p>" .
  		"<p class='number-p'>" . number_format($data->field_field_prix_avec_honoraires[0]['raw']['value'], 0, ' ', ' ') . " €</p>" .
  		"<p class='fees-p'>fees included</p>" .
  		"<p class='number-p'>" . number_format($data->field_field_prix_reel[0]['raw']['value'], 0, ' ', ' ') . " €</p>" .
  		"<p class='fees-p'>fees excluded</p>" .
  		"<p class='selling-p'>FEES :</p>" .
  		"<p class='number-p'>" . number_format($data->field_field_taux_d_honoraires[0]['raw']['value'], 0, ' ', ' ') . " %</p>" .
  		"<p class='number-p'>" . $name . "</p>");
  	} else if ($name == "Charge vendeur") {
  	echo(
  		"<p class='selling-p'>PRIX DE VENTE</p>" .
  		"<p class='number-p'>" . number_format($data->field_field_prix_reel[0]['raw']['value'], 0, ' ', ' ') . " €</p>" .
  		"<p class='selling-p'>HONORAIRES :</p>" .
  		"<p class='number-p'>" . $name . "</p>");
  	} else {
  	echo(
  		"<p class='selling-p'>SELLING PRICE</p>" .
  		"<p class='number-p'>" . number_format($data->field_field_prix_reel[0]['raw']['value'], 0, ' ', ' ') . " €</p>" .
  		"<p class='selling-p'>FEES :</p>" .
  		"<p class='number-p'>" . $name . "</p>");
  	};
?>