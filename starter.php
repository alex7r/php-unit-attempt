<?php
/**
 * Copyright (c) 2017. Alexandr Kosarev (http://kosarev.by)
 */

/**
 * Created by Alexandr @ PhpStorm.
 * Date: 26.02.2017 15:01
 */
include_once 'project.php';
$project = System\Project::createProject('My project', 'http://kosarev.by', 1);
var_dump($project);