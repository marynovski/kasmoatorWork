<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'faktury_uploader' shared service.

require_once $this->targetDirs[3].'\\src\\AppBundle\\Service\\FileUploader.php';

return $this->services['faktury_uploader'] = new \AppBundle\Service\FileUploader(($this->targetDirs[3].'\\app/../web/uploads/faktury'));
