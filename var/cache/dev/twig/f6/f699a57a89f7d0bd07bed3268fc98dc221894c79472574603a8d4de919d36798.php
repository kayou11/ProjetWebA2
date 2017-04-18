<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c368a701496fe6fa838f98791a720f60ee94ec72833e3019cc2b76635b64adea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_08a381495d0505b0163b03bbdb4b6b58ac477197b1039442e1d0d2dad652fee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08a381495d0505b0163b03bbdb4b6b58ac477197b1039442e1d0d2dad652fee2->enter($__internal_08a381495d0505b0163b03bbdb4b6b58ac477197b1039442e1d0d2dad652fee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_54b4c68d6756152f779c67308fe2dd48198cec32ec1f64b2820c4680f2c4250d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b4c68d6756152f779c67308fe2dd48198cec32ec1f64b2820c4680f2c4250d->enter($__internal_54b4c68d6756152f779c67308fe2dd48198cec32ec1f64b2820c4680f2c4250d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08a381495d0505b0163b03bbdb4b6b58ac477197b1039442e1d0d2dad652fee2->leave($__internal_08a381495d0505b0163b03bbdb4b6b58ac477197b1039442e1d0d2dad652fee2_prof);

        
        $__internal_54b4c68d6756152f779c67308fe2dd48198cec32ec1f64b2820c4680f2c4250d->leave($__internal_54b4c68d6756152f779c67308fe2dd48198cec32ec1f64b2820c4680f2c4250d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2ed066173cf0b9b6d7bcdd24ffea69a4ab51d4a42dcd5fd1b1aff584ce9ba48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ed066173cf0b9b6d7bcdd24ffea69a4ab51d4a42dcd5fd1b1aff584ce9ba48->enter($__internal_c2ed066173cf0b9b6d7bcdd24ffea69a4ab51d4a42dcd5fd1b1aff584ce9ba48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b7e362b448892c014f7241383e13f80fb07e7734f0f5df50b0dc4747ee10ac3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e362b448892c014f7241383e13f80fb07e7734f0f5df50b0dc4747ee10ac3d->enter($__internal_b7e362b448892c014f7241383e13f80fb07e7734f0f5df50b0dc4747ee10ac3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b7e362b448892c014f7241383e13f80fb07e7734f0f5df50b0dc4747ee10ac3d->leave($__internal_b7e362b448892c014f7241383e13f80fb07e7734f0f5df50b0dc4747ee10ac3d_prof);

        
        $__internal_c2ed066173cf0b9b6d7bcdd24ffea69a4ab51d4a42dcd5fd1b1aff584ce9ba48->leave($__internal_c2ed066173cf0b9b6d7bcdd24ffea69a4ab51d4a42dcd5fd1b1aff584ce9ba48_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
