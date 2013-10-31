<?php

namespace ComputaCenter\ChatterBoxBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ChatterBoxBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}
