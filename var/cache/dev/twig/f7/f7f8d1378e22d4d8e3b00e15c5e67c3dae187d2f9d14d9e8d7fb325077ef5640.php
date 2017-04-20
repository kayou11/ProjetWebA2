<?php

/* ShopBundle:Boutique:article.html.twig */
class __TwigTemplate_934481dd55cfd6312c5812a9a72fefeb37d875eaa68c1f8a827ed0837d725f62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "ShopBundle:Boutique:article.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c6d214a1e783b87c1c6d2761a00902cc987e3aa88a9bb6483e7ec2141b01211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6d214a1e783b87c1c6d2761a00902cc987e3aa88a9bb6483e7ec2141b01211->enter($__internal_0c6d214a1e783b87c1c6d2761a00902cc987e3aa88a9bb6483e7ec2141b01211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Boutique:article.html.twig"));

        $__internal_7c30a2f7dd8d43bf847c14957d0b44db93cf3057de5f66f0a6eb175e41da10f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c30a2f7dd8d43bf847c14957d0b44db93cf3057de5f66f0a6eb175e41da10f3->enter($__internal_7c30a2f7dd8d43bf847c14957d0b44db93cf3057de5f66f0a6eb175e41da10f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Boutique:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c6d214a1e783b87c1c6d2761a00902cc987e3aa88a9bb6483e7ec2141b01211->leave($__internal_0c6d214a1e783b87c1c6d2761a00902cc987e3aa88a9bb6483e7ec2141b01211_prof);

        
        $__internal_7c30a2f7dd8d43bf847c14957d0b44db93cf3057de5f66f0a6eb175e41da10f3->leave($__internal_7c30a2f7dd8d43bf847c14957d0b44db93cf3057de5f66f0a6eb175e41da10f3_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_0076e73947355d51e2f860c9ec27a5df46a851938daa5739a730d8f1c8d392c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0076e73947355d51e2f860c9ec27a5df46a851938daa5739a730d8f1c8d392c4->enter($__internal_0076e73947355d51e2f860c9ec27a5df46a851938daa5739a730d8f1c8d392c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_73e9626d2fbd0ba3148d9acfdca4a74ef4bd7395846c073e7e981e8a9cf4fb1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e9626d2fbd0ba3148d9acfdca4a74ef4bd7395846c073e7e981e8a9cf4fb1f->enter($__internal_73e9626d2fbd0ba3148d9acfdca4a74ef4bd7395846c073e7e981e8a9cf4fb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/article.css\" type=\"text/css\" />
";
        
        $__internal_73e9626d2fbd0ba3148d9acfdca4a74ef4bd7395846c073e7e981e8a9cf4fb1f->leave($__internal_73e9626d2fbd0ba3148d9acfdca4a74ef4bd7395846c073e7e981e8a9cf4fb1f_prof);

        
        $__internal_0076e73947355d51e2f860c9ec27a5df46a851938daa5739a730d8f1c8d392c4->leave($__internal_0076e73947355d51e2f860c9ec27a5df46a851938daa5739a730d8f1c8d392c4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fe798c60a55251708b470967a222e64e329376203e489c57e5737e0efed76ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe798c60a55251708b470967a222e64e329376203e489c57e5737e0efed76ab->enter($__internal_6fe798c60a55251708b470967a222e64e329376203e489c57e5737e0efed76ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f55bb001977b79206c48322721611a278e69aaf81968fd830228327e8e0a985e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55bb001977b79206c48322721611a278e69aaf81968fd830228327e8e0a985e->enter($__internal_f55bb001977b79206c48322721611a278e69aaf81968fd830228327e8e0a985e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 7, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        
        $__internal_f55bb001977b79206c48322721611a278e69aaf81968fd830228327e8e0a985e->leave($__internal_f55bb001977b79206c48322721611a278e69aaf81968fd830228327e8e0a985e_prof);

        
        $__internal_6fe798c60a55251708b470967a222e64e329376203e489c57e5737e0efed76ab->leave($__internal_6fe798c60a55251708b470967a222e64e329376203e489c57e5737e0efed76ab_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_69cc0342a6aeedc0c77cea5d3d18b197756fecaeaec4447b580643cd448b9457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cc0342a6aeedc0c77cea5d3d18b197756fecaeaec4447b580643cd448b9457->enter($__internal_69cc0342a6aeedc0c77cea5d3d18b197756fecaeaec4447b580643cd448b9457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_51690d6f2f400fba58b224f17576737e39d1b84580b270270c2261858ef4989c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51690d6f2f400fba58b224f17576737e39d1b84580b270270c2261858ef4989c->enter($__internal_51690d6f2f400fba58b224f17576737e39d1b84580b270270c2261858ef4989c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"container\">
        <h2 class=\"BodyTitle\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 11, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h2>
        <div class=\"row\">
            <div class=\"col-md-12\" id=\"ArticlePhoto\">
                <img src=\"../../public/img/drone.png\" class=\"photosize\">
            </div>
            <div class=\"col-md-12\" id=\"ArticleDetails\">
                <p>Description : <p>
                <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"<p>
                <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 19, $this->getSourceContext()); })()), "price", array()), "html", null, true);
        echo " €<p>
                    <br>
                    <br>
                <div class=\"ProfilBouton\">
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Ajouter au panier\">
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_51690d6f2f400fba58b224f17576737e39d1b84580b270270c2261858ef4989c->leave($__internal_51690d6f2f400fba58b224f17576737e39d1b84580b270270c2261858ef4989c_prof);

        
        $__internal_69cc0342a6aeedc0c77cea5d3d18b197756fecaeaec4447b580643cd448b9457->leave($__internal_69cc0342a6aeedc0c77cea5d3d18b197756fecaeaec4447b580643cd448b9457_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Boutique:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 19,  92 => 11,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../../public/css/pages/article.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}{{ article.name }}{% endblock %}

{% block content %}
    <div class=\"container\">
        <h2 class=\"BodyTitle\">{{ article.name }}</h2>
        <div class=\"row\">
            <div class=\"col-md-12\" id=\"ArticlePhoto\">
                <img src=\"../../public/img/drone.png\" class=\"photosize\">
            </div>
            <div class=\"col-md-12\" id=\"ArticleDetails\">
                <p>Description : <p>
                <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"<p>
                <p>{{ article.price }} €<p>
                    <br>
                    <br>
                <div class=\"ProfilBouton\">
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Ajouter au panier\">
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "ShopBundle:Boutique:article.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/ShopBundle/Resources/views/Boutique/article.html.twig");
    }
}
