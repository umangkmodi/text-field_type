<?php namespace Anomaly\TextFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;
use Collective\Html\HtmlBuilder;

/**
 * Class TextFieldTypePresenter
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class TextFieldTypePresenter extends FieldTypePresenter
{

    /**
     * The HTML builder.
     *
     * @var HtmlBuilder
     */
    protected $html;

    /**
     * Create a new EmailFieldTypePresenter instance.
     *
     * @param HtmlBuilder $html
     * @param             $object
     */
    public function __construct(HtmlBuilder $html, $object)
    {
        $this->html = $html;

        parent::__construct($object);
    }

    /**
     * Return an HTML tel link.
     *
     * @param  null|string $text
     * @param array        $attributes
     * @return null|string
     */
    public function tel($text = null, array $attributes = [])
    {
        if (!$phone = $this->object->getValue()) {
            return null;
        }

        return $this->html->link('tel:' . preg_replace('/\D/', '', $phone), $text ?: $phone, $attributes);
    }
}
