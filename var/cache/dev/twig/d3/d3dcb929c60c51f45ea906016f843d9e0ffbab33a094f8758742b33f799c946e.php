<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_6dfb00b87b1a6fcd91af86b30448b5baea7340866e1384fd32b0d86956807ea6 extends Twig_Template
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
        $__internal_9ba371c4417913d57364567dee1e6e2dc3264dc2f5377a6b1bf5c98ea208c411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba371c4417913d57364567dee1e6e2dc3264dc2f5377a6b1bf5c98ea208c411->enter($__internal_9ba371c4417913d57364567dee1e6e2dc3264dc2f5377a6b1bf5c98ea208c411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_ed6b54575b2e277421c2d2a780f094de511410c5cf138aa94084e9eddc0ed967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6b54575b2e277421c2d2a780f094de511410c5cf138aa94084e9eddc0ed967->enter($__internal_ed6b54575b2e277421c2d2a780f094de511410c5cf138aa94084e9eddc0ed967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_9ba371c4417913d57364567dee1e6e2dc3264dc2f5377a6b1bf5c98ea208c411->leave($__internal_9ba371c4417913d57364567dee1e6e2dc3264dc2f5377a6b1bf5c98ea208c411_prof);

        
        $__internal_ed6b54575b2e277421c2d2a780f094de511410c5cf138aa94084e9eddc0ed967->leave($__internal_ed6b54575b2e277421c2d2a780f094de511410c5cf138aa94084e9eddc0ed967_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_b5958abfdb1cdcec753e05c4b753f2b9cf853147c3ad3ffdce4458bf026e3cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5958abfdb1cdcec753e05c4b753f2b9cf853147c3ad3ffdce4458bf026e3cf6->enter($__internal_b5958abfdb1cdcec753e05c4b753f2b9cf853147c3ad3ffdce4458bf026e3cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_2211d2800a45c65adbe77de3cb9a01ac3e25371c41a3427eddeedd850b4998f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2211d2800a45c65adbe77de3cb9a01ac3e25371c41a3427eddeedd850b4998f2->enter($__internal_2211d2800a45c65adbe77de3cb9a01ac3e25371c41a3427eddeedd850b4998f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_2211d2800a45c65adbe77de3cb9a01ac3e25371c41a3427eddeedd850b4998f2->leave($__internal_2211d2800a45c65adbe77de3cb9a01ac3e25371c41a3427eddeedd850b4998f2_prof);

        
        $__internal_b5958abfdb1cdcec753e05c4b753f2b9cf853147c3ad3ffdce4458bf026e3cf6->leave($__internal_b5958abfdb1cdcec753e05c4b753f2b9cf853147c3ad3ffdce4458bf026e3cf6_prof);

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
