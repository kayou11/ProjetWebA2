<?php

/* ShopBundle:Boutique:boutique.html.twig */
class __TwigTemplate_2a8661f6d2ecfe6abc3bbd55fc2bf7f71fcc12b68a2f2e9e83a26c0b59d78827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "ShopBundle:Boutique:boutique.html.twig", 1);
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
        $__internal_f079e330e31527b416a654240f3426ae0e06f0248ad6c5bac774fa287c5c63ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f079e330e31527b416a654240f3426ae0e06f0248ad6c5bac774fa287c5c63ec->enter($__internal_f079e330e31527b416a654240f3426ae0e06f0248ad6c5bac774fa287c5c63ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Boutique:boutique.html.twig"));

        $__internal_985dd446c42bdc143493dd7d6d7866c7d897af8073a684e876ba21435edd7920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985dd446c42bdc143493dd7d6d7866c7d897af8073a684e876ba21435edd7920->enter($__internal_985dd446c42bdc143493dd7d6d7866c7d897af8073a684e876ba21435edd7920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Boutique:boutique.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f079e330e31527b416a654240f3426ae0e06f0248ad6c5bac774fa287c5c63ec->leave($__internal_f079e330e31527b416a654240f3426ae0e06f0248ad6c5bac774fa287c5c63ec_prof);

        
        $__internal_985dd446c42bdc143493dd7d6d7866c7d897af8073a684e876ba21435edd7920->leave($__internal_985dd446c42bdc143493dd7d6d7866c7d897af8073a684e876ba21435edd7920_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_022a11788396f7a760f46a101f267f0db0b698f1bb9b70a243259fafc707e28a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022a11788396f7a760f46a101f267f0db0b698f1bb9b70a243259fafc707e28a->enter($__internal_022a11788396f7a760f46a101f267f0db0b698f1bb9b70a243259fafc707e28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_14c8a6ec7766032e7c2e40861eb216356e156633cf428f6508200cd078882218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c8a6ec7766032e7c2e40861eb216356e156633cf428f6508200cd078882218->enter($__internal_14c8a6ec7766032e7c2e40861eb216356e156633cf428f6508200cd078882218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/activiteproposees.css\" type=\"text/css\" />
";
        
        $__internal_14c8a6ec7766032e7c2e40861eb216356e156633cf428f6508200cd078882218->leave($__internal_14c8a6ec7766032e7c2e40861eb216356e156633cf428f6508200cd078882218_prof);

        
        $__internal_022a11788396f7a760f46a101f267f0db0b698f1bb9b70a243259fafc707e28a->leave($__internal_022a11788396f7a760f46a101f267f0db0b698f1bb9b70a243259fafc707e28a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca2305b7100daa79c75e391f66391f09e44bbfc7e284fbe518cbf8b4795cd553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2305b7100daa79c75e391f66391f09e44bbfc7e284fbe518cbf8b4795cd553->enter($__internal_ca2305b7100daa79c75e391f66391f09e44bbfc7e284fbe518cbf8b4795cd553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_285a580aa17e21928047dc8098ada15ddbe9e7fa2350ba99f1e5fa1a70ed0e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285a580aa17e21928047dc8098ada15ddbe9e7fa2350ba99f1e5fa1a70ed0e62->enter($__internal_285a580aa17e21928047dc8098ada15ddbe9e7fa2350ba99f1e5fa1a70ed0e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Boutique";
        
        $__internal_285a580aa17e21928047dc8098ada15ddbe9e7fa2350ba99f1e5fa1a70ed0e62->leave($__internal_285a580aa17e21928047dc8098ada15ddbe9e7fa2350ba99f1e5fa1a70ed0e62_prof);

        
        $__internal_ca2305b7100daa79c75e391f66391f09e44bbfc7e284fbe518cbf8b4795cd553->leave($__internal_ca2305b7100daa79c75e391f66391f09e44bbfc7e284fbe518cbf8b4795cd553_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_b196b0ea84bca9669ebd3e829552d97da51da7b1fc7e5319ee046f1fa79bad96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b196b0ea84bca9669ebd3e829552d97da51da7b1fc7e5319ee046f1fa79bad96->enter($__internal_b196b0ea84bca9669ebd3e829552d97da51da7b1fc7e5319ee046f1fa79bad96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ac2bb8f4026024cca87eece3170c732f07700292aad64943f741620eeebb33aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2bb8f4026024cca87eece3170c732f07700292aad64943f741620eeebb33aa->enter($__internal_ac2bb8f4026024cca87eece3170c732f07700292aad64943f741620eeebb33aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"container\">
        <h1 class=\"BodyTitle\">Boutique</h1>
            <div class=\"row\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 13, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 14
            echo "                    <div class=\"col-lg-8\">
                        <div class=\"col-md-3\">
                            <h2>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "name", array()), "html", null, true);
            echo "</h2>
                            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_shop_article", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\"><img src=\"../public/img/film.jpg\" class=\"imgActivite\"></a>
                            <h2>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "price", array()), "html", null, true);
            echo " €</h2>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>
        </div>
";
        
        $__internal_ac2bb8f4026024cca87eece3170c732f07700292aad64943f741620eeebb33aa->leave($__internal_ac2bb8f4026024cca87eece3170c732f07700292aad64943f741620eeebb33aa_prof);

        
        $__internal_b196b0ea84bca9669ebd3e829552d97da51da7b1fc7e5319ee046f1fa79bad96->leave($__internal_b196b0ea84bca9669ebd3e829552d97da51da7b1fc7e5319ee046f1fa79bad96_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Boutique:boutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 22,  110 => 18,  106 => 17,  102 => 16,  98 => 14,  94 => 13,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/activiteproposees.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Boutique{% endblock %}

{% block content %}
    <div class=\"container\">
        <h1 class=\"BodyTitle\">Boutique</h1>
            <div class=\"row\">
                {% for article in articles %}
                    <div class=\"col-lg-8\">
                        <div class=\"col-md-3\">
                            <h2>{{ article.name }}</h2>
                            <a href=\"{{ path('site_shop_article', {'id': article.id}) }}\"><img src=\"../public/img/film.jpg\" class=\"imgActivite\"></a>
                            <h2>{{ article.price }} €</h2>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
{% endblock %}", "ShopBundle:Boutique:boutique.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/ShopBundle/Resources/views/Boutique/boutique.html.twig");
    }
}
