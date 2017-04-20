<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2273beb8c3eb2b71147cc44d0dc7ea22c1b7ca6d3f4be495f036fbe2138fd234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43e2852f5729e45bf699298c35b5a4d13ea2b1ab9273bcfcf0e35bd4a669b0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e2852f5729e45bf699298c35b5a4d13ea2b1ab9273bcfcf0e35bd4a669b0b0->enter($__internal_43e2852f5729e45bf699298c35b5a4d13ea2b1ab9273bcfcf0e35bd4a669b0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_71f468da7b701997a3f53ad86cbb7b0766672bd844e2593a1861f22d53715bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f468da7b701997a3f53ad86cbb7b0766672bd844e2593a1861f22d53715bdc->enter($__internal_71f468da7b701997a3f53ad86cbb7b0766672bd844e2593a1861f22d53715bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_43e2852f5729e45bf699298c35b5a4d13ea2b1ab9273bcfcf0e35bd4a669b0b0->leave($__internal_43e2852f5729e45bf699298c35b5a4d13ea2b1ab9273bcfcf0e35bd4a669b0b0_prof);

        
        $__internal_71f468da7b701997a3f53ad86cbb7b0766672bd844e2593a1861f22d53715bdc->leave($__internal_71f468da7b701997a3f53ad86cbb7b0766672bd844e2593a1861f22d53715bdc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
