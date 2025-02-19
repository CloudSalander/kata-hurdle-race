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

    public function validateRaceAndPrintResult(): bool {
        $result = $this->track;
        for($i = 0; $i < count($this->runnerRace); ++$i) {
            if($this->isWrongJump($i)) $result[$i] = self::WRONG_JUMP;
            if($this->isHittingHurdle($i)) $result[$i] = self::FALLEN_HURDLE;
        }
        echo $result;
        if($this->isRightRace($result)) return false;
        return true;
    }

    private function isWrongJump(int $step): bool {
        return $this->track[$step] == self::FLOOR && $this->runnerRace[$step] == "jump";
    }

    private function isHittingHurdle(int $step): bool {
        return $this->track[$step] == self::HURDLE && $this->runnerRace[$step] == "run";
    }

    private function isRightRace(string $result): bool {
        return in_array(self::FALLEN_HURDLE, str_split($result)) 
            || in_array(self::WRONG_JUMP,str_split($result));
    }

}

?>