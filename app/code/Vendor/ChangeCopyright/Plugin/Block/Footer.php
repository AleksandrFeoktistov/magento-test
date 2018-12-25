<?php

namespace Vendor\ChangeCopyright\Plugin\Block;

class Footer
{
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
      return "Castomized copiright!";
    }
}
