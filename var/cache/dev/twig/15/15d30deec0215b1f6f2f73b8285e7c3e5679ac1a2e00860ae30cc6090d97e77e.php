<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_631f10d10f0035191df40d1e88ad1477650722ac4194779d739e3bd32ec05711 extends Twig_Template
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
        $__internal_e19ce25b4cccd36ac77b0d89b7224a6b079586ad0f95ef0ac552eeb41ad87d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19ce25b4cccd36ac77b0d89b7224a6b079586ad0f95ef0ac552eeb41ad87d21->enter($__internal_e19ce25b4cccd36ac77b0d89b7224a6b079586ad0f95ef0ac552eeb41ad87d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_f6f04b7e7a9d248833af709d8f5af2fa0c9ac38488ac90f225687f58dd9ce352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f04b7e7a9d248833af709d8f5af2fa0c9ac38488ac90f225687f58dd9ce352->enter($__internal_f6f04b7e7a9d248833af709d8f5af2fa0c9ac38488ac90f225687f58dd9ce352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 11, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_e19ce25b4cccd36ac77b0d89b7224a6b079586ad0f95ef0ac552eeb41ad87d21->leave($__internal_e19ce25b4cccd36ac77b0d89b7224a6b079586ad0f95ef0ac552eeb41ad87d21_prof);

        
        $__internal_f6f04b7e7a9d248833af709d8f5af2fa0c9ac38488ac90f225687f58dd9ce352->leave($__internal_f6f04b7e7a9d248833af709d8f5af2fa0c9ac38488ac90f225687f58dd9ce352_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_a71034154af7513de82548bc2a648173879f5e7aa11d17c67d4bffd82c40957e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71034154af7513de82548bc2a648173879f5e7aa11d17c67d4bffd82c40957e->enter($__internal_a71034154af7513de82548bc2a648173879f5e7aa11d17c67d4bffd82c40957e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_00d28abaa32438645769eb846e96b2cca41ad3e5f3ba936b3bd9a826eeac342b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d28abaa32438645769eb846e96b2cca41ad3e5f3ba936b3bd9a826eeac342b->enter($__internal_00d28abaa32438645769eb846e96b2cca41ad3e5f3ba936b3bd9a826eeac342b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_00d28abaa32438645769eb846e96b2cca41ad3e5f3ba936b3bd9a826eeac342b->leave($__internal_00d28abaa32438645769eb846e96b2cca41ad3e5f3ba936b3bd9a826eeac342b_prof);

        
        $__internal_a71034154af7513de82548bc2a648173879f5e7aa11d17c67d4bffd82c40957e->leave($__internal_a71034154af7513de82548bc2a648173879f5e7aa11d17c67d4bffd82c40957e_prof);

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
", "SonataBlockBundle:Block:block_base.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
