<?php

class HighscopeTheme extends Theme {

	protected $scripts = array(
		array(
			"src" => "https://code.jquery.com/jquery-3.4.1.slim.min.js",
			"integrity" => "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n",
			"crossorigin" => "anonymous",
			"active" => true
		),
		array(
			"src" => "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",
			"integrity" => "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo",
			"crossorigin" => "anonymous",
			"active" => true
		),
		array(
			"src" => "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",
			"integrity" => "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6",
			"crossorigin" => "anonymous",
			"active" => false
		),
		
		
		array(
			"src" => "/content/libraries/jquery/jquery-1.11.0-min.js"
		),
		
		array(
			"src" => "/content/libraries/react/react-16.12.0-development.js"
		),
		array(
			"src" => "/content/libraries/react/react-16.12.0-dom-development.js"
		),
		array(
			"src" => "/content/libraries/react/babel-6.26.0-standalone.js"
		),
		array(
			"src" => "/content/libraries/core/Callout.js"
		),
		array(
			"src" => "/content/libraries/core/Repository.js"
		),
		array (
			"src" => "/content/libraries/view/view.js"
		),
		array(
			"src" => "/content/libraries/view/modal.js"
		),
		array(
			"src" => "/content/themes/highscope/js/sidebar.js"
		)
	);

	
	public function __construct() {
		parent::__construct("default");
		
		// $this->addScripts($this->getThemeScripts());
		$this->addStyles($this->getThemeStyles());
	}


	public function addContent($content = '') {
		$this->content = $content;
	}

	public function current_user($returnResponse = false){
		$connectedApp = "letter-links";
		$flow = "webserver";//set globally
		//$_SESSION["connecte"][$flow]["user"];
		return \User::getUserFromSession($connectedApp,$flow);
	}

	/**
	 * Load a template by name; also a shortcut to get the scripts/styles, too.
	 */
	public function render($content) {

		$template = new Template("html");

		$user = current_user() ?? null;

		return $template->render(array(
			"content" => $content,
			"scripts" => self::pageScripts($this->scripts),
			"styles" => self::pageStyles($this->styles),
			"user" => $user
			)
		);
	}

	public function getThemeStyles() {
	
		$path = "/content/themes/highscope";
		
		
		$styles = array(
			array(
				"active" => false,
				"rel" => "stylesheet",
				"href" => "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",
				"integrity" => "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh",
				"crossorigin" => "anonymous"
			),
			array(
				"active" => true,
				"href" => $path . "/css/resets.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/structure.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/ux.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/responsive.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/main-menu.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/modal.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/tables.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/side-menu.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/headings.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/highscope.css?bust=001"
			)
		);
	
		return $styles;
	}
	
}