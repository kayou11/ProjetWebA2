<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_12b4bad4594e15b21f425af681edd90fc94a3f8739bdb8f95390c6eec94b6293 extends Twig_Template
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
        $__internal_6a7ee075327b5e3070ac61617f5db6ef1752b62c005847ec04396740993a6ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7ee075327b5e3070ac61617f5db6ef1752b62c005847ec04396740993a6ebe->enter($__internal_6a7ee075327b5e3070ac61617f5db6ef1752b62c005847ec04396740993a6ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_2749b6d455f5c74ca3d7e1bffd5ae19eaa5c258024f85346963c8b88fcaf1f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2749b6d455f5c74ca3d7e1bffd5ae19eaa5c258024f85346963c8b88fcaf1f80->enter($__internal_2749b6d455f5c74ca3d7e1bffd5ae19eaa5c258024f85346963c8b88fcaf1f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_6a7ee075327b5e3070ac61617f5db6ef1752b62c005847ec04396740993a6ebe->leave($__internal_6a7ee075327b5e3070ac61617f5db6ef1752b62c005847ec04396740993a6ebe_prof);

        
        $__internal_2749b6d455f5c74ca3d7e1bffd5ae19eaa5c258024f85346963c8b88fcaf1f80->leave($__internal_2749b6d455f5c74ca3d7e1bffd5ae19eaa5c258024f85346963c8b88fcaf1f80_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
