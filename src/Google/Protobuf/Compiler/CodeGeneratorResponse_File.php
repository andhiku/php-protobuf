<?php
/**
 * Auto generated from plugin.proto at 2019-01-07 11:34:00
 *
 * google.protobuf.compiler package
 */

namespace Google\Protobuf\Compiler {
/**
 * File message embedded in CodeGeneratorResponse message
 */
class CodeGeneratorResponse_File extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const INSERTION_POINT = 2;
    const CONTENT = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INSERTION_POINT => array(
            'name' => 'insertion_point',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NAME] = null;
        $this->values[self::INSERTION_POINT] = null;
        $this->values[self::CONTENT] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasName()
    {
        return $this->get(self::NAME) !== null;
    }

    /**
     * Sets value of 'insertion_point' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInsertionPoint($value)
    {
        return $this->set(self::INSERTION_POINT, $value);
    }

    /**
     * Returns value of 'insertion_point' property
     *
     * @return string
     */
    public function getInsertionPoint()
    {
        $value = $this->get(self::INSERTION_POINT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'insertion_point' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInsertionPoint()
    {
        return $this->get(self::INSERTION_POINT) !== null;
    }

    /**
     * Sets value of 'content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent()
    {
        $value = $this->get(self::CONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'content' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContent()
    {
        return $this->get(self::CONTENT) !== null;
    }
}
}