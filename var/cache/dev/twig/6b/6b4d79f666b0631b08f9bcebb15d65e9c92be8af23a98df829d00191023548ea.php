<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_a205a88482f5858a4a5e901e326c8daace2f2f73dba4f4330122c03d56926d64 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42804417ad749b22514d04fb2c9700570f55076891d5f1413fff6ad974987bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42804417ad749b22514d04fb2c9700570f55076891d5f1413fff6ad974987bc3->enter($__internal_42804417ad749b22514d04fb2c9700570f55076891d5f1413fff6ad974987bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_90eba26ffda026ff21a9890069ec438b8e938388136910b3cd86c7449e2249a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90eba26ffda026ff21a9890069ec438b8e938388136910b3cd86c7449e2249a4->enter($__internal_90eba26ffda026ff21a9890069ec438b8e938388136910b3cd86c7449e2249a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42804417ad749b22514d04fb2c9700570f55076891d5f1413fff6ad974987bc3->leave($__internal_42804417ad749b22514d04fb2c9700570f55076891d5f1413fff6ad974987bc3_prof);

        
        $__internal_90eba26ffda026ff21a9890069ec438b8e938388136910b3cd86c7449e2249a4->leave($__internal_90eba26ffda026ff21a9890069ec438b8e938388136910b3cd86c7449e2249a4_prof);

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
