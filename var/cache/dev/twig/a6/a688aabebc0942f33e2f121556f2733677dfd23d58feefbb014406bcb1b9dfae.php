<?php

/* SyliusUiBundle:Grid/Field:position.html.twig */
class __TwigTemplate_b3af6c1c58676b3567d6526adc4ff6f4c72860e246c8e892841ef559ab9a0e20 extends Twig_Template
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
        $__internal_b947a6e1a78fef48ede3b037b283bdb76b8309317f227c57abbe8260d133c6c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b947a6e1a78fef48ede3b037b283bdb76b8309317f227c57abbe8260d133c6c2->enter($__internal_b947a6e1a78fef48ede3b037b283bdb76b8309317f227c57abbe8260d133c6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:position.html.twig"));

        $__internal_a424b6e96706897f587be4e93928211162a34c00b3c93c37ac0dfb9da88909b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a424b6e96706897f587be4e93928211162a34c00b3c93c37ac0dfb9da88909b4->enter($__internal_a424b6e96706897f587be4e93928211162a34c00b3c93c37ac0dfb9da88909b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:position.html.twig"));

        // line 1
        echo "<div style=\"text-align: center;\"><span class=\"ui circular label\">";
        echo twig_escape_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), "html", null, true);
        echo "</span></div>
";
        
        $__internal_b947a6e1a78fef48ede3b037b283bdb76b8309317f227c57abbe8260d133c6c2->leave($__internal_b947a6e1a78fef48ede3b037b283bdb76b8309317f227c57abbe8260d133c6c2_prof);

        
        $__internal_a424b6e96706897f587be4e93928211162a34c00b3c93c37ac0dfb9da88909b4->leave($__internal_a424b6e96706897f587be4e93928211162a34c00b3c93c37ac0dfb9da88909b4_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:position.html.twig";
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
        return new Twig_Source("<div style=\"text-align: center;\"><span class=\"ui circular label\">{{ data }}</span></div>
", "SyliusUiBundle:Grid/Field:position.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Field/position.html.twig");
    }
}
