<?php

class ExampleTest extends FeatureTestCase
{
   
    function test_basic_example()
    {
        $this->visit('/')
             ->see('Laravel');
    }
}
