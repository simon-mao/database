<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.org
 * @document https://wiki.hyperf.org
 * @contact  group@hyperf.org
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace HyperfTest\Database\Stubs;

use Hyperf\Database\Model\Model;

class ModelDynamicVisibleStub extends Model
{
    protected $table = 'stub';

    protected $guarded = [];

    public function getVisible()
    {
        return ['name', 'id'];
    }
}