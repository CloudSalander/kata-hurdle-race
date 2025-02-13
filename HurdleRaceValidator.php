<?php
class HurdleRaceValidator {
    private array $runnerRace;
    private string $track;

    private const HURDLE = "|";
    private const FLOOR = "_";
    private const FALLEN_HURDLE = "/";
    private const WRONG_JUMP = "X";

    public function __construct(string $track) {
        $this->runnerRace = [];
        $this->track = $track;
    }

    public function setRunnerRace(array $runnerRace): void {
        $this->runnerRace = $runnerRace;
    }

    public function validateRace(): bool {
        $result = $this->track;
        for($i = 0; $i < count($this->runnerRace); ++$i) {
            //TODO: Private aux methods for that ifs
            if($this->track[$i] == self::FLOOR && $this->runnerRace[$i] == "jump") $result[$i] = self::WRONG_JUMP;
            else if($this->track[$i] == self::HURDLE && $this->runnerRace[$i] == "run") $result[$i] = self::FALLEN_HURDLE;
        }
        echo $result;
        return false;
    }

    private function printRaceResult(string $result): void {

    }
}

?>