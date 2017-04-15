<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4a0b92783d7b1376b7a84ae84c818d67414c5969b1d9cc4e21aedb92312fc75a extends Twig_Template
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
        $__internal_33773832dfa1df6f84e032f6c1f7e99460cdae4549bbfa582e8e6a012ab65336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33773832dfa1df6f84e032f6c1f7e99460cdae4549bbfa582e8e6a012ab65336->enter($__internal_33773832dfa1df6f84e032f6c1f7e99460cdae4549bbfa582e8e6a012ab65336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_070cf4eb473d97af28aeaec5f78b1fbc5de2122e06598d5455f946f626b0c772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070cf4eb473d97af28aeaec5f78b1fbc5de2122e06598d5455f946f626b0c772->enter($__internal_070cf4eb473d97af28aeaec5f78b1fbc5de2122e06598d5455f946f626b0c772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_33773832dfa1df6f84e032f6c1f7e99460cdae4549bbfa582e8e6a012ab65336->leave($__internal_33773832dfa1df6f84e032f6c1f7e99460cdae4549bbfa582e8e6a012ab65336_prof);

        
        $__internal_070cf4eb473d97af28aeaec5f78b1fbc5de2122e06598d5455f946f626b0c772->leave($__internal_070cf4eb473d97af28aeaec5f78b1fbc5de2122e06598d5455f946f626b0c772_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
