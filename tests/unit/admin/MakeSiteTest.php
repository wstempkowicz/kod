<?php
    declare(strict_types=1);
 
    use PHPUnit\Framework\TestCase;

    class FromGeneratorTest extends TestCase
    {
        public function testGeneratedClassStructure(array $element)
        {
            foreach(FROM_ELEMENTS as $element)
            {
                $formElement = new GenerateFormElement($element);
                $this->assertSame('Hello, Alice!', $formElement->);
            }
            
        }