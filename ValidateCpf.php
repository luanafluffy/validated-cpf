<?php

class ValidateCpf
{
    public const CPF_SIZE_DEFAULT = 11;

    private function calculatorCpfDigit(array $cpf)
    {
        $sumDigit = 0;
        foreach ($cpf as $index => $digit) {
            $multiplicationResult = (int) $index * (int) $digit;

            $sumDigit += $multiplicationResult;
        }

        $restTotal = ($sumDigit * 10) % ValidateCpf::CPF_SIZE_DEFAULT;

        return $restTotal;
    }

    public function validatedCpf(string $cpf): bool
    {
        $sizeActual = strlen($cpf);
        if ($sizeActual !== ValidateCpf::CPF_SIZE_DEFAULT) {
            return false;
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
        $twoVerifyingDigits = [$cpf[9], $cpf[10]];

        $resultTotalDigit1 = $this->calculatorCpfDigit($headCpf);

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
