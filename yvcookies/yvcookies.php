<?php
/**
 * Yatharth Vyas Cookie Plugin
 *
 * @copyright (C) 2018 Open Source Matters, Inc. <https://www.joomla.org>
 * @license GNU General Public License version 2 or later; see LICENSE.txt
 * @since  4.0
 */

defined('_JEXEC') or die;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\WebAsset\WebAssetManager;
/**
 * Cookie manager plugin which sets a new cookie on page load or displays if it already exists
 *
 * @since  4.0
 */
class PlgSystemYVCookies extends CMSPlugin
{
	/**
	 * Application object
	 *
	 * @var    \Joomla\CMS\Application\CMSApplication
	 * @since  3.2
	 */
	protected $app;

	/**
	 * Listener for the `onBeforeRender` event
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onBeforeRender()
	{

		if ($this->app->isClient('administrator'))
		{
			return;
		}

		$cookieName = $this->params->get('yv_cookie_name');

		// Fallback in case someone left the Cookie Input field blank
		if (!$cookieName)
		{
			$cookieName = "YV";
		}

		$cookieValue = $this->app->input->cookie->get($cookieName);

		if ($cookieValue)
		{
			// Add the Modal HTML
			echo '
			<div id="yvcookie-modal" class="yvcookie-modal">
				<div class="yvcookie-modal-content">
					<span class="yvcookie-close">&times;</span>
					<h4> YV Cookie Manager Plugin </h4>
					<hr/>
					Cookie Name: ' . $cookieName . '<br/>
					Cookie Value (DateTime in microseconds): ' . $cookieValue . '<br/>
				</div>
			</div>
			';

			// Load JavaScript
			$this->app->getDocument()->getWebAssetManager()
				->registerAndUseScript('plg_system_yvcookies_js', 'media/plg_system_yvcookies/js/script.js', [], ['defer' => true]);

			// Load CSS
			$this->app->getDocument()->getWebAssetManager()
				->registerAndUseStyle('plg_system_yvcookies_css', 'media/plg_system_yvcookies/css/style.css', [], ['defer' => true]);
		}
		else
		{
			$cookieValue = DateTime::createFromFormat('U.u', microtime(true))->format('Y-m-d | H:i:s.u');
			$lifetime = $this->params->get('yv_cookie_expiry_time');

			// Set Cookie
			$this->app->input->cookie->set(
				$cookieName,
				$cookieValue,
				time() + $lifetime,
				$this->app->get('cookie_path', '/'),
				$this->app->get('cookie_domain', ''),
				$this->app->isHttpsForced(),
				true
			);
		}
	}
}
