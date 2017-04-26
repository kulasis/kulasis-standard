<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
      $bundles = [
        new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
        new Symfony\Bundle\TwigBundle\TwigBundle(),
        new Symfony\Bundle\AsseticBundle\AsseticBundle(),
        new Symfony\Bundle\MonologBundle\MonologBundle(),
        new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
        new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
        new Kula\Core\Bundle\FrameworkBundle\KulaCoreFrameworkBundle(),
        new Kula\Core\Bundle\ConstituentBundle\KulaCoreConstituentBundle(),
        new Kula\Core\Bundle\LoginBundle\KulaCoreLoginBundle(),
        new Kula\Core\Bundle\SystemBundle\KulaCoreSystemBundle(),
        new Kula\Core\Bundle\QueryBundle\KulaCoreQueryBundle(),
        new Kula\Core\Bundle\HomeBundle\KulaCoreHomeBundle(),
        new Kula\Core\Bundle\BillingBundle\KulaCoreBillingBundle(),
        new Kula\HEd\Bundle\SchoolBundle\KulaHEdSchoolBundle(),
        new Kula\HEd\Bundle\StudentBundle\KulaHEdStudentBundle(),
        new Kula\HEd\Bundle\SchedulingBundle\KulaHEdSchedulingBundle(),
        new Kula\HEd\Bundle\GradingBundle\KulaHEdGradingBundle(),
        new Kula\HEd\Bundle\FinancialAidBundle\KulaHEdFinancialAidBundle()
      ];

      if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
          $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
          $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
          $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
          $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
      }

        return $bundles;
    }
    
    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
