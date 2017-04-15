<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_a41036f716ce70048f996afffd172aba3988f8ec89318e121a163fe457c44301 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87256e6ae965ae8eaa6093f92049cc61cab57b28bdbda9cfca46f808d3c68de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87256e6ae965ae8eaa6093f92049cc61cab57b28bdbda9cfca46f808d3c68de3->enter($__internal_87256e6ae965ae8eaa6093f92049cc61cab57b28bdbda9cfca46f808d3c68de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $__internal_b2baf35346e0dbb1a179352559afcd49e04ce582607fefa2c7bb2d4227ef9562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2baf35346e0dbb1a179352559afcd49e04ce582607fefa2c7bb2d4227ef9562->enter($__internal_b2baf35346e0dbb1a179352559afcd49e04ce582607fefa2c7bb2d4227ef9562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87256e6ae965ae8eaa6093f92049cc61cab57b28bdbda9cfca46f808d3c68de3->leave($__internal_87256e6ae965ae8eaa6093f92049cc61cab57b28bdbda9cfca46f808d3c68de3_prof);

        
        $__internal_b2baf35346e0dbb1a179352559afcd49e04ce582607fefa2c7bb2d4227ef9562->leave($__internal_b2baf35346e0dbb1a179352559afcd49e04ce582607fefa2c7bb2d4227ef9562_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a010e24df85a7709460da35e6081047c54b74e389e6351502148c50165c72c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a010e24df85a7709460da35e6081047c54b74e389e6351502148c50165c72c1b->enter($__internal_a010e24df85a7709460da35e6081047c54b74e389e6351502148c50165c72c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_5903b3486e7df910e88c5585e346ac947a0690c48e52182b44075b35298fa9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5903b3486e7df910e88c5585e346ac947a0690c48e52182b44075b35298fa9cf->enter($__internal_5903b3486e7df910e88c5585e346ac947a0690c48e52182b44075b35298fa9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_5903b3486e7df910e88c5585e346ac947a0690c48e52182b44075b35298fa9cf->leave($__internal_5903b3486e7df910e88c5585e346ac947a0690c48e52182b44075b35298fa9cf_prof);

        
        $__internal_a010e24df85a7709460da35e6081047c54b74e389e6351502148c50165c72c1b->leave($__internal_a010e24df85a7709460da35e6081047c54b74e389e6351502148c50165c72c1b_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
