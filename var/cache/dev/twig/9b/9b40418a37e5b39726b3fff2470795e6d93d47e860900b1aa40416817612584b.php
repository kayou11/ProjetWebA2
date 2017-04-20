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
        $__internal_f6a3269582fb3921430aa6127edf0b3583827032e04d1496c6e775f0253143da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a3269582fb3921430aa6127edf0b3583827032e04d1496c6e775f0253143da->enter($__internal_f6a3269582fb3921430aa6127edf0b3583827032e04d1496c6e775f0253143da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $__internal_b4c39c9090e20cb4affb58e2475ac1784621e64d1838c15572534496fcadfd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c39c9090e20cb4affb58e2475ac1784621e64d1838c15572534496fcadfd8c->enter($__internal_b4c39c9090e20cb4affb58e2475ac1784621e64d1838c15572534496fcadfd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6a3269582fb3921430aa6127edf0b3583827032e04d1496c6e775f0253143da->leave($__internal_f6a3269582fb3921430aa6127edf0b3583827032e04d1496c6e775f0253143da_prof);

        
        $__internal_b4c39c9090e20cb4affb58e2475ac1784621e64d1838c15572534496fcadfd8c->leave($__internal_b4c39c9090e20cb4affb58e2475ac1784621e64d1838c15572534496fcadfd8c_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8adca5a90e83491575f3dd0ae470a0aaff102c9784f6ea00fdcc45d0acbe268f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8adca5a90e83491575f3dd0ae470a0aaff102c9784f6ea00fdcc45d0acbe268f->enter($__internal_8adca5a90e83491575f3dd0ae470a0aaff102c9784f6ea00fdcc45d0acbe268f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_437ad75781dd0b34048358e5ccdf4e44a982b4ced3f63cb002fd4633fb80e88d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437ad75781dd0b34048358e5ccdf4e44a982b4ced3f63cb002fd4633fb80e88d->enter($__internal_437ad75781dd0b34048358e5ccdf4e44a982b4ced3f63cb002fd4633fb80e88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["menu_options"]) || array_key_exists("menu_options", $context) ? $context["menu_options"] : (function () { throw new Twig_Error_Runtime('Variable "menu_options" does not exist.', 15, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_437ad75781dd0b34048358e5ccdf4e44a982b4ced3f63cb002fd4633fb80e88d->leave($__internal_437ad75781dd0b34048358e5ccdf4e44a982b4ced3f63cb002fd4633fb80e88d_prof);

        
        $__internal_8adca5a90e83491575f3dd0ae470a0aaff102c9784f6ea00fdcc45d0acbe268f->leave($__internal_8adca5a90e83491575f3dd0ae470a0aaff102c9784f6ea00fdcc45d0acbe268f_prof);

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
