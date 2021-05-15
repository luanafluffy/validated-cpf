<?php

class ValidateCpfTest
{
    public function CpfWithLessThan11DigitsErrorTest()
    {
        $obj = new ValidateCpf();

        $cpf = '123';
        $result = $obj->validatedCpf($cpf);

        $this->assertEquals(false, $result);
    }

    public function cpfWithMoreThan11DigitsErrorTest()
    {
        $obj = new ValidateCpf();

        $cpf = '1212312312313212313';
        $result = $obj->validatedCpf($cpf);

        $this->assertEquals(false, $result);
    }

    public function cpfWithPenultimateDigitInvalidErrorTest()
    {
        $obj = new ValidateCpf();

        $cpf = '18131212028';
        $result = $obj->validatedCpf($cpf);

        $this->assertEquals(false, $result);
    }

    public function cpfWithLastDigitInvalidErrorTest()
    {
        $obj = new ValidateCpf();

        $cpf = '18131212061';
        $result = $obj->validatedCpf($cpf);

        $this->assertEquals(false, $result);
    }

    public function cpfWithLastDigitInvalidSuccessTest()
    {
        $obj = new ValidateCpf();

        $cpf = '18131212068';
        $result = $obj->validatedCpf($cpf);

        $this->assertEquals(true, $result);
    }

    private function assertEquals($expectedValue, $actualValue)
    {
        if ($expectedValue != $actualValue) {
            throw new \Exception("Expected $expectedValue but got '$actualValue'");
        }
        echo "Test passed! \n";
    }
}
