<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_621b7c51d16053bca3643ec1abf82fca543b79fc35a9dccbb614e7e71cf1a9d3 extends Twig_Template
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
        $__internal_6e4ba9be86119bfb41c9019b3a7901bf30b2dc55b57a70a0a11ff9431f5e6e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4ba9be86119bfb41c9019b3a7901bf30b2dc55b57a70a0a11ff9431f5e6e5b->enter($__internal_6e4ba9be86119bfb41c9019b3a7901bf30b2dc55b57a70a0a11ff9431f5e6e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2ce39f1412b934ae4c93dbe0e531aad8f204aa0ee72cc68d28d60cfac99d9f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce39f1412b934ae4c93dbe0e531aad8f204aa0ee72cc68d28d60cfac99d9f26->enter($__internal_2ce39f1412b934ae4c93dbe0e531aad8f204aa0ee72cc68d28d60cfac99d9f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6e4ba9be86119bfb41c9019b3a7901bf30b2dc55b57a70a0a11ff9431f5e6e5b->leave($__internal_6e4ba9be86119bfb41c9019b3a7901bf30b2dc55b57a70a0a11ff9431f5e6e5b_prof);

        
        $__internal_2ce39f1412b934ae4c93dbe0e531aad8f204aa0ee72cc68d28d60cfac99d9f26->leave($__internal_2ce39f1412b934ae4c93dbe0e531aad8f204aa0ee72cc68d28d60cfac99d9f26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
