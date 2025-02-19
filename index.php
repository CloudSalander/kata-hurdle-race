<?php
include('HurdleRaceValidator.php');
#$race = new HurdleRaceValidator("___||__||__|_");
$race = new HurdleRaceValidator("_|");

#Maybe, begin with 13 elements sample is not the most practical decision :)
#$runnerRace = ["run","run","run","jump","run","run","run","jump","run","run","run","jump","run"];
$runnerRace = ["run","jump"];

$race->setRunnerRace($runnerRace);
var_dump($race->validateRace());

?>