<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_343f1e587664df5c958918a755649cccdb737e3cf9b0f9696129a348bbf2236a extends Twig_Template
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
        $__internal_cc2be5614aa3bdf61251f4d9137ee2a87e3d36d8066a2e7ad06695132a46df0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2be5614aa3bdf61251f4d9137ee2a87e3d36d8066a2e7ad06695132a46df0c->enter($__internal_cc2be5614aa3bdf61251f4d9137ee2a87e3d36d8066a2e7ad06695132a46df0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b135e335cfe8be0c41dd535016f9155e04017e15da4124f4aef96a04fddaaf9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b135e335cfe8be0c41dd535016f9155e04017e15da4124f4aef96a04fddaaf9c->enter($__internal_b135e335cfe8be0c41dd535016f9155e04017e15da4124f4aef96a04fddaaf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_cc2be5614aa3bdf61251f4d9137ee2a87e3d36d8066a2e7ad06695132a46df0c->leave($__internal_cc2be5614aa3bdf61251f4d9137ee2a87e3d36d8066a2e7ad06695132a46df0c_prof);

        
        $__internal_b135e335cfe8be0c41dd535016f9155e04017e15da4124f4aef96a04fddaaf9c->leave($__internal_b135e335cfe8be0c41dd535016f9155e04017e15da4124f4aef96a04fddaaf9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
