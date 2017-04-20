<?php

/* SonataAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_d5e1a2fb1b92d71088f735c2b378689ed65c9bdfa6654a9b64b0250f27b6b275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cdd577de363662cb3d809c9d9f4b06c4bb38397c9bdbeab62e924cd2f2f5927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cdd577de363662cb3d809c9d9f4b06c4bb38397c9bdbeab62e924cd2f2f5927->enter($__internal_8cdd577de363662cb3d809c9d9f4b06c4bb38397c9bdbeab62e924cd2f2f5927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $__internal_482d657633316957b96bf4fbe7ba8fee8648dcb7bba484f92564cebc4983a49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482d657633316957b96bf4fbe7ba8fee8648dcb7bba484f92564cebc4983a49a->enter($__internal_482d657633316957b96bf4fbe7ba8fee8648dcb7bba484f92564cebc4983a49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cdd577de363662cb3d809c9d9f4b06c4bb38397c9bdbeab62e924cd2f2f5927->leave($__internal_8cdd577de363662cb3d809c9d9f4b06c4bb38397c9bdbeab62e924cd2f2f5927_prof);

        
        $__internal_482d657633316957b96bf4fbe7ba8fee8648dcb7bba484f92564cebc4983a49a->leave($__internal_482d657633316957b96bf4fbe7ba8fee8648dcb7bba484f92564cebc4983a49a_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_3f87d18af28a397e5e690ef203d7e559d06ccca7610e1ef65c274051d056097a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f87d18af28a397e5e690ef203d7e559d06ccca7610e1ef65c274051d056097a->enter($__internal_3f87d18af28a397e5e690ef203d7e559d06ccca7610e1ef65c274051d056097a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_16000fcd0a1ba214d004d821d1fb7d05e4565c44a00f723ce6326bb14483295e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16000fcd0a1ba214d004d821d1fb7d05e4565c44a00f723ce6326bb14483295e->enter($__internal_16000fcd0a1ba214d004d821d1fb7d05e4565c44a00f723ce6326bb14483295e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastPage", array()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_16000fcd0a1ba214d004d821d1fb7d05e4565c44a00f723ce6326bb14483295e->leave($__internal_16000fcd0a1ba214d004d821d1fb7d05e4565c44a00f723ce6326bb14483295e_prof);

        
        $__internal_3f87d18af28a397e5e690ef203d7e559d06ccca7610e1ef65c274051d056097a->leave($__internal_3f87d18af28a397e5e690ef203d7e559d06ccca7610e1ef65c274051d056097a_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_1fe95bbcc35d47fabf4ef187c970c9e532aa36171845b05cf301958f191278eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe95bbcc35d47fabf4ef187c970c9e532aa36171845b05cf301958f191278eb->enter($__internal_1fe95bbcc35d47fabf4ef187c970c9e532aa36171845b05cf301958f191278eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_acb777e4728458f91ccd4cc83416e1ec0a20357e6db81287455dcb250b2f046f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb777e4728458f91ccd4cc83416e1ec0a20357e6db81287455dcb250b2f046f->enter($__internal_acb777e4728458f91ccd4cc83416e1ec0a20357e6db81287455dcb250b2f046f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 23, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastPage", array()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 28, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_acb777e4728458f91ccd4cc83416e1ec0a20357e6db81287455dcb250b2f046f->leave($__internal_acb777e4728458f91ccd4cc83416e1ec0a20357e6db81287455dcb250b2f046f_prof);

        
        $__internal_1fe95bbcc35d47fabf4ef187c970c9e532aa36171845b05cf301958f191278eb->leave($__internal_1fe95bbcc35d47fabf4ef187c970c9e532aa36171845b05cf301958f191278eb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  94 => 28,  90 => 26,  88 => 25,  82 => 23,  73 => 22,  62 => 19,  59 => 18,  53 => 16,  50 => 15,  41 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}

{% block num_results %}
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}
    {% endif %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_pages %}
    {{ admin.datagrid.pager.page }}
    /
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        ?
    {% else %}
        {{ admin.datagrid.pager.lastpage }}
    {% endif %}
    &nbsp;-&nbsp;
{% endblock %}
", "SonataAdminBundle:Pager:simple_pager_results.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Pager/simple_pager_results.html.twig");
    }
}
