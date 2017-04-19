<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_e6c4eedca3ffc26ba45274d7f60e38e16c4fb9fe1a0ddc7fd4dc4ad8da9793b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@User/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_998c0721af334035febfe2937ec64a10b187992e73b7530209ed926695799128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_998c0721af334035febfe2937ec64a10b187992e73b7530209ed926695799128->enter($__internal_998c0721af334035febfe2937ec64a10b187992e73b7530209ed926695799128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_0ea91f90ee42aab8c86247dc37d56b205221633d00458ae45946034f876286d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea91f90ee42aab8c86247dc37d56b205221633d00458ae45946034f876286d6->enter($__internal_0ea91f90ee42aab8c86247dc37d56b205221633d00458ae45946034f876286d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_998c0721af334035febfe2937ec64a10b187992e73b7530209ed926695799128->leave($__internal_998c0721af334035febfe2937ec64a10b187992e73b7530209ed926695799128_prof);

        
        $__internal_0ea91f90ee42aab8c86247dc37d56b205221633d00458ae45946034f876286d6->leave($__internal_0ea91f90ee42aab8c86247dc37d56b205221633d00458ae45946034f876286d6_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_37faf3cd9a976d0c14789a608856382e4a92ed77e6913158c7c8493e2216524f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37faf3cd9a976d0c14789a608856382e4a92ed77e6913158c7c8493e2216524f->enter($__internal_37faf3cd9a976d0c14789a608856382e4a92ed77e6913158c7c8493e2216524f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_ca8699a3d5ea03b03f5e49d6093a6f52f7c34f11cf9e44005aff07913187843c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8699a3d5ea03b03f5e49d6093a6f52f7c34f11cf9e44005aff07913187843c->enter($__internal_ca8699a3d5ea03b03f5e49d6093a6f52f7c34f11cf9e44005aff07913187843c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/profil.css\" type=\"text/css\" />
";
        
        $__internal_ca8699a3d5ea03b03f5e49d6093a6f52f7c34f11cf9e44005aff07913187843c->leave($__internal_ca8699a3d5ea03b03f5e49d6093a6f52f7c34f11cf9e44005aff07913187843c_prof);

        
        $__internal_37faf3cd9a976d0c14789a608856382e4a92ed77e6913158c7c8493e2216524f->leave($__internal_37faf3cd9a976d0c14789a608856382e4a92ed77e6913158c7c8493e2216524f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a6252ca079aa58fb47fb060f83c45bf0602688bce634a66e2e3a605d73bfadf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6252ca079aa58fb47fb060f83c45bf0602688bce634a66e2e3a605d73bfadf->enter($__internal_2a6252ca079aa58fb47fb060f83c45bf0602688bce634a66e2e3a605d73bfadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_64854e70868320b1a4fd92ab439db911a1cf9ab212b8ebc86158ca7bf16b6b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64854e70868320b1a4fd92ab439db911a1cf9ab212b8ebc86158ca7bf16b6b5e->enter($__internal_64854e70868320b1a4fd92ab439db911a1cf9ab212b8ebc86158ca7bf16b6b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("@User/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 6)->display($context);
        
        $__internal_64854e70868320b1a4fd92ab439db911a1cf9ab212b8ebc86158ca7bf16b6b5e->leave($__internal_64854e70868320b1a4fd92ab439db911a1cf9ab212b8ebc86158ca7bf16b6b5e_prof);

        
        $__internal_2a6252ca079aa58fb47fb060f83c45bf0602688bce634a66e2e3a605d73bfadf->leave($__internal_2a6252ca079aa58fb47fb060f83c45bf0602688bce634a66e2e3a605d73bfadf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@User/layout.html.twig\" %}
{% block style %}
    <link rel=\"stylesheet\" href=\"../../public/css/pages/profil.css\" type=\"text/css\" />
{% endblock %}
{% block fos_user_content %}
{% include \"@User/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
