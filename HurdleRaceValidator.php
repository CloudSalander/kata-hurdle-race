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

    public function validateRace(): boolean {

    }

    private function printRaceResult(string $result): void {

    }
}

?>