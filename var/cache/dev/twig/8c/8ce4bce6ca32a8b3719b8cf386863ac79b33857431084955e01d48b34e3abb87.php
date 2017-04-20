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
        $__internal_0ba14688e8420c319d8ead5efab11b8cc7328b571416b75fb5d5b652e9b30c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba14688e8420c319d8ead5efab11b8cc7328b571416b75fb5d5b652e9b30c7f->enter($__internal_0ba14688e8420c319d8ead5efab11b8cc7328b571416b75fb5d5b652e9b30c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_c50a8ca15bbfb1c49fc223135c787169cb576bb1ede34848617a6dea60e3213f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50a8ca15bbfb1c49fc223135c787169cb576bb1ede34848617a6dea60e3213f->enter($__internal_c50a8ca15bbfb1c49fc223135c787169cb576bb1ede34848617a6dea60e3213f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ba14688e8420c319d8ead5efab11b8cc7328b571416b75fb5d5b652e9b30c7f->leave($__internal_0ba14688e8420c319d8ead5efab11b8cc7328b571416b75fb5d5b652e9b30c7f_prof);

        
        $__internal_c50a8ca15bbfb1c49fc223135c787169cb576bb1ede34848617a6dea60e3213f->leave($__internal_c50a8ca15bbfb1c49fc223135c787169cb576bb1ede34848617a6dea60e3213f_prof);

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
