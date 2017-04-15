<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_be7d72b0cb94c2d387dadabec2b617aa8629aa10263dd16063d0b088a85f3b3e extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_583fe9d69391df7719ba2d0274e47e4d892dee1f9ea738ee24e5de3484a30802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583fe9d69391df7719ba2d0274e47e4d892dee1f9ea738ee24e5de3484a30802->enter($__internal_583fe9d69391df7719ba2d0274e47e4d892dee1f9ea738ee24e5de3484a30802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $__internal_e8422e3f63341c207a677db9000f82071dbbc68b0379c838e6424b8cc099bc4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8422e3f63341c207a677db9000f82071dbbc68b0379c838e6424b8cc099bc4c->enter($__internal_e8422e3f63341c207a677db9000f82071dbbc68b0379c838e6424b8cc099bc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_583fe9d69391df7719ba2d0274e47e4d892dee1f9ea738ee24e5de3484a30802->leave($__internal_583fe9d69391df7719ba2d0274e47e4d892dee1f9ea738ee24e5de3484a30802_prof);

        
        $__internal_e8422e3f63341c207a677db9000f82071dbbc68b0379c838e6424b8cc099bc4c->leave($__internal_e8422e3f63341c207a677db9000f82071dbbc68b0379c838e6424b8cc099bc4c_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_f5d1e05e801a0a9a3ae817854ea9f71ac10edb0691f124321ad5d74e5ba40f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d1e05e801a0a9a3ae817854ea9f71ac10edb0691f124321ad5d74e5ba40f35->enter($__internal_f5d1e05e801a0a9a3ae817854ea9f71ac10edb0691f124321ad5d74e5ba40f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_db06c58682f3234c92e68fea5b6ca2bbc390dba6ded8a41e962a1352c859612b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db06c58682f3234c92e68fea5b6ca2bbc390dba6ded8a41e962a1352c859612b->enter($__internal_db06c58682f3234c92e68fea5b6ca2bbc390dba6ded8a41e962a1352c859612b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_db06c58682f3234c92e68fea5b6ca2bbc390dba6ded8a41e962a1352c859612b->leave($__internal_db06c58682f3234c92e68fea5b6ca2bbc390dba6ded8a41e962a1352c859612b_prof);

        
        $__internal_f5d1e05e801a0a9a3ae817854ea9f71ac10edb0691f124321ad5d74e5ba40f35->leave($__internal_f5d1e05e801a0a9a3ae817854ea9f71ac10edb0691f124321ad5d74e5ba40f35_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
