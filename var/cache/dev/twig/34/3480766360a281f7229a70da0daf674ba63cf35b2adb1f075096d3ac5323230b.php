<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_ab295aac68e24d0e7532d2b9160eb2a06d1ec974373d0571f5a3064fa5b53cf5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24b9a399165c623d2e83740450a9de9b8ed5653aa212653a1c304b9568fe969b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b9a399165c623d2e83740450a9de9b8ed5653aa212653a1c304b9568fe969b->enter($__internal_24b9a399165c623d2e83740450a9de9b8ed5653aa212653a1c304b9568fe969b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $__internal_1e73d19e9983c57cc17c3caf07d3cc878f26a28ff142de98a67ac2068c4a9e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e73d19e9983c57cc17c3caf07d3cc878f26a28ff142de98a67ac2068c4a9e5b->enter($__internal_1e73d19e9983c57cc17c3caf07d3cc878f26a28ff142de98a67ac2068c4a9e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24b9a399165c623d2e83740450a9de9b8ed5653aa212653a1c304b9568fe969b->leave($__internal_24b9a399165c623d2e83740450a9de9b8ed5653aa212653a1c304b9568fe969b_prof);

        
        $__internal_1e73d19e9983c57cc17c3caf07d3cc878f26a28ff142de98a67ac2068c4a9e5b->leave($__internal_1e73d19e9983c57cc17c3caf07d3cc878f26a28ff142de98a67ac2068c4a9e5b_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_582156ed29495923ff0f7bb7e09151cbc477a7b20e9bfa89d5853cd0390591c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582156ed29495923ff0f7bb7e09151cbc477a7b20e9bfa89d5853cd0390591c2->enter($__internal_582156ed29495923ff0f7bb7e09151cbc477a7b20e9bfa89d5853cd0390591c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_1f9144efaf2360c706e5a7e15068cc0c1d8cc112e46c985225f6bce6515dbd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9144efaf2360c706e5a7e15068cc0c1d8cc112e46c985225f6bce6515dbd4a->enter($__internal_1f9144efaf2360c706e5a7e15068cc0c1d8cc112e46c985225f6bce6515dbd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_1f9144efaf2360c706e5a7e15068cc0c1d8cc112e46c985225f6bce6515dbd4a->leave($__internal_1f9144efaf2360c706e5a7e15068cc0c1d8cc112e46c985225f6bce6515dbd4a_prof);

        
        $__internal_582156ed29495923ff0f7bb7e09151cbc477a7b20e9bfa89d5853cd0390591c2->leave($__internal_582156ed29495923ff0f7bb7e09151cbc477a7b20e9bfa89d5853cd0390591c2_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_aefd81827920c24fcbb0fd45a9a7158a3a5626597dcec68c5821115181a4425e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefd81827920c24fcbb0fd45a9a7158a3a5626597dcec68c5821115181a4425e->enter($__internal_aefd81827920c24fcbb0fd45a9a7158a3a5626597dcec68c5821115181a4425e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_8b08e95e4ad4e55c85efafe5737a2be1621d2a5229eb59bad4017f80a24888ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b08e95e4ad4e55c85efafe5737a2be1621d2a5229eb59bad4017f80a24888ed->enter($__internal_8b08e95e4ad4e55c85efafe5737a2be1621d2a5229eb59bad4017f80a24888ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_8b08e95e4ad4e55c85efafe5737a2be1621d2a5229eb59bad4017f80a24888ed->leave($__internal_8b08e95e4ad4e55c85efafe5737a2be1621d2a5229eb59bad4017f80a24888ed_prof);

        
        $__internal_aefd81827920c24fcbb0fd45a9a7158a3a5626597dcec68c5821115181a4425e->leave($__internal_aefd81827920c24fcbb0fd45a9a7158a3a5626597dcec68c5821115181a4425e_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_02ac020557dfe8f23518316630c40d282962eb28c10710ae371e4776654c878d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ac020557dfe8f23518316630c40d282962eb28c10710ae371e4776654c878d->enter($__internal_02ac020557dfe8f23518316630c40d282962eb28c10710ae371e4776654c878d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_8ef23e7c69efa268c4d52e8c7ebbdbdb68f520e4c42e70c1d4b45095037ae74b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef23e7c69efa268c4d52e8c7ebbdbdb68f520e4c42e70c1d4b45095037ae74b->enter($__internal_8ef23e7c69efa268c4d52e8c7ebbdbdb68f520e4c42e70c1d4b45095037ae74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if (($context["decorator"] ?? $this->getContext($context, "decorator"))) {
            echo $this->getAttribute(($context["decorator"] ?? $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "children", array()));
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
        if (($context["decorator"] ?? $this->getContext($context, "decorator"))) {
            echo $this->getAttribute(($context["decorator"] ?? $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_8ef23e7c69efa268c4d52e8c7ebbdbdb68f520e4c42e70c1d4b45095037ae74b->leave($__internal_8ef23e7c69efa268c4d52e8c7ebbdbdb68f520e4c42e70c1d4b45095037ae74b_prof);

        
        $__internal_02ac020557dfe8f23518316630c40d282962eb28c10710ae371e4776654c878d->leave($__internal_02ac020557dfe8f23518316630c40d282962eb28c10710ae371e4776654c878d_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_27cefbf09436b8da25e4b4f2315ec97faa50fde7584354453d237c2db739584c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27cefbf09436b8da25e4b4f2315ec97faa50fde7584354453d237c2db739584c->enter($__internal_27cefbf09436b8da25e4b4f2315ec97faa50fde7584354453d237c2db739584c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_99a3044f23059efe861572579c8d726a6bd72fd4f92bf9d1e6688d48a06d8fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a3044f23059efe861572579c8d726a6bd72fd4f92bf9d1e6688d48a06d8fa6->enter($__internal_99a3044f23059efe861572579c8d726a6bd72fd4f92bf9d1e6688d48a06d8fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(($context["child"] ?? $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_99a3044f23059efe861572579c8d726a6bd72fd4f92bf9d1e6688d48a06d8fa6->leave($__internal_99a3044f23059efe861572579c8d726a6bd72fd4f92bf9d1e6688d48a06d8fa6_prof);

        
        $__internal_27cefbf09436b8da25e4b4f2315ec97faa50fde7584354453d237c2db739584c->leave($__internal_27cefbf09436b8da25e4b4f2315ec97faa50fde7584354453d237c2db739584c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "SonataBlockBundle:Block:block_container.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
