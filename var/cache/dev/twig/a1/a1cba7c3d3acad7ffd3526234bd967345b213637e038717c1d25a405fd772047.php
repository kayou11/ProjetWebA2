<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_01fdac27fb5d10c26b1de3ef44433203cfcfcdd167a92bc7221c0996aee0dcce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b32febea461844aae64cc1a85fdbf1824567d65254f5f0ce21850e7388df45df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32febea461844aae64cc1a85fdbf1824567d65254f5f0ce21850e7388df45df->enter($__internal_b32febea461844aae64cc1a85fdbf1824567d65254f5f0ce21850e7388df45df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_77fb88f9836e76f582a4faf381b7fdddd03be4d25d7b6613d3d3f03be3c1146d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fb88f9836e76f582a4faf381b7fdddd03be4d25d7b6613d3d3f03be3c1146d->enter($__internal_77fb88f9836e76f582a4faf381b7fdddd03be4d25d7b6613d3d3f03be3c1146d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b32febea461844aae64cc1a85fdbf1824567d65254f5f0ce21850e7388df45df->leave($__internal_b32febea461844aae64cc1a85fdbf1824567d65254f5f0ce21850e7388df45df_prof);

        
        $__internal_77fb88f9836e76f582a4faf381b7fdddd03be4d25d7b6613d3d3f03be3c1146d->leave($__internal_77fb88f9836e76f582a4faf381b7fdddd03be4d25d7b6613d3d3f03be3c1146d_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_ecd43ef33ff2699db606bb95669c7d8800af249eb8ad4b7da1cb30cbda07263a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd43ef33ff2699db606bb95669c7d8800af249eb8ad4b7da1cb30cbda07263a->enter($__internal_ecd43ef33ff2699db606bb95669c7d8800af249eb8ad4b7da1cb30cbda07263a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_639ba9ea7de230af710feceb1f0703483dae6d1a102314ccccfc07a9641598dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639ba9ea7de230af710feceb1f0703483dae6d1a102314ccccfc07a9641598dc->enter($__internal_639ba9ea7de230af710feceb1f0703483dae6d1a102314ccccfc07a9641598dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_639ba9ea7de230af710feceb1f0703483dae6d1a102314ccccfc07a9641598dc->leave($__internal_639ba9ea7de230af710feceb1f0703483dae6d1a102314ccccfc07a9641598dc_prof);

        
        $__internal_ecd43ef33ff2699db606bb95669c7d8800af249eb8ad4b7da1cb30cbda07263a->leave($__internal_ecd43ef33ff2699db606bb95669c7d8800af249eb8ad4b7da1cb30cbda07263a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed931f64d2efe3adbf6d3b25126269bc77a97241707e2ab1f682c474485b1fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed931f64d2efe3adbf6d3b25126269bc77a97241707e2ab1f682c474485b1fc6->enter($__internal_ed931f64d2efe3adbf6d3b25126269bc77a97241707e2ab1f682c474485b1fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ac941075c63b7777d933b1b525205b174154502a30a3577a547a4c5b4e7e388a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac941075c63b7777d933b1b525205b174154502a30a3577a547a4c5b4e7e388a->enter($__internal_ac941075c63b7777d933b1b525205b174154502a30a3577a547a4c5b4e7e388a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 7
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                    ";
                // line 9
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 16
        echo "
";
        
        $__internal_ac941075c63b7777d933b1b525205b174154502a30a3577a547a4c5b4e7e388a->leave($__internal_ac941075c63b7777d933b1b525205b174154502a30a3577a547a4c5b4e7e388a_prof);

        
        $__internal_ed931f64d2efe3adbf6d3b25126269bc77a97241707e2ab1f682c474485b1fc6->leave($__internal_ed931f64d2efe3adbf6d3b25126269bc77a97241707e2ab1f682c474485b1fc6_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea1e537d9288eadca6c56d169d24c3a92f189be2b942ed78b79224fa2ddfe071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1e537d9288eadca6c56d169d24c3a92f189be2b942ed78b79224fa2ddfe071->enter($__internal_ea1e537d9288eadca6c56d169d24c3a92f189be2b942ed78b79224fa2ddfe071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_20bbf06f4e6988e44d7c5ed1e47798bff7a5d2d8a7eeb6afdbdae871c1164113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bbf06f4e6988e44d7c5ed1e47798bff7a5d2d8a7eeb6afdbdae871c1164113->enter($__internal_20bbf06f4e6988e44d7c5ed1e47798bff7a5d2d8a7eeb6afdbdae871c1164113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    ";
        
        $__internal_20bbf06f4e6988e44d7c5ed1e47798bff7a5d2d8a7eeb6afdbdae871c1164113->leave($__internal_20bbf06f4e6988e44d7c5ed1e47798bff7a5d2d8a7eeb6afdbdae871c1164113_prof);

        
        $__internal_ea1e537d9288eadca6c56d169d24c3a92f189be2b942ed78b79224fa2ddfe071->leave($__internal_ea1e537d9288eadca6c56d169d24c3a92f189be2b942ed78b79224fa2ddfe071_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 15,  117 => 14,  106 => 16,  104 => 14,  101 => 13,  95 => 12,  86 => 9,  81 => 8,  76 => 7,  71 => 6,  68 => 4,  59 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}
{% block style %}{% endblock %}
{% block content %}

    {# On affiche les messages flash que définissent les contrôleurs du bundle #}
    {% for key, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
    {% endfor %}

    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}", "@FOSUser/layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/layout.html.twig");
    }
}
