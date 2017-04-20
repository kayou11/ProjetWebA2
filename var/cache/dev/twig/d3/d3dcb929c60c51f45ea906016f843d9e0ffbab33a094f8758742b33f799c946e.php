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
        $__internal_352a77dc4ea4eed729de44d98e8f3317030de7f0513bb305cce3a125a06c0dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352a77dc4ea4eed729de44d98e8f3317030de7f0513bb305cce3a125a06c0dff->enter($__internal_352a77dc4ea4eed729de44d98e8f3317030de7f0513bb305cce3a125a06c0dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_2b9ede7559782aa13bf331e3c41126521f1af6bbbc552272541263b4e42b2b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9ede7559782aa13bf331e3c41126521f1af6bbbc552272541263b4e42b2b4f->enter($__internal_2b9ede7559782aa13bf331e3c41126521f1af6bbbc552272541263b4e42b2b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_352a77dc4ea4eed729de44d98e8f3317030de7f0513bb305cce3a125a06c0dff->leave($__internal_352a77dc4ea4eed729de44d98e8f3317030de7f0513bb305cce3a125a06c0dff_prof);

        
        $__internal_2b9ede7559782aa13bf331e3c41126521f1af6bbbc552272541263b4e42b2b4f->leave($__internal_2b9ede7559782aa13bf331e3c41126521f1af6bbbc552272541263b4e42b2b4f_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_38fb44e7fd7eb08ec57e111740565b22b59ff874a2382abacde81de5584b227e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38fb44e7fd7eb08ec57e111740565b22b59ff874a2382abacde81de5584b227e->enter($__internal_38fb44e7fd7eb08ec57e111740565b22b59ff874a2382abacde81de5584b227e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_26bdcb9f3a9f28d6e414dc0c264db1d6ba0332f0b01cc430348ea30bfcf6bcd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bdcb9f3a9f28d6e414dc0c264db1d6ba0332f0b01cc430348ea30bfcf6bcd8->enter($__internal_26bdcb9f3a9f28d6e414dc0c264db1d6ba0332f0b01cc430348ea30bfcf6bcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_26bdcb9f3a9f28d6e414dc0c264db1d6ba0332f0b01cc430348ea30bfcf6bcd8->leave($__internal_26bdcb9f3a9f28d6e414dc0c264db1d6ba0332f0b01cc430348ea30bfcf6bcd8_prof);

        
        $__internal_38fb44e7fd7eb08ec57e111740565b22b59ff874a2382abacde81de5584b227e->leave($__internal_38fb44e7fd7eb08ec57e111740565b22b59ff874a2382abacde81de5584b227e_prof);

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
