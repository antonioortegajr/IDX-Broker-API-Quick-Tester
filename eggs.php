<?php
// Easter eggs


if($api_key == ""){
  $code = 406;
}
else{
  $code = 200;
}

$api_key = strtolower($api_key);

switch($api_key){

  //star trek section
  case "the needs of the many":
  $api_response_body = "{\"outway\":\"the needs of the few\"}";
  break;
  case "spock":
  $api_response_body = "{\"live long\":\"prosper\"}";
  break;
  case "red shirt":
  $api_response_body = "{\"he's\":\"dead Jim\"}";
  break;
  case "chekov":
  $api_response_body = "{\"wessels\":\"nuclear\"}";
  break;
  case "sulu":
  $api_response_body = "{\"Oh\":\"my\"}";
  break;
  //  Marvel section
  case "spider-man":
  $api_response_body = "{\"does\":\"whatever a spider can\"}";
  break;
  case "captain america":
  $api_response_body = "{\"stars\":\"stripes\"}";
  break;
  case "hulk":
  $api_response_body = "<div style=\"font-size: 350%;\">{\"SMASH\":\"SMASH\"}</div>";
  break;
  case "wolverine":
  $api_response_body = "{\"Snikt!\":\"Snikt!\"}";
  break;
//DC section
  case "batman":
  $api_response_body = "{\"na\":\"na\",\"na\":\"na\",\"na\":\"na\",\"na\":\"na\"}";
  break;
  case "aquaman":
  $api_response_body = "{\"under\":\"the sea\"}";
  break;
  case "superman":
  $api_response_body = "{\"up up\":\"away\"}";
  break;
  case "wonder woman":
  $api_response_body = "{\"jet\":\"invisible\"}";
  break;
//firefly
case "jayne":
$api_response_body = "{\"Hero of Canton\":\"man they call Jayne\"}";
break;
case "wash":
$api_response_body = "{\"leaf on the wind\":\"soar\"}";
break;
case "mal":
$api_response_body = "{\"aim\":\"misbehave\"}";
break;
//star wars section
case "yoda":
$api_response_body = "{\"Do\":\"Do not\"}";
break;
case "han":
$api_response_body = "{\"shoots\":\"first\"}";
break;
case "leia":
$api_response_body = "{\"Love\":\"you\",\"I\":\"know\"}";
break;
case "death star":
$api_response_body = "{\"moon\":\"no\"}";
break;
case "r2d2":
$api_response_body = "{\"bleep\":\"bloop\",\"blop\":\"boop\"}";
break;
case "lando":
$api_response_body = "{\"slimy\":\"double-crossing\",\"no-good\":\"swindler\"}";
break;
case "luke":
$api_response_body = "{\"father\":\"Vader\",\"possible\":\"no\"}";
break;
case "akbar":
$api_response_body = "{\"trap\":\"y\"}";
break;
case "jabba":
$api_response_body = "{\"Chool kanya wee\":\"shaja mee-choo\"}";
break;
//simpsons section
case "burns":
$api_response_body = "{\"Release\":\"hounds\"}";
break;
case "dr. nick":
$api_response_body = "{\"Hi\":\"everybody\"}";
break;
case "nelson":
$api_response_body = "{\"Haw\":\"Ha\"}";
break;
//futurama section
case "farnsworth":
$api_response_body = "{\"Good\":\"News\"}";
break;
case "fry":
$api_response_body = "{\"walking\":\"sunshiiiine\",\"whoooa\":\"oooaahh\"}";
break;
//random
  case "test":
  $api_response_body = "{\"test????? booooring\":\"try some comic book or sci-fi chracters or something fun\"}";
  break;
  case "captain planet":
  $api_response_body = "{\"our\":\"hero\",\"polution\":\"0\"}";
  break;
  case "rick james":
  $api_response_body = "{\"cocaine\":\"hell of a drug\"}";
  break;
  case "witch doctor":
  $api_response_body = "{\"oo\":\"ee\",\"oo\":\"ah ah\",\"ting\":\"tang\",\"Walla Walla\":\"bing bang\"}";
  break;
  case "honey badger":
  $api_response_body = "{\"care\":\"don't\"}";
  break;
  //Monty Python section
  case "ni":
  $api_response_body = "{\"Knights who till recently said Ni\":\"Ekke Ekke Ekke Ekke Ptangya Zoooooooom Boing Ni!\"}";
  break;
  case "holy grail":
  $api_response_body = "{\"Got one\":\"already\",\"nice\":\"very\"}";
  break;
  case "black knight":
  $api_response_body = "{\"Tis but\":\"scratch\"}";
  break;
  case "holy hand grenade of antioch":
  $api_response_body = "{\"1\":\"y\",\"2\":\"y\",\"3\":\"y\",\"4\":\"n\",\"5\":\"right out\"}";
  break;
  case "spam":
  $api_response_body = "{\"egg\":\"bacon\",\"egg\":[\"sausage\",\"bacon\"],\"egg\":\"Spam\",\"egg\":[\"bacon\",\"Spam\"],\"egg\":[\"bacon\",\"sausage\",\"Spam\"],\"Spam\":[\"bacon\",\"sausage\",\"Spam\"],\"Spam\":[\"egg\",\"Spam\",\"Spam\",\"bacon\",\"Spam\"],\"Spam\":[\"Spam\",\"Spam\",\"egg\",\"Spam\"],\"Spam\":[\"Spam\",\"Spam\",\"Spam\",\"Spam\",\"Spam\",\"baked beans\",\"Spam\",\"Spam\",\"Spam\",\"Spam\"],\"Lobster Thermidor aux crevettes with a Mornay sauce, garnished with truffle pâté, brandy and a fried egg on top\":\"Spam\"}";
  break;

}


?>
