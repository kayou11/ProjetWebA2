<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_03212a3b5df5066faef3b8ea208e7c73bfa182d6158f35241d0b2e6683f9ce48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05a9030c27a77fe5dd2e2e43c3d232cf8a7c7e2b0c0e634fda68ae8e29ef8171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a9030c27a77fe5dd2e2e43c3d232cf8a7c7e2b0c0e634fda68ae8e29ef8171->enter($__internal_05a9030c27a77fe5dd2e2e43c3d232cf8a7c7e2b0c0e634fda68ae8e29ef8171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $__internal_84f0d9d9517b323895a9c9e733519364defe64b0155da08fecb348bc3e59b48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f0d9d9517b323895a9c9e733519364defe64b0155da08fecb348bc3e59b48b->enter($__internal_84f0d9d9517b323895a9c9e733519364defe64b0155da08fecb348bc3e59b48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05a9030c27a77fe5dd2e2e43c3d232cf8a7c7e2b0c0e634fda68ae8e29ef8171->leave($__internal_05a9030c27a77fe5dd2e2e43c3d232cf8a7c7e2b0c0e634fda68ae8e29ef8171_prof);

        
        $__internal_84f0d9d9517b323895a9c9e733519364defe64b0155da08fecb348bc3e59b48b->leave($__internal_84f0d9d9517b323895a9c9e733519364defe64b0155da08fecb348bc3e59b48b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5d4dc822bc218c8f1239752a859efb2b6bbda841517becc472c023665737a203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4dc822bc218c8f1239752a859efb2b6bbda841517becc472c023665737a203->enter($__internal_5d4dc822bc218c8f1239752a859efb2b6bbda841517becc472c023665737a203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_13c5931de775a4c0c104f8d97c8c00d8f6e65b62d90d7d921a3f51dd874e7e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c5931de775a4c0c104f8d97c8c00d8f6e65b62d90d7d921a3f51dd874e7e7d->enter($__internal_13c5931de775a4c0c104f8d97c8c00d8f6e65b62d90d7d921a3f51dd874e7e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["menu_options"]) || array_key_exists("menu_options", $context) ? $context["menu_options"] : (function () { throw new Twig_Error_Runtime('Variable "menu_options" does not exist.', 15, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_13c5931de775a4c0c104f8d97c8c00d8f6e65b62d90d7d921a3f51dd874e7e7d->leave($__internal_13c5931de775a4c0c104f8d97c8c00d8f6e65b62d90d7d921a3f51dd874e7e7d_prof);

        
        $__internal_5d4dc822bc218c8f1239752a859efb2b6bbda841517becc472c023665737a203->leave($__internal_5d4dc822bc218c8f1239752a859efb2b6bbda841517becc472c023665737a203_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
