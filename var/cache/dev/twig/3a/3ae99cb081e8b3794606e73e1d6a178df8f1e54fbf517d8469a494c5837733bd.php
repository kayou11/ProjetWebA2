<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_b8410198774f338088ad33f1a320d2799889088ff0abc80d4b355cd3125be0dd extends Twig_Template
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
        $__internal_dba9f98de28c8c70ca4d8c86dee7c2792a177bdd9187539273164c9c9dce4b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba9f98de28c8c70ca4d8c86dee7c2792a177bdd9187539273164c9c9dce4b5f->enter($__internal_dba9f98de28c8c70ca4d8c86dee7c2792a177bdd9187539273164c9c9dce4b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_e05207779152f3d64daa198bc806367c58f5a3f1ce5e176bc6b3833f15519e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05207779152f3d64daa198bc806367c58f5a3f1ce5e176bc6b3833f15519e8c->enter($__internal_e05207779152f3d64daa198bc806367c58f5a3f1ce5e176bc6b3833f15519e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_dba9f98de28c8c70ca4d8c86dee7c2792a177bdd9187539273164c9c9dce4b5f->leave($__internal_dba9f98de28c8c70ca4d8c86dee7c2792a177bdd9187539273164c9c9dce4b5f_prof);

        
        $__internal_e05207779152f3d64daa198bc806367c58f5a3f1ce5e176bc6b3833f15519e8c->leave($__internal_e05207779152f3d64daa198bc806367c58f5a3f1ce5e176bc6b3833f15519e8c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
