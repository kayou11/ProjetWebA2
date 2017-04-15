<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_8da48a1c42e3c9af5d65ba89d1b60eea5b850518212eb8343bc7895f27e6e61d extends Twig_Template
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
        $__internal_05d4d7e85cf26410c2ec6dbc18bf70fafbbe319942e92e5f0126cc157538ef7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d4d7e85cf26410c2ec6dbc18bf70fafbbe319942e92e5f0126cc157538ef7a->enter($__internal_05d4d7e85cf26410c2ec6dbc18bf70fafbbe319942e92e5f0126cc157538ef7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        $__internal_5630a9b4ef50fbc39721a49a78b56aafe984efcb3d8dff08887fb2ce3b1f4205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5630a9b4ef50fbc39721a49a78b56aafe984efcb3d8dff08887fb2ce3b1f4205->enter($__internal_5630a9b4ef50fbc39721a49a78b56aafe984efcb3d8dff08887fb2ce3b1f4205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_05d4d7e85cf26410c2ec6dbc18bf70fafbbe319942e92e5f0126cc157538ef7a->leave($__internal_05d4d7e85cf26410c2ec6dbc18bf70fafbbe319942e92e5f0126cc157538ef7a_prof);

        
        $__internal_5630a9b4ef50fbc39721a49a78b56aafe984efcb3d8dff08887fb2ce3b1f4205->leave($__internal_5630a9b4ef50fbc39721a49a78b56aafe984efcb3d8dff08887fb2ce3b1f4205_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_d6728539b6a243f0057681aa5a5ecdae04330cd0c57543d74c47126d57a0018d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6728539b6a243f0057681aa5a5ecdae04330cd0c57543d74c47126d57a0018d->enter($__internal_d6728539b6a243f0057681aa5a5ecdae04330cd0c57543d74c47126d57a0018d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_b5b5066a2b8053bb715dc7b05d82091fa19caca624443efbe47fbdc5a878b890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b5066a2b8053bb715dc7b05d82091fa19caca624443efbe47fbdc5a878b890->enter($__internal_b5b5066a2b8053bb715dc7b05d82091fa19caca624443efbe47fbdc5a878b890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

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
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
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
        
        $__internal_b5b5066a2b8053bb715dc7b05d82091fa19caca624443efbe47fbdc5a878b890->leave($__internal_b5b5066a2b8053bb715dc7b05d82091fa19caca624443efbe47fbdc5a878b890_prof);

        
        $__internal_d6728539b6a243f0057681aa5a5ecdae04330cd0c57543d74c47126d57a0018d->leave($__internal_d6728539b6a243f0057681aa5a5ecdae04330cd0c57543d74c47126d57a0018d_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  51 => 14,  49 => 13,  44 => 12,  26 => 11,);
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
", "SonataCoreBundle:Form:colorpicker.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sonata-project/core-bundle/Resources/views/Form/colorpicker.html.twig");
    }
}
