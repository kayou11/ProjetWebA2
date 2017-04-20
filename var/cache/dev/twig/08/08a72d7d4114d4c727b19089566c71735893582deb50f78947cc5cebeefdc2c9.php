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
        $__internal_e9e248923b882daa83c19163305b3ceee91eb59fbb36497ad589ffee97c9be75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e248923b882daa83c19163305b3ceee91eb59fbb36497ad589ffee97c9be75->enter($__internal_e9e248923b882daa83c19163305b3ceee91eb59fbb36497ad589ffee97c9be75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $__internal_eaadbf2a49b40c4bf0c60bda462fe814f6d6bb215706a9d2d27e3b07e26e52b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaadbf2a49b40c4bf0c60bda462fe814f6d6bb215706a9d2d27e3b07e26e52b3->enter($__internal_eaadbf2a49b40c4bf0c60bda462fe814f6d6bb215706a9d2d27e3b07e26e52b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9e248923b882daa83c19163305b3ceee91eb59fbb36497ad589ffee97c9be75->leave($__internal_e9e248923b882daa83c19163305b3ceee91eb59fbb36497ad589ffee97c9be75_prof);

        
        $__internal_eaadbf2a49b40c4bf0c60bda462fe814f6d6bb215706a9d2d27e3b07e26e52b3->leave($__internal_eaadbf2a49b40c4bf0c60bda462fe814f6d6bb215706a9d2d27e3b07e26e52b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c40fa4fe60c06d6b9c06e242b73a465e707f2c7d5f4f0ba73e6a64276887a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c40fa4fe60c06d6b9c06e242b73a465e707f2c7d5f4f0ba73e6a64276887a41->enter($__internal_0c40fa4fe60c06d6b9c06e242b73a465e707f2c7d5f4f0ba73e6a64276887a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fc0f87e8ac48c350f53e4f6c929aabc3c76bce5af36155cd4e09fbf4670e2376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0f87e8ac48c350f53e4f6c929aabc3c76bce5af36155cd4e09fbf4670e2376->enter($__internal_fc0f87e8ac48c350f53e4f6c929aabc3c76bce5af36155cd4e09fbf4670e2376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_fc0f87e8ac48c350f53e4f6c929aabc3c76bce5af36155cd4e09fbf4670e2376->leave($__internal_fc0f87e8ac48c350f53e4f6c929aabc3c76bce5af36155cd4e09fbf4670e2376_prof);

        
        $__internal_0c40fa4fe60c06d6b9c06e242b73a465e707f2c7d5f4f0ba73e6a64276887a41->leave($__internal_0c40fa4fe60c06d6b9c06e242b73a465e707f2c7d5f4f0ba73e6a64276887a41_prof);

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
