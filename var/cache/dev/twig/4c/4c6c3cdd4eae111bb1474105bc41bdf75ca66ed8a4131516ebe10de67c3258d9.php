<?php

/* @SyliusUi/Menu/simple.html.twig */
class __TwigTemplate_2d99d502d8099843756f59824bd7df4c69753892f6532cf0eaea73cedb920577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SyliusUi/Menu/simple.html.twig", 1);
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
        $__internal_33c7434b8a89038a5f4270bc6ba8db0129c12d444e8d0b3cd19e2e95c975eb49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c7434b8a89038a5f4270bc6ba8db0129c12d444e8d0b3cd19e2e95c975eb49->enter($__internal_33c7434b8a89038a5f4270bc6ba8db0129c12d444e8d0b3cd19e2e95c975eb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Menu/simple.html.twig"));

        $__internal_3a57319c3422f9192f3a503cb75dad69ce548e10391acc17f29371b47fa00b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a57319c3422f9192f3a503cb75dad69ce548e10391acc17f29371b47fa00b81->enter($__internal_3a57319c3422f9192f3a503cb75dad69ce548e10391acc17f29371b47fa00b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Menu/simple.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33c7434b8a89038a5f4270bc6ba8db0129c12d444e8d0b3cd19e2e95c975eb49->leave($__internal_33c7434b8a89038a5f4270bc6ba8db0129c12d444e8d0b3cd19e2e95c975eb49_prof);

        
        $__internal_3a57319c3422f9192f3a503cb75dad69ce548e10391acc17f29371b47fa00b81->leave($__internal_3a57319c3422f9192f3a503cb75dad69ce548e10391acc17f29371b47fa00b81_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_af70e1aa086f97c6cf79e4728505ba1b886895a1b8413b5af599c1a650f6b8e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af70e1aa086f97c6cf79e4728505ba1b886895a1b8413b5af599c1a650f6b8e7->enter($__internal_af70e1aa086f97c6cf79e4728505ba1b886895a1b8413b5af599c1a650f6b8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_1ff2f2b8aa515ba3ac9d11f703e766d986ccef5b6846382e72745396e7dfa379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff2f2b8aa515ba3ac9d11f703e766d986ccef5b6846382e72745396e7dfa379->enter($__internal_1ff2f2b8aa515ba3ac9d11f703e766d986ccef5b6846382e72745396e7dfa379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

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
        
        $__internal_1ff2f2b8aa515ba3ac9d11f703e766d986ccef5b6846382e72745396e7dfa379->leave($__internal_1ff2f2b8aa515ba3ac9d11f703e766d986ccef5b6846382e72745396e7dfa379_prof);

        
        $__internal_af70e1aa086f97c6cf79e4728505ba1b886895a1b8413b5af599c1a650f6b8e7->leave($__internal_af70e1aa086f97c6cf79e4728505ba1b886895a1b8413b5af599c1a650f6b8e7_prof);

    }

    // line 10
    public function block_list($context, array $blocks = array())
    {
        $__internal_dd5d54ee2ed0669fcbfe2a9ebeee1ea089c71f52781778a4a709f72d0d1b7b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5d54ee2ed0669fcbfe2a9ebeee1ea089c71f52781778a4a709f72d0d1b7b2a->enter($__internal_dd5d54ee2ed0669fcbfe2a9ebeee1ea089c71f52781778a4a709f72d0d1b7b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_c880cc400443395894904d6c474d0c0cfb47751467d3e913744dfdadd4307551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c880cc400443395894904d6c474d0c0cfb47751467d3e913744dfdadd4307551->enter($__internal_c880cc400443395894904d6c474d0c0cfb47751467d3e913744dfdadd4307551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
        
        $__internal_c880cc400443395894904d6c474d0c0cfb47751467d3e913744dfdadd4307551->leave($__internal_c880cc400443395894904d6c474d0c0cfb47751467d3e913744dfdadd4307551_prof);

        
        $__internal_dd5d54ee2ed0669fcbfe2a9ebeee1ea089c71f52781778a4a709f72d0d1b7b2a->leave($__internal_dd5d54ee2ed0669fcbfe2a9ebeee1ea089c71f52781778a4a709f72d0d1b7b2a_prof);

    }

    // line 16
    public function block_item($context, array $blocks = array())
    {
        $__internal_1c79453d22d9687f1605fab8999070028f14a2af9f84ecdea0223079a0805ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c79453d22d9687f1605fab8999070028f14a2af9f84ecdea0223079a0805ac5->enter($__internal_1c79453d22d9687f1605fab8999070028f14a2af9f84ecdea0223079a0805ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_a294c3ef035c21450036e953db5282554830bc56ff73aa2fbbf3d876aacfd2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a294c3ef035c21450036e953db5282554830bc56ff73aa2fbbf3d876aacfd2db->enter($__internal_a294c3ef035c21450036e953db5282554830bc56ff73aa2fbbf3d876aacfd2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

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
        
        $__internal_a294c3ef035c21450036e953db5282554830bc56ff73aa2fbbf3d876aacfd2db->leave($__internal_a294c3ef035c21450036e953db5282554830bc56ff73aa2fbbf3d876aacfd2db_prof);

        
        $__internal_1c79453d22d9687f1605fab8999070028f14a2af9f84ecdea0223079a0805ac5->leave($__internal_1c79453d22d9687f1605fab8999070028f14a2af9f84ecdea0223079a0805ac5_prof);

    }

    // line 23
    public function block_icon($context, array $blocks = array())
    {
        $__internal_84005157df29b240722ca0715010f10963135d64c10f79d1f6c51c63b14afaa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84005157df29b240722ca0715010f10963135d64c10f79d1f6c51c63b14afaa6->enter($__internal_84005157df29b240722ca0715010f10963135d64c10f79d1f6c51c63b14afaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        $__internal_aa3c9b9b66e7041d300b82acf24ebae87852833b7f8e0448c47cdb06dff7e09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3c9b9b66e7041d300b82acf24ebae87852833b7f8e0448c47cdb06dff7e09d->enter($__internal_aa3c9b9b66e7041d300b82acf24ebae87852833b7f8e0448c47cdb06dff7e09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

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
        
        $__internal_aa3c9b9b66e7041d300b82acf24ebae87852833b7f8e0448c47cdb06dff7e09d->leave($__internal_aa3c9b9b66e7041d300b82acf24ebae87852833b7f8e0448c47cdb06dff7e09d_prof);

        
        $__internal_84005157df29b240722ca0715010f10963135d64c10f79d1f6c51c63b14afaa6->leave($__internal_84005157df29b240722ca0715010f10963135d64c10f79d1f6c51c63b14afaa6_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Menu/simple.html.twig";
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
", "@SyliusUi/Menu/simple.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Menu/simple.html.twig");
    }
}
