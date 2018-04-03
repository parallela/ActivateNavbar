<?php
class ActiveNavbar{


	/**
	 * Return active or empty
	 * @param type $url 
	 * @return type
	 */
	public function setActive($url)
	{
		return $_SERVER['REQUEST_URI'] == $url ? 'active' : '';
	}

	/**
	 * Return class="active" or empty
	 * @param type $url 
	 * @return type
	 */
	public function setActiveClass($url) 
	{
		return $_SERVER['REQUEST_URI'] == $url ? 'class="active"' : '';
	}

}