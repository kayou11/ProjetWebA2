<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_d6d5f062ece384548adbdba268b21fc8195146905171358fdd73da2d46011f5d extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a295bf42221839c373fcfaacac59a7294bb54210c52487387325ed067b83db0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a295bf42221839c373fcfaacac59a7294bb54210c52487387325ed067b83db0c->enter($__internal_a295bf42221839c373fcfaacac59a7294bb54210c52487387325ed067b83db0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $__internal_ddad1ca245e82634608d529c78da9ac223f228e4554c9f6fcac6d24dae721054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddad1ca245e82634608d529c78da9ac223f228e4554c9f6fcac6d24dae721054->enter($__internal_ddad1ca245e82634608d529c78da9ac223f228e4554c9f6fcac6d24dae721054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a295bf42221839c373fcfaacac59a7294bb54210c52487387325ed067b83db0c->leave($__internal_a295bf42221839c373fcfaacac59a7294bb54210c52487387325ed067b83db0c_prof);

        
        $__internal_ddad1ca245e82634608d529c78da9ac223f228e4554c9f6fcac6d24dae721054->leave($__internal_ddad1ca245e82634608d529c78da9ac223f228e4554c9f6fcac6d24dae721054_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
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

{% extends base_template %}
", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_sonata_type_immutable_array.html.twig");
    }
}
