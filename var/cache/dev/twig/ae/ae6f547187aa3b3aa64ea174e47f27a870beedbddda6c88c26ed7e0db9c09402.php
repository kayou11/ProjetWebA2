<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_91f667ae9ec13c7fa5137ca1e19d642d7187060b69804ed1c91aefb39fe65fba extends Twig_Template
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
        $__internal_0984a8948833189fe55498da24eacd5f1b2a29eed2f76f97baf350a389fbdee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0984a8948833189fe55498da24eacd5f1b2a29eed2f76f97baf350a389fbdee6->enter($__internal_0984a8948833189fe55498da24eacd5f1b2a29eed2f76f97baf350a389fbdee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_e13f5b6df394f2c021e5e739702edcb5cd2b6bb8991644775b299c6c70b31aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13f5b6df394f2c021e5e739702edcb5cd2b6bb8991644775b299c6c70b31aab->enter($__internal_e13f5b6df394f2c021e5e739702edcb5cd2b6bb8991644775b299c6c70b31aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_0984a8948833189fe55498da24eacd5f1b2a29eed2f76f97baf350a389fbdee6->leave($__internal_0984a8948833189fe55498da24eacd5f1b2a29eed2f76f97baf350a389fbdee6_prof);

        
        $__internal_e13f5b6df394f2c021e5e739702edcb5cd2b6bb8991644775b299c6c70b31aab->leave($__internal_e13f5b6df394f2c021e5e739702edcb5cd2b6bb8991644775b299c6c70b31aab_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
