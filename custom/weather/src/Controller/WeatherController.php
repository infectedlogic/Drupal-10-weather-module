<?php

namespace Drupal\weather\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for displaying weather information.
 */
class WeatherController extends ControllerBase {

  /**
   * Display the weather forecast.
   *
   * @return array
   *   Render array for weather forecast.
   */
  public function content() {
    // Fetch weather forecast data and format it.
    // Example data for demonstration purposes.
    $formatted_forecast = [
      [
        'date' => '2024-04-18',
        'average_temperature' => 20,
        'predominant_condition' => 'Sunny',
      ],
      [
        'date' => '2024-04-19',
        'average_temperature' => 18,
        'predominant_condition' => 'Cloudy',
      ],
      [
        'date' => '2024-04-20',
        'average_temperature' => 22,
        'predominant_condition' => 'Rainy',
      ],
    ];

    // Build the render array.
    $build = [
      '#theme' => 'weather_forecast',
      '#forecast' => $formatted_forecast,
      '#attached' => [
        'library' => [
          'weather/weather_css',
        ],
      ],
    ];
    
    return $build;
  }

}
