<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_640b2087498b9b34397f57ce891e6c525771ac08c436a7e9b84d8353277126fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ca2b7525c8e2b1fddc56d20c7a622f796ba866cc9cb9355e5929d38ab2e82a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca2b7525c8e2b1fddc56d20c7a622f796ba866cc9cb9355e5929d38ab2e82a9->enter($__internal_7ca2b7525c8e2b1fddc56d20c7a622f796ba866cc9cb9355e5929d38ab2e82a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $__internal_572f591ff1bec8c15bf98212efe321e0818b3afc6c6ffc889532b32f8d0617c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572f591ff1bec8c15bf98212efe321e0818b3afc6c6ffc889532b32f8d0617c2->enter($__internal_572f591ff1bec8c15bf98212efe321e0818b3afc6c6ffc889532b32f8d0617c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca2b7525c8e2b1fddc56d20c7a622f796ba866cc9cb9355e5929d38ab2e82a9->leave($__internal_7ca2b7525c8e2b1fddc56d20c7a622f796ba866cc9cb9355e5929d38ab2e82a9_prof);

        
        $__internal_572f591ff1bec8c15bf98212efe321e0818b3afc6c6ffc889532b32f8d0617c2->leave($__internal_572f591ff1bec8c15bf98212efe321e0818b3afc6c6ffc889532b32f8d0617c2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
", "SonataAdminBundle:Core:create_button.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Core/create_button.html.twig");
    }
}
