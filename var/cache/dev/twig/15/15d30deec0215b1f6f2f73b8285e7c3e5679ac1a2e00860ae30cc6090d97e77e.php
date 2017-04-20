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
        $__internal_911fa225fbb02d876c78f5d6036484e08b3feeb0338c9cb1f24c3c034a0bc094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911fa225fbb02d876c78f5d6036484e08b3feeb0338c9cb1f24c3c034a0bc094->enter($__internal_911fa225fbb02d876c78f5d6036484e08b3feeb0338c9cb1f24c3c034a0bc094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_a8edc9fa920ff1c691a965d03ea7c01964d184192122b325b9b0fd5ae810b8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8edc9fa920ff1c691a965d03ea7c01964d184192122b325b9b0fd5ae810b8c1->enter($__internal_a8edc9fa920ff1c691a965d03ea7c01964d184192122b325b9b0fd5ae810b8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_911fa225fbb02d876c78f5d6036484e08b3feeb0338c9cb1f24c3c034a0bc094->leave($__internal_911fa225fbb02d876c78f5d6036484e08b3feeb0338c9cb1f24c3c034a0bc094_prof);

        
        $__internal_a8edc9fa920ff1c691a965d03ea7c01964d184192122b325b9b0fd5ae810b8c1->leave($__internal_a8edc9fa920ff1c691a965d03ea7c01964d184192122b325b9b0fd5ae810b8c1_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_d147a571fa713cf4e65b79b7699a818d26c1ab2476bc012a336f76e8d23b60e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d147a571fa713cf4e65b79b7699a818d26c1ab2476bc012a336f76e8d23b60e2->enter($__internal_d147a571fa713cf4e65b79b7699a818d26c1ab2476bc012a336f76e8d23b60e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_4355612a3d4dca14c71be03c52eb5d2162e5d16ba262de2f70e0a477970a9e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4355612a3d4dca14c71be03c52eb5d2162e5d16ba262de2f70e0a477970a9e4a->enter($__internal_4355612a3d4dca14c71be03c52eb5d2162e5d16ba262de2f70e0a477970a9e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_4355612a3d4dca14c71be03c52eb5d2162e5d16ba262de2f70e0a477970a9e4a->leave($__internal_4355612a3d4dca14c71be03c52eb5d2162e5d16ba262de2f70e0a477970a9e4a_prof);

        
        $__internal_d147a571fa713cf4e65b79b7699a818d26c1ab2476bc012a336f76e8d23b60e2->leave($__internal_d147a571fa713cf4e65b79b7699a818d26c1ab2476bc012a336f76e8d23b60e2_prof);

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
