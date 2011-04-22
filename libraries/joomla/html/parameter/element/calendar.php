<?php
/**
 * @package     Joomla.Platform
 * @subpackage  HTML
 *
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

/**
 * Renders a calendar element
 *
 * @package		Joomla.Platform
 * @subpackage	Parameter
 * @since		11.1
 */
class JElementCalendar extends JElement
{
	/**
	* Element name
	* @var		string
	*/
	protected $_name = 'Calendar';

	public function fetchElement($name, $value, &$node, $control_name)
	{
		// Load the calendar behavior
		JHtml::_('behavior.calendar'); 

		$format	= ($node->attributes('format') ? $node->attributes('format') : '%Y-%m-%d');
		$class	= $node->attributes('class') ? $node->attributes('class') : 'inputbox';
		$id		= $control_name.$name;
		$name	= $control_name.'['.$name.']';

		return JHTML::_('calendar',$value, $name, $id, $format, array('class' => $class));
	}
}
