<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_9f2d2e01e891a8ffd037284f2ae2c1c1e6834987ec50438625ded2f810f56167 extends Twig_Template
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
        $__internal_7c4d80234fa8dd7caf569c6ffbfc19af5aab010549342d76055cbed259976761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c4d80234fa8dd7caf569c6ffbfc19af5aab010549342d76055cbed259976761->enter($__internal_7c4d80234fa8dd7caf569c6ffbfc19af5aab010549342d76055cbed259976761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_aaa684c1e9908fb7f229c66d7d8ed5abac4541ad789b0ca84527ed2ca1e01774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa684c1e9908fb7f229c66d7d8ed5abac4541ad789b0ca84527ed2ca1e01774->enter($__internal_aaa684c1e9908fb7f229c66d7d8ed5abac4541ad789b0ca84527ed2ca1e01774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_7c4d80234fa8dd7caf569c6ffbfc19af5aab010549342d76055cbed259976761->leave($__internal_7c4d80234fa8dd7caf569c6ffbfc19af5aab010549342d76055cbed259976761_prof);

        
        $__internal_aaa684c1e9908fb7f229c66d7d8ed5abac4541ad789b0ca84527ed2ca1e01774->leave($__internal_aaa684c1e9908fb7f229c66d7d8ed5abac4541ad789b0ca84527ed2ca1e01774_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
