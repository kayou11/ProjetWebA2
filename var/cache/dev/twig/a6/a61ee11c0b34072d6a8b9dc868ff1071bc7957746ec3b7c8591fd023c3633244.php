<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_12b4bad4594e15b21f425af681edd90fc94a3f8739bdb8f95390c6eec94b6293 extends Twig_Template
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
        $__internal_02d7738ed483fd8845a6246c4bc1a260cbf115e728d1de53c468a162149fa305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d7738ed483fd8845a6246c4bc1a260cbf115e728d1de53c468a162149fa305->enter($__internal_02d7738ed483fd8845a6246c4bc1a260cbf115e728d1de53c468a162149fa305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_0381117d2078fd151c99ac3b76b12ebb0b209c674efc52bfc3127fa00996e64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0381117d2078fd151c99ac3b76b12ebb0b209c674efc52bfc3127fa00996e64b->enter($__internal_0381117d2078fd151c99ac3b76b12ebb0b209c674efc52bfc3127fa00996e64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_02d7738ed483fd8845a6246c4bc1a260cbf115e728d1de53c468a162149fa305->leave($__internal_02d7738ed483fd8845a6246c4bc1a260cbf115e728d1de53c468a162149fa305_prof);

        
        $__internal_0381117d2078fd151c99ac3b76b12ebb0b209c674efc52bfc3127fa00996e64b->leave($__internal_0381117d2078fd151c99ac3b76b12ebb0b209c674efc52bfc3127fa00996e64b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
