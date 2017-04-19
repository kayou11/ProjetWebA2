<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_03212a3b5df5066faef3b8ea208e7c73bfa182d6158f35241d0b2e6683f9ce48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50384d580f112ed8236e0b06fd72add598ddadd1d5952613a570691d4306ad7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50384d580f112ed8236e0b06fd72add598ddadd1d5952613a570691d4306ad7c->enter($__internal_50384d580f112ed8236e0b06fd72add598ddadd1d5952613a570691d4306ad7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $__internal_76cc64bc668bc8e033f93fa894bf0542ae96023d7bc55dbfad244046cb54d48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76cc64bc668bc8e033f93fa894bf0542ae96023d7bc55dbfad244046cb54d48b->enter($__internal_76cc64bc668bc8e033f93fa894bf0542ae96023d7bc55dbfad244046cb54d48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50384d580f112ed8236e0b06fd72add598ddadd1d5952613a570691d4306ad7c->leave($__internal_50384d580f112ed8236e0b06fd72add598ddadd1d5952613a570691d4306ad7c_prof);

        
        $__internal_76cc64bc668bc8e033f93fa894bf0542ae96023d7bc55dbfad244046cb54d48b->leave($__internal_76cc64bc668bc8e033f93fa894bf0542ae96023d7bc55dbfad244046cb54d48b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_0b0c94fa7bdb1370cd005fb1b0d9ed9ac643c64e344dc922d9a5c9d1ce2e9cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0c94fa7bdb1370cd005fb1b0d9ed9ac643c64e344dc922d9a5c9d1ce2e9cff->enter($__internal_0b0c94fa7bdb1370cd005fb1b0d9ed9ac643c64e344dc922d9a5c9d1ce2e9cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_220483e1be09f6ff0a31a697b7e0cd23534d8300ddb275a3d9d67a8d366ac64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220483e1be09f6ff0a31a697b7e0cd23534d8300ddb275a3d9d67a8d366ac64f->enter($__internal_220483e1be09f6ff0a31a697b7e0cd23534d8300ddb275a3d9d67a8d366ac64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["menu_options"]) || array_key_exists("menu_options", $context) ? $context["menu_options"] : (function () { throw new Twig_Error_Runtime('Variable "menu_options" does not exist.', 15, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_220483e1be09f6ff0a31a697b7e0cd23534d8300ddb275a3d9d67a8d366ac64f->leave($__internal_220483e1be09f6ff0a31a697b7e0cd23534d8300ddb275a3d9d67a8d366ac64f_prof);

        
        $__internal_0b0c94fa7bdb1370cd005fb1b0d9ed9ac643c64e344dc922d9a5c9d1ce2e9cff->leave($__internal_0b0c94fa7bdb1370cd005fb1b0d9ed9ac643c64e344dc922d9a5c9d1ce2e9cff_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
