<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_31c1e63a1c0836efb6a103fbeba8c80eacc1fc64a84abebaae36e240fa2596e2 extends Twig_Template
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
        $__internal_799e299bf1f86d31596c00d78dc0428ff9cf37b0a633ff84fdce88c2166b6647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799e299bf1f86d31596c00d78dc0428ff9cf37b0a633ff84fdce88c2166b6647->enter($__internal_799e299bf1f86d31596c00d78dc0428ff9cf37b0a633ff84fdce88c2166b6647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        $__internal_a5828ead8af07a63ced779745d85cebc06e8810d935840a6ab101904f2f0fe7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5828ead8af07a63ced779745d85cebc06e8810d935840a6ab101904f2f0fe7a->enter($__internal_a5828ead8af07a63ced779745d85cebc06e8810d935840a6ab101904f2f0fe7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_799e299bf1f86d31596c00d78dc0428ff9cf37b0a633ff84fdce88c2166b6647->leave($__internal_799e299bf1f86d31596c00d78dc0428ff9cf37b0a633ff84fdce88c2166b6647_prof);

        
        $__internal_a5828ead8af07a63ced779745d85cebc06e8810d935840a6ab101904f2f0fe7a->leave($__internal_a5828ead8af07a63ced779745d85cebc06e8810d935840a6ab101904f2f0fe7a_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_b6cd6c2a262b9c28618fc944732dab073f83c17f3316474af538b1cb841c2d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6cd6c2a262b9c28618fc944732dab073f83c17f3316474af538b1cb841c2d74->enter($__internal_b6cd6c2a262b9c28618fc944732dab073f83c17f3316474af538b1cb841c2d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_f3a6d0b6a5ce00993f7bd764fa54db839d36b92c03de38d1f0093ebd774cfd77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a6d0b6a5ce00993f7bd764fa54db839d36b92c03de38d1f0093ebd774cfd77->enter($__internal_f3a6d0b6a5ce00993f7bd764fa54db839d36b92c03de38d1f0093ebd774cfd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

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
        
        $__internal_f3a6d0b6a5ce00993f7bd764fa54db839d36b92c03de38d1f0093ebd774cfd77->leave($__internal_f3a6d0b6a5ce00993f7bd764fa54db839d36b92c03de38d1f0093ebd774cfd77_prof);

        
        $__internal_b6cd6c2a262b9c28618fc944732dab073f83c17f3316474af538b1cb841c2d74->leave($__internal_b6cd6c2a262b9c28618fc944732dab073f83c17f3316474af538b1cb841c2d74_prof);

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
