<?php

namespace PL\System;

/**
 * Class Seo
 * @package PL\System
 */
class Seo
{
    private static $instance = null;
    private static $title;
    private static $description;
    private static $keywords;
    private static $tag_h;
    private $variables = [];

    private function __construct() {}

    /**
     * @return null|Seo
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @param mixed $title
     */
    public static function setTitle($title)
    {
        self::$title = $title;
    }

    /**
     * @param mixed $description
     */
    public static function setDescription($description)
    {
        self::$description = $description;
    }

    /**
     * @param mixed $keywords
     */
    public static function setKeywords($keywords)
    {
        self::$keywords = $keywords;
    }

    /**
     * @param $h1
     */
    public static function setH1($h1)
    {
        self::$tag_h = $h1;
    }

    /**
     * @param $name
     * @param $value
     */
    public function setVariable($name, $value)
    {
        if (!is_callable($value)) {
            $value = function () use ($value) { return $value; };
        }

        $this->variables[$name] = $value;
    }

    /**
     * @param array $variables
     */
    public function setVariables($variables = [])
    {
        if (empty($variables)) return;

        foreach ($variables as $name => $variable) {
            $this->setVariable($name, $variable);
        }
    }

    /**
     * @param $name
     * @return mixed|string
     */
    public function getVariable($name)
    {
        $name = str_replace(['{', '}'], '', $name);
        return isset($this->variables[$name]) ? $this->variables[$name]() : '';
    }

    /**
     * @param $text
     * @return mixed|string
     */
    public function replaceVariables($text)
    {
        if (empty($text) || !is_string($text)) return '';

        if (preg_match_all('#(\{[a-zA-Z0-9_\.-]+\})#', $text, $matches)) {
            foreach (reset($matches) as $variable) {
                $replace = $this->getVariable($variable);
                $text = str_replace($variable, $replace, $text);
            }
        }

        return $text;
    }

    public static function set()
    {
        global $APPLICATION;

        if (!empty(self::$title)) {
            $APPLICATION->SetPageProperty('title', self::$title);
        }

        if (!empty(self::$description)) {
            $APPLICATION->SetPageProperty('description', self::$description);
        }

        if (!empty(self::$keywords)) {
            $APPLICATION->SetPageProperty('keywords', self::$keywords);
        }

        if (!empty(self::$tag_h)) {
            $APPLICATION->SetPageProperty('tag_h', self::$tag_h);
        }
    }

    /**
     * @param $property_id
     * @param bool $default_value
     */
    public static function showH1($default_value = false)
    {
        global $APPLICATION;
        $APPLICATION->AddBufferContent([&$APPLICATION, 'GetProperty'], 'tag_h', $default_value);
    }
}