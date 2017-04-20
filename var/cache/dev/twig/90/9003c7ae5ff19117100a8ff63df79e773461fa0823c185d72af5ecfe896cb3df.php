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
        $__internal_e8a8653eadf78690f756bf1129eaf6b07507a2135aa87dc9fee93b82bce0c6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a8653eadf78690f756bf1129eaf6b07507a2135aa87dc9fee93b82bce0c6a6->enter($__internal_e8a8653eadf78690f756bf1129eaf6b07507a2135aa87dc9fee93b82bce0c6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_3a01363a0c30458c8e4fce51028c314fbbb469da7fc2e8aea1f67d1395a02a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a01363a0c30458c8e4fce51028c314fbbb469da7fc2e8aea1f67d1395a02a8e->enter($__internal_3a01363a0c30458c8e4fce51028c314fbbb469da7fc2e8aea1f67d1395a02a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_e8a8653eadf78690f756bf1129eaf6b07507a2135aa87dc9fee93b82bce0c6a6->leave($__internal_e8a8653eadf78690f756bf1129eaf6b07507a2135aa87dc9fee93b82bce0c6a6_prof);

        
        $__internal_3a01363a0c30458c8e4fce51028c314fbbb469da7fc2e8aea1f67d1395a02a8e->leave($__internal_3a01363a0c30458c8e4fce51028c314fbbb469da7fc2e8aea1f67d1395a02a8e_prof);

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
