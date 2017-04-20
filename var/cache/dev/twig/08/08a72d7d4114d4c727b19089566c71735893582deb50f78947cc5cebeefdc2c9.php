<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_77e605c537847493412923fd0db6d07eee953e74f8e70a52ef29cc249200bfcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1718499c0158a1c5b7bcafef6a31d6a17180919566f2ca4b0f9c24c5415b03f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1718499c0158a1c5b7bcafef6a31d6a17180919566f2ca4b0f9c24c5415b03f8->enter($__internal_1718499c0158a1c5b7bcafef6a31d6a17180919566f2ca4b0f9c24c5415b03f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $__internal_a744bfc5a4acbdecf19cff632299d97de1ed258c35d9b37850948b0a3d87b86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a744bfc5a4acbdecf19cff632299d97de1ed258c35d9b37850948b0a3d87b86c->enter($__internal_a744bfc5a4acbdecf19cff632299d97de1ed258c35d9b37850948b0a3d87b86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1718499c0158a1c5b7bcafef6a31d6a17180919566f2ca4b0f9c24c5415b03f8->leave($__internal_1718499c0158a1c5b7bcafef6a31d6a17180919566f2ca4b0f9c24c5415b03f8_prof);

        
        $__internal_a744bfc5a4acbdecf19cff632299d97de1ed258c35d9b37850948b0a3d87b86c->leave($__internal_a744bfc5a4acbdecf19cff632299d97de1ed258c35d9b37850948b0a3d87b86c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d141def451e3d5c30e0a5c58e03cb808bcb1eadb6d38ae5f0a34a112ecda728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d141def451e3d5c30e0a5c58e03cb808bcb1eadb6d38ae5f0a34a112ecda728->enter($__internal_0d141def451e3d5c30e0a5c58e03cb808bcb1eadb6d38ae5f0a34a112ecda728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bb029c766a34f7a53689d80096a46f97eeef6c1aa6460a5033992f076e957bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb029c766a34f7a53689d80096a46f97eeef6c1aa6460a5033992f076e957bb0->enter($__internal_bb029c766a34f7a53689d80096a46f97eeef6c1aa6460a5033992f076e957bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console");
        echo "\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        $context["text"] = ('' === $tmp = "Console") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 14)->display(array_merge($context, array("link" => false)));
        
        $__internal_bb029c766a34f7a53689d80096a46f97eeef6c1aa6460a5033992f076e957bb0->leave($__internal_bb029c766a34f7a53689d80096a46f97eeef6c1aa6460a5033992f076e957bb0_prof);

        
        $__internal_0d141def451e3d5c30e0a5c58e03cb808bcb1eadb6d38ae5f0a34a112ecda728->leave($__internal_0d141def451e3d5c30e0a5c58e03cb808bcb1eadb6d38ae5f0a34a112ecda728_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  66 => 13,  63 => 12,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <a href=\"{{ path('console') }}\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    {% endset %}
    {% set text %}Console{% endset %}

    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': false } %}
{% endblock %}
", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/coresphere/console-bundle/Resources/views/Toolbar/toolbar.html.twig");
    }
}
