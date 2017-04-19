<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_0b807cb1637baf2dbbf4b03f72a97436ac80fb96e964f532ccb75b550aa86a91 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdfd678453f49e316d322e594e8e196c31682c68fd2b5567716bdeee61e81ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdfd678453f49e316d322e594e8e196c31682c68fd2b5567716bdeee61e81ae5->enter($__internal_fdfd678453f49e316d322e594e8e196c31682c68fd2b5567716bdeee61e81ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $__internal_98b54e8acdf0153ad03a05af2f3e9d810974c3711b7409514e83e8d874493030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b54e8acdf0153ad03a05af2f3e9d810974c3711b7409514e83e8d874493030->enter($__internal_98b54e8acdf0153ad03a05af2f3e9d810974c3711b7409514e83e8d874493030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdfd678453f49e316d322e594e8e196c31682c68fd2b5567716bdeee61e81ae5->leave($__internal_fdfd678453f49e316d322e594e8e196c31682c68fd2b5567716bdeee61e81ae5_prof);

        
        $__internal_98b54e8acdf0153ad03a05af2f3e9d810974c3711b7409514e83e8d874493030->leave($__internal_98b54e8acdf0153ad03a05af2f3e9d810974c3711b7409514e83e8d874493030_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e69ff044037e05d7ebac0458e3d2c8095ffd976886b011638222d3a3e51fc221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e69ff044037e05d7ebac0458e3d2c8095ffd976886b011638222d3a3e51fc221->enter($__internal_e69ff044037e05d7ebac0458e3d2c8095ffd976886b011638222d3a3e51fc221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_48c4619ee91a373d5070eb4839dbe66fbacd9a546d249e32fb543c0a402f5c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c4619ee91a373d5070eb4839dbe66fbacd9a546d249e32fb543c0a402f5c8e->enter($__internal_48c4619ee91a373d5070eb4839dbe66fbacd9a546d249e32fb543c0a402f5c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "content", array());
        echo "
";
        
        $__internal_48c4619ee91a373d5070eb4839dbe66fbacd9a546d249e32fb543c0a402f5c8e->leave($__internal_48c4619ee91a373d5070eb4839dbe66fbacd9a546d249e32fb543c0a402f5c8e_prof);

        
        $__internal_e69ff044037e05d7ebac0458e3d2c8095ffd976886b011638222d3a3e51fc221->leave($__internal_e69ff044037e05d7ebac0458e3d2c8095ffd976886b011638222d3a3e51fc221_prof);

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
", "SonataBlockBundle:Block:block_core_text.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
