<?php

/* SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig */
class __TwigTemplate_62df5fcffe81a341b9397eadece4ed74d435a1d8ce77a45411e3d8ebf6aef015 extends Twig_Template
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
        $__internal_abbd4967fbd0739aae1d4cb7cfcfefc3c42a78df99adb724a0f2ca707080d659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abbd4967fbd0739aae1d4cb7cfcfefc3c42a78df99adb724a0f2ca707080d659->enter($__internal_abbd4967fbd0739aae1d4cb7cfcfefc3c42a78df99adb724a0f2ca707080d659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig"));

        $__internal_1e1286f5ba2032ed610c08de4d0c0062d4f325d6e09aa853e07dd944c921b158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1286f5ba2032ed610c08de4d0c0062d4f325d6e09aa853e07dd944c921b158->enter($__internal_1e1286f5ba2032ed610c08de4d0c0062d4f325d6e09aa853e07dd944c921b158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["name"] => $context["attributeType"]) {
            // line 2
            echo "    ";
            $context["createRouteName"] = ((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . "_admin_") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "name", array())) . "_create");
            // line 3
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["createRouteName"] ?? $this->getContext($context, "createRouteName")), array("type" => $context["name"])), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" class=\"item\">
        ";
            // line 4
            $context["label"] = ("sylius.form.attribute_type." . $this->getAttribute($context["attributeType"], "type", array()));
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label"))), "html", null, true);
            echo "
    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['attributeType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_abbd4967fbd0739aae1d4cb7cfcfefc3c42a78df99adb724a0f2ca707080d659->leave($__internal_abbd4967fbd0739aae1d4cb7cfcfefc3c42a78df99adb724a0f2ca707080d659_prof);

        
        $__internal_1e1286f5ba2032ed610c08de4d0c0062d4f325d6e09aa853e07dd944c921b158->leave($__internal_1e1286f5ba2032ed610c08de4d0c0062d4f325d6e09aa853e07dd944c921b158_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  39 => 4,  32 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for name, attributeType in types %}
    {% set createRouteName = metadata.applicationName~'_admin_'~metadata.name~'_create' %}
    <a href=\"{{ path(createRouteName, { 'type': name }) }}\" id=\"{{ name }}\" class=\"item\">
        {% set label = 'sylius.form.attribute_type.' ~ attributeType.type %}
        {{ label|trans }}
    </a>
{% endfor %}
", "SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductAttribute/Types/attributeTypes.html.twig");
    }
}
