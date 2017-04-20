<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_92b0c947dbdf2bd241560a3234c0453e2bc4422c5972fd0a989e53fc5545dce9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb4117e5d140ffd967ca4b4eb8b2270effb902f7921b8f39aea81742bf6d1edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4117e5d140ffd967ca4b4eb8b2270effb902f7921b8f39aea81742bf6d1edc->enter($__internal_bb4117e5d140ffd967ca4b4eb8b2270effb902f7921b8f39aea81742bf6d1edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $__internal_9dfcb199b90eadc178fdad91b875180b5fd303dfa30a5d302e9a2828d501f16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfcb199b90eadc178fdad91b875180b5fd303dfa30a5d302e9a2828d501f16d->enter($__internal_9dfcb199b90eadc178fdad91b875180b5fd303dfa30a5d302e9a2828d501f16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb4117e5d140ffd967ca4b4eb8b2270effb902f7921b8f39aea81742bf6d1edc->leave($__internal_bb4117e5d140ffd967ca4b4eb8b2270effb902f7921b8f39aea81742bf6d1edc_prof);

        
        $__internal_9dfcb199b90eadc178fdad91b875180b5fd303dfa30a5d302e9a2828d501f16d->leave($__internal_9dfcb199b90eadc178fdad91b875180b5fd303dfa30a5d302e9a2828d501f16d_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_90d85294534c90806723b1241ab64025d2585fea6f11c802bea51608fb8ca613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d85294534c90806723b1241ab64025d2585fea6f11c802bea51608fb8ca613->enter($__internal_90d85294534c90806723b1241ab64025d2585fea6f11c802bea51608fb8ca613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_7ef81d27cf2e561287b96d0c5f043badb72a14e01dae508c294f9fc27bf17757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef81d27cf2e561287b96d0c5f043badb72a14e01dae508c294f9fc27bf17757->enter($__internal_7ef81d27cf2e561287b96d0c5f043badb72a14e01dae508c294f9fc27bf17757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 15, $this->getSourceContext()); })()), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array()), "html", null, true);
        }
        
        $__internal_7ef81d27cf2e561287b96d0c5f043badb72a14e01dae508c294f9fc27bf17757->leave($__internal_7ef81d27cf2e561287b96d0c5f043badb72a14e01dae508c294f9fc27bf17757_prof);

        
        $__internal_90d85294534c90806723b1241ab64025d2585fea6f11c802bea51608fb8ca613->leave($__internal_90d85294534c90806723b1241ab64025d2585fea6f11c802bea51608fb8ca613_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_d852e7c56f6068c8da2318bbeda3319068dd1c9d004416d17bee61863311b922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d852e7c56f6068c8da2318bbeda3319068dd1c9d004416d17bee61863311b922->enter($__internal_d852e7c56f6068c8da2318bbeda3319068dd1c9d004416d17bee61863311b922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_0858d808c78e242c221cdb40ea08d374c7d891fea73c5b6a21392c35de54898b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0858d808c78e242c221cdb40ea08d374c7d891fea73c5b6a21392c35de54898b->enter($__internal_0858d808c78e242c221cdb40ea08d374c7d891fea73c5b6a21392c35de54898b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_0858d808c78e242c221cdb40ea08d374c7d891fea73c5b6a21392c35de54898b->leave($__internal_0858d808c78e242c221cdb40ea08d374c7d891fea73c5b6a21392c35de54898b_prof);

        
        $__internal_d852e7c56f6068c8da2318bbeda3319068dd1c9d004416d17bee61863311b922->leave($__internal_d852e7c56f6068c8da2318bbeda3319068dd1c9d004416d17bee61863311b922_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_9d81f37973fff47d35bf7d411e40e57a14a13a88a956f3f9f9b1aa1b469a0f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d81f37973fff47d35bf7d411e40e57a14a13a88a956f3f9f9b1aa1b469a0f67->enter($__internal_9d81f37973fff47d35bf7d411e40e57a14a13a88a956f3f9f9b1aa1b469a0f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_c0d26fd51c9866182ccd062dc0b2696edb5cb54914660d738660ccaf850c0a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d26fd51c9866182ccd062dc0b2696edb5cb54914660d738660ccaf850c0a24->enter($__internal_c0d26fd51c9866182ccd062dc0b2696edb5cb54914660d738660ccaf850c0a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 22, $this->getSourceContext()); })())) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 22, $this->getSourceContext()); })()), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 23, $this->getSourceContext()); })()), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 28, $this->getSourceContext()); })())) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 28, $this->getSourceContext()); })()), "post", array());
        }
        
        $__internal_c0d26fd51c9866182ccd062dc0b2696edb5cb54914660d738660ccaf850c0a24->leave($__internal_c0d26fd51c9866182ccd062dc0b2696edb5cb54914660d738660ccaf850c0a24_prof);

        
        $__internal_9d81f37973fff47d35bf7d411e40e57a14a13a88a956f3f9f9b1aa1b469a0f67->leave($__internal_9d81f37973fff47d35bf7d411e40e57a14a13a88a956f3f9f9b1aa1b469a0f67_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_21a6cf946dd1c6a019a69f6ebcc14776dda23f89228207290f505390985505bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a6cf946dd1c6a019a69f6ebcc14776dda23f89228207290f505390985505bb->enter($__internal_21a6cf946dd1c6a019a69f6ebcc14776dda23f89228207290f505390985505bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_c747d568a2b8ba09ad900a74d98a0fe1e8bc17b651c3e152524e56c92b530f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c747d568a2b8ba09ad900a74d98a0fe1e8bc17b651c3e152524e56c92b530f8b->enter($__internal_c747d568a2b8ba09ad900a74d98a0fe1e8bc17b651c3e152524e56c92b530f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 25, $this->getSourceContext()); })())));
        echo "
        ";
        
        $__internal_c747d568a2b8ba09ad900a74d98a0fe1e8bc17b651c3e152524e56c92b530f8b->leave($__internal_c747d568a2b8ba09ad900a74d98a0fe1e8bc17b651c3e152524e56c92b530f8b_prof);

        
        $__internal_21a6cf946dd1c6a019a69f6ebcc14776dda23f89228207290f505390985505bb->leave($__internal_21a6cf946dd1c6a019a69f6ebcc14776dda23f89228207290f505390985505bb_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 25,  147 => 24,  134 => 28,  120 => 27,  117 => 24,  99 => 23,  94 => 22,  85 => 21,  67 => 18,  42 => 15,  21 => 12,);
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

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
