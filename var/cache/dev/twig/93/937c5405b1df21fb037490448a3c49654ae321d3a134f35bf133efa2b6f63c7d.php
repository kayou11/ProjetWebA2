<?php

/* SonataAdminBundle:CRUD:dashboard__action.html.twig */
class __TwigTemplate_8331a43d53fcb3499fa403d3b07312a1bfb21a7931d5a3729d96cd3a29b8cb9c extends Twig_Template
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
        $__internal_504a2f4d73606deff66dd7736a90a26bfa6d5c065ad22e614ddd5d28485e676b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504a2f4d73606deff66dd7736a90a26bfa6d5c065ad22e614ddd5d28485e676b->enter($__internal_504a2f4d73606deff66dd7736a90a26bfa6d5c065ad22e614ddd5d28485e676b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action.html.twig"));

        $__internal_d9eeb801d95d50ee8a7eff9bfa52f795f291a46c29bf9c8dace6e3deb77dd5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9eeb801d95d50ee8a7eff9bfa52f795f291a46c29bf9c8dace6e3deb77dd5b5->enter($__internal_d9eeb801d95d50ee8a7eff9bfa52f795f291a46c29bf9c8dace6e3deb77dd5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action.html.twig"));

        // line 1
        echo "<a class=\"btn btn-link btn-flat\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 1, $this->getSourceContext()); })()), "url", array()), "html", null, true);
        echo "\">
    <i class=\"fa fa-";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 2, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 3, $this->getSourceContext()); })()), "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["action"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["action"] ?? null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_504a2f4d73606deff66dd7736a90a26bfa6d5c065ad22e614ddd5d28485e676b->leave($__internal_504a2f4d73606deff66dd7736a90a26bfa6d5c065ad22e614ddd5d28485e676b_prof);

        
        $__internal_d9eeb801d95d50ee8a7eff9bfa52f795f291a46c29bf9c8dace6e3deb77dd5b5->leave($__internal_d9eeb801d95d50ee8a7eff9bfa52f795f291a46c29bf9c8dace6e3deb77dd5b5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:dashboard__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"btn btn-link btn-flat\" href=\"{{ action.url }}\">
    <i class=\"fa fa-{{ action.icon }}\" aria-hidden=\"true\"></i>
    {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
</a>
", "SonataAdminBundle:CRUD:dashboard__action.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/dashboard__action.html.twig");
    }
}
