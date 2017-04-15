<?php

/* SyliusResourceBundle:Twig:paginate.html.twig */
class __TwigTemplate_5f20be3c1de86f25ddd23ba09932b9411e52342a77ccfea1bd444e58594b0840 extends Twig_Template
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
        $__internal_93ae49ccb9ebfe6933b32720be0bdcf09a11177da1d87040ada5d08b2d3fffc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93ae49ccb9ebfe6933b32720be0bdcf09a11177da1d87040ada5d08b2d3fffc7->enter($__internal_93ae49ccb9ebfe6933b32720be0bdcf09a11177da1d87040ada5d08b2d3fffc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Twig:paginate.html.twig"));

        $__internal_2b413f0c0d2a886edb38fd90104788aa5b1607d1430bda355cf5128a63bec132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b413f0c0d2a886edb38fd90104788aa5b1607d1430bda355cf5128a63bec132->enter($__internal_2b413f0c0d2a886edb38fd90104788aa5b1607d1430bda355cf5128a63bec132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Twig:paginate.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "maxPerPage", array()), "html", null, true);
        echo "&nbsp;
    <i class=\"icon-angle-down\"></i>
</a>

<ul class=\"dropdown-menu pull-left\" role=\"menu\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["limits"] ?? $this->getContext($context, "limits")));
        foreach ($context['_seq'] as $context["limit"] => $context["url"]) {
            // line 8
            echo "    <li>
        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $context["url"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
            echo "</a>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['limit'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
/ ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nbResults", array()), "html", null, true);
        echo "
";
        
        $__internal_93ae49ccb9ebfe6933b32720be0bdcf09a11177da1d87040ada5d08b2d3fffc7->leave($__internal_93ae49ccb9ebfe6933b32720be0bdcf09a11177da1d87040ada5d08b2d3fffc7_prof);

        
        $__internal_2b413f0c0d2a886edb38fd90104788aa5b1607d1430bda355cf5128a63bec132->leave($__internal_2b413f0c0d2a886edb38fd90104788aa5b1607d1430bda355cf5128a63bec132_prof);

    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Twig:paginate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  54 => 12,  43 => 9,  40 => 8,  36 => 7,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
    {{ paginator.maxPerPage }}&nbsp;
    <i class=\"icon-angle-down\"></i>
</a>

<ul class=\"dropdown-menu pull-left\" role=\"menu\">
    {% for limit, url in limits %}
    <li>
        <a href=\"{{ url }}\">{{ limit }}</a>
    </li>
    {% endfor %}
</ul>
/ {{ paginator.nbResults }}
", "SyliusResourceBundle:Twig:paginate.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Resources/views/Twig/paginate.html.twig");
    }
}
