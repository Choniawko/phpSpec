<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('StringCalculator');
    }

    function it_is_return_0_for_empty_string()
    {
    	$this->Add('')->shouldReturn(0);

    }

    function it_is_return_sum_arguments() {
    	$this->Add('1,2')->shouldReturn(3);
    }

    function it_is_return_1_to_string_1() 
    {
    	$this->Add('1')->shouldReturn(1);
    }

    function it_should_return_sum_for_multinumbers_parameters()
    {
    	$this->Add('3,4,5')->shouldReturn(12);
    	$this->Add('10,10,10,10,10')->shouldReturn(50);
    }

    function it_should_handle_new_lines_between_parameters()
    {
    	$this->Add('1\n2,3')->shouldReturn(6);
    }







}
