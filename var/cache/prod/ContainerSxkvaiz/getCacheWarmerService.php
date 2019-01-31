<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache_warmer' shared service.

require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface.php';
require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate.php';

return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['validator.mapping.cache_warmer']) ? $this->services['validator.mapping.cache_warmer'] : $this->load(__DIR__.'/getValidator_Mapping_CacheWarmerService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['router.cache_warmer']) ? $this->services['router.cache_warmer'] : $this->load(__DIR__.'/getRouter_CacheWarmerService.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['annotations.cache_warmer']) ? $this->services['annotations.cache_warmer'] : $this->load(__DIR__.'/getAnnotations_CacheWarmerService.php')) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['twig.cache_warmer']) ? $this->services['twig.cache_warmer'] : $this->load(__DIR__.'/getTwig_CacheWarmerService.php')) && false ?: '_'};
    yield 4 => ${($_ = isset($this->services['twig.template_cache_warmer']) ? $this->services['twig.template_cache_warmer'] : $this->load(__DIR__.'/getTwig_TemplateCacheWarmerService.php')) && false ?: '_'};
    yield 5 => ${($_ = isset($this->services['doctrine.orm.proxy_cache_warmer']) ? $this->services['doctrine.orm.proxy_cache_warmer'] : $this->load(__DIR__.'/getDoctrine_Orm_ProxyCacheWarmerService.php')) && false ?: '_'};
}, 6));
