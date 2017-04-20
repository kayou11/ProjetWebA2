<?php

/* SiteBundle:Pages:article.html.twig */
class __TwigTemplate_f70d0584b6d83a7de25e4d16e493a1a9e3190d66271648b832f652da285c1062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:article.html.twig", 1);
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
        $__internal_429f1187a11103c2d01ee98e6ee3e6493f0f563a157149fe3f8e3052a3290192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429f1187a11103c2d01ee98e6ee3e6493f0f563a157149fe3f8e3052a3290192->enter($__internal_429f1187a11103c2d01ee98e6ee3e6493f0f563a157149fe3f8e3052a3290192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:article.html.twig"));

        $__internal_8f7be342dd42963aacfa40189ccf73684f326cbda9ca7f214926d5dbc352b631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7be342dd42963aacfa40189ccf73684f326cbda9ca7f214926d5dbc352b631->enter($__internal_8f7be342dd42963aacfa40189ccf73684f326cbda9ca7f214926d5dbc352b631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429f1187a11103c2d01ee98e6ee3e6493f0f563a157149fe3f8e3052a3290192->leave($__internal_429f1187a11103c2d01ee98e6ee3e6493f0f563a157149fe3f8e3052a3290192_prof);

        
        $__internal_8f7be342dd42963aacfa40189ccf73684f326cbda9ca7f214926d5dbc352b631->leave($__internal_8f7be342dd42963aacfa40189ccf73684f326cbda9ca7f214926d5dbc352b631_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_08043b6dd2fea6054feba52b8dcfd155e9b2bebb23222769e38fbe774928341a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08043b6dd2fea6054feba52b8dcfd155e9b2bebb23222769e38fbe774928341a->enter($__internal_08043b6dd2fea6054feba52b8dcfd155e9b2bebb23222769e38fbe774928341a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_c12c5b3dc83a67917dc3ce907801a154debfb02e43daff0806742a26c83308df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c12c5b3dc83a67917dc3ce907801a154debfb02e43daff0806742a26c83308df->enter($__internal_c12c5b3dc83a67917dc3ce907801a154debfb02e43daff0806742a26c83308df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/activite.css\" type=\"text/css\" />
";
        
        $__internal_c12c5b3dc83a67917dc3ce907801a154debfb02e43daff0806742a26c83308df->leave($__internal_c12c5b3dc83a67917dc3ce907801a154debfb02e43daff0806742a26c83308df_prof);

        
        $__internal_08043b6dd2fea6054feba52b8dcfd155e9b2bebb23222769e38fbe774928341a->leave($__internal_08043b6dd2fea6054feba52b8dcfd155e9b2bebb23222769e38fbe774928341a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffb6c9c35b6ee343bf76481d2c968c038d51ad506e51414ea6f66cf4e6e490d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb6c9c35b6ee343bf76481d2c968c038d51ad506e51414ea6f66cf4e6e490d1->enter($__internal_ffb6c9c35b6ee343bf76481d2c968c038d51ad506e51414ea6f66cf4e6e490d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba775ea08be271e3bc91b1af4c01a48fd1c4013fade9ca1a9c28648131cfb7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba775ea08be271e3bc91b1af4c01a48fd1c4013fade9ca1a9c28648131cfb7d9->enter($__internal_ba775ea08be271e3bc91b1af4c01a48fd1c4013fade9ca1a9c28648131cfb7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new Twig_Error_Runtime('Variable "activity" does not exist.', 7, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        
        $__internal_ba775ea08be271e3bc91b1af4c01a48fd1c4013fade9ca1a9c28648131cfb7d9->leave($__internal_ba775ea08be271e3bc91b1af4c01a48fd1c4013fade9ca1a9c28648131cfb7d9_prof);

        
        $__internal_ffb6c9c35b6ee343bf76481d2c968c038d51ad506e51414ea6f66cf4e6e490d1->leave($__internal_ffb6c9c35b6ee343bf76481d2c968c038d51ad506e51414ea6f66cf4e6e490d1_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d0a42a24c17d7e6095a6caa7831e443a12e73ae4eb8646c841ab1c8875b3f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0a42a24c17d7e6095a6caa7831e443a12e73ae4eb8646c841ab1c8875b3f07->enter($__internal_9d0a42a24c17d7e6095a6caa7831e443a12e73ae4eb8646c841ab1c8875b3f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dd261b2214a996fe78464123b8f0ee9dedf05ea0bc4a93779ff488a98964834b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd261b2214a996fe78464123b8f0ee9dedf05ea0bc4a93779ff488a98964834b->enter($__internal_dd261b2214a996fe78464123b8f0ee9dedf05ea0bc4a93779ff488a98964834b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"container\">
        <h2 class=\"BodyTitle\">ExiaLan</h2>
        <div class=\"row\">
            <div class=\"col-md-12\" id=\"ArticlePhoto\">
                <img src=\"../public/img/exialan.jpg\" class=\"photosize\">
            </div>
            <div class=\"col-md-12\" id=\"ArticleDetails\">
                <p>Description : <p>
                <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"<p>
                <p>Prix : EUR xx.xx<p>
                    <br>
                    <br>
                <div class=\"ProfilBouton\">
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Ajouter au panier\">
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_dd261b2214a996fe78464123b8f0ee9dedf05ea0bc4a93779ff488a98964834b->leave($__internal_dd261b2214a996fe78464123b8f0ee9dedf05ea0bc4a93779ff488a98964834b_prof);

        
        $__internal_9d0a42a24c17d7e6095a6caa7831e443a12e73ae4eb8646c841ab1c8875b3f07->leave($__internal_9d0a42a24c17d7e6095a6caa7831e443a12e73ae4eb8646c841ab1c8875b3f07_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../../public/css/pages/activite.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}{{ activity.name }}{% endblock %}

{% block content %}
    <div class=\"container\">
        <h2 class=\"BodyTitle\">ExiaLan</h2>
        <div class=\"row\">
            <div class=\"col-md-12\" id=\"ArticlePhoto\">
                <img src=\"../public/img/exialan.jpg\" class=\"photosize\">
            </div>
            <div class=\"col-md-12\" id=\"ArticleDetails\">
                <p>Description : <p>
                <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"<p>
                <p>Prix : EUR xx.xx<p>
                    <br>
                    <br>
                <div class=\"ProfilBouton\">
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Ajouter au panier\">
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "SiteBundle:Pages:article.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/article.html.twig");
    }
}
