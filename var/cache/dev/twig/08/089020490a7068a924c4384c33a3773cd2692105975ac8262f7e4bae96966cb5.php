<?php

/* SonataAdminBundle:CRUD:list__action_delete.html.twig */
class __TwigTemplate_ff45722a0d3f70e90361355b376e46eabca80e730df7349384f589d188c751fa extends Twig_Template
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
        $__internal_be52be011ae8febd53cb3cf93bf7a45f695f1ec240b99b8dac61900c4440ae83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be52be011ae8febd53cb3cf93bf7a45f695f1ec240b99b8dac61900c4440ae83->enter($__internal_be52be011ae8febd53cb3cf93bf7a45f695f1ec240b99b8dac61900c4440ae83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_delete.html.twig"));

        $__internal_3c0a2325d86e1499f901d42d24892002793f047c7762f0fe95ff389350e6143f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0a2325d86e1499f901d42d24892002793f047c7762f0fe95ff389350e6143f->enter($__internal_3c0a2325d86e1499f901d42d24892002793f047c7762f0fe95ff389350e6143f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_delete.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "hasAccess", array(0 => "delete", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 12, $this->getSourceContext()); })())), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "hasRoute", array(0 => "delete"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 13, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default delete_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_be52be011ae8febd53cb3cf93bf7a45f695f1ec240b99b8dac61900c4440ae83->leave($__internal_be52be011ae8febd53cb3cf93bf7a45f695f1ec240b99b8dac61900c4440ae83_prof);

        
        $__internal_3c0a2325d86e1499f901d42d24892002793f047c7762f0fe95ff389350e6143f->leave($__internal_3c0a2325d86e1499f901d42d24892002793f047c7762f0fe95ff389350e6143f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  30 => 13,  28 => 12,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if admin.hasAccess('delete', object) and admin.hasRoute('delete') %}
    <a href=\"{{ admin.generateObjectUrl('delete', object) }}\" class=\"btn btn-sm btn-default delete_link\" title=\"{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'action_delete'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endif %}
", "SonataAdminBundle:CRUD:list__action_delete.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__action_delete.html.twig");
    }
}
