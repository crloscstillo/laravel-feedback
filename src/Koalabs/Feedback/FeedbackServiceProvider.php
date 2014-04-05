<?php namespace Koalabs\Feedback;

use Illuminate\Support\ServiceProvider;

class FeedbackServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
   * Bootstrap the service provider.
   *
   * @return void
   */
  public function boot()
  {
    $this->package('koalabs/feedback');
  }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('feedback', 'Koalabs\Feedback\Feedback');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
