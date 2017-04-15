<?php

/* SyliusUiBundle:Menu:simple.html.twig */
class __TwigTemplate_e50e0f4de087bdcb5854cfd273fbcddcfcc9439eb8205c01f052ae7c15554af5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SyliusUiBundle:Menu:simple.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'icon' => array($this, 'block_icon'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a0aff6f63c78e5575723b0e4d833a62abf9ea6006ed7ad3a754148767e4550e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0aff6f63c78e5575723b0e4d833a62abf9ea6006ed7ad3a754148767e4550e->enter($__internal_8a0aff6f63c78e5575723b0e4d833a62abf9ea6006ed7ad3a754148767e4550e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Menu:simple.html.twig"));

        $__internal_28fe7c8a488b8270c8732108d84295c3e27bdea01990e8423429167973fa9649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28fe7c8a488b8270c8732108d84295c3e27bdea01990e8423429167973fa9649->enter($__internal_28fe7c8a488b8270c8732108d84295c3e27bdea01990e8423429167973fa9649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Menu:simple.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a0aff6f63c78e5575723b0e4d833a62abf9ea6006ed7ad3a754148767e4550e->leave($__internal_8a0aff6f63c78e5575723b0e4d833a62abf9ea6006ed7ad3a754148767e4550e_prof);

        
        $__internal_28fe7c8a488b8270c8732108d84295c3e27bdea01990e8423429167973fa9649->leave($__internal_28fe7c8a488b8270c8732108d84295c3e27bdea01990e8423429167973fa9649_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_0699e70dc7e4a7b5290fdb26ffc5cc42c3980337d909ac8985a85e5e6ef45263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0699e70dc7e4a7b5290fdb26ffc5cc42c3980337d909ac8985a85e5e6ef45263->enter($__internal_0699e70dc7e4a7b5290fdb26ffc5cc42c3980337d909ac8985a85e5e6ef45263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_623017b30637cf342b1aa0cf63fcdd67272440c665fc4f5d51ffbedc7bae4f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623017b30637cf342b1aa0cf63fcdd67272440c665fc4f5d51ffbedc7bae4f21->enter($__internal_623017b30637cf342b1aa0cf63fcdd67272440c665fc4f5d51ffbedc7bae4f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        echo "    <div class=\"ui fluid vertical menu\">
        <div class=\"header item\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array())), "html", null, true);
        echo "</div>
        ";
        // line 6
        $this->displayBlock("list", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_623017b30637cf342b1aa0cf63fcdd67272440c665fc4f5d51ffbedc7bae4f21->leave($__internal_623017b30637cf342b1aa0cf63fcdd67272440c665fc4f5d51ffbedc7bae4f21_prof);

        
        $__internal_0699e70dc7e4a7b5290fdb26ffc5cc42c3980337d909ac8985a85e5e6ef45263->leave($__internal_0699e70dc7e4a7b5290fdb26ffc5cc42c3980337d909ac8985a85e5e6ef45263_prof);

    }

    // line 10
    public function block_list($context, array $blocks = array())
    {
        $__internal_2483dddb04103ad4d7b6f6243f408691fe3d09cf2708e1c4e71c141a49ec2e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2483dddb04103ad4d7b6f6243f408691fe3d09cf2708e1c4e71c141a49ec2e84->enter($__internal_2483dddb04103ad4d7b6f6243f408691fe3d09cf2708e1c4e71c141a49ec2e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_230db30ee49013a6e618dab227e405ce61e3c86e28843b3a4c839b098f22f647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230db30ee49013a6e618dab227e405ce61e3c86e28843b3a4c839b098f22f647->enter($__internal_230db30ee49013a6e618dab227e405ce61e3c86e28843b3a4c839b098f22f647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "        ";
            $this->displayBlock("item", $context, $blocks);
            echo "
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_230db30ee49013a6e618dab227e405ce61e3c86e28843b3a4c839b098f22f647->leave($__internal_230db30ee49013a6e618dab227e405ce61e3c86e28843b3a4c839b098f22f647_prof);

        
        $__internal_2483dddb04103ad4d7b6f6243f408691fe3d09cf2708e1c4e71c141a49ec2e84->leave($__internal_2483dddb04103ad4d7b6f6243f408691fe3d09cf2708e1c4e71c141a49ec2e84_prof);

    }

    // line 16
    public function block_item($context, array $blocks = array())
    {
        $__internal_7ea5bff1601e38e378fba0de71c37c8d514561f99f6fd3da9a04b5504dcffb5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea5bff1601e38e378fba0de71c37c8d514561f99f6fd3da9a04b5504dcffb5b->enter($__internal_7ea5bff1601e38e378fba0de71c37c8d514561f99f6fd3da9a04b5504dcffb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_8bc0e09a07f3d2fa42caa864607872b2116b25a7fe909db564063ccccf3cb4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc0e09a07f3d2fa42caa864607872b2116b25a7fe909db564063ccccf3cb4f1->enter($__internal_8bc0e09a07f3d2fa42caa864607872b2116b25a7fe909db564063ccccf3cb4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 17
        echo "    <a class=\"item\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\">
        ";
        // line 18
        $this->displayBlock("icon", $context, $blocks);
        echo "
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array())), "html", null, true);
        echo "
    </a>
";
        
        $__internal_8bc0e09a07f3d2fa42caa864607872b2116b25a7fe909db564063ccccf3cb4f1->leave($__internal_8bc0e09a07f3d2fa42caa864607872b2116b25a7fe909db564063ccccf3cb4f1_prof);

        
        $__internal_7ea5bff1601e38e378fba0de71c37c8d514561f99f6fd3da9a04b5504dcffb5b->leave($__internal_7ea5bff1601e38e378fba0de71c37c8d514561f99f6fd3da9a04b5504dcffb5b_prof);

    }

    // line 23
    public function block_icon($context, array $blocks = array())
    {
        $__internal_56aceeef632cc4af18ab561f41c417d801a0a79c063c3b9f9def61792a6a98ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56aceeef632cc4af18ab561f41c417d801a0a79c063c3b9f9def61792a6a98ce->enter($__internal_56aceeef632cc4af18ab561f41c417d801a0a79c063c3b9f9def61792a6a98ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        $__internal_a05432da7399b30018d21275ac8e9364f58c40adc47ddb33a7320d38faeee7c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05432da7399b30018d21275ac8e9364f58c40adc47ddb33a7320d38faeee7c6->enter($__internal_a05432da7399b30018d21275ac8e9364f58c40adc47ddb33a7320d38faeee7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        // line 24
        echo "    ";
        $context["icon"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttribute", array(0 => "icon"), "method");
        // line 25
        echo "    ";
        if (($context["icon"] ?? $this->getContext($context, "icon"))) {
            echo "<i class=\"icon ";
            echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
            echo "\"></i> ";
        }
        
        $__internal_a05432da7399b30018d21275ac8e9364f58c40adc47ddb33a7320d38faeee7c6->leave($__internal_a05432da7399b30018d21275ac8e9364f58c40adc47ddb33a7320d38faeee7c6_prof);

        
        $__internal_56aceeef632cc4af18ab561f41c417d801a0a79c063c3b9f9def61792a6a98ce->leave($__internal_56aceeef632cc4af18ab561f41c417d801a0a79c063c3b9f9def61792a6a98ce_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Menu:simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 25,  164 => 24,  155 => 23,  142 => 19,  138 => 18,  133 => 17,  124 => 16,  99 => 12,  81 => 11,  72 => 10,  59 => 6,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    <div class=\"ui fluid vertical menu\">
        <div class=\"header item\">{{ item.label|trans }}</div>
        {{ block('list') }}
    </div>
{% endblock %}

{% block list %}
    {% for item in item.children %}
        {{ block('item') }}
    {% endfor %}
{% endblock %}

{% block item %}
    <a class=\"item\" href=\"{{ item.uri }}\">
        {{ block('icon') }}
        {{ item.label|trans }}
    </a>
{% endblock %}

{% block icon %}
    {% set icon = item.labelAttribute('icon') %}
    {% if icon %}<i class=\"icon {{ icon }}\"></i> {% endif %}
{% endblock %}
", "SyliusUiBundle:Menu:simple.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Menu/simple.html.twig");
    }
}
