<?php
/**
 * Laravel-SirTrevorJs
 *
 * @link https://github.com/caouecs/Laravel-SirTrevorJs
 */

namespace Caouecs\Sirtrevorjs\Converter;

use Caouecs\Sirtrevorjs\Contracts\ConverterInterface;

/**
 * Presentation for Sir Trevor Js
 *
 * @package Caouecs\Sirtrevorjs\Converter
 */
class PresentationConverter extends BaseConverter implements ConverterInterface
{
    /**
     * List of types for presentation
     *
     * @access protected
     * @var array
     */
    protected $types = array(
        "slideshare",
        "issuu"
    );

    /**
     * Slideshare
     *
     * @access public
     * @return string
     */
    public function slideshareToHtml()
    {
        return $this->view("presentation.slideshare", array(
            "remote_id" => $this->data['remote_id']
        ));
    }

    /**
     * Issuu
     *
     * @access public
     * @param array $codejs Array of js
     * @return string
     */
    public function issuuToHtml(&$codejs)
    {
        $codejs['issuu'] = '<script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>';

        return $this->view("presentation.issuu", array(
            "remote_id" => $this->data['remote_id']
        ));
    }
}
