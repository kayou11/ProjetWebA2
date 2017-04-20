<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_2ce61a1bd4557e73d47b92796981805d415475f385df7489c2cfee863c130bc4 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f65fcb7762979bd637daa741e631cf5ebf549d0e54dba352288941e83bd2ba64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65fcb7762979bd637daa741e631cf5ebf549d0e54dba352288941e83bd2ba64->enter($__internal_f65fcb7762979bd637daa741e631cf5ebf549d0e54dba352288941e83bd2ba64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_5bdb6d322b6ba6f9858e90d198787975a7464e25aae621eda9741b5c8a99f5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdb6d322b6ba6f9858e90d198787975a7464e25aae621eda9741b5c8a99f5c4->enter($__internal_5bdb6d322b6ba6f9858e90d198787975a7464e25aae621eda9741b5c8a99f5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f65fcb7762979bd637daa741e631cf5ebf549d0e54dba352288941e83bd2ba64->leave($__internal_f65fcb7762979bd637daa741e631cf5ebf549d0e54dba352288941e83bd2ba64_prof);

        
        $__internal_5bdb6d322b6ba6f9858e90d198787975a7464e25aae621eda9741b5c8a99f5c4->leave($__internal_5bdb6d322b6ba6f9858e90d198787975a7464e25aae621eda9741b5c8a99f5c4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "SonataAdminBundle:CRUD:list_string.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
