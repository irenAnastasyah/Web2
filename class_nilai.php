<?php
// class nilai
class Nilai{
    public $nim, $matkul, $uts, $uas, $praktikum;

    // method
    public function __construct($nim, $matkul, $uts, $uas, $praktikum) {
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->uts = $uts;
        $this->uas = $uas;
        $this->praktikum = $praktikum;
    }

    public function Hitung(){
        $rata_rata = ($this->uts + $this->uas + $this->praktikum) / 3;
        $grade = $this->determineGrade($rata_rata);
        $predikat = $this->determinePredikat($grade);
        return "Rata-Rata: $rata_rata, Grade: $grade, Predikat: $predikat";
    }

    private function determineGrade($rata_rata){
        if ($rata_rata < 0 || $rata_rata > 100) {
            return 'I'; // Tidak Ada Grade
        } elseif ($rata_rata >= 85) {
            return 'A';
        } elseif ($rata_rata >= 70) {
            return 'B';
        } elseif ($rata_rata >= 56) {
            return 'C';
        } elseif ($rata_rata >= 36) {
            return 'D';
        } else {
            return 'E';
        }
    }
    
    private function determinePredikat($grade){
        switch ($grade) {
            case 'A':
                return 'Sangat Memuaskan';
                break;
            case 'B':
                return 'Memuaskan';
                break;
            case 'C':
                return 'Cukup';
                break;
            case 'D':
                return 'Kurang';
                break;
            case 'E':
                return 'Sangat Kurang';
                break;
            default:
                return 'Tidak Ada';
                break;
        }
    }
}
?>
