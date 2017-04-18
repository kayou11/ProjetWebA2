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
        $__internal_6998a0ecc436ad75cc363c2a5e0b0f4c1881ab279636602f877d3b9fb0e5ad5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6998a0ecc436ad75cc363c2a5e0b0f4c1881ab279636602f877d3b9fb0e5ad5c->enter($__internal_6998a0ecc436ad75cc363c2a5e0b0f4c1881ab279636602f877d3b9fb0e5ad5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_d4abe3f16448b8332e46d4d5bdd48b6f50a49ccfbed58b34b7d75a25efc78b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4abe3f16448b8332e46d4d5bdd48b6f50a49ccfbed58b34b7d75a25efc78b81->enter($__internal_d4abe3f16448b8332e46d4d5bdd48b6f50a49ccfbed58b34b7d75a25efc78b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6998a0ecc436ad75cc363c2a5e0b0f4c1881ab279636602f877d3b9fb0e5ad5c->leave($__internal_6998a0ecc436ad75cc363c2a5e0b0f4c1881ab279636602f877d3b9fb0e5ad5c_prof);

        
        $__internal_d4abe3f16448b8332e46d4d5bdd48b6f50a49ccfbed58b34b7d75a25efc78b81->leave($__internal_d4abe3f16448b8332e46d4d5bdd48b6f50a49ccfbed58b34b7d75a25efc78b81_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e3fe48ab39c0d1e10a655412f97c6cafef0ff48ec18588ca4a8a7b1420195c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3fe48ab39c0d1e10a655412f97c6cafef0ff48ec18588ca4a8a7b1420195c9f->enter($__internal_e3fe48ab39c0d1e10a655412f97c6cafef0ff48ec18588ca4a8a7b1420195c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_97e0227058acb06e30be0f4e63bcbe6e5879245d4b4c007d1675cd7f32036603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e0227058acb06e30be0f4e63bcbe6e5879245d4b4c007d1675cd7f32036603->enter($__internal_97e0227058acb06e30be0f4e63bcbe6e5879245d4b4c007d1675cd7f32036603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 7
            echo "        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "
";
        
        $__internal_97e0227058acb06e30be0f4e63bcbe6e5879245d4b4c007d1675cd7f32036603->leave($__internal_97e0227058acb06e30be0f4e63bcbe6e5879245d4b4c007d1675cd7f32036603_prof);

        
        $__internal_e3fe48ab39c0d1e10a655412f97c6cafef0ff48ec18588ca4a8a7b1420195c9f->leave($__internal_e3fe48ab39c0d1e10a655412f97c6cafef0ff48ec18588ca4a8a7b1420195c9f_prof);

    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cecd510fb9876b0c92a9ddf4937d64d4f722096b0c9bb177c763a7d2a0888904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecd510fb9876b0c92a9ddf4937d64d4f722096b0c9bb177c763a7d2a0888904->enter($__internal_cecd510fb9876b0c92a9ddf4937d64d4f722096b0c9bb177c763a7d2a0888904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_23f51a9a51e071dc6f201aa139f26f644b192d88be060aff80107cd9f1c5e87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f51a9a51e071dc6f201aa139f26f644b192d88be060aff80107cd9f1c5e87e->enter($__internal_23f51a9a51e071dc6f201aa139f26f644b192d88be060aff80107cd9f1c5e87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 13
        echo "
    ";
        
        $__internal_23f51a9a51e071dc6f201aa139f26f644b192d88be060aff80107cd9f1c5e87e->leave($__internal_23f51a9a51e071dc6f201aa139f26f644b192d88be060aff80107cd9f1c5e87e_prof);

        
        $__internal_cecd510fb9876b0c92a9ddf4937d64d4f722096b0c9bb177c763a7d2a0888904->leave($__internal_cecd510fb9876b0c92a9ddf4937d64d4f722096b0c9bb177c763a7d2a0888904_prof);

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
        return array (  97 => 13,  88 => 12,  77 => 15,  75 => 12,  72 => 11,  63 => 8,  58 => 7,  53 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block content %}

    {# On affiche les messages flash que définissent les contrôleurs du bundle #}
    {% for key, message in app.session.flashbag.all() %}
        <div class=\"alert alert-{{ key }}\">
            {{ message|trans({}, 'FOSUserBundle') }}
        </div>
    {% endfor %}

    {% block fos_user_content %}

    {% endblock fos_user_content %}

{% endblock %}", "@FOSUser/layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/layout.html.twig");
    }
}
