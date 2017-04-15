<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_0364d0c18cf7f0074b555b5980298180a3491ff67d23cd26a1d6743d4dd28a43 extends Twig_Template
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
        $__internal_e917174e606510dd95eb7a1852a535f126c16470e65e8e45a23cd613b95f21a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e917174e606510dd95eb7a1852a535f126c16470e65e8e45a23cd613b95f21a9->enter($__internal_e917174e606510dd95eb7a1852a535f126c16470e65e8e45a23cd613b95f21a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2554d32161ffb4a1e2fe38f8623d89aea95b724288212e37f708799a7b2a445e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2554d32161ffb4a1e2fe38f8623d89aea95b724288212e37f708799a7b2a445e->enter($__internal_2554d32161ffb4a1e2fe38f8623d89aea95b724288212e37f708799a7b2a445e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e917174e606510dd95eb7a1852a535f126c16470e65e8e45a23cd613b95f21a9->leave($__internal_e917174e606510dd95eb7a1852a535f126c16470e65e8e45a23cd613b95f21a9_prof);

        
        $__internal_2554d32161ffb4a1e2fe38f8623d89aea95b724288212e37f708799a7b2a445e->leave($__internal_2554d32161ffb4a1e2fe38f8623d89aea95b724288212e37f708799a7b2a445e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
