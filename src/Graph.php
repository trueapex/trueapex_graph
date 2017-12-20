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
  public function render($entity, $metrics = array()) {
    $entities = array(
      'award_submission',
      'publication',
      'achievement',
      'profile2',
    );
    if (!in_array($entity, $entities)) {
      drupal_set_message('Invalid entity!', 'error');
      return FALSE;
    }

    // Get Google Charts info.
    $charts_info = charts_info();

    // Build chart.
    $chart = array(
      '#type' => 'chart',
      '#chart_type' => 'column',
      '#title' => '',
    );

    // Get data.
    $chart += $this->getData($entity, $metrics);

    $chart['#chart_library'] = 'google';
    $chart['#width'] = 900;
    $chart['#height'] = 300;
    
    return $chart;
  }

  /**
   * Get data for chart to display.
   * 
   * @param $entity
   * @param $metrics
   * @return array
   */
  public function getData($entity, $metrics) {
    $result = array();
    
    return $result;
  }
  
}