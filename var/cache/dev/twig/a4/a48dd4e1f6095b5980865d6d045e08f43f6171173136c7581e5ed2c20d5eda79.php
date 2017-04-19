<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_0ad4c6803ef4f96d83337dc93a453d545a2711e649d1a062ca97fbdc6f68319d extends Twig_Template
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
        $__internal_42cbb49bb0e79cbc15851fb2ee0e07f4f1bc8a10e7a69de43c4acb29dac7d9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42cbb49bb0e79cbc15851fb2ee0e07f4f1bc8a10e7a69de43c4acb29dac7d9e5->enter($__internal_42cbb49bb0e79cbc15851fb2ee0e07f4f1bc8a10e7a69de43c4acb29dac7d9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $__internal_62606919b98c775a50a2a5480e8db10fb51bfd24374152e1b0828429ebfc6bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62606919b98c775a50a2a5480e8db10fb51bfd24374152e1b0828429ebfc6bf6->enter($__internal_62606919b98c775a50a2a5480e8db10fb51bfd24374152e1b0828429ebfc6bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42cbb49bb0e79cbc15851fb2ee0e07f4f1bc8a10e7a69de43c4acb29dac7d9e5->leave($__internal_42cbb49bb0e79cbc15851fb2ee0e07f4f1bc8a10e7a69de43c4acb29dac7d9e5_prof);

        
        $__internal_62606919b98c775a50a2a5480e8db10fb51bfd24374152e1b0828429ebfc6bf6->leave($__internal_62606919b98c775a50a2a5480e8db10fb51bfd24374152e1b0828429ebfc6bf6_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_7ef76c8110ae15b9c8d19ab87ad9a5c6e31efcac0563143387104de2d9c44720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef76c8110ae15b9c8d19ab87ad9a5c6e31efcac0563143387104de2d9c44720->enter($__internal_7ef76c8110ae15b9c8d19ab87ad9a5c6e31efcac0563143387104de2d9c44720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_572d228fa6c4711fe97ea7c9e29ecdadb2f4bbd43b547fd537308d0adc62a990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572d228fa6c4711fe97ea7c9e29ecdadb2f4bbd43b547fd537308d0adc62a990->enter($__internal_572d228fa6c4711fe97ea7c9e29ecdadb2f4bbd43b547fd537308d0adc62a990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 15, $this->getSourceContext()); })()), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array()), "html", null, true);
        }
        
        $__internal_572d228fa6c4711fe97ea7c9e29ecdadb2f4bbd43b547fd537308d0adc62a990->leave($__internal_572d228fa6c4711fe97ea7c9e29ecdadb2f4bbd43b547fd537308d0adc62a990_prof);

        
        $__internal_7ef76c8110ae15b9c8d19ab87ad9a5c6e31efcac0563143387104de2d9c44720->leave($__internal_7ef76c8110ae15b9c8d19ab87ad9a5c6e31efcac0563143387104de2d9c44720_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_7d25bc400120fba1f339b7fc0458d98bb085a2b293869d3831096f6d50fe6011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d25bc400120fba1f339b7fc0458d98bb085a2b293869d3831096f6d50fe6011->enter($__internal_7d25bc400120fba1f339b7fc0458d98bb085a2b293869d3831096f6d50fe6011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_b2781ca0e7152bca70ddb8dbe6bfa2d2bdb0a920397440a2788d3c82d619a91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2781ca0e7152bca70ddb8dbe6bfa2d2bdb0a920397440a2788d3c82d619a91a->enter($__internal_b2781ca0e7152bca70ddb8dbe6bfa2d2bdb0a920397440a2788d3c82d619a91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_b2781ca0e7152bca70ddb8dbe6bfa2d2bdb0a920397440a2788d3c82d619a91a->leave($__internal_b2781ca0e7152bca70ddb8dbe6bfa2d2bdb0a920397440a2788d3c82d619a91a_prof);

        
        $__internal_7d25bc400120fba1f339b7fc0458d98bb085a2b293869d3831096f6d50fe6011->leave($__internal_7d25bc400120fba1f339b7fc0458d98bb085a2b293869d3831096f6d50fe6011_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_27d2fe57bcf94a01239eeddeb01038b5138aa03ee72128ef4b203c7bf02e06bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d2fe57bcf94a01239eeddeb01038b5138aa03ee72128ef4b203c7bf02e06bc->enter($__internal_27d2fe57bcf94a01239eeddeb01038b5138aa03ee72128ef4b203c7bf02e06bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_c56432e6f069e8c847fc066b2e31d8b52e54232fb4b3857105c6592873243ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56432e6f069e8c847fc066b2e31d8b52e54232fb4b3857105c6592873243ad7->enter($__internal_c56432e6f069e8c847fc066b2e31d8b52e54232fb4b3857105c6592873243ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_c56432e6f069e8c847fc066b2e31d8b52e54232fb4b3857105c6592873243ad7->leave($__internal_c56432e6f069e8c847fc066b2e31d8b52e54232fb4b3857105c6592873243ad7_prof);

        
        $__internal_27d2fe57bcf94a01239eeddeb01038b5138aa03ee72128ef4b203c7bf02e06bc->leave($__internal_27d2fe57bcf94a01239eeddeb01038b5138aa03ee72128ef4b203c7bf02e06bc_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_556499719bbc65f66ad11533a9e89a0119dbc6c6a37cccd69ed14a3939b8d211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_556499719bbc65f66ad11533a9e89a0119dbc6c6a37cccd69ed14a3939b8d211->enter($__internal_556499719bbc65f66ad11533a9e89a0119dbc6c6a37cccd69ed14a3939b8d211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_8498467db75b2d0a6dc6ec62b48951e159ace8af955782a43c1db4a9bd7afebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8498467db75b2d0a6dc6ec62b48951e159ace8af955782a43c1db4a9bd7afebd->enter($__internal_8498467db75b2d0a6dc6ec62b48951e159ace8af955782a43c1db4a9bd7afebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 25, $this->getSourceContext()); })())));
        echo "
        ";
        
        $__internal_8498467db75b2d0a6dc6ec62b48951e159ace8af955782a43c1db4a9bd7afebd->leave($__internal_8498467db75b2d0a6dc6ec62b48951e159ace8af955782a43c1db4a9bd7afebd_prof);

        
        $__internal_556499719bbc65f66ad11533a9e89a0119dbc6c6a37cccd69ed14a3939b8d211->leave($__internal_556499719bbc65f66ad11533a9e89a0119dbc6c6a37cccd69ed14a3939b8d211_prof);

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
