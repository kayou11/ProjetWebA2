<?php

/* SyliusUiBundle:Layout:centered.html.twig */
class __TwigTemplate_96a70e9448af1dd5c4f0e9b7cb1d04ca79e4620d8021abe8acc9e7b79ea4ce1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cb77646ccffaacc0f204371e9f7b16198f5c8053b51ec7e93799a9141ffff88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb77646ccffaacc0f204371e9f7b16198f5c8053b51ec7e93799a9141ffff88->enter($__internal_6cb77646ccffaacc0f204371e9f7b16198f5c8053b51ec7e93799a9141ffff88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Layout:centered.html.twig"));

        $__internal_19614b6d8fcdfc3d4e9567f9b8f8da66be7869ac495b37bd43f83d2c5bf04e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19614b6d8fcdfc3d4e9567f9b8f8da66be7869ac495b37bd43f83d2c5bf04e1e->enter($__internal_19614b6d8fcdfc3d4e9567f9b8f8da66be7869ac495b37bd43f83d2c5bf04e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Layout:centered.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    ";
        // line 12
        $this->displayBlock('metatags', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>
<body class=\"centered\">
";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "</body>
</html>
";
        
        $__internal_6cb77646ccffaacc0f204371e9f7b16198f5c8053b51ec7e93799a9141ffff88->leave($__internal_6cb77646ccffaacc0f204371e9f7b16198f5c8053b51ec7e93799a9141ffff88_prof);

        
        $__internal_19614b6d8fcdfc3d4e9567f9b8f8da66be7869ac495b37bd43f83d2c5bf04e1e->leave($__internal_19614b6d8fcdfc3d4e9567f9b8f8da66be7869ac495b37bd43f83d2c5bf04e1e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_22f85f99c12af9ad78b7a86e40b0e8da536bceedfa0cf0ae1b1acbeedf675bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f85f99c12af9ad78b7a86e40b0e8da536bceedfa0cf0ae1b1acbeedf675bb1->enter($__internal_22f85f99c12af9ad78b7a86e40b0e8da536bceedfa0cf0ae1b1acbeedf675bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4924cdaac3c45ffa24ff3a967e61bfdbae6681c777fb4f15172507df31aa96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4924cdaac3c45ffa24ff3a967e61bfdbae6681c777fb4f15172507df31aa96d->enter($__internal_a4924cdaac3c45ffa24ff3a967e61bfdbae6681c777fb4f15172507df31aa96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius";
        
        $__internal_a4924cdaac3c45ffa24ff3a967e61bfdbae6681c777fb4f15172507df31aa96d->leave($__internal_a4924cdaac3c45ffa24ff3a967e61bfdbae6681c777fb4f15172507df31aa96d_prof);

        
        $__internal_22f85f99c12af9ad78b7a86e40b0e8da536bceedfa0cf0ae1b1acbeedf675bb1->leave($__internal_22f85f99c12af9ad78b7a86e40b0e8da536bceedfa0cf0ae1b1acbeedf675bb1_prof);

    }

    // line 12
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_b67628e28b7bd175c6731655715b7cb5105924c64589f35010494343eaff8bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67628e28b7bd175c6731655715b7cb5105924c64589f35010494343eaff8bf8->enter($__internal_b67628e28b7bd175c6731655715b7cb5105924c64589f35010494343eaff8bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_a52485b4d9dc60a95d7dda6f7000b1b8c3c835482868e397e07e8c9eaf93baa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52485b4d9dc60a95d7dda6f7000b1b8c3c835482868e397e07e8c9eaf93baa6->enter($__internal_a52485b4d9dc60a95d7dda6f7000b1b8c3c835482868e397e07e8c9eaf93baa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 13
        echo "    ";
        
        $__internal_a52485b4d9dc60a95d7dda6f7000b1b8c3c835482868e397e07e8c9eaf93baa6->leave($__internal_a52485b4d9dc60a95d7dda6f7000b1b8c3c835482868e397e07e8c9eaf93baa6_prof);

        
        $__internal_b67628e28b7bd175c6731655715b7cb5105924c64589f35010494343eaff8bf8->leave($__internal_b67628e28b7bd175c6731655715b7cb5105924c64589f35010494343eaff8bf8_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e12b51cd32aa82288b1646b33683e9ebf54a2892911b40644ece681e3d49075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e12b51cd32aa82288b1646b33683e9ebf54a2892911b40644ece681e3d49075->enter($__internal_4e12b51cd32aa82288b1646b33683e9ebf54a2892911b40644ece681e3d49075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0d9bdc63f3df257d017113651bdea6ad3248cb96df0ebdd22409b12f7948e591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9bdc63f3df257d017113651bdea6ad3248cb96df0ebdd22409b12f7948e591->enter($__internal_0d9bdc63f3df257d017113651bdea6ad3248cb96df0ebdd22409b12f7948e591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "    ";
        
        $__internal_0d9bdc63f3df257d017113651bdea6ad3248cb96df0ebdd22409b12f7948e591->leave($__internal_0d9bdc63f3df257d017113651bdea6ad3248cb96df0ebdd22409b12f7948e591_prof);

        
        $__internal_4e12b51cd32aa82288b1646b33683e9ebf54a2892911b40644ece681e3d49075->leave($__internal_4e12b51cd32aa82288b1646b33683e9ebf54a2892911b40644ece681e3d49075_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_84865fe1768d79a7e9d6a3335d1ce7a3e1efacabce0f1c509f702276533cfb30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84865fe1768d79a7e9d6a3335d1ce7a3e1efacabce0f1c509f702276533cfb30->enter($__internal_84865fe1768d79a7e9d6a3335d1ce7a3e1efacabce0f1c509f702276533cfb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ec80fe40eb21a2488fbc6f09f81f9a55a61f482c637117a12b6a7f2f7f6771ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec80fe40eb21a2488fbc6f09f81f9a55a61f482c637117a12b6a7f2f7f6771ff->enter($__internal_ec80fe40eb21a2488fbc6f09f81f9a55a61f482c637117a12b6a7f2f7f6771ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ec80fe40eb21a2488fbc6f09f81f9a55a61f482c637117a12b6a7f2f7f6771ff->leave($__internal_ec80fe40eb21a2488fbc6f09f81f9a55a61f482c637117a12b6a7f2f7f6771ff_prof);

        
        $__internal_84865fe1768d79a7e9d6a3335d1ce7a3e1efacabce0f1c509f702276533cfb30->leave($__internal_84865fe1768d79a7e9d6a3335d1ce7a3e1efacabce0f1c509f702276533cfb30_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de7b6fae36fdd74780de3e1cf622c14715b98bae7d21c8e45b6b1c0ac452794c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7b6fae36fdd74780de3e1cf622c14715b98bae7d21c8e45b6b1c0ac452794c->enter($__internal_de7b6fae36fdd74780de3e1cf622c14715b98bae7d21c8e45b6b1c0ac452794c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_18de230c7e136db1ce63de35e00066172c663930b90a9eda584825a9b021b206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18de230c7e136db1ce63de35e00066172c663930b90a9eda584825a9b021b206->enter($__internal_18de230c7e136db1ce63de35e00066172c663930b90a9eda584825a9b021b206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_18de230c7e136db1ce63de35e00066172c663930b90a9eda584825a9b021b206->leave($__internal_18de230c7e136db1ce63de35e00066172c663930b90a9eda584825a9b021b206_prof);

        
        $__internal_de7b6fae36fdd74780de3e1cf622c14715b98bae7d21c8e45b6b1c0ac452794c->leave($__internal_de7b6fae36fdd74780de3e1cf622c14715b98bae7d21c8e45b6b1c0ac452794c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Layout:centered.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  149 => 22,  132 => 19,  122 => 16,  113 => 15,  103 => 13,  94 => 12,  76 => 8,  64 => 24,  62 => 22,  59 => 21,  57 => 19,  53 => 17,  51 => 15,  48 => 14,  46 => 12,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>{% block title %}Sylius{% endblock %}</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    {% block metatags %}
    {% endblock %}

    {% block stylesheets %}
    {% endblock %}
</head>
<body class=\"centered\">
{% block content %}
{% endblock %}

{% block javascripts %}
{% endblock %}
</body>
</html>
", "SyliusUiBundle:Layout:centered.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Layout/centered.html.twig");
    }
}
