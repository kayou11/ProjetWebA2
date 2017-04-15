<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_77e39a3c6debb4adbc83a751cd4f72322d353e9895d7c4364cdf6cb722bdc099 extends Twig_Template
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
        $__internal_b4996f03df0765c732bc1c1f308be4f095bf223dde2fdfd66025385ed764f160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4996f03df0765c732bc1c1f308be4f095bf223dde2fdfd66025385ed764f160->enter($__internal_b4996f03df0765c732bc1c1f308be4f095bf223dde2fdfd66025385ed764f160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_ca046fbd660203c90292666240c5246e5729ebc0b57ec34678d368ce2597acb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca046fbd660203c90292666240c5246e5729ebc0b57ec34678d368ce2597acb7->enter($__internal_ca046fbd660203c90292666240c5246e5729ebc0b57ec34678d368ce2597acb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b4996f03df0765c732bc1c1f308be4f095bf223dde2fdfd66025385ed764f160->leave($__internal_b4996f03df0765c732bc1c1f308be4f095bf223dde2fdfd66025385ed764f160_prof);

        
        $__internal_ca046fbd660203c90292666240c5246e5729ebc0b57ec34678d368ce2597acb7->leave($__internal_ca046fbd660203c90292666240c5246e5729ebc0b57ec34678d368ce2597acb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
