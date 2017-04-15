<?php

/* SyliusUiBundle:Grid/Field:logData.html.twig */
class __TwigTemplate_d404030cb59236eba1d051be3231ad9478fe4d8a65d26fdca0087138f396feba extends Twig_Template
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
        $__internal_6083bfaebf719b7bac9755603bfad3a194a6b812f62eb7d3067653f5dddf01ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6083bfaebf719b7bac9755603bfad3a194a6b812f62eb7d3067653f5dddf01ad->enter($__internal_6083bfaebf719b7bac9755603bfad3a194a6b812f62eb7d3067653f5dddf01ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:logData.html.twig"));

        $__internal_6e6e2d2ba38e7eaba3d773948e0d6ddd581c71f30b61b5ad6c1e8252924c9f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6e2d2ba38e7eaba3d773948e0d6ddd581c71f30b61b5ad6c1e8252924c9f57->enter($__internal_6e6e2d2ba38e7eaba3d773948e0d6ddd581c71f30b61b5ad6c1e8252924c9f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:logData.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            if ( !(null === $context["field"])) {
                // line 2
                echo "    <strong>";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["key"]), "html", null, true);
                echo "</strong>: ";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "<br/>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6083bfaebf719b7bac9755603bfad3a194a6b812f62eb7d3067653f5dddf01ad->leave($__internal_6083bfaebf719b7bac9755603bfad3a194a6b812f62eb7d3067653f5dddf01ad_prof);

        
        $__internal_6e6e2d2ba38e7eaba3d773948e0d6ddd581c71f30b61b5ad6c1e8252924c9f57->leave($__internal_6e6e2d2ba38e7eaba3d773948e0d6ddd581c71f30b61b5ad6c1e8252924c9f57_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:logData.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for key, field in data if field is not null %}
    <strong>{{ key|humanize }}</strong>: {{ field }}<br/>
{% endfor %}
", "SyliusUiBundle:Grid/Field:logData.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Field/logData.html.twig");
    }
}
