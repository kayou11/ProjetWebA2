<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_295306a8c2ac46dd7326ca6bdfc5d4585e3e101ec89214676a0ff75f559ff9a3 extends Twig_Template
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
        $__internal_7d22fbffc67e55415433faee29adbda1e4439dc12b97dc638800def5d2e7b352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d22fbffc67e55415433faee29adbda1e4439dc12b97dc638800def5d2e7b352->enter($__internal_7d22fbffc67e55415433faee29adbda1e4439dc12b97dc638800def5d2e7b352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        $__internal_b6f31b945e40dd776391f5ed5d13fe6f507df3e3429bf9c073c614b86c2b0f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f31b945e40dd776391f5ed5d13fe6f507df3e3429bf9c073c614b86c2b0f13->enter($__internal_b6f31b945e40dd776391f5ed5d13fe6f507df3e3429bf9c073c614b86c2b0f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["revision"]) || array_key_exists("revision", $context) ? $context["revision"] : (function () { throw new Twig_Error_Runtime('Variable "revision" does not exist.', 12, $this->getSourceContext()); })()), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_7d22fbffc67e55415433faee29adbda1e4439dc12b97dc638800def5d2e7b352->leave($__internal_7d22fbffc67e55415433faee29adbda1e4439dc12b97dc638800def5d2e7b352_prof);

        
        $__internal_b6f31b945e40dd776391f5ed5d13fe6f507df3e3429bf9c073c614b86c2b0f13->leave($__internal_b6f31b945e40dd776391f5ed5d13fe6f507df3e3429bf9c073c614b86c2b0f13_prof);

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
