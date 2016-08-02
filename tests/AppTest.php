<?php

namespace PhpLinter;

class AppTest extends \PHPUnit_Framework_TestCase
{
    public function testIsValidFuncName()
    {
        $data = '<?php echo "hello";';
        $app = new App($data);
        $isValid = $app->isValidFuncName();

        $this->assertTrue($isValid);
    }
}
