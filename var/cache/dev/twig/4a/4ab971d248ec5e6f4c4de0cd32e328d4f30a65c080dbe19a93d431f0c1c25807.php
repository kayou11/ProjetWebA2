<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_82ec413cbb980ba98212b6d6d64c47aa1a96f392b385b009f59371a5f3f7f38d extends Twig_Template
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
        $__internal_53b3dac44ba2fb349e05dad862fdee93dfad48edb785214befa3a323251a226f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b3dac44ba2fb349e05dad862fdee93dfad48edb785214befa3a323251a226f->enter($__internal_53b3dac44ba2fb349e05dad862fdee93dfad48edb785214befa3a323251a226f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_8538f779adbce9cfc688711a460ed69b001d88ad6f7f4873e10c06d2a2e6f1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8538f779adbce9cfc688711a460ed69b001d88ad6f7f4873e10c06d2a2e6f1be->enter($__internal_8538f779adbce9cfc688711a460ed69b001d88ad6f7f4873e10c06d2a2e6f1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_53b3dac44ba2fb349e05dad862fdee93dfad48edb785214befa3a323251a226f->leave($__internal_53b3dac44ba2fb349e05dad862fdee93dfad48edb785214befa3a323251a226f_prof);

        
        $__internal_8538f779adbce9cfc688711a460ed69b001d88ad6f7f4873e10c06d2a2e6f1be->leave($__internal_8538f779adbce9cfc688711a460ed69b001d88ad6f7f4873e10c06d2a2e6f1be_prof);

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
