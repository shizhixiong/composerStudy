<?php
/**
 * Base.php
 * Created on 2020-05-25 16:31
 * Created by shizhixiong@pailifan.com
 */

namespace Shizhixiong\ComposerStudy;

class Base
{
    public function index()
    {
        return ['name' => 'shizhixiong', 'web' => 'blog.shizhixiong.com'];
    }

    public function getName(...$arg)
    {
        return $arg;
    }
}
