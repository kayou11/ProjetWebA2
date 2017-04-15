<?php

/* @SyliusShop/Account/layout.html.twig */
class __TwigTemplate_fe49d0c1efbb5cdf73e1696830ac962a00529caaaf0ae805b91167946308e91b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Account/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4491628050b4a297664b5b8f8147fad69efc8aadbf61c6610f1ec5423cec624b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4491628050b4a297664b5b8f8147fad69efc8aadbf61c6610f1ec5423cec624b->enter($__internal_4491628050b4a297664b5b8f8147fad69efc8aadbf61c6610f1ec5423cec624b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/layout.html.twig"));

        $__internal_1941a0a5323b771ac84e56e748997c46b184fcac98c5128c76c1d62007171652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1941a0a5323b771ac84e56e748997c46b184fcac98c5128c76c1d62007171652->enter($__internal_1941a0a5323b771ac84e56e748997c46b184fcac98c5128c76c1d62007171652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4491628050b4a297664b5b8f8147fad69efc8aadbf61c6610f1ec5423cec624b->leave($__internal_4491628050b4a297664b5b8f8147fad69efc8aadbf61c6610f1ec5423cec624b_prof);

        
        $__internal_1941a0a5323b771ac84e56e748997c46b184fcac98c5128c76c1d62007171652->leave($__internal_1941a0a5323b771ac84e56e748997c46b184fcac98c5128c76c1d62007171652_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4ffab3da9500a9b464c1eddd753998dc6bc6080e1d56518a9b7ffe3dd13eea89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffab3da9500a9b464c1eddd753998dc6bc6080e1d56518a9b7ffe3dd13eea89->enter($__internal_4ffab3da9500a9b464c1eddd753998dc6bc6080e1d56518a9b7ffe3dd13eea89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cca6cd20b61f662410e36b27db73a2ee442d380dbb6653a7633fafb3d4cb827c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca6cd20b61f662410e36b27db73a2ee442d380dbb6653a7633fafb3d4cb827c->enter($__internal_cca6cd20b61f662410e36b27db73a2ee442d380dbb6653a7633fafb3d4cb827c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 6
        echo "
    <div class=\"ui stackable grid\">
        <div class=\"four wide column\">
            ";
        // line 9
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.layout.before_menu"));
        echo "

            ";
        // line 11
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sylius.shop.account", array("template" => "@SyliusUi/Menu/simple.html.twig"));
        echo "

            ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.layout.after_menu"));
        echo "
        </div>
        <div class=\"twelve wide column\">
            ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.layout.before_subcontent"));
        echo "

            ";
        // line 18
        $this->displayBlock('subcontent', $context, $blocks);
        // line 20
        echo "
            ";
        // line 21
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.layout.after_subcontent"));
        echo "
        </div>
    </div>
";
        
        $__internal_cca6cd20b61f662410e36b27db73a2ee442d380dbb6653a7633fafb3d4cb827c->leave($__internal_cca6cd20b61f662410e36b27db73a2ee442d380dbb6653a7633fafb3d4cb827c_prof);

        
        $__internal_4ffab3da9500a9b464c1eddd753998dc6bc6080e1d56518a9b7ffe3dd13eea89->leave($__internal_4ffab3da9500a9b464c1eddd753998dc6bc6080e1d56518a9b7ffe3dd13eea89_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b276ca15b19672ae2306843b72af7452bb5f6fdc4d366b26556850c154ab3b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b276ca15b19672ae2306843b72af7452bb5f6fdc4d366b26556850c154ab3b36->enter($__internal_b276ca15b19672ae2306843b72af7452bb5f6fdc4d366b26556850c154ab3b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_d4770976d37f8eb8099daa703575a43e5eab022317e8fc0a5d8c8d11f869e73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4770976d37f8eb8099daa703575a43e5eab022317e8fc0a5d8c8d11f869e73a->enter($__internal_d4770976d37f8eb8099daa703575a43e5eab022317e8fc0a5d8c8d11f869e73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "    ";
        
        $__internal_d4770976d37f8eb8099daa703575a43e5eab022317e8fc0a5d8c8d11f869e73a->leave($__internal_d4770976d37f8eb8099daa703575a43e5eab022317e8fc0a5d8c8d11f869e73a_prof);

        
        $__internal_b276ca15b19672ae2306843b72af7452bb5f6fdc4d366b26556850c154ab3b36->leave($__internal_b276ca15b19672ae2306843b72af7452bb5f6fdc4d366b26556850c154ab3b36_prof);

    }

    // line 18
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_f2bf7d18556b90a80b53dc1675b4e2b3df5e0a4df311157ccc11e3ea34590ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bf7d18556b90a80b53dc1675b4e2b3df5e0a4df311157ccc11e3ea34590ba3->enter($__internal_f2bf7d18556b90a80b53dc1675b4e2b3df5e0a4df311157ccc11e3ea34590ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_95a56a3c14848a5d3aa6d43ea131628f06700634c2bc2e0c40a3de1abdd388a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a56a3c14848a5d3aa6d43ea131628f06700634c2bc2e0c40a3de1abdd388a3->enter($__internal_95a56a3c14848a5d3aa6d43ea131628f06700634c2bc2e0c40a3de1abdd388a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 19
        echo "            ";
        
        $__internal_95a56a3c14848a5d3aa6d43ea131628f06700634c2bc2e0c40a3de1abdd388a3->leave($__internal_95a56a3c14848a5d3aa6d43ea131628f06700634c2bc2e0c40a3de1abdd388a3_prof);

        
        $__internal_f2bf7d18556b90a80b53dc1675b4e2b3df5e0a4df311157ccc11e3ea34590ba3->leave($__internal_f2bf7d18556b90a80b53dc1675b4e2b3df5e0a4df311157ccc11e3ea34590ba3_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 19,  118 => 18,  108 => 5,  99 => 4,  85 => 21,  82 => 20,  80 => 18,  75 => 16,  69 => 13,  64 => 11,  59 => 9,  54 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
    {% block breadcrumb %}
    {% endblock %}

    <div class=\"ui stackable grid\">
        <div class=\"four wide column\">
            {{ sonata_block_render_event('sylius.shop.account.layout.before_menu') }}

            {{ knp_menu_render('sylius.shop.account', {'template': '@SyliusUi/Menu/simple.html.twig'}) }}

            {{ sonata_block_render_event('sylius.shop.account.layout.after_menu') }}
        </div>
        <div class=\"twelve wide column\">
            {{ sonata_block_render_event('sylius.shop.account.layout.before_subcontent') }}

            {% block subcontent %}
            {% endblock %}

            {{ sonata_block_render_event('sylius.shop.account.layout.after_subcontent') }}
        </div>
    </div>
{% endblock %}
", "@SyliusShop/Account/layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/layout.html.twig");
    }
}
