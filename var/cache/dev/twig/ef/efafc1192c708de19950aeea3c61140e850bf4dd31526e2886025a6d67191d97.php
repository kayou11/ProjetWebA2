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
        $__internal_77ac8edb89910ccf81b03b15ae15cbf570a69f53d1bd19282343d5258e1f2468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ac8edb89910ccf81b03b15ae15cbf570a69f53d1bd19282343d5258e1f2468->enter($__internal_77ac8edb89910ccf81b03b15ae15cbf570a69f53d1bd19282343d5258e1f2468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        $__internal_cbd59b751200659047b1a82046cca8b9f4b088fcba1b00e8d4f1522339c5ae94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd59b751200659047b1a82046cca8b9f4b088fcba1b00e8d4f1522339c5ae94->enter($__internal_cbd59b751200659047b1a82046cca8b9f4b088fcba1b00e8d4f1522339c5ae94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_77ac8edb89910ccf81b03b15ae15cbf570a69f53d1bd19282343d5258e1f2468->leave($__internal_77ac8edb89910ccf81b03b15ae15cbf570a69f53d1bd19282343d5258e1f2468_prof);

        
        $__internal_cbd59b751200659047b1a82046cca8b9f4b088fcba1b00e8d4f1522339c5ae94->leave($__internal_cbd59b751200659047b1a82046cca8b9f4b088fcba1b00e8d4f1522339c5ae94_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_df75d14ae7042dddbd5f522b648ff2ca915f0d97a794b1ae8fe5e6d9247bb80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df75d14ae7042dddbd5f522b648ff2ca915f0d97a794b1ae8fe5e6d9247bb80f->enter($__internal_df75d14ae7042dddbd5f522b648ff2ca915f0d97a794b1ae8fe5e6d9247bb80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_10dea0d3dd884b4a5e37727d50a33936c5dff2577a508ee1428e328efb7993b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10dea0d3dd884b4a5e37727d50a33936c5dff2577a508ee1428e328efb7993b5->enter($__internal_10dea0d3dd884b4a5e37727d50a33936c5dff2577a508ee1428e328efb7993b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

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
        
        $__internal_10dea0d3dd884b4a5e37727d50a33936c5dff2577a508ee1428e328efb7993b5->leave($__internal_10dea0d3dd884b4a5e37727d50a33936c5dff2577a508ee1428e328efb7993b5_prof);

        
        $__internal_df75d14ae7042dddbd5f522b648ff2ca915f0d97a794b1ae8fe5e6d9247bb80f->leave($__internal_df75d14ae7042dddbd5f522b648ff2ca915f0d97a794b1ae8fe5e6d9247bb80f_prof);

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
