<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_75d8f650c31aca934064d35b13bfeb96c015b327d26bac0c1ed805dc5d53143e extends Twig_Template
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
        $__internal_3c38e4f5ebbfe0486c3810784c2dda331edeadf61e73f01e2e424bb41bcc7a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c38e4f5ebbfe0486c3810784c2dda331edeadf61e73f01e2e424bb41bcc7a12->enter($__internal_3c38e4f5ebbfe0486c3810784c2dda331edeadf61e73f01e2e424bb41bcc7a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $__internal_697b760f1b1d7f3abdacbbb7e6540c25036269d1e55763ae5afab8381d57c504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697b760f1b1d7f3abdacbbb7e6540c25036269d1e55763ae5afab8381d57c504->enter($__internal_697b760f1b1d7f3abdacbbb7e6540c25036269d1e55763ae5afab8381d57c504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c38e4f5ebbfe0486c3810784c2dda331edeadf61e73f01e2e424bb41bcc7a12->leave($__internal_3c38e4f5ebbfe0486c3810784c2dda331edeadf61e73f01e2e424bb41bcc7a12_prof);

        
        $__internal_697b760f1b1d7f3abdacbbb7e6540c25036269d1e55763ae5afab8381d57c504->leave($__internal_697b760f1b1d7f3abdacbbb7e6540c25036269d1e55763ae5afab8381d57c504_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2a873640ec80ef5e72b3cc7a460a98ce6389207f87389a0af8c921386f6250dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a873640ec80ef5e72b3cc7a460a98ce6389207f87389a0af8c921386f6250dd->enter($__internal_2a873640ec80ef5e72b3cc7a460a98ce6389207f87389a0af8c921386f6250dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_c48f7054400e561625ce725773ab699d75afa699546bc2d6e1bfcef4a1be3cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48f7054400e561625ce725773ab699d75afa699546bc2d6e1bfcef4a1be3cd5->enter($__internal_c48f7054400e561625ce725773ab699d75afa699546bc2d6e1bfcef4a1be3cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["menu_options"]) || array_key_exists("menu_options", $context) ? $context["menu_options"] : (function () { throw new Twig_Error_Runtime('Variable "menu_options" does not exist.', 15, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_c48f7054400e561625ce725773ab699d75afa699546bc2d6e1bfcef4a1be3cd5->leave($__internal_c48f7054400e561625ce725773ab699d75afa699546bc2d6e1bfcef4a1be3cd5_prof);

        
        $__internal_2a873640ec80ef5e72b3cc7a460a98ce6389207f87389a0af8c921386f6250dd->leave($__internal_2a873640ec80ef5e72b3cc7a460a98ce6389207f87389a0af8c921386f6250dd_prof);

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
