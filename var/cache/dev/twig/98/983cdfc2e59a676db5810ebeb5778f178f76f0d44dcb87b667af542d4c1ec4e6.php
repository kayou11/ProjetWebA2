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
        $__internal_ff10174c3076fcc32fb86ec9b94253c294d1c4ae1e61a7ee936b3faf20b7019e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff10174c3076fcc32fb86ec9b94253c294d1c4ae1e61a7ee936b3faf20b7019e->enter($__internal_ff10174c3076fcc32fb86ec9b94253c294d1c4ae1e61a7ee936b3faf20b7019e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_2971b6942ec79390fad7ff34e1eae969028f9801d1eee1c978c4d4ede074541b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2971b6942ec79390fad7ff34e1eae969028f9801d1eee1c978c4d4ede074541b->enter($__internal_2971b6942ec79390fad7ff34e1eae969028f9801d1eee1c978c4d4ede074541b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_ff10174c3076fcc32fb86ec9b94253c294d1c4ae1e61a7ee936b3faf20b7019e->leave($__internal_ff10174c3076fcc32fb86ec9b94253c294d1c4ae1e61a7ee936b3faf20b7019e_prof);

        
        $__internal_2971b6942ec79390fad7ff34e1eae969028f9801d1eee1c978c4d4ede074541b->leave($__internal_2971b6942ec79390fad7ff34e1eae969028f9801d1eee1c978c4d4ede074541b_prof);

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
