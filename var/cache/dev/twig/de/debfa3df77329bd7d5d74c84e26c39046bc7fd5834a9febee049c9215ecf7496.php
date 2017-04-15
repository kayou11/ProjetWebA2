<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_8c40b956296d4dd1da241bddc0504255da0e3bce2cca818dd071f4a355f23d1e extends Twig_Template
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
        $__internal_d89d50a32fb48cb46e612814c864fc2bc72938acab2708855f687e9b39ab2813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89d50a32fb48cb46e612814c864fc2bc72938acab2708855f687e9b39ab2813->enter($__internal_d89d50a32fb48cb46e612814c864fc2bc72938acab2708855f687e9b39ab2813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e693e9f5b696fe36b8f642eff42995cf1857402056bd787aafb1f32616624aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e693e9f5b696fe36b8f642eff42995cf1857402056bd787aafb1f32616624aad->enter($__internal_e693e9f5b696fe36b8f642eff42995cf1857402056bd787aafb1f32616624aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d89d50a32fb48cb46e612814c864fc2bc72938acab2708855f687e9b39ab2813->leave($__internal_d89d50a32fb48cb46e612814c864fc2bc72938acab2708855f687e9b39ab2813_prof);

        
        $__internal_e693e9f5b696fe36b8f642eff42995cf1857402056bd787aafb1f32616624aad->leave($__internal_e693e9f5b696fe36b8f642eff42995cf1857402056bd787aafb1f32616624aad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
