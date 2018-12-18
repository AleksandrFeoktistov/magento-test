<?php

namespace Vendor\ChangeCrumb\Plugin\Block;

use \Magento\Theme\Block\Html\Breadcrumbs as MagentoBreadCrumbs;

class Crumb
{
    public function beforeAddCrumb(MagentoBreadCrumbs $subject, $crumbName, $crumbInfo)
    {
        $crumbInfo['label'] .= "(!)";
        return [$crumbName, $crumbInfo];
    }
}
