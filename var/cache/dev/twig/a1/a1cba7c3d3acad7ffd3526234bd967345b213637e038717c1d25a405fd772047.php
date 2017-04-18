<?php

/* @User/layout.html.twig */
class __TwigTemplate_01fdac27fb5d10c26b1de3ef44433203cfcfcdd167a92bc7221c0996aee0dcce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "@User/layout.html.twig", 1);
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
        $__internal_b800dfe52fdf562ef95a8a377270a6c35f9e880c819c35db1dee3d6db909d80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b800dfe52fdf562ef95a8a377270a6c35f9e880c819c35db1dee3d6db909d80a->enter($__internal_b800dfe52fdf562ef95a8a377270a6c35f9e880c819c35db1dee3d6db909d80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

        $__internal_950de9c9d564ac0ad4bcba405e981096240422dc3f9e071d92719f99f9d651f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950de9c9d564ac0ad4bcba405e981096240422dc3f9e071d92719f99f9d651f5->enter($__internal_950de9c9d564ac0ad4bcba405e981096240422dc3f9e071d92719f99f9d651f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b800dfe52fdf562ef95a8a377270a6c35f9e880c819c35db1dee3d6db909d80a->leave($__internal_b800dfe52fdf562ef95a8a377270a6c35f9e880c819c35db1dee3d6db909d80a_prof);

        
        $__internal_950de9c9d564ac0ad4bcba405e981096240422dc3f9e071d92719f99f9d651f5->leave($__internal_950de9c9d564ac0ad4bcba405e981096240422dc3f9e071d92719f99f9d651f5_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_50d38678511e5256e0e06d54f8d66b0b246da05a0b3788bac245d2ed85cb1c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d38678511e5256e0e06d54f8d66b0b246da05a0b3788bac245d2ed85cb1c37->enter($__internal_50d38678511e5256e0e06d54f8d66b0b246da05a0b3788bac245d2ed85cb1c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_a7c928c0b8e5127ba3f19f839a4be5adfb9e9a68ef8ff95bb430508e89812c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c928c0b8e5127ba3f19f839a4be5adfb9e9a68ef8ff95bb430508e89812c9a->enter($__internal_a7c928c0b8e5127ba3f19f839a4be5adfb9e9a68ef8ff95bb430508e89812c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_a7c928c0b8e5127ba3f19f839a4be5adfb9e9a68ef8ff95bb430508e89812c9a->leave($__internal_a7c928c0b8e5127ba3f19f839a4be5adfb9e9a68ef8ff95bb430508e89812c9a_prof);

        
        $__internal_50d38678511e5256e0e06d54f8d66b0b246da05a0b3788bac245d2ed85cb1c37->leave($__internal_50d38678511e5256e0e06d54f8d66b0b246da05a0b3788bac245d2ed85cb1c37_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_a8f3bb4a4a57194109f39080b9314614f019361417db2faae7fbc6109c74513e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f3bb4a4a57194109f39080b9314614f019361417db2faae7fbc6109c74513e->enter($__internal_a8f3bb4a4a57194109f39080b9314614f019361417db2faae7fbc6109c74513e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_06c3bbf5666d6b2c58ef95268681a50dd6b38b58bfe373bbbc399f4848e1aa8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c3bbf5666d6b2c58ef95268681a50dd6b38b58bfe373bbbc399f4848e1aa8a->enter($__internal_06c3bbf5666d6b2c58ef95268681a50dd6b38b58bfe373bbbc399f4848e1aa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    ";
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 16
        echo "
";
        
        $__internal_06c3bbf5666d6b2c58ef95268681a50dd6b38b58bfe373bbbc399f4848e1aa8a->leave($__internal_06c3bbf5666d6b2c58ef95268681a50dd6b38b58bfe373bbbc399f4848e1aa8a_prof);

        
        $__internal_a8f3bb4a4a57194109f39080b9314614f019361417db2faae7fbc6109c74513e->leave($__internal_a8f3bb4a4a57194109f39080b9314614f019361417db2faae7fbc6109c74513e_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15bee6273a3a0c8439dbde9dcd4e46bcc411898a133ce280965a308307ba6f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15bee6273a3a0c8439dbde9dcd4e46bcc411898a133ce280965a308307ba6f22->enter($__internal_15bee6273a3a0c8439dbde9dcd4e46bcc411898a133ce280965a308307ba6f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4172b61c250c807bd7218a279b7659de099e2faababdf614b87b2c588ee9609f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4172b61c250c807bd7218a279b7659de099e2faababdf614b87b2c588ee9609f->enter($__internal_4172b61c250c807bd7218a279b7659de099e2faababdf614b87b2c588ee9609f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "
    ";
        
        $__internal_4172b61c250c807bd7218a279b7659de099e2faababdf614b87b2c588ee9609f->leave($__internal_4172b61c250c807bd7218a279b7659de099e2faababdf614b87b2c588ee9609f_prof);

        
        $__internal_15bee6273a3a0c8439dbde9dcd4e46bcc411898a133ce280965a308307ba6f22->leave($__internal_15bee6273a3a0c8439dbde9dcd4e46bcc411898a133ce280965a308307ba6f22_prof);

    }

    public function getTemplateName()
    {
        return "@User/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 14,  106 => 13,  95 => 16,  93 => 13,  90 => 12,  81 => 9,  76 => 8,  71 => 7,  68 => 5,  59 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}{% endblock %}
{% block content %}

    {# On affiche les messages flash que définissent les contrôleurs du bundle #}
    {% for key, message in app.session.flashbag.all() %}
        <div class=\"alert alert-{{ key }}\">
            {{ message|trans({}, 'FOSUserBundle') }}
        </div>
    {% endfor %}

    {% block fos_user_content %}

    {% endblock fos_user_content %}

{% endblock %}", "@User/layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/layout.html.twig");
    }
}
