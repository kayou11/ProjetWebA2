<?php

/* SonataAdminBundle:Helper:short-object-description.html.twig */
class __TwigTemplate_1912b2d1f67921b67f87ec5cdcc25f0fdbfb221a3431119f00749c42334c7b38 extends Twig_Template
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
        $__internal_9e77bb5b3ffb1133e69382abcc9969da5c3572d98a23f1d9c0f52e6f576ab8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e77bb5b3ffb1133e69382abcc9969da5c3572d98a23f1d9c0f52e6f576ab8a2->enter($__internal_9e77bb5b3ffb1133e69382abcc9969da5c3572d98a23f1d9c0f52e6f576ab8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:short-object-description.html.twig"));

        $__internal_9734b8da51602c8b30d5b23b51581da95449098e7481dd336e6157311618bd27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9734b8da51602c8b30d5b23b51581da95449098e7481dd336e6157311618bd27->enter($__internal_9734b8da51602c8b30d5b23b51581da95449098e7481dd336e6157311618bd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:short-object-description.html.twig"));

        // line 1
        echo "<span class=\"inner-field-short-description\">
    ";
        // line 2
        if ((((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 2, $this->getSourceContext()); })()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 2, $this->getSourceContext()); })()), "hasRoute", array(0 => "edit"), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 2, $this->getSourceContext()); })()), "hasAccess", array(0 => "edit"), "method"))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 3, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 3, $this->getSourceContext()); })()), 2 => (isset($context["link_parameters"]) || array_key_exists("link_parameters", $context) ? $context["link_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "link_parameters" does not exist.', 3, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\" target=\"new\">";
            echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new Twig_Error_Runtime('Variable "description" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new Twig_Error_Runtime('Variable "description" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</span>
";
        
        $__internal_9e77bb5b3ffb1133e69382abcc9969da5c3572d98a23f1d9c0f52e6f576ab8a2->leave($__internal_9e77bb5b3ffb1133e69382abcc9969da5c3572d98a23f1d9c0f52e6f576ab8a2_prof);

        
        $__internal_9734b8da51602c8b30d5b23b51581da95449098e7481dd336e6157311618bd27->leave($__internal_9734b8da51602c8b30d5b23b51581da95449098e7481dd336e6157311618bd27_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:short-object-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  38 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"inner-field-short-description\">
    {% if object and admin.hasRoute('edit') and admin.hasAccess('edit') %}
        <a href=\"{{ admin.generateObjectUrl('edit', object, link_parameters) }}\" target=\"new\">{{ description }}</a>
    {% else %}
        {{ description }}
    {% endif %}
</span>
", "SonataAdminBundle:Helper:short-object-description.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Helper/short-object-description.html.twig");
    }
}
