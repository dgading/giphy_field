<?php

namespace Drupal\Tests\gif_field\Unit;

use Drupal\Tests\UnitTestCase;
use GuzzleHttp\Client;
use Drupal\gif_field\Controller\GiphyAutocompleteController;
use Drupal\Core\Site\Settings;

/**
 * GiphyAutocomplete unit test.
 *
 * @ingroup data_provider
 *
 * @group data_provider
 */
class GiphyAutocompleteTest extends UnitTestCase {

  protected $autocomplete;

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
    $client = new Client();
    $settings = new Settings(['giphy_api_key' => 'test_blah']);
    $this->$autocomplete = new GiphyAutocompleteController($client, $settings);
  }

  /**
   * Fail if not 200.
   *
   * @todo create local mock data.
   */
  public function testIsValidResponse() {}

  /**
   * Fail if not 200.
   *
   * @todo create local mock data.
   */
  public function testIsValidResponse() {}

}
