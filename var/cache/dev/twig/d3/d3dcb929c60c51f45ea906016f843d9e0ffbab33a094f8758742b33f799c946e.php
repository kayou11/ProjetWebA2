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
        $__internal_cfb079566327090b13b2b93b8e60c8284d3beefa84efc6eff6176e2d57e3e023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb079566327090b13b2b93b8e60c8284d3beefa84efc6eff6176e2d57e3e023->enter($__internal_cfb079566327090b13b2b93b8e60c8284d3beefa84efc6eff6176e2d57e3e023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_dc7c6b6ec0e0372311522f4f9b82a9f6643855fbe0bbb9800d5379a901372f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7c6b6ec0e0372311522f4f9b82a9f6643855fbe0bbb9800d5379a901372f36->enter($__internal_dc7c6b6ec0e0372311522f4f9b82a9f6643855fbe0bbb9800d5379a901372f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_cfb079566327090b13b2b93b8e60c8284d3beefa84efc6eff6176e2d57e3e023->leave($__internal_cfb079566327090b13b2b93b8e60c8284d3beefa84efc6eff6176e2d57e3e023_prof);

        
        $__internal_dc7c6b6ec0e0372311522f4f9b82a9f6643855fbe0bbb9800d5379a901372f36->leave($__internal_dc7c6b6ec0e0372311522f4f9b82a9f6643855fbe0bbb9800d5379a901372f36_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_aca3a2d2202d1f1546c2991c2f06d3cdb7fa139341e4c37e6fe7bbd4eabfb5a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca3a2d2202d1f1546c2991c2f06d3cdb7fa139341e4c37e6fe7bbd4eabfb5a0->enter($__internal_aca3a2d2202d1f1546c2991c2f06d3cdb7fa139341e4c37e6fe7bbd4eabfb5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_cd5826fc1562596c9cebf3ccec0f5cdb039f27602580fec8f798ac42436e32e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5826fc1562596c9cebf3ccec0f5cdb039f27602580fec8f798ac42436e32e5->enter($__internal_cd5826fc1562596c9cebf3ccec0f5cdb039f27602580fec8f798ac42436e32e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_cd5826fc1562596c9cebf3ccec0f5cdb039f27602580fec8f798ac42436e32e5->leave($__internal_cd5826fc1562596c9cebf3ccec0f5cdb039f27602580fec8f798ac42436e32e5_prof);

        
        $__internal_aca3a2d2202d1f1546c2991c2f06d3cdb7fa139341e4c37e6fe7bbd4eabfb5a0->leave($__internal_aca3a2d2202d1f1546c2991c2f06d3cdb7fa139341e4c37e6fe7bbd4eabfb5a0_prof);

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
