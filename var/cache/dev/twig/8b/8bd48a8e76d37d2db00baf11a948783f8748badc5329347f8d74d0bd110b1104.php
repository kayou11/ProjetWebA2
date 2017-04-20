<?php

/* SonataAdminBundle:Helper:short-object-description.html.twig */
class __TwigTemplate_c51960098fa7aea8e2f90a6864d730570aa106c07d52fabbffdcee34097b1246 extends Twig_Template
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
        $__internal_f6de5e87f1054c3e6d8f6f981619a2fc00304fd9c4b0eae20536e32ef9cb2281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6de5e87f1054c3e6d8f6f981619a2fc00304fd9c4b0eae20536e32ef9cb2281->enter($__internal_f6de5e87f1054c3e6d8f6f981619a2fc00304fd9c4b0eae20536e32ef9cb2281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:short-object-description.html.twig"));

        $__internal_0ae4db72657937098eb865c7198af72deb2aa50f5300b8075c27bd2d48a39cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae4db72657937098eb865c7198af72deb2aa50f5300b8075c27bd2d48a39cfb->enter($__internal_0ae4db72657937098eb865c7198af72deb2aa50f5300b8075c27bd2d48a39cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:short-object-description.html.twig"));

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
        
        $__internal_f6de5e87f1054c3e6d8f6f981619a2fc00304fd9c4b0eae20536e32ef9cb2281->leave($__internal_f6de5e87f1054c3e6d8f6f981619a2fc00304fd9c4b0eae20536e32ef9cb2281_prof);

        
        $__internal_0ae4db72657937098eb865c7198af72deb2aa50f5300b8075c27bd2d48a39cfb->leave($__internal_0ae4db72657937098eb865c7198af72deb2aa50f5300b8075c27bd2d48a39cfb_prof);

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
