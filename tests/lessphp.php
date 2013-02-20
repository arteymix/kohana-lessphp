<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Tests for lessphp port for Kohana framework.
 * 
 * @package LessPHP
 * @category Tests
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class LessPHP_Test extends Unittest_TestCase {

    /**
     * An less example from Bootstrap web framework.
     * @var string
     */
    private $less_example = "
        // Parent container
        .accordion {
          margin-bottom: @baseLineHeight;
        }

        // Group == heading + body
        .accordion-group {
          margin-bottom: 2px;
          border: 1px solid #e5e5e5;
          .border-radius(@baseBorderRadius);
        }
        .accordion-heading {
          border-bottom: 0;
        }
        .accordion-heading .accordion-toggle {
          display: block;
          padding: 8px 15px;
        }

        // General toggle styles
        .accordion-toggle {
          cursor: pointer;
        }

        // Inner needs the styles because you can't animate properly with any styles on the element
        .accordion-inner {
          padding: 9px 15px;
          border-top: 1px solid #e5e5e5;
        }
    ";

    /**
     * Just test if the wrapper works, we assume lessc is already fully tested.
     */
    public function test_less_compiler() {
        $less_compiler = new LessPHP_Compiler();

        $this->assertNotEmpty($less_compiler->compile($this->less_example));
    }

}

?>
