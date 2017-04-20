<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_a3489c72fdb5f4e31241128b0fba5837b61535012abfb8e0b3de3ac69d7bf404 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_129d5fa79370e9ef6c6fd6c6127179b39dcbf11cba366768fc2e13aa7166fb44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129d5fa79370e9ef6c6fd6c6127179b39dcbf11cba366768fc2e13aa7166fb44->enter($__internal_129d5fa79370e9ef6c6fd6c6127179b39dcbf11cba366768fc2e13aa7166fb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $__internal_ce4dd0d9ed473eadc6e12b2f27282a65a0472d368e0007e41c43bd1588899999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4dd0d9ed473eadc6e12b2f27282a65a0472d368e0007e41c43bd1588899999->enter($__internal_ce4dd0d9ed473eadc6e12b2f27282a65a0472d368e0007e41c43bd1588899999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_129d5fa79370e9ef6c6fd6c6127179b39dcbf11cba366768fc2e13aa7166fb44->leave($__internal_129d5fa79370e9ef6c6fd6c6127179b39dcbf11cba366768fc2e13aa7166fb44_prof);

        
        $__internal_ce4dd0d9ed473eadc6e12b2f27282a65a0472d368e0007e41c43bd1588899999->leave($__internal_ce4dd0d9ed473eadc6e12b2f27282a65a0472d368e0007e41c43bd1588899999_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_50ec65bd81cdcdf36d43ad75e201e1a452bb974f567fe6b701cd9455c62fb66e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ec65bd81cdcdf36d43ad75e201e1a452bb974f567fe6b701cd9455c62fb66e->enter($__internal_50ec65bd81cdcdf36d43ad75e201e1a452bb974f567fe6b701cd9455c62fb66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_aaf1ba2e1c47a5f3d41f328a008d54dafde39e2695be25e7c28cdb366befda1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf1ba2e1c47a5f3d41f328a008d54dafde39e2695be25e7c28cdb366befda1c->enter($__internal_aaf1ba2e1c47a5f3d41f328a008d54dafde39e2695be25e7c28cdb366befda1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_aaf1ba2e1c47a5f3d41f328a008d54dafde39e2695be25e7c28cdb366befda1c->leave($__internal_aaf1ba2e1c47a5f3d41f328a008d54dafde39e2695be25e7c28cdb366befda1c_prof);

        
        $__internal_50ec65bd81cdcdf36d43ad75e201e1a452bb974f567fe6b701cd9455c62fb66e->leave($__internal_50ec65bd81cdcdf36d43ad75e201e1a452bb974f567fe6b701cd9455c62fb66e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
