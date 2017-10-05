<?php
$term = taxonomy_term_load($data->field_field_type_d_honoraires[0]['raw']['tid']);
$name = $term->name;
$term2 = taxonomy_term_load($data->field_field_prix_affiche[0]['raw']['tid']);
$name2 = $term2->name;
global $language ;
$lang_name = $language->language ;
if ($name == "Charge acquéreur") {
  echo(
      "<p class='selling-p'>PRIX DE VENTE</p>" .
      "<p class='number-p'>" . number_format($data->field_field_prix_avec_honoraires[0]['raw']['value'], 0, ' ', ' ') . " €</p>" .
      "<p class='fees-p'>honoraires inclus</p>" .
      "<p class='splitter-p'>-</p>" .
      "<p class='number-p smallernumber-p'>" . number_format($data->field_field_prix_reel[0]['raw']['value'], 0, ' ', ' ') . " €</p>" .
      "<p class='fees-p smallerfees-p'>honoraires exclus</p>" .
      "<p class='splitter-p'>-</p>" .
      "<p class='selling-p'>HONORAIRES</p>" .
      "<p class='number-p smallernumber-p'>" . number_format($data->field_field_taux_d_honoraires[0]['raw']['value'], 0, ' ', ' ') . "<span class='ttc-p'>% TTC</span></p>" .
      "<p class='fees-p smallerfees-p'>" . $name . "</p>");
    } else if ($name == "Charged to the customer") {
    echo(
      "<p class='selling-p'>SELLING PRICE</p>" .
      "<p class='number-p'>" . number_format($data->field_field_prix_avec_honoraires[0]['raw']['value'], 0, ' ', ' ') . " €</p>" .
      "<p class='fees-p'>fees included</p>" .
      "<p class='splitter-p'>-</p>" .
      "<p class='number-p smallernumber-p'>" . number_format($data->field_field_prix_reel[0]['raw']['value'], 0, ' ', ' ') . " €</p>" .
      "<p class='fees-p smallerfees-p'>fees excluded</p>" .
      "<p class='splitter-p'>-</p>" .
      "<p class='selling-p'>FEES</p>" .
      "<p class='number-p smallernumber-p'>" . number_format($data->field_field_taux_d_honoraires[0]['raw']['value'], 0, ' ', ' ') . "<span class='ttc-p'>% TTC</span></p>" .
      "<p class='fees-p smallerfees-p'>" . $name . "</p>");
    } else if ($name == "Charge vendeur") {
    echo(
      "<p class='selling-p first-p'>PRIX DE VENTE</p>" .
      "<p class='number-p'>" . number_format($data->field_field_prix_de_vente[0]['raw']['value'], 0, ' ', ' ') . " €</p>" .
      "<p class='selling-p second-p'>HONORAIRES</p>" .
      "<p class='fees-p smallerfees-p'>" . $name . "</p>");
    } else if ($name == "Charged to the seller") {
    echo(
      "<p class='selling-p first-p'>SELLING PRICE</p>" .
      "<p class='number-p'>" . number_format($data->field_field_prix_de_vente[0]['raw']['value'], 0, ' ', ' ') . " €</p>" .
      "<p class='selling-p second-p'>FEES :</p>" .
      "<p class='fees-p smallerfees-p'>" . $name . "</p>");
    } else if ($lang_name =="en") {
    echo (
      "<p class='selling-p first-p'>SELLING PRICE</p>" . 
      "<p class='number-p'>" . $name2 . "</p>");
    } else {
    echo (
      "<p class='selling-p first-p'>PRIX DE VENTE</p>" . 
      "<p class='number-p'>" . $name2 . "</p>");
    };
?>