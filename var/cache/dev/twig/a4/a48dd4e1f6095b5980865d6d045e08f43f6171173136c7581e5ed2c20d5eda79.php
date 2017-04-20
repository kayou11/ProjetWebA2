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
        $__internal_871de959aa2599690fb0d0f6dcd1906a5be852ab067d7a485b1606d83c3f92b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871de959aa2599690fb0d0f6dcd1906a5be852ab067d7a485b1606d83c3f92b9->enter($__internal_871de959aa2599690fb0d0f6dcd1906a5be852ab067d7a485b1606d83c3f92b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $__internal_3962fc22915219810b2e4abf1e93ae5c7e2b0e5ffe9dfd8e5a1a6dfbf5b0708e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3962fc22915219810b2e4abf1e93ae5c7e2b0e5ffe9dfd8e5a1a6dfbf5b0708e->enter($__internal_3962fc22915219810b2e4abf1e93ae5c7e2b0e5ffe9dfd8e5a1a6dfbf5b0708e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_871de959aa2599690fb0d0f6dcd1906a5be852ab067d7a485b1606d83c3f92b9->leave($__internal_871de959aa2599690fb0d0f6dcd1906a5be852ab067d7a485b1606d83c3f92b9_prof);

        
        $__internal_3962fc22915219810b2e4abf1e93ae5c7e2b0e5ffe9dfd8e5a1a6dfbf5b0708e->leave($__internal_3962fc22915219810b2e4abf1e93ae5c7e2b0e5ffe9dfd8e5a1a6dfbf5b0708e_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_4e758e6214396143797a64e76ea8c21e21ef780aa8f948774896857964568fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e758e6214396143797a64e76ea8c21e21ef780aa8f948774896857964568fd7->enter($__internal_4e758e6214396143797a64e76ea8c21e21ef780aa8f948774896857964568fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_851acdd69ab400088010e6e00d544fc754854dd7e9aabdb11c4ef1e503c9a551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851acdd69ab400088010e6e00d544fc754854dd7e9aabdb11c4ef1e503c9a551->enter($__internal_851acdd69ab400088010e6e00d544fc754854dd7e9aabdb11c4ef1e503c9a551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 15, $this->getSourceContext()); })()), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array()), "html", null, true);
        }
        
        $__internal_851acdd69ab400088010e6e00d544fc754854dd7e9aabdb11c4ef1e503c9a551->leave($__internal_851acdd69ab400088010e6e00d544fc754854dd7e9aabdb11c4ef1e503c9a551_prof);

        
        $__internal_4e758e6214396143797a64e76ea8c21e21ef780aa8f948774896857964568fd7->leave($__internal_4e758e6214396143797a64e76ea8c21e21ef780aa8f948774896857964568fd7_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_c2e677ea910f839e024dcd30908f0ca29298fe4d14951913da998378319b1420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e677ea910f839e024dcd30908f0ca29298fe4d14951913da998378319b1420->enter($__internal_c2e677ea910f839e024dcd30908f0ca29298fe4d14951913da998378319b1420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_e6825e7ebcb2db977b922b96cfb6a84bcd10f15fbd9e44d927c4398fc64fb5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6825e7ebcb2db977b922b96cfb6a84bcd10f15fbd9e44d927c4398fc64fb5d0->enter($__internal_e6825e7ebcb2db977b922b96cfb6a84bcd10f15fbd9e44d927c4398fc64fb5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_e6825e7ebcb2db977b922b96cfb6a84bcd10f15fbd9e44d927c4398fc64fb5d0->leave($__internal_e6825e7ebcb2db977b922b96cfb6a84bcd10f15fbd9e44d927c4398fc64fb5d0_prof);

        
        $__internal_c2e677ea910f839e024dcd30908f0ca29298fe4d14951913da998378319b1420->leave($__internal_c2e677ea910f839e024dcd30908f0ca29298fe4d14951913da998378319b1420_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_9922762a58a801cd875c1587145bf140c468e4cb783a07c2dac76ac8ef4717e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9922762a58a801cd875c1587145bf140c468e4cb783a07c2dac76ac8ef4717e8->enter($__internal_9922762a58a801cd875c1587145bf140c468e4cb783a07c2dac76ac8ef4717e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_32920d537e2ec2eeb4d8a65113516b12578946248a9e407e46c444b00421a177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32920d537e2ec2eeb4d8a65113516b12578946248a9e407e46c444b00421a177->enter($__internal_32920d537e2ec2eeb4d8a65113516b12578946248a9e407e46c444b00421a177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_32920d537e2ec2eeb4d8a65113516b12578946248a9e407e46c444b00421a177->leave($__internal_32920d537e2ec2eeb4d8a65113516b12578946248a9e407e46c444b00421a177_prof);

        
        $__internal_9922762a58a801cd875c1587145bf140c468e4cb783a07c2dac76ac8ef4717e8->leave($__internal_9922762a58a801cd875c1587145bf140c468e4cb783a07c2dac76ac8ef4717e8_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_976d4bf5ae161a7523764dcfd77d8f5c333dfa6ceab09da9610e5c34b404ae08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976d4bf5ae161a7523764dcfd77d8f5c333dfa6ceab09da9610e5c34b404ae08->enter($__internal_976d4bf5ae161a7523764dcfd77d8f5c333dfa6ceab09da9610e5c34b404ae08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_18053da7218f10c865478b45001d8df57d8059d8599942b6c6c427983f61aa3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18053da7218f10c865478b45001d8df57d8059d8599942b6c6c427983f61aa3e->enter($__internal_18053da7218f10c865478b45001d8df57d8059d8599942b6c6c427983f61aa3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 25, $this->getSourceContext()); })())));
        echo "
        ";
        
        $__internal_18053da7218f10c865478b45001d8df57d8059d8599942b6c6c427983f61aa3e->leave($__internal_18053da7218f10c865478b45001d8df57d8059d8599942b6c6c427983f61aa3e_prof);

        
        $__internal_976d4bf5ae161a7523764dcfd77d8f5c333dfa6ceab09da9610e5c34b404ae08->leave($__internal_976d4bf5ae161a7523764dcfd77d8f5c333dfa6ceab09da9610e5c34b404ae08_prof);

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
