<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_acc276c9741f9df36fe723e627a0d7f2ca84172ba2dd92f650879ff592652b08 extends Twig_Template
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
        $__internal_89d3405958d000dcf7c2ea5dc633c57191930abe46f948219b44d43352b39a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d3405958d000dcf7c2ea5dc633c57191930abe46f948219b44d43352b39a4d->enter($__internal_89d3405958d000dcf7c2ea5dc633c57191930abe46f948219b44d43352b39a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_26f8ccf4f290cdc0e7469c8f39018f2c0c1fc8ed1c76c0fe11362dc3e94b8146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f8ccf4f290cdc0e7469c8f39018f2c0c1fc8ed1c76c0fe11362dc3e94b8146->enter($__internal_26f8ccf4f290cdc0e7469c8f39018f2c0c1fc8ed1c76c0fe11362dc3e94b8146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_89d3405958d000dcf7c2ea5dc633c57191930abe46f948219b44d43352b39a4d->leave($__internal_89d3405958d000dcf7c2ea5dc633c57191930abe46f948219b44d43352b39a4d_prof);

        
        $__internal_26f8ccf4f290cdc0e7469c8f39018f2c0c1fc8ed1c76c0fe11362dc3e94b8146->leave($__internal_26f8ccf4f290cdc0e7469c8f39018f2c0c1fc8ed1c76c0fe11362dc3e94b8146_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
