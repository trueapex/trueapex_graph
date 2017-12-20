<?php
/**
 * Created by PhpStorm.
 * User: das
 * Date: 20/12/2017
 * Time: 2:34 PM
 */

namespace Drupal\trueapex_graph;


class Graph {

  /**
   * A simple self-contained function used to demonstrate unit tests.
   *
   * @see SimpletestUnitTestExampleTestCase
   */
  public function render($date_string) {
    if (empty($date_string) || $date_string == '0000-00-00' || $date_string == '0000-00-00 00:00:00') {
      return TRUE;
    }
    return FALSE;
  }
  
}