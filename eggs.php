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
  case "bones":
  $api_response_body = "{\"doctor\":\"damn it\"}";
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
  case "joker":
  $api_response_body = "{\"dance\":\"devil\",\"mooonlight\":\"pale\"}";
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
case "mojo":
$api_response_body = "{\"pray\":\"for mojo\"}";
break;
case "troy":
$api_response_body = "{\"you might remember me from\":[\"The Boatjacking of Supership '79\",\"Calling All Quakers \",\"The Contrabulous Fabtraption of Professor Horatio Hufnagel\",\"Cry Yuma\",\"David versus Super Goliath\",\"Dial M for Murderousness\",\"The Electric Gigolo\",\"The Erotic Adventures of Hercules\",\"Give My Remains to Broadway\",\"Gladys the Groovy Mule\",\"Good-Time Slim, Uncle Doobie, and the Great 'Frisco Freak-Out'\",\"The Greatest Story Ever Hulaed\",\"Here Comes the Coast Guard\",\"Hitler Doesn't Live Here Anymore\",\"Hydro, the Man With the Hydraulic Arms\",\"Leper in the Backfield\",\"Make-Out King of Montana \",\"Meet Joe Blow\",\"The Muppets Go Medieval\",\"\"P\" is for Psycho\",\"Preacher With a Shovel \",\"The President's Neck is Missing\",\"The Revenge of Abe Lincoln\",\"The Seven-Year Old Bitch\",\"Sorry, Wrong Closet\",\"Suddenly Last Supper \",\"They Came to Burgle Carnegie Hall\",\"Today We Kill, Tomorrow We Die\",\"The Verdict Was Mail Fraud\",\"The Wackiest Covered Wagon in the West\",\"Jagged Attraction\",\"Look Who's Still Oinking\",\"60 Minutes of Car Crash Victims\",\"Adjusting Your Self-O-Stat\",\"Alice's Adventure through the Windshield Glass\",\"Alice Doesn't Live Anymore\",\"Birds: Our Fine Feathered Colleagues\",\"The Decapitation of Larry Leadfoot\",\"Designated Drivers: The Lifesaving Nerds\",\"Dig Your Own Grave and Save\",\"Earwigs, Ew!\",\"Firecrackers: The Silent Killer\",\"Fuzzy Bunny's Guide to You-Know-What\",\"Get Confident, Stupid!\",\"The Half-Assed Approach to Foundation Repair\",\"Here Comes the Metric System\",\"Lead Paint: Delicious But Deadly\",\"Locker Room Towel Fights: The Blinding of Larry Driscoll\",\"Man Versus Nature: The Road To Victory\",\"Meat and You – Partners in Freedom\",\"Mommy, What's Wrong With That Man's Face?\",\"Mothballing Your Battleship\",\"Phony Tornado Alerts Reduce Readiness\",\"Shoplifters: BEWARE\",\"Smoke Yourself Thin\",\"Someone's in the Kitchen with DNA!\",\"Two Minus Three Equals Negative Fun\",\"Young Jebediah Springfield\",\"Whoa! Don't Touch Me There!\",\"Alien Nose Job\",\"Carnival of the Stars\",\"Five Fabulous Weeks of The Chevy Chase Show\",\"Let's Save Tony Orlando's House\",\"Out With Gout '88\",\"The Miss American Girl Pageant\",\"The Simpsons 138th Episode Spectacular\",\"The Simpsons Spin-Off Showcase\",\"AfterMannix\",\"America's Funniest Tornadoes\",\"Buck Henderson, Union Buster\",\"Handel with Kare\",\"I Can't Believe They Invented It! \",\"Shortland Street\",\"Son of Sanford and Son\",\"Troy and Company's Summertime Smile Factory\",\"Christmas Ape \",\"Christmas Ape Goes to Summer Camp\"]}";
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
  $api_response_body = "{\"test?????\":\"booooring\",\"try something from\":[\"comic books\",\"tv\",\"movies\",\"songs\",\"random stuff\"]}";
  break;
  case "rick james":
  $api_response_body = "{\"cocaine\":\"hell of a drug\"}";
  break;
  break;
  case "honey badger":
  $api_response_body = "{\"care\":\"don't\"}";
  break;
  case "drago":
  $api_response_body = "{\"Must Break\":\"you\"}";
  break;
  case "bond":
  $api_response_body = "{\"shaken\":\"y\"\"stirred\":\"n\"}";
  break;

  
  //music section
  case "hammer":
  $api_response_body = "{\"touch this\":\"can't\"}";
  break;
  case "vanilla":
  $api_response_body = "{\"baby\":[\"ice\",\"ice\"]}";
  break;
  case "witch doctor":
  $api_response_body = "{\"oo\":\"ee\",\"oo\":\"ah ah\",\"ting\":\"tang\",\"Walla Walla\":\"bing bang\"}";
  case "mash":
  $api_response_body = "{\"monster mash\":\"y\",\"gravyard smash\":\"y\"}";
  break;
  case "8675309":
  $api_response_body = "{\"jenny\":\"jenny\"}";
  break;
  case "back":
  $api_response_body = "{\"baby\":\"got\",\"that\":\"thing up\",\"in\":\"black\",\"in the\":\"saddle again\",\"won't\":\"down\",\"in\":\"the USSR\",\"boys\":\"in town\",\"in the\":\"highlife again\",\"looking out my\":\"door\",\"if I could\":\"time\",,\"if don't look\":\"in anger\"\"in\":\"time\"}";
  break;

//theme songs section
  case "captain planet":
  $api_response_body = "{\"our\":\"hero\",\"polution\":\"0\"}";
  break;
  case "ducktales":
  $api_response_body = "{\"D-d-d-danger\":\"watch behind you\"}";
  break;
  case "darkwing":
  $api_response_body = "{\"Get\":\"dangerous\"}";
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
