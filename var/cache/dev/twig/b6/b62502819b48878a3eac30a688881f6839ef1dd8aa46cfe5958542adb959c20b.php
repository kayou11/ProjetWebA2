<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_5d475364074c5c9819a8d8a8d0bd0d47eb7eaef9d3cdb1ece7b61d2023cd060c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf61c4b323263dd143e74cbc6deeb961d16f103cb1d00c89da86e5e36bd64cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf61c4b323263dd143e74cbc6deeb961d16f103cb1d00c89da86e5e36bd64cfa->enter($__internal_cf61c4b323263dd143e74cbc6deeb961d16f103cb1d00c89da86e5e36bd64cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a2aab7ff7d1c95612ca484345f5774d5ac280e34a5ccc4c1d27261cd06c26a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2aab7ff7d1c95612ca484345f5774d5ac280e34a5ccc4c1d27261cd06c26a29->enter($__internal_a2aab7ff7d1c95612ca484345f5774d5ac280e34a5ccc4c1d27261cd06c26a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_cf61c4b323263dd143e74cbc6deeb961d16f103cb1d00c89da86e5e36bd64cfa->leave($__internal_cf61c4b323263dd143e74cbc6deeb961d16f103cb1d00c89da86e5e36bd64cfa_prof);

        
        $__internal_a2aab7ff7d1c95612ca484345f5774d5ac280e34a5ccc4c1d27261cd06c26a29->leave($__internal_a2aab7ff7d1c95612ca484345f5774d5ac280e34a5ccc4c1d27261cd06c26a29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
