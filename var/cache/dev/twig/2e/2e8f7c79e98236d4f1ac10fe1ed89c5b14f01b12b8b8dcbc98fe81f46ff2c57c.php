<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_8277a054f56de0ac889822747120a42ef7e222e830993d866438b82ba59a6938 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33d26a4ef75ef382a9189f045951f478c3d47f86c564879d778a29946960065f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d26a4ef75ef382a9189f045951f478c3d47f86c564879d778a29946960065f->enter($__internal_33d26a4ef75ef382a9189f045951f478c3d47f86c564879d778a29946960065f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        $__internal_18599bc33bb5e6adc42f24303bdcab409c1e15f3650dda868184f2ccef83f200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18599bc33bb5e6adc42f24303bdcab409c1e15f3650dda868184f2ccef83f200->enter($__internal_18599bc33bb5e6adc42f24303bdcab409c1e15f3650dda868184f2ccef83f200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["revision"]) || array_key_exists("revision", $context) ? $context["revision"] : (function () { throw new Twig_Error_Runtime('Variable "revision" does not exist.', 12, $this->getSourceContext()); })()), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_33d26a4ef75ef382a9189f045951f478c3d47f86c564879d778a29946960065f->leave($__internal_33d26a4ef75ef382a9189f045951f478c3d47f86c564879d778a29946960065f_prof);

        
        $__internal_18599bc33bb5e6adc42f24303bdcab409c1e15f3650dda868184f2ccef83f200->leave($__internal_18599bc33bb5e6adc42f24303bdcab409c1e15f3650dda868184f2ccef83f200_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{{ revision.timestamp|date }}
", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
