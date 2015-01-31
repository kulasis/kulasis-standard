<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
          new Kula\Core\Bundle\FrameworkBundle\KulaCoreFrameworkBundle(),
          new Kula\Core\Bundle\ConstituentBundle\KulaCoreConstituentBundle(),
          new Kula\Core\Bundle\LoginBundle\KulaCoreLoginBundle(),
          new Kula\Core\Bundle\SystemBundle\KulaCoreSystemBundle(),
          new Kula\Core\Bundle\HomeBundle\KulaCoreHomeBundle(),
          new Kula\HEd\Bundle\SchoolBundle\KulaHEdSchoolBundle(),
          new Kula\HEd\Bundle\StudentBundle\KulaHEdStudentBundle(),
          new Kula\HEd\Bundle\SchedulingBundle\KulaHEdSchedulingBundle(),
          new Kula\HEd\Bundle\GradingBundle\KulaHEdGradingBundle(),
          new Kula\HEd\Bundle\BillingBundle\KulaHEdBillingBundle(),
          new Kula\HEd\Bundle\FinancialAidBundle\KulaHEdFinancialAidBundle(),
          new Symfony\Bundle\TwigBundle\TwigBundle(),
          new Symfony\Bundle\AsseticBundle\AsseticBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
          $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
