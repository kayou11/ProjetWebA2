<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_27be7c15f2dcdfff51d8ce8ecc0b1383ab627fa36c7610a46c2d904179f7ca1b extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e186989eb5644396f18811b60521f4e19d7817f970470fca6102e3eec128c418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e186989eb5644396f18811b60521f4e19d7817f970470fca6102e3eec128c418->enter($__internal_e186989eb5644396f18811b60521f4e19d7817f970470fca6102e3eec128c418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $__internal_6dcf3e3f9f4b8f9c988fa2b1074c7c0837fd88b55df8292e385a36cc8d968f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcf3e3f9f4b8f9c988fa2b1074c7c0837fd88b55df8292e385a36cc8d968f9b->enter($__internal_6dcf3e3f9f4b8f9c988fa2b1074c7c0837fd88b55df8292e385a36cc8d968f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e186989eb5644396f18811b60521f4e19d7817f970470fca6102e3eec128c418->leave($__internal_e186989eb5644396f18811b60521f4e19d7817f970470fca6102e3eec128c418_prof);

        
        $__internal_6dcf3e3f9f4b8f9c988fa2b1074c7c0837fd88b55df8292e385a36cc8d968f9b->leave($__internal_6dcf3e3f9f4b8f9c988fa2b1074c7c0837fd88b55df8292e385a36cc8d968f9b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_af330a5632ed473ec7a1159fe1bd3a5fe00ce0d075496172d05eb28f3eb13107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af330a5632ed473ec7a1159fe1bd3a5fe00ce0d075496172d05eb28f3eb13107->enter($__internal_af330a5632ed473ec7a1159fe1bd3a5fe00ce0d075496172d05eb28f3eb13107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_da98376d97e3a78807e871b0bb3b511a38840614cb25edb025864f5a1ca8b4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da98376d97e3a78807e871b0bb3b511a38840614cb25edb025864f5a1ca8b4e6->enter($__internal_da98376d97e3a78807e871b0bb3b511a38840614cb25edb025864f5a1ca8b4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["menu"] ?? $this->getContext($context, "menu")), ($context["menu_options"] ?? $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_da98376d97e3a78807e871b0bb3b511a38840614cb25edb025864f5a1ca8b4e6->leave($__internal_da98376d97e3a78807e871b0bb3b511a38840614cb25edb025864f5a1ca8b4e6_prof);

        
        $__internal_af330a5632ed473ec7a1159fe1bd3a5fe00ce0d075496172d05eb28f3eb13107->leave($__internal_af330a5632ed473ec7a1159fe1bd3a5fe00ce0d075496172d05eb28f3eb13107_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "SonataBlockBundle:Block:block_core_menu.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
