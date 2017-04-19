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
        $__internal_546bad789a860c71f0b241d6f6c98ddcff5f3368000265f695d6a9ded72c4fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546bad789a860c71f0b241d6f6c98ddcff5f3368000265f695d6a9ded72c4fe2->enter($__internal_546bad789a860c71f0b241d6f6c98ddcff5f3368000265f695d6a9ded72c4fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $__internal_f7b9a796a37037e566522c373e6c6448f4734f290b37c707769a802f96ecb300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b9a796a37037e566522c373e6c6448f4734f290b37c707769a802f96ecb300->enter($__internal_f7b9a796a37037e566522c373e6c6448f4734f290b37c707769a802f96ecb300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_546bad789a860c71f0b241d6f6c98ddcff5f3368000265f695d6a9ded72c4fe2->leave($__internal_546bad789a860c71f0b241d6f6c98ddcff5f3368000265f695d6a9ded72c4fe2_prof);

        
        $__internal_f7b9a796a37037e566522c373e6c6448f4734f290b37c707769a802f96ecb300->leave($__internal_f7b9a796a37037e566522c373e6c6448f4734f290b37c707769a802f96ecb300_prof);

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
