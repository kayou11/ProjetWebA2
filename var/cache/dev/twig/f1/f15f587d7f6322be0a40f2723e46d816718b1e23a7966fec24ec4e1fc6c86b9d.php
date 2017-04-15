<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_ed3a1ff12dc3932628a64219150111b6683824589b15b0697bf350b5bb455811 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b4a0529c64b3c83147413ecb3624a9c7d9a49ac13d64fe361846f1377baea57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4a0529c64b3c83147413ecb3624a9c7d9a49ac13d64fe361846f1377baea57->enter($__internal_2b4a0529c64b3c83147413ecb3624a9c7d9a49ac13d64fe361846f1377baea57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $__internal_ecc947085955faeea5e3ea9c99c2c7d1a19b7ce05dbd7efb81ac31a81a1ad368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc947085955faeea5e3ea9c99c2c7d1a19b7ce05dbd7efb81ac31a81a1ad368->enter($__internal_ecc947085955faeea5e3ea9c99c2c7d1a19b7ce05dbd7efb81ac31a81a1ad368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b4a0529c64b3c83147413ecb3624a9c7d9a49ac13d64fe361846f1377baea57->leave($__internal_2b4a0529c64b3c83147413ecb3624a9c7d9a49ac13d64fe361846f1377baea57_prof);

        
        $__internal_ecc947085955faeea5e3ea9c99c2c7d1a19b7ce05dbd7efb81ac31a81a1ad368->leave($__internal_ecc947085955faeea5e3ea9c99c2c7d1a19b7ce05dbd7efb81ac31a81a1ad368_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c759a58cc4de3d92e8407d22ca11751db50d40c4500a113a1926f04fb0276226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c759a58cc4de3d92e8407d22ca11751db50d40c4500a113a1926f04fb0276226->enter($__internal_c759a58cc4de3d92e8407d22ca11751db50d40c4500a113a1926f04fb0276226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_6ae32bed522cbe1959b83e0e15eeee083a5ffbbae0eb0c1f3ef55b77975e8a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae32bed522cbe1959b83e0e15eeee083a5ffbbae0eb0c1f3ef55b77975e8a93->enter($__internal_6ae32bed522cbe1959b83e0e15eeee083a5ffbbae0eb0c1f3ef55b77975e8a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo ($context["content"] ?? $this->getContext($context, "content"));
        echo "
";
        
        $__internal_6ae32bed522cbe1959b83e0e15eeee083a5ffbbae0eb0c1f3ef55b77975e8a93->leave($__internal_6ae32bed522cbe1959b83e0e15eeee083a5ffbbae0eb0c1f3ef55b77975e8a93_prof);

        
        $__internal_c759a58cc4de3d92e8407d22ca11751db50d40c4500a113a1926f04fb0276226->leave($__internal_c759a58cc4de3d92e8407d22ca11751db50d40c4500a113a1926f04fb0276226_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
