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
        $__internal_07a8be6d5aed4efde3e558c9203bf9a3d283b70f4694673d35fc4718fcbaeb02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a8be6d5aed4efde3e558c9203bf9a3d283b70f4694673d35fc4718fcbaeb02->enter($__internal_07a8be6d5aed4efde3e558c9203bf9a3d283b70f4694673d35fc4718fcbaeb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $__internal_6d9d3dd6db8ef608c1245ddc14278761aaa3c8118d11c3b3137b5e138a87e7b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9d3dd6db8ef608c1245ddc14278761aaa3c8118d11c3b3137b5e138a87e7b2->enter($__internal_6d9d3dd6db8ef608c1245ddc14278761aaa3c8118d11c3b3137b5e138a87e7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a8be6d5aed4efde3e558c9203bf9a3d283b70f4694673d35fc4718fcbaeb02->leave($__internal_07a8be6d5aed4efde3e558c9203bf9a3d283b70f4694673d35fc4718fcbaeb02_prof);

        
        $__internal_6d9d3dd6db8ef608c1245ddc14278761aaa3c8118d11c3b3137b5e138a87e7b2->leave($__internal_6d9d3dd6db8ef608c1245ddc14278761aaa3c8118d11c3b3137b5e138a87e7b2_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_3cce3c2b16900f8987a6c2065f8cada7ad3a8bac11e1dfdcf323aeaa44c2dd87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cce3c2b16900f8987a6c2065f8cada7ad3a8bac11e1dfdcf323aeaa44c2dd87->enter($__internal_3cce3c2b16900f8987a6c2065f8cada7ad3a8bac11e1dfdcf323aeaa44c2dd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_ee97a04ef37c1561d1ba7210a2f78326cf2ca598a4637aef054bb59f983e2927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee97a04ef37c1561d1ba7210a2f78326cf2ca598a4637aef054bb59f983e2927->enter($__internal_ee97a04ef37c1561d1ba7210a2f78326cf2ca598a4637aef054bb59f983e2927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 15, $this->getSourceContext()); })()), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array()), "html", null, true);
        }
        
        $__internal_ee97a04ef37c1561d1ba7210a2f78326cf2ca598a4637aef054bb59f983e2927->leave($__internal_ee97a04ef37c1561d1ba7210a2f78326cf2ca598a4637aef054bb59f983e2927_prof);

        
        $__internal_3cce3c2b16900f8987a6c2065f8cada7ad3a8bac11e1dfdcf323aeaa44c2dd87->leave($__internal_3cce3c2b16900f8987a6c2065f8cada7ad3a8bac11e1dfdcf323aeaa44c2dd87_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_91957e24814d1eac42fb106bfe696a084c3572dc1af88292fc50aa2ed10e8a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91957e24814d1eac42fb106bfe696a084c3572dc1af88292fc50aa2ed10e8a1e->enter($__internal_91957e24814d1eac42fb106bfe696a084c3572dc1af88292fc50aa2ed10e8a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_1c69cda53b7ad4bddc57a6d4c30fd697ae698dfd64b3db08421f9e516b1091b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c69cda53b7ad4bddc57a6d4c30fd697ae698dfd64b3db08421f9e516b1091b4->enter($__internal_1c69cda53b7ad4bddc57a6d4c30fd697ae698dfd64b3db08421f9e516b1091b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_1c69cda53b7ad4bddc57a6d4c30fd697ae698dfd64b3db08421f9e516b1091b4->leave($__internal_1c69cda53b7ad4bddc57a6d4c30fd697ae698dfd64b3db08421f9e516b1091b4_prof);

        
        $__internal_91957e24814d1eac42fb106bfe696a084c3572dc1af88292fc50aa2ed10e8a1e->leave($__internal_91957e24814d1eac42fb106bfe696a084c3572dc1af88292fc50aa2ed10e8a1e_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_d1f6092cc319029d2a142c3db772314a60d66a4ca8bc5570780644109bb1cc37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f6092cc319029d2a142c3db772314a60d66a4ca8bc5570780644109bb1cc37->enter($__internal_d1f6092cc319029d2a142c3db772314a60d66a4ca8bc5570780644109bb1cc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_9d6620d22080d2a97b891f5fecdae0b31fa8d306655bba87046aa93e5ab95bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6620d22080d2a97b891f5fecdae0b31fa8d306655bba87046aa93e5ab95bd3->enter($__internal_9d6620d22080d2a97b891f5fecdae0b31fa8d306655bba87046aa93e5ab95bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_9d6620d22080d2a97b891f5fecdae0b31fa8d306655bba87046aa93e5ab95bd3->leave($__internal_9d6620d22080d2a97b891f5fecdae0b31fa8d306655bba87046aa93e5ab95bd3_prof);

        
        $__internal_d1f6092cc319029d2a142c3db772314a60d66a4ca8bc5570780644109bb1cc37->leave($__internal_d1f6092cc319029d2a142c3db772314a60d66a4ca8bc5570780644109bb1cc37_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_aa59f914fa5e8b3c6f4afb1e66f4d052d768e15ab9eece2e23d86b6d66a81a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa59f914fa5e8b3c6f4afb1e66f4d052d768e15ab9eece2e23d86b6d66a81a49->enter($__internal_aa59f914fa5e8b3c6f4afb1e66f4d052d768e15ab9eece2e23d86b6d66a81a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_1fbebc83451f8523cb6cb497ed2dd1cd8cda2a388cbbd80a2ada92712e76dccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fbebc83451f8523cb6cb497ed2dd1cd8cda2a388cbbd80a2ada92712e76dccd->enter($__internal_1fbebc83451f8523cb6cb497ed2dd1cd8cda2a388cbbd80a2ada92712e76dccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 25, $this->getSourceContext()); })())));
        echo "
        ";
        
        $__internal_1fbebc83451f8523cb6cb497ed2dd1cd8cda2a388cbbd80a2ada92712e76dccd->leave($__internal_1fbebc83451f8523cb6cb497ed2dd1cd8cda2a388cbbd80a2ada92712e76dccd_prof);

        
        $__internal_aa59f914fa5e8b3c6f4afb1e66f4d052d768e15ab9eece2e23d86b6d66a81a49->leave($__internal_aa59f914fa5e8b3c6f4afb1e66f4d052d768e15ab9eece2e23d86b6d66a81a49_prof);

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
