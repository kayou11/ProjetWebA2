<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a8da0edec0e3468b47d0d1479a6150492cceddc2a17509aba696ef8441a6ce3a extends Twig_Template
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
        $__internal_50e9f04130ac6a58e5c6649dbec6afc7dda2553d8604e7d7db4f0e702aa4167d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e9f04130ac6a58e5c6649dbec6afc7dda2553d8604e7d7db4f0e702aa4167d->enter($__internal_50e9f04130ac6a58e5c6649dbec6afc7dda2553d8604e7d7db4f0e702aa4167d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7d8bc33a6c326540f936719cfbe278a6743f2b2ff8c0bf7db826d7fbeab9ae3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8bc33a6c326540f936719cfbe278a6743f2b2ff8c0bf7db826d7fbeab9ae3b->enter($__internal_7d8bc33a6c326540f936719cfbe278a6743f2b2ff8c0bf7db826d7fbeab9ae3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_50e9f04130ac6a58e5c6649dbec6afc7dda2553d8604e7d7db4f0e702aa4167d->leave($__internal_50e9f04130ac6a58e5c6649dbec6afc7dda2553d8604e7d7db4f0e702aa4167d_prof);

        
        $__internal_7d8bc33a6c326540f936719cfbe278a6743f2b2ff8c0bf7db826d7fbeab9ae3b->leave($__internal_7d8bc33a6c326540f936719cfbe278a6743f2b2ff8c0bf7db826d7fbeab9ae3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
