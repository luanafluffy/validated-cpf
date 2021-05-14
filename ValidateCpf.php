<?php
// Cenário: validar sistema que recebe apenas o numero de CPF com 11 digitos, retornando true ou false

class ValidateCpfTest
{
    public const CPF_SIZE_DEFAULT = 11;

    private function calculatorCpfDigit(array $cpf): int
    {
        $sumDigit = 0;
        foreach ($cpf as $index => $digit) {
            $multiplicationResult = $index * $digit;

            $sumDigit += $multiplicationResult;
        }

        $restTotal = ($sumDigit * 10) % ValidateCpfTest::CPF_SIZE_DEFAULT;
        $subtractionDigit = ValidateCpfTest::CPF_SIZE_DEFAULT - $restTotal;

        return $subtractionDigit;
    }

    public function validateCPF(string $cpf): bool
    {
        $sizeActual = count_chars($cpf);

        if ($sizeActual != ValidateCpfTest::CPF_SIZE_DEFAULT) {
            throw new \Exception("O CPF '$cpf' é inválido!");
        }

        $headCpf = [
            10 => $cpf[0],
            9 => $cpf[1],
            8 => $cpf[2],
            7 => $cpf[3],
            6 => $cpf[4],
            5 => $cpf[5],
            4 => $cpf[6],
            3 => $cpf[7],
            2 => $cpf[8]
        ];
        $resultTotalDigit1 = $this->calculatorCpfDigit($headCpf);

        $twoVerifyingDigits = [$cpf[9], $cpf[10]];
        if ($resultTotalDigit1 != $twoVerifyingDigits[0]) {
            return false;
        }

        $headCpf = [
            11 => $cpf[0],
            10 => $cpf[1],
            9 => $cpf[2],
            8 => $cpf[3],
            7 => $cpf[4],
            6 => $cpf[5],
            5 => $cpf[6],
            4 => $cpf[7],
            3 => $cpf[8],
            2 => $cpf[9]
        ];
        $resultTotalDigit2 = $this->calculatorCpfDigit($headCpf);

        if ($resultTotalDigit2 != $twoVerifyingDigits[1]) {
            return false;
        }

        return true;
    }
}
