<?php
// Easter eggs


if($api_key == ""){
  $code = 406;
}
else{
  $code = 200;
}

switch($api_key){

  //star trek section
  case "the needs of the many":
  $api_response_body = "{\"outway\":\"the needs of the few\"}";
  break;
  case "Spock":
  $api_response_body = "{\"live long\":\"prosper\"}";
  break;
  case "red shirt":
  $api_response_body = "{\"he's\":\"dead Jim\"}";
  break;
  case "Chekov":
  $api_response_body = "{\"wessels\":\"nuclear\"}";
  break;
  case "Sulu":
  $api_response_body = "{\"Oh\":\"my\"}";
  break;
  //  Marvel section
  case "Spider-Man":
  $api_response_body = "{\"does\":\"whatever a spider can\"}";
  break;
  case "Captain America":
  $api_response_body = "{\"stars\":\"stripes\"}";
  break;
  case "Hulk":
  $api_response_body = "<div style=\"font-size: 350%;\">{\"SMASH\":\"SMASH\"}</div>";
  break;
  case "Wolverine":
  $api_response_body = "{\"Snikt!\":\"Snikt!\"}";
  break;
//DC section
  case "Batman":
  $api_response_body = "{\"na\":\"na\",\"na\":\"na\",\"na\":\"na\",\"na\":\"na\"}";
  break;
  case "Aquaman":
  $api_response_body = "{\"under\":\"the sea\"}";
  break;
  case "Superman":
  $api_response_body = "{\"up up\":\"away\"}";
  break;
//firefly
case "Jayne":
$api_response_body = "{\"Hero of Canton\":\"man they call Jayne\"}";
break;
case "Wash":
$api_response_body = "{\"leaf on the wind\":\"soar\"}";
break;
case "Mal":
$api_response_body = "{\"aim\":\"misbehave\"}";
break;
//star wars section
case "Yoda":
$api_response_body = "{\"Do\":\"Do not\"}";
break;
case "Han":
$api_response_body = "{\"shoots\":\"first\"}";
break;
case "Leia":
$api_response_body = "{\"Love\":\"you\",\"I\":\"know\"}";
break;
case "death star":
$api_response_body = "{\"moon\":\"no\"}";
break;
case "R2D2":
$api_response_body = "{\"bleep\":\"bloop\",\"blop\":\"boop\"}";
break;
case "Lando":
$api_response_body = "{\"slimy\":\"double-crossing\",\"no-good\":\"swindler\"}";
break;
case "Luke":
$api_response_body = "{\"father\":\"Vader\",\"possible\":\"no\"}";
break;
case "Akbar":
$api_response_body = "{\"trap\":\"y\"}";
break;
case "Jabba":
$api_response_body = "{\"Chool kanya wee\":\"shaja mee-choo\"}";
break;
//simpsons section
case "Burns":
$api_response_body = "{\"Release\":\"hounds\"}";
break;
case "Dr. Nick":
$api_response_body = "{\"Hi\":\"everybody\"}";
break;
case "Nelson":
$api_response_body = "{\"Haw\":\"Ha\"}";
break;
//futurama section
case "Farnsworth":
$api_response_body = "{\"Good\":\"News\"}";
break;
case "Fry":
$api_response_body = "{\"walking\":\"sunshiiiine\",\"whoooa\":\"oooaahh\"}";
break;

//random
  case "test":
  $api_response_body = "{\"test????? booooring\":\"try some comic book or sci-fi chracters or something fun\"}";
  break;
  case "Captain Planet":
  $api_response_body = "{\"our\":\"hero\",\"polution\":\"0\"}";
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

  case "Spam":
  $api_response_body = "{\"egg\":\"bacon\",\"egg\":[\"sausage\",\"bacon\"],\"egg\":\"Spam\",\"egg\":[\"bacon\",\"Spam\"],\"egg\":[\"bacon\",\"sausage\",\"Spam\"],\"Spam\":[\"bacon\",\"sausage\",\"Spam\"],\"Spam\":[\"egg\",\"Spam\",\"Spam\",\"bacon\",\"Spam\"],\"Spam\":[\"Spam\",\"Spam\",\"egg\",\"Spam\"],\"Spam\":[\"Spam\",\"Spam\",\"Spam\",\"Spam\",\"Spam\",\"baked beans\",\"Spam\",\"Spam\",\"Spam\",\"Spam\"],\"Lobster Thermidor aux crevettes with a Mornay sauce, garnished with truffle pâté, brandy and a fried egg on top\":\"Spam\"}";
  break;

}


?>
