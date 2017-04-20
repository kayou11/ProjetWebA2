<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_8e5be45bd30debb23608ff9ed647e3a749910b735b57700a963ef6dd6a5ab5f7 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8a4df8a220d24ca9fd5d334c9fb9c540f8ea662846defb1ad9f87697e387008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a4df8a220d24ca9fd5d334c9fb9c540f8ea662846defb1ad9f87697e387008->enter($__internal_b8a4df8a220d24ca9fd5d334c9fb9c540f8ea662846defb1ad9f87697e387008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $__internal_0d4df5d5e5765dde482dca74e5429a856d2339826e2b02a5f2198808fd019596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4df5d5e5765dde482dca74e5429a856d2339826e2b02a5f2198808fd019596->enter($__internal_0d4df5d5e5765dde482dca74e5429a856d2339826e2b02a5f2198808fd019596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8a4df8a220d24ca9fd5d334c9fb9c540f8ea662846defb1ad9f87697e387008->leave($__internal_b8a4df8a220d24ca9fd5d334c9fb9c540f8ea662846defb1ad9f87697e387008_prof);

        
        $__internal_0d4df5d5e5765dde482dca74e5429a856d2339826e2b02a5f2198808fd019596->leave($__internal_0d4df5d5e5765dde482dca74e5429a856d2339826e2b02a5f2198808fd019596_prof);

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
