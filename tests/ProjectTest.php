<?php
/**
 * Copyright (c) 2017. Alexandr Kosarev (http://kosarev.by)
 */

/**
 * Created by Alexandr @ PhpStorm.
 * Date: 26.02.2017 15:52
 */

namespace System;

class ProjectTest extends \PHPUnit\Framework\TestCase
{

    public function testProjectCreation()
    {
        $project = Project::createProject('MyTitle', 'http://kosarev.by');
        $bad_project = Project::createProject('MyTitle', 'http://by');

        $this->assertInstanceOf(Project::class, $project);
        $this->assertNull($bad_project);

    }
}
