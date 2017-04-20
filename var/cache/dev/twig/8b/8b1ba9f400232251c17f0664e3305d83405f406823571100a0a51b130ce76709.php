<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_af786a9c1dea14a398876be4e2f637560cc496ffa021f41c53698170680a252e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a3a9d688a7d5c0cca679e606196310aaac0666ec971431c3bc36ef642c895a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3a9d688a7d5c0cca679e606196310aaac0666ec971431c3bc36ef642c895a0->enter($__internal_4a3a9d688a7d5c0cca679e606196310aaac0666ec971431c3bc36ef642c895a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        $__internal_4ce4c9157b0dffd768eb18fd4eb9a9b41cbbb61219199ed260fbe0d69e31100d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce4c9157b0dffd768eb18fd4eb9a9b41cbbb61219199ed260fbe0d69e31100d->enter($__internal_4ce4c9157b0dffd768eb18fd4eb9a9b41cbbb61219199ed260fbe0d69e31100d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_4a3a9d688a7d5c0cca679e606196310aaac0666ec971431c3bc36ef642c895a0->leave($__internal_4a3a9d688a7d5c0cca679e606196310aaac0666ec971431c3bc36ef642c895a0_prof);

        
        $__internal_4ce4c9157b0dffd768eb18fd4eb9a9b41cbbb61219199ed260fbe0d69e31100d->leave($__internal_4ce4c9157b0dffd768eb18fd4eb9a9b41cbbb61219199ed260fbe0d69e31100d_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_e5b9e7cc1853259d2e679e1e817005c674972d58a630a2e5edda9c7fe2d050b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b9e7cc1853259d2e679e1e817005c674972d58a630a2e5edda9c7fe2d050b1->enter($__internal_e5b9e7cc1853259d2e679e1e817005c674972d58a630a2e5edda9c7fe2d050b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_1ffa0ccd25fe04641a87d34beb2ceceed8e17b5cf345c0221f31c9e6b899c2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ffa0ccd25fe04641a87d34beb2ceceed8e17b5cf345c0221f31c9e6b899c2b6->enter($__internal_1ffa0ccd25fe04641a87d34beb2ceceed8e17b5cf345c0221f31c9e6b899c2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1ffa0ccd25fe04641a87d34beb2ceceed8e17b5cf345c0221f31c9e6b899c2b6->leave($__internal_1ffa0ccd25fe04641a87d34beb2ceceed8e17b5cf345c0221f31c9e6b899c2b6_prof);

        
        $__internal_e5b9e7cc1853259d2e679e1e817005c674972d58a630a2e5edda9c7fe2d050b1->leave($__internal_e5b9e7cc1853259d2e679e1e817005c674972d58a630a2e5edda9c7fe2d050b1_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  51 => 14,  49 => 13,  44 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_color_selector_widget %}
    {{ block('choice_widget') }}
    {% spaceless %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#{{ id }}').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_color_selector_widget %}
", "SonataCoreBundle:Form:colorpicker.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/core-bundle/Resources/views/Form/colorpicker.html.twig");
    }
}
