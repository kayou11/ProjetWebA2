<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ceb20b4d9489dfb4b96b0102785ffea9eeae84fb25596d7878a74f19ab01ac08 extends Twig_Template
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
        $__internal_4601d7c17bd918a672894850b0215fc9b791f510a58d5fe05579b26c7ca38b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4601d7c17bd918a672894850b0215fc9b791f510a58d5fe05579b26c7ca38b43->enter($__internal_4601d7c17bd918a672894850b0215fc9b791f510a58d5fe05579b26c7ca38b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_482d0b41fdb21b1d186ec394ab25234dc4f60aa149739fdd8b89b0f0b76c9aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482d0b41fdb21b1d186ec394ab25234dc4f60aa149739fdd8b89b0f0b76c9aeb->enter($__internal_482d0b41fdb21b1d186ec394ab25234dc4f60aa149739fdd8b89b0f0b76c9aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4601d7c17bd918a672894850b0215fc9b791f510a58d5fe05579b26c7ca38b43->leave($__internal_4601d7c17bd918a672894850b0215fc9b791f510a58d5fe05579b26c7ca38b43_prof);

        
        $__internal_482d0b41fdb21b1d186ec394ab25234dc4f60aa149739fdd8b89b0f0b76c9aeb->leave($__internal_482d0b41fdb21b1d186ec394ab25234dc4f60aa149739fdd8b89b0f0b76c9aeb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
