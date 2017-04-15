<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_e1891c074b90d7557f39409436294755f00d68f220d160f284968437f4fe85a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d321fb1652614a65f309b6a80dcee9b7578f4324751362ad6a21a9c4ef992049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d321fb1652614a65f309b6a80dcee9b7578f4324751362ad6a21a9c4ef992049->enter($__internal_d321fb1652614a65f309b6a80dcee9b7578f4324751362ad6a21a9c4ef992049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_5bb9f77b8f6cef411fbe3f92e4e336e7a44ae3938f0e01098491fd13a700f6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb9f77b8f6cef411fbe3f92e4e336e7a44ae3938f0e01098491fd13a700f6f8->enter($__internal_5bb9f77b8f6cef411fbe3f92e4e336e7a44ae3938f0e01098491fd13a700f6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_d321fb1652614a65f309b6a80dcee9b7578f4324751362ad6a21a9c4ef992049->leave($__internal_d321fb1652614a65f309b6a80dcee9b7578f4324751362ad6a21a9c4ef992049_prof);

        
        $__internal_5bb9f77b8f6cef411fbe3f92e4e336e7a44ae3938f0e01098491fd13a700f6f8->leave($__internal_5bb9f77b8f6cef411fbe3f92e4e336e7a44ae3938f0e01098491fd13a700f6f8_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_6b6704d58f2ee6c6f5a2be3fa78fdaedcf7c3015cadddf5cf5dffe52bdf2369b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b6704d58f2ee6c6f5a2be3fa78fdaedcf7c3015cadddf5cf5dffe52bdf2369b->enter($__internal_6b6704d58f2ee6c6f5a2be3fa78fdaedcf7c3015cadddf5cf5dffe52bdf2369b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_391f18c738f5620901c3ec8956aab3189f6bea1037e1b19216cd8b759fb38e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391f18c738f5620901c3ec8956aab3189f6bea1037e1b19216cd8b759fb38e9a->enter($__internal_391f18c738f5620901c3ec8956aab3189f6bea1037e1b19216cd8b759fb38e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_391f18c738f5620901c3ec8956aab3189f6bea1037e1b19216cd8b759fb38e9a->leave($__internal_391f18c738f5620901c3ec8956aab3189f6bea1037e1b19216cd8b759fb38e9a_prof);

        
        $__internal_6b6704d58f2ee6c6f5a2be3fa78fdaedcf7c3015cadddf5cf5dffe52bdf2369b->leave($__internal_6b6704d58f2ee6c6f5a2be3fa78fdaedcf7c3015cadddf5cf5dffe52bdf2369b_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
