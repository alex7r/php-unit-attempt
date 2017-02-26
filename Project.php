<?php
/**
 * Copyright (c) 2017. Alexandr Kosarev (http://kosarev.by)
 */

/**
 * Created by Alexandr @ PhpStorm.
 * Date: 26.02.2017 14:35
 */

namespace System;


class Project
{
    public $id;
    public $title;
    public $url;
    public $published;

    protected function __construct($title, $url, $published)
    {
        $this->id = rand(0, 100);
        $this->title = $title;
        $this->url = $url;
        $this->published = $published;
    }

    public static function createProject($title, $url, $published = 0)
    {
        if (preg_match('/https?:\/\/(?:[^.]*?\.){1,}(?:[^.]*)/i', $url)) {
            $instance = new Project($title, $url, $published);
            return $instance;
        }
        return null;
    }

}