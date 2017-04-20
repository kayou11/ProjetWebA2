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
        $__internal_e9a255e539862151799548296ad14eae51ae8c590c6c9601d44c53a047c65907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a255e539862151799548296ad14eae51ae8c590c6c9601d44c53a047c65907->enter($__internal_e9a255e539862151799548296ad14eae51ae8c590c6c9601d44c53a047c65907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_00c48c8c888e264328a5ff0362883bac6c2f4152739aaf37564e7b55d8cdb089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c48c8c888e264328a5ff0362883bac6c2f4152739aaf37564e7b55d8cdb089->enter($__internal_00c48c8c888e264328a5ff0362883bac6c2f4152739aaf37564e7b55d8cdb089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_e9a255e539862151799548296ad14eae51ae8c590c6c9601d44c53a047c65907->leave($__internal_e9a255e539862151799548296ad14eae51ae8c590c6c9601d44c53a047c65907_prof);

        
        $__internal_00c48c8c888e264328a5ff0362883bac6c2f4152739aaf37564e7b55d8cdb089->leave($__internal_00c48c8c888e264328a5ff0362883bac6c2f4152739aaf37564e7b55d8cdb089_prof);

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
