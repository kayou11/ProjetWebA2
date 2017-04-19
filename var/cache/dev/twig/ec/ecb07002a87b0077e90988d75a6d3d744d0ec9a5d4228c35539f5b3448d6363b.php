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
        $__internal_3305ae4852ffb82cfad40a56c71d1d907f4e6f95113f0c80600c9c3995131db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3305ae4852ffb82cfad40a56c71d1d907f4e6f95113f0c80600c9c3995131db2->enter($__internal_3305ae4852ffb82cfad40a56c71d1d907f4e6f95113f0c80600c9c3995131db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_3d71bade23a8fe9d98c070464f0fefa7aaa37f7c90efb136c61d38b6481dfae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d71bade23a8fe9d98c070464f0fefa7aaa37f7c90efb136c61d38b6481dfae7->enter($__internal_3d71bade23a8fe9d98c070464f0fefa7aaa37f7c90efb136c61d38b6481dfae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_3305ae4852ffb82cfad40a56c71d1d907f4e6f95113f0c80600c9c3995131db2->leave($__internal_3305ae4852ffb82cfad40a56c71d1d907f4e6f95113f0c80600c9c3995131db2_prof);

        
        $__internal_3d71bade23a8fe9d98c070464f0fefa7aaa37f7c90efb136c61d38b6481dfae7->leave($__internal_3d71bade23a8fe9d98c070464f0fefa7aaa37f7c90efb136c61d38b6481dfae7_prof);

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
