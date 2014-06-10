<?php
namespace wcf\system\bbcode;
use wcf\system\WCF;

/**
 * Parses the [box] bbcode tag.
 * 
 * @author	CLS-Design.com
 * @copyright	CLS-Design,cin
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.cls-design.box.bbcode
 * @subpackage	system.bbcode
 * @category	Community Framework
 */
class SmartBoxBBCode extends AbstractBBCode {
	/**
	 * @see	\wcf\system\bbcode\IBBCode::getParsedTag()
	 */
	public function getParsedTag(array $openingTag, $content, array $closingTag, BBCodeParser $parser) {
		if ($parser->getOutputType() == 'text/html') {
			WCF::getTPL()->assign(array(
				'content' => $content,
				'attribute1' => (!empty($openingTag['attributes'][0]) ? $openingTag['attributes'][0] : ''),
				'attribute2' => (!empty($openingTag['attributes'][1]) ? $openingTag['attributes'][1] : ''),
				'attribute3' => (!empty($openingTag['attributes'][2]) ? $openingTag['attributes'][2] : '')
			));
			return WCF::getTPL()->fetch('smartBoxBBCodeTag');
		}
		if ($parser->getOutputType() == 'text/simplified-html') {
			return WCF::getLanguage()->getDynamicVariable('wcf.bbcode.smartBox.text', array('content' => $content));
		}
	}
}
