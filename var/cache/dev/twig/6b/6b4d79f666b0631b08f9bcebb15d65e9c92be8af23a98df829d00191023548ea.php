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
        $__internal_af95493e9f9096abbf6656b57101fc9c1ff7ead759e0148172d8059d4869fc3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af95493e9f9096abbf6656b57101fc9c1ff7ead759e0148172d8059d4869fc3d->enter($__internal_af95493e9f9096abbf6656b57101fc9c1ff7ead759e0148172d8059d4869fc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_33c5b6c63bcb95f08aecfdebb9a57e23bc8002d11cbb7868d235a46b03724d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c5b6c63bcb95f08aecfdebb9a57e23bc8002d11cbb7868d235a46b03724d68->enter($__internal_33c5b6c63bcb95f08aecfdebb9a57e23bc8002d11cbb7868d235a46b03724d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af95493e9f9096abbf6656b57101fc9c1ff7ead759e0148172d8059d4869fc3d->leave($__internal_af95493e9f9096abbf6656b57101fc9c1ff7ead759e0148172d8059d4869fc3d_prof);

        
        $__internal_33c5b6c63bcb95f08aecfdebb9a57e23bc8002d11cbb7868d235a46b03724d68->leave($__internal_33c5b6c63bcb95f08aecfdebb9a57e23bc8002d11cbb7868d235a46b03724d68_prof);

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
