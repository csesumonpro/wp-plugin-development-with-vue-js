<?php

namespace WPVideoPlayer;
use WPVideoPlayer\Hooks\Handlers\Activation;

class Application
{
	public function init()
	{
		(new Activation)->handle();
	}
}
