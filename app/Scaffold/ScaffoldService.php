<?php

namespace Packages\Dev\App\Scaffold;

class ScaffoldService
{
    /**
     * @param  string $name
     *
     * @return string
     */
    public function stub($name)
    {
        $dir = dirname(__FILE__);

        return sprintf(
            '%s/stub/%s',
            substr($dir, 0, strrpos($dir, '/app/')),
            $name
        );
    }
}
