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
        $__internal_622b065493db19d80f09870e637b9a24f72ea3ea6ad64eed08648bcb1bda28d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622b065493db19d80f09870e637b9a24f72ea3ea6ad64eed08648bcb1bda28d9->enter($__internal_622b065493db19d80f09870e637b9a24f72ea3ea6ad64eed08648bcb1bda28d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_429c33a5c3ca8123193fb0bf67d48a145d0ad777627ece7433e0e1081f721e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429c33a5c3ca8123193fb0bf67d48a145d0ad777627ece7433e0e1081f721e63->enter($__internal_429c33a5c3ca8123193fb0bf67d48a145d0ad777627ece7433e0e1081f721e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_622b065493db19d80f09870e637b9a24f72ea3ea6ad64eed08648bcb1bda28d9->leave($__internal_622b065493db19d80f09870e637b9a24f72ea3ea6ad64eed08648bcb1bda28d9_prof);

        
        $__internal_429c33a5c3ca8123193fb0bf67d48a145d0ad777627ece7433e0e1081f721e63->leave($__internal_429c33a5c3ca8123193fb0bf67d48a145d0ad777627ece7433e0e1081f721e63_prof);

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
