<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 14/11/18
 * Time: 9:59 PM
 */

namespace Traits;

class series extends mobile
{
    use battery, camera;

    public function seriesFunc()
    {
        return 'Galaxy';
    }
}