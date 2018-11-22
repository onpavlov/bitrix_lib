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
    private static $text;
    private $variables = [];
    private $app;

    private function __construct() {
        global $APPLICATION;
        $this->app = $APPLICATION;
    }

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
     * @param $text
     */
    public static function setText($text)
    {
        self::$text = $text;
    }

    /**
     * @param $name
     * @param $value
     */
    public function setVariable($name, $value)
    {
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
        return isset($this->variables[$name]) ? $this->variables[$name] : '';
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
        if (!empty(self::$title)) {
            self::getInstance()->app->SetPageProperty('title', self::$title);
        }

        if (!empty(self::$description)) {
            self::getInstance()->app->SetPageProperty('description', self::$description);
        }

        if (!empty(self::$keywords)) {
            self::getInstance()->app->SetPageProperty('keywords', self::$keywords);
        }

        if (!empty(self::$tag_h)) {
            self::getInstance()->app->SetPageProperty('tag_h', self::$tag_h);
        }

        if (!empty(self::$text)) {
            self::getInstance()->app->SetPageProperty('seo_text', self::$text);
        }
    }

    /**
     * @param bool $default_value
     */
    public static function showH1($default_value = false)
    {
        self::getInstance()->app->AddBufferContent([self::getInstance()->app, 'GetProperty'], 'tag_h', $default_value);
    }

    /**
     * @param bool $default_value
     */
    public static function showText($default_value = false)
    {
        self::getInstance()->app->AddBufferContent([self::getInstance()->app, 'GetProperty'], 'seo_text', $default_value);
    }
}