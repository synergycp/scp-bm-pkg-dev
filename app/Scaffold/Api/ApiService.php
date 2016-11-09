<?php

namespace Packages\Dev\App\Scaffold\Api;

use Packages\Dev\App\Scaffold;

class ApiService
{
    /**
     * @var Scaffold\ScaffoldService
     */
    protected $scaffold;

    /**
     * @param Scaffold\ScaffoldService $scaffold
     */
    public function __construct(Scaffold\ScaffoldService $scaffold)
    {
        $this->scaffold = $scaffold;
    }

    /**
     * @param string $parent
     * @param array $var
     */
    public function create($parent, array $var)
    {
        // TODO: stub language

        $path = sprintf(
            '%s/%s',
            $parent,
            $var[ApiVariable::NAME]
        );

        $commands = [
            sprintf(
                'cp -r %s %s && cd %s',
                $this->scaffold->stub('api'),
                $path,
                $path
            ),
            sprintf(
                'find . -print0 | xargs -0 rename "s/%s/%s/g"',
                escapeshellcmd(ApiVariable::NAME),
                escapeshellcmd($var[ApiVariable::NAME])
            ),
        ];

        foreach ($var as $key => $value) {
            $commands[] = sprintf(
                'find . -type f -print0 | xargs -0 sed -i "s/%s/%s/g"',
                escapeshellcmd($key),
                addslashes(escapeshellcmd($value))
            );
        }

        print implode("\n", $commands) . "\n";
    }
}
