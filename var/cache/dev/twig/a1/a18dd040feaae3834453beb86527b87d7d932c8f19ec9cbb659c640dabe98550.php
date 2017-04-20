<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_3b88c478fe27462f568664fcdab0ae704de4a2bfa9f07cc515d6158f98ccc178 extends Twig_Template
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
        $__internal_8f729ed69bed679619ff7db981040d5fba200516a26b0c3feb6b32d0bb3a5d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f729ed69bed679619ff7db981040d5fba200516a26b0c3feb6b32d0bb3a5d8b->enter($__internal_8f729ed69bed679619ff7db981040d5fba200516a26b0c3feb6b32d0bb3a5d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $__internal_4d89146d0e683df56e1af1ed12703503e536b015fc046380380c386c7092040e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d89146d0e683df56e1af1ed12703503e536b015fc046380380c386c7092040e->enter($__internal_4d89146d0e683df56e1af1ed12703503e536b015fc046380380c386c7092040e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f729ed69bed679619ff7db981040d5fba200516a26b0c3feb6b32d0bb3a5d8b->leave($__internal_8f729ed69bed679619ff7db981040d5fba200516a26b0c3feb6b32d0bb3a5d8b_prof);

        
        $__internal_4d89146d0e683df56e1af1ed12703503e536b015fc046380380c386c7092040e->leave($__internal_4d89146d0e683df56e1af1ed12703503e536b015fc046380380c386c7092040e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_940212a2caa896db647d859e6a329c5f893b35105eaa8eef08d401904e0dc619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_940212a2caa896db647d859e6a329c5f893b35105eaa8eef08d401904e0dc619->enter($__internal_940212a2caa896db647d859e6a329c5f893b35105eaa8eef08d401904e0dc619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_bd6b13af6fb06faeab9ea37954f4462126ebb32cdfcb6d8282b17d2ccd01d224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6b13af6fb06faeab9ea37954f4462126ebb32cdfcb6d8282b17d2ccd01d224->enter($__internal_bd6b13af6fb06faeab9ea37954f4462126ebb32cdfcb6d8282b17d2ccd01d224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "content", array());
        echo "
";
        
        $__internal_bd6b13af6fb06faeab9ea37954f4462126ebb32cdfcb6d8282b17d2ccd01d224->leave($__internal_bd6b13af6fb06faeab9ea37954f4462126ebb32cdfcb6d8282b17d2ccd01d224_prof);

        
        $__internal_940212a2caa896db647d859e6a329c5f893b35105eaa8eef08d401904e0dc619->leave($__internal_940212a2caa896db647d859e6a329c5f893b35105eaa8eef08d401904e0dc619_prof);

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
