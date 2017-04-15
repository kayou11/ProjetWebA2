<?php

/* SyliusUiBundle:Grid/Field:nameAndDescription.html.twig */
class __TwigTemplate_b147a81122157ac5c4f944989c3b1a177b1733bba8387766b722d77739bad2ef extends Twig_Template
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
        $__internal_03ca6b73018ba5c2b6f28efb32f9b353be209520335931dbb8373ac6340c8387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ca6b73018ba5c2b6f28efb32f9b353be209520335931dbb8373ac6340c8387->enter($__internal_03ca6b73018ba5c2b6f28efb32f9b353be209520335931dbb8373ac6340c8387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:nameAndDescription.html.twig"));

        $__internal_f86527a51dcadb6ab842ef1f36ab5b6835905f627afa6e11f78c6179cbf4612f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86527a51dcadb6ab842ef1f36ab5b6835905f627afa6e11f78c6179cbf4612f->enter($__internal_f86527a51dcadb6ab842ef1f36ab5b6835905f627afa6e11f78c6179cbf4612f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:nameAndDescription.html.twig"));

        // line 1
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "name", array()), "html", null, true);
        echo "</strong>
";
        // line 2
        if ( !twig_test_empty($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "description", array()))) {
            // line 3
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "description", array()), "html", null, true);
            echo "</p>
";
        }
        
        $__internal_03ca6b73018ba5c2b6f28efb32f9b353be209520335931dbb8373ac6340c8387->leave($__internal_03ca6b73018ba5c2b6f28efb32f9b353be209520335931dbb8373ac6340c8387_prof);

        
        $__internal_f86527a51dcadb6ab842ef1f36ab5b6835905f627afa6e11f78c6179cbf4612f->leave($__internal_f86527a51dcadb6ab842ef1f36ab5b6835905f627afa6e11f78c6179cbf4612f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:nameAndDescription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<strong>{{ data.name }}</strong>
{% if data.description is not empty %}
    <p>{{ data.description }}</p>
{% endif %}
", "SyliusUiBundle:Grid/Field:nameAndDescription.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Field/nameAndDescription.html.twig");
    }
}
