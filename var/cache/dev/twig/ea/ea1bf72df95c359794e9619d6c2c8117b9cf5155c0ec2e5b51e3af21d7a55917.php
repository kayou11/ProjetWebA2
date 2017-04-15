<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f15b36167148960fc9f9b674ae8f8d9df4199e600c684bb5e73b87e1446ff92e extends Twig_Template
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
        $__internal_17fbc8f9277bd95c92efe0b825e7742c27fc446785ca9c9b9060aa3cc5f6db23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fbc8f9277bd95c92efe0b825e7742c27fc446785ca9c9b9060aa3cc5f6db23->enter($__internal_17fbc8f9277bd95c92efe0b825e7742c27fc446785ca9c9b9060aa3cc5f6db23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b405c725f6a201aee8a3d8c04d982d93bf56a4c2aee69dbef8c055db5d05e5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b405c725f6a201aee8a3d8c04d982d93bf56a4c2aee69dbef8c055db5d05e5c3->enter($__internal_b405c725f6a201aee8a3d8c04d982d93bf56a4c2aee69dbef8c055db5d05e5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_17fbc8f9277bd95c92efe0b825e7742c27fc446785ca9c9b9060aa3cc5f6db23->leave($__internal_17fbc8f9277bd95c92efe0b825e7742c27fc446785ca9c9b9060aa3cc5f6db23_prof);

        
        $__internal_b405c725f6a201aee8a3d8c04d982d93bf56a4c2aee69dbef8c055db5d05e5c3->leave($__internal_b405c725f6a201aee8a3d8c04d982d93bf56a4c2aee69dbef8c055db5d05e5c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
