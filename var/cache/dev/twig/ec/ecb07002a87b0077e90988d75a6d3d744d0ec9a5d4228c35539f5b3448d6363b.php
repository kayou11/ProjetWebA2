<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_951f049770377acaa66eee39de4871388c02f310a13a14cca071acf8a206bd10 extends Twig_Template
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
        $__internal_960db892752a18968a7b3275f8de957ebc5b7802d24e836a061de8ca09962771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960db892752a18968a7b3275f8de957ebc5b7802d24e836a061de8ca09962771->enter($__internal_960db892752a18968a7b3275f8de957ebc5b7802d24e836a061de8ca09962771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_6ce751ee21072f576d7a980e1633be2aa8412b1cf8e7ea6ef5fcecb65f9bc604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce751ee21072f576d7a980e1633be2aa8412b1cf8e7ea6ef5fcecb65f9bc604->enter($__internal_6ce751ee21072f576d7a980e1633be2aa8412b1cf8e7ea6ef5fcecb65f9bc604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_960db892752a18968a7b3275f8de957ebc5b7802d24e836a061de8ca09962771->leave($__internal_960db892752a18968a7b3275f8de957ebc5b7802d24e836a061de8ca09962771_prof);

        
        $__internal_6ce751ee21072f576d7a980e1633be2aa8412b1cf8e7ea6ef5fcecb65f9bc604->leave($__internal_6ce751ee21072f576d7a980e1633be2aa8412b1cf8e7ea6ef5fcecb65f9bc604_prof);

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
