<?php

/* SyliusAdminBundle::layout.html.twig */
class __TwigTemplate_3aa5d714bca3e657dc6adb80ed93d8e3f77a3aeb00b65d9058f9cc01982d9d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusUiBundle:Layout:sidebar.html.twig", "SyliusAdminBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'topbar' => array($this, 'block_topbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusUiBundle:Layout:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f74d63a4930a74ccf3c9bff3792be57da7297ed0b8313e911a77234741ed876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f74d63a4930a74ccf3c9bff3792be57da7297ed0b8313e911a77234741ed876->enter($__internal_6f74d63a4930a74ccf3c9bff3792be57da7297ed0b8313e911a77234741ed876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::layout.html.twig"));

        $__internal_db1d86935ff7ff72c1f2909f84d08409df116e399039edccd997468f7ae74636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1d86935ff7ff72c1f2909f84d08409df116e399039edccd997468f7ae74636->enter($__internal_db1d86935ff7ff72c1f2909f84d08409df116e399039edccd997468f7ae74636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f74d63a4930a74ccf3c9bff3792be57da7297ed0b8313e911a77234741ed876->leave($__internal_6f74d63a4930a74ccf3c9bff3792be57da7297ed0b8313e911a77234741ed876_prof);

        
        $__internal_db1d86935ff7ff72c1f2909f84d08409df116e399039edccd997468f7ae74636->leave($__internal_db1d86935ff7ff72c1f2909f84d08409df116e399039edccd997468f7ae74636_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f550b9378579eeb9f40d9caa2217f537b51e54642489ce362065903f64944f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f550b9378579eeb9f40d9caa2217f537b51e54642489ce362065903f64944f79->enter($__internal_f550b9378579eeb9f40d9caa2217f537b51e54642489ce362065903f64944f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5cac87b482cefaf3d32d35fdbe7e34cd9464a445ac30dbb4733b7b60884b6dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cac87b482cefaf3d32d35fdbe7e34cd9464a445ac30dbb4733b7b60884b6dc2->enter($__internal_5cac87b482cefaf3d32d35fdbe7e34cd9464a445ac30dbb4733b7b60884b6dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius | ";
        
        $__internal_5cac87b482cefaf3d32d35fdbe7e34cd9464a445ac30dbb4733b7b60884b6dc2->leave($__internal_5cac87b482cefaf3d32d35fdbe7e34cd9464a445ac30dbb4733b7b60884b6dc2_prof);

        
        $__internal_f550b9378579eeb9f40d9caa2217f537b51e54642489ce362065903f64944f79->leave($__internal_f550b9378579eeb9f40d9caa2217f537b51e54642489ce362065903f64944f79_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e009027b834a9df3d477d4d257443122d5167fe7277ba12a233d05d77fb8dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e009027b834a9df3d477d4d257443122d5167fe7277ba12a233d05d77fb8dac->enter($__internal_1e009027b834a9df3d477d4d257443122d5167fe7277ba12a233d05d77fb8dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_267aa7a60982aa203746e683c36ef715c97132e5acd6ee90f0b11c2e7b3d9be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267aa7a60982aa203746e683c36ef715c97132e5acd6ee90f0b11c2e7b3d9be9->enter($__internal_267aa7a60982aa203746e683c36ef715c97132e5acd6ee90f0b11c2e7b3d9be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_stylesheets.html.twig", "SyliusAdminBundle::layout.html.twig", 6)->display(array_merge($context, array("path" => "assets/admin/css/style.css")));
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.stylesheets"));
        echo "
";
        
        $__internal_267aa7a60982aa203746e683c36ef715c97132e5acd6ee90f0b11c2e7b3d9be9->leave($__internal_267aa7a60982aa203746e683c36ef715c97132e5acd6ee90f0b11c2e7b3d9be9_prof);

        
        $__internal_1e009027b834a9df3d477d4d257443122d5167fe7277ba12a233d05d77fb8dac->leave($__internal_1e009027b834a9df3d477d4d257443122d5167fe7277ba12a233d05d77fb8dac_prof);

    }

    // line 11
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_90f919a9a328df525334a4ce9748da3e51c07d2cd25dc4f7ec2bfbc731c42020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f919a9a328df525334a4ce9748da3e51c07d2cd25dc4f7ec2bfbc731c42020->enter($__internal_90f919a9a328df525334a4ce9748da3e51c07d2cd25dc4f7ec2bfbc731c42020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_43ecc6d2f4aa7c5dec460ef3ea1b8cc45abca46e96389a6e215df97ff63c7269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ecc6d2f4aa7c5dec460ef3ea1b8cc45abca46e96389a6e215df97ff63c7269->enter($__internal_43ecc6d2f4aa7c5dec460ef3ea1b8cc45abca46e96389a6e215df97ff63c7269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 12
        echo "    <a class=\"icon item\" id=\"sidebar-toggle\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.toggle_sidebar"), "html", null, true);
        echo "\">
        <i class=\"sidebar icon\"></i>
    </a>

    ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.topbar_left"));
        echo "

    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_channel_index", array("template" => "@SyliusAdmin/_channelLinks.html.twig")));
        echo "
    ";
        // line 19
        $this->loadTemplate("@SyliusAdmin/_search.html.twig", "SyliusAdminBundle::layout.html.twig", 19)->display($context);
        // line 20
        echo "
    <div class=\"ui left floated dividing empty item\"></div>

    ";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.topbar_middle"));
        echo "

    <div class=\"ui right floated dividing empty item\"></div>

    ";
        // line 27
        echo $this->env->getExtension('Sylius\Bundle\AdminBundle\Twig\NotificationWidgetExtension')->renderWidget($this->env);
        echo "
    ";
        // line 28
        $this->loadTemplate("@SyliusAdmin/_security.html.twig", "SyliusAdminBundle::layout.html.twig", 28)->display($context);
        // line 29
        echo "
    ";
        // line 30
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.topbar_right"));
        echo "
";
        
        $__internal_43ecc6d2f4aa7c5dec460ef3ea1b8cc45abca46e96389a6e215df97ff63c7269->leave($__internal_43ecc6d2f4aa7c5dec460ef3ea1b8cc45abca46e96389a6e215df97ff63c7269_prof);

        
        $__internal_90f919a9a328df525334a4ce9748da3e51c07d2cd25dc4f7ec2bfbc731c42020->leave($__internal_90f919a9a328df525334a4ce9748da3e51c07d2cd25dc4f7ec2bfbc731c42020_prof);

    }

    // line 33
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f282eb32115d29bfaa5883e228d0e15ecd8180105fd904e4088a79454d797145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f282eb32115d29bfaa5883e228d0e15ecd8180105fd904e4088a79454d797145->enter($__internal_f282eb32115d29bfaa5883e228d0e15ecd8180105fd904e4088a79454d797145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_0322acba43fb9905c912f3a42a18ba03c58f307a501da53cc013bd8ad4cf477c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0322acba43fb9905c912f3a42a18ba03c58f307a501da53cc013bd8ad4cf477c->enter($__internal_0322acba43fb9905c912f3a42a18ba03c58f307a501da53cc013bd8ad4cf477c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 34
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.sidebar_top"));
        echo "

    <a class=\"item\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard");
        echo "\"><b>Sylius</b></a>
    ";
        // line 37
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sylius.admin.main", array("template" => "SyliusUiBundle:Menu:sidebar.html.twig", "currentClass" => "active"));
        echo "

    ";
        // line 39
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.sidebar_down"));
        echo "
";
        
        $__internal_0322acba43fb9905c912f3a42a18ba03c58f307a501da53cc013bd8ad4cf477c->leave($__internal_0322acba43fb9905c912f3a42a18ba03c58f307a501da53cc013bd8ad4cf477c_prof);

        
        $__internal_f282eb32115d29bfaa5883e228d0e15ecd8180105fd904e4088a79454d797145->leave($__internal_f282eb32115d29bfaa5883e228d0e15ecd8180105fd904e4088a79454d797145_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ebbceb3d6c6a2f50c1bc5c301d72d072fb6a8ef353728b56f66aa86baa0d8f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebbceb3d6c6a2f50c1bc5c301d72d072fb6a8ef353728b56f66aa86baa0d8f9a->enter($__internal_ebbceb3d6c6a2f50c1bc5c301d72d072fb6a8ef353728b56f66aa86baa0d8f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_20c6631e8dcc8df8b0273959e34f1973c6b32a1fb4036a77d7266050dc66cd96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c6631e8dcc8df8b0273959e34f1973c6b32a1fb4036a77d7266050dc66cd96->enter($__internal_20c6631e8dcc8df8b0273959e34f1973c6b32a1fb4036a77d7266050dc66cd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 43
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.powered_by"), "html", null, true);
        echo " <a href=\"http://sylius.org\" target=\"_blank\">Sylius</a>.
";
        
        $__internal_20c6631e8dcc8df8b0273959e34f1973c6b32a1fb4036a77d7266050dc66cd96->leave($__internal_20c6631e8dcc8df8b0273959e34f1973c6b32a1fb4036a77d7266050dc66cd96_prof);

        
        $__internal_ebbceb3d6c6a2f50c1bc5c301d72d072fb6a8ef353728b56f66aa86baa0d8f9a->leave($__internal_ebbceb3d6c6a2f50c1bc5c301d72d072fb6a8ef353728b56f66aa86baa0d8f9a_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd8313c101d474a430c0ad831efac874d3e36efbb8e6d3e5817c80d165c1171c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8313c101d474a430c0ad831efac874d3e36efbb8e6d3e5817c80d165c1171c->enter($__internal_cd8313c101d474a430c0ad831efac874d3e36efbb8e6d3e5817c80d165c1171c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c3a6af9c6e15b099b9f702e1b19c8e499f50d02dfb12cb42957710dab95455bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a6af9c6e15b099b9f702e1b19c8e499f50d02dfb12cb42957710dab95455bb->enter($__internal_c3a6af9c6e15b099b9f702e1b19c8e499f50d02dfb12cb42957710dab95455bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "SyliusAdminBundle::layout.html.twig", 47)->display(array_merge($context, array("path" => "assets/admin/js/app.js")));
        // line 48
        echo "
    ";
        // line 49
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.javascripts"));
        echo "
";
        
        $__internal_c3a6af9c6e15b099b9f702e1b19c8e499f50d02dfb12cb42957710dab95455bb->leave($__internal_c3a6af9c6e15b099b9f702e1b19c8e499f50d02dfb12cb42957710dab95455bb_prof);

        
        $__internal_cd8313c101d474a430c0ad831efac874d3e36efbb8e6d3e5817c80d165c1171c->leave($__internal_cd8313c101d474a430c0ad831efac874d3e36efbb8e6d3e5817c80d165c1171c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 49,  221 => 48,  218 => 47,  209 => 46,  196 => 43,  187 => 42,  175 => 39,  170 => 37,  166 => 36,  160 => 34,  151 => 33,  139 => 30,  136 => 29,  134 => 28,  130 => 27,  123 => 23,  118 => 20,  116 => 19,  112 => 18,  107 => 16,  99 => 12,  90 => 11,  78 => 8,  75 => 7,  72 => 6,  63 => 5,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusUiBundle:Layout:sidebar.html.twig' %}

{% block title %}Sylius | {% endblock %}

{% block stylesheets %}
    {% include 'SyliusUiBundle::_stylesheets.html.twig' with {'path': 'assets/admin/css/style.css'} %}

    {{ sonata_block_render_event('sylius.admin.layout.stylesheets') }}
{% endblock %}

{% block topbar %}
    <a class=\"icon item\" id=\"sidebar-toggle\" title=\"{{ 'sylius.ui.toggle_sidebar'|trans }}\">
        <i class=\"sidebar icon\"></i>
    </a>

    {{ sonata_block_render_event('sylius.admin.layout.topbar_left') }}

    {{ render(url('sylius_admin_partial_channel_index', {'template': '@SyliusAdmin/_channelLinks.html.twig'})) }}
    {% include '@SyliusAdmin/_search.html.twig' %}

    <div class=\"ui left floated dividing empty item\"></div>

    {{ sonata_block_render_event('sylius.admin.layout.topbar_middle') }}

    <div class=\"ui right floated dividing empty item\"></div>

    {{ sylius_render_notifications_widget() }}
    {% include '@SyliusAdmin/_security.html.twig' %}

    {{ sonata_block_render_event('sylius.admin.layout.topbar_right') }}
{% endblock %}

{% block sidebar %}
    {{ sonata_block_render_event('sylius.admin.layout.sidebar_top') }}

    <a class=\"item\" href=\"{{ path('sylius_admin_dashboard') }}\"><b>Sylius</b></a>
    {{ knp_menu_render('sylius.admin.main', {'template': 'SyliusUiBundle:Menu:sidebar.html.twig', 'currentClass': 'active'}) }}

    {{ sonata_block_render_event('sylius.admin.layout.sidebar_down') }}
{% endblock %}

{% block footer %}
    {{ 'sylius.ui.powered_by'|trans }} <a href=\"http://sylius.org\" target=\"_blank\">Sylius</a>.
{% endblock %}

{% block javascripts %}
    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'assets/admin/js/app.js'} %}

    {{ sonata_block_render_event('sylius.admin.layout.javascripts') }}
{% endblock %}
", "SyliusAdminBundle::layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/layout.html.twig");
    }
}
