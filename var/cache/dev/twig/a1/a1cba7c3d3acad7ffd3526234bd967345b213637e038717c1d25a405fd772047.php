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
        $__internal_ee78923b68462b3a926edf7f9c874f62d8b15c7731579a627dc1f23fd6d4e664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee78923b68462b3a926edf7f9c874f62d8b15c7731579a627dc1f23fd6d4e664->enter($__internal_ee78923b68462b3a926edf7f9c874f62d8b15c7731579a627dc1f23fd6d4e664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_32dd60712dd29b5f95cbea85d4c2eac055fbd85714f48a5a1508df4cd8980c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32dd60712dd29b5f95cbea85d4c2eac055fbd85714f48a5a1508df4cd8980c32->enter($__internal_32dd60712dd29b5f95cbea85d4c2eac055fbd85714f48a5a1508df4cd8980c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee78923b68462b3a926edf7f9c874f62d8b15c7731579a627dc1f23fd6d4e664->leave($__internal_ee78923b68462b3a926edf7f9c874f62d8b15c7731579a627dc1f23fd6d4e664_prof);

        
        $__internal_32dd60712dd29b5f95cbea85d4c2eac055fbd85714f48a5a1508df4cd8980c32->leave($__internal_32dd60712dd29b5f95cbea85d4c2eac055fbd85714f48a5a1508df4cd8980c32_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_45b2f2bd1d75630b6eed448133e7cad8486716a4b778026297e43af3c5f4377d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b2f2bd1d75630b6eed448133e7cad8486716a4b778026297e43af3c5f4377d->enter($__internal_45b2f2bd1d75630b6eed448133e7cad8486716a4b778026297e43af3c5f4377d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_12a91fb04565266223d069109a52396c0ad036d1970bd235539f05e719cdec2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a91fb04565266223d069109a52396c0ad036d1970bd235539f05e719cdec2c->enter($__internal_12a91fb04565266223d069109a52396c0ad036d1970bd235539f05e719cdec2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_12a91fb04565266223d069109a52396c0ad036d1970bd235539f05e719cdec2c->leave($__internal_12a91fb04565266223d069109a52396c0ad036d1970bd235539f05e719cdec2c_prof);

        
        $__internal_45b2f2bd1d75630b6eed448133e7cad8486716a4b778026297e43af3c5f4377d->leave($__internal_45b2f2bd1d75630b6eed448133e7cad8486716a4b778026297e43af3c5f4377d_prof);

    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9b89b6a40b1990e58ad93b38d5955879cb8ff3635cb22eda2b2b215fa6971b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b89b6a40b1990e58ad93b38d5955879cb8ff3635cb22eda2b2b215fa6971b2->enter($__internal_f9b89b6a40b1990e58ad93b38d5955879cb8ff3635cb22eda2b2b215fa6971b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eb2dd11ff7f52b4b364426431811896f355357f2a1f7c1311b976d7a5d5c0382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2dd11ff7f52b4b364426431811896f355357f2a1f7c1311b976d7a5d5c0382->enter($__internal_eb2dd11ff7f52b4b364426431811896f355357f2a1f7c1311b976d7a5d5c0382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 13
        echo "
    ";
        
        $__internal_eb2dd11ff7f52b4b364426431811896f355357f2a1f7c1311b976d7a5d5c0382->leave($__internal_eb2dd11ff7f52b4b364426431811896f355357f2a1f7c1311b976d7a5d5c0382_prof);

        
        $__internal_f9b89b6a40b1990e58ad93b38d5955879cb8ff3635cb22eda2b2b215fa6971b2->leave($__internal_f9b89b6a40b1990e58ad93b38d5955879cb8ff3635cb22eda2b2b215fa6971b2_prof);

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
