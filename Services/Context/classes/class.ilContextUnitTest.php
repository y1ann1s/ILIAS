<?php

/* Copyright (c) 1998-2010 ILIAS open source, Extended GPL, see docs/LICENSE */

include_once "Services/Context/classes/class.ilContextBase.php";

/** 
 * Service context for unit test
 * 
 * @author Jörg Lützenkirchen <luetzenkirchen@leifos.com>
 * @version $Id$
 * 
 * @ingroup ServicesContext
 */
class ilContextUnitTest extends ilContextBase
{			
	/**
	 * Are redirects supported?
	 * 
	 * @return bool 
	 */
	public static function supportsRedirects()
	{
		return false;
	}
	
	/**
	 * Based on user authentication?
	 *  
	 * @return bool
	 */
	public static function hasUser()
	{
		return true;
	}
	
	/**
	 * Uses HTTP aka browser 
	 * 
	 * @return bool 
	 */
	public static function usesHTTP()
	{
		return false;
	}
	
	/**
	 * Has HTML output
	 *  
	 * @return bool
	 */
	public static function hasHTML()
	{
		return false;
	}
	
	/**
	 * Uses template engine
	 *  
	 * @return bool
	 */
	public static function usesTemplate()
	{
		return false;
	}
	
	/**
	 * Init client
	 *  
	 * @return bool
	 */
	public static function initClient()
	{
		return true;
	}
	
	/**
	 * Try authentication
	 *  
	 * @return bool
	 */
	public static function doAuthentication()
	{
		return false;
	}
}

?>