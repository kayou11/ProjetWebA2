<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_dc16d13a92c7f1907e8726fa310142b6a6f7cc58a854ba1ec380290362ca15d8 extends Twig_Template
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
        $__internal_595f25ab54efc6d9de34d21468841d6902a0e6dd95f791ec2e4575aa99dcf307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595f25ab54efc6d9de34d21468841d6902a0e6dd95f791ec2e4575aa99dcf307->enter($__internal_595f25ab54efc6d9de34d21468841d6902a0e6dd95f791ec2e4575aa99dcf307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_ab31c0d6c10f09cae288ec5728fe1aadc8f0621dc48590f0dc1193800031f203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab31c0d6c10f09cae288ec5728fe1aadc8f0621dc48590f0dc1193800031f203->enter($__internal_ab31c0d6c10f09cae288ec5728fe1aadc8f0621dc48590f0dc1193800031f203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_595f25ab54efc6d9de34d21468841d6902a0e6dd95f791ec2e4575aa99dcf307->leave($__internal_595f25ab54efc6d9de34d21468841d6902a0e6dd95f791ec2e4575aa99dcf307_prof);

        
        $__internal_ab31c0d6c10f09cae288ec5728fe1aadc8f0621dc48590f0dc1193800031f203->leave($__internal_ab31c0d6c10f09cae288ec5728fe1aadc8f0621dc48590f0dc1193800031f203_prof);

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
