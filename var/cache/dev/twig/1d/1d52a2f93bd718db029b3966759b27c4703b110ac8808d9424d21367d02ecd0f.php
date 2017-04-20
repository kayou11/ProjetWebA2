<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_8492bc5076ac9ccba69d3be404bd34d9a3d070d326f13e8c6dd2fd5bd85471c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69dc76d7e2cb54891ca718ae7abdf0bf360cc9627b70075b981fe9b2789b1924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69dc76d7e2cb54891ca718ae7abdf0bf360cc9627b70075b981fe9b2789b1924->enter($__internal_69dc76d7e2cb54891ca718ae7abdf0bf360cc9627b70075b981fe9b2789b1924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_035c1ed9ab8546ed0f229b28c8ab2db0dcb02a00d6ec5a89cc7883eda320ccac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035c1ed9ab8546ed0f229b28c8ab2db0dcb02a00d6ec5a89cc7883eda320ccac->enter($__internal_035c1ed9ab8546ed0f229b28c8ab2db0dcb02a00d6ec5a89cc7883eda320ccac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69dc76d7e2cb54891ca718ae7abdf0bf360cc9627b70075b981fe9b2789b1924->leave($__internal_69dc76d7e2cb54891ca718ae7abdf0bf360cc9627b70075b981fe9b2789b1924_prof);

        
        $__internal_035c1ed9ab8546ed0f229b28c8ab2db0dcb02a00d6ec5a89cc7883eda320ccac->leave($__internal_035c1ed9ab8546ed0f229b28c8ab2db0dcb02a00d6ec5a89cc7883eda320ccac_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_610f5bacbb67c2f16887ba5e3ccc2ca3207d937828cf5f707c0ebaf4d25f60ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610f5bacbb67c2f16887ba5e3ccc2ca3207d937828cf5f707c0ebaf4d25f60ff->enter($__internal_610f5bacbb67c2f16887ba5e3ccc2ca3207d937828cf5f707c0ebaf4d25f60ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eee499a58922af51b4b706de32c3ea6441a4274b45038a9d906d5b5ffd598f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee499a58922af51b4b706de32c3ea6441a4274b45038a9d906d5b5ffd598f8b->enter($__internal_eee499a58922af51b4b706de32c3ea6441a4274b45038a9d906d5b5ffd598f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_eee499a58922af51b4b706de32c3ea6441a4274b45038a9d906d5b5ffd598f8b->leave($__internal_eee499a58922af51b4b706de32c3ea6441a4274b45038a9d906d5b5ffd598f8b_prof);

        
        $__internal_610f5bacbb67c2f16887ba5e3ccc2ca3207d937828cf5f707c0ebaf4d25f60ff->leave($__internal_610f5bacbb67c2f16887ba5e3ccc2ca3207d937828cf5f707c0ebaf4d25f60ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
